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
		
		$rs = $db->Execute("select distinct nombre from talla;");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['nombre2'] = str_replace("Talle ", "", $rs->fields['nombre']);
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("tallas", $datos);
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
			default:
				$sql = "";
		}
		$rs = $db->Execute("select * from pedido a".$sql);
		$datos = array();
		$cliente = new TCliente();
		$estado = new TEstado();
		$usuario = new TUsuario();
		while(!$rs->EOF){
			$usuario->setId($rs->fields['idUsuario']);
			$cliente->setId($rs->fields['idCliente']);
			$estado->setId($rs->fields['idEstado']);
			$rs->fields['cliente'] = $cliente->getNombre();
			$rs->fields['color'] = $estado->getColor();
			$rs->fields['usuario'] = $usuario->getNombre(); 
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
					
					echo json_encode(array("band" => true, "pedido" => $obj->getId(), "documento" => $pdf->output()));
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
				$rs->fields['entregables'] = array();
				
				while(!$rsAux->EOF){
					array_push($rs->fields['entregables'], $rsAux->fields);
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
			case 'delfile':	
				$ruta = "repositorio/pedidos/orden_".$_GET['pedido']."/".$_POST['archivo'];
				
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
		}
	break;
};
?>