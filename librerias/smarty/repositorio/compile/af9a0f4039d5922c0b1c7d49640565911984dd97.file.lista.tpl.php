<?php /* Smarty version Smarty-3.1.11, created on 2015-10-26 19:37:36
         compiled from "templates/plantillas/modulos/ropa/tallas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20857431195627c0476cd0d0-61603194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9a0f4039d5922c0b1c7d49640565911984dd97' => 
    array (
      0 => 'templates/plantillas/modulos/ropa/tallas/lista.tpl',
      1 => 1445468086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20857431195627c0476cd0d0-61603194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5627c04774e7b5_19894303',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'precio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627c04774e7b5_19894303')) {function content_5627c04774e7b5_19894303($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblTallas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Talla</th>
					<th>Adicional</th>
					<th>Precio neto</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value['adicional']);?>
</td>
						<td><?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['row']->value['adicional']+$_smarty_tpl->tpl_vars['precio']->value));?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" talla="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTalla'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>