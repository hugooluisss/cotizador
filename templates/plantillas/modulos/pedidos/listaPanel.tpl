<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-4">Buscar por 
				<select id="selTipoBusqueda">
					<option value="registro">Registro
					<option value="entrega">Entrega
				</select>
			</div>
			<div class="col-xs-7">
				del <input type="text" id="txtInicioBus" name="txtInicioBus" value="{$smarty.now|date_format:"%Y-%m-%d"}" /> hasta 
				<input type="text" id="txtFinBus" name="txtFinBus" value="{$smarty.now|date_format:"%Y-%m-%d"}" />
			</div>
			<div class="col-xs-1">
				<button class="btn btn-success" id="btnBuscar">Buscar</button>
			</div>
		</div>
	</div>
</div>

<div id="dvLista">
</div>