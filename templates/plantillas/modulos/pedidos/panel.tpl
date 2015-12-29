<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Pedidos</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#nuevo">Nuevo / modificar</a></li>
	<li><a data-toggle="tab" href="#lista">Lista</a></li>
</ul>

<div class="tab-content"> 
	<div id="nuevo" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/nuevo.tpl"}
			</div>
		</div>
	</div>
	<div id="lista" class="tab-pane fade in">
		<div class="box">
			<div class="box-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/listaPanel.tpl"}
			</div>
		</div>
	</div>
</div>