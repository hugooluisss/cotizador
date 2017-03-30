<br />
<table id="tblPedidos" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>#</th>
			<th>Técnica de impresión</th>
			<th>Color</th>
			<th>Cantidad</th>
			<th>Ubicación</th>
			<th>Tamaño</th>
			<th>Medidas/cm</th>
			<th>Precio</th>
			<th>Quitar</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row" key="key"}
			<tr>
				<td>{$key+1}</td>
				<td>{$row.nombre}</td>
				<td>{$row.color}</td>
				<td>{$row.cantidad}</td>
				<td>{$row.ubicacion}</td>
				<td>{$row.size}</td>
				<td>{$row.medidas}</td>
				<td>{$row.precio}</td>
				<td>
					<a href="#" tecnica={$row.idTecnica} accion="quitar">Quitar</a>
				</td>
			</tr>
		{foreachelse}
			<tr>
				<td colspan="9" class="text-center">Sin elementos</td>
			</tr>
		{/foreach}
	</tbody>
</table>