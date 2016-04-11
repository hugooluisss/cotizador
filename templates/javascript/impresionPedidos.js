$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtLimite: "required",
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
			txtLimite: "Indica el límite de pedidos por dia que pueden tener esta técnica"
		},
		submitHandler: function(form){
			var obj = new TImpresionPedidos;
			obj.add(
				$("#id").val(), 
				$("#txtNombre").val(), 
				$("#txtLimite").val(),
				{
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
		
	function getLista(){
		$.get("?mod=listadoImpresiones", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TImpresionPedidos;
					obj.del($(this).attr("item"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idImpresion);
				$("#txtNombre").val(el.nombre);
				$("#txtLimite").val(el.limite);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblImpresiones").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	};
});