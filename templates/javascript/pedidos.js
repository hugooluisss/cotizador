var ventanaPedido;
$(document).ready(function(){
	getLista();
	if ($("#perfil").val() == 3){
		$("#nuevo input, #nuevo textarea, #nuevo button, #nuevo select").each(function(){
			$(this).attr('disabled', 'disabled');
		});
		
		$("#nuevo input:file").removeAttr("disabled");
	}
		
	
	if ($("#perfil").val() == 3)
		$('#panelTabs a[href="#lista"]').tab('show');
	else
		$('#panelTabs a[href="#nuevo"]').tab('show');
		
	$("#txtFecha, #txtEntrega").datepicker( "option", "dateFormat", "yy-mm-dd" );

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
	
	$("#winModificarCliente #txtNombre").autocomplete({
		source: "index.php?mod=cclientes&action=autocomplete",
		minLength: 2,
		select: function(e, el){
			$("#winModificarCliente #txtNombre").val(el.item.nombre);
			$("#winModificarCliente #id").val(el.item.identificador);
			$("#winModificarCliente #txtRUT").val(el.item.rut);
			$("#winModificarCliente #txtRazonSocial").val(el.item.razonsocial);
			$("#winModificarCliente #txtRFC").val(el.item.rfc);
			$("#winModificarCliente #txtEmail").val(el.item.email);
			$("#winModificarCliente #txtDireccion").val(el.item.direccion);
			$("#winModificarCliente #txtLocalidad").val(el.item.localidad);
			$("#winModificarCliente #txtTelefono").val(el.item.tel);
			$("#winModificarCliente #txtCelular").val(el.item.cel);
			$("#winModificarCliente #txtObservaciones").val(el.item.observaciones);
		}
	});
	
	getClientes();
	
	$.each(["total", "sena"], function(index, elemento){
		$("#" + elemento).change(function(){
			var el = $(this);
			el.val(parseFloat(el.val()).toFixed(2));
			
			$("#saldo").val($("#total").val() - $("#sena").val());
			$("#saldo").val(parseFloat($("#saldo").val()).toFixed(2));
		});
	});
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
   
//Remeras
$(document).ready(function(){
	$("#txtNombreRemera").autocomplete({
		source: "index.php?mod=cropa&action=autocomplete",
		minLength: 2,
		select: function(e, el){
			var obj = new TPedido;
			obj.addRemera(el.item.identificador, $("#pedido").val(), {
				after: function(data){
					$("#txtNombreRemera").val("");
				}
			});
		}
	});
	
	$("#winRemeras #tblRemeras button[action=seleccionar]").click(function(){
		var el =  jQuery.parseJSON($(this).attr("item"));
		
		$("#txtNombreRemera").val("");
		var obj = new TPedido;
		obj.addRemera(el.idItem);
		
		$("#winRemeras").modal("hide");
	});
		
	$("#tblRemeras").DataTable({
		"responsive": true,
		"language": espaniol,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
	
	$("#btnLstRemeras").click(function(){
		$("#winRemeras").modal();
	});
});

//Guardar
$(document).ready(function(){
	$("#btnGuardar").click(function(){
		var band = true;
		if ($("#txtCliente").attr("idCliente") == '' || $("#txtCliente").attr("idCliente") === undefined){
			alert("Debes de indicar un cliente");
			$("#winClientes").modal();
			band = false;
		}
		
		if ($("#txtFecha").val() == '' || $("#txtRegistro").val() == ''){
			alert("La fecha de registro y entrega son necesarias");
			$("#txtFecha").focus();
			band = false;
		}
		
		if ($("#txtPrecio").val() == ''){
			alert("Indica un precio");
			$("#txtPrecio").focus();
			
			band = false;
		}
		
		if (band){
			var obj = new TPedido;
			var entrega = $("#txtEntrega").val() + " " + $("#selHora").val() + ":" + $("#selMinuto").val() + ":00";
			
			//todas las tallas
			var tallas = new Array();
			$(".totalTalla").each(function(){
				if ($(this).val() > 0){
					var talla = new Object();
					
					talla.id = $(this).attr("idTalla");
					talla.cantidad = $(this).val();
					
					tallas.push(talla);
				}
			});
			
			var impresiones = new Array();
			$(".serviciosImpresion:checked").each(function(){
				var impresion = new Object();
				
				impresion.id = $(this).val();
				impresiones.push(impresion);
			});
			
			var entregables = new Array();
			$(".entregables:checked").each(function(){
				var entregable = new Object();
				
				entregable.id = $(this).val();
				entregables.push(entregable);
			});
			
			obj.guardar(
				$("#pedido").val(), 
				$("#selEstado").val(), 
				$("#txtCliente").attr("idCliente"), 
				$("#txtRegistro").val(), 
				entrega, 
				$("#txtEntregables").val(), 
				$("#selDiseno").val(), 
				$("#txtDiseno").val(), 
				$("#txtColores").val(), 
				$("#txtObservaciones").val(), 
				$("#total").val(), 
				$("#sena").val(), 
				JSON.stringify(tallas), 
				JSON.stringify(impresiones), 
				JSON.stringify(entregables), {
					before: function(){
						
					},
					after: function(data){
						if (data.band){
							$("#pedido").val(data.pedido);
							$("#upload").attr("action", "?mod=cpedidos&action=uploadfile&pedido=" + data.pedido);
							getLista();
							alert("Pedido guardado");
							if (ventanaPedido === undefined)
								var ventanaPedido = window.open(data.documento, '_blank');
							else
								ventanaPedido.document.href = data.documento;
							
							ventanaPedido.focus();
						}
					}
				});
		}
	});
});


$(document).ready(function(){
	$("#txtInicioBus, #txtFinBus").datepicker( "option", "dateFormat", "yy-mm-dd" );
	
	$("#btnBuscar").click(function(){
		getLista();
	});
	
	$("#btnNuevoPedido").click(function(){
		if (confirm("¿Seguro?")){
			$("#pedido").val("");
			$("#txtCliente").val("");
			$("#txtCliente").attr("idCliente", "");
			var f = new Date();
			fecha = f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate();
			$("#txtFecha").val(fecha);
			$("#txtEntrega").val(fecha);
			$("#selHora").val(0);
			$("#selMinuto").val(0);
			$("#selEstado").val($("#selEstado option:first").val());
			
			$(".serviciosImpresion").prop("checked", false);
			$(".entregables").prop("checked", false);
			$("#txtEntregable").val("");
			
			var tabla = new TPedido();
			
			tabla.clearTable();
			
			$("#selDiseno").val($("#selDiseno option:first").val());
			$("#txtDiseno").val("");
			$("#txtColor1").val("");
			$("#txtColor2").val("");
			$("#txtColor3").val("");
			$("#txtColor4").val("");
			$("#txtObservaciones").val("");
			$("#total").val("0.00");
			$("#sena").val("0.00");
			
			$("#saldo").val($("#total").val() - $("#sena").val());
			$("#saldo").val(parseFloat($("#saldo").val()).toFixed(2));
		}
	});
});

function getLista(){
	$.get("?mod=listaPedidos&inicio=" + $("#txtInicioBus").val() + "&fin=" + $("#txtFinBus").val() + "&tipo=" + $("#selTipoBusqueda").val(), function( data ) {
		$("#dvLista").html(data);
		
		$("[action=eliminar]").click(function(){
			if(confirm("¿Seguro?")){
				var obj = new TPedido;
				obj.del($(this).attr("pedido"), {
					after: function(data){
						getLista();
					}
				});
			}
		});
		
		$("[action=modificar]").click(function(){
			$.post("?mod=cpedidos&action=getData", {
					"id": $(this).attr("pedido")
				},function(datos){
					$("#pedido").val(datos.idPedido);
					$("#upload").attr("action", "?mod=cpedidos&action=uploadfile&pedido=" + datos.idPedido);
					$("#txtCliente").val(datos.nombreCliente);
					$("#txtCliente").attr("idCliente", datos.idCliente);
					$("#txtFecha").val(datos.registro);
					$("#txtEntrega").val(datos.entrega);
					$("#selHora").val(datos.horaEntrega);
					$("#selMinuto").val(datos.minutosEntrega);
					$("#selEstado").val(datos.idEstado);
					
					$(".serviciosImpresion").prop("checked", false);
					datos.impresion.forEach(function(el){
						$(".serviciosImpresion[value=" + el.idImpresion + "]").prop("checked", true);
					});
					
					$(".entregables").prop("checked", false);
					datos.entregables.forEach(function(el){
						$(".entregables[value=" + el.idEntregable + "]").prop("checked", true);
					});
					
					$("#txtEntregable").val(datos.entregable);
					
					var tabla = new TPedido();
					
					tabla.clearTable();
					datos.remeras.forEach(function(el){
						tabla.addRemera(el.idItem, datos.idPedido, {});
					});
					
					$("#selDiseno").val(datos.diseno);
					$("#txtDiseno").val(datos.observacionDiseno);
					$("#txtColores").val(datos.colores);
					$("#txtObservaciones").val(datos.observaciones);
					$("#total").val(datos.precio);
					$("#sena").val(datos.anticipo);
					
					$("#saldo").val($("#total").val() - $("#sena").val());
					$("#saldo").val(parseFloat($("#saldo").val()).toFixed(2));
					
					datos.archivos.forEach(function(el){
						if ($("#perfil").val() == 3)
							var tpl = $('<li class="list-group-item">'+''+'<p></p><span></span><a class="btn btn-primary btn-xs vista">Vista previa</a></li>' );
						else
							var tpl = $('<li class="list-group-item">'+''+'<p></p><span></span><a class="btn btn-primary btn-xs vista">Vista previa</a><a class="btn btn-danger btn-xs eliminar">Eliminar</a></li>' );
			            
			            // Append the file name and file size
						tpl.find('p').text(el);
						tpl.find("a.eliminar").click(function(){
							if (confirm("¿Seguro?")){
								$.post('?mod=cpedidos&action=delfile', {
									"pedido": $("#pedido").val(),
									"archivo": el
								}, function(data){
									if(data.band)
										tpl.remove();
								}, "json");
							}
						});
			    
						tpl.find("a.vista").click(function(){
							url = 'repositorio/pedidos/orden_' + $("#pedido").val() + '/' + el;
							var win = window.open(url, '_blank');
							win.focus();
						});
						
						 // Add the HTML to the UL element
						data.context = tpl.appendTo($('#upload .elementos'));
					});
							
					$('#panelTabs a[href="#nuevo"]').tab('show');
				},
				"json"
			);
		});
		
		$("#tblPedidos").DataTable({
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

$(document).ready(function(){
	$('#upload').fileupload({
		// This function is called when a file is added to the queue
		add: function (e, data) {
			if($("#pedido").val() == ''){
				if ($("#perfil").val() == 3){
					alert("No puedes subir archivos a una orden vacia, selecciona una de la lista de capturadas");
					$('#panelTabs a[href="#lista"]').tab('show');
				}else{
					alert("Primero debes de crear la orden, indica los datos principales y presiona guardar para despues poder subir archivos");
					$("#txtCliente").focus();
				}
			}else{
				//This area will contain file list and progress information.
				
				if ($("#perfil").val() == 3)
					var tpl = $('<li class="working list-group-item">'+
			            '<input type="text" value="0" data-width="48" data-height="48" data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" />'+'<p></p><span></span><a class="btn btn-primary btn-xs vista">Vista previa</a>' );
			    else
			    	var tpl = $('<li class="working list-group-item">'+
			            '<input type="text" value="0" data-width="48" data-height="48" data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" />'+'<p></p><span></span><a class="btn btn-primary btn-xs vista">Vista previa</a><a class="btn btn-danger btn-xs eliminar">Eliminar</a></li>' );
			            
			     // Append the file name and file size
			    tpl.find('p').text(data.files[0].name).append('<i>' + formatFileSize(data.files[0].size) + '</i>');
			    tpl.find("a.eliminar").click(function(){
			    	if (confirm("¿Seguro?")){
				    	$.post('?mod=cpedidos&action=delfile', {
					    	"pedido": $("#pedido").val(),
					    	"archivo": data.files[0].name
					    }, function(data){
					    	if(data.band)
					    		tpl.remove();
						}, "json");
			    	}
			    });
			    
			    tpl.find("a.vista").click(function(){
			    	url = 'repositorio/pedidos/orden_' + $("#pedido").val() + '/' + data.files[0].name;
			    	var win = window.open(url, '_blank');
			    	win.focus();
			    });
			
			     // Add the HTML to the UL element
				data.context = tpl.appendTo($('#upload .elementos'));
				
				// Initialize the knob plugin. This part can be ignored, if you are showing progress in some other way.
				tpl.find('input').knob();
				
				// Listen for clicks on the cancel icon
				tpl.find('span').click(function(){
					if(tpl.hasClass('working')){
						jqXHR.abort();
					}
					tpl.fadeOut(function(){
						tpl.remove();
					});
				});
			
				// Automatically upload the file once it is added to the queue
				var jqXHR = data.submit();
			}
		},
		progress: function(e, data){
		    // Calculate the completion percentage of the upload
		    var progress = parseInt(data.loaded / data.total * 100, 10);
		
		    // Update the hidden input field and trigger a change
		    // so that the jQuery knob plugin knows to update the dial
		    data.context.find('input').val(progress).change();
		
		    if(progress == 100){
		        data.context.removeClass('working');
		    }
		},
		fail: function(){
			alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
			
			console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
		}
	});
	
	//Helper function for calculation of progress
	function formatFileSize(bytes) {
		if (typeof bytes !== 'number') {
		    return '';
		}
		
		if (bytes >= 1000000000) {
		    return (bytes / 1000000000).toFixed(2) + ' GB';
		}
		
		if (bytes >= 1000000) {
		    return (bytes / 1000000).toFixed(2) + ' MB';
		}
		return (bytes / 1000).toFixed(2) + ' KB';
	}
});