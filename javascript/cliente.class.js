TCliente = function(){
	var self = this;
	
	this.add = function(id,	nombre, email, rfc, direccion, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cclientes&action=add', {
				"id": id,
				"nombre": nombre,
				"email": email,
				"rfc": rfc, 
				"direccion": direccion
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
};