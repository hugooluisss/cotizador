<?php /* Smarty version Smarty-3.1.11, created on 2015-11-03 08:46:08
         compiled from "templates/plantillas/modulos/cotizador/clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:334980269563275c16b1437-66676407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09e35b55840a30928ac6fef9c637e17dc584e46a' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/clientes.tpl',
      1 => 1446561641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334980269563275c16b1437-66676407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_563275c16bf3b9_81933601',
  'variables' => 
  array (
    'clientes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563275c16bf3b9_81933601')) {function content_563275c16bf3b9_81933601($_smarty_tpl) {?><div class="modal fade" id="winClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Clientes</h1>
			</div>
			<div class="modal-body">
				<div class="well">
					<form role="form" id="frmAddCliente" class="form-horizontal" onsubmit="javascript: return false;">
						<div class="row">
							<div class="col-xs-12">
								<h4>Agregar cliente</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<input class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre completo">
							</div>
							<div class="col-xs-6">
								<input class="form-control" id="txtEmail" name="txtEmail" type="email" placeholder="E-mail">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 text-right">
								<button type="submit" class="btn btn-success">Guardar</button>
							</div>
						</div>
					</form>
				</div>
				<table id="tblClientes" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr cliente='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="consultorio" name="consultorio" value="" />
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>