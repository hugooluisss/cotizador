TPedido = function(id, tableRemeras, tableNumerosLetras){
	var self = this;
	
	if (tableRemeras === undefined)
		self.tableRemeras = "tblTalles";
	else
		self.tableRemeras = tableRemeras;
		
	if (tableNumerosLetras === undefined)
		self.tableNumerosLetras = "tblNumerosLetras";
	else
		self.tableNumerosLetras = tableNumerosLetras;
	
	self.tallas = new Array();
	
	for (x = 0 ; x < $("#" + self.tableRemeras).attr("totalTallas") ; x++)
		self.tallas[x] = $("#" + self.tableRemeras + " [talla=" + x +"]").attr("nombre");
		
	this.countRemeras = function(){
		total = 0;
		$("table#" + self.tableRemeras + " > tbody tr td input").each(function(){
			total += $(this).val() == ''?0:$(this).val();
		});
		
		console.log("Total de remeras: " + total);
		
		return total;
	}
	
	this.addRemera = function(id, pedido, fn){
		if ($(".eliminarItem[item=" + id + "]").length > 0)
			alert("La remera se encuentra en la lista");
		else{
			//primero a obtener los datos de la remera
			$.post('?mod=cropa&action=getData', {
					"id": id,
					"pedido": pedido
				}, function(data){
					var s = '<tr><td>' + data.nombre + ' ' + data.marca + '<br /><button setAction=0 class="btn btn-danger btn-sm eliminarItem" item="' + id + '"><i class="fa fa-times"></i></button></td>';
					self.tallas.forEach(function(talla){
						if (data.tallas[talla] !== undefined)
							s += '<td><input class="totalTalla" idTalla="' + data.tallas[talla] + '" ropa="' + id + '" style="width: 30px; text-align: right" setAction=0 value="' + data.cantidad[talla] + '"></td>';
						else
							s += '<td>&nbsp</td>';
					});
					s += '</tr>';
					$("table#" + self.tableRemeras + " > tbody:last").append(s);
					
					$("#" + self.tableRemeras + " .totalTalla[setAction=0]").each(function(){
						var el = $(this);
						el.attr("setAction", 1);
						
						el.change(function(){
							el.val(parseInt(el.val()));
						});
					});
					
					$("#" + self.tableRemeras + " .eliminarItem[setAction=0]").each(function(){
						var el = $(this);
						el.attr("setAction", 1);
						
						el.click(function(){
							if(confirm("¿Seguro?")){
								$(el).parent().parent().remove();
							}
						});
					});
					
					if (fn.after !== undefined)
						fn.after();
				}, "json");
		}
	}
	
	this.clearTable = function(){
		$("#" + self.tableRemeras + " tbody tr").remove();
		$("#" + self.tableNumerosLetras + " tbody tr").remove();
	}
	
	this.guardar = function(id, estado, cliente, formaEntrega, direccionEnvio, registro, entrega, entregables, fuente, colores, observaciones, precio, anticipo, remeras, impresiones, entregablesJson, envoltorio, posicion, observacionPosicion, formasPago, fn){

		if (fn.before !== undefined) fn.before();
		
		var numerosLetras = new Array();
		$("#" + self.tableNumerosLetras + " tbody tr").each(function(){
			var datos = new Object;
			
			datos.nombre = $(this).attr("nombre");
			datos.numero = $(this).attr("numero");
			datos.talla = $(this).attr("talle");
			
			numerosLetras.push(datos);
		});
		
		console.log("Guardando pedido con id " + id);
		
		$.post('?mod=cpedidos&action=guardar', {
				"id": id,
				"estado": estado,
				"cliente": cliente,
				"formaEntrega": formaEntrega,
				"direccionEnvio": direccionEnvio,
				"registro": registro,
				"entrega": entrega,
				"entregables": entregables,
				"fuente": fuente,
				"colores": colores,
				"observaciones": observaciones,
				"precio": precio,
				"anticipo": anticipo,
				"remeras": remeras,
				"impresiones": impresiones,
				"entregablesJson": entregablesJson,
				"envoltorio": envoltorio,
				"posicion": posicion,
				"observacionPosicion": observacionPosicion,
				"formasPago": formasPago,
				"numerosLetras": JSON.stringify(numerosLetras)
			}, function(data){
				if (fn.after !== undefined) fn.after(data);
				
				if (! data.band)
					console.log("No se guardó el pedido... ocurrió en error en el servidor");
			},
			"json");
	}
	
	this.del = function(id, fn){
		$.post('?mod=cpedidos&action=del', {
			"identificador": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el pedido");
			}
		}, "json");
	}
	
	this.countNumerosLetras = function(){
		return $("table#" + self.tableNumerosLetras + " tbody tr").length;
	}
	
	this.addNumerosLetras = function(nombre, numero, talle, fn){
		if (fn.before !== undefined)
			fn.before();
			
		if ($("table#" + self.tableNumerosLetras + " tr[modificar=si]").length > 0){
			var el = $("table#" + self.tableNumerosLetras + " tr[modificar=si]");
			el.removeAttr("modificar");
			el.attr("nombre", nombre);
			el.attr("numero", numero);
			el.attr("talle", talle);
			el = el.children("td:first");
			
			el.html(nombre);
			el = el.next("td");
			el.html(numero);
			el = el.next("td");
			el.html(talle);
		}else{	
			var el = $("<tr />", {
				"nombre": nombre,
				"numero": numero,
				"talle": talle,
			});
			
			var btnModificar = $("<btn />", {
				"class": "btn btn-success"
			}).append($("<i/>", {
				"class": "fa fa-pencil"
			}));
			
			btnModificar.click(function(){
				var el = btnModificar.parent().parent();
				if (fn.modificar !== undefined)
					fn.modificar(el);
			});
			
			var btnEliminar = $("<btn />", {
				"class": "btn btn-danger",			
			}).append($("<i/>", {
				"class": "fa fa-times"
			}));
			
			btnEliminar.click(function(){
				if(confirm("¿Seguro?"))
					btnEliminar.parent().parent().remove();
			});
			
			el.append($("<td />").html(nombre));
			el.append($("<td />").html(numero));
			el.append($("<td />").html(talle));
			el.append($("<td />", {"class": "text-right"}).append(btnModificar).append(btnEliminar));
			
			$("table#" + self.tableNumerosLetras + " > tbody").append(el);
		}
		
		if (fn.after !== undefined)
			fn.after();
	}
}