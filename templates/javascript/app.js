$(document).ready(function(){
	$(".btnAvisos").click(function(){
		$("#winAlertasMensajes").modal();
		var el = $(this);
		
		$("#winAlertasMensajes").find(".modal-footer").find("a").attr("href", "?mod=crm&id=" + el.attr("cliente"));
		
		$.post("getAviso", {
			"id": el.attr("aviso"),
		}, function(resp){
			$("#winAlertasMensajes").find(".modal-body").html(resp);
		});
		
		//Se hace el descuento
		$(".notifications-menu").find(".totalAvisos").each(function(){
			var l = $(this);
			var total = l.html()-1;
			
			total = total < 0?0:total;
			
			l.html(total);
		});
		
		el.parent().removeClass("nuevo");
	});
});