<div class="btn-toolbar" role="toolbar">
	<div class="btn-group">
		<button type="button" class="btn btn-danger" id="eliminarDeCotizacion"><i class="fa fa-times"></i> Eliminar item</button>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-success" id="saveCotizacion"><i class="fa fa-save"></i> Guardar</button>
	</div>
</div>
<br />
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label for="txtCliente">Cliente</label>
					<input type="text" class="form-control" id="txtNombre" cliente placeholder="Nombre del cliente" disabled="true">
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="txtEmail">Email</label>
					<input type="email" class="form-control" id="txtEmail" cliente placeholder="Email" disabled="true">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-right">
				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#winClientes">Listar clientes</a>
			</div>
		</div>
	</div>
</div>

<table id="cotizacion" class="table table-bordered">
	<thead>
		<tr>
			<th style="width: 5%;">&nbsp;</th>
			<th style="width: 65%">Concepto</th>
			<th style="width: 5%;">Cantidad</th>
			<th style="width: 10%;">% Desc.</th>
			<th style="width: 15%;">Precio</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: right" colspan="4">Total</td>
			<td style="text-align: right" id="total">0.00</td>
		</tr>
	</tfoot>
</table>