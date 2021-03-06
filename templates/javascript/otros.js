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
			txtNombre: "required",
			txtDescripcion: "required",
			txtPrecio: {
				required: true,
				number: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
			txtDescripcion: "Este campo es necesario",
			txtPrecio: {
				required: "Este campo es necesario",
				number: "Solo se aceptan números"
			}
		},
		submitHandler: function(form){
			var obj = new TOtros;
			obj.add(
				$("#id").val(), 
				$("#txtNombre").val(), 
				$("#txtPrecio").val(), 
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
		$.get("?mod=listaOtros", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TOtros;
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
				$("#txtNombre").val(el.nombre);
				$("#txtPrecio").val(el.precio);
				$("#txtDescripcion").html(el.descripcion);
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