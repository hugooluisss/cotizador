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
	case 'cTecnicas':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TTecnicas();
				
				$obj->setId($_POST['id']);
				$obj->setTipo(7);
				$obj->setPrecio($_POST['precio']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
		}
	break;
}
?>