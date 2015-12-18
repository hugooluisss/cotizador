<?php /* Smarty version Smarty-3.1.11, created on 2015-12-18 13:13:49
         compiled from "templates/plantillas/modulos/pedidos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2774012305668731c725e83-64649492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f94fded656dc413f8357fa5beedc039000400d5' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/panel.tpl',
      1 => 1449785182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2774012305668731c725e83-64649492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5668731c73ff98_42267663',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5668731c73ff98_42267663')) {function content_5668731c73ff98_42267663($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Pedidos</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#nuevo">Nuevo / modificar</a></li>
	<li><a data-toggle="tab" href="#lista">Lista</a></li>
</ul>

<div class="tab-content"> 
	<div id="nuevo" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/nuevo.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	<div id="lista" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/lista.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div><?php }} ?>