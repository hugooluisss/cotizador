<div class="modal fade" id="winTecnicaImpresion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
								{foreach from=$serviciosImpresion item="row"}
								<option value="{$row.idImpresion}" limite="{$row.limite}">{$row.nombre}</option>
								{/foreach}
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
</div>