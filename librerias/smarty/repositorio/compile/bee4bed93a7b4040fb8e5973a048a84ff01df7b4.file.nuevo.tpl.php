<?php /* Smarty version Smarty-3.1.11, created on 2015-12-29 10:03:04
         compiled from "templates/plantillas/modulos/pedidos/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95892486856687c0b7552c1-76016921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee4bed93a7b4040fb8e5973a048a84ff01df7b4' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nuevo.tpl',
      1 => 1451404912,
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
    'entregables' => 0,
    'tallas' => 0,
    'contador' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56687c0b755a79_80943540')) {function content_56687c0b755a79_80943540($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12">
				<button class="btn btn-danger" id="btnNuevoPedido">Nuevo pedido</button>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-2" for="txtCliente">Cliente</label>
			<div class="col-xs-5">
				<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
			</div>
			<div class="col-xs-5">
				<button type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" /><i class="fa fa-search"></i> Buscar</button>
				<input type="button" class="btn btn-success" id="btnNuevoCliente" value="Nuevo" />
			</div>
		</div>
		<hr />
		<div class="row">
			<label class="col-xs-2" for="txtFecha">Fecha</label>
			<div class="col-xs-3">
				<input type="input" class="from-control" id="txtFecha" name="txtFecha" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
				<div id="datepicker"></div>
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
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-6">
				<h3>Impresión</h3>
				<ul class="list-group">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['serviciosImpresion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<li class="list-group-item"><label class="checkbox-inline"><input type="checkbox" class="serviciosImpresion" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idImpresion'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</label></li>
				<?php } ?>
				</ul>
			</div>
			<div class="col-xs-6">
				<h3>Entregables</h3>
				<ul class="list-group">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entregables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<li class="list-group-item"><label class="checkbox-inline"><input type="checkbox" class="entregables" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idEntregable'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</label></li>
					<?php } ?>
					<li class="list-group-item">
						<input type="text" value="" id="txtEntregables" name="txtEntregables" class="form-control"/>
					</li>
				<ul>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-head">
		<h3>Remeras</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-2" for="txtNombreRemera">Nombre</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="txtNombreRemera" name="txtNombreRemera">
			</div>
			<div class="col-xs-4">
				<button type="button" class="btn btn-success" id="btnLstRemeras"><i class="fa fa-search"></i> Buscar</button>
			</div>
		</div>
		<br />
		<div class="row">
			<table id="tblTalles" class="table table-bordered" totalTallas="<?php echo count($_smarty_tpl->tpl_vars['tallas']->value);?>
">
				<thead>
					<tr>
						<th rowspan="2" class="text-center">Nombre</th>
						<th colspan="<?php echo count($_smarty_tpl->tpl_vars['tallas']->value);?>
" class="text-center">Talles</th>
					</tr>
					<tr>
						<?php $_smarty_tpl->tpl_vars["contador"] = new Smarty_variable(0, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tallas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<th class="text-center" talla="<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre2'];?>
</th>
							<?php $_smarty_tpl->tpl_vars["contador"] = new Smarty_variable($_smarty_tpl->tpl_vars['contador']->value+1, null, 0);?>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-3">
				<h3>Diseño</h3>
				<select id="selDiseno">
					<option value="Entrega el cliente">Entrega el cliente
					<option value="A pedido">A pedido
					<option value="Envia por email">Envia por email
				</select>
			</div>
			<div class="col-xs-4">
				<h3>Colores</h3>
				<input type="text" value="" class="form-control" id="txtColor1">
				<input type="text" value="" class="form-control" id="txtColor2">
				<input type="text" value="" class="form-control" id="txtColor3">
				<input type="text" value="" class="form-control" id="txtColor4">
			</div>
			<div class="col-xs-5">
				<h3>Observaciones</h3>
				<textarea class="form-control" rows="5" id="txtObservaciones" name="txtObservaciones"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><h3>Archivos</h3></div>
		</div>
		<div class="row">
			<form id="upload" method="post" action="?mod=cpedidos&action=uploadfile" enctype="multipart/form-data">
				<input type="file" name="upl" multiple />
				<ul class="elementos list-group">
				<!-- The file list will be shown here -->
				</ul>
				
				<input type="hidden" id="pedido" name="pedido" value="">
			</form>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<table id="tblTotales" class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">Precio final</th>
					<th class="text-center">Seña</th>
					<th class="text-center">Saldo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input class="form-control text-right" id="total" value="0.00"></td>
					<td><input class="form-control text-right" id="sena" value="0.00"></td>
					<td><input class="form-control text-right" id="saldo" value="" readonly="true"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body text-right">
		<button class="btn btn-success" id="btnGuardar">Guardar</button>
		<button class="btn btn-danger" id="btnCancelar">Cancelar</button>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/remerasLista.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>