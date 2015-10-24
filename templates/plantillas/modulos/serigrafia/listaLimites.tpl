<div class="box">
	<div class="box-body">
		<table id="tblLimites" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Inferior</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idLimite}</td>
						<td>{$row.inferior}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" item="{$row.idLimite}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>