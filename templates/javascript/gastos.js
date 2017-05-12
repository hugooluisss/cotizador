$(document).ready(function(){
	$("#txtFecha").datepicker( "option", "dateFormat", "yy-mm-dd" );
	$("#selAnio").change(function(){
		listaAnio();
	});
	
	$("#winAddGasto").on('hidden.bs.modal', function(e){
		$("#frmAdd").find("input").val("");
	});
	
	listaAnio();
	function listaAnio(){
		var anio = $("#selAnio").val();
		$("#listaMes").html("Espera mientras actualizamos la información");
		
		$.post("listaGastosAnio", {
			"anio": anio
		}, function(resp){
			$("#listaMes").html(resp);
			
			$("[action=detalle]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winGastos").attr("anio", el.anio);
				$("#winGastos").attr("mes", el.mes);
			});
		})
	}
	
	$("#winGastos").on('shown.bs.modal', function(e){
		getListaGastos();
		function getListaGastos(){
			$.post("listaGastos", {
				"mes": $("#winGastos").attr("mes"),
				"anio": $("#winGastos").attr("anio")
			}, function(resp){
				$("#winGastos").find(".modal-body").html(resp);
				
				$("#winGastos").find("[action=eliminar]").click(function(){
					var obj = new TGasto();
					var id = $(this).attr("identificador");
					
					if (confirm("¿Seguro?")){
						obj.del(id, {
							after: function(resp){
								if (resp.band){
									listaAnio();
									getListaGastos();
								}else
									alert("Gasto eliminado");
							}
						});
					}
				});
			});
		}
	});
	
	$("#winGastos").on('hide.bs.modal', function(e){
		$("#winGastos").find(".modal-body").html("");
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtFecha: "required",
			txtConcepto: "required",
			txtMonto: {
				required: true,
				number: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtFecha: "Este campo es necesario",
			txtConcepto: "Este campo es necesario",
			txtMonto: {
				required: "Este campo es necesario",
				number: "Solo se aceptan números"
			}
		},
		submitHandler: function(form){
			var obj = new TGasto;
			obj.add({
				id: $("#id").val(), 
				concepto: $("#txtConcepto").val(), 
				monto: $("#txtMonto").val(), 
				fecha: $("#txtFecha").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							listaAnio();
							$("#winAddGasto").modal("hide");
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
});