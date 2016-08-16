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
		<div class="col-md-5">
			<h1 class="page-header">Contacto</h1>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="selTipo" class="col-lg-5 control-label">Tipo de cliente</label>
					<div class="col-lg-7">
						<select class="form-control" id="selTipo" name="selTipo">
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
	<div class="row">
		<div class="col-md-7">
			<h1 class="page-header">Productos comprados</h1>
		</div>
		<div class="col-md-5">
			<button class="btn btn-success">+ Añadir comentario</button>
		</div>
	</div>
</div>
<div class="box">
</div>