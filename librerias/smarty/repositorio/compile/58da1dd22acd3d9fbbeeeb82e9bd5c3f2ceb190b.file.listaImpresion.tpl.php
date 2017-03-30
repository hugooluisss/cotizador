<?php /* Smarty version Smarty-3.1.11, created on 2016-10-30 02:13:26
         compiled from "templates/plantillas/modulos/pedidos/wizard/listaImpresion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10818594665812430ab60c04-41399106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58da1dd22acd3d9fbbeeeb82e9bd5c3f2ceb190b' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/wizard/listaImpresion.tpl',
      1 => 1477814713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10818594665812430ab60c04-41399106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5812430abd8508_39510777',
  'variables' => 
  array (
    'lista' => 0,
    'key' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812430abd8508_39510777')) {function content_5812430abd8508_39510777($_smarty_tpl) {?><br />
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
			<th>Quitar</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ubicacion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['size'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['medidas'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
				<td>
					<a href="#" tecnica=<?php echo $_smarty_tpl->tpl_vars['row']->value['idTecnica'];?>
 accion="quitar">Quitar</a>
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["row"]->_loop) {
?>
			<tr>
				<td colspan="9" class="text-center">Sin elementos</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>