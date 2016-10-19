<div id="rootwizard" role="wizard">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul style="width: 100%">
					<li class="flecha"><a href="#tab1" data-toggle="tab">CLIENTE</a></li>
					<li><a href="#tab2" data-toggle="tab">PRODUCTO</a></li>
					<li><a href="#tab3" data-toggle="tab">IMPRESIÓN</a></li>
					<li><a href="#tab4" data-toggle="tab">DISEÑO</a></li>
					<li><a href="#tab5" data-toggle="tab">CAJA</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="bar" class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="º0" style="width: 0%"></div>
	</div>
	<div class="tab-content">
		<div class="tab-pane" id="tab1">
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
		</div>
		<div class="tab-pane" id="tab2">
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
		<div class="tab-pane" id="tab3">
			3
		</div>
		<div class="tab-pane" id="tab4">
			4
		</div>
		<div class="tab-pane" id="tab5">
			5
		</div>
		<div class="tab-pane" id="tab6">
			6
		</div>
		<div class="tab-pane" id="tab7">
			7
		</div>
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="javascript:;">Inicio</a></li>
			<li class="previous"><a href="javascript:;">Anterior</a></li>
			<li class="next last" style="display:none;"><a href="javascript:;">Fin</a></li>
			<li class="next"><a href="javascript:;">Siguiente</a></li>
		</ul>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/clientes.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/remerasLista.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/winNombresNumeros.tpl"}