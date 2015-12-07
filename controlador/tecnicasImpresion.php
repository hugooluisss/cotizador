<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaTecnicas':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from otrastecnicas a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'tecnicasPrecios':
		$obj = new TTecnicas($_GET['id']);
		$smarty->assign("nombre", $obj->getNombre());
		$smarty->assign("id", $obj->getId());
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from limite where idTipoItem = 7");
		$datos = array();
		while(!$rs->EOF){
			$aux = $db->Execute("select precio from preciootrastecnicas where idLimite = ".$rs->fields['idLimite']." and idItem = ".$obj->getId());
			$rs->fields['precio'] = $aux->fields['precio'] == ''?0:$aux->fields['precio'];
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("limites", $datos);

	break;
	case 'cTecnicas':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TTecnicas();
				
				$obj->setId($_POST['id']);
				$obj->setTipo(7);
				$obj->setDescripcion($_POST['descripcion']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'getPrecio':
				$obj = new TTecnicas();
				$obj->setId($_POST['item']);
				$precio = $obj->getPrecio($_POST['cantidad']);
				
				echo json_encode(array("precio" => $precio, "band" => !$precio?"No existe un precio definido para esa cantidad":""));
			break;
		}
	break;
}
?>