<div style="overflow: scroll">
	<table id="tblNumerosLetras" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Número</th>
				<th>Talle</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$nombresNumeros item="row"}
				<tr>
					<td>{$row.letras}</td>
					<td>{$row.numeros}</td>
					<td>{$row.talla}</td>
					<td></td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>