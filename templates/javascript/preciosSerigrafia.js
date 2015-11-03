$(document).ready(function(){
	getLista();
	
	$("#selLimite").change(function(){
		getLista();
	});
	function getLista(){
		$("#lista").html("Actualizando...");
		$.get("?mod=definicionPrecios&limite=" + $("#selLimite").val() + "&posicion=" + $("#id").val(), function( data ) {
			$("#lista").html(data);
			
			$(".precio").change(function(){
				var obj = new TSerigrafia;
				var el = $(this);
				obj.setPrecio(
					$("#id").val(),
					el.attr("color"),
					el.attr("tamano"),
					$("#selLimite").val(),
					parseFloat(el.val()).toFixed(2),
					{
						before: function(){
							el.prop( "disabled", true);
						},
						after: function(datos){
							el.prop( "disabled", false);
							if (datos.band){
								el.attr("anterior", datos.precio);
								el.val(parseFloat(datos.precio).toFixed(2));
							}else{
								alert("Upps... " + datos.mensaje);
								el.focus();
								el.val(el.attr("anterior"));
							}
						}
					}
				);
			});
		});
	}
});