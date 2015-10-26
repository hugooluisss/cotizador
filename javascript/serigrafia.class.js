TSerigrafia = function(){
	var self = this;
	
	this.add = function(id,	nombre, descripcion, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cserigrafia&action=add', {
				"id": id,
				"nombre": nombre,
				"descripcion": descripcion
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=cserigrafia&action=del', {
			"item": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar la posición");
			}
		}, "json");
	};
	
	this.setPrecio = function(item, color, tam, limite, precio, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cserigrafia&action=setPrecio', {
				"item": item,
				"color": color,
				"tam": tam,
				"limite": limite,
				"precio": precio
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.getPrecio = function(posicion, tamano, colores, cantidad, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cserigrafia&action=getPrecio', {
				"posicion": posicion,
				"colores": colores,
				"tam": tamano,
				"cantidad": cantidad
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	}
};