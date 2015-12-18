<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listadoImpresiones':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from catalogoimpresion order by idImpresion");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cCatalogoPedidos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TImpresion();
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TImpresion($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
};
?>