<?php /* Smarty version Smarty-3.1.11, created on 2015-11-03 08:46:08
         compiled from "templates/plantillas/modulos/cotizador/estampado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:702133820563253a99cfea3-88946170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d29cb264a37ab2ad5a0cd845bcc037418a569a' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/estampado.tpl',
      1 => 1446561641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702133820563253a99cfea3-88946170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_563253a99f8ca6_91735681',
  'variables' => 
  array (
    'estampado' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563253a99f8ca6_91735681')) {function content_563253a99f8ca6_91735681($_smarty_tpl) {?><form role="form" id="frmAddSerigrafiaDigital" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="selItem">Tipo</label></div>
		<div class="col-xs-10">
			<select id="selItem" name="selItem" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['estampado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idItem'];?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
" precio="<?php echo $_smarty_tpl->tpl_vars['item']->value['precio'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtPU">Precio Unitario</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtPU" name="txtPU" autocomplete="off" disabled="false">
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