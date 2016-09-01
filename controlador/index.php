<?php
$db = TBase::conectaDB();
if ($tempUsuario->getId() <> ''){
	$rs = $db->Execute("select a.*, b.nombre as cliente from aviso a join cliente b using(idCliente) where idUsuario = ".$tempUsuario->getId()." and alerta <= now() and estado = 1");
	
	$datos = array();
	$cont = 0;
	while(!$rs->EOF){
		array_push($datos, $rs->fields);
		$cont++;
		$rs->moveNext();
	}
	$smarty->assign("avisos", $datos);
	$smarty->assign("totalAvisos", $cont);
}
?>