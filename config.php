<?php
define('SISTEMA', 'Cotizador');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');

#Login y su controlador	
$conf['inicio'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'capa' => 'layout/login.tpl');

$conf['logout'] = array(
	'controlador' => 'login.php',
	#'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
#Login y su controlador
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['bienvenida'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/bienvenida.tpl',
	'descripcion' => 'Bienvenida al sistema',
	'seguridad' => true,
	'capa' => LAYOUT_DEFECTO);

$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/lista.tpl',
	'descripcion' => 'Lista de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cusuarios'] = array(
	'controlador' => 'usuarios.php',
	'descripcion' => 'Controlador de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Datos de usuario desde el panel*/
$conf['usuarioDatosPersonales'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/datosPersonales.tpl',
	'descripcion' => 'Cambiar datos personales',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('datosUsuario.js'),
	'capa' => LAYOUT_DEFECTO);
	
/*Clientes*/
$conf['clientes'] = array(
	'controlador' => 'clientes.php',
	'vista' => 'clientes/panel.tpl',
	'descripcion' => 'Administración de clientes',
	'seguridad' => true,
	'js' => array('cliente.class.js'),
	'jsTemplate' => array('clientes.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaClientes'] = array(
	'controlador' => 'clientes.php',
	'vista' => 'clientes/lista.tpl',
	'descripcion' => 'Lista de clientes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cclientes'] = array(
	'controlador' => 'clientes.php',
	'descripcion' => 'Controlador de clientes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Ropa*/
$conf['ropa'] = array(
	'controlador' => 'ropa.php',
	'vista' => 'ropa/panel.tpl',
	'descripcion' => 'Catalogo de ropa',
	'seguridad' => true,
	'js' => array('ropa.class.js'),
	'jsTemplate' => array('ropa.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaRopa'] = array(
	'controlador' => 'ropa.php',
	'vista' => 'ropa/lista.tpl',
	'descripcion' => 'Lista de ropa',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cropa'] = array(
	'controlador' => 'ropa.php',
	'descripcion' => 'Controlador de ropa',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Tallas*/
$conf['tallas'] = array(
	'controlador' => 'talla.php',
	'vista' => 'ropa/tallas/panel.tpl',
	'descripcion' => 'Lista de tallas',
	'seguridad' => true,
	'js' => array('talla.class.js'),
	'jsTemplate' => array('talla.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaTallas'] = array(
	'controlador' => 'talla.php',
	'vista' => 'ropa/tallas/lista.tpl',
	'descripcion' => 'Lista de tallas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['ctalla'] = array(
	'controlador' => 'talla.php',
	'descripcion' => 'Controlador de tallas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

/*Cotizador*/
$conf['cotizador'] = array(
	'controlador' => 'cotizador.php',
	'vista' => 'cotizador/panel.tpl',
	'descripcion' => 'cotizador',
	'seguridad' => true,
	'js' => array('cotizacion.class.js'),
	'jsTemplate' => array('cotizador.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['cotizador_tallas'] = array(
	'controlador' => 'cotizador.php',
	'vista' => 'cotizador/tallas.tpl',
	'descripcion' => 'Lista de tallas en la cotización',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>