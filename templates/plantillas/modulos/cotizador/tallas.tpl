{foreach key=key item=row from=$tallas}
<div class="col-xs-4 col-lg-2 text-center">
	<div class="panel panel-primary">
		<div class="panel-heading">{$row.nombre}<small> ($ {$row.precio|string_format:"%.2f"})</small></div>
		<div class="panel-body"><input class="form-control talla" value="0" talla="{$row.idTalla}" precio="{$row.precio}" nombre="{$row.nombre}"/></div>
	</div>
</div>
{/foreach}

<div class="row">
	<div class="col-xs-2 text-right">
		<div class="btn btn-success" id="addRopa"><i class="fa fa-plus-circle"></i> Agregar</div>
	</div>
</div>