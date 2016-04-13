$(document).ready(function(){
	$("#frmAdd").submit(function(){
		$.post('?mod=chorarios&action=guardar', {
				"lunesEntrada": $("#selHoraInicioL").val() + ':' + $("#selMinInicioL").val(),
				"lunesSalida": $("#selHoraFinL").val() + ':' + $("#selMinFinL").val(),
				"sabadoEntrada": $("#selHoraInicioS").val() + ':' + $("#selMinInicioS").val(),
				"sabadoSalida": $("#selHoraFinS").val() + ':' + $("#selMinFinS").val()
			}, function(data){
				if (data.band == true)
					alert("Datos actualizados");
				else
					alert("Ocurrió un error al actualizar los datos");
			}, "json");
	});
});