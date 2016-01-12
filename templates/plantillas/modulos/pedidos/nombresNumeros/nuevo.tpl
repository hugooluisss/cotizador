<form action="#" onsubmit="javascript: return false;" id="frmNumerosLetras">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<label class="col-xs-4" for="txtNombre">Nombre</label>
				<div class="col-xs-8">
					<input type="text" class="form-control" id="txtNombre" placeholder="Nombre">
				</div>
			</div>
			<div class="row">
				<label class="col-xs-4" for="txtNumero">Número</label>
				<div class="col-xs-8">
					<input type="text" class="form-control" id="txtNumero" placeholder="Número">
				</div>
			</div>
			<div class="row">
				<label class="col-xs-4" for="selTalla">Talle</label>
				<div class="col-xs-8">
					<select id="selTalla" name="selTalla">
						{foreach key=key item=item from=$tallas}
							<option value="{$item.nombre}">{$item.nombre}
						{/foreach}
					</select>
				</div>
			</div>
		</div>
		<div class="foter-body">
			<input type="submit" value="Guardar" class="btn btn-success"/>
		</div>
	</div>
</form>