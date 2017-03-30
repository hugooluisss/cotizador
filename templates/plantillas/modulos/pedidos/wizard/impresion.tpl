<div class="row">
	<div class="col-md-12">
		<a href="#" class="btn btn-primary pull-right" id="addImpresion">AÑADIR IMPRESIÓN</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12" id="lstImpresion">
		
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-4">
		<b>Observaciones</b>
		<textarea class="form-control" rows="6" id="txtObservaciones" name="txtObservaciones"></textarea>
	</div>
	
	<div class="col-xs-12 col-md-4">
		<b>Captura</b>
		<div class="row" style="border: 1px solid #D8D8D8; height: 100%; margin-right: 3px; height: 140px">
			<div class="col-md-6">
				<br />
				<br />
				<br />
				<form id="upload2" method="post" action="?mod=cpedidos&action=uploadfile2" enctype="multipart/form-data">
					<input type="hidden" id="pedido2" name="pedido2" value="">
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
			</div>
			<div class="col-md-6 text-center">
				<img src="repositorio/img/user.png" id="imgCapturaPantalla" style="width: 90%; max-width: 150px;" onerror="this.src='repositorio/img/user.png';"/>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-2">
		<b>Archivos</b>
		<div class="row" style="border: 1px solid #D8D8D8; height: 100%; margin-right: 3px; height: 140px">
			<div class="col-md-12">
				<br />
				<br />
				<form id="upload" method="post" action="?mod=cpedidos&action=uploadfile" enctype="multipart/form-data">
					<!--<input type="hidden" id="pedido" name="pedido" value="">-->
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
				
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<input type="text" class="form-control" id="txtNombreArchivo" archivo placeholder="Nombre de archivo" maxlength="100">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-2">
		<b>Nombres y números</b>
		<div class="row" style="border: 1px solid #D8D8D8; margin-right: 3px height: 100%; height: 140px">
			<div class="col-md-12 text-center">
				<br />
				<br />
				<button class="btn btn-success" id="btnNombresNumeros"><i class="fa fa-pencil"></i> Crear Lista</button>
			</div>
		</div>
	</div>
</div>