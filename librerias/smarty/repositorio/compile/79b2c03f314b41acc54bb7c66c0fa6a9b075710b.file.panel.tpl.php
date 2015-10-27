<?php /* Smarty version Smarty-3.1.11, created on 2015-10-27 09:08:21
         compiled from "templates/plantillas/modulos/serigrafiaDigital/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193360467562f8f6a243064-86138902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b2c03f314b41acc54bb7c66c0fa6a9b075710b' => 
    array (
      0 => 'templates/plantillas/modulos/serigrafiaDigital/panel.tpl',
      1 => 1445958499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193360467562f8f6a243064-86138902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562f8f6a25db45_54027124',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562f8f6a25db45_54027124')) {function content_562f8f6a25db45_54027124($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Serigrafía digital</h1>
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
						<label for="txtDescripcion" class="col-lg-2">Descripción</label>
						<div class="col-lg-3">
							<textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtPrecio" class="col-lg-2">Precio</label>
						<div class="col-xs-2">
							<input class="form-control" id="txtPrecio" name="txtPrecio">
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