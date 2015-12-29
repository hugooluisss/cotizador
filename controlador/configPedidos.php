<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listadoImpresiones':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from catalogoimpresion order by idImpresion");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listadoEntregables':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from entregable order by idEntregable");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listadoEstados':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from estadopedido order by idEstado");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cCatalogoPedidos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TImpresion();
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TImpresion($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
	case 'centregables':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TEntregable();
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TEntregable($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
	case 'cestados':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TEstado();
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setColor($_POST['color']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TEstado($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
};
?>