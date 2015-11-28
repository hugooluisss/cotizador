TCotizacion = function(){
	var self = this;
	
	this.setId = function(id, fn){
		if (fn.before !== undefined)
			fn.before();
					
		$.get("?mod=ccotizacion&action=getCotizacion&id=" + id, function( data ) {
			//primero borrar todo
			$("table#cotizacion .eliminar").each(function(){
				$(this).parent().parent().remove();
			});
			
			console.log(data);
			var cotizacion = data;
			
			$.each(cotizacion.movimientos, function(i, el){
				self.add(el.concepto, el.cantidad, el.neto, el.descuento, el.total);
			});
		
			if (fn.after !== undefined)
				fn.after(data);
		}, "json");
	}
	
	this.add = function(concepto, cantidad, precio, descuento, totalDescuento){
		if (concepto == '')
			return false;
		else{
			if (descuento == undefined) descuento = 0;
			if (totalDescuento == undefined) totalDescuento = precio;
			
			var s = '<tr><td style="text-align: center"><input type="checkbox" value="" class="eliminar"></td><td>'+ concepto + '</td><td style="text-align: right">' + cantidad + '</td><td><input class="form-control descuento" setAction="0" precio="' + precio + '" value="' + descuento + '" anterior="0"></td><td style="text-align: right" class="precio">' + totalDescuento + '</td></tr>';
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
		var subtotal = 0;
		
		$("table#cotizacion .precio").each(function(){
			subtotal += parseFloat($(this).html());
		});
		
		console.log("Subtotal: " + subtotal);
		
		$("table#cotizacion #subtotal").html(subtotal.toFixed(2));
		
		var total = 0;
		total = parseFloat(subtotal + $("#selCargo").val() * subtotal / 100).toFixed(2);
		$("table#cotizacion #total").html(total);
	}
	
	this.save = function(id, encabezado, cuerpo, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('?mod=ccotizacion&action=save', {
				"encabezado": encodeURIComponent(encabezado),
				"cuerpo": encodeURIComponent(cuerpo),
				"id": id
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	}
	
	this.print = function(id, email, fn){
		if (fn.before != undefined)
			fn.before();
			
		email = email == undefined?"no":email
		$.get('?mod=ccotizacion&action=pdf&email=' + email + '&id=' + id, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			console.log(data);
		}, "json");
	}
	
	this.getComentarios = function(id, fn){
		$.post('?mod=ccotizacion&action=getComentarios', {
				"id": id
			}, function(data){
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	}
};