//Tallas
$(document).ready(function(){
	$("#selRopa").change(function(){
		$("#dvRopa").html("");
	});
	
	$("#btnBuscarTallas").click(function(){
		$.get("?mod=cotizador_tallas&id=" + $("#selRopa").val(), function( data ) {
			$("#dvTallas").html(data);
			
			$("#addRopa").click(function(){
				var total = 0;
				var tallas = "";
				var cantidad = 0;
				$("#dvTallas .panel .panel-body input.talla").each(function(){
					total += parseFloat($(this).attr("precio")) * $(this).val();
					tallas += (tallas == ""?"":", ") + $(this).attr('nombre') + " (" + $(this).val() + ")";
					cantidad += $(this).val();
				});
				
				$("#tblCotizacion > tbody:last-child").append('<tr><td>' + $("#selRopa option:selected").html() + '</td><td>' + tallas + '</td><td>' + cantidad + '</td><td>' + total + '</td></tr>');
			});
		});
	});
});