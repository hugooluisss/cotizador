<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaSerigrafia':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from serigrafia a join item b using(idItem)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'serigrafiaPrecios':
		$obj = new TSerigrafia($_GET['id']);
		$smarty->assign("nombre", $obj->getNombre());
		$smarty->assign("id", $obj->getId());
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from limite");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("limites", $datos);

	break;
	case 'definicionPrecios':
		$limite = $_GET['limite'];
		$posicion = $_GET['posicion'];
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from tamano");
		$datos = array();
		while(!$rs->EOF){
			for ($color = 1 ; $color <= 5 ; $color++){
				$rs2 = $db->Execute("select precio from precioserigrafia where idTamano = ".$rs->fields['idTamano']." and idLimite = ".$limite." and idItem = ".$posicion." and colores = ".$color);
			
				$rs->fields["colores"][$color] = $rs2->fields['precio'] == ''?0:$rs2->fields['precio'];
			}
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("tamanos", $datos);
	break;
	case 'cserigrafia':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TSerigrafia();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TSerigrafia($_POST['item']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'setPrecio':
				$obj = new TSerigrafia();
				$obj->setId($_POST['item']);
				echo json_encode(array("band" => $obj->setPrecio($_POST['limite'], $_POST['color'], $_POST['tam'], $_POST['precio']), "mensaje" => "Recuerde que el valor debe de ser numérico", "precio" => sprintf("%.2f", $_POST['precio'])));
			break;
		}
	break;
}
?>