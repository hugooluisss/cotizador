<?php
global $objModulo;
switch($objModulo->getId()){
	case 'horarios':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select 
			extract(hour from lunesEntrada) as horaEntradaL,
			extract(minute from lunesEntrada) as minutosEntradaL, 
			extract(hour from lunesSalida) as horaSalidaL,
			extract(minute from lunesSalida) as minutosSalidaL, 
			extract(hour from sabadoEntrada) as horaEntradaS,
			extract(minute from sabadoEntrada) as minutosEntradaS, 
			extract(hour from sabadoSalida) as horaSalidaS,
			extract(minute from sabadoSalida) as minutosSalidaS
		from horario");
		$smarty->assign("datos", $rs->fields);
	break;
	case 'chorarios':
		switch($objModulo->getAction()){
			case 'guardar':
				$db = TBase::conectaDB();
				$db->Execute("delete from horario");
				
				$db->Execute("insert into horario (lunesEntrada, lunesSalida, sabadoEntrada, sabadoSalida) values ('".$_POST['lunesEntrada']."', '".$_POST['lunesSalida']."', '".$_POST['sabadoEntrada']."', '".$_POST['sabadoSalida']."')");
				
				echo json_encode(array("band" => true));
			break;
		}
	break;
}
?>