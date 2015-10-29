<?php /* Smarty version Smarty-3.1.11, created on 2015-10-29 13:33:20
         compiled from "templates/plantillas/modulos/cotizador/general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2060960726562905d4b30822-84610777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f5224490b4c725e7af0aa1d9d43f5401facc3d' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/general.tpl',
      1 => 1446147185,
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
<?php if ($_valid && !is_callable('content_562905d4b320b2_67588572')) {function content_562905d4b320b2_67588572($_smarty_tpl) {?><div class="btn-toolbar" role="toolbar">
	<div class="btn-group">
		<button type="button" class="btn btn-danger" id="eliminarDeCotizacion"><i class="fa fa-times"></i> Eliminar item</button>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-success" id="saveCotizacion"><i class="fa fa-save"></i> Guardar</button>
	</div>
</div>
<br />
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label for="txtCliente">Cliente</label>
					<input type="text" class="form-control" id="txtNombre" cliente placeholder="Nombre del cliente" disabled="true">
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="txtEmail">Email</label>
					<input type="email" class="form-control" id="txtEmail" cliente placeholder="Email" disabled="true">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-right">
				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#winClientes">Listar clientes</a>
			</div>
		</div>
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
			<td style="text-align: right" colspan="4">Total</td>
			<td style="text-align: right" id="total">0.00</td>
		</tr>
	</tfoot>
</table><?php }} ?>