<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reportes</h1>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-2">
				<label for="selTipo">Fecha de</label></div>
			<div class="col-md-3">
				<select id="selTipo" name="selTipo" class="form-control">
					<option value="registro">Registro
					<option value="entrega">Entrega
				</select>
			</div>
			<div class="col-md-2">
				<label for="selEstado">Estado</label>
			</div>
			<div class="col-md-3">
				<select id="selEstado" name="selEstado" class="form-control">
					<option value="">Todos
					{foreach key=key item=item from=$estados}
						<option value="{$item.idEstado}">{$item.nombre}
					{/foreach}
				</select>
			</div>
			<div class="col-md-2">
				<button class="btn btn-danger btnBuscar">Buscar</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label for="txtInicio">Inicio</label></div>
			<div class="col-md-3">
				<input type="input" class="form-control" id="txtInicio" name="txtInicio" placeholder="Y-m-d" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
			<div class="col-md-2">
				<label for="txtFin">Fin</label>
			</div>
			<div class="col-md-3">
				<input type="input" class="form-control" id="txtFin" name="txtFin" placeholder="Y-m-d" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
		</div>
	</div>
</div>

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#remeras">Venta de remeras</a>
			</h4>
		</div>
		<div id="remeras" class="panel-collapse collapse in">
			<div class="panel-body"></div>
		</div>
	</div>
	
	{if $PAGE.tipoUsuario neq 2}
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#ventasTotales">Ventas totales</a>
			</h4>
		</div>
		<div id="ventasTotales" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#tecnicas">Por técnicas</a>
			</h4>
		</div>
		<div id="tecnicas" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#tipoClientes">Por tipo de cliente</a>
			</h4>
		</div>
		<div id="tipoClientes" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#utilidad">Utilidad</a>
			</h4>
		</div>
		<div id="utilidad" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	{/if}
</div>