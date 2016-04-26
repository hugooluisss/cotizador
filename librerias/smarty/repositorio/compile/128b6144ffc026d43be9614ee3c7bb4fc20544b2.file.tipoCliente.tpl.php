<?php /* Smarty version Smarty-3.1.11, created on 2016-04-24 22:02:41
         compiled from "templates/plantillas/modulos/reportes/tipoCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292878276571d88d192bd70-67163715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '128b6144ffc026d43be9614ee3c7bb4fc20544b2' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/tipoCliente.tpl',
      1 => 1461553345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292878276571d88d192bd70-67163715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_571d88d19b8c86_06302886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571d88d19b8c86_06302886')) {function content_571d88d19b8c86_06302886($_smarty_tpl) {?><table id="tblTipoClientes" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>Tipo</th>
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
				<td><?php if ($_smarty_tpl->tpl_vars['row']->value['tipo']=='F'){?>Persona<?php }else{ ?>Empresa<?php }?></td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>