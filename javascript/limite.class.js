TLimite = function(){
	var self = this;
	
	this.add = function(inferior, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=climites&action=add', {
				"inferior": inferior
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=climites&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el limite");
			}
		}, "json");
	};
};