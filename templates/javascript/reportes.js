$(document).ready(function(){
	$(".btnBuscar").click(function(){
		getRemeras();
		if ($(".panel-group #ventasTotales").length > 0)
			getVentasTotales();
			
		if ($(".panel-group #tecnicas").length > 0)
			getTecnicas();
			
		if ($(".panel-group #tipoClientes").length > 0)
			getTipoClientes();
	});
	getRemeras();
	if ($(".panel-group #ventasTotales").length > 0)
		getVentasTotales();
	
	if ($(".panel-group #tecnicas").length > 0)
		getTecnicas();
		
	if ($(".panel-group #tipoClientes").length > 0)
	getTipoClientes();
	
	function getRemeras(){
		$.post("?mod=rventaremeras", {
			"inicio": $("#txtInicio").val(),
			"fin": $("#txtFin").val(),
			"tipo": $("#selTipo").val(),
			"estado": $("#selEstado").val()
		}, function(data) {
			$(".panel-group #remeras").html(data);
			
			$("#tblRemeras").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	function getVentasTotales(){
		$.post("?mod=rventastotales", {
			"inicio": $("#txtInicio").val(),
			"fin": $("#txtFin").val(),
			"tipo": $("#selTipo").val(),
			"estado": $("#selEstado").val()
		}, function(data) {
			$(".panel-group #ventasTotales").html(data);
			
			$("#tblVentas").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	function getTecnicas(){
		$.post("?mod=rtecnicas", {
			"inicio": $("#txtInicio").val(),
			"fin": $("#txtFin").val(),
			"tipo": $("#selTipo").val(),
			"estado": $("#selEstado").val()
		}, function(data) {
			$(".panel-group #tecnicas").html(data);
			
			$("#tblTecnicas").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	function getTipoClientes(){
		$.post("?mod=rtipoclientes", {
			"inicio": $("#txtInicio").val(),
			"fin": $("#txtFin").val(),
			"tipo": $("#selTipo").val(),
			"estado": $("#selEstado").val()
		}, function(data) {
			$(".panel-group #tipoClientes").html(data);
			
			$("#tblTipoClientes").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});