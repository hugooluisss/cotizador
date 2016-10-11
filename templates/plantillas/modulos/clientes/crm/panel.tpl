<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de clientes</h1>
	</div>
</div>
<div class="box">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header" style="border-bottom: 5px solid #00AF00; color: #009200; font-size: 30px">&nbsp;&nbsp;&nbsp;&nbsp;<img src="repositorio/img/manos.png" style="width: 120px" /> Seguimiento de clientes</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="btn-toolbar" role="toolbar">
				<div class="btn-group btn-xs">
					<button type="button" id="btnClientes" class="btn btn-default">Clientes</button>
				</div>
				<div class="btn-group btn-xs">
					<button type="button" id="btnAvisos" class="btn btn-warning">Avisos</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h1 class="page-header" style="color: green">Contacto</h1>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="selTipo" class="col-lg-5 control-label">Tipo de cliente</label>
					<div class="col-lg-7">
						<select class="form-control" id="selTipo" name="selTipo">
							{foreach from=$tipoClientes item="row"}
								<option value="{$row.idTipoCliente}" {if $cliente->getClasificacion() eq $row.idTipoCliente}selected{/if}>{$row.nombre}</option>
							{/foreach}
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Tipo</label>
					<div class="col-lg-7"><b>{if $cliente->getTipo() eq 'F'}persona Física{else}Moral{/if}</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Nombre</label>
					<div class="col-lg-7"><b>{$cliente->getNombre()}</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Dirección</label>
					<div class="col-lg-7"><b>{$cliente->getDireccion()}</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Teléfono</label>
					<div class="col-lg-7"><b>{$cliente->getTelefono()}</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Celular</label>
					<div class="col-lg-7" style="color: blue"><b>{$cliente->getCelular()}</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Email</label>
					<div class="col-lg-7"><b><a href="mailto:{$cliente->getEmail()}" style="color: blue">{$cliente->getEmail()}</a></b></div>
				</div>
				<!--
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Estado</label>
					<div class="col-lg-7"></div>
				</div>-->
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Última compra</label>
					<div class="col-lg-7"><b>{$ultimaCompra}</b></div>
				</div>
				
				<input type="hidden" id="id" name="id" value="{$cliente->getId()}" />
				<br />
				<div class="text-center" style="font-size: 16px; border: 1px solid red; padding: 7px;">Hace <b>{$diferenciaUltimaCompra.mes} meses</b> y {$diferenciaUltimaCompra.dias} dias más que no compra</div>
			</form>
		</div>
		<div class="col-md-8">
			<h1 class="page-header" style="color: green">Historial de pedidos</h1>
			<table id="tblPedidosCRM" class="table table-bordered table-hover" data-order='[[ 2, "desc" ]]'>
				<thead>
					<tr>
						<th>#</th>
						<th>Exc</th>
						<th>Fecha</th>
						<th>Entrega el</th>
						<th>Cliente</th>
						<th>Vendedor</th>
						<th>Precio</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$ordenes item="row"}
						<tr style="background: {$row.color}">
							<td style="{$row.color}">{$row.idPedido}</td>
							<td class="text-center">{if $row.excede eq 1}<i class="fa fa-star" aria-hidden="true"></i>{/if}</td>
							<td>{$row.registro}</td>
							<td>{$row.entrega}</td>
							<td>{$row.cliente}</td>
							<td>{$row.vendedor}</td>
							<td>{$row.precio}</td>
							<td style="text-align: right">
								<button type="button" class="btn btn-circle" action="imprimir" title="Imprimir" pedido='{$row.idPedido}'><i class="fa fa-print"></i></button>
							</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		</div>
	</div>
	<hr />
	<div class="row">
		<div class="col-md-7">
			<h1 class="page-header" style="color: green">Productos comprados</h1>
			<div style="border: 1px solid #00AF00">
				<table id="tblComprados" class="table table-bordered table-hover" data-order='[[ 2, "desc" ]]'>
					<thead>
						<tr>
							<th>#</th>
							<th>Descripción</th>
							<th>Marca</th>
							<th>Talla</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$comprados item="row"}
							<tr>
								<td>{$row.idTalla}</td>
								<td>{$row.ropa}</td>
								<td>{$row.marca}</td>
								<td>{$row.talla}</td>
								<td>{$row.cantidad}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-5">
			<button class="btn btn-success" id="btnComentario">+ Añadir comentario</button>
			<div class="panel-group" id="accordion" style="margin-top: 30px">
				{assign var="primercomentario" value="1"}
				{foreach from=$comentarios item="row"}
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#comentario{$row.idComentario}">{$row.fecha}</a>
							</h4>
						</div>
						<div id="comentario{$row.idComentario}" class="panel-collapse collapse {if $primercomentario eq 1}in{/if}">
							<div class="panel-body">{$row.texto}</div>
						</div>
					</div>
					
					{assign var="primercomentario" value="0"}
				{/foreach}
			</div>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-md-5" style="font-size: 18px; color: green">
			<b>Total en compras</b>
			<input class="text-right" style="height: 60px; font-size: 28px; width: 200px;" id="txtMontoTotal" name="txtMontoTotal" value="$ {$montoTotal}" readonly disabled="true"/>
		</div>
		<div class="col-md-2" style="color: green">
			Meses en los que compra
		</div>
		<div class="col-md-5">
			<div style="position: relative; border: 2px solid green; height: 70px; vertical-align: middle; padding: 10px;">
			{foreach from=$meses item="row"}
				<div class="mesesCRM">
				{if $row.totalCompras > 0}
					<b>{$row.nombre}</b>
				{else}
					{$row.nombre}
				{/if}
				</div>
			{/foreach}
			</div>
		</div>
	</div>
	<br />
</div>


<div class="modal fade" id="winAvisos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Avisos</h1>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="btn-group">
							<button type="button" class="btn btn-primary" id="btnAgregar">Agregar</button>
						</div>
					</div>
				</div>
				<div id="dvListaAvisos">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="winAddAviso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Avisos</h1>
			</div>
			<div class="modal-body">
				<form role="form" id="frmAddAviso" class="form-horizontal" onsubmit="javascript: return false;">
					<div class="box">
						<div class="box-body">			
							<div class="form-group">
								<label for="txtFecha" class="col-lg-2">Fecha</label>
								<div class="col-lg-3">
									<input class="form-control" id="txtFecha" name="txtFecha" value="{$smarty.now|date_format:"%Y-%m-%d"}" data-inputmask="'mask': '9999-99-99'">
								</div>
							</div>
							<div class="form-group">
								<label for="txtMensaje" class="col-lg-2">Mensaje</label>
								<div class="col-lg-10">
									<textarea id="txtMensaje" name="txtMensaje" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-info pull-right">Guardar</button>
							<input type="hidden" id="id"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<input id="cliente" value="{$cliente->getId()}" type="hidden" />