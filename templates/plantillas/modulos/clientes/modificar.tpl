<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		{if $PAGE.modulo eq "clienteDatos"}<h1>Bienvenido</h1>{/if}
		<div class="box-body">
			<div class="form-group">
				<label for="txtRUT" class="col-lg-2">RUT</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtRUT" name="txtRUT" value="{$cliente->getRUT()}">
				</div>
			</div>
			<div class="form-group">
				<label for="txtRazonSocial" class="col-lg-2">Razón social</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtRazonSocial" name="txtRazonSocial" value="{$cliente->getRazonSocial()}">
				</div>
			</div>		
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre completo</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtNombre" name="txtNombre" value="{$cliente->getNombre()}">
				</div>
			</div>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2">Dirección</label>
				<div class="col-lg-3">
					<textarea class="form-control" id="txtDireccion" name="txtDireccion">{$cliente->getDireccion()}</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="txtLocalidad" class="col-lg-2">Localidad</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtLocalidad" name="txtLocalidad" value="{$cliente->getLocalidad()}">
				</div>
			</div>
			<div class="form-group">
				<label for="txtTelefono" class="col-lg-2">Teléfono</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtTelefono" name="txtTelefono" value="{$cliente->getTelefono()}">
				</div>
			</div>
			<div class="form-group">
				<label for="txtCelular" class="col-lg-2">Celular</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtCelular" name="txtCelular" value="{$cliente->getCelular()}">
				</div>
			</div>
			<div class="form-group">
				<label for="txtEmail" class="col-lg-2">Correo electrónico</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtEmail" name="txtEmail" type="email" value="{$cliente->getEmail()}">
				</div>
			</div>
			<div class="form-group">
				<label for="txtRFC" class="col-lg-2">RFC</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtRFC" name="txtRFC" type="text" value="{$cliente->getRFC()}">
				</div>
			</div>
			<div class="form-group">
				<label for="txtObservaciones" class="col-lg-2">Observaciones</label>
				<div class="col-lg-3">
					<textarea class="form-control" id="txtObservaciones" name="txtObservaciones">{$cliente->getObservaciones()}</textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id" value="{$cliente->getId()}"/>
		</div>
	</div>
</form>