<?php /* Smarty version Smarty-3.1.11, created on 2015-12-07 10:35:26
         compiled from "templates/plantillas/modulos/tecnicasImpresion/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611467614565720b05ba7d5-64903670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a59f30248a81c1169cfb318827ee55446d23085d' => 
    array (
      0 => 'templates/plantillas/modulos/tecnicasImpresion/panel.tpl',
      1 => 1449506125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611467614565720b05ba7d5-64903670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_565720b064b519_01505801',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565720b064b519_01505801')) {function content_565720b064b519_01505801($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Otras técnicas de impresión</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Modificar</a></li>
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
							<input class="form-control" id="txtNombre" name="txtNombre" readonly="true">
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-lg-2">Descripción</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtDescripcion" name="txtDescripcion">
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