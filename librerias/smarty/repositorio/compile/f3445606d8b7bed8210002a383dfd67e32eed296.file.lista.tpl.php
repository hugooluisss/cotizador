<?php /* Smarty version Smarty-3.1.11, created on 2015-11-03 08:46:08
         compiled from "templates/plantillas/modulos/cotizador/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111114571856364f9a27a409-94679213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3445606d8b7bed8210002a383dfd67e32eed296' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/lista.tpl',
      1 => 1446561641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111114571856364f9a27a409-94679213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56364f9a2e0ab3_52743229',
  'variables' => 
  array (
    'cotizaciones' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56364f9a2e0ab3_52743229')) {function content_56364f9a2e0ab3_52743229($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblCotizaciones" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Cliente</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cotizaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr cotizacion="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCotizacion'];?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCotizacion'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>