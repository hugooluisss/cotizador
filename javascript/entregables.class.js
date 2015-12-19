TEntregable = function(){
	var self = this;
	
	this.add = function(id,	nombre, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=centregables&action=add', {
				"id": id,
				"nombre": nombre
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=centregables&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el entregable");
			}
		}, "json");
	};
};