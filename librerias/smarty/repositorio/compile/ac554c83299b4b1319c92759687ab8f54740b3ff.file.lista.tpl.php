<?php /* Smarty version Smarty-3.1.11, created on 2017-05-12 12:41:59
         compiled from "templates/plantillas/modulos/gastos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11970048385915f248cad4b5-65837467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac554c83299b4b1319c92759687ab8f54740b3ff' => 
    array (
      0 => 'templates/plantillas/modulos/gastos/lista.tpl',
      1 => 1494610759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11970048385915f248cad4b5-65837467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5915f248d3c017_42389412',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5915f248d3c017_42389412')) {function content_5915f248d3c017_42389412($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Concepto</th>
			<th>Monto</th>
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
				<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
				<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['row']->value['concepto'];?>
</td>
				<td class="text-right"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value['monto']);?>
</td>
				<td class="text-right">
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar gasto" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idGasto'];?>
"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>