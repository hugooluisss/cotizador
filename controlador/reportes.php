<?php
global $objModulo;
switch($objModulo->getId()){
	case 'reportes':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from estadopedido");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("estados", $datos);
	break;
	case 'rventaremeras':
		$db = TBase::conectaDB();
		
		$aux1 = ($_POST['tipo'] == 'entrega')?" 00:00:00":"";
		$aux2 = ($_POST['tipo'] == 'entrega')?" 23:59:59":"";
		$estado = $_POST['estado'] == ''?"":("and idEstado = ".$_POST['estado']);
		
		$rs = $db->Execute("select d.*, e.*, c.nombre as talla, sum(b.cantidad) as total
			from pedido a join movped b using(idPedido) 
				join talla c using(idTalla)
				join item d using(idItem)
				join ropa e using(idItem)
			where ".$_POST['tipo']." between '".$_POST['inicio'].$aux1."' and '".$_POST['fin'].$aux2."' 
				".$estado." 
			group by c.idTalla;");
			
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'rventastotales':
		$db = TBase::conectaDB();
		
		$estado = $_POST['estado'] == ''?"":("and idEstado = ".$_POST['estado']);
		
		$rs = $db->Execute("select b.nombre as cliente, a.* from pedido a join cliente b using(idCliente) where ".$_POST['tipo']." between '".$_POST['inicio']."' and '".$_POST['fin']."' ".$estado);
		
		$datos = array();
		$precio = 0;
		while(!$rs->EOF){
			$precio += $rs->fields['precio'];
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
		$smarty->assign("total", $precio);
	break;
	case 'rtecnicas':
		$db = TBase::conectaDB();
		$estado = $_POST['estado'] == ''?"":("and idEstado = ".$_POST['estado']);
		
		$rs = $db->Execute("select idImpresion, a.nombre as tecnica, count(*) as cantidad from catalogoimpresion a join pedidoimpresion b using(idImpresion) join pedido c using(idPedido) where ".$_POST['tipo']." between '".$_POST['inicio']."' and '".$_POST['fin']."'
				".$estado." group by idImpresion ");
		
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'rtipoclientes':
		$db = TBase::conectaDB();
		$estado = $_POST['estado'] == ''?"":("and idEstado = ".$_POST['estado']);
		
		$rs = $db->Execute("select tipo, count(*) as cantidad from pedido a join cliente b using(idCliente) where ".$_POST['tipo']." between '".$_POST['inicio']."' and '".$_POST['fin']."' ".$estado." group by tipo ");
		
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	
}
?>