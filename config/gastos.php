<?php
global $conf;

$conf['gastos'] = array(
	'controlador' => 'gastos.php',
	'descripcion' => 'Control de gastos',
	'vista' => 'gastos/panel.tpl',
	'seguridad' => true,
	'js' => array('gasto.class.js'),
	'jsTemplate' => array('gastos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaGastosAnio'] = array(
	'controlador' => 'gastos.php',
	'vista' => 'gastos/listaAnio.tpl',
	'descripcion' => 'Lista de ventas por año',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaGastos'] = array(
	'controlador' => 'gastos.php',
	'vista' => 'gastos/lista.tpl',
	'descripcion' => 'detalle de gastos registrados en el mes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cgastos'] = array(
	'controlador' => 'gastos.php',
	'descripcion' => 'Controlador de gastos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>