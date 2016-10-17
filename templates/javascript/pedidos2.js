var ventanaPedido;
$(document).ready(function(){
	getLista();
	
	$("#rootwizard").find(".navbar").find("li").css({"width": (99 / $("#rootwizard").find(".navbar").find("li").length) + "%"});
	
	
	
	$('#rootwizard').bootstrapWizard({
		onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard').find('.progress-bar').css({"width": $percent + "%"}).attr("aria-valuenow", $percent);
		}
	});
});

function getLista(){
	$.get("?mod=listaPedidos&inicio=" + $("#txtInicioBus").val() + "&fin=" + $("#txtFinBus").val() + "&tipo=" + $("#selTipoBusqueda").val() + "&tecnica=" + $("#selTecnica").val(), function( data ) {
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
					limpiar();
					$("#pedido").val(datos.idPedido);
					$("#upload").attr("action", "?mod=cpedidos&action=uploadfile&pedido=" + datos.idPedido);
					$("#upload2").attr("action", "?mod=cpedidos&action=uploadfile2&pedido=" + datos.idPedido);
					$("#txtCliente").val(datos.nombreCliente);
					$("#txtCliente").attr("idCliente", datos.idCliente);
					$("#txtFecha").val(datos.registro);
					$("#txtEntrega").val(datos.entrega);
					$("#txtEntregaCliente").val(datos.entregaCliente);
					$("#selHora").val(datos.horaEntrega);
					$("#selMinuto").val(datos.minutosEntrega);
					$("#selEstado").val(datos.idEstado);
					$("#txtNombreArchivo").val(datos.archivo);
					
					$("#selFormaEntrega").val(datos.formaEntrega);
					$("#txtDireccionEnvio").val(datos.direccionEnvio);
					
					$(".serviciosImpresion").prop("checked", false);
					datos.impresion.forEach(function(el){
						$(".serviciosImpresion[value=" + el.idImpresion + "]").prop("checked", true);
						$(".serviciosImpresion[value=" + el.idImpresion + "]").attr("excede", el.excede);
					});
					
					$(".entregables").prop("checked", false);
					datos.entregablesList.forEach(function(el){
						$(".entregables[value=" + el.idEntregable + "]").prop("checked", true);
					});
					
					$("#txtEntregables").val(datos.entregables);
					
					var tabla = new TPedido();
					
					tabla.clearTable();
					datos.remeras.forEach(function(el){
						tabla.addRemera(el.idItem, datos.idPedido, {});
					});
					
					datos.numerosLetras.forEach(function(el){
						tabla.addNumerosLetras(el.letras, el.numeros, el.talla, {});
					});
					
					//$(".totalNumeroLetras").html(tabla.countNumerosLetras() + " registrados");
					if (tabla.countNumerosLetras() > 0)
						$("#btnNombresNumeros").parent().css({"border": "red 2px solid", "border-radius": "10px"});
					else
						$("#btnNombresNumeros").parent().css({"border": "", "border-radius": ""});
					
					$("#selFuente").val(datos.fuente);
					$("#txtColores").val(datos.colores);
					$("#txtObservaciones").val(datos.observaciones);
					$("#total").val(datos.precio);
					$("#sena").val(datos.anticipo);
					
					$("#selEnvoltorio").val(datos.envoltorio);
					
					$("#selPosicion").val(datos.posicion);
					$("#txtPosicion").val(datos.observacionPosicion);
					
					$("#saldo").val($("#total").val() - $("#sena").val());
					$("#saldo").val(parseFloat($("#saldo").val()).toFixed(2));
					
					$("#imgCapturaPantalla").prop("src", "repositorio/capturas/img_" + $("#pedido").val() + ".jpg");
					
					datos.formasPago.forEach(function(el){
						campo = $(".formasPago[campo="+ el.campo + "]");
						if (campo.attr("type") == 'checkbox'){
							if (el.valor == 'on')
								campo.prop("checked", true);
							else
								campo.prop("checked", false);
						}else
							campo.val(el.valor);
					});
					
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
		
		$("[action=imprimir]").click(function(){
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
	
	
	$('#upload2').fileupload({
		// This function is called when a file is added to the queue
		add: function (e, data) {
			if($("#pedido").val() == ''){
				alert("Primero debes de crear la orden, indica los datos principales y presiona guardar para despues poder subir archivos");
				$("#txtCliente").focus();
			}else{
			
				// Automatically upload the file once it is added to the queue
				var jqXHR = data.submit();
			}
		},
		progress: function(e, data){
		    // Calculate the completion percentage of the upload
		    var progress = parseInt(data.loaded / data.total * 100, 10);
		
		    // Update the hidden input field and trigger a change
		    // so that the jQuery knob plugin knows to update the dial
		    //data.context.find('input').val(progress).change();
		
		    if(progress == 100){
		        //data.context.removeClass('working');
		        $("#imgCapturaPantalla").prop("src", "repositorio/capturas/img_" + $("#pedido").val() + ".jpg");
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

$(document).ready(function(){
	$('#tabNombresNumeros a[href="#lista"]').tab('show');
	
	$("#btnNombresNumeros").click(function(){
		$("#winNombresNumeros").modal();
	});
	
	$("#frmNumerosLetras").submit(function(){
		var obj = new TPedido;
		
		var ventana = $("#winNombresNumeros");
		obj.addNumerosLetras($("#winNombresNumeros #txtNombre").val(), $("#winNombresNumeros #txtNumero").val(), $("#winNombresNumeros #selTalla").val(), {
			after: function(){
				$("#winNombresNumeros #txtNombre").val("");
				$("#winNombresNumeros #txtNumero").val("");
				$("#winNombresNumeros #selTalla").val($("#winNombresNumeros #selTalla option:first").val());
				
				$('#tabNombresNumeros a[href="#listaNombresNumeros"]').tab('show');
				
				//$(".totalNumeroLetras").html(obj.countNumerosLetras() + " registrados");
				if (obj.countNumerosLetras() > 0)
					$("#btnNombresNumeros").parent().css({"border": "red 2px solid", "border-radius": "10px"});
				else
					$("#btnNombresNumeros").parent().css({"border": "", "border-radius": ""});
			},
			modificar: function(el){
				$("#winNombresNumeros #txtNombre").val(el.attr("nombre"));
				$("#winNombresNumeros #txtNumero").val(el.attr("numero"));
				$("#winNombresNumeros #selTalla").val(el.attr("talle"));
				
				$('#tabNombresNumeros a[href="#nuevoNombreNumero"]').tab('show');
				
				el.attr("modificar", "si");
			}
		});
	});
});