<form role="form" id="frmAddOtros" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="selItem">Tipo</label></div>
		<div class="col-xs-10">
			<select id="selItem" name="selItem" class="form-control">
				{foreach key=key item=item from=$otros}
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
</form>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregar"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div>