<?php /* Smarty version Smarty-3.1.11, created on 2015-10-26 12:18:25
         compiled from "templates/plantillas/modulos/serigrafia/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4636364355629b56b11c981-53313419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '211de2ddf06b90ada33066f036d18a189dfb1077' => 
    array (
      0 => 'templates/plantillas/modulos/serigrafia/panel.tpl',
      1 => 1445874753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4636364355629b56b11c981-53313419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5629b56b152924_63766466',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5629b56b152924_63766466')) {function content_5629b56b152924_63766466($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Serigrafía</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar posiciones</a></li>
  <li><a data-toggle="tab" href="#limites">Límites de mayoreo</a></li>
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
						<label for="txtDescripcion" class="col-lg-2">Descripción</label>
						<div class="col-lg-3">
							<textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
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
	
	<div id="limites" class="tab-panel fade">
		<div class="box">
			<div class="box-body">			
				<div class="form-group">
					<label for="txtInferior" class="col-lg-2 col-xs-5">A partir de</label>
					<div class="col-xs-1">
						<input class="form-control" id="txtInferior" name="txtInferior">
					</div>
					<div class="col-xs-4">
						<button class="btn btn-success" id="btnAddLimite"><i class="fa fa-plus-circle"></i></button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="box">
			<div class="box-body" id="dvListaLimites">
			</div>
		</div>
	</div>
</div><?php }} ?>