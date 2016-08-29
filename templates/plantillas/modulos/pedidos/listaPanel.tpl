<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<label for="selTipoBusqueda" class="col-md-4">Buscar por </label>
				<div class="col-md-8">
					<select id="selTipoBusqueda" class="form-control">
						<option value="registro">Registro
						<option value="entrega">Entrega sistema
						<option value="entregaCliente">Entrega cliente
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<label for="selTipoBusqueda" class="col-md-6">Técnica de impresión</label>
				<div class="col-md-6">
					<select id="selTecnica" name="selTecnica" class="form-control">
						<option value="">Todas
						{foreach from=$serviciosImpresion item="tecnica"}
							<option value="{$tecnica.idImpresion}">{$tecnica.nombre}
						{/foreach}
					</select>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 col-md-12 text-center">
				<label for="txtInicioBus">del</label> <input type="text" id="txtInicioBus" name="txtInicioBus" value="{$smarty.now|date_format:"%Y-%m-%d"}" /> <label for="txtFinBus">hasta </label>
				<input type="text" id="txtFinBus" name="txtFinBus" value="{$smarty.now|date_format:"%Y-%m-%d"}" />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 col-sm-6 text-right">
				<button class="btn btn-success" id="btnBuscar">Buscar</button>
			</div>
		</div>
	</div>
</div>

<div id="dvLista">
</div>