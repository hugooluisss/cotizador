<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12">
				<button class="btn btn-danger btnNuevoPedido">Nuevo pedido</button>
			</div>
		</div>
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
		<hr />
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
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<h3>Impresión</h3>
				
				{foreach key=key item=item from=$serviciosImpresion}
					<div class="checkbox">
						<label class="col-xs-12 col-sm-4"><input type="checkbox" class="serviciosImpresion" value="{$item.idImpresion}">{$item.nombre}</label>
					</div>
				{/foreach}
			</div>
			<div class="col-xs-12 col-md-6">
				<h3>Artículos</h3>
				{foreach key=key item=item from=$entregables}
					<div class="checkbox">
						<label class="col-xs-12 col-sm-4"><input type="checkbox" class="entregables" value="{$item.idEntregable}">{$item.nombre}</label>
					</div>
				{/foreach}
				<br />
				<input type="text" value="" id="txtEntregables" name="txtEntregables" class="form-control" maxlength="45"/>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-head">
		<h3>Talles y colores</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-12 col-sm-2" for="txtNombreRemera">Nombre</label>
			<div class="col-xs-12 col-sm-6">
				<input type="text" class="form-control" id="txtNombreRemera" name="txtNombreRemera">
			</div>
			<div class="col-xs-4">
				<button type="button" class="btn btn-success" id="btnLstRemeras"><i class="fa fa-search"></i> Buscar</button>
			</div>
		</div>
		<br />
		<div class="row" style="overflow: scroll">
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
		<!--
			<div class="col-xs-3">
				<h3>Diseño</h3>
				<select id="selDiseno">
					<option value="Entrega el cliente">Entrega el cliente
					<option value="A pedido">A pedido
					<option value="Envia por email">Envia por email
				</select>
				<textarea class="form-control" rows="4" id="txtDiseno" name="txtDiseno"></textarea>
			</div>
		-->
			<div class="col-xs-12col-sm-3">
				<h3>Posición</h3>
				<select id="selPosicion">
					<option value="Frente">Frente
					<option value="Espalda">Espalda
					<option value="Manga">Manga
					<option value="Frente y espalda">Frente y espalda
					<option value="Frente y manga">Frente y manga
					<option value="Frente, espalda y manga">Frente, espalda y manga
					<option value="Manga y espalda">Manga y espalda
				</select>
				<textarea class="form-control" rows="5" id="txtPosicion" name="txtPosicion"></textarea>
			</div>
			<div class="col-xs-12 col-md-3">
				<h3>Colores</h3>
				<textarea class="form-control" rows="6" id="txtColores" name="txtColores"></textarea>
			</div>
			
			<div class="col-xs-12 col-md-6">
				<h3>Observaciones</h3>
				<textarea class="form-control" rows="6" id="txtObservaciones" name="txtObservaciones"></textarea>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<h3>Archivos</h3>
				<form id="upload" method="post" action="?mod=cpedidos&action=uploadfile" enctype="multipart/form-data">
					<input type="hidden" id="pedido" name="pedido" value="">
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
				
				<div class="row">
					<label class="col-xs-4" for="selHora">Archivo</label>
					<div class="col-xs-12 col-md-4">
						<input type="text" class="form-control" id="txtNombreArchivo" archivo placeholder="Nombre de archivo" maxlength="100">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 text-center">
				<h3>Nombres y números</h3>
				<button class="btn btn-success" id="btnNombresNumeros"><i class="fa fa-pencil"></i> Crear Lista</button>
				<br />
				<br />
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<label for="selFormaEntrega" class="col-xs-12 col-sm-4">Forma de entrega</label>
					<div class="col-xs-8">
						<select id="selFormaEntrega" name="selFormaEntrega" class="form-control">
							<option value=""></option>
							<option value="Retiro en local">Retiro en local
							<option value="Envio a dominicilio">Envío a domicilio
							<option value="Envio por encomienda">Envío por encomienda
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<label for="selEnvoltorio" class="col-xs-12 col-sm-4">Envoltorio</label>
					<div class="col-xs-8">
						<select id="selEnvoltorio" name="selEnvoltorio" class="form-control">
							<option value="">Sin especificar
							<option value="Normal">Normal
							<option value="Regalo">Regalo
							<option value="A granel">A granel
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<label for="txtDireccionEnvio" class="col-xs-12 col-sm-4">Dirección de envio</label>
					<div class="col-xs-12 col-sm-8">
						<textarea id="txtDireccionEnvio" name="txtDireccionEnvio" rows="3" class="form-control"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<h3>Formas de pago</h3>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-2 text-center">
				<label> Efectivo</label><br /><input type="checkbox" class="formasPago" campo="Efectivo">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 text-center">
				<label>Débito</label><br /><input type="checkbox" class="formasPago" campo="Debito">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<label>Giro</label><br /><input type="text" value="" class="formasPago" campo="Giro">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<label>Cheque</label><br /><input type="text" value="" class="formasPago" campo="Cheque">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 text-center">
				<label>Tarjeta de crédito</label><br /><input type="checkbox" class="formasPago" campo="Credito">
			</div>
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
		<button class="btn btn-danger btnNuevoPedido">Cancelar</button>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/clientes.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/remerasLista.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/winNombresNumeros.tpl"}