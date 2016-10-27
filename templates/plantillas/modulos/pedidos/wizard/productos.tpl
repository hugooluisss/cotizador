<div class="row">
	<label class="col-xs-12 col-sm-2" for="txtNombreRemera">Nombre</label>
	<div class="col-xs-12 col-sm-6">
		<input type="text" class="form-control" id="txtNombreRemera" name="txtNombreRemera">
	</div>
	<div class="col-xs-4">
		<button type="button" class="btn btn-success" id="btnLstRemeras"><i class="fa fa-search"></i> Buscar</button>
	</div>
</div>
<br />
<div class="row" style="overflow: scroll">
	<table id="tblTalles" class="table table-bordered" totalTallas="{count($tallas)}">
		<thead>
			<tr>
				<th rowspan="2" class="text-center">Nombre</th>
				<th colspan="{count($tallas)}" class="text-center">Talles</th>
			</tr>
			<tr>
				{assign var="contador" value=0}
				{foreach key=key item=item from=$tallas}
					<th class="text-center" talla="{$contador}" nombre="{$item.nombre}">{$item.nombre2}</th>
					{assign var="contador" value=$contador+1}
				{/foreach}
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>