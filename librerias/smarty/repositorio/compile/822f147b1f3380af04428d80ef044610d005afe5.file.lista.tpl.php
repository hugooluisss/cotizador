<?php /* Smarty version Smarty-3.1.11, created on 2015-10-22 23:26:24
         compiled from "templates/plantillas/modulos/serigrafia/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12410177875629b6f02ba2f8-36422968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '822f147b1f3380af04428d80ef044610d005afe5' => 
    array (
      0 => 'templates/plantillas/modulos/serigrafia/lista.tpl',
      1 => 1445573675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12410177875629b6f02ba2f8-36422968',
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
  'unifunc' => 'content_5629b6f0473f57_11350015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5629b6f0473f57_11350015')) {function content_5629b6f0473f57_11350015($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblPosiciones" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
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
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="precios" title="Precios" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>$</button>
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