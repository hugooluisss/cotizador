<?php /* Smarty version Smarty-3.1.11, created on 2016-10-30 01:22:33
         compiled from "templates/plantillas/modulos/pedidos/wizard/clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82892156958121c20dcdd79-72420449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b3a2500073247a323f42c4a1e51e04409b62f58' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/wizard/clientes.tpl',
      1 => 1477594911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82892156958121c20dcdd79-72420449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58121c20e57796_14191571',
  'variables' => 
  array (
    'hora' => 0,
    'minuto' => 0,
    'estados' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58121c20e57796_14191571')) {function content_58121c20e57796_14191571($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
	<label class="col-xs-2" for="txtCliente">Cliente</label>
	<div class="col-sm-5">
		<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
	</div>
	<div class="col-sm-5">
		<button type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" /><i class="fa fa-search"></i> Buscar</button>
		<input type="button" class="btn btn-success" id="btnNuevoCliente" value="Nuevo" />
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<label class="col-xs-4" for="txtFecha">Fecha <small>Ingreso</small></label>
			<div class="col-xs-8">
				<input type="input" class="from-control" id="txtFecha" name="txtFecha" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
				<div id="datepicker"></div>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-4" for="txtEntrega">Fecha <small>sistema</small></label>
			<div class="col-xs-8">
				<input type="input" class="from-control" id="txtEntrega" name="txtEntrega" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-4" for="txtEntrega">Entrega <small>cliente</small></label>
			<div class="col-xs-8">
				<input type="input" class="from-control" id="txtEntregaCliente" name="txtEntregaCliente" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-4" for="selHora">Hora</label>
			<div class="col-xs-8">
				<select class="form-contro" id="selHora" name="selHora">
					<option value=""></option>
				<?php $_smarty_tpl->tpl_vars['hora'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hora']->step = 1;$_smarty_tpl->tpl_vars['hora']->total = (int)ceil(($_smarty_tpl->tpl_vars['hora']->step > 0 ? 19+1 - (9) : 9-(19)+1)/abs($_smarty_tpl->tpl_vars['hora']->step));
if ($_smarty_tpl->tpl_vars['hora']->total > 0){
for ($_smarty_tpl->tpl_vars['hora']->value = 9, $_smarty_tpl->tpl_vars['hora']->iteration = 1;$_smarty_tpl->tpl_vars['hora']->iteration <= $_smarty_tpl->tpl_vars['hora']->total;$_smarty_tpl->tpl_vars['hora']->value += $_smarty_tpl->tpl_vars['hora']->step, $_smarty_tpl->tpl_vars['hora']->iteration++){
$_smarty_tpl->tpl_vars['hora']->first = $_smarty_tpl->tpl_vars['hora']->iteration == 1;$_smarty_tpl->tpl_vars['hora']->last = $_smarty_tpl->tpl_vars['hora']->iteration == $_smarty_tpl->tpl_vars['hora']->total;?> 
					<option value="<?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
"><?php echo sprintf("%02s",$_smarty_tpl->tpl_vars['hora']->value);?>

				<?php }} ?>
				</select>
				 : 
				<select class="form-contro" id="selMinuto" name="selMinuto">
					<option value=""></option>
				<?php $_smarty_tpl->tpl_vars['minuto'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['minuto']->step = 15;$_smarty_tpl->tpl_vars['minuto']->total = (int)ceil(($_smarty_tpl->tpl_vars['minuto']->step > 0 ? 59+1 - (0) : 0-(59)+1)/abs($_smarty_tpl->tpl_vars['minuto']->step));
if ($_smarty_tpl->tpl_vars['minuto']->total > 0){
for ($_smarty_tpl->tpl_vars['minuto']->value = 0, $_smarty_tpl->tpl_vars['minuto']->iteration = 1;$_smarty_tpl->tpl_vars['minuto']->iteration <= $_smarty_tpl->tpl_vars['minuto']->total;$_smarty_tpl->tpl_vars['minuto']->value += $_smarty_tpl->tpl_vars['minuto']->step, $_smarty_tpl->tpl_vars['minuto']->iteration++){
$_smarty_tpl->tpl_vars['minuto']->first = $_smarty_tpl->tpl_vars['minuto']->iteration == 1;$_smarty_tpl->tpl_vars['minuto']->last = $_smarty_tpl->tpl_vars['minuto']->iteration == $_smarty_tpl->tpl_vars['minuto']->total;?> 
					<option value="<?php echo $_smarty_tpl->tpl_vars['minuto']->value;?>
"><?php echo sprintf("%02s",$_smarty_tpl->tpl_vars['minuto']->value);?>

				<?php }} ?>
				</select>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="row">
			<label for="selEstado" class="col-xs-12 col-sm-4">Estado</label>
			<div class="col-xs-12 col-sm-8">
				<select id="selEstado" name="selEstado" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idEstado'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>

					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<label for="selFuente" class="col-xs-12 col-sm-4">Modo de ingreso</label>
			<div class="col-xs-12 col-sm-8">
				<select id="selFuente" name="selFuente" class="form-control">
					<option value="">Sin especificar</option>
					<option value="Local">Local
					<option value="Email">Email
					<option value="Teléfono">Teléfono
				</select>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<button class="btn btn-primary pull-right" id="btnGuardar">Guardar</button>
		<span class="text-danger pull-right hide mensajeGuardar"><i class="fa fa-cog fa-spin fa-2x fa-fw"></i> Espera mientras guardamos los datos</span>
	</div>
</div><?php }} ?>