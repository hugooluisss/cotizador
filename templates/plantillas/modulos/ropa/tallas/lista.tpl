<div class="box">
	<div class="box-body">
		<table id="tblTallas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Talla</th>
					<th>Adicional</th>
					<th>Precio neto</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idTalla}</td>
						<td>{$row.nombre}</td>
						<td>{$row.adicional|string_format:"%.2f"}</td>
						<td>{($row.adicional+$precio)|string_format:"%.2f"}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" talla="{$row.idTalla}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>