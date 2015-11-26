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
	
	$("#frmAdd #txtPrecio").change(function(){
		$(this).val(parseFloat($(this).val()).toFixed(2));
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtPrecio: {
				required: true,
				number: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtPrecio: {
				required: "Este campo es necesario",
				number: "Solo se aceptan números"
			}
		},
		submitHandler: function(form){
			var obj = new TOtrasTecnicas;
			obj.add(
				$("#id").val(), 
				$("#txtPrecio").val(), 
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
				$("#txtPrecio").val(el.precio);
				$("#txtNombre").val(el.nombre);
				$('#panelTabs a[href="#add"]').tab('show');
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
});