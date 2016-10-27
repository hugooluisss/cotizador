<br />
<div class="box">
	<div class="box-body" style="overflow: scroll">
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
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row" key="key"}
					<tr>
						<td>{$key}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				{foreachelse}
					<tr>
						<td colspan="9" class="text-center">Sin elementos</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>