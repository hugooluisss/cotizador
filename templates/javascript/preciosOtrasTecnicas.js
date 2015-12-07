$(document).ready(function(){
	$("#txtPrecio").val($("#selLimite option:selected").attr('precio'));
	
	$("#selLimite").change(function(){
		$("#txtPrecio").val($("#selLimite option:selected").attr('precio'));
	});
	
	$("#txtPrecio").change(function(){
		var obj = new TOtrasTecnicas;
		var el = $("#txtPrecio");
		var opt = $("#selLimite option:selected");
		
		el.val(parseFloat(el.val()).toFixed(2));
		
		obj.setPrecio(
			$("#id").val(),
			$("#selLimite").val(),
			el.val(),
			{
				before: function(){
					el.prop( "disabled", true);
				},
				after: function(datos){
					el.prop( "disabled", false);
					if (datos.band){
						opt.attr("precio", el.val());
					}else{
						alert("Upps... " + datos.mensaje);
						el.focus();
						el.val(opt.attr("precio"));
					}
				}
			}
		);
	});
});