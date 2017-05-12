<?php
global $objModulo;
switch($objModulo->getId()){
	case 'gastos':
		#primero se obtienen los ingresos
		$db = TBase::conectaDB();
		$rs = $db->Execute("select distinct year(registro) as anio from pedido");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields['anio']);
			$rs->moveNext();
		}
		$smarty->assign("anios", $datos);
	break;
	case 'listaGastos':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from gasto where year(fecha) = '".$_POST['anio']."' and month(fecha) = '".$_POST['mes']."'");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json']	= json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'listaGastosAnio':
		#primero se obtienen los ingresos
		$db = TBase::conectaDB();
		$mes = array(
			1 => "Enero",
			2 => "Febrero",
			3 => "Marzo",
			4 => "Abril",
			5 => "Mayo",
			6 => "Junio",
			7 => "Julio",
			8 => "Agosto",
			9 => "Septiembre",
			10 => "Octubre",
			11 => "Noviembre",
			12 => "Diciembre"
		);
		$rs = $db->Execute("select year(registro) as anio, month(registro) as mes, sum(precio) as ventas from pedido group by year(registro), month(registro) having anio = '".$_POST['anio']."' order by mes");
		$datos = array();
		while(!$rs->EOF){
			$rs2 = $db->Execute("select sum(b.precio * b.cantidad) as total from pedido a join movped b using(idPedido) where year(registro) = '".$_POST['anio']."' and month(registro) = '".$rs->fields['mes']."'");
			$rs3 = $db->Execute("select sum(monto) as total from gasto where year(fecha) = '".$_POST['anio']."' and month(fecha) = '".$rs->fields['mes']."'");
			
			$rs->fields['nombremes'] = $mes[$rs->fields['mes']];
			$rs->fields['mercaderia'] = $rs2->fields['total'] == ''?0:$rs2->fields['total'];
			$rs->fields['gastos'] = $rs3->fields['total'] == ''?0:$rs3->fields['total'];
			
			$rs->fields['json']	= json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("ventas", $datos);
	break;
	case 'cgastos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TGasto();
				$obj->setId($_POST['id']);
				$obj->setConcepto($_POST['concepto']);
				$obj->setMonto($_POST['monto']);
				$obj->setFecha($_POST['fecha']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TGasto($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>