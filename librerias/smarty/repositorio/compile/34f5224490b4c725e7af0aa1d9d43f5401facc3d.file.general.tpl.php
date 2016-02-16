<?php /* Smarty version Smarty-3.1.11, created on 2015-12-19 14:19:47
         compiled from "templates/plantillas/modulos/cotizador/general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2060960726562905d4b30822-84610777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f5224490b4c725e7af0aa1d9d43f5401facc3d' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/general.tpl',
      1 => 1449785182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2060960726562905d4b30822-84610777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562905d4b320b2_67588572',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562905d4b320b2_67588572')) {function content_562905d4b320b2_67588572($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="btn-toolbar" role="toolbar">
	<div class="btn-group">
		<button type="button" class="btn" id="saveCotizacion"><i class="fa fa-save"></i> Guardar</button>
		<button type="button" class="btn" id="nuevaCotizacion"><i class="fa fa-sticky-note-o"></i> Nueva cotización</button>
		<a href="#" class="btn" data-toggle="modal" data-target="#winCotizaciones" id="lstCotizaciones"><i class="fa fa-bars"></i> Listar de cotizaciones</a>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default" id="pdf"><i class="fa fa-file-pdf-o"></i> PDF</button>
		<button type="button" class="btn btn-default" id="email"><i class="fa fa-send-o"></i> E-mail</button>
	</div>
</div>
<br />
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-2">
				<div class="form-group">
					<label for="txtFecha">Fecha</label>
					<input type="text" class="form-control" id="txtFecha" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" data-mask>
				</div>
			</div>
			<div class="col-xs-5">
				<div class="form-group">
					<label for="txtNombre">Cliente</label>
					<input type="text" class="form-control" id="txtNombre" cliente placeholder="Nombre del cliente" disabled="true">
				</div>
			</div>
			<div class="col-xs-5">
				<div class="form-group">
					<label for="txtEmail">Email</label>
					<input type="email" class="form-control" id="txtEmail" cliente placeholder="Email" disabled="true">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-right">
				<a href="#" class="btn btn-success" id="btnModificarCliente" data-toggle="modal" data-target="#winModificarCliente">Modificar cliente</a>
				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#winClientes">Agregar clientes</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label for="txtObservaciones">Observaciones</label>
					<textarea id="txtObservaciones" name="txtObservaciones" class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="btn-toolbar" role="toolbar">
	<div class="btn-group">
		<button type="button" class="btn btn-danger" id="eliminarDeCotizacion"><i class="fa fa-times"></i> Eliminar item</button>
	</div>
</div>

<table id="cotizacion" class="table table-bordered">
	<thead>
		<tr>
			<th style="width: 5%;">&nbsp;</th>
			<th style="width: 65%">Concepto</th>
			<th style="width: 5%;">Cantidad</th>
			<th style="width: 10%;">% Desc.</th>
			<th style="width: 15%;">Precio</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: right" colspan="4">Subtotal</td>
			<td style="text-align: right" id="subtotal">0.00</td>
		</tr>
		<tr>
			<td style="text-align: right" colspan="4">
				Unidades
			</td>
			<td style="text-align: right"><input class="form-control" style="text-align: right" id="txtCantidadCosto" value="0" cambiar="si"/></td>
		</tr>
		<tr>
			<td style="text-align: right" colspan="4">
				Costo por unidad
			</td>
			<td style="text-align: right" id="costoUnidad">0.00</td>
		</tr>
		<tr>
			<td style="text-align: right" colspan="4">Cargo adicional (% sobre el subtotal)</td>
			<td style="text-align: right">
				<select id="selCargo">
					<option value="0">0% (sin cargos)
					<option value="10">10%
					<option value="20">20%
					<option value="30">30%
					<option value="40">40%
					<option value="50">50%
					<option value="60">60%
					<option value="70">70%
					<option value="80">80%
					<option value="90">90%
					<option value="100">100%
				</select>
			</td>
		</tr>
		<tr>
			<td style="text-align: right" colspan="4">Total</td>
			<td style="text-align: right" id="total">0.00</td>
		</tr>
	</tfoot>
</table><?php }} ?>