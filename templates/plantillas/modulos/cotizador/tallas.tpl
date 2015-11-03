<div class="row">
	{foreach key=key item=row from=$tallas}
	<div class="col-xs-6 col-lg-2 text-center">
		<div class="panel panel-info">
			<div class="panel-heading">{$row.nombre} <small class="text-muted">({$row.neto|string_format:"%.2f"})</small></div>
			<div class="panel-body">
				<input class="form-control talla" value="0" talla="{$row.idTalla}" nombre="{$row.nombre}" precio="{$row.neto}" talla="{$row.idTalla}"/>
			</div>
		</div>
	</div>
	{/foreach}
</div>

<div class="row">
	<div class="form-group">
		<div class="col-lg-12">
			<input class="form-control" id="talla_concepto" placeholder="Concepto" disabled="true">
		</div>
	</div>
	<br />
	<div class="form-group">
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">C</span>
				<input class="form-control" id="talla_cantidad" placeholder="Cantidad" disabled="true"/>
			</div>
		</div>
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">$</span>
				<input type="text" class="form-control" id="talla_precio" disabled="true"/>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregarRopa"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div>