<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaVinilo':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from vinilo a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cvinilo':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TVinilo();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setTipo(4);
				$obj->setPrecio($_POST['precio']);
				$obj->setDescripcion($_POST['descripcion']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TVinilo($_POST['item']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>