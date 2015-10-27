<?php /* Smarty version Smarty-3.1.11, created on 2015-10-26 20:00:59
         compiled from "templates/plantillas/modulos/cotizador/general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2060960726562905d4b30822-84610777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f5224490b4c725e7af0aa1d9d43f5401facc3d' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/general.tpl',
      1 => 1445911258,
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
<?php if ($_valid && !is_callable('content_562905d4b320b2_67588572')) {function content_562905d4b320b2_67588572($_smarty_tpl) {?><button type="button" class="btn btn-danger" id="eliminarDeCotizacion"><i class="fa fa-times"></i> Eliminar</button>
<br />
<table id="cotizacion" class="table table-bordered">
	<thead>
		<tr>
			<th style="width: 5%;">&nbsp;</th>
			<th style="width: 70%">Concepto</th>
			<th style="width: 5%;">Cantidad</th>
			<th style="width: 5%;">Descuento</th>
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