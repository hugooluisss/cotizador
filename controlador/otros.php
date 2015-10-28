<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaOtros':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from otros a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cotros':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TOtrosServicios();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setTipo(5);
				$obj->setPrecio($_POST['precio']);
				$obj->setDescripcion($_POST['descripcion']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TRopa($_POST['item']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>