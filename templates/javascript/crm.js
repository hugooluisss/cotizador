$(document).ready(function(){
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
	$("#tblPedidos").DataTable({
		"responsive": true,
		"language": espaniol,
		"searching": false,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
});