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