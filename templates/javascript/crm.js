$(document).ready(function(){
	$("[data-inputmask]").each(function(){
		var el = $(this);
		el.inputmask("9999-99-99");
	});
	
	$("#tblPedidos").find("[action=imprimir]").click(function(){
		var el = $(this)
		el.prop("disabled", true);
		
		$.post("?mod=cpedidos&action=imprimir", {
				"pedido": $(this).attr("pedido")
			},function(data){
				el.prop("disabled", false);
				if (data.documento != ''){
					if (ventanaPedido === undefined)
						var ventanaPedido = window.open(data.documento, '_blank');
					else
						ventanaPedido.document.href = data.documento;
						
					ventanaPedido.focus();
				}else
					alert("El documento no se pudo generar");
			}, "json");
	});
	
	$("#tblPedidosCRM").DataTable({
		"responsive": true,
		"language": espaniol,
		"searching": false,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
	
	$("#selTipo").change(function(){
		$.post("ccrm", {
			"action": "setClasificacion",
			"id": $("#id").val(),
			"clasificacion": $(this).val()
		}, function(resp){
			if (!resp.band)
				alert("No se pudo realizar la actualización");
		}, "json");
	});
	
	$("#btnComentario").click(function(){
		var s = prompt("Escribe tu comentario");
		
		if (s != ''){
			$.post("ccrm", {
				"action": "addComentario",
				"id": $("#id").val(),
				"comentario": s
			}, function(resp){
				if (!resp.band)
					alert("No se pudo registrar el comentario");
				else
					location.reload();
			}, "json");
		}
	});
	
	$("#btnClientes").click(function(){
		location.href = "clientes";
	});
	
	$("#btnAvisos").click(function(){
		getListaAvisos();
		$("#winAvisos").modal();
	});
	
	$("#winAvisos").find("#btnAgregar").click(function(){
		$("#winAddAviso").modal("show");
	});
	
	$("#winAddAviso").on('show.bs.modal', function() {
		$("#winAvisos").modal("hide");
	}).on('hidden.bs.modal', function(){
		$("#winAvisos").modal("show");
	});
	
	$("#frmAddAviso").validate({
		debug: true,
		rules: {
			txtMensaje: "required",
			txtFecha: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
			form = $(form);
			var obj = new TAviso;
			obj.add(
				form.find("#id").val(),
				$("#cliente").val(),
				form.find("#txtFecha").val(),
				form.find("#txtMensaje").val(),
				{
					before: function(){
						form.find("[type=submit]").prop("disabled", true);	
					},
					after: function(datos){
						form.find("[type=submit]").prop("disabled", false);	
						if (datos.band){
							getListaAvisos();
							$("#frmAddAviso").get(0).reset();
							$("#winAddAviso").modal("hide");
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
    
    function getListaAvisos(){
	    $.post("listaAvisos", {
				"cliente": $("#id").val()
			},function(data){
				$("#dvListaAvisos").html(data);
				
				$("#winAvisos").find("[action=modificar]").click(function(){
					var el = jQuery.parseJSON($(this).attr("datos"));
					
					$("#winAddAviso").find("#id").val(el.idAviso);
					$("#winAddAviso").find("#txtFecha").val(el.alerta);
					$("#winAddAviso").find("#txtMensaje").val(el.mensaje);
					$("#winAddAviso").modal("show");
				});
				
				
				$("#winAvisos").find("[action=eliminar]").click(function(){
					if(confirm("¿Seguro?")){
						var obj = new TAviso;
						obj.del($(this).attr("identificador"), {
							after: function(data){
								getListaAvisos();
							}
						});
					}
				});
				
				$("#winAvisos").find("#tblDatos").DataTable({
					"responsive": true,
					"language": espaniol,
					"paging": false,
					"lengthChange": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
			}
		);
	}
});