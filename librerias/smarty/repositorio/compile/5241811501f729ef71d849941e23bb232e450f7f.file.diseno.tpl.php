<?php /* Smarty version Smarty-3.1.11, created on 2017-02-02 21:53:41
         compiled from "templates/plantillas/modulos/pedidos/wizard/diseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1314314801581610a370a637-05401519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5241811501f729ef71d849941e23bb232e450f7f' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/wizard/diseno.tpl',
      1 => 1486094019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314314801581610a370a637-05401519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_581610a370d9e9_29255046',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581610a370d9e9_29255046')) {function content_581610a370d9e9_29255046($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-md-4">
		<b>Método de entrega</b>
		<br />
		<select id="selFormaEntrega" name="selFormaEntrega" class="form-control">
			<option value=""></option>
			<option value="Retiro en local">Retiro en local</option>
			<option value="Envio a dominicilio">Envío a domicilio</option>
			<option value="Envio por encomienda">Envío por encomienda</option>
		</select>
	</div>
</div>
<br />
<div class="row">
	<div class="col-md-offset-4 col-md-2 text-center">
		Envoltorio
	</div>
	<div class="col-md-2 text-center">
		Costo de envío
	</div>
	<div class="col-md-4 text-center">
		Observaciones
	</div>
</div>
<div class="row" style="border-top: 1px solid #D8D8D8; height: 300px; margin-right: 3px;">
	<div class="col-md-4" style="border-right: 1px solid #D8D8D8;">
		<div class="form-group">
			<label for="txtPais" class="contro-label col-lg-4 text-right">País</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtPais" name="txtPais">
			</div>
		</div>
		<div class="form-group">
			<label for="txtDepartamento" class="contro-label col-lg-4 text-right">Depto</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtDepartamento" name="txtDepartamento">
			</div>
		</div>
		<div class="form-group">
			<label for="txtDireccion" class="contro-label col-lg-4 text-right">Dirección</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
			</div>
		</div>
		<div class="form-group">
			<label for="txtEquina" class="contro-label col-lg-4 text-right">Esquina</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtEsquina" name="txtEsquina">
			</div>
		</div>
		<div class="form-group">
			<label for="txtHorario" class="contro-label col-lg-4 text-right">Horario</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtHorario" name="txtHorario">
			</div>
		</div>
		<div class="form-group">
			<label for="txtFecha" class="contro-label col-lg-4 text-right">Fecha</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="txtFecha" name="txtFecha" placeholder="YYYY-mm-dd">
			</div>
		</div>
	</div>
	
	<div class="col-md-2" style="border-right: 1px solid #D8D8D8;">
		<select id="selEnvoltorio" name="selEnvoltorio" class="form-control">
			<option value="">Sin especificar</option>
			<option value="Normal">Normal</option>
			<option value="Regalo">Regalo</option>
			<option value="A granel">A granel</option>
		</select>
	</div>
	<div class="col-md-2" style="border-right: 1px solid #D8D8D8;">
		<div class="input-group">
			<span class="input-group-addon">$</span>
			<input type="text" class="form-control" aria-label="">
		</div>

	</div>
	<div class="col-md-4">
		<textarea class="form-control" rows="5" id="txtObservaciones" name="txtObservaciones" style="border: none;"></textarea>
	</div>
</div><?php }} ?>