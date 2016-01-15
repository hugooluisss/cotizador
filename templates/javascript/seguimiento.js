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
			    var tpl = $('<li class="working list-group-item">'+
			            '<input type="text" value="0" data-width="48" data-height="48" data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" />'+'<p></p><span></span><a class="btn btn-primary btn-xs vista">Vista previa</a><a class="btn btn-danger btn-xs eliminar">Eliminar</a></li>' );
			            
			     // Append the file name and file size
			    tpl.find('p').text(data.files[0].name).append('<i>' + formatFileSize(data.files[0].size) + '</i>');
			    tpl.find("a.eliminar").click(function(){
			    	if (confirm("¿Seguro?")){
				    	$.post('?mod=cseguimiento&action=delfile', {
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
		        data.context.find('canvas').remove();
		        data.context.find('input').remove();
		        data.context.prepend($("<img />",{
		        	src: 'repositorio/pedidos/orden_' + $("#pedido").val() + '/' + data.files[0].name
		        }));
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
	
	
	$("#btnImprimir").click(function(){
		$.post("?mod=cseguimiento&action=imprimir", {
				"pedido": $("#pedido").val()
			},function(data){
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
});