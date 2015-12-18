TCliente = function(){
	var self = this;
	
	this.add = function(id,	nombre, email, rfc, direccion, rut, razonSocial, localidad, telefono, celular, observaciones, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cclientes&action=add', {
				"id": id,
				"nombre": nombre,
				"email": email,
				"rfc": rfc, 
				"direccion": direccion,
				"rut": rut,
				"razonSocial": razonSocial,
				"localidad": localidad,
				"telefono": telefono,
				"celular": celular,
				"observaciones": observaciones
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=cclientes&action=del', {
			"cliente": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al cliente");
			}
		}, "json");
	};
	
	this.getData = function(id, event){
		if (event.before !== undefined)
			event.before();
			
		$.get('?mod=cclientes&action=getData&id=' + id, function(data){
			if (event.after !== undefined)
				event.after(data);

		}, "json");
	}
};