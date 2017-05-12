<div class="box">
	<div class="box-body">
		<table id="tblAnio" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Año</th>
					<th>Mes</th>
					<th>Ingresos</th>
					<th>Mercaderia</th>
					<th>Gastos</th>
					<th>Total</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$ventas item="row"}
					<tr>
						<td class="text-center">{$row.anio}</td>
						<td class="text-left">{$row.nombremes}</td>
						<td class="text-right">{$row.ventas|string_format:"%.2f"}</td>
						<td class="text-right">{$row.mercaderia|string_format:"%.2f"}</td>
						<td class="text-right">{$row.gastos|string_format:"%.2f"}</td>
						<td class="text-right">{($row.ventas - $row.mercaderia - $row.gastos)|string_format:"%.2f"}</td>
						<td class="text-right">
							<button type="button" class="btn btn-success" action="detalle" title="Detalle de gastos" datos='{$row.json}' data-toggle="modal" data-target="#winGastos"><i class="fa fa-info" aria-hidden="true"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>