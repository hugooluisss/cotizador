<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaRopa':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from ropa a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cropa':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TRopa();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setTipo(1);
				$obj->setPrecio($_POST['precio']);
				$obj->setMarca($_POST['marca']);
				$obj->setDescripcion($_POST['descripcion']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TRopa($_POST['item']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'autocomplete':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select * from item a join ropa b using(idItem) where nombre like '%".$_GET['term']."%'");
				
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					$el['id'] = $rs->fields['idItem'];
					$el['label'] = $rs->fields['nombre'].' '.$rs->fields['marca'];
					$el['identificador'] = $rs->fields['idItem'];
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'getData':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select * from item a join ropa b using(idItem) where idItem = ".$_POST['id']);
				
				$rsTallas = $db->Execute("select * from talla where idItem = ".$_POST['id']);
				$rs->fields['tallas'] = array();
				$rs->fields['cantidad'] = array();
				while(!$rsTallas->EOF){
					$rs->fields['tallas'][$rsTallas->fields['nombre']] = $rsTallas->fields['idTalla'];
					
					if ($_POST['pedido'] == '')
						$rs->fields['cantidad'][$rsTallas->fields['nombre']] = 0;
					else{
						$rsCantidad = $db->Execute("select cantidad from movped where idPedido = ".$_POST['pedido']." and idTalla = ".$rsTallas->fields['idTalla']);
						$rs->fields['cantidad'][$rsTallas->fields['nombre']] = $rsCantidad->fields['cantidad'] == ''?0:$rsCantidad->fields['cantidad'];
					}
					
					$rsTallas->moveNext();
				}
				
				echo json_encode($rs->fields);
			break;
		}
	break;
}
?>