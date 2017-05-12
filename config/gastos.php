<?php
global $conf;

$conf['gastos'] = array(
	'controlador' => 'gastos.php',
	'descripcion' => 'Control de gastos',
	'vista' => 'gastos/panel.tpl',
	'seguridad' => true,
	#'js' => array('campania.class.js'),
	#'jsTemplate' => array('campanias.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaCampania'] = array(
	'controlador' => 'campania.php',
	'vista' => 'campania/lista.tpl',
	'descripcion' => 'Lista de campañas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['ccampania'] = array(
	'controlador' => 'campania.php',
	'descripcion' => 'Controlador de campañas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);	
	
$conf['voto'] = array(
	'controlador' => 'campania.php',
	'descripcion' => 'Captura el voto',
	'vista' => 'campania/voto.tpl',
	'seguridad' => false,
	'js' => array('campania.class.js'),
	'jsTemplate' => array('campanias.js'),
	'capa' => LAYOUT_VOTOS);

?>