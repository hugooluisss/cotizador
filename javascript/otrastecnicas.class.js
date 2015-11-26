TOtrasTecnicas = function(){
	var self = this;
	
	this.add = function(id,	precio, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cTecnicas&action=add', {
				"id": id,
				"precio": precio,
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
};