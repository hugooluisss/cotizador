<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Control de gastos</h1>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 text-right">
		<button id="addGasto" type="button" class="btn btn-primary" data-toggle="modal" data-target="#winAddGasto">Agregar gasto</button>
	</div>
</div>
<br />
<div class="box">
	<div class="box-body">
		<label for="selAnio">Año</label>
		<select id="selAnio" name="selAnio">
			{foreach from=$anios item="row"}
				<option value="{$row}">{$row}</option>
			{/foreach}
		</select>
	</div>
</div>

<div id="listaMes"></div>

<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">		
	<div class="modal fade" id="winAddGasto">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Agregar gasto</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="txtFecha" class="col-lg-2">Fecha</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtFecha" name="txtFecha">
						</div>
					</div>
					<div class="form-group">
						<label for="txtConcepto" class="col-lg-2">Concepto</label>
						<div class="col-lg-7">
							<input class="form-control" id="txtConcepto" name="txtConcepto">
						</div>
					</div>
					<div class="form-group">
						<label for="txtMonto" class="col-lg-2">Monto</label>
						<div class="col-lg-3">
							<input class="form-control text-right" id="txtMonto" name="txtMonto">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
</form>


<div class="modal fade" id="winGastos" anio="" mes="">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Detalle de gastos</h4>
			</div>
			<div class="modal-body"></div>
		</div>
	</div>
</div>