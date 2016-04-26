<table id="tblTecnicas" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>Técnica</th>
			<th>Cantidad</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.tecnica}</td>
				<td class="text-right">{$row.cantidad}</td>
			</tr>
		{/foreach}
	</tbody>
</table>