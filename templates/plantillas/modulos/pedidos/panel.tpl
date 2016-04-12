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
				<div class="row">
					<div class="col-xs-12 text-right">
						<a href="#" id="btnAyuda" class="btn btn-primary"><i class="fa fa-bullhorn"></i> Ayuda de estados</a>
					</div>
				</div>
				<br />
				{include file=$PAGE.rutaModulos|cat:"modulos/pedidos/listaPanel.tpl"}
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="perfil" value="{$PAGE.tipoUsuario}" />


<div class="modal fade" id="winAyuda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Guía de Colores Pedidos</h1>
			</div>
			<div class="modal-body">
				<table id="tblEstados" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
					<thead>
						<tr>
							<th>Estado</th>
							<th>Color</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$estados item="row"}
							<tr>
								<td>{$row.nombre}</td>
								<td><span style="background: {$row.color}; border: 1px solid #ccc;">&nbsp;&nbsp;&nbsp;</span></td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>