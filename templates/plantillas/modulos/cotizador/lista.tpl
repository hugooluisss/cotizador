<div class="box">
	<div class="box-body">
		<table id="tblCotizaciones" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Cliente</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$cotizaciones item="row"}
					<tr cotizacion="{$row.idCotizacion}">
						<td>{$row.idCotizacion}</td>
						<td>{$row.nombre}</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>