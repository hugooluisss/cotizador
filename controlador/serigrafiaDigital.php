<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaSerigrafiaDigital':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from serigrafiadigital a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cserigrafiadigital':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TSerigrafiaDigital();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setTipo(3);
				$obj->setPrecio($_POST['precio']);
				$obj->setDescripcion($_POST['descripcion']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TSerigrafiadigital($_POST['item']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>