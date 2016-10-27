<?php /* Smarty version Smarty-3.1.11, created on 2016-10-27 10:19:22
         compiled from "templates/plantillas/modulos/pedidos/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95892486856687c0b7552c1-76016921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee4bed93a7b4040fb8e5973a048a84ff01df7b4' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nuevo.tpl',
      1 => 1477581137,
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
				<button class="btn btn-danger btnNuevoPedido">Nuevo pedido</button>
			</div>
		</div>
		<div class="row">
			<label class="col-xs-2" for="txtCliente">Cliente</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
			</div>
			<div class="col-sm-5">
				<button type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" /><i class="fa fa-search"></i> Buscar</button>
				<input type="button" class="btn btn-success" id="btnNuevoCliente" value="Nuevo" />
			</div>
		</div>
		<hr />
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
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<h3>Impresión</h3>
				
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['serviciosImpresion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<div class="checkbox">
						<label class="col-xs-12 col-sm-4"><input type="checkbox" class="serviciosImpresion" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idImpresion'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</label>
					</div>
				<?php } ?>
			</div>
			<div class="col-xs-12 col-md-6">
				<h3>Artículos</h3>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entregables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<div class="checkbox">
						<label class="col-xs-12 col-sm-4"><input type="checkbox" class="entregables" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idEntregable'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</label>
					</div>
				<?php } ?>
				<br />
				<input type="text" value="" id="txtEntregables" name="txtEntregables" class="form-control" maxlength="45"/>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-head">
		<h3>Talles y colores</h3>
	</div>
	<div class="panel-body">
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
		<!--
			<div class="col-xs-3">
				<h3>Diseño</h3>
				<select id="selDiseno">
					<option value="Entrega el cliente">Entrega el cliente
					<option value="A pedido">A pedido
					<option value="Envia por email">Envia por email
				</select>
				<textarea class="form-control" rows="4" id="txtDiseno" name="txtDiseno"></textarea>
			</div>
		-->
			<div class="col-xs-12col-sm-3">
				<h3>Posición</h3>
				<select id="selPosicion">
					<option value="Frente">Frente
					<option value="Espalda">Espalda
					<option value="Manga">Manga
					<option value="Frente y espalda">Frente y espalda
					<option value="Frente y manga">Frente y manga
					<option value="Frente, espalda y manga">Frente, espalda y manga
					<option value="Manga y espalda">Manga y espalda
				</select>
				<textarea class="form-control" rows="5" id="txtPosicion" name="txtPosicion"></textarea>
			</div>
			<div class="col-xs-12 col-md-3">
				<h3>Colores</h3>
				<textarea class="form-control" rows="10" id="txtColores" name="txtColores"></textarea>
			</div>
			
			<div class="col-xs-12 col-md-5">
				<h3>Observaciones</h3>
				<textarea class="form-control" rows="10" id="txtObservaciones" name="txtObservaciones"></textarea>
			</div>
			
			<div class="col-xs-12 col-md-4">
				<h3>Captura</h3>
				<form id="upload2" method="post" action="?mod=cpedidos&action=uploadfile2" enctype="multipart/form-data">
					<input type="hidden" id="pedido2" name="pedido2" value="">
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
				<div class="row text-center">
					<img src="repositorio/img/user.png" id="imgCapturaPantalla" style="width: 60%; max-width: 150px;" onerror="this.src='repositorio/img/user.png';"/>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<h3>Archivos</h3>
				<form id="upload" method="post" action="?mod=cpedidos&action=uploadfile" enctype="multipart/form-data">
					<input type="hidden" id="pedido" name="pedido" value="">
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
				
				<div class="row">
					<label class="col-xs-4" for="selHora">Archivo</label>
					<div class="col-xs-12 col-md-4">
						<input type="text" class="form-control" id="txtNombreArchivo" archivo placeholder="Nombre de archivo" maxlength="100">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 text-center">
				<h3>Nombres y números</h3>
				<button class="btn btn-success" id="btnNombresNumeros"><i class="fa fa-pencil"></i> Crear Lista</button>
				<br />
				<br />
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<label for="selFormaEntrega" class="col-xs-12 col-sm-4">Forma de entrega</label>
					<div class="col-xs-8">
						<select id="selFormaEntrega" name="selFormaEntrega" class="form-control">
							<option value=""></option>
							<option value="Retiro en local">Retiro en local
							<option value="Envio a dominicilio">Envío a domicilio
							<option value="Envio por encomienda">Envío por encomienda
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<label for="selEnvoltorio" class="col-xs-12 col-sm-4">Envoltorio</label>
					<div class="col-xs-8">
						<select id="selEnvoltorio" name="selEnvoltorio" class="form-control">
							<option value="">Sin especificar
							<option value="Normal">Normal
							<option value="Regalo">Regalo
							<option value="A granel">A granel
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<label for="txtDireccionEnvio" class="col-xs-12 col-sm-4">Dirección de envio</label>
					<div class="col-xs-12 col-sm-8">
						<textarea id="txtDireccionEnvio" name="txtDireccionEnvio" rows="3" class="form-control"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<h3>Formas de pago</h3>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-2 text-center">
				<label>Efectivo</label><br /><input type="checkbox" class="formasPago" campo="Efectivo">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 text-center">
				<label>Débito</label><br /><input type="checkbox" class="formasPago" campo="Debito">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<label>Giro</label><br /><input type="text" value="" class="formasPago" campo="Giro">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<label>Cheque</label><br /><input type="text" value="" class="formasPago" campo="Cheque">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 text-center">
				<label>Tarjeta de crédito</label><br /><input type="checkbox" class="formasPago" campo="Credito">
			</div>
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
		<button class="btn btn-danger btnNuevoPedido">Cancelar</button>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/remerasLista.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/winNombresNumeros.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>