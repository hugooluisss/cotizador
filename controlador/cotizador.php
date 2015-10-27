<?php
global $objModulo;
switch($objModulo->getId()){
	case 'cotizador':
		$db = TBase::conectaDB();
		
		/*Ropa*/
		$rs = $db->Execute("select * from item a join ropa b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("ropa", $datos);
		
		/*Serigrafia*/
		$rs = $db->Execute("select * from item a join serigrafia b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("posiciones", $datos);
		
		$rs = $db->Execute("select * from tamano");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("tamanos", $datos);
		
		$rs = $db->Execute("select * from item a join serigrafiadigital b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("serigrafia", $datos);
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