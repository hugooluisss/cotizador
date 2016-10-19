<?php /* Smarty version Smarty-3.1.11, created on 2016-10-18 09:39:22
         compiled from "templates/plantillas/modulos/pedidos/nuevo2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521134929580516798bc998-94984103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1598fe4302bbcc246a3ebab6190aa6a15f231a9' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nuevo2.tpl',
      1 => 1476801560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521134929580516798bc998-94984103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_580516798bdcc4_05229458',
  'variables' => 
  array (
    'hora' => 0,
    'minuto' => 0,
    'estados' => 0,
    'item' => 0,
    'tallas' => 0,
    'contador' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580516798bdcc4_05229458')) {function content_580516798bdcc4_05229458($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div id="rootwizard" role="wizard">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul style="width: 100%">
					<li class="flecha"><a href="#tab1" data-toggle="tab">CLIENTE</a></li>
					<li><a href="#tab2" data-toggle="tab">PRODUCTO</a></li>
					<li><a href="#tab3" data-toggle="tab">IMPRESIÓN</a></li>
					<li><a href="#tab4" data-toggle="tab">DISEÑO</a></li>
					<li><a href="#tab5" data-toggle="tab">CAJA</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="bar" class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="º0" style="width: 0%"></div>
	</div>
	<div class="tab-content">
		<div class="tab-pane" id="tab1">
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
		<div class="tab-pane" id="tab2">
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
		<div class="tab-pane" id="tab3">
			3
		</div>
		<div class="tab-pane" id="tab4">
			4
		</div>
		<div class="tab-pane" id="tab5">
			5
		</div>
		<div class="tab-pane" id="tab6">
			6
		</div>
		<div class="tab-pane" id="tab7">
			7
		</div>
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="javascript:;">Inicio</a></li>
			<li class="previous"><a href="javascript:;">Anterior</a></li>
			<li class="next last" style="display:none;"><a href="javascript:;">Fin</a></li>
			<li class="next"><a href="javascript:;">Siguiente</a></li>
		</ul>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/remerasLista.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/winNombresNumeros.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>