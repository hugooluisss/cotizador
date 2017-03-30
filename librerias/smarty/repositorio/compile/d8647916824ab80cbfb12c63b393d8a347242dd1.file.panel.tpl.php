<?php /* Smarty version Smarty-3.1.11, created on 2017-02-22 19:36:27
         compiled from "templates/plantillas/modulos/campania/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21798729158ae3be849d7c1-93713310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8647916824ab80cbfb12c63b393d8a347242dd1' => 
    array (
      0 => 'templates/plantillas/modulos/campania/panel.tpl',
      1 => 1487813786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21798729158ae3be849d7c1-93713310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ae3be84ed234_21378172',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae3be84ed234_21378172')) {function content_58ae3be84ed234_21378172($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Campaña</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="selDisponible" class="col-lg-2">Disponible</label>
						<div class="col-lg-2">
							<select class="form-control" id="selDisponible" name="selDisponible">
								<option value="1">Si</option>
								<option value="0">No</option>
							</select>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>