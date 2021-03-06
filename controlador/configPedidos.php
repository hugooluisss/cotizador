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
				$obj->setLimite($_POST['limite']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TImpresion($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'getLimite':
				$obj = new TImpresion($_POST['id']);
				
				$limite = $obj->getLimite();
				$db = TBase::conectaDB();
				
				$rs = $db->Execute("select count(*) as total from pedido a join pedidoimpresion b using(idPedido) where cast(entrega as date) = '".$_POST['fecha']."' and idImpresion = ".$_POST['id']." group by idPedido");
				
				echo json_encode(array("limite" => $limite - $rs->RecordCount(), "sup" => $limite, "total" => $rs->RecordCount(), "band" => true));
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