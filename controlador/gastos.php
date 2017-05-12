<?php
global $objModulo;
switch($objModulo->getId()){
	case 'gastos':
		$smarty->assign("item", $_GET['id']);
	break;
	case 'cgastos':
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