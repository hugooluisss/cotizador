<div class="modal fade" id="winRopa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Cotizaciones</h1>
			</div>
			<div class="modal-body">
				<table id="tblWinRopa" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Marca</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$ropa item="row"}
							<tr>
								<td class="identificador">{$row.idItem}</td>
								<td class="descripcion">{$row.nombre}</td>
								<td class="marca">{$row.marca}</td>
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