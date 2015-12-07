$(document).ready(function(){
	getLista();
	getListaLimites();
	
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
			txtNombre: {
				required: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtNombre: {
				required: "Este campo es necesario"
			}
		},
		submitHandler: function(form){
			var obj = new TOtrasTecnicas;
			obj.add(
				$("#id").val(), 
				$("#txtDescripcion").val(), 
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
		$.get("?mod=listaTecnicas", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TOtrasTecnicas;
					obj.del($(this).attr("item"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idItem);
				$("#txtDescripcion").val(el.descripcion);
				$("#txtNombre").val(el.nombre);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=precios]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				location.href = "?mod=tecnicasPrecios&id=" + el.idItem;
			});
		
			$("#tblOtros").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": true,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	$("#btnAddLimite").click(function(){
		var obj = new TLimite();
		obj.add(
			$("#txtInferior").val(),
			7,
			{
				after: function(datos){
					if (datos.band){
						getListaLimites();
						$("#txtInferior").val("");
						$("#txtInferior").focus();
					}else{
						alert("Upps... " + datos.mensaje);
					}
				}
			}
		);
	});

	function getListaLimites(){
		$.get("?mod=listaLimites&tipo=7", function( data ) {
			$("#dvListaLimites").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TLimite;
					obj.del($(this).attr("item"), {
						after: function(data){
							getListaLimites();
						}
					});
				}
			});
			
			$("#tblLimites").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": false,
				"info": true,
				"autoWidth": false
			});
		});
	}
});