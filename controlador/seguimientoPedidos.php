<?php
global $objModulo;
switch($objModulo->getId()){
	case 'vistaCliente':
		$db = TBase::conectaDB();
		
		$pedido = new TPedido(base64_decode($_GET['orden']));
		
		$smarty->assign("pedido", $pedido);
		
		$archivos = array();
		$directorio  = scandir("repositorio/pedidos/orden_".$pedido->getId()."/");
		foreach($directorio as $file){
			if (!in_array($file, array("..", "."))){
				$datos = array();
				$datos['nombre'] = $file;
				$datos['extension'] = strtolower(end(explode(".", $file)));
				$datos['ruta'] = "repositorio/pedidos/orden_".$pedido->getId()."/".$file;
				array_push($archivos, $datos);
			}
		}
		
		$smarty->assign("archivos", $archivos);
	break;
	case 'cseguimiento':
		switch($objModulo->getAction()){
			case 'uploadfile':
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0 && $_POST['pedido'] <> ''){
					if (!file_exists("repositorio/pedidos/orden_".$_GET['pedido']))
						mkdir("repositorio/pedidos/orden_".$_POST['pedido'], 0755);
									
					if(move_uploaded_file($_FILES['upl']['tmp_name'], "repositorio/pedidos/orden_".$_POST['pedido']."/".$_FILES['upl']['name'])){
						chmod("repositorio/pedidos/orden_".$_POST['pedido']."/".$_FILES['upl']['name'], 0755);
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
		}
	break;
}
?>