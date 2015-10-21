<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Cotizador</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#ropa">Ropa</a></li>
</ul>

<div class="tab-content">
	<div id="ropa" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-xs-2"><label for="selRopa">Artículo</label></div>
					<div class="col-xs-6">
						<select id="selRopa" name="selRopa" class="form-control">
							{foreach key=key item=item from=$ropa}
							<option value="{$item.idItem}">{$item.nombre}</option>
							{/foreach}
						</select>
					</div>
					<div class="col-xs-2"><button type="button" id="btnBuscarTallas" class="btn btn-default">Obtener tallas</button></div>
				</div>
				<div class="row" id="dvTallas">
				</div>
			</div>
		</div>
	</div>
</div>