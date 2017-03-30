<div class="modal fade" id="winNombresNumeros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Lista de nombres y números</h1>
			</div>
			<div class="modal-body">
				<ul id="tabNombresNumeros" class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#nuevoNombreNumero">Nuevo / modificar</a></li>
					<li><a data-toggle="tab" href="#listaNombresNumeros">Lista</a></li>
				</ul>
				
				<div class="tab-content"> 
					<div id="nuevoNombreNumero" class="tab-pane fade in active">
						<div class="box">
							<div class="box-body">
								{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/nombresNumeros/nuevo.tpl"}
							</div>
						</div>
					</div>
					<div id="listaNombresNumeros" class="tab-pane fade in">
						<div class="box">
							<div class="box-body">
								{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/nombresNumeros/lista.tpl"}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>