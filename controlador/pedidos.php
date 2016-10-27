<?php
global $objModulo;
switch($objModulo->getId()){
	case 'pedidos': case 'pedidos2':
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
		
		$rs = $db->Execute("select distinct nombre from talla order by nombre;");
		$datos = array();
		$nombres = array();
		while(!$rs->EOF){
			$rs->fields['nombre2'] = str_replace("Talle ", "", $rs->fields['nombre']);
			switch($rs->fields['nombre2']){
				case 'L': array_push($nombres, 100004); break;
				case 'M': array_push($nombres, 100003); break;
				case 'S': array_push($nombres, 100002); break;
				case 'XL': array_push($nombres, 100005); break;
				case 'XLL': array_push($nombres, 100006); break;
				case 'XS': array_push($nombres, 100001); break;
				case 'XXL': array_push($nombres, 100007); break;
				default:
					array_push($nombres, $rs->fields['nombre2']);
			}
			
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		natsort($nombres);
		$data = array();
		foreach($nombres as $key => $val){
			array_push($data, $datos[$key]);
		}
		
		$smarty->assign("tallas", $data);
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
	case 'listaPedidos':
		$db = TBase::conectaDB();
		
		switch($_GET['tipo']){
			case 'registro':
				$sql = " where cast(registro as date) between '".$_GET['inicio']."' and '".$_GET['fin']."'";
			break;
			case 'entrega':
				$sql = " where cast(entrega as date) between '".$_GET['inicio']."' and '".$_GET['fin']."'";
			break;
			case 'entregaCliente':
				$sql = " where cast(entregaCliente as date) between '".$_GET['inicio']."' and '".$_GET['fin']."'";
			break;
			default:
				$sql = "";
		}
		
		if($_GET['tecnica'] <> ''){
			$sql .= ($sql == '')?"where ":" and ";
			
			$sql .= "a.idPedido in (select idPedido from pedidoimpresion where idImpresion = ".$_GET['tecnica'].")";
		}
		
		$rs = $db->Execute("select * from pedido a".$sql);
		$datos = array();
		$cliente = new TCliente();
		$estado = new TEstado();
		$usuario = new TUsuario();
		$orden = new TPedido();
		while(!$rs->EOF){
			$usuario->setId($rs->fields['idUsuario']);
			$cliente->setId($rs->fields['idCliente']);
			$estado->setId($rs->fields['idEstado']);
			$orden->setId($rs->fields['idPedido']);
			$rs->fields['cliente'] = $cliente->getNombre();
			$rs->fields['color'] = $estado->getColor();
			$rs->fields['usuario'] = $usuario->getNombre(); 
			$rs->fields['excede'] = $orden->getExcede()?1:0;
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cpedidos':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TPedido();
				
				$obj->setId($_POST['id']);
				$obj->setEstado($_POST['estado']);
				$obj->setCliente($_POST['cliente']);
				$obj->setRegistro($_POST['registro']);
				$obj->setEntrega($_POST['entrega']);
				$obj->setEntregaCliente($_POST['entregaCliente']);
				$obj->setEntregables($_POST['entregables']);
				$obj->setFuente($_POST['fuente']);
				$obj->setObservacionDiseno($_POST['observacionDiseno']);
				$obj->setColores($_POST['colores']);
				$obj->setObservaciones($_POST['observaciones']);
				$obj->setPrecio($_POST['precio']);
				$obj->setAnticipo($_POST['anticipo']);
				$obj->setFormaEntrega($_POST['formaEntrega']);
				$obj->setDireccionEnvio($_POST['direccionEnvio']);
				$obj->setEnvoltorio($_POST['envoltorio']);
				$obj->setPosicion($_POST['posicion']);
				$obj->setObservacionPosicion($_POST['observacionPosicion']);
				$obj->setArchivo($_POST['archivo']);
				
				if ($obj->guardar()){
					$obj->guardarItems(json_decode($_POST['remeras']));
					$obj->guardarTipoImpresiones(json_decode($_POST['impresiones']));
					$obj->guardarEntregables(json_decode($_POST['entregablesJson']));
					$obj->guardarFormasPago(json_decode($_POST['formasPago']));
					$obj->guardarNumerosLetras(json_decode($_POST['numerosLetras']));
					
					#se genera el documento pdf
					require_once(getcwd()."/repositorio/pdf/pedido.php");
					$pdf = new RPedido($obj->getId());
					$pdf->generar();
					$documento = $pdf->Output();
					
					if ($_POST['estado'] == 7){
						$pedido = $obj;
						$email = new TMail;
						$email->setTema("Su pedido está listo");
						$email->setDestino($pedido->cliente->getEmail(), utf8_decode($pedido->cliente->getNombre()));
						
						$datos = array();
						$datos['nombreCompleto'] = $pedido->cliente->getNombre();
						$datos['folioOrden'] = $pedido->getId();
						
						$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/casiListo2.html"), $datos)));
						//$email->adjuntar($documento);
						/*
						$email->addImg("repositorio/img/palomita.png", "palomita", "palomita.png");
						$email->addImg("repositorio/img/pin.png", "pin", "pin.png");
						$email->addImg("repositorio/img/point.png", "point", "point.png");
						$email->addImg("repositorio/img/reloj.png", "reloj", "reloj.png");
						$email->addImg("repositorio/img/telefono.png", "telefono", "telefono.png");
						$email->addImg("repositorio/img/whatsapp.png", "whatsapp", "whatsapp.png");
						$email->addImg("repositorio/img/email.png", "email", "email.png");
						*/
						#$email->addImg("repositorio/img/mail/positivo-icono.jpg", "positivo-icono", "positivo-icono.jpg");
						#$email->addImg("repositorio/img/mail/logo.jpg", "logo", "logo.jpg");
						#$email->addImg("repositorio/img/mail/pin.jpg", "pin", "pin.jpg");
						#$email->addImg("repositorio/img/mail/reloj.jpg", "reloj", "reloj.jpg");
						#$email->addImg("repositorio/img/mail/telefono-icono.jpg", "telefono-icono", "telefono-icono.jpg");
						#$email->addImg("repositorio/img/mail/wahts-icono.jpg", "wahts-icono", "wahts-icono.jpg");
						#$email->addImg("repositorio/img/mail/mail-icono.jpg", "mail-icono", "mail-icono.jpg");
						#$email->addImg("repositorio/img/mail/web-icono.jpg", "web-icono", "web-icono.jpg");
						
						$email->send();
					}
					
					echo json_encode(array("band" => true, "pedido" => $obj->getId(), "documento" => $documento));
					//echo json_encode(array("band" => true, "pedido" => $obj->getId()));
				}else
					echo json_encode(array("band" => false));
			break;
			case 'del':
				$obj = new TPedido();
				$obj->setId($_POST['identificador']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'getData':
				$db = TBase::conectaDB();
				$obj = new TPedido($_POST['id']);
				
				$rs = $db->Execute("select *, cast(entrega as date) as entrega, extract(hour from entrega) as horaEntrega, extract(minute from entrega) as minutosEntrega from pedido where idPedido = ".$_POST['id']);
				$rs->fields['entregables'] = $obj->getEntregables();
				$rs->fields['nombreCliente'] = $obj->cliente->getNombre();
				
				$rsAux = $db->Execute("select * from pedidoimpresion where idPedido = ".$obj->getId());
				$rs->fields['impresion'] = array();
				
				while(!$rsAux->EOF){
					array_push($rs->fields['impresion'], $rsAux->fields);
					$rsAux->moveNext();
				}
				
				$rsAux = $db->Execute("select * from pedidoentregables where idPedido = ".$obj->getId());
				$rs->fields['entregablesList'] = array();
				
				while(!$rsAux->EOF){
					array_push($rs->fields['entregablesList'], $rsAux->fields);
					$rsAux->moveNext();
				}
				
				$rsAux = $db->Execute("select distinct idItem from movped join talla using(idTalla) where idPedido = ".$obj->getId());
				$rs->fields['remeras'] = array();
				
				while(!$rsAux->EOF){
					array_push($rs->fields['remeras'], $rsAux->fields);
					$rsAux->moveNext();
				}
				
				$rsAux = $db->Execute("select campo, valor from formasPago where idPedido = ".$obj->getId());
				$rs->fields['formasPago'] = array();
				
				while(!$rsAux->EOF){
					array_push($rs->fields['formasPago'], $rsAux->fields);
					$rsAux->moveNext();
				}
				
				$rsAux = $db->Execute("select numeros, letras, talla from pedidonumerosletras where idPedido = ".$obj->getId());
				$rs->fields['numerosLetras'] = array();
				
				while(!$rsAux->EOF){
					array_push($rs->fields['numerosLetras'], $rsAux->fields);
					$rsAux->moveNext();
				}
				
				$archivos = array();
				$directorio  = scandir("repositorio/pedidos/orden_".$obj->getId()."/");
				foreach($directorio as $file){
					if (!in_array($file, array("..", ".")))
						array_push($archivos, $file);
				}
				
				$rs->fields["archivos"] = $archivos;
				
				echo json_encode($rs->fields);
			break;
			case 'uploadfile':
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0 && $_GET['pedido'] <> ''){
					if (!file_exists("repositorio/pedidos/orden_".$_GET['pedido']))
						mkdir("repositorio/pedidos/orden_".$_GET['pedido'], 0755);
									
					if(move_uploaded_file($_FILES['upl']['tmp_name'], "repositorio/pedidos/orden_".$_GET['pedido']."/".$_FILES['upl']['name'])){
						chmod("repositorio/pedidos/orden_".$_GET['pedido']."/".$_FILES['upl']['name'], 0755);
						echo '{"status":"success"}';
						exit;
					}
				}
				
				echo '{"status":"error"}';
			break;
			case 'uploadfile2':
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0 && $_GET['pedido'] <> ''){
					$s = explode(".", $_FILES['upl']['name']);
				
					if(move_uploaded_file($_FILES['upl']['tmp_name'], "repositorio/capturas/img_".$_GET['pedido'].".jpg")){
						chmod("repositorio/capturas/img_".$_GET['pedido'].".jpg", 0755);
						echo '{"status":"success"}';
						exit;
					}
				}
				
				echo '{"status":"error"}';
			break;
			case 'delfile':	
				$ruta = "repositorio/pedidos/orden_".$_POST['pedido']."/".$_POST['archivo'];
				
				$band = unlink($ruta)?true:false;
				
				echo json_encode(array("band" => $band));
			break;
			case 'imprimir':
				#se genera el documento pdf
				require_once(getcwd()."/repositorio/pdf/pedido.php");
				$pdf = new RPedido($_POST['pedido']);
				$pdf->generar();
				
				echo json_encode(array("band" => true, "documento" => $pdf->output()));
			break;
			
			case 'addTecnica':
				($id, $tecnica, $color, $cantidad, $ubicacion, $size, $medidas, $precio){
				$pedido = new TPedido($_POST['pedido']);
				echo json_encode(array("band" => $pedido->addTecnica($_POST['id'], $_POST['tecnica'], $_POST['color'], $_POST['cantidad'], $_POST['ubicacion'], $_POST['size'], $_POST['medidas'], $_POST['precio']));
			break;
		}
	break;
};
?>