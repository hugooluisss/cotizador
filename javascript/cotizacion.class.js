TCotizacion = function(){
	var self = this;
	
	this.add = function(concepto, cantidad, precio){
		if (concepto == '')
			return false;
		else{
			var s = '<tr><td style="text-align: center"><input type="checkbox" value="" class="eliminar"></td><td>'+ concepto + '</td><td style="text-align: right">' + cantidad + '</td><td style="text-align: right" class="precio">' + precio + '</td></tr>';
			$("table#cotizacion > tbody:last").append(s);
			
			self.total();
			return true;
		}
	};
	
	this.total = function(){
		var total = 0;
		
		$("table#cotizacion .precio").each(function(){
			total += parseFloat($(this).html());
		});
		
		$("table#cotizacion #total").html(total.toFixed(2));
	}
};