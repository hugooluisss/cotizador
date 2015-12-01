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
		
		$rs = $db->Execute("select * from otrastecnicas a join item b using(idItem)");
		while(!$rs->EOF){
			$smarty->assign(strtolower($rs->fields['nombre']), $rs->fields['precio']);
			$rs->moveNext();
		}
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
			$rs->fields['comentarios'] = '';
			
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
				$obj->setFecha($enc['fecha']);
				$obj->setUnidades($enc['unidades']);
				$obj->setComentarios($enc['comentarios']);
				
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
				
				$obj = new RCotizacion($_GET['id']);
				$obj->generar();
				$documento = $obj->Output();
				
				
				if ($documento == '')
					$result = array("doc" => "", "band" => false);
				else{
					if ($_GET['email'] == 'no')
						$result = array("band" => true, "documento" => $obj->Output());
					else{
						global $sesion;
						$email = new TMail;
						$cotizacion = new TCotizacion($_GET['id']);
						$email->setTema("Su cotización");
						$email->setDestino($cotizacion->cliente->getEmail(), utf8_decode($cotizacion->cliente->getNombre()));
						
						$datos = array();
						$datos['nombreCompleto'] = $cotizacion->cliente->getNombre();
						$datos['ligaActualizacionDatosCliente'] = $ini["sistema"]["url"]."?mod=clienteDatos&data=".base64_encode($cotizacion->cliente->getId());
						$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/cotizacion.txt"), $datos)));
						$email->adjuntar($documento);
						
						$result = array("doc" => $documento, "band" => $email->send(), "email" => $cotizacion->cliente->getEmail());
					}
				}
				print json_encode($result);
			break;
			case 'autocompleteRopa':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select * from ropa a join item b using(idItem) where descripcion like '%".$_GET['term']."%' or marca like '%".$_GET['term']."%' or nombre like '%".$_GET['term']."%'");
				
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					$el['id'] = $rs->fields['idItem'];
					$el['label'] = $rs->fields['nombre'].' Marca: '.$rs->fields['marca'];
					$el['identificador'] = $rs->fields['idItem'];
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'getComentarios':
				$cotizacion = new TCotizacion($_POST['id']);
				echo json_encode(array("comentarios" => $cotizacion->getComentarios()));
			break;
		}
	break;
}
?>