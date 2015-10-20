<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaRopa':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from ropa a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cropa':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TRopa();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setTipo(1);
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