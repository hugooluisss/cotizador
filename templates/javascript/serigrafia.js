$(document).ready(function(){
	getLista();
	
	$('#panelTabs a[href="#listas"]').tab('show');
	
	$("#btnWinActualizarPrecios").click(function(){
		$("#winPrecios").modal();
	});
	
	$("#frmDefinicionPrecios").validate({
		debug: true,
		rules: {
			txtCantidad: {
				required: true,
				number: true,
				min: 1
			}
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TSerigrafia;
			obj.setPrecioGlobal($("#selQuiero").val(), $("#selEn").val(), $("#txtCantidad").val(), {
				before: function(){
					$(form).find("[type=submit]").prop("disabled", true);
				}, after: function(resp){
					$(form).find("[type=submit]").prop("disabled", false);
					
					if(resp.band){
						alert("La actualización terminó");
						$("#winPrecios").modal("hide");
					}
				}
			});
		}
	});
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtDescripcion: "required"
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
			txtDescripcion: "Este campo es necesario"
		},
		submitHandler: function(form){
			var obj = new TSerigrafia;
			obj.add(
				$("#id").val(), 
				$("#txtNombre").val(), 
				$("#txtDescripcion").val(),
				{
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
		
	function getLista(){
		$.get("?mod=listaSerigrafia", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TSerigrafia;
					obj.del($(this).attr("item"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idItem);
				$("#txtNombre").val(el.nombre);
				$("#txtDescripcion").html(el.descripcion);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=precios]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				location.href = "?mod=serigrafiaPrecios&id=" + el.idItem;
			});
			
			$("#tblPosiciones").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	$("#btnAddLimite").click(function(){
		var obj = new TLimite();
		obj.add(
			$("#txtInferior").val(),
			2,
			{
				after: function(datos){
					if (datos.band){
						getListaLimites();
						$("#txtInferior").val("");
						$("#txtInferior").focus();
					}else{
						alert("Upps... " + datos.mensaje);
					}
				}
			}
		);
	});
	
	function getListaLimites(){
		$.get("?mod=listaLimites&tipo=2", function( data ) {
			$("#dvListaLimites").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TLimite;
					obj.del($(this).attr("item"), {
						after: function(data){
							getListaLimites();
						}
					});
				}
			});
			
			$("#tblLimites").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": false,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	getListaLimites();
});