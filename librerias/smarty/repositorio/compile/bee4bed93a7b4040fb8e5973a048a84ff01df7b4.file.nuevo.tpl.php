<?php /* Smarty version Smarty-3.1.11, created on 2015-12-18 15:38:14
         compiled from "templates/plantillas/modulos/pedidos/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95892486856687c0b7552c1-76016921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee4bed93a7b4040fb8e5973a048a84ff01df7b4' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nuevo.tpl',
      1 => 1450474693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95892486856687c0b7552c1-76016921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56687c0b755a79_80943540',
  'variables' => 
  array (
    'hora' => 0,
    'minuto' => 0,
    'estados' => 0,
    'item' => 0,
    'serviciosImpresion' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56687c0b755a79_80943540')) {function content_56687c0b755a79_80943540($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-2" for="txtCliente">Cliente</label>
			<div class="col-xs-5">
				<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
			</div>
			<div class="col-xs-5">
				<input type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" />
				<input type="button" class="btn btn-success" id="btnNuevoCliente" value="Nuevo" />
			</div>
		</div>
		<hr />
		<div class="row">
			<label class="col-xs-2" for="txtFecha">Fecha</label>
			<div class="col-xs-3">
				<input type="input" class="from-control" id="txtFecha" name="txtFecha" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-2" for="txtEntrega">Entrega</label>
			<div class="col-xs-2">
				<input type="input" class="from-control" id="txtEntrega" name="txtEntrega" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-2" for="selHora">Hora</label>
			<div class="col-xs-2">
				<select class="form-contro" id="selHora" name="selHora">
				<?php $_smarty_tpl->tpl_vars['hora'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hora']->step = 1;$_smarty_tpl->tpl_vars['hora']->total = (int)ceil(($_smarty_tpl->tpl_vars['hora']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['hora']->step));
if ($_smarty_tpl->tpl_vars['hora']->total > 0){
for ($_smarty_tpl->tpl_vars['hora']->value = 0, $_smarty_tpl->tpl_vars['hora']->iteration = 1;$_smarty_tpl->tpl_vars['hora']->iteration <= $_smarty_tpl->tpl_vars['hora']->total;$_smarty_tpl->tpl_vars['hora']->value += $_smarty_tpl->tpl_vars['hora']->step, $_smarty_tpl->tpl_vars['hora']->iteration++){
$_smarty_tpl->tpl_vars['hora']->first = $_smarty_tpl->tpl_vars['hora']->iteration == 1;$_smarty_tpl->tpl_vars['hora']->last = $_smarty_tpl->tpl_vars['hora']->iteration == $_smarty_tpl->tpl_vars['hora']->total;?> 
					<option value="<?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['hora']->value;?>

				<?php }} ?>
				</select>
				 : 
				<select class="form-contro" id="selMinuto" name="selMinuto">
				<?php $_smarty_tpl->tpl_vars['minuto'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['minuto']->step = 15;$_smarty_tpl->tpl_vars['minuto']->total = (int)ceil(($_smarty_tpl->tpl_vars['minuto']->step > 0 ? 59+1 - (0) : 0-(59)+1)/abs($_smarty_tpl->tpl_vars['minuto']->step));
if ($_smarty_tpl->tpl_vars['minuto']->total > 0){
for ($_smarty_tpl->tpl_vars['minuto']->value = 0, $_smarty_tpl->tpl_vars['minuto']->iteration = 1;$_smarty_tpl->tpl_vars['minuto']->iteration <= $_smarty_tpl->tpl_vars['minuto']->total;$_smarty_tpl->tpl_vars['minuto']->value += $_smarty_tpl->tpl_vars['minuto']->step, $_smarty_tpl->tpl_vars['minuto']->iteration++){
$_smarty_tpl->tpl_vars['minuto']->first = $_smarty_tpl->tpl_vars['minuto']->iteration == 1;$_smarty_tpl->tpl_vars['minuto']->last = $_smarty_tpl->tpl_vars['minuto']->iteration == $_smarty_tpl->tpl_vars['minuto']->total;?> 
					<option value="<?php echo $_smarty_tpl->tpl_vars['minuto']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['minuto']->value;?>

				<?php }} ?>
				</select>
			</div>
		</div>
		<div class="row">
			<label for="selEstado" class="col-xs-2">Estado</label>
			<div class="col-xs-4">
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
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-head">
		<h3>Impresión</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['serviciosImpresion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<label class="checkbox-inline"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idImpresion'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</label>
			<?php } ?>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>