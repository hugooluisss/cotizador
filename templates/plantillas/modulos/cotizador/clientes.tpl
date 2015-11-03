<div class="modal fade" id="winClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Clientes</h1>
			</div>
			<div class="modal-body">
				<div class="well">
					<form role="form" id="frmAddCliente" class="form-horizontal" onsubmit="javascript: return false;">
						<div class="row">
							<div class="col-xs-12">
								<h4>Agregar cliente</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<input class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre completo">
							</div>
							<div class="col-xs-6">
								<input class="form-control" id="txtEmail" name="txtEmail" type="email" placeholder="E-mail">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 text-right">
								<button type="submit" class="btn btn-success">Guardar</button>
							</div>
						</div>
					</form>
				</div>
				<table id="tblClientes" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$clientes item=row}
						<tr cliente='{$row.json}'>
							<td>{$row.idCliente}</td>
							<td>{$row.nombre}</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="consultorio" name="consultorio" value="" />
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>