<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaCampania':
		global $tempUsuario;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from campania a");
		
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['codigo'] = base64_encode($rs->fields['idCampania']);
			$rsCont = $db->Execute("select count(*) as total from voto where idCampania = ".$rs->fields['idCampania']);
			$rs->fields['votos'] = $rsCont->fields['total'];
			
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'voto':
		$db = TBase::conectaDB();
		$code = base64_decode($_GET['code']);
		
		$campania = new TCampania($code);
		
		$smarty->assign("voto", $campania->addVoto());
	break;
	case 'ccampania':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TCampania();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDisponible($_POST['disponible'] == 1);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TCampania($_POST['id']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'reiniciar':
				$obj = new TCampania();
				
				$obj->setId($_POST['id']);

				echo json_encode(array("band" => $obj->reiniciar()));
			break;
		}
	break;
}
?>