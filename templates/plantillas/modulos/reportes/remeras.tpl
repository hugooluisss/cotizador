<table id="tblRemeras" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Talla</th>
			<th>Cantidad</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.idItem}</td>
				<td>{$row.nombre}</td>
				<td>{$row.marca}</td>
				<td>{$row.talla}</td>
				<td>{$row.total}</td>
			</tr>
		{/foreach}
	</tbody>
</table>
