<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Seguimiento de Pedidos</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<div class="btn-group" role="group" aria-label="...">
			<button type="button" class="btn btn-success" id="btnImprimir">Generar en PDF</button>
		</div>
		<h3>Generales</h3>
		<div class="row">
			<div class="col-xs-4"><label>Número</label></div>
			<div class="col-xs-8">{$pedido->getId()}</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Fecha de registro</label></div>
			<div class="col-xs-8">{$pedido->getRegistro()}</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Probable entrega</label></div>
			<div class="col-xs-8">{$pedido->getEntrega()}</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Estado</label></div>
			<div class="col-xs-8"><span style="background: {$pedido->estado->getColor()}">&nbsp;&nbsp;&nbsp;&nbsp;</span> {$pedido->estado->getNombre()}</div>
		</div>
		<hr />
		<h3>Cliente</h3>
		<div class="row">
			<div class="col-xs-4"><label>Nombre</label></div>
			<div class="col-xs-8">{$pedido->cliente->getNombre()}</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Email</label></div>
			<div class="col-xs-8">{$pedido->cliente->getEmail()}</div>
		</div>
		<!--
		<hr />
		<h3>Nombres y números</h3>
		{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/nombresNumeros/nuevo.tpl"}
		<div id="dvListaNombresNumeros">
			{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/nombresNumeros/lista.tpl"}
		</div>-->
		<h3>Archivos</h3>
		<form id="upload" method="post" action="?mod=cseguimiento&action=uploadfile" enctype="multipart/form-data">
			<input type="hidden" id="pedido" name="pedido" value="{$pedido->getId()}">
			<input type="file" name="upl" multiple />
			<ul class="elementos list-group">
			{foreach from=$archivos item=archivo}
				<li class="list-group-item">
					{if in_array($archivo.extension, array('jpg', 'png', 'jpeg', 'gif', 'bmp', 'tiff')) }
						<img class="img-rounded" src="{$archivo.ruta}" />
					{/if}
					<p>{$archivo.nombre}</p>
					<a class="btn btn-primary btn-xs vista">Vista previa</a>
				</li>
			{/foreach}
			</ul>
		</form>
	</div>
</div>