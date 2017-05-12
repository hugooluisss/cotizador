<?php /* Smarty version Smarty-3.1.11, created on 2017-05-12 12:31:36
         compiled from "templates/plantillas/modulos/gastos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144625603159112aef13d3c2-46426610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd99cd6fc76d75dbf63feabe2d716d4ad7c301aea' => 
    array (
      0 => 'templates/plantillas/modulos/gastos/panel.tpl',
      1 => 1494610294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144625603159112aef13d3c2-46426610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59112aef1893f0_65287799',
  'variables' => 
  array (
    'anios' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59112aef1893f0_65287799')) {function content_59112aef1893f0_65287799($_smarty_tpl) {?><div class="row">
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
			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['anios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</option>
			<?php } ?>
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
</div><?php }} ?>