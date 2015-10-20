<div class="box">
	<div class="box-body">
		<table id="tblRopa" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idItem}</td>
						<td>{$row.nombre}</td>
						<td>{$row.descripcion}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="tallas" title="Tallas" datos='{$row.json}'>T</button>
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" item="{$row.idItem}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>