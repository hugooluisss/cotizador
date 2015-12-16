$(document).ready(function(){
	$("#btnLstClientes").click(function(){
		$("#winClientes").modal();
	});
	
	$("#txtCliente").autocomplete({
		source: "index.php?mod=cclientes&action=autocomplete",
		minLength: 2,
		select: function(e, el){
			$("#txtCliente").val(el.item.label);
			$("#txtCliente").attr("idCliente", el.item.identificador);
		}
	});
	
	$("#btnNuevoCliente").click(function(){
		$("#winModificarCliente").modal();
		$("#winModificarCliente #frmAdd").reset();
		$("#winModificarCliente #txtNombre").focus();
	});
	getClientes();
});

function getClientes(){
	$.get("?mod=clientesListaBusqueda", function( data ) {
		$("#winClientes .modal-body").html(data);
		
		$("#tblClientes").DataTable({
			"responsive": true,
			"language": espaniol,
			"paging": true,
			"lengthChange": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
		
		$("#winClientes #tblClientes tr").click(function(){
			var el =  jQuery.parseJSON($(this).attr("cliente"));
			
			$("#txtCliente").val(el.nombre);
			$("#txtCliente").attr("idCliente", el.idCliente);
			
			$("#winClientes").modal("hide");
		});
	});
}