<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-2" for="txtCliente">Cliente</label>
			<div class="col-xs-5">
				<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
			</div>
			<div class="col-xs-5">
				<input type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" />
				<input type="button" class="btn btn-success" id="btnNuevoCliente" value="Nuevo" />
			</div>
		</div>
		<hr />
		<div class="row">
			<label class="col-xs-2" for="txtFecha">Fecha</label>
			<div class="col-xs-3">
				<input type="input" class="from-control" id="txtFecha" name="txtFecha" placeholder="Y-m-d" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-2" for="txtEntrega">Entrega</label>
			<div class="col-xs-2">
				<input type="input" class="from-control" id="txtEntrega" name="txtEntrega" placeholder="Y-m-d" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-2" for="selHora">Hora</label>
			<div class="col-xs-2">
				<select class="form-contro" id="selHora" name="selHora">
				{for $hora=0 to 23} 
					<option value="{$hora}">{$hora}
				{/for}
				</select>
				 : 
				<select class="form-contro" id="selMinuto" name="selMinuto">
				{for $minuto=0 to 59 step 15} 
					<option value="{$minuto}">{$minuto}
				{/for}
				</select>
			</div>
		</div>
		<div class="row">
			<label for="selEstado" class="col-xs-2">Estado</label>
			<div class="col-xs-4">
				<select id="selEstado" name="selEstado" class="form-control">
					{foreach key=key item=item from=$estados}
						<option value="{$item.idEstado}">{$item.nombre}
					{/foreach}
				</select>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-head">
		<h3>Impresión</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			{foreach key=key item=item from=$serviciosImpresion}
			<label class="checkbox-inline"><input type="checkbox" value="{$item.idImpresion}">{$item.nombre}</label>
			{/foreach}
		</div>
	</div>
</div>
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/clientes.tpl"}