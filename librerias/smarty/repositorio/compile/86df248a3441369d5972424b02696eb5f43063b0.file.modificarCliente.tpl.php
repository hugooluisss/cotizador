<?php /* Smarty version Smarty-3.1.11, created on 2016-04-24 21:49:35
         compiled from "templates/plantillas/modulos/cotizador/modificarCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1832655399565d30c3d5b8c0-54018829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86df248a3441369d5972424b02696eb5f43063b0' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/modificarCliente.tpl',
      1 => 1461552574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1832655399565d30c3d5b8c0-54018829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_565d30c3d70f64_06944274',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565d30c3d70f64_06944274')) {function content_565d30c3d70f64_06944274($_smarty_tpl) {?><div class="modal fade" id="winModificarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Modificar cliente</h1>
			</div>
			<div class="modal-body">
				<div class="well">
					<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
						<div class="box-body">
						
							<div class="form-group">
								<label for="txtRUT" class="col-lg-4">RUT</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtRUT" name="txtRUT">
								</div>
							</div>
							<div class="form-group">
								<label for="selTipo" class="col-lg-4">Tipo</label>
								<div class="col-lg-7">
									<select class="form-control" id="selTipo" name="selTipo">
										<option value="F">Persona
										<option value="E">Empresa
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="txtRazonSocial" class="col-lg-4">Razón social</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtRazonSocial" name="txtRazonSocial">
								</div>
							</div>		
							<div class="form-group">
								<label for="txtNombre" class="col-lg-4">Nombre completo</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtNombre" name="txtNombre">
								</div>
							</div>
							<div class="form-group">
								<label for="txtDireccion" class="col-lg-4">Dirección</label>
								<div class="col-lg-7">
									<textarea class="form-control" id="txtDireccion" name="txtDireccion"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="txtLocalidad" class="col-lg-4">Localidad</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtLocalidad" name="txtLocalidad">
								</div>
							</div>
							<div class="form-group">
								<label for="txtTelefono" class="col-lg-4">Teléfono</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtTelefono" name="txtTelefono">
								</div>
							</div>
							<div class="form-group">
								<label for="txtCelular" class="col-lg-4">Celular</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtCelular" name="txtCelular">
								</div>
							</div>
							<div class="form-group">
								<label for="txtEmail" class="col-lg-4">Correo electrónico</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtEmail" name="txtEmail" type="email">
								</div>
							</div>
							<div class="form-group">
								<label for="txtRFC" class="col-lg-4">RFC</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtRFC" name="txtRFC" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="txtObservaciones" class="col-lg-4">Observaciones</label>
								<div class="col-lg-7">
									<textarea class="form-control" id="txtObservaciones" name="txtObservaciones"></textarea>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-info pull-right">Guardar</button>
							<input type="hidden" id="id" value=""/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>