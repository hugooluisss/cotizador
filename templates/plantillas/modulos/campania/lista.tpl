<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Disponible</th>
					<th>Código</th>
					<th>Votos</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idCampania}</td>
						<td>{$row.nombre}</td>
						<td>{if $row.disponible eq 1}Si{else}No{/if}</td>
						<td>{$row.codigo}</td>
						<td>{$row.votos}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-danger" action="reiniciar" title="Reiniciar conteo" datos='{$row.json}'><i class="fa fa-refresh"></i></button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="{$row.idCampania}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>