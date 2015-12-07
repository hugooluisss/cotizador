TOtrasTecnicas = function(){
	var self = this;
	
	this.add = function(id,	descripcion, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cTecnicas&action=add', {
				"id": id,
				"descripcion": descripcion,
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.setPrecio = function(item, limite, precio, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cotros&action=setPrecio', {
				"item": item,
				"limite": limite,
				"precio": precio
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.getPrecio = function(item, cantidad, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cTecnicas&action=getPrecio', {
				"item": item,
				"cantidad": cantidad
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	}
};