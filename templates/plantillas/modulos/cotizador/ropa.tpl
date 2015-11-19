<div class="row">
	<div class="col-xs-2"><label for="selRopa">Artículo</label></div>
	<div class="col-xs-10">
		<select id="selRopa" name="selRopa" class="form-control">
			{foreach key=key item=item from=$ropa}
			<option value="{$item.idItem}" nombre="{$item.nombre} {$item.marca}">{$item.nombre} {$item.marca}</option>
			{/foreach}
		</select>
	</div>
	<div class="col-xs-12"><button type="button" id="btnBuscarTallas" class="btn btn-default">Obtener tallas</button></div>
</div>
<br />
<div id="dvTallas">
</div>