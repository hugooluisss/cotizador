TPedido = function(id, tableRemeras){
	var self = this;
	
	if (tableRemeras === undefined)
		self.tableRemeras = "tblTalles";
	else
		self.tableRemeras = tableRemeras;
	
	self.tallas = new Array();
	
	for (x = 0 ; x < $("#" + self.tableRemeras).attr("totalTallas") ; x++)
		self.tallas[x] = $("#" + self.tableRemeras + " [talla=" + x +"]").attr("nombre");
	
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
	}
	
	this.guardar = function(id, estado, cliente, registro, entrega, entregables, diseno, colores, observaciones, precio, anticipo, remeras, impresiones, entregables, fn){
		if (fn.before !== undefined) fn.before();
		$.post('?mod=cpedidos&action=guardar', {
				"id": id,
				"estado": estado,
				"cliente": cliente,
				"registro": registro,
				"entrega": entrega,
				"entregables": entregables,
				"diseno": diseno,
				"colores": colores,
				"observaciones": observaciones,
				"precio": precio,
				"anticipo": anticipo,
				"remeras": remeras,
				"impresiones": impresiones,
				"entregables": entregables
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
}