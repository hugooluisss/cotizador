<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-2" for="txtCliente">Cliente</label>
			<div class="col-xs-5">
				<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
			</div>
			<div class="col-xs-5">
				<button type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" /><i class="fa fa-search"></i> Buscar</button>
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
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-6">
				<h3>Impresión</h3>
				<ul class="list-group">
				{foreach key=key item=item from=$serviciosImpresion}
					<li class="list-group-item"><label class="checkbox-inline"><input type="checkbox" class="serviciosImpresion" value="{$item.idImpresion}">{$item.nombre}</label></li>
				{/foreach}
				</ul>
			</div>
			<div class="col-xs-6">
				<h3>Entregables</h3>
				<ul class="list-group">
					{foreach key=key item=item from=$entregables}
					<li class="list-group-item"><label class="checkbox-inline"><input type="checkbox" class="entregables" value="{$item.idEntregable}">{$item.nombre}</label></li>
					{/foreach}
				<ul>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-head">
		<h3>Remeras</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-2" for="txtNombreRemera">Nombre</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="txtNombreRemera" name="txtNombreRemera">
			</div>
			<div class="col-xs-4">
				<button type="button" class="btn btn-success" id="btnLstRemeras"><i class="fa fa-search"></i> Buscar</button>
			</div>
		</div>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/clientes.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/remerasLista.tpl"}