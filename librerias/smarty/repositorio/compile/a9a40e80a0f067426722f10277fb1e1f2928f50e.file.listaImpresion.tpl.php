<?php /* Smarty version Smarty-3.1.11, created on 2016-10-26 22:12:20
         compiled from "templates/plantillas/modulos/pedidos/listaImpresion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60592279958116fc070c473-49271797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a40e80a0f067426722f10277fb1e1f2928f50e' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/listaImpresion.tpl',
      1 => 1477537933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60592279958116fc070c473-49271797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58116fc0804344_20492592',
  'variables' => 
  array (
    'lista' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58116fc0804344_20492592')) {function content_58116fc0804344_20492592($_smarty_tpl) {?><div class="box">
	<div class="box-body" style="overflow: scroll">
		<table id="tblPedidos" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
			<thead>
				<tr>
					<th>#</th>
					<th>Técnica de impresión</th>
					<th>Color</th>
					<th>Cantidad</th>
					<th>Ubicación</th>
					<th>Tamaño</th>
					<th>Medidas/cm</th>
					<th>Precio</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["row"]->key;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>