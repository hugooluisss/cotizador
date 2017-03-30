<div class="row">
	<div class="col-xs-12 col-md-4">
		<b>Método de entrega</b>
		<br />
		<select id="selFormaEntrega" name="selFormaEntrega" class="form-control">
			<option value=""></option>
			<option value="Retiro en local">Retiro en local</option>
			<option value="Envio a dominicilio">Envío a domicilio</option>
			<option value="Envio por encomienda">Envío por encomienda</option>
		</select>
	</div>
</div>
<br />
<div class="row">
	<div class="col-md-offset-4 col-md-2 text-center">
		Envoltorio
	</div>
	<div class="col-md-2 text-center">
		Costo de envío
	</div>
	<div class="col-md-4 text-center">
		Observaciones
	</div>
</div>
<div class="row" style="border-top: 1px solid #D8D8D8; height: 300px; margin-right: 3px;">
	<div class="col-md-4" style="border-right: 1px solid #D8D8D8;">
		<div class="form-group">
			<label for="txtPais" class="contro-label col-lg-4 text-right">País</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtPais" name="txtPais">
			</div>
		</div>
		<div class="form-group">
			<label for="txtDepartamento" class="contro-label col-lg-4 text-right">Depto</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtDepartamento" name="txtDepartamento">
			</div>
		</div>
		<div class="form-group">
			<label for="txtDireccion" class="contro-label col-lg-4 text-right">Dirección</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
			</div>
		</div>
		<div class="form-group">
			<label for="txtEquina" class="contro-label col-lg-4 text-right">Esquina</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtEsquina" name="txtEsquina">
			</div>
		</div>
		<div class="form-group">
			<label for="txtHorario" class="contro-label col-lg-4 text-right">Horario</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtHorario" name="txtHorario">
			</div>
		</div>
		<div class="form-group">
			<label for="txtFecha" class="contro-label col-lg-4 text-right">Fecha</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtFecha" name="txtFecha" placeholder="YYYY-mm-dd">
			</div>
		</div>
	</div>
	
	<div class="col-md-2" style="border-right: 1px solid #D8D8D8;">
		<select id="selEnvoltorio" name="selEnvoltorio" class="form-control">
			<option value="">Sin especificar</option>
			<option value="Normal">Normal</option>
			<option value="Regalo">Regalo</option>
			<option value="A granel">A granel</option>
		</select>
	</div>
	<div class="col-md-2" style="border-right: 1px solid #D8D8D8;">
		<div class="input-group">
			<span class="input-group-addon">$</span>
			<input type="text" class="form-control" aria-label="">
		</div>

	</div>
	<div class="col-md-4">
		<textarea class="form-control" rows="5" id="txtObservaciones" name="txtObservaciones" style="border: none;"></textarea>
	</div>
</div>