<?php /* Smarty version Smarty-3.1.11, created on 2015-11-26 09:50:49
         compiled from "templates/plantillas/modulos/cotizador/ropa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469277975629051436f911-66904102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d2d4a7eb99f07aa482003264671bc861325aae' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/ropa.tpl',
      1 => 1448547635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469277975629051436f911-66904102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56290514387e27_35910126',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56290514387e27_35910126')) {function content_56290514387e27_35910126($_smarty_tpl) {?><div class="row">
	<div class="col-xs-2"><label for="selRopa">Artículo</label></div>
	<div class="col-xs-9">
		<input type="text" id="txtRopa" name="txtRopa" autocomplete="false" class="form-control">
	</div>
	<div class="col-xs-1">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#winRopa" id="lstCotizaciones" title="Catálogo de ropa"><i class="fa fa-list"></i></a>
	</div>
	<div class="col-xs-12"><button type="button" id="btnBuscarTallas" class="btn btn-default">Obtener tallas</button></div>
</div>
<br />
<div id="dvTallas">
</div><?php }} ?>