<?php /* Smarty version Smarty-3.1.11, created on 2015-12-18 23:23:14
         compiled from "templates/plantillas/modulos/pedidos/remerasLista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7473146545674e86053bd91-46471476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c36f77e1309116e3fa1818e24d27fddbb92ac07' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/remerasLista.tpl',
      1 => 1450502593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7473146545674e86053bd91-46471476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5674e86056c499_85128962',
  'variables' => 
  array (
    'remeras' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674e86056c499_85128962')) {function content_5674e86056c499_85128962($_smarty_tpl) {?><div class="modal fade" id="winRemeras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Remeras</h1>
			</div>
			<div class="modal-body">
				<table id="tblRemeras" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['remeras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr item='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idItem'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
							<td>
								<button type="button" class="btn btn-success" action="seleccionar" title="Seleccionar" item='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
									<i class="fa fa-hand-pointer-o"></i>
								</button>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>