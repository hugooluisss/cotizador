$(document).ready(function(){
	console.log("Cargando script");
	$("form:not(.filter) :input:visible:enabled:first").focus();
	
	$("#frmLogin").validate({
		debug: true,
		rules: {
			txtUsuario: "required",
			txtPass: "required"
		},
		wrapper: 'span', 
		messages: {
			txtUsuario: "Este campo es necesario",
			txtPass: "Este campo es necesario"
		},
		submitHandler: function(form){
			var obj = new TUsuario;
			obj.login($("#txtUsuario").val(), $("#txtPass").val(), {
				after: function(datos){
					if (datos.band)
						location.href = "?mod=bienvenida";
					else{
						if (datos.mensaje == undefined)
							alert("Los datos son incorrectos, corrigelos y vuelve a intentarlo");
						else
							alert(datos.mensaje);
					}
				}
			});
        }

    });
    
    $("#btnSeguimientoPedidos").click(function(){
    	$("#winPedidos").modal();
    	$("#winPedidos #txtCodigo").select();
    });
    
    $("#btnConsultarPedido").click(function(){
    	if ($("#winPedidos #txtCodigo").val() == '' || $("#winPedidos #txtEmail").val() == '')
    		alert("Todos los campos son necesarios");
    	else{
	    	var obj = new TUsuario;
	    	
	    	obj.getPedido($("#winPedidos #txtCodigo").val(), $("#winPedidos #txtEmail").val(), {
	    		before: function(){
		    		$("#winPedidos input").prop("disable", true);
	    		},
	    		after: function(result){
		    		$("#winPedidos input").prop("disable", false);
		    		
		    		if (result.band){
			    		alert("Bienvenido(a) " + result.cliente + ", iniciaremos con la carga de sus datos");
			    		
			    		window.location = "?mod=vistaCliente&orden=" + btoa($("#winPedidos #txtCodigo").val());
		    		}else
		    			alert("Datos no encontrados");
	    		}
	    	});
    	}
    });
	
});