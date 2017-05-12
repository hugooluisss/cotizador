<?php /* Smarty version Smarty-3.1.11, created on 2017-05-03 22:48:55
         compiled from "templates/plantillas/modulos/reportes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:367569085561d3c4f0f47d8-54983434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ddcb92f60099fae7bed851d36cdb2131315a31' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/panel.tpl',
      1 => 1493869733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367569085561d3c4f0f47d8-54983434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_561d3c4f17e8c2_96757832',
  'variables' => 
  array (
    'estados' => 0,
    'item' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d3c4f17e8c2_96757832')) {function content_561d3c4f17e8c2_96757832($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reportes</h1>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-2">
				<label for="selTipo">Fecha de</label></div>
			<div class="col-md-3">
				<select id="selTipo" name="selTipo" class="form-control">
					<option value="registro">Registro
					<option value="entrega">Entrega
				</select>
			</div>
			<div class="col-md-2">
				<label for="selEstado">Estado</label>
			</div>
			<div class="col-md-3">
				<select id="selEstado" name="selEstado" class="form-control">
					<option value="">Todos
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
			<div class="col-md-2">
				<button class="btn btn-danger btnBuscar">Buscar</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label for="txtInicio">Inicio</label></div>
			<div class="col-md-3">
				<input type="input" class="form-control" id="txtInicio" name="txtInicio" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
			<div class="col-md-2">
				<label for="txtFin">Fin</label>
			</div>
			<div class="col-md-3">
				<input type="input" class="form-control" id="txtFin" name="txtFin" placeholder="Y-m-d" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
		</div>
	</div>
</div>

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#remeras">Venta de remeras</a>
			</h4>
		</div>
		<div id="remeras" class="panel-collapse collapse in">
			<div class="panel-body"></div>
		</div>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario']!=2){?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#ventasTotales">Ventas totales</a>
			</h4>
		</div>
		<div id="ventasTotales" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#tecnicas">Por técnicas</a>
			</h4>
		</div>
		<div id="tecnicas" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#tipoClientes">Por tipo de cliente</a>
			</h4>
		</div>
		<div id="tipoClientes" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#utilidad">Utilidad</a>
			</h4>
		</div>
		<div id="utilidad" class="panel-collapse collapse">
			<div class="panel-body"></div>
		</div>
	</div>
	<?php }?>
</div><?php }} ?>