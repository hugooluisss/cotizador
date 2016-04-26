<table id="tblVentas" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Pedido</th>
			<th>Registro</th>
			<th>Entrega</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.cliente}</td>
				<td>{$row.idPedido}</td>
				<td>{$row.registro}</td>
				<td>{$row.entrega}</td>
				<td class="text-right">{$row.precio}</td>
			</tr>
		{/foreach}
	</tbody>
</table>
<br />
<div class="row">
	<div class="col-md-offset-8 col-md-2"><strong>Total de ventas</strong></div>
	<div class="col-md-2 text-right">{$total}</div>
</div>
<br />