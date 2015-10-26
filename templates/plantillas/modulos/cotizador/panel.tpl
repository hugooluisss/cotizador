<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Cotizador</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#cotizacion">Cotización general</a></li>
	<li><a data-toggle="tab" href="#ropa">Ropa</a></li>
	<li><a data-toggle="tab" href="#serigrafia">Serigrafía</a></li>
</ul>

<div class="tab-content">
	<div id="cotizacion" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/general.tpl"}
			</div>
		</div>
	</div>
	
	<div id="ropa" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/ropa.tpl"}
			</div>
		</div>
	</div>
	
	<div id="serigrafia" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/serigrafia.tpl"}
			</div>
		</div>
	</div>
</div>