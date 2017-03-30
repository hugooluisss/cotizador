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
			txtNombre: "required"
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
		},
		submitHandler: function(form){
			var obj = new TCampania;
			obj.add(
				$("#id").val(), 
				$("#txtNombre").val(),
				$("#selDisponible").val(),
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
		$.get("?mod=listaCampania", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TCampania;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idCampania);
				$("#txtNombre").val(el.nombre);
				$("#selDisponible").val(el.disponible);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=reiniciar]").click(function(){
				if (confirm("¿Seguro?")){
					var el = jQuery.parseJSON($(this).attr("datos"));
					
					var obj = new TCampania;
					obj.reiniciar(el.idCampania, {
						after: function(data){
							getLista();
						}
					});
				}
				
			});
			
			$("#tblDatos").DataTable({
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