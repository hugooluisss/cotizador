TTalla = function(){
	var self = this;
	
	this.add = function(id,	item, nombre, adicional, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=ctalla&action=add', {
				"id": id,
				"item": item,
				"nombre": nombre,
				"adicional": adicional
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=ctalla&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar la talla");
			}
		}, "json");
	};
};