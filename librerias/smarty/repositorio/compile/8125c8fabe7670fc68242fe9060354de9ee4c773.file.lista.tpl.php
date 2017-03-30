<?php /* Smarty version Smarty-3.1.11, created on 2016-10-30 02:41:08
         compiled from "templates/plantillas/modulos/pedidos/nombresNumeros/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35644432756946c8dd885d0-35031714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8125c8fabe7670fc68242fe9060354de9ee4c773' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nombresNumeros/lista.tpl',
      1 => 1477816867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35644432756946c8dd885d0-35031714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56946c8dd89fd5_90765813',
  'variables' => 
  array (
    'nombresNumeros' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56946c8dd89fd5_90765813')) {function content_56946c8dd89fd5_90765813($_smarty_tpl) {?><div style="overflow: scroll">
	<table id="tblNumerosLetras" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Número</th>
				<th>Talle</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nombresNumeros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['letras'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['numeros'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['talla'];?>
</td>
					<td></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>