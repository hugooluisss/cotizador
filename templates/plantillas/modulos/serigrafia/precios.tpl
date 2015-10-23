<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Precios para {$nombre}</h1>
	</div>
</div>
<input type="hidden" id="id" value="{$id}"/>

<div class="row">
	<label class="col-xs-4" for="selLimite">Limite superior en cantidad</label>
	<div class="col-xs-8">
		<select id="selLimite" name="selLimite">
		</select>
	</div>
</div>

{for $color=1 to 5}
	<div class="col-xs-6 col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				{$color} colores
			</div>
			<div class="panel-body">
				{foreach from=$tamanos item="row"}
					<div class="row">
						<div class="col-xs-6 col-md-3">{$row.nombre}:</div>
						<div class="col-xs-6 col-md-9"><input type="text" class="form-control" color="{$color}" tamano="{$row.tamano}" value="" /></div>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
{/for}