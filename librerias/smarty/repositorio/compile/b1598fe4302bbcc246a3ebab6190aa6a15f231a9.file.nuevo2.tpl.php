<?php /* Smarty version Smarty-3.1.11, created on 2016-10-27 13:04:46
         compiled from "templates/plantillas/modulos/pedidos/nuevo2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521134929580516798bc998-94984103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1598fe4302bbcc246a3ebab6190aa6a15f231a9' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nuevo2.tpl',
      1 => 1477591484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521134929580516798bc998-94984103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_580516798bdcc4_05229458',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580516798bdcc4_05229458')) {function content_580516798bdcc4_05229458($_smarty_tpl) {?><input type="hidden" id="pedido" name="pedido" value="">

<div id="rootwizard" role="wizard">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul style="width: 100%">
					<li class="flecha"><a href="#tabCliente" data-toggle="tab">CLIENTE</a></li>
					<li><a href="#tabProductos" data-toggle="tab">PRODUCTO</a></li>
					<li><a href="#tabImpresion" data-toggle="tab">IMPRESIÓN</a></li>
					<li><a href="#tab4" data-toggle="tab">DISEÑO</a></li>
					<li><a href="#tab5" data-toggle="tab">CAJA</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="bar" class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="º0" style="width: 0%"></div>
	</div>
	<div class="tab-content">
		<div class="tab-pane" id="tabCliente">
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/wizard/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="tab-pane" id="tabProductos">
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/wizard/productos.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="tab-pane" id="tabImpresion">
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/wizard/impresion.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="tab-pane" id="tab4">
			4
		</div>
		<div class="tab-pane" id="tab5">
			5
		</div>
		<div class="tab-pane" id="tab6">
			6
		</div>
		<div class="tab-pane" id="tab7">
			7
		</div>
		<!--
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="javascript:;">Inicio</a></li>
			<li class="previous"><a href="javascript:;">Anterior</a></li>
			<li class="next last" style="display:none;"><a href="javascript:;">Fin</a></li>
			<li class="next"><a href="javascript:;">Siguiente</a></li>
		</ul>
		-->
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/remerasLista.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/winNombresNumeros.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/winTecnicaImpresion.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>