<div class="box">
	<div class="box-body" style="overflow: scroll">
		<table id="tblPedidos" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
			<thead>
				<tr>
					<th>#</th>
					<th>Fecha</th>
					<th>Entregar el</th>
					<th>Cliente</th>
					<th>Vendedor</th>
					<th>Precio</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr style="background-color: {$row.color}">
						<td>{$row.idPedido}</td>
						<td>{$row.registro}</td>
						<td>{$row.entrega}</td>
						<td>{$row.cliente}</td>
						<td>{$row.usuario}</td>
						<td>{$row.precio}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-circle" action="imprimir" title="Imprimir" pedido='{$row.idPedido}'><i class="fa fa-file-pdf-o"></i></button>
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" pedido='{$row.idPedido}'><i class="fa fa-pencil"></i></button>
							{if $PAGE.tipoUsuario eq 1}
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" pedido="{$row.idPedido}"><i class="fa fa-times"></i></button>
							{/if}
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>