TCotizacion = function(){
	var self = this;
	
	this.add = function(concepto, cantidad, precio){
		if (concepto == '')
			return false;
		else{
			var s = '<tr><td style="text-align: center"><input type="checkbox" value="" class="eliminar"></td><td>'+ concepto + '</td><td style="text-align: right">' + cantidad + '</td><td><input class="form-control descuento" setAction="0" precio="' + precio + '" value="0" anterior="0"></td><td style="text-align: right" class="precio">' + precio + '</td></tr>';
			$("table#cotizacion > tbody:last").append(s);
			
			$(".descuento[setAction=0]").each(function(){
				var el = $(this);
				el.attr("setAction", 1);
				el.change(function(){
					if (el.val() == '')
						el.val("0.00");
					if (el.val() > 100 || el.val() < 0){
						alert("El descuento no puede ser mayor al 100% ni menor al 0%");
						el.val(el.attr("anterior"));
					}else{
						var valor = parseFloat(el.val()).toFixed(2);
						el.attr("anterior", valor);
						el.val(valor);
						
						var precio = el.attr("precio") - el.attr("precio") * valor / 100;
						precio = parseFloat(precio).toFixed(2);
						el.parent().parent().find(".precio").html(precio);
						
						self.total();
					}
				});
			});
			
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