<?php /* Smarty version Smarty-3.1.11, created on 2016-04-06 10:40:45
         compiled from "templates/plantillas/layout/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44077714855e5a55ba527b5-54558036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b8753aeb60af718a5f9de931383e28721a5592' => 
    array (
      0 => 'templates/plantillas/layout/login.tpl',
      1 => 1456158148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44077714855e5a55ba527b5-54558036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e5a55c009e23_56575319',
  'variables' => 
  array (
    'PAGE' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e5a55c009e23_56575319')) {function content_55e5a55c009e23_56575319($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
plugins/daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/iCheck/square/blue.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="index.php"><b>Cotizador</b>Web</a>
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
img/logo.png" class="img-rounded"/>
					<br />
					Identificate para iniciar sesión
				</p>

				<form action="#" id="frmLogin" method="post">
					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="e-mail" id="txtUsuario" name="txtUsuario" autocomplete="no">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" placeholder="contraseña" id="txtPass" name="txtPass">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-xs-offset-8 col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
						</div><!-- /.col -->
					</div>
				</form>
				<br />
				<div class="row">
					<button class="btn btn-info btn-xs" id="btnSeguimientoPedidos">Seguimiento de pedidos</button>
				</div>
			</div><!-- /.login-box-body -->
		</div>
		
		<div class="modal fade" id="winPedidos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h1>Seguimiento de pedidos</h1>
					</div>
					<div class="modal-body">
						<div class="alert alert-success">
							<strong>Instrucciones</strong> Ingrese el número de la orden y su correo electrónico
						</div>
						
						<div class="row">
							<label for="txtClave" class="col-xs-4">Número de orden</label>
							<div class="col-xs-4">
								<input type="text" value="" class="form-control" id="txtCodigo" name="txtCodigo" />
							</div>
						</div>
						
						<div class="row">
							<label for="txtClave" class="col-xs-4">Email</label>
							<div class="col-xs-8">
								<input type="text" value="" class="form-control" id="txtEmail" name="txtEmail" />
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button id="btnConsultarPedido" class="btn btn-info">Obtener datos</button>
					</div>
				</div>
			</div>
		</div>
    
    
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    
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
    <!-- AdminLTE App -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/js/app.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/validate/validate.js"></script>
    
    <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE']->value['scriptsJS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"></script>
	<?php } ?>
    
    <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['debug']){?>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
    <?php }else{ ?>
    
    

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <?php }?>
  </body>
</html>
<?php }} ?>