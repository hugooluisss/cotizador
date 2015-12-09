<?php /* Smarty version Smarty-3.1.11, created on 2015-12-09 13:27:34
         compiled from "templates/plantillas/modulos/pedidos/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95892486856687c0b7552c1-76016921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee4bed93a7b4040fb8e5973a048a84ff01df7b4' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nuevo.tpl',
      1 => 1449689253,
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
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56687c0b755a79_80943540')) {function content_56687c0b755a79_80943540($_smarty_tpl) {?><div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<label class="col-xs-2" for="txtCliente">Cliente</label>
			<div class="col-xs-5">
				<input type="text" class="form-control" id="txtCliente" cliente placeholder="Nombre del cliente">
			</div>
			<div class="col-xs-5">
				<input type="button" class="btn btn-success" id="btnLstClientes" value="Buscar" />
				<input type="button" class="btn btn-success" value="Nuevo" />
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>