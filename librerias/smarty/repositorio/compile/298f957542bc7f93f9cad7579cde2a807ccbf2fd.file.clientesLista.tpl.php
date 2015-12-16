<?php /* Smarty version Smarty-3.1.11, created on 2015-12-16 12:25:08
         compiled from "templates/plantillas/modulos/pedidos/clientesLista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037936342566884e2655461-48769858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '298f957542bc7f93f9cad7579cde2a807ccbf2fd' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/clientesLista.tpl',
      1 => 1449757278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037936342566884e2655461-48769858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_566884e26ae328_09899134',
  'variables' => 
  array (
    'clientes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566884e26ae328_09899134')) {function content_566884e26ae328_09899134($_smarty_tpl) {?><table id="tblClientes" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr cliente='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
		</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>