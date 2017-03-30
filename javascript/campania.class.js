TCampania = function(){
	var self = this;
	
	this.add = function(id, nombre, disponible, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('ccampania', {
				"id": id, 
				"nombre": nombre,
				"disponible": disponible,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('ccampania', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				console.log("Ocurrió un error al eliminar la campaña");
			}
		}, "json");
	};
	
	this.reiniciar = function(id, fn){
		$.post('ccampania', {
			"id": id,
			"action": "reiniciar"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				console.log("Ocurrió un error al reiniciar la campaña");
			}
		}, "json");
	};
};