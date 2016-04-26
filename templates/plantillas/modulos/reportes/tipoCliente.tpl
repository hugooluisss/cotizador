<table id="tblTipoClientes" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>Tipo</th>
			<th>Cantidad</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{if $row.tipo eq 'F'}Persona{else}Empresa{/if}</td>
				<td class="text-right">{$row.cantidad}</td>
			</tr>
		{/foreach}
	</tbody>
</table>