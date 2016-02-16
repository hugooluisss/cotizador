<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Precios para {$nombre}</h1>
	</div>
</div>
<input type="hidden" id="id" value="{$id}"/>

<div class="row">
	<label class="col-xs-4 col-lg-3" for="selLimite">A partir de </label>
	<div class="col-xs-8 col-lg-7">
		<select id="selLimite" name="selLimite">
			{foreach from=$limites item="row"}
				<option value="{$row.idLimite}" precio="{$row.precio}">{$row.inferior}</option>
			{/foreach}
		</select>
	</div>
</div>
<div class="row">
	<label class="col-xs-4 col-lg-3" for="txtPrecio">Precio</label>
	<div class="col-xs-8 col-lg-7">
		<input type="text" value="" id="txtPrecio" name="txtPrecio"  style="text-align: right"/>
	</div>
</div>