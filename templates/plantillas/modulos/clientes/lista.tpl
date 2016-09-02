<div class="box">
	<div class="box-header">
		<div class="text-left">
			<div class="btn-group">
				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
					Marketing<span class="caret"></span>
				</button>
				
				<ul class="dropdown-menu" role="menu">
					<li><a href="#" id="btnGenerarEmail">Generar lista</a></li>
					<li class="divider"></li>
					<li><a href="#" id="btnTodosEmail">Seleccionar todos</a></li>
					<li><a href="#" id="btnLimpiarEmail">Limpiar selección</a></li>
				</ul>
			</div>
		</div>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblClientes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th></th>
					<th>Nombre</th>
					<th>E-mail</th>
					<th>RFC</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td><input type="checkbox" class="email" email="{$row.email}" /></td>
						<td>{$row.nombre}</td>
						<td>{$row.email}</td>
						<td>{$row.rfc}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" style="padding: 6px 7px 6.5px 7px;" action="crm" title="Seguimiento de clientes" datos='{$row.json}'><img src="repositorio/img/manosBlancas.png" style="width: 25px; height: 15px;" /></button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" cliente="{$row.idCliente}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>