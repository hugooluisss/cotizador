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
define('LAYOUT_VOTOS', 'layout/votos.tpl');

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
	'seguridad' => false,
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
	'js' => array('cotizacion.class.js', 'serigrafia.class.js', 'cliente.class.js', 'otrastecnicas.class.js'),
	'jsTemplate' => array('cotizador.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['cotizador_tallas'] = array(
	'controlador' => 'cotizador.php',
	'vista' => 'cotizador/tallas.tpl',
	'descripcion' => 'Lista de tallas en la cotización',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['ccotizacion'] = array(
	'controlador' => 'cotizador.php',
	'descripcion' => 'Cotizador',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaCotizaciones'] = array(
	'controlador' => 'cotizador.php',
	'vista' => 'cotizador/lista.tpl',
	'descripcion' => 'Lista de cotizaciones',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*serigrafia*/
$conf['serigrafia'] = array(
	'controlador' => 'serigrafia.php',
	'vista' => 'serigrafia/panel.tpl',
	'descripcion' => 'Posiciones para serigrafia',
	'seguridad' => true,
	'js' => array('serigrafia.class.js', 'limite.class.js'),
	'jsTemplate' => array('serigrafia.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaSerigrafia'] = array(
	'controlador' => 'serigrafia.php',
	'vista' => 'serigrafia/lista.tpl',
	'descripcion' => 'Lista de posiciones',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cserigrafia'] = array(
	'controlador' => 'serigrafia.php',
	'descripcion' => 'Controlador de serigrafia',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['listaLimites'] = array(
	'controlador' => 'limites.php',
	'vista' => 'serigrafia/listaLimites.tpl',
	'descripcion' => 'Lista de limites de precios para serigrafia',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['climites'] = array(
	'controlador' => 'limites.php',
	'descripcion' => 'Controlador de limites de precios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['serigrafiaPrecios'] = array(
	'controlador' => 'serigrafia.php',
	'vista' => 'serigrafia/panelPrecios.tpl',
	'descripcion' => 'Panel de definición de precios',
	'seguridad' => true,
	'js' => array('serigrafia.class.js'),
	'jsTemplate' => array('preciosSerigrafia.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['definicionPrecios'] = array(
	'controlador' => 'serigrafia.php',
	'vista' => 'serigrafia/precios.tpl',
	'descripcion' => 'Lista de limites de precios para serigrafia',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

/*Serigrafía digital*/
$conf['serigrafiaDigital'] = array(
	'controlador' => 'serigrafiaDigital.php',
	'vista' => 'serigrafiaDigital/panel.tpl',
	'descripcion' => 'Servicios de serigrafía digital',
	'seguridad' => true,
	'js' => array('serigrafiaDigital.class.js'),
	'jsTemplate' => array('serigrafiaDigital.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaSerigrafiaDigital'] = array(
	'controlador' => 'serigrafiaDigital.php',
	'vista' => 'serigrafiaDigital/lista.tpl',
	'descripcion' => 'Lista de posiciones',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cserigrafiadigital'] = array(
	'controlador' => 'serigrafiaDigital.php',
	'descripcion' => 'Controlador de serigrafia digital',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Vinilo*/
$conf['corteVinilo'] = array(
	'controlador' => 'vinilo.php',
	'vista' => 'vinilo/panel.tpl',
	'descripcion' => 'Cortes de vinil',
	'seguridad' => true,
	'js' => array('vinilo.class.js'),
	'jsTemplate' => array('vinilo.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaVinilo'] = array(
	'controlador' => 'vinilo.php',
	'vista' => 'vinilo/lista.tpl',
	'descripcion' => 'Lista de cortes de vinilo',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cvinilo'] = array(
	'controlador' => 'vinilo.php',
	'descripcion' => 'Controlador de vinilos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

/*Vinilo*/
$conf['otrosServicios'] = array(
	'controlador' => 'otros.php',
	'vista' => 'otros/panel.tpl',
	'descripcion' => 'Otros servicios',
	'seguridad' => true,
	'js' => array('otros.class.js'),
	'jsTemplate' => array('otros.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaOtros'] = array(
	'controlador' => 'otros.php',
	'vista' => 'otros/lista.tpl',
	'descripcion' => 'Lista de otros',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cotros'] = array(
	'controlador' => 'otros.php',
	'descripcion' => 'Controlador de otros',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Vinilo*/
$conf['numerosLetras'] = array(
	'controlador' => 'estampado.php',
	'vista' => 'estampado/panel.tpl',
	'descripcion' => 'Otros servicios',
	'seguridad' => true,
	'js' => array('estampado.class.js'),
	'jsTemplate' => array('estampado.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaEstampado'] = array(
	'controlador' => 'estampado.php',
	'vista' => 'estampado/lista.tpl',
	'descripcion' => 'Lista de otros',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cEstampado'] = array(
	'controlador' => 'estampado.php',
	'descripcion' => 'Controlador de números y letras',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Otros servicios*/
$conf['tecnicasImpresion'] = array(
	'controlador' => 'tecnicasImpresion.php',
	'vista' => 'tecnicasImpresion/panel.tpl',
	'descripcion' => 'tecnicasImpresion',
	'seguridad' => true,
	'js' => array('otrastecnicas.class.js', 'limite.class.js'),
	'jsTemplate' => array('otrasTecnicas.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaTecnicas'] = array(
	'controlador' => 'tecnicasImpresion.php',
	'vista' => 'tecnicasImpresion/lista.tpl',
	'descripcion' => 'Lista de tecnicasImpresion',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cTecnicas'] = array(
	'controlador' => 'tecnicasImpresion.php',
	'descripcion' => 'Controlador de tecnicasImpresion',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['clienteDatos'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'controlador' => 'clientes.php',
	'js' => array('cliente.class.js'),
	'jsTemplate' => array('clientes.js'),
	'capa' => LAYOUT_DEFECTO,
	'vista' => 'clientes/modificar.tpl');
	
$conf['tecnicasPrecios'] = array(
	'controlador' => 'tecnicasImpresion.php',
	'vista' => 'tecnicasImpresion/panelPrecios.tpl',
	'descripcion' => 'Panel de definición de precios',
	'seguridad' => true,
	'js' => array('otrastecnicas.class.js'),
	'jsTemplate' => array('preciosOtrasTecnicas.js'),
	'capa' => LAYOUT_DEFECTO);

/*Catalogo de impresiones de pedidos*/
$conf['catImpresionesPed'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'catalogoImpresiones/panel.tpl',
	'descripcion' => 'Catalogo de impresiones de pedidos',
	'seguridad' => true,
	'js' => array('impresionPedidos.class.js'),
	'jsTemplate' => array('impresionPedidos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listadoImpresiones'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'catalogoImpresiones/lista.tpl',
	'descripcion' => 'Lista de servicios de impresion',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cCatalogoPedidos'] = array(
	'controlador' => 'configPedidos.php',
	'descripcion' => 'Controlador de servicios en pedidos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Entregables en pedidos*/
$conf['entregablesPed'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'entregables/panel.tpl',
	'descripcion' => 'Catalogo de entregables',
	'seguridad' => true,
	'js' => array('entregables.class.js'),
	'jsTemplate' => array('entregables.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listadoEntregables'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'entregables/lista.tpl',
	'descripcion' => 'Lista de entregables',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['centregables'] = array(
	'controlador' => 'configPedidos.php',
	'descripcion' => 'Controlador de entregables en pedidos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

/* Pedidos clientes */
$conf['pedidos'] = array(
	'controlador' => 'pedidos.php',
	'vista' => 'pedidos/panel.tpl',
	'descripcion' => 'Pedidos',
	'seguridad' => true,
	'js' => array('pedidos.class.js', 'cliente.class.js', "impresionPedidos.class.js"),
	'jsTemplate' => array('pedidos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['clientesListaBusqueda'] = array(
	'controlador' => 'pedidos.php',
	'vista' => 'pedidos/clientesLista.tpl',
	'descripcion' => 'Pedidos',
	'seguridad' => true,
	'js' => array('pedidos.class.js'),
	'jsTemplate' => array('pedidos.js'),
	'capa' => LAYOUT_AJAX);
	
/*Entregables en pedidos*/
$conf['entregablesPed'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'entregables/panel.tpl',
	'descripcion' => 'Catalogo de entregables',
	'seguridad' => true,
	'js' => array('entregables.class.js'),
	'jsTemplate' => array('entregables.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listadoEntregables'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'entregables/lista.tpl',
	'descripcion' => 'Lista de entregables',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

/* Estados */
$conf['estadoPedidos'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'estadoPedidos/panel.tpl',
	'descripcion' => 'Estado de los pedidos',
	'seguridad' => true,
	'js' => array('estados.class.js'),
	'jsTemplate' => array('estados.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listadoEstados'] = array(
	'controlador' => 'configPedidos.php',
	'vista' => 'estadoPedidos/lista.tpl',
	'descripcion' => 'Lista de estados para los pedidos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['cestados'] = array(
	'controlador' => 'configPedidos.php',
	'descripcion' => 'Controlador de estados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cpedidos'] = array(
	'controlador' => 'pedidos.php',
	'descripcion' => 'Controlador de pedidos',
	'seguridad' => true,
	'debugSeg' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['listaPedidos'] = array(
	'controlador' => 'pedidos.php',
	'vista' => 'pedidos/lista.tpl',
	'descripcion' => 'Lista de pedidos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['vistaCliente'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'controlador' => 'seguimientoPedidos.php',
	'jsTemplate' => array('seguimiento.js'),
	'capa' => LAYOUT_DEFECTO,
	'vista' => 'pedidos/seguimiento.tpl');
	
$conf['cseguimiento'] = array(
	'controlador' => 'seguimientoPedidos.php',
	'descripcion' => 'Controlador del seguimiento',
	'seguridad' => false,
	'debugSeg' => false,
	'capa' => LAYOUT_AJAX);

$conf['horarios'] = array(
	'controlador' => 'horarios.php',
	'vista' => 'horarios/panel.tpl',
	'descripcion' => 'Horarios',
	'seguridad' => true,
	'jsTemplate' => array('horario.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['chorarios'] = array(
	'controlador' => 'horarios.php',
	'descripcion' => 'Controlador de horarios',
	'seguridad' => true,
	'debugSeg' => false,
	'capa' => LAYOUT_AJAX);

/* Reportes */	
$conf['reportes'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/panel.tpl',
	'descripcion' => 'Reportes',
	'seguridad' => true,
	'jsTemplate' => array('reportes.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['rventaremeras'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/remeras.tpl',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['rventastotales'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/ventas.tpl',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['rtecnicas'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/tecnicas.tpl',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['rtipoclientes'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/tipoCliente.tpl',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/* CRM */
$conf['crm'] = array(
	'controlador' => 'crm.php',
	'vista' => 'clientes/crm/panel.tpl',
	'descripcion' => 'crm',
	'seguridad' => true,
	'js' => array('aviso.class.js'),
	'jsTemplate' => array('crm.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['ccrm'] = array(
	'controlador' => 'crm.php',
	'descripcion' => 'Controlador del crm',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaAvisos'] = array(
	'controlador' => 'avisos.php',
	'vista' => 'clientes/crm/listaAvisos.tpl',
	'descripcion' => 'Lista de avisos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cavisos'] = array(
	'controlador' => 'avisos.php',
	'descripcion' => 'Controlador de avisos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['getAviso'] = array(
	'controlador' => 'avisos.php',
	'descripcion' => 'Vista del aviso',
	'vista' => 'clientes/crm/aviso.tpl',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['pedidos2'] = array(
	'controlador' => 'pedidos.php',
	'vista' => 'pedidos/panel2.tpl',
	'descripcion' => 'Pedidos',
	'seguridad' => true,
	'js' => array('pedidos2.class.js', 'cliente.class.js', "impresionPedidos.class.js"),
	'jsTemplate' => array('pedidos2.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['lstImpresion'] = array(
	'controlador' => 'pedidos.php',
	'vista' => 'pedidos/wizard/listaImpresion.tpl',
	'descripcion' => 'Lista de impresión',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
include_once("config/campania.php");
include_once("config/gastos.php");
?>