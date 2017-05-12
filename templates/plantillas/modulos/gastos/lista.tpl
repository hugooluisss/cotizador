<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Concepto</th>
			<th>Monto</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td class="text-left">{$row.fecha}</td>
				<td class="text-left">{$row.concepto}</td>
				<td class="text-right">{$row.monto|string_format:"%.2f"}</td>
				<td class="text-right">
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar gasto" identificador="{$row.idGasto}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>