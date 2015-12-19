<?php
global $objModulo;
switch($objModulo->getId()){
	case 'pedidos':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from estadopedido order by idEstado");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("estados", $datos);
		
		$rs = $db->Execute("select * from catalogoimpresion order by idImpresion");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("serviciosImpresion", $datos);
		
		$rs = $db->Execute("select * from entregable order by idEntregable");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("entregables", $datos);
		
		$rs = $db->Execute("select * from item a join ropa b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("remeras", $datos);
	break;
	case 'clientesListaBusqueda':
		#clientes
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from cliente");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("clientes", $datos);
	break;
};
?>