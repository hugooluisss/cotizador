<?php /* Smarty version Smarty-3.1.11, created on 2015-10-22 22:33:23
         compiled from "templates/plantillas/modulos/ropa/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19285930045625cc8d044d29-55292921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '191802cae1dc2fc59947367b7b6038869c87507c' => 
    array (
      0 => 'templates/plantillas/modulos/ropa/lista.tpl',
      1 => 1445468086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19285930045625cc8d044d29-55292921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5625cc8d150062_91658063',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625cc8d150062_91658063')) {function content_5625cc8d150062_91658063($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblRopa" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
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
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idItem'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="tallas" title="Tallas" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>T</button>
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" item="<?php echo $_smarty_tpl->tpl_vars['row']->value['idItem'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>