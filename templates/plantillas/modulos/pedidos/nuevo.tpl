<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-2" for="txtCliente">Cliente</label>
			<div class="col-xs-5">
				<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
			</div>
			<div class="col-xs-5">
				<input type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" />
				<input type="button" class="btn btn-success" value="Nuevo" />
			</div>
		</div>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/clientes.tpl"}