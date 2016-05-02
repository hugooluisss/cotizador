<?php /* Smarty version Smarty-3.1.11, created on 2016-05-02 11:51:40
         compiled from "templates/plantillas/modulos/catalogoImpresiones/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310096823567475e7a11867-66786796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0828163331ffc64014694ba25fe507d42770ecce' => 
    array (
      0 => 'templates/plantillas/modulos/catalogoImpresiones/panel.tpl',
      1 => 1461764260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310096823567475e7a11867-66786796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_567475e7a56351_66198459',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567475e7a56351_66198459')) {function content_567475e7a56351_66198459($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Catálogo de impresión en pedidos</h1>
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
						<label for="txtLimite" class="col-lg-2">Límite</label>
						<div class="col-lg-1">
							<input class="form-control" id="txtLimite" name="txtLimite">
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