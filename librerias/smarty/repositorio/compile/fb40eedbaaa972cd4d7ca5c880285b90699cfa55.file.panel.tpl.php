<?php /* Smarty version Smarty-3.1.11, created on 2015-11-28 02:36:02
         compiled from "templates/plantillas/modulos/cotizador/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16673014955627d49016d9f5-60308485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb40eedbaaa972cd4d7ca5c880285b90699cfa55' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/panel.tpl',
      1 => 1448699474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16673014955627d49016d9f5-60308485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5627d490189626_22194698',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627d490189626_22194698')) {function content_5627d490189626_22194698($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Cotizador</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#cotizacion">Cotización general</a></li>
	<li><a data-toggle="tab" href="#ropa">Ropa</a></li>
	<li><a data-toggle="tab" href="#serigrafia">Serigrafía</a></li>
	<li><a data-toggle="tab" href="#seriDig">Serigrafía digital</a></li>
	<li><a data-toggle="tab" href="#transfer">Transfer</a></li>
	<li><a data-toggle="tab" href="#sublimacion">Sublimación</a></li>
	<li><a data-toggle="tab" href="#vinilo">Vinilo</a></li>
	<li><a data-toggle="tab" href="#estampado">Números y letras</a></li>
	<li><a data-toggle="tab" href="#adicionales">Servicios adicionales</a></li>
</ul>

<div class="tab-content">
	<div id="cotizacion" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/general.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="ropa" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/ropa.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="serigrafia" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/serigrafia.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="seriDig" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/serigrafiaDigital.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="transfer" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/transfer.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="sublimacion" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/sublimacion.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="vinilo" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/vinilo.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="estampado" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/estampado.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	
	<div id="adicionales" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/otros.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/clientes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/cotizaciones.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cotizador/winRopa.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<input id="idCotizacion" name="idCotizacion" type="hidden" /><?php }} ?>