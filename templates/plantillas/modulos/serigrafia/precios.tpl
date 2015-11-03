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
						<div class="col-xs-6 col-md-9"><input type="text" class="form-control precio" color="{$color}" tamano="{$row.idTamano}" value="{$row.colores[$color]}" anterior="{$row.colores[$color]}" /></div>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
{/for}