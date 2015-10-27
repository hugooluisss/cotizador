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
					
					precio += parseFloat(el.attr("precio") * el.val()).toFixed(2);
					cantidad += parseInt(el.val());
					if (el.val() > 0)
						concepto += (concepto == ''?'':", ") + el.attr("nombre") + " (" + el.val() + " - " + parseFloat(el.attr("precio") * el.val()).toFixed(2) + ")";
				});
				
				precio = parseFloat(precio).toFixed(2);
				
				$("#talla_concepto").val($( "select#selRopa option:selected" ).attr("nombre") + ": " + concepto);
				$("#talla_cantidad").val(cantidad);
				$("#talla_precio").val(parseFloat(precio).toFixed(2));
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
					$("#serigrafia_concepto").val("DP " + $("#frmAddSerigrafia select#selPosicion option:selected" ).attr("nombre") + " (Tamaño: " + $("#frmAddSerigrafia select#selTamano option:selected" ).attr("nombre") + "; No de colores: " + $("#frmAddSerigrafia select#selColores").val() + "; P. U.: " + datos.precio + ")");
					$("#serigrafia_cantidad").val($("#frmAddSerigrafia #txtCantidad").val());
					$("#serigrafia_precio").val(parseFloat(datos.precio * $("#frmAddSerigrafia #txtCantidad").val()).toFixed(2));
					
					$("#btnAgregarSerigrafia").focus();
				}
			}
		});
	});
	
	$("#btnAgregarSerigrafia").click(function(){
		if(cotizacion.add($("#serigrafia_concepto").val(), $("#serigrafia_cantidad").val(), $("#serigrafia_precio").val())){
			$("#serigrafia_concepto").val("");
			$("#serigrafia_cantidad").val("");
			$("#serigrafia_precio").val("");
			
			$("#frmAddSerigrafia #txtCantidad").val("");
			$('#panelTabs a[href="#cotizacion"]').tab('show');
		}else
			alert("Ocurrió un error al agregar a la cotización");
	});
});

//Serigrafia digital
$(document).ready(function(){
	$("#seriDig #txtPU").val($("#seriDig select#selItem option:selected" ).attr("precio"));
	
	$("#seriDig #selItem").change(function(){
		$("#seriDig #txtPU").val($("#seriDig select#selItem option:selected" ).attr("precio"));
	});
	
	$("#seriDig #txtCantidad").change(function(){
		$("#seriDig #txtCantidad").val(parseInt($("#seriDig #txtCantidad").val()));
		$("#seriDig #txtTotal").val(parseFloat($("#seriDig select#selItem option:selected" ).attr("precio") * $("#seriDig #txtCantidad").val()).toFixed(2));
	});
	
	$("#seriDig #btnAgregar").click(function(){
		var concepto = $("#seriDig select#selItem option:selected" ).attr("nombre") + " (P. U.: " + $("#seriDig #txtPU").val() + ")";
	
		if(cotizacion.add(concepto, $("#seriDig #txtCantidad").val(), $("#seriDig #txtTotal").val())){
			$("#seriDig #txtCantidad").val("");
			$("#seriDig #txtTotal").val("");
			
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