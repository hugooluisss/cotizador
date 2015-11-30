<?php /* Smarty version Smarty-3.1.11, created on 2015-11-28 02:36:02
         compiled from "templates/plantillas/modulos/cotizador/transfer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192850158056572af7abeb58-39580390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0f852a188ab50ba1b7fd65a45862118e158720' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/transfer.tpl',
      1 => 1448699474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192850158056572af7abeb58-39580390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56572af7abf299_58841722',
  'variables' => 
  array (
    'transfer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56572af7abf299_58841722')) {function content_56572af7abf299_58841722($_smarty_tpl) {?><form role="form" id="frmAddSerigrafiaDigital" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="txtPU">Precio Unitario</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtPU" name="txtPU" autocomplete="off" disabled="false" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value;?>
">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtCantidad">Cantidad</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtCantidad" name="txtCantidad" autocomplete="off">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtTotal">Total</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtTotal" name="txtTotal" autocomplete="off" disabled="false">
		</div>
	</div>
</form>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregar"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div><?php }} ?>