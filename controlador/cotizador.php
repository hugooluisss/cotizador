<?php
global $objModulo;
switch($objModulo->getId()){
	case 'cotizador':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from item a join ropa b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("ropa", $datos);
	break;
	case 'cotizador_tallas':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from talla where idItem = ".$_GET['id']);
		$datos = array();
		while(!$rs->EOF){
			$obj = new TTalla($rs->fields['idTalla']);
			$rs->fields['neto'] = $obj->getNeto();
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("tallas", $datos);
	break;
}
?>