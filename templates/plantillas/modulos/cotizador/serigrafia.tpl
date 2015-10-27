<form role="form" id="frmAddSerigrafia" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="selPosicion">Posición</label></div>
		<div class="col-xs-10">
			<select id="selPosicion" name="selPosicion" class="form-control">
				{foreach key=key item=item from=$posiciones}
				<option value="{$item.idItem}" nombre="{$item.nombre}">{$item.nombre}</option>
				{/foreach}
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="selTamano">Tamaño</label></div>
		<div class="col-xs-4">
			<select id="selTamano" name="selTamano" class="form-control">
				{foreach key=key item=item from=$tamanos}
				<option value="{$item.idTamano}" nombre="{$item.nombre}">{$item.nombre}</option>
				{/foreach}
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="selColores">No. de colores</label></div>
		<div class="col-xs-2">
			<select id="selColores" name="selColores" class="form-control">
				{for $color=1 to 5}
				<option value="{$color}" nombre="{$color}">{$color}</option>
				{/for}
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtCantidad_s">Cantidad</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtCantidad" name="txtCantidad" autocomplete="off">
		</div>
	</div>	
	
	<div class="row">
		<div class="col-xs-12"><button type="button" id="btnBuscarPrecioSerigrafia" class="btn btn-default">Obtener precio</button></div>
	</div>
</div>
<br />

<div class="row">
	<div class="form-group">
		<div class="col-lg-12">
			<input class="form-control" id="serigrafia_concepto" placeholder="Concepto" disabled="true">
		</div>
	</div>
	<br />
	<div class="form-group">
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">C</span>
				<input class="form-control" id="serigrafia_cantidad" placeholder="Cantidad" disabled="true"/>
			</div>
		</div>
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">$</span>
				<input type="text" class="form-control" id="serigrafia_precio" disabled="true"/>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregarSerigrafia"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div>