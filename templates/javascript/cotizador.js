//Tallas
var cotizacion = "";
cotizacion = new TCotizacion();
$(document).ready(function(){
	$("#selRopa").change(function(){
		$("#dvRopa").html("");
	});
	
	$("#btnBuscarTallas").click(function(){
		$("#dvTallas").html("Actualizando, por favor espere un momento...");
		
		$.get("?mod=cotizador_tallas&id=" + $("#selRopa").val(), function( data ) {
			$("#dvTallas").html(data);
			
			$("#ropa #dvTallas .panel .panel-body input.talla").change(function(){
				var precio = 0;
				var cantidad = 0;
				var concepto = "";
				$("#ropa #dvTallas .panel .panel-body input.talla").each(function(){
					var el = $(this);
					
					precio += parseFloat(el.attr("precio") * el.val());
					cantidad += parseInt(el.val());
					if (el.val() > 0)
						concepto += (concepto == ''?'':", ") + el.attr("nombre") + " (" + el.val() + " - " + parseFloat(el.attr("precio") * el.val()).toFixed(2) + ")";
				});
				
				precio = precio.toFixed(2)
				
				$("#talla_concepto").val($( "select#selRopa option:selected" ).attr("nombre") + ": " + concepto);
				$("#talla_cantidad").val(cantidad);
				$("#talla_precio").val(precio);
			});
			
			$("#btnAgregarRopa").click(function(){
				if(cotizacion.add($("#talla_concepto").val(), $("#talla_cantidad").val(), $("#talla_precio").val())){
					$("#dvTallas").html("");
					$('#panelTabs a[href="#cotizacion"]').tab('show');
				}else
					alert("Ocurrió un error al agregar a la cotización");
			});
		});
	});
});

//Serigrafia
$(document).ready(function(){
	$("#btnBuscarPrecioSerigrafia").click(function(){
		var obj = new TSerigrafia;
		obj.getPrecio($("#selPosicion").val(), $("#selTamano").val(), $("#selColores").val(), $("#txtCantidad").val(), {
			before: function(){
				$("#frmAddSerigrafia").prop("disabled", true);
			},
			after: function(datos){
				$("#frmAddSerigrafia").prop("disabled", false);
				
				if (datos.band == ""){
					$("#serigrafia_concepto").val("DP " + $("select#selPosicion option:selected" ).attr("nombre") + " (Tamaño: " + $("select#selTamano option:selected" ).attr("nombre") + "; No de colores: " + $("select#selColores").val() + ")");
					$("#serigrafia_cantidad").val($("#txtCantidad").val());
					$("#serigrafia_precio").val(datos.precio);
				}
			}
		});
	});
	
	$("#btnAgregarSerigrafia").click(function(){
		if(cotizacion.add($("#talla_concepto").val(), $("#talla_cantidad").val(), $("#talla_precio").val())){
			$("#dvTallas").html("");
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

//General
$(document).ready(function(){
	$("#eliminarDeCotizacion").click(function(){
		$("table#cotizacion .eliminar").each(function(){
			if ($(this).prop("checked"))
				$(this).parent().parent().remove();
		});
		
		cotizacion.total();
	});
});