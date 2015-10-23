<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaSerigrafia':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from serigrafia a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'serigrafiaPrecios':
		$obj = new TSerigrafia($_GET['id']);
		$smarty->assign("nombre", $obj->getNombre());
		$smarty->assign("id", $obj->getId());
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from tamano");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("tamanos", $datos);
	break;
	case 'cserigrafia':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TSerigrafia();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TSerigrafia($_POST['item']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>