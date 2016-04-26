<?php /* Smarty version Smarty-3.1.11, created on 2016-04-22 21:33:53
         compiled from "templates/plantillas/modulos/reportes/remeras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1114835440571ad478e65458-36771964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678f1284fa089ea48f3f7f1a514079aecd9d25d0' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/remeras.tpl',
      1 => 1461378776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1114835440571ad478e65458-36771964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_571ad478e69f01_26621845',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571ad478e69f01_26621845')) {function content_571ad478e69f01_26621845($_smarty_tpl) {?><table id="tblRemeras" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Talla</th>
			<th>Cantidad</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idItem'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marca'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['talla'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php }} ?>