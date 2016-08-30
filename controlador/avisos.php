<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaAvisos':
		global $tempUsuario;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from aviso a where idUsuario = ".$tempUsuario->getId()." and idCliente = ".$_POST['cliente']);
		
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cavisos':
		switch($objModulo->getAction()){
			case 'add':
				global $tempUsuario;
				$obj = new TAviso();
				
				$obj->setId($_POST['id']);
				$obj->setAlerta($_POST['alerta']);
				$obj->setMensaje($_POST['mensaje']);
				$obj->cliente = new TCliente($_POST['cliente']);
				$obj->usuario = new TUsuario($tempUsuario->getId());
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TAviso($_POST['id']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>