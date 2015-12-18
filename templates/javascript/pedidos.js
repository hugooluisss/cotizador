$(document).ready(function(){
	$("#txtFecha, #txtEntrega").inputmask("9999-99-99");

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
		//$("#winModificarCliente #frmAdd").reset();
		$("#winModificarCliente #frmAdd input, #winModificarCliente #frmAdd textarea").each(function(){
			$(this).val("");
		});
		$("#winModificarCliente #txtNombre").focus();
	});
	getClientes();
});

function getClientes(){
	$.get("?mod=clientesListaBusqueda", function( data ) {
		$("#winClientes .modal-body").html(data);
		
		$("#winClientes #tblClientes button[action=seleccionar]").click(function(){
			var el =  jQuery.parseJSON($(this).attr("cliente"));
			
			$("#txtCliente").val(el.nombre);
			$("#txtCliente").attr("idCliente", el.idCliente);
			$("#winClientes").modal("hide");
		});
		
		$("#winClientes #tblClientes button[action=modificar]").click(function(){
			var cliente = new TCliente();
			
			cliente.getData($(this).attr("cliente"), {
				after: function(data){
					$("#winModificarCliente #txtRUT").val(data.rut);
					$("#winModificarCliente #txtRazonSocial").val(data.razonsocial);
					$("#winModificarCliente #txtNombre").val(data.nombre);
					$("#winModificarCliente #txtDireccion").val(data.direccion);
					$("#winModificarCliente #txtLocalidad").val(data.localidad);
					$("#winModificarCliente #txtTelefono").val(data.tel);
					$("#winModificarCliente #txtCelular").val(data.cel);
					$("#winModificarCliente #txtRFC").val(data.rfc);
					$("#winModificarCliente #txtEmail").val(data.email);
					$("#winModificarCliente #txtObservaciones").val(data.observaciones);
					$("#winModificarCliente #id").val(data.idCliente);
					
					$("#winClientes").modal("hide");
					$("#winModificarCliente").modal();
				}
			});
		});
		
		$("#tblClientes").DataTable({
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

//ModificarCliente
$(document).ready(function(){
	$("#winModificarCliente #frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtTelefono: {
				required : false,
				minlength: 7,
				maxlength: 15,
				number: true
			},
			txtCelular: {
				required : false,
				minlength: 7,
				maxlength: 15,
				number: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
			txtTelefono: "Solo acepta número de entre 7 y 15 dígitos",
			txtCelular: "Solo acepta número de entre 7 y 15 dígitos"
		},
		submitHandler: function(form){
			var obj = new TCliente;
			obj.add(
				$("#winModificarCliente #id").val(), 
				$("#winModificarCliente #txtNombre").val(), 
				$("#winModificarCliente #txtEmail").val(),
				$("#winModificarCliente #txtRFC").val(),
				$("#winModificarCliente #txtDireccion").val(),
				$("#winModificarCliente #txtRUT").val(),
				$("#winModificarCliente #txtRazonSocial").val(),
				$("#winModificarCliente #txtLocalidad").val(),
				$("#winModificarCliente #txtTelefono").val(),
				$("#winModificarCliente #txtCelular").val(),
				$("#winModificarCliente #txtObservaciones").val(),
				{
					after: function(datos){
						if (datos.band){
							getClientes();
							
							$("#txtCliente").val($("#winModificarCliente #txtNombre").val());
							$("#txtCliente").attr("idCliente", $("#winModificarCliente #id").val());
			
							$("#winModificarCliente #frmAdd").get(0).reset();
							$("#winModificarCliente").modal('hide');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
		}
    });
});
    