TSerigrafiaDigital = function(){
	var self = this;
	
	this.add = function(id,	nombre, precio, descripcion, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cserigrafiadigital&action=add', {
				"id": id,
				"nombre": nombre,
				"precio": precio,
				"descripcion": descripcion
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=cserigrafiadigital&action=del', {
			"item": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el item");
			}
		}, "json");
	};
};