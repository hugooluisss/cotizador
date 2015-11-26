<form role="form" id="frmAddSerigrafiaDigital" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="selItem">Tipo</label></div>
		<div class="col-xs-10">
			<select id="selItem" name="selItem" class="form-control">
				{foreach key=key item=item from=$vinilo}
				<option value="{$item.idItem}" nombre="{$item.nombre}" precio="{$item.precio}">{$item.nombre}</option>
				{/foreach}
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtPU">Precio Unitario</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtPU" name="txtPU" autocomplete="off" disabled="false">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtAncho">Ancho</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtAncho" name="txtAncho" autocomplete="off" placeholder="cm">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtAlto">Alto</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtAlto" name="txtAlto" autocomplete="off" placeholder="cm">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtCantidad">Cantidad de cm<sup>2</sup></label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtCantidad" name="txtCantidad" autocomplete="off"  disabled="true">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtUnidades">Unidades</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtUnidades" name="txtUnidades" autocomplete="off">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtTotal">Total</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtTotal" name="txtTotal" autocomplete="off" disabled="false">
		</div>
	</div>
</form>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregar"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div>