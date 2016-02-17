<?php /* Smarty version Smarty-3.1.11, created on 2016-02-16 23:32:46
         compiled from "templates/plantillas/modulos/pedidos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157187380456687c0b757af7-92334875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475eddcdce8a2967b537a5b41d38f430be447673' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/lista.tpl',
      1 => 1455687163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157187380456687c0b757af7-92334875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56687c0b758181_40822611',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56687c0b758181_40822611')) {function content_56687c0b758181_40822611($_smarty_tpl) {?><div class="box">
	<div class="box-body" style="overflow: scroll">
		<table id="tblPedidos" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
			<thead>
				<tr>
					<th>#</th>
					<th>Fecha</th>
					<th>Entregar el</th>
					<th>Cliente</th>
					<th>Vendedor</th>
					<th>Precio</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr style="background-color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['entrega'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cliente'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-circle" action="imprimir" title="Imprimir" pedido='<?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
'><i class="fa fa-file-pdf-o"></i></button>
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" pedido='<?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
'><i class="fa fa-pencil"></i></button>
							<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']==1){?>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" pedido="<?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
"><i class="fa fa-times"></i></button>
							<?php }?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>