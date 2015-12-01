<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Cotizador</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#cotizacion">Cotización general</a></li>
	<li><a data-toggle="tab" href="#ropa">Ropa</a></li>
	<li><a data-toggle="tab" href="#serigrafia">Serigrafía</a></li>
	<li><a data-toggle="tab" href="#seriDig">Serigrafía digital</a></li>
	<li><a data-toggle="tab" href="#transfer">Transfer</a></li>
	<li><a data-toggle="tab" href="#sublimacion">Sublimación</a></li>
	<li><a data-toggle="tab" href="#vinilo">Vinilo</a></li>
	<li><a data-toggle="tab" href="#estampado">Números y letras</a></li>
	<li><a data-toggle="tab" href="#adicionales">Servicios adicionales</a></li>
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
	
	<div id="seriDig" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/serigrafiaDigital.tpl"}
			</div>
		</div>
	</div>
	
	<div id="transfer" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/transfer.tpl"}
			</div>
		</div>
	</div>
	
	<div id="sublimacion" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/sublimacion.tpl"}
			</div>
		</div>
	</div>
	
	<div id="vinilo" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/vinilo.tpl"}
			</div>
		</div>
	</div>
	
	<div id="estampado" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/estampado.tpl"}
			</div>
		</div>
	</div>
	
	<div id="adicionales" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/otros.tpl"}
			</div>
		</div>
	</div>
</div>
{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/clientes.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/cotizaciones.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/winRopa.tpl"}

{include file=$PAGE.rutaModulos|cat:"modulos/cotizador/modificarCliente.tpl"}

<input id="idCotizacion" name="idCotizacion" type="hidden" />