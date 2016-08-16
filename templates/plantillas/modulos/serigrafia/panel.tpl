<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Serigrafía</h1>
	</div>
</div>
		
<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar posiciones</a></li>
  <li><a data-toggle="tab" href="#limites">Límites de mayoreo</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-primary" id="btnWinActualizarPrecios">Actualizar todos los precios</button>
				</div>
			</div>
		</div>
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-lg-2">Descripción</label>
						<div class="col-lg-3">
							<textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
	
	<div id="limites" class="tab-pane fade">
		<div class="box">
			<div class="box-body">			
				<div class="form-group">
					<label for="txtInferior" class="col-lg-2 col-xs-5">A partir de</label>
					<div class="col-xs-1">
						<input class="form-control" id="txtInferior" name="txtInferior">
					</div>
					<div class="col-xs-4">
						<input type="hidden" id="tipoItem" value="{$tipoItem}" />
						<button class="btn btn-success" id="btnAddLimite"><i class="fa fa-plus-circle"></i></button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="box">
			<div class="box-body" id="dvListaLimites">
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="winPrecios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Definición de precios</h1>
			</div>
			<div class="modal-body">
				<form role="form" id="frmDefinicionPrecios" class="form-horizontal" onsubmit="javascript: return false;">
					<div class="form-group">
						<label for="selQuiero" class="col-lg-2 col-xs-5">Quiero</label>
						<div class="col-xs-7 col-md-5">
							<select id="selQuiero" name="selQuiero" class="form-control">
								<option value="aumentar">Aumentar</option>
								<option value="disminuir">Disminuir</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selEn" class="col-lg-2 col-xs-5">En</label>
						<div class="col-xs-7 col-md-5">
							<select id="selEn" name="selEn" class="form-control">
								<option value="porcentaje">% Porcentaje</option>
								<option value="cantidad">$ Cantidad</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtMonto" class="col-lg-2 col-xs-5">Monto</label>
						<div class="col-xs-7 col-md-5">
							<input class="form-control" id="txtCantidad" name="txtCantidad" type="number" />
						</div>
					</div>
					<br />
					<div class="text-right">
						<input type="submit" class="btn btn-success" value="Actualizar" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>