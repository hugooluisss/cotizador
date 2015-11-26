<?php /* Smarty version Smarty-3.1.11, created on 2015-11-26 09:50:49
         compiled from "templates/plantillas/modulos/cotizador/vinilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1227522951562fccd7d68587-20572526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e34ae310f83c416fc58923f95564e1ddd7d7b3' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/vinilo.tpl',
      1 => 1448547635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1227522951562fccd7d68587-20572526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562fccd7d69209_46320711',
  'variables' => 
  array (
    'vinilo' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562fccd7d69209_46320711')) {function content_562fccd7d69209_46320711($_smarty_tpl) {?><form role="form" id="frmAddSerigrafiaDigital" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="selItem">Tipo</label></div>
		<div class="col-xs-10">
			<select id="selItem" name="selItem" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vinilo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
		<div class="col-xs-2"><label for="txtAncho">Ancho</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtAncho" name="txtAncho" autocomplete="off" placeholder="cm">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtAlto">Alto</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtAlto" name="txtAlto" autocomplete="off" placeholder="cm">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtCantidad">Cantidad de cm<sup>2</sup></label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtCantidad" name="txtCantidad" autocomplete="off"  disabled="true">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtUnidades">Unidades</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtUnidades" name="txtUnidades" autocomplete="off">
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