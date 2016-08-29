<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de clientes</h1>
	</div>
</div>
<div class="box">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><i class="fa fa-sign-language fa-4x" aria-hidden="true"></i> Seguimiento de clientes</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="btn-toolbar" role="toolbar">
				<div class="btn-group btn-xs">
					<button type="button" id="btnCliente" class="btn btn-default">Clientes</button>
				</div>
				<div class="btn-group btn-xs">
					<button type="button" id="btnAvisos" class="btn btn-warning">Avisos</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<h1 class="page-header">Contacto</h1>
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
					<label for="" class="col-lg-5 control-label">Nombre</label>
					<div class="col-lg-7">{$cliente->getNombre()}</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Dirección</label>
					<div class="col-lg-7">{$cliente->getDireccion()}</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Teléfono</label>
					<div class="col-lg-7">{$cliente->getTelefono()}</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Celular</label>
					<div class="col-lg-7">{$cliente->getCelular()}</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Email</label>
					<div class="col-lg-7">{$cliente->getEmail()}</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Estado</label>
					<div class="col-lg-7"></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Última compra</label>
					<div class="col-lg-7"></div>
				</div>
				
				<input type="hidden" id="id" name="id" value="{$cliente->getId()}" />
			</form>
		</div>
		<div class="col-md-7">
			<h1 class="page-header">Historial de pedidos</h1>
			<table id="tblPedidos" class="table table-bordered table-hover" data-order='[[ 2, "desc" ]]'>
				<thead>
					<tr>
						<th>#</th>
						<th>Exc</th>
						<th>Fecha</th>
						<th>Entrega el</th>
						<th>Precio</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$ordenes item="row"}
						<tr>
							<td style="border-left: 3px solid {$row.color}">{$row.idPedido}</td>
							<td class="text-center">{if $row.excede eq 1}<i class="fa fa-star" aria-hidden="true"></i>{/if}</td>
							<td>{$row.registro}</td>
							<td>{$row.entrega}</td>
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
			<h1 class="page-header">Productos comprados</h1>
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
		<div class="col-md-5">
			<button class="btn btn-success" id="btnComentario">+ Añadir comentario</button>
			<div class="panel-group" id="accordion">
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
	<div class="row">
		<div class="col-md-4">
			<b>Total en compras</b>
			<input class="text-right" id="txtMontoTotal" name="txtMontoTotal" value="$ {$montoTotal}" readonly disabled="true"/>
		</div>
		<div class="col-md-2">
			Meses en los que compra
		</div>
		<div class="col-md-6">
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



<div class="modal fade" id="winAvisos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog moda-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Avisos</h1>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>