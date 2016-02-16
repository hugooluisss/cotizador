<div class="modal fade" id="winRemeras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Remeras</h1>
			</div>
			<div class="modal-body">
				<table id="tblRemeras" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$remeras item=row}
						<tr item='{$row.json}'>
							<td>{$row.idItem}</td>
							<td>{$row.nombre}</td>
							<td>
								<button type="button" class="btn btn-success" action="seleccionar" title="Seleccionar" item='{$row.json}'>
									<i class="fa fa-hand-pointer-o"></i>
								</button>
							</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>