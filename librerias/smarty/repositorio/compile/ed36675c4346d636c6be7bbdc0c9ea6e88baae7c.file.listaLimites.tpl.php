<?php /* Smarty version Smarty-3.1.11, created on 2015-10-26 12:23:27
         compiled from "templates/plantillas/modulos/serigrafia/listaLimites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:350201728562b8d291c1e29-20171142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed36675c4346d636c6be7bbdc0c9ea6e88baae7c' => 
    array (
      0 => 'templates/plantillas/modulos/serigrafia/listaLimites.tpl',
      1 => 1445874753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '350201728562b8d291c1e29-20171142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562b8d2922d296_34022834',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b8d2922d296_34022834')) {function content_562b8d2922d296_34022834($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblLimites" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Inferior</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idLimite'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inferior'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" item="<?php echo $_smarty_tpl->tpl_vars['row']->value['idLimite'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>