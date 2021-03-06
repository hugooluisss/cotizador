<div class="row">
	<label class="col-xs-2" for="txtCliente">Cliente</label>
	<div class="col-sm-5">
		<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
	</div>
	<div class="col-sm-5">
		<button type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" /><i class="fa fa-search"></i> Buscar</button>
		<input type="button" class="btn btn-success" id="btnNuevoCliente" value="Nuevo" />
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<label class="col-xs-4" for="txtFecha">Fecha <small>Ingreso</small></label>
			<div class="col-xs-8">
				<input type="input" class="from-control" id="txtFecha" name="txtFecha" placeholder="Y-m-d" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
				<div id="datepicker"></div>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-4" for="txtEntrega">Fecha <small>sistema</small></label>
			<div class="col-xs-8">
				<input type="input" class="from-control" id="txtEntrega" name="txtEntrega" placeholder="Y-m-d" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-4" for="txtEntrega">Entrega <small>cliente</small></label>
			<div class="col-xs-8">
				<input type="input" class="from-control" id="txtEntregaCliente" name="txtEntregaCliente" placeholder="Y-m-d" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-4" for="selHora">Hora</label>
			<div class="col-xs-8">
				<select class="form-contro" id="selHora" name="selHora">
					<option value=""></option>
				{for $hora=9 to 19} 
					<option value="{$hora}">{$hora|string_format:"%02s"}
				{/for}
				</select>
				 : 
				<select class="form-contro" id="selMinuto" name="selMinuto">
					<option value=""></option>
				{for $minuto=0 to 59 step 15} 
					<option value="{$minuto}">{$minuto|string_format:"%02s"}
				{/for}
				</select>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="row">
			<label for="selEstado" class="col-xs-12 col-sm-4">Estado</label>
			<div class="col-xs-12 col-sm-8">
				<select id="selEstado" name="selEstado" class="form-control">
					{foreach key=key item=item from=$estados}
						<option value="{$item.idEstado}">{$item.nombre}
					{/foreach}
				</select>
			</div>
		</div>
		<div class="row">
			<label for="selFuente" class="col-xs-12 col-sm-4">Modo de ingreso</label>
			<div class="col-xs-12 col-sm-8">
				<select id="selFuente" name="selFuente" class="form-control">
					<option value="">Sin especificar</option>
					<option value="Local">Local
					<option value="Email">Email
					<option value="Teléfono">Teléfono
				</select>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<button class="btn btn-primary pull-right" id="btnGuardar">Guardar</button>
		<span class="text-danger pull-right hide mensajeGuardar"><i class="fa fa-cog fa-spin fa-2x fa-fw"></i> Espera mientras guardamos los datos</span>
	</div>
</div>