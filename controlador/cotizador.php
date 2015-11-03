<?php
global $objModulo;
switch($objModulo->getId()){
	case 'cotizador':
		$db = TBase::conectaDB();
		
		/*Ropa*/
		$rs = $db->Execute("select * from item a join ropa b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("ropa", $datos);
		
		/*Serigrafia*/
		$rs = $db->Execute("select * from item a join serigrafia b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("posiciones", $datos);
		
		$rs = $db->Execute("select * from tamano");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("tamanos", $datos);
		
		$rs = $db->Execute("select * from item a join serigrafiadigital b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("serigrafia", $datos);
		
		#vinilo
		$rs = $db->Execute("select * from item a join vinilo b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("vinilo", $datos);
		
		#otros
		$rs = $db->Execute("select * from item a join otros b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("otros", $datos);
		
		#otros
		$rs = $db->Execute("select * from item a join estampado b using(idItem) order by nombre");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("estampado", $datos);
		
		#clientes
		$rs = $db->Execute("select * from cliente");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("clientes", $datos);
	break;
	case 'cotizador_tallas':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from talla where idItem = ".$_GET['id']);
		$datos = array();
		while(!$rs->EOF){
			$obj = new TTalla($rs->fields['idTalla']);
			$rs->fields['neto'] = $obj->getNeto();
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("tallas", $datos);
	break;
	case 'listaCotizaciones':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from cotizacion a join cliente b using(idCliente)");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("cotizaciones", $datos);
	break;
	case 'ccotizacion':
		switch($objModulo->getAction()){
			case 'save':
				$obj = new TCotizacion($_POST['id']);
				$enc = json_decode(urldecode($_POST['encabezado']), true);
				$movimientos = json_decode(urldecode($_POST['cuerpo']), true);
				
				$obj->setFecha($enc['fecha']);
				$obj->setCliente($enc['cliente']);
				$obj->setSubtotal($enc['subtotal']);
				$obj->setTotal($enc['total']);
				$obj->setAdicional($enc['adicional']);
				
				$obj->truncateMovimientos(true);
				foreach($movimientos as $mov){
					$obj->addMovimiento($mov['concepto'], $mov['cantidad'], $mov['descuento'], $mov['neto'], $mov['total']);
				}
				
				if ($obj->guardar())
					echo json_encode(array("band" => true, "cotizacion" => $obj->getId()));
				else
					echo json_encode(array("band" => false));
			break;
			case 'getCotizacion':
				$db = TBase::conectaDB();
				
				$rs = $db->Execute("select * from cotizacion a join cliente b using(idCliente) where idCotizacion = ".$_GET['id']);
				$datos = array();
				$datos = $rs->fields;
				$datos["movimientos"] = array();
				$rs = $db->Execute("select * from movimiento where idCotizacion = ".$_GET['id']);
				while(!$rs->EOF){
					array_push($datos["movimientos"], $rs->fields);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'pdf':
				require_once(getcwd()."/repositorio/pdf/cotizacion.php");
				
				$obj = new RCotizacion;
				$obj->generar($_GET['id']);
				
				$result = array("band" => true, "documento" => $obj->Output());
				print json_encode($result);
			break;
		}
	break;
}
?>