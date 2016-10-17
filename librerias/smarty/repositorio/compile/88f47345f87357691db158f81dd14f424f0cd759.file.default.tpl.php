<?php /* Smarty version Smarty-3.1.11, created on 2016-10-17 13:13:27
         compiled from "templates/plantillas/layout/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200058433755e4995bd4c484-25432014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f47345f87357691db158f81dd14f424f0cd759' => 
    array (
      0 => 'templates/plantillas/layout/default.tpl',
      1 => 1476727972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200058433755e4995bd4c484-25432014',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e4995c01eac4_35789668',
  'variables' => 
  array (
    'PAGE' => 0,
    'totalAvisos' => 0,
    'avisos' => 0,
    'rowAviso' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4995c01eac4_35789668')) {function content_55e4995c01eac4_35789668($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['nombreAplicacion'];?>
 ::.</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/css/bootstrap.min.css">
		
		<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['debug']){?>
		<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
build/less/AdminLTE.less" />
		<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
build/less/skins/_all-skins.less" />
		<?php }else{ ?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/AdminLTE.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/skins/_all-skins.css" />
		<?php }?>
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/iCheck/flat/blue.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/morris/morris.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datepicker/datepicker3.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/timepicker/bootstrap-timepicker.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/upload/css/jquery.fileupload.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="hold-transition skin-green-light sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>C</b>otizador</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
img/logo-min.png" class="img-rounded"/></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']!=''){?>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- Notifications: style can be found in dropdown.less -->
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning totalAvisos"><?php echo $_smarty_tpl->tpl_vars['totalAvisos']->value;?>
</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">Tienes <span class="totalAvisos"><?php echo $_smarty_tpl->tpl_vars['totalAvisos']->value;?>
</span> avisos</li>
									<li>
									<!-- inner menu: contains the actual data -->
										<ul class="menu listaAvisos">
											<?php  $_smarty_tpl->tpl_vars["rowAviso"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["rowAviso"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["rowAviso"]->key => $_smarty_tpl->tpl_vars["rowAviso"]->value){
$_smarty_tpl->tpl_vars["rowAviso"]->_loop = true;
?>
											<li <?php if ($_smarty_tpl->tpl_vars['rowAviso']->value['estado']==1){?>class="nuevo"<?php }?>>
												<a href="#" class="btnAvisos" aviso="<?php echo $_smarty_tpl->tpl_vars['rowAviso']->value['idAviso'];?>
" cliente="<?php echo $_smarty_tpl->tpl_vars['rowAviso']->value['idCliente'];?>
">
													<i class="fa fa-users text-aqua"></i><?php echo $_smarty_tpl->tpl_vars['rowAviso']->value['cliente'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['rowAviso']->value['alerta'];?>
</small>
												</a>
											</li>
											<?php } ?>
										</ul>
									</li>
								</ul>
							</li>
							
							<li class="dropdown messages-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-gears"></i> <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['nombreUsuario'];?>

								</a>
								<ul class="dropdown-menu">
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li><a href="?mod=usuarioDatosPersonales"><i class="fa fa-edit text-green"></i> <span style="color: black">Cambiar datos personales</span></a></li>
											<li><a href="#" action="changePass"><i class="fa fa-warning text-orange"></i> <span style="color: black">Cambiar contraseña</span></a></li>
											<li><a href="?mod=logout"><i class="fa fa-sign-out text-green"></i> <span style="color: black">Salir del sistema</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				<?php }?>
			</nav>
		</header>
		
		<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']!=''){?>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
				<!-- Sidebar user panel -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MENÚ PRINCIPAL</li>
						<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']==1){?>
						<li class="<?php if (in_array($_smarty_tpl->tpl_vars['PAGE']->value['modulo'],array('admonUsuarios','clientes','ropa','serigrafia','serigrafiaDigital','corteVinilo','numerosLetras','tecnicasImpresion','otrosServicios','catImpresionesPed','entregablesPed','estadoPedidos','horarios','reportes','crm'))){?>active<?php }?> treeview">
							<a href="#">
								<span>Administración</span> <i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='admonUsuarios'){?>class="active"<?php }?>><a href="?mod=admonUsuarios"><i class="fa fa-user"></i> Usuarios</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='clientes'||$_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='crm'){?>class="active"<?php }?>><a href="?mod=clientes"><i class="fa fa-book"></i> Clientes</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='ropa'){?>class="active"<?php }?>><a href="?mod=ropa"><i class="fa fa-shopping-cart"></i> Ropa</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='serigrafia'){?>class="active"<?php }?>><a href="?mod=serigrafia"><i class="fa fa-tint"></i> Serigrafía</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='serigrafiaDigital'){?>class="active"<?php }?>><a href="?mod=serigrafiaDigital"><i class="fa fa-print"></i> Serigrafía digital</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='corteVinilo'){?>class="active"<?php }?>><a href="?mod=corteVinilo"><i class="fa fa-cut"></i> Vinilo de corte</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='numerosLetras'){?>class="active"<?php }?>><a href="?mod=numerosLetras"><i class="fa fa-slack"></i> Números y letras</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='tecnicasImpresion'){?>class="active"<?php }?>><a href="?mod=tecnicasImpresion"><i class="fa fa-language"></i> Otras técnicas</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='otrosServicios'){?>class="active"<?php }?>><a href="?mod=otrosServicios"><i class="fa fa-codepen"></i> Servicios adicionales</a></li>
								<br />
								
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='catImpresionesPed'){?>class="active"<?php }?>><a href="?mod=catImpresionesPed"><i class="fa fa-print"></i> Impresiones pedidos</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='entregablesPed'){?>class="active"<?php }?>><a href="?mod=entregablesPed"><i class="fa fa-truck"></i> Entregables</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='estadoPedidos'){?>class="active"<?php }?>><a href="?mod=estadoPedidos"><i class="fa fa-circle"></i> Estado de los pedidos</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='horarios'){?>class="active"<?php }?>><a href="?mod=horarios"><i class="fa fa-clock-o"></i> Horarios</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='reportes'){?>class="active"<?php }?>><a href="?mod=reportes"><i class="fa fa-file-word-o"></i> Reportes</a></li>
							</ul>
						</li>
						<br />
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']==4||$_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']==2){?>
						<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='reportes'){?>class="active"<?php }?>><a href="?mod=reportes"><i class="fa fa-file-word-o"></i> Reportes</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']!=4){?>
						<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='cotizador'){?>class="active"<?php }?>><a href="?mod=cotizador"><i class="fa fa-calculator"></i> Cotizador</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='pedidos'){?>class="active"<?php }?>><a href="?mod=pedidos"><i class="fa fa-shopping-cart"></i> Pedidos</a></li>
						<?php }?>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
		<?php }?>
		
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-lg-12">
					<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<?php }?>
					</div>
				</div>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Versión</b> <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['version'];?>

			</div>
			<strong>Copyright &copy; <?php echo date("Y");?>
.</strong> Todos los derechos reservados
		</footer>
	</div>
    
    
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQueryUI/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQueryUI/jquery-ui.css">
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/fastclick/fastclick.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/validate/validate.es.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/validate/validate.js"></script>
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datatables/dataTables.bootstrap.css">
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datatables/lenguaje/ES-mx.js"></script>
    
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/upload/js/jquery.fileupload.js"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datepicker/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/timepicker/bootstrap-timepicker.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/datepicker/datepicker3.css" />
     
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/input-mask/jquery.inputmask.extensions.js"></script>
    
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/colorpicker/bootstrap-colorpicker.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/colorpicker/bootstrap-colorpicker.js"></script>
    
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/js/app.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/upload/js/jquery.fileupload.js" type="javascript"></script>
    
	<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/upload/js/jquery.iframe-transport.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/upload/js/jquery.fileupload.js"></script>
	
	<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/twitter-bootstrap-wizard-master/jquery.bootstrap.wizard.min"></script>
		
	<script type="text/javascript" src="templates/javascript/app.js?<?php echo rand();?>
"></script>
    <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE']->value['scriptsJS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?<?php echo rand();?>
"></script>
	<?php } ?>
	
	<script src="javascript/usuario.class.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
javascript/cambiarPass.js"></script>
    
    <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['debug']){?>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
    <?php }else{ ?>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <?php }?>
    
    <style type="text/css"> 
    	.ui-autocomplete { z-index:2147483647; }
    </style>
    
    
    
    
    
    <div class="modal fade" id="winAlertasMensajes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1>Avisos</h1>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<a href="" class="btn btn-success">Ir a CRM</a>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>
<?php }} ?>