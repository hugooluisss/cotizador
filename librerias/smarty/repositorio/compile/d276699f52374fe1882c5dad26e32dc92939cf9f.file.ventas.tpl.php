<?php /* Smarty version Smarty-3.1.11, created on 2016-04-22 21:57:42
         compiled from "templates/plantillas/modulos/reportes/ventas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1059105916571ae22fc18742-48408872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd276699f52374fe1882c5dad26e32dc92939cf9f' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/ventas.tpl',
      1 => 1461380259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059105916571ae22fc18742-48408872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_571ae22fc9e183_03498945',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571ae22fc9e183_03498945')) {function content_571ae22fc9e183_03498945($_smarty_tpl) {?><table id="tblVentas" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Pedido</th>
			<th>Registro</th>
			<th>Entrega</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cliente'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['entrega'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<br />
<div class="row">
	<div class="col-md-offset-8 col-md-2"><strong>Total de ventas</strong></div>
	<div class="col-md-2 text-right"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</div>
</div>
<br /><?php }} ?>