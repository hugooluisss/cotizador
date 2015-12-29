<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12">
				<button class="btn btn-danger" id="btnNuevoPedido">Nuevo pedido</button>
			</div>
		</div>
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
				<div id="datepicker"></div>
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
					<li class="list-group-item">
						<input type="text" value="" id="txtEntregables" name="txtEntregables" class="form-control"/>
					</li>
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
		<br />
		<div class="row">
			<table id="tblTalles" class="table table-bordered" totalTallas="{count($tallas)}">
				<thead>
					<tr>
						<th rowspan="2" class="text-center">Nombre</th>
						<th colspan="{count($tallas)}" class="text-center">Talles</th>
					</tr>
					<tr>
						{assign var="contador" value=0}
						{foreach key=key item=item from=$tallas}
							<th class="text-center" talla="{$contador}" nombre="{$item.nombre}">{$item.nombre2}</th>
							{assign var="contador" value=$contador+1}
						{/foreach}
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-3">
				<h3>Diseño</h3>
				<select id="selDiseno">
					<option value="Entrega el cliente">Entrega el cliente
					<option value="A pedido">A pedido
					<option value="Envia por email">Envia por email
				</select>
			</div>
			<div class="col-xs-4">
				<h3>Colores</h3>
				<input type="text" value="" class="form-control" id="txtColor1">
				<input type="text" value="" class="form-control" id="txtColor2">
				<input type="text" value="" class="form-control" id="txtColor3">
				<input type="text" value="" class="form-control" id="txtColor4">
			</div>
			<div class="col-xs-5">
				<h3>Observaciones</h3>
				<textarea class="form-control" rows="5" id="txtObservaciones" name="txtObservaciones"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><h3>Archivos</h3></div>
		</div>
		<div class="row">
			<form id="upload" method="post" action="?mod=cpedidos&action=uploadfile" enctype="multipart/form-data">
				<input type="file" name="upl" multiple />
				<ul class="elementos list-group">
				<!-- The file list will be shown here -->
				</ul>
				
				<input type="hidden" id="pedido" name="pedido" value="">
			</form>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<table id="tblTotales" class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">Precio final</th>
					<th class="text-center">Seña</th>
					<th class="text-center">Saldo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input class="form-control text-right" id="total" value="0.00"></td>
					<td><input class="form-control text-right" id="sena" value="0.00"></td>
					<td><input class="form-control text-right" id="saldo" value="" readonly="true"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body text-right">
		<button class="btn btn-success" id="btnGuardar">Guardar</button>
		<button class="btn btn-danger" id="btnCancelar">Cancelar</button>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/clientes.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/remerasLista.tpl"}