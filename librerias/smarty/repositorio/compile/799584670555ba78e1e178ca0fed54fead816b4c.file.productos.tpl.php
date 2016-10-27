<?php /* Smarty version Smarty-3.1.11, created on 2016-10-27 13:02:51
         compiled from "templates/plantillas/modulos/pedidos/wizard/productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:528221825812414b37b389-04198857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799584670555ba78e1e178ca0fed54fead816b4c' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/wizard/productos.tpl',
      1 => 1477591325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528221825812414b37b389-04198857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tallas' => 0,
    'contador' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5812414b4707a1_78703716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812414b4707a1_78703716')) {function content_5812414b4707a1_78703716($_smarty_tpl) {?><div class="row">
	<label class="col-xs-12 col-sm-2" for="txtNombreRemera">Nombre</label>
	<div class="col-xs-12 col-sm-6">
		<input type="text" class="form-control" id="txtNombreRemera" name="txtNombreRemera">
	</div>
	<div class="col-xs-4">
		<button type="button" class="btn btn-success" id="btnLstRemeras"><i class="fa fa-search"></i> Buscar</button>
	</div>
</div>
<br />
<div class="row" style="overflow: scroll">
	<table id="tblTalles" class="table table-bordered" totalTallas="<?php echo count($_smarty_tpl->tpl_vars['tallas']->value);?>
">
		<thead>
			<tr>
				<th rowspan="2" class="text-center">Nombre</th>
				<th colspan="<?php echo count($_smarty_tpl->tpl_vars['tallas']->value);?>
" class="text-center">Talles</th>
			</tr>
			<tr>
				<?php $_smarty_tpl->tpl_vars["contador"] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tallas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<th class="text-center" talla="<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre2'];?>
</th>
					<?php $_smarty_tpl->tpl_vars["contador"] = new Smarty_variable($_smarty_tpl->tpl_vars['contador']->value+1, null, 0);?>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div><?php }} ?>