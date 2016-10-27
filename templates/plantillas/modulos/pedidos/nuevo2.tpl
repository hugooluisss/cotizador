<input type="hidden" id="pedido" name="pedido" value="">

<div id="rootwizard" role="wizard">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul style="width: 100%">
					<li class="flecha"><a href="#tabCliente" data-toggle="tab">CLIENTE</a></li>
					<li><a href="#tabProductos" data-toggle="tab">PRODUCTO</a></li>
					<li><a href="#tabImpresion" data-toggle="tab">IMPRESIÓN</a></li>
					<li><a href="#tab4" data-toggle="tab">DISEÑO</a></li>
					<li><a href="#tab5" data-toggle="tab">CAJA</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="bar" class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="º0" style="width: 0%"></div>
	</div>
	<div class="tab-content">
		<div class="tab-pane" id="tabCliente">
			{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/wizard/clientes.tpl"}
		</div>
		<div class="tab-pane" id="tabProductos">
			{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/wizard/productos.tpl"}
		</div>
		<div class="tab-pane" id="tabImpresion">
			{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/wizard/impresion.tpl"}
		</div>
		<div class="tab-pane" id="tab4">
			4
		</div>
		<div class="tab-pane" id="tab5">
			5
		</div>
		<div class="tab-pane" id="tab6">
			6
		</div>
		<div class="tab-pane" id="tab7">
			7
		</div>
		<!--
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="javascript:;">Inicio</a></li>
			<li class="previous"><a href="javascript:;">Anterior</a></li>
			<li class="next last" style="display:none;"><a href="javascript:;">Fin</a></li>
			<li class="next"><a href="javascript:;">Siguiente</a></li>
		</ul>
		-->
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/clientes.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/remerasLista.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/winNombresNumeros.tpl"}

{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/winTecnicaImpresion.tpl"}