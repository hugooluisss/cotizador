TAviso = function(){
	var self = this;
	
	this.add = function(id, cliente, alerta, mensaje, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cavisos', {
				"id": id, 
				"alerta": alerta,
				"cliente": cliente,
				"mensaje": mensaje,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('cavisos', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				console.log("Ocurrió un error al eliminar el aviso");
			}
		}, "json");
	};
};