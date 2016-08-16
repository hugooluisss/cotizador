<?php
global $objModulo;
switch($objModulo->getId()){
	case 'crm':
		$db = TBase::conectaDB();
		$cliente = new TCliente($_GET['id']);
		$smarty->assign("cliente", $cliente);
		
		$rs = $db->Execute("select * from pedido a where idCliente = ".$cliente->getId());
		$datos = array();
		$cliente = new TCliente();
		$estado = new TEstado();
		$usuario = new TUsuario();
		$orden = new TPedido();
		while(!$rs->EOF){
			$estado->setId($rs->fields['idEstado']);
			$orden->setId($rs->fields['idPedido']);
			$rs->fields['color'] = $estado->getColor();
			$rs->fields['excede'] = $orden->getExcede()?1:0;
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("ordenes", $datos);
	break;
}
?>