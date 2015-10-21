<?php
global $objModulo;
switch($objModulo->getId()){
	case 'tallas':
			$smarty->assign("item", $_GET['id']);
	break;
	case 'listaTallas':
		$db = TBase::conectaDB();
		$obj = new TRopa($_GET['item']);
		$rs = $db->Execute("select * from talla where idItem = ".$_GET['item']);
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
		
		$smarty->assign("precio", $obj->getPrecio());
	break;
	case 'ctalla':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TTalla();
				$obj->setId($_POST['id']);
				$obj->setRopa($_POST['item']);
				$obj->setNombre($_POST['nombre']);
				$obj->setAdicional($_POST['adicional']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TTalla($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>