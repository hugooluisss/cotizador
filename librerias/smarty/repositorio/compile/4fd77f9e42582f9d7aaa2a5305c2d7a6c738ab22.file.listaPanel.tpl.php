<?php /* Smarty version Smarty-3.1.11, created on 2016-02-17 00:02:21
         compiled from "templates/plantillas/modulos/pedidos/listaPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13367006795682005bea7ab1-71515738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd77f9e42582f9d7aaa2a5305c2d7a6c738ab22' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/listaPanel.tpl',
      1 => 1455688939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13367006795682005bea7ab1-71515738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5682005beaa8d7_24825214',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682005beaa8d7_24825214')) {function content_5682005beaa8d7_24825214($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-md-4">Buscar por 
				<select id="selTipoBusqueda">
					<option value="registro">Registro
					<option value="entrega">Entrega
				</select>
			</div>
			<div class="col-xs-12 col-md-7">
				del <input type="text" id="txtInicioBus" name="txtInicioBus" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" /> hasta 
				<input type="text" id="txtFinBus" name="txtFinBus" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" />
			</div>
			<div class="col-xs-12 col-sm-1">
				<button class="btn btn-success" id="btnBuscar">Buscar</button>
			</div>
		</div>
	</div>
</div>

<div id="dvLista">
</div><?php }} ?>