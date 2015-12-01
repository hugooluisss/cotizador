<div class="modal fade" id="winModificarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Modificar cliente</h1>
			</div>
			<div class="modal-body">
				<div class="well">
					<div class="box-body">
						<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
							<div class="form-group">
								<label for="txtRUT" class="col-lg-4">RUT</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtRUT" name="txtRUT" value="{$cliente->getRUT()}">
								</div>
							</div>
							<div class="form-group">
								<label for="txtRazonSocial" class="col-lg-4">Razón social</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtRazonSocial" name="txtRazonSocial" value="{$cliente->getRazonSocial()}">
								</div>
							</div>		
							<div class="form-group">
								<label for="txtNombre" class="col-lg-4">Nombre completo</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtNombre" name="txtNombre" value="{$cliente->getNombre()}">
								</div>
							</div>
							<div class="form-group">
								<label for="txtDireccion" class="col-lg-4">Dirección</label>
								<div class="col-lg-7">
									<textarea class="form-control" id="txtDireccion" name="txtDireccion">{$cliente->getDireccion()}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="txtLocalidad" class="col-lg-4">Localidad</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtLocalidad" name="txtLocalidad" value="{$cliente->getLocalidad()}">
								</div>
							</div>
							<div class="form-group">
								<label for="txtTelefono" class="col-lg-4">Teléfono</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtTelefono" name="txtTelefono" value="{$cliente->getTelefono()}">
								</div>
							</div>
							<div class="form-group">
								<label for="txtCelular" class="col-lg-4">Celular</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtCelular" name="txtCelular" value="{$cliente->getCelular()}">
								</div>
							</div>
							<div class="form-group">
								<label for="txtEmail" class="col-lg-4">Correo electrónico</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtEmail" name="txtEmail" type="email" value="{$cliente->getEmail()}">
								</div>
							</div>
							<div class="form-group">
								<label for="txtRFC" class="col-lg-4">RFC</label>
								<div class="col-lg-7">
									<input class="form-control" id="txtRFC" name="txtRFC" type="text" value="{$cliente->getRFC()}">
								</div>
							</div>
							<div class="form-group">
								<label for="txtObservaciones" class="col-lg-4">Observaciones</label>
								<div class="col-lg-7">
									<textarea class="form-control" id="txtObservaciones" name="txtObservaciones">{$cliente->getObservaciones()}</textarea>
								</div>
							</div>
						</form>
					</div>
					<div class="box-footer">
						<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
						<button type="submit" class="btn btn-info pull-right">Guardar</button>
						<input type="hidden" id="id" value="{$cliente->getId()}"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>