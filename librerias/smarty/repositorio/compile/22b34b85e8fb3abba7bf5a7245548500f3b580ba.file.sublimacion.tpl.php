<?php /* Smarty version Smarty-3.1.11, created on 2015-12-07 13:25:05
         compiled from "templates/plantillas/modulos/cotizador/sublimacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2357759056572af7afd6b2-94081585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22b34b85e8fb3abba7bf5a7245548500f3b580ba' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/sublimacion.tpl',
      1 => 1449516246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2357759056572af7afd6b2-94081585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56572af7afdde1_41907879',
  'variables' => 
  array (
    'sublimacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56572af7afdde1_41907879')) {function content_56572af7afdde1_41907879($_smarty_tpl) {?><form role="form" id="frmAddSerigrafiaDigital" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="txtCantidad">Cantidad</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtCantidad" name="txtCantidad" autocomplete="off">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtPU">Precio Unitario</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtPU" name="txtPU" autocomplete="off" disabled="false">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtTotal">Total</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtTotal" name="txtTotal" autocomplete="off" disabled="false">
		</div>
	</div>
	<input type="hidden" id="idSublimacion" name="idSublimacion" value="<?php echo $_smarty_tpl->tpl_vars['sublimacion']->value;?>
"/>
</form>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregar"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div><?php }} ?>