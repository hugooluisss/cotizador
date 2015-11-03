<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaLimites':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from limite order by inferior");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'climites':
		switch($objModulo->getAction()){
			case 'add':
				if ($_POST['inferior'] == '' or is_integer($_POST['inferior']))
					echo json_encode(array("band" => false, "mensaje" => "Solo se permiten números enteros"));
				else{
					$db = TBase::conectaDB();
					$obj = new TLimite();
					
					$obj->setInferior($_POST['inferior']);
					echo json_encode(array("band" => $obj->guardar()));
				}
			break;
			case 'del':
				$obj = new TLimite($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>