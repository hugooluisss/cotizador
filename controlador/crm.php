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
		$precio = 0;
		while(!$rs->EOF){
			$estado->setId($rs->fields['idEstado']);
			$orden->setId($rs->fields['idPedido']);
			$rs->fields['color'] = $estado->getColor();
			$rs->fields['excede'] = $orden->getExcede()?1:0;
			
			$precio += $orden->getPrecio();
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("montoTotal", $precio);
		$smarty->assign("ordenes", $datos);
		
		$rs = $db->Execute("select a.*, c.*, sum(cantidad) as cantidad, b.nombre as talla, c.descripcion as ropa from movped a join talla b using(idTalla) join ropa c using(idItem) join pedido d using(idPedido) where idCliente = ".$_GET['id']." group by idTalla;");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("comprados", $datos);
		
		$rs = $db->Execute("select * from tipocliente;");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("tipoClientes", $datos);
		
		$rs = $db->Execute("select * from comentariocliente where idCliente = ".$_GET['id']." order by fecha desc");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("comentarios", $datos);
		
		$datos = array();
		foreach(array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre") as $id => $val){
			$rs = $db->Execute("select count(*) as compras from pedido where idCliente = ".$_GET['id']." and extract(month from registro) = ".($id+1));
			array_push($datos, array("nombre" => $val, "totalCompras" => $rs->fields['compras']));
		}
		
		$smarty->assign("meses", $datos);
	break;
	case 'ccrm':
		switch($objModulo->getAction()){
			case 'setClasificacion':
				$cliente = new TCliente($_POST['id']);
				$cliente->setClasificacion($_POST['clasificacion']);
				
				echo json_encode(array("band" => $cliente->guardar()));
			break;
			case 'addComentario':
				$db = TBase::conectaDB();
				$rs = $db->Execute("insert into comentariocliente (idCliente, fecha, texto) value (".$_POST['id'].", now(), '".$_POST['comentario']."')");
				
				echo json_encode(array("band" => $rs?true:false));
			break;
		}
	break;
}
?>