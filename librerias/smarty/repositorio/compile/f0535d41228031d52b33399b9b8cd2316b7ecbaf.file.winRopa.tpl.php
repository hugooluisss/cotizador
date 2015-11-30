<?php /* Smarty version Smarty-3.1.11, created on 2015-11-26 09:50:49
         compiled from "templates/plantillas/modulos/cotizador/winRopa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94301179056569bea8e5058-04863388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0535d41228031d52b33399b9b8cd2316b7ecbaf' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/winRopa.tpl',
      1 => 1448547635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94301179056569bea8e5058-04863388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56569bea907549_30786708',
  'variables' => 
  array (
    'ropa' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56569bea907549_30786708')) {function content_56569bea907549_30786708($_smarty_tpl) {?><div class="modal fade" id="winRopa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Cotizaciones</h1>
			</div>
			<div class="modal-body">
				<table id="tblWinRopa" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Marca</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ropa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr>
								<td class="identificador"><?php echo $_smarty_tpl->tpl_vars['row']->value['idItem'];?>
</td>
								<td class="descripcion"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
								<td class="marca"><?php echo $_smarty_tpl->tpl_vars['row']->value['marca'];?>
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