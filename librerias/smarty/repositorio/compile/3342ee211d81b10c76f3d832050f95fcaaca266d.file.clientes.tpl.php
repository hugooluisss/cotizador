<?php /* Smarty version Smarty-3.1.11, created on 2016-05-02 11:51:28
         compiled from "templates/plantillas/modulos/pedidos/clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1920990795566880a6926b21-39718597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3342ee211d81b10c76f3d832050f95fcaaca266d' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/clientes.tpl',
      1 => 1455824286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920990795566880a6926b21-39718597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_566880a697ef76_32376038',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566880a697ef76_32376038')) {function content_566880a697ef76_32376038($_smarty_tpl) {?><div class="modal fade" id="winClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Clientes</h1>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<input type="hidden" id="consultorio" name="consultorio" value="" />
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/modificarCliente.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>