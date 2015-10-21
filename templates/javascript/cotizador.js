//Tallas
$(document).ready(function(){
	$("#selRopa").change(function(){
		$("#dvRopa").html("");
	});
	
	$("#btnBuscarTallas").click(function(){
		$.get("?mod=cotizador_tallas&id=" + $("#selRopa").val(), function( data ) {
			$("#dvTallas").html(data);
		});
	});
});