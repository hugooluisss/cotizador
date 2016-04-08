<?php /* Smarty version Smarty-3.1.11, created on 2016-04-07 20:59:25
         compiled from "templates/plantillas/modulos/pedidos/listaPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13367006795682005bea7ab1-71515738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd77f9e42582f9d7aaa2a5305c2d7a6c738ab22' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/listaPanel.tpl',
      1 => 1460080763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13367006795682005bea7ab1-71515738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5682005beaa8d7_24825214',
  'variables' => 
  array (
    'serviciosImpresion' => 0,
    'tecnica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682005beaa8d7_24825214')) {function content_5682005beaa8d7_24825214($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<label for="selTipoBusqueda" class="col-md-4">Buscar por </label>
				<div class="col-md-8">
					<select id="selTipoBusqueda" class="form-control">
						<option value="registro">Registro
						<option value="entrega">Entrega
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<label for="selTipoBusqueda" class="col-md-6">Técnica de impresión</label>
				<div class="col-md-6">
					<select id="selTecnica" name="selTecnica" class="form-control">
						<option value="">Todas
						<?php  $_smarty_tpl->tpl_vars["tecnica"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tecnica"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviciosImpresion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tecnica"]->key => $_smarty_tpl->tpl_vars["tecnica"]->value){
$_smarty_tpl->tpl_vars["tecnica"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['tecnica']->value['idImpresion'];?>
"><?php echo $_smarty_tpl->tpl_vars['tecnica']->value['nombre'];?>

						<?php } ?>
					</select>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 col-md-12 text-center">
				<label for="txtInicioBus">del</label> <input type="text" id="txtInicioBus" name="txtInicioBus" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" /> <label for="txtFinBus">hasta </label>
				<input type="text" id="txtFinBus" name="txtFinBus" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 col-sm-6 text-right">
				<button class="btn btn-success" id="btnBuscar">Buscar</button>
			</div>
		</div>
	</div>
</div>

<div id="dvLista">
</div><?php }} ?>