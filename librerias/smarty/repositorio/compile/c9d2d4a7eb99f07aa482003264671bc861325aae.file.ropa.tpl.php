<?php /* Smarty version Smarty-3.1.11, created on 2015-10-31 12:31:56
         compiled from "templates/plantillas/modulos/cotizador/ropa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469277975629051436f911-66904102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d2d4a7eb99f07aa482003264671bc861325aae' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/ropa.tpl',
      1 => 1446249423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469277975629051436f911-66904102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56290514387e27_35910126',
  'variables' => 
  array (
    'ropa' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56290514387e27_35910126')) {function content_56290514387e27_35910126($_smarty_tpl) {?><div class="row">
	<div class="col-xs-2"><label for="selRopa">Artículo</label></div>
	<div class="col-xs-10">
		<select id="selRopa" name="selRopa" class="form-control">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ropa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idItem'];?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
			<?php } ?>
		</select>
	</div>
	<div class="col-xs-12"><button type="button" id="btnBuscarTallas" class="btn btn-default">Obtener tallas</button></div>
</div>
<br />
<div id="dvTallas">
</div><?php }} ?>