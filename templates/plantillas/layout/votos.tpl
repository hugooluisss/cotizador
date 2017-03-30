<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: {$PAGE.nombreAplicacion} ::.</title>
		<link rel="stylesheet" href="{$PAGE.ruta}bootstrap/css/bootstrap.min.css">
		
		{if $PAGE.debug}
		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}build/less/AdminLTE.less" />
		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}build/less/skins/_all-skins.less" />
		{else}
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/AdminLTE.css">
		<link rel="stylesheet" type="text/css" href="{$PAGE.ruta}dist/css/skins/_all-skins.css" />
		{/if}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="hold-transition">
	<div class="wrapper">
		
		<!-- Content Wrapper. Contains page content -->
		<div class="">
			<!-- Main content -->
			<section class="login-box-body">
				<div class="row">
					<div class="col-lg-12">
						<br /><br /><br /><br /><br />
					{if $PAGE.vista neq ''}
						{include file=$PAGE.vista}
					{/if}
					</div>
				</div>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
	</div>
    
    
    <!-- jQuery 2.1.4 -->
    <script src="{$PAGE.ruta}plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.css">
    <!-- Bootstrap 3.3.5 -->
    <script src="{$PAGE.ruta}bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{$PAGE.ruta}plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="{$PAGE.ruta}plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{$PAGE.ruta}plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{$PAGE.ruta}plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{$PAGE.ruta}plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{$PAGE.ruta}plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{$PAGE.ruta}plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{$PAGE.ruta}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="{$PAGE.ruta}plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{$PAGE.ruta}plugins/fastclick/fastclick.min.js"></script>
    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.es.js"></script>
    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.js"></script>
    
    <link rel="stylesheet" href="{$PAGE.ruta}plugins/datatables/dataTables.bootstrap.css">
    <script src="{$PAGE.ruta}plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{$PAGE.ruta}plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{$PAGE.ruta}plugins/datatables/lenguaje/ES-mx.js"></script>
    
    <script src="{$PAGE.ruta}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{$PAGE.ruta}plugins/upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="{$PAGE.ruta}plugins/upload/js/jquery.fileupload.js"></script>
    
    <script type="text/javascript" src="{$PAGE.ruta}plugins/datepicker/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="{$PAGE.ruta}plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
    
    <script type="text/javascript" src="{$PAGE.ruta}plugins/timepicker/bootstrap-timepicker.min.js"></script>
    
    <link rel="stylesheet" href="{$PAGE.ruta}plugins/datepicker/datepicker3.css" />
     
    <script src="{$PAGE.ruta}plugins/input-mask/jquery.inputmask.js"></script>
    <script src="{$PAGE.ruta}plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="{$PAGE.ruta}plugins/input-mask/jquery.inputmask.extensions.js"></script>
    
    <link rel="stylesheet" media="screen" type="text/css" href="{$PAGE.ruta}plugins/colorpicker/bootstrap-colorpicker.css" />
    <script type="text/javascript" src="{$PAGE.ruta}plugins/colorpicker/bootstrap-colorpicker.js"></script>
    
    <script src="{$PAGE.ruta}dist/js/app.js" type="text/javascript"></script>
    <script src="{$PAGE.ruta}plugins/upload/js/jquery.fileupload.js" type="javascript"></script>
    
	<script src="{$PAGE.ruta}plugins/upload/js/jquery.iframe-transport.js"></script>
	<script src="{$PAGE.ruta}plugins/upload/js/jquery.fileupload.js"></script>
	
	<script src="{$PAGE.ruta}plugins/twitter-bootstrap-wizard-master/jquery.bootstrap.wizard.min"></script>
		
	<script type="text/javascript" src="templates/javascript/app.js?{rand()}"></script>
    
    {if $PAGE.debug}
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
    {else}
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      //$.widget.bridge('uibutton', $.ui.button);
    </script>
    {/if}
    
    <style type="text/css"> 
    	.ui-autocomplete { z-index:2147483647; }
    </style>
  </body>
</html>
