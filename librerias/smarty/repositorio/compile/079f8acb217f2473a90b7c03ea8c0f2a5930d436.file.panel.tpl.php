<?php /* Smarty version Smarty-3.1.11, created on 2015-10-28 09:48:15
         compiled from "templates/plantillas/modulos/otros/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19388196055630ee3fe8e030-87662056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '079f8acb217f2473a90b7c03ea8c0f2a5930d436' => 
    array (
      0 => 'templates/plantillas/modulos/otros/panel.tpl',
      1 => 1446047284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19388196055630ee3fe8e030-87662056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5630ee3fea9b79_32815615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5630ee3fea9b79_32815615')) {function content_5630ee3fea9b79_32815615($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Otros servicios adicionales</h1>
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
						<label for="txtPrecio" class="col-lg-2">Precio</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtPrecio" name="txtPrecio">
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
</div><?php }} ?>