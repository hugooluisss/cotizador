TImpresionPedidos = function(){
	var self = this;
	
	this.add = function(id,	nombre, limite, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cCatalogoPedidos&action=add', {
				"id": id,
				"nombre": nombre,
				"limite": limite
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=cCatalogoPedidos&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar la descripción de la impresión");
			}
		}, "json");
	};
	
	this.getLimite = function(id, fecha, fn){
		$.post('?mod=cCatalogoPedidos&action=getLimite', {
			"id": id,
			"fecha": fecha
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				console.log("No se pudo obtener el límite superior");
			}
		}, "json");
	}
};