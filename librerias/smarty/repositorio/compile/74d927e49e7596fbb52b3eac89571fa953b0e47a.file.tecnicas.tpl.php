<?php /* Smarty version Smarty-3.1.11, created on 2016-04-22 22:06:12
         compiled from "templates/plantillas/modulos/reportes/tecnicas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:340813656571ae6a4b33201-31126922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d927e49e7596fbb52b3eac89571fa953b0e47a' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/tecnicas.tpl',
      1 => 1461380673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '340813656571ae6a4b33201-31126922',
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
  'unifunc' => 'content_571ae6a4b7a163_05417892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571ae6a4b7a163_05417892')) {function content_571ae6a4b7a163_05417892($_smarty_tpl) {?><table id="tblTecnicas" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>Técnica</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tecnica'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>