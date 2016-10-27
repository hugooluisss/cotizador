<table id="tblClientes" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$clientes item=row}
		<tr cliente='{$row.json}'>
			<td>{$row.idCliente}</td>
			<td>{$row.nombre}</td>
			<td class="text-right">
				<button type="button" class="btn btn-success" action="seleccionar" title="Seleccionar" cliente='{$row.json}'>
					<i class="fa fa-hand-pointer-o"></i>
				</button>
				<button type="button" class="btn btn-success" action="modificar" title="Modificar" cliente="{$row.idCliente}">
					<i class="fa fa-pencil"></i>
				</button>
			</td>
		</tr>
		{/foreach}
	</tbody>
</table>