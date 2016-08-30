<?php /* Smarty version Smarty-3.1.11, created on 2016-08-30 12:06:54
         compiled from "templates/plantillas/modulos/clientes/crm/listaAvisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175254096757c5bceb58de05-72459964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6303246193eee85db64700367745ef871268b735' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/crm/listaAvisos.tpl',
      1 => 1472576810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175254096757c5bceb58de05-72459964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c5bceb5bc336_59270702',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5bceb5bc336_59270702')) {function content_57c5bceb5bc336_59270702($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>E-mail</th>
			<th>RFC</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rfc'];?>
</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-info btn-circle" action="crm" title="Seguimiento de clientes" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-sign-language"></i></button>
					<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
					<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" cliente="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>