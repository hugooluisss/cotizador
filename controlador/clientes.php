<?php
global $objModulo;
switch($objModulo->getId()){
	case 'admonUsuarios':
	break;
	case 'listaClientes':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from cliente");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cclientes':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TCliente();
				
				$rs = $db->Execute("select idCliente from cliente where rfc = '".$_POST['rfc']."'");
				
				if (!$rs->EOF){ #si es que encontró el rfc
					if ($rs->fields["idCliente"] <> $_POST['id']){
						$obj->setId($rs->fields['idCliente']);
						echo json_encode(array("band" => false, "mensaje" => "El RFC ya se encuentra registrado con el cliente ".$obj->getNombreCompleto()));
						exit(1);
					}
				}

				$obj = new TCliente();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setRFC($_POST['rfc']);
				$obj->setEmail($_POST['email']);
				$obj->setDireccion($_POST['direccion']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TCliente($_POST['cliente']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>