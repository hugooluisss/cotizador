$(document).ready(function(){
	if ($("#dvLista").length){
		getLista();
	
		$("#panelTabs li a[href=#add]").click(function(){
			$("#frmAdd").get(0).reset();
			$("#id").val("");
			$("form:not(.filter) :input:visible:enabled:first").focus();
		});
	}
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
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
				$("#id").val(), 
				$("#txtNombre").val(), 
				$("#txtEmail").val(),
				$("#txtRFC").val(),
				$("#txtDireccion").val(),
				$("#txtRUT").val(),
				$("#txtRazonSocial").val(),
				$("#txtLocalidad").val(),
				$("#txtTelefono").val(),
				$("#txtCelular").val(),
				$("#txtObservaciones").val(),
				$("#selTipo").val(),
				{
					after: function(datos){
						if (datos.band){
							if ($("#dvLista").length){
								getLista();
								$("#frmAdd").get(0).reset();
								$('#panelTabs a[href="#listas"]').tab('show');
							}else{
								alert("Muchas gracias por actualizar sus datos dentro del sistema...");
								location.href = "index.php?mod=logout";
							}
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
		
	function getLista(){
		$.get("?mod=listaClientes", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TCliente;
					obj.del($(this).attr("cliente"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idCliente);
				$("#txtNombre").val(el.nombre);
				$("#txtRFC").val(el.rfc);
				$("#txtDireccion").val(el.direccion);
				$("#txtEmail").val(el.email);
				$("#txtRUT").val(el.rut);
				$("#txtRazonSocial").val(el.razonsocial);
				$("#txtLocalidad").val(el.localidad);
				$("#txtTelefono").val(el.tel);
				$("#txtCelular").val(el.cel);
				$("#txtObservaciones").val(el.observaciones);
				$("#selTipo").val(el.tipo);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=crm]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				location.href = "?mod=crm&id=" + el.idCliente;
			});
			
			var tblClientes = $("#tblClientes").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
			
			$("#btnTodosEmail").click(function(){
				tblClientes.page.len(-1).draw();
				$("[email]").prop("checked", true);
				
				tblClientes.page.len(10).draw();
			});
			
			$("#btnTodasEmpresas").click(function(){
				tblClientes.page.len(-1).draw();
				$("[tipo=M]").prop("checked", true);
				
				tblClientes.page.len(10).draw();
			});
			
			$("#btnTodasPersonas").click(function(){
				tblClientes.page.len(-1).draw();
				$("[tipo=F]").prop("checked", true);
				
				tblClientes.page.len(10).draw();
			});
			
			$("#btnLimpiarEmail").click(function(){
				tblClientes.page.len(-1).draw();
				$("[email]").removeAttr("checked");
				
				tblClientes.page.len(10).draw();
			});
			
			$("#btnGenerarEmail").click(function(){
				tblClientes.page.len(-1).draw();
				var s = "";
				$("[email]:checked").each(function(){
					var l = $(this);
					if (l.attr("email") != '')
						s += l.attr("email") + ", ";
				});
				
				tblClientes.page.len(10).draw();
				
				$("#winEmailLista").find(".modal-body").html(s);
				$("#winEmailLista").modal();
			});
		});
	}
});