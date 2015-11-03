<?php /* Smarty version Smarty-3.1.11, created on 2015-11-03 08:46:08
         compiled from "templates/plantillas/modulos/cotizador/general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2060960726562905d4b30822-84610777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f5224490b4c725e7af0aa1d9d43f5401facc3d' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/general.tpl',
      1 => 1446561641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2060960726562905d4b30822-84610777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562905d4b320b2_67588572',
  'variables' => 
  array (
    'cargo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562905d4b320b2_67588572')) {function content_562905d4b320b2_67588572($_smarty_tpl) {?><div class="btn-toolbar" role="toolbar">
	<div class="btn-group">
		<button type="button" class="btn btn-success" id="saveCotizacion"><i class="fa fa-save"></i> Guardar</button>
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#winCotizaciones" id="lstCotizaciones"><i class="fa fa-bars"></i> Listar de cotizaciones</a>
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
			<div class="col-xs-6">
				<div class="form-group">
					<label for="txtNombre">Cliente</label>
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
			<td style="text-align: right" colspan="4">Cargo adicional (% sobre el subtotal)</td>
			<td style="text-align: right">
				<select id="selCargo">
					<?php $_smarty_tpl->tpl_vars['cargo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['cargo']->step = 1;$_smarty_tpl->tpl_vars['cargo']->total = (int)ceil(($_smarty_tpl->tpl_vars['cargo']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['cargo']->step));
if ($_smarty_tpl->tpl_vars['cargo']->total > 0){
for ($_smarty_tpl->tpl_vars['cargo']->value = 0, $_smarty_tpl->tpl_vars['cargo']->iteration = 1;$_smarty_tpl->tpl_vars['cargo']->iteration <= $_smarty_tpl->tpl_vars['cargo']->total;$_smarty_tpl->tpl_vars['cargo']->value += $_smarty_tpl->tpl_vars['cargo']->step, $_smarty_tpl->tpl_vars['cargo']->iteration++){
$_smarty_tpl->tpl_vars['cargo']->first = $_smarty_tpl->tpl_vars['cargo']->iteration == 1;$_smarty_tpl->tpl_vars['cargo']->last = $_smarty_tpl->tpl_vars['cargo']->iteration == $_smarty_tpl->tpl_vars['cargo']->total;?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['cargo']->value*10;?>
"><?php echo $_smarty_tpl->tpl_vars['cargo']->value*10;?>
%
					<?php }} ?>
				</select>
			</td>
		</tr>
		<tr>
			<td style="text-align: right" colspan="4">Total</td>
			<td style="text-align: right" id="total">0.00</td>
		</tr>
	</tfoot>
</table><?php }} ?>