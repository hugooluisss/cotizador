//Tallas
var cotizacion = "";
cotizacion = new TCotizacion();
$(document).ready(function(){
	$("#txtRopa").change(function(){
		$("#dvTallas").html("");
	});
	
	$("[data-mask]").inputmask({
		mask: '9999-99-99'
	});
	
	$("#txtRopa").autocomplete({
		source: "index.php?mod=ccotizacion&action=autocompleteRopa",
		minLength: 2,
		select: function(e, el){
			$("#txtRopa").val(el.item.label);
			$("#txtRopa").attr("idRopa", el.item.identificador);
			
			$("#dvTallas").html("");
		}
	});
	
	$("#tblWinRopa tbody tr").click(function(){
		$("#txtRopa").val($(this).children(".descripcion").html() + "Marca: " + $(this).children(".marca").html());
		$("#txtRopa").attr("idRopa", $(this).children(".identificador").html());
		
		$("#winRopa").modal("hide");
		$("#dvTallas").html("");
	});
	
	$("#tblWinRopa").DataTable({
		"responsive": true,
		"language": espaniol,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
	
	$("#btnBuscarTallas").click(function(){
		$("#dvTallas").html("Actualizando, por favor espere un momento...");
		
		$.get("?mod=cotizador_tallas&id=" + $("#txtRopa").attr("idRopa"), function( data ) {
			$("#dvTallas").html(data);
			
			$("#ropa #dvTallas .panel .panel-body input.talla").change(function(){
				var precio = 0;
				var cantidad = 0;
				var concepto = "";
				$("#ropa #dvTallas .panel .panel-body input.talla").each(function(){
					var el = $(this);
					
					precio += Number(parseFloat(el.attr("precio") * el.val()).toFixed(2));
					cantidad += parseInt(el.val());
					if (el.val() > 0)
						concepto += (concepto == ''?'':", ") + el.attr("nombre") + " (" + el.val() + " - " + parseFloat(el.attr("precio") * el.val()).toFixed(2) + ")";
				});
				precio = parseFloat(precio).toFixed(2);
				
				$("#talla_concepto").val($("#txtRopa").val() + ": " + concepto);
				$("#talla_cantidad").val(cantidad);
				$("#talla_precio").val(parseFloat(precio).toFixed(2));
			});
			
			$("#btnAgregarRopa").click(function(){
				if(cotizacion.add($("#talla_concepto").val(), $("#talla_cantidad").val(), $("#talla_precio").val())){
					$("#dvTallas").html("");
					$('#panelTabs a[href="#cotizacion"]').tab('show');
				}else
					alert("Ocurrió un error al agregar a la cotización");
			});
		});
	});
});

//Serigrafia
$(document).ready(function(){
	$("#btnBuscarPrecioSerigrafia").click(function(){
		var obj = new TSerigrafia;
		obj.getPrecio($("#selPosicion").val(), $("#selTamano").val(), $("#selColores").val(), $("#txtCantidad").val(), {
			before: function(){
				$("#frmAddSerigrafia").prop("disabled", true);
			},
			after: function(datos){
				$("#frmAddSerigrafia").prop("disabled", false);
				
				if (datos.band == ""){
					$("#serigrafia_concepto").val("DP " + $("#frmAddSerigrafia select#selPosicion option:selected" ).attr("nombre") + " (Tamaño: " + $("#frmAddSerigrafia select#selTamano option:selected" ).attr("nombre") + "; No de colores: " + $("#frmAddSerigrafia select#selColores").val() + "; P. U.: " + datos.precio + ")");
					$("#serigrafia_cantidad").val($("#frmAddSerigrafia #txtCantidad").val());
					$("#serigrafia_precio").val(parseFloat(datos.precio * $("#frmAddSerigrafia #txtCantidad").val()).toFixed(2));
					
					$("#btnAgregarSerigrafia").focus();
				}
			}
		});
	});
	
	$("#btnAgregarSerigrafia").click(function(){
		if(cotizacion.add($("#serigrafia_concepto").val(), $("#serigrafia_cantidad").val(), $("#serigrafia_precio").val())){
			$("#serigrafia_concepto").val("");
			$("#serigrafia_cantidad").val("");
			$("#serigrafia_precio").val("");
			
			$("#frmAddSerigrafia #txtCantidad").val("");
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

//Serigrafia digital
$(document).ready(function(){
	$("#seriDig #txtPU").val($("#seriDig select#selItem option:selected" ).attr("precio"));
	
	$("#seriDig #selItem").change(function(){
		$("#seriDig #txtPU").val($("#seriDig select#selItem option:selected" ).attr("precio"));
	});
	
	$("#seriDig #txtCantidad").change(function(){
		$("#seriDig #txtCantidad").val(parseInt($("#seriDig #txtCantidad").val()));
		$("#seriDig #txtTotal").val(parseFloat($("#seriDig select#selItem option:selected" ).attr("precio") * $("#seriDig #txtCantidad").val()).toFixed(2));
	});
	
	$("#seriDig #btnAgregar").click(function(){
		var concepto = $("#seriDig select#selItem option:selected" ).attr("nombre") + " (P. U.: " + $("#seriDig #txtPU").val() + ")";
	
		if(cotizacion.add(concepto, $("#seriDig #txtCantidad").val(), $("#seriDig #txtTotal").val())){
			$("#seriDig #txtCantidad").val("");
			$("#seriDig #txtTotal").val("");
			
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

//Vinilo
$(document).ready(function(){
	$("#vinilo #txtPU").val($("#vinilo select#selItem option:selected" ).attr("precio"));
	
	$("#vinilo #selItem").change(function(){
		$("#seriDig #txtPU").val($("#seriDig select#selItem option:selected" ).attr("precio"));
	});
	
	$.each(["#vinilo #txtAncho", "#vinilo #txtAlto", "#vinilo #txtUnidades"], function(i, el){
		$(el).change(function(){
			$(this).val(parseFloat($(this).val()).toFixed(2));
			
			calcularCantidad();
		});
	});
	
	$("#vinilo #btnAgregar").click(function(){
		var concepto = "Vinilo " + $("#vinilo select#selItem option:selected" ).attr("nombre") + " (" + $("#vinilo #txtAlto").val() + " x " + $("#vinilo #txtAncho").val() + " P. U.: " + $("#vinilo #txtPU").val() + ")";
		if ($("#vinilo #txtTotal").val() == '')
			alert("Ingresar valores para realizar el cálculo");
		else if(cotizacion.add(concepto, $("#vinilo #txtUnidades").val(), $("#vinilo #txtTotal").val())){
			$("#vinilo #txtCantidad").val("");
			$("#vinilo #txtTotal").val("");
			$("#vinilo #txtAncho").val("");
			$("#vinilo #txtAlto").val("");
			$("#vinilo #txtUnidades").val("");
			
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
	
	function calcularCantidad(){
		var cantidad = $("#vinilo #txtAncho").val() * $("#vinilo #txtAlto").val();
		$("#vinilo #txtCantidad").val(cantidad);
		
		$("#vinilo #txtCantidad").val(parseFloat($("#vinilo #txtCantidad").val()).toFixed(2));
		$("#vinilo #txtTotal").val(parseFloat($("#vinilo select#selItem option:selected" ).attr("precio") * $("#vinilo #txtCantidad").val() * $("#vinilo #txtUnidades").val()).toFixed(2));
	}
});

//Otros
$(document).ready(function(){
	$("#adicionales #txtPU").val($("#adicionales select#selItem option:selected" ).attr("precio"));
	
	$("#adicionales #selItem").change(function(){
		$("#adicionales #txtPU").val($("#adicionales select#selItem option:selected" ).attr("precio"));
	});
	
	$("#adicionales #btnAgregar").click(function(){
		var concepto = $("#adicionales select#selItem option:selected" ).attr("nombre") + " ( P. U.: " + $("#adicionales #txtPU").val() + ")";
	
		if(cotizacion.add(concepto, 1, $("#adicionales #txtPU").val())){
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

//Estampado
$(document).ready(function(){
	$("#estampado #txtPU").val($("#estampado select#selItem option:selected" ).attr("precio"));
	
	$("#estampado #selItem").change(function(){
		$("#estampado #txtPU").val($("#estampado select#selItem option:selected" ).attr("precio"));
	});
	
	$("#estampado #txtCantidad").change(function(){
		$("#estampado #txtCantidad").val(parseInt($("#estampado #txtCantidad").val()));
		$("#estampado #txtTotal").val(parseFloat($("#estampado select#selItem option:selected" ).attr("precio") * $("#estampado #txtCantidad").val()).toFixed(2));
	});
	
	$("#estampado #btnAgregar").click(function(){
		var concepto = "Estampado " + $("#estampado select#selItem option:selected" ).attr("nombre") + " (P. U.: " + $("#estampado #txtPU").val() + ")";
	
		if(cotizacion.add(concepto, $("#estampado #txtCantidad").val(), $("#estampado #txtTotal").val())){
			$("#estampado #txtCantidad").val("");
			$("#estampado #txtTotal").val("");
			
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

//Otras tecnicas
$(document).ready(function(){
	$("#transfer #txtCantidad").change(function(){
		$("#transfer #txtCantidad").val(parseInt($("#transfer #txtCantidad").val()));
		$("#transfer #txtTotal").val(parseFloat($("#transfer #txtPU").val() * $("#transfer #txtCantidad").val()).toFixed(2));
	});
	
	$("#transfer #btnAgregar").click(function(){
		var concepto = "Transfer" + " ( P. U.: " + $("#transfer #txtPU").val() + ")";
	
		if(cotizacion.add(concepto, $("#transfer #txtCantidad").val(), parseFloat($("#transfer #txtTotal").val()).toFixed(2))){
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

$(document).ready(function(){
	$("#sublimacion #txtCantidad").change(function(){
		$("#sublimacion #txtCantidad").val(parseInt($("#sublimacion #txtCantidad").val()));
		$("#sublimacion #txtTotal").val(parseFloat($("#sublimacion #txtPU").val() * $("#sublimacion #txtCantidad").val()).toFixed(2));
	});
	
	$("#sublimacion #btnAgregar").click(function(){
		var concepto = "Sublimación" + " ( P. U.: " + $("#sublimacion #txtPU").val() + ")";
	
		if(cotizacion.add(concepto, $("#sublimacion #txtCantidad").val(), parseFloat($("#sublimacion #txtTotal").val()).toFixed(2))){
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

//General
$(document).ready(function(){
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
							$("#txtEmail").val($("#winModificarCliente #txtEmail").val());
							$("#txtNombre").val($("#winModificarCliente #txtNombre").val());
							$("#txtNombre[cliente]").attr("data", datos.data);
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
    
    $("#winModificarCliente #frmAdd #btnReset").click(function(){
    	$("#winModificarCliente #frmAdd").get(0).reset();
    	$("#winModificarCliente").modal('hide');
    });
    
	$("#eliminarDeCotizacion").click(function(){
		$("table#cotizacion .eliminar").each(function(){
			if ($(this).prop("checked"))
				$(this).parent().parent().remove();
		});
		
		cotizacion.total();
	});
	
	$("#tblClientes tr[cliente]").click(function(){
		var el = jQuery.parseJSON($(this).attr("cliente"));
		
		$('#winClientes').modal('hide');
		
		$("#txtNombre[cliente]").val(el.nombre);
		$("#txtEmail[cliente]").val(el.email);
		$("#txtNombre[cliente]").attr("idCliente", el.idCliente);
		
		$("#btnModificarCliente").show();
		
		$("#txtNombre[cliente]").attr("data", $(this).attr("cliente"));
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
	
	$("#btnModificarCliente").hide();
	$("#btnModificarCliente").click(function(){
		var el = jQuery.parseJSON($("#txtNombre[cliente]").attr("data"));
		
		$("#winModificarCliente #frmAdd #txtNombre").val(el.nombre);
		$("#winModificarCliente #frmAdd #txtRUT").val(el.rut);
		$("#winModificarCliente #frmAdd #txtRazonSocial").val(el.razonsocial);
		$("#winModificarCliente #frmAdd #txtDireccion").val(el.direccion);
		$("#winModificarCliente #frmAdd #txtLocalidad").val(el.localidad);
		$("#winModificarCliente #frmAdd #txtTelefono").val(el.tel);
		$("#winModificarCliente #frmAdd #txtCelular").val(el.cel);
		$("#winModificarCliente #frmAdd #txtEmail").val(el.email);
		$("#winModificarCliente #frmAdd #txtRFC").val(el.rfc);
		$("#winModificarCliente #frmAdd #txtObservaciones").val(el.observaciones);
		$("#winModificarCliente #frmAdd #id").val(el.idCliente);
	});
	
	$("#frmAddCliente").submit(function(){
		if ($("#frmAddCliente #txtNombre").val() == ''){
			alert("Escribe el nombre del cliente");
			$("#frmAddCliente #txtNombre").focus();
		}else{
			var obj = new TCliente;
			
			obj.add("",	$("#frmAddCliente #txtNombre").val(), $("#frmAddCliente #txtEmail").val(), "", "", "", "", "", "", "", "",{
				after: function(datos){
					if (datos.band){
						$('#winClientes').modal('hide');
		
						$("#txtNombre[cliente]").val($("#frmAddCliente #txtNombre").val());
						$("#txtNombre[cliente]").attr("idCliente", datos.cliente);
						$("#txtEmail[cliente]").val($("#frmAddCliente #txtEmail").val());
						
						$("#frmAddCliente #txtNombre").val("");
						$("#frmAddCliente #txtEmail").val("");
												
						$("#frmAddCliente").get(0).reset();
					}else{
						alert("Upps... " + datos.mensaje);
					}
				}
			});
		}
	});
	
	$("#txtCantidadCosto").change(function(){
		$("#txtCantidadCosto").val(parseInt($("#txtCantidadCosto").val()));
		$("#txtCantidadCosto").attr("cambiar", "no");
		
		var obj = new TCotizacion;
		obj.total();
	});
	
	$("#nuevaCotizacion").click(function(){
		if(confirm("¿Seguro?"))
			location.reload();
	});
	
	$("#saveCotizacion").click(function(){
		total = parseFloat($("table#cotizacion #total").html());
		
		if (total < 0.01)
			alert("La cotización está vacia");
		else if($("#txtNombre[cliente]").val() == ''){
			alert("Selecciona un cliente");
		}else{
			var cotizacion = new Array();
		
			$("table#cotizacion > tbody > tr").each(function(){
				var tr = $(this);
				
				var tds = tr.children("td");
				var el = new Object();
				el.concepto = tds.eq(1).html();
				el.cantidad = tds.eq(2).html();
				el.descuento = tds.eq(3).children("input.descuento").val();
				el.neto = tds.eq(3).children("input.descuento").attr("precio");
				el.total = tds.eq(4).html();
				cotizacion.push(el);
			});
			
			var encabezado = new Object();
			encabezado.cliente = $("#txtNombre[cliente]").attr("idCliente");
			encabezado.subtotal = $("table#cotizacion #subtotal").html();
			encabezado.total = $("table#cotizacion #total").html();
			encabezado.adicional = $("#selCargo").val();
			encabezado.fecha = $("#txtFecha").val();
			encabezado.comentarios = $("#txtObservaciones").val();
			encabezado.unidades = $("#txtCantidadCosto").val();
			
			var obj = new TCotizacion;
			
			obj.save($("#idCotizacion").val(), JSON.stringify(encabezado), JSON.stringify(cotizacion), {
				after: function(datos){
					if (datos.band == true){
						$("#idCotizacion").val(datos.cotizacion);
						alert("Cotización guardada con éxito");
						
						generarPDF();
					}
						
				}
			});
		}
	});
	
	$("#selCargo").change(function(){
		var obj = new TCotizacion;
		obj.total();
	});
	
	function getCotizaciones(){
		$("#winCotizaciones .modal-body").html("Actualizando lista...");
		$.get("?mod=listaCotizaciones", function( data ) {
			$("#winCotizaciones .modal-body").html(data);
			
			$("#tblCotizaciones").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
			
			$("#winCotizaciones .modal-body tr[cotizacion]").click(function(){
				var obj = new TCotizacion;
				
				$('#winCotizaciones').modal('hide');
				var el = $(this);
				obj.setId($(this).attr("cotizacion"),{
					before: function(){
						
					},
					after: function(cotizacion){
						$("#idCotizacion").val(cotizacion.idCotizacion);
						$("#txtNombre[cliente]").val(cotizacion.nombre);
						$("#txtNombre[cliente]").attr("idCliente", cotizacion.idCliente);
						$("#txtEmail[cliente]").val(cotizacion.email);
						$("#selCargo").val(parseInt(cotizacion.adicional));
						$("#txtEmail[cliente]").val(cotizacion.email);
						$("#txtCantidadCosto").val(cotizacion.unidades);
						$("#txtCantidadCosto").attr("cambiar", "no");
						
						$("#btnModificarCliente").show();
						
						obj.getComentarios(el.attr("cotizacion"), {
							after: function(data){
								$("#txtObservaciones").val(data.comentarios);
							}
						});
						
						obj.total();
					}
				});
			});
		});
	}
	
	$("#lstCotizaciones").click(function(){
		getCotizaciones();
	});
	
	getCotizaciones();
	
	var ventana = undefined;
	$("#pdf").click(function(){
		generarPDF();
	});
	
	function generarPDF(){
		if ($("#idCotizacion").val() == '')
			alert("Guarda primero los cambios de la cotización");
		else{
			var obj = new TCotizacion;
			obj.print($("#idCotizacion").val(), "no", {
				after: function(data){
					if (data.band){
						if (ventana == undefined || ventana == null)
							ventana = window.open(data.documento,'_blank');
						else{
							try{
								ventana.location.href = data.documento;
							}catch(er){
								ventana = window.open(data.documento,'_blank');
							}
						}
							
							
						ventana.focus();
					}
				}
			});
		}
	}
	
	$("#email").click(function(){
		if ($("#idCotizacion").val() == '')
			alert("Guarda primero los cambios de la cotización");
		else if ($("#txtEmail[cliente]").val() == '')
			alert("No se puede enviar un correo electrónico al cliente por que no se indicó este. Guarde su cotización y haga los cambios en el catálogo de clientes para poder continuar");
		else{
			var obj = new TCotizacion;
			obj.print($("#idCotizacion").val(), "si", {
				after: function(data){
					if (data.band){
						alert("La cotización fue enviada por correo electrónico");
					}else
						alert("No se pudo enviar el correo electrónico, por favor comuniquese con el administrador del sistema");
				}
			});
		}
	});
});