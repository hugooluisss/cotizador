{foreach key=key item=row from=$tallas}
<div class="col-xs-4 col-lg-2 text-center">
	<label class="">{$row.nombre}</label>
	<div class="col-xs-12">
		<input class="form-control talla" value="0" talla="{$row.idTalla}"/>
	</div>
</div>
{/foreach}

<div class="row">
	<div class="col-xs-2 text-right">
		<div class="btn btn-success"><i class="fa fa-plus-circle"></i></div>
	</div>
</div>