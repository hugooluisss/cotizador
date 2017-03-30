<?php /* Smarty version Smarty-3.1.11, created on 2016-10-30 02:01:16
         compiled from "templates/plantillas/modulos/pedidos/wizard/winTecnicaImpresion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16767720535815a2a3ea1a06-50052580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c1f24975dd02ec9f321b42044b04feae140f32d' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/wizard/winTecnicaImpresion.tpl',
      1 => 1477814473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16767720535815a2a3ea1a06-50052580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5815a2a3ed28e7_64868264',
  'variables' => 
  array (
    'serviciosImpresion' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815a2a3ed28e7_64868264')) {function content_5815a2a3ed28e7_64868264($_smarty_tpl) {?><div class="modal fade" id="winTecnicaImpresion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tecnica de impresión</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" id="frmAddImpresion">
					<div class="form-group">
						<label class="control-label col-sm-2" for="selTecnica">Técnica de impresión</label>
						<div class="col-sm-5">
							<select id="selTecnica" name="selTecnica" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviciosImpresion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idImpresion'];?>
" limite="<?php echo $_smarty_tpl->tpl_vars['row']->value['limite'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="txtColor">Color</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtColor" name="txtColor">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="txtCantidad">Cantidad</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txtCantidad" name="txtCantidad">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="selUbicacion">Ubicación</label>
						<div class="col-sm-4">
							<select id="selUbicacion" name="selUbicacion" class="form-control">
								<option value="Frente">Frente</option>
								<option value="Espalda">Espalda</option>
								<option value="Manga">Manga</option>
								<option value="Frente y espalda">Frente y espalda</option>
								<option value="Frente y manga">Frente y manga</option>
								<option value="Frente, espalda y manga">Frente, espalda y manga</option>
								<option value="Manga y espalda">Manga y espalda</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="selTamaño">Tamaño</label>
						<div class="col-sm-4">
							<select id="selSize" name="selSize" class="form-control">
								<option value="Chico">Chico</option>
								<option value="Mediano">Mediano</option>
								<option value="Grande">Grande</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="txtMedidas">Medidas</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txtMedidas" name="txtMedidas">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="txtPrecio">Precio</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txtPrecio" name="txtPrecio">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success pull-right">Agregar</button>
							<input type="hidden" id="id" name="id" value="" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>