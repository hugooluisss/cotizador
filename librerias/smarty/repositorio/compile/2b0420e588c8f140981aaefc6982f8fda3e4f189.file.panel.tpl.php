<?php /* Smarty version Smarty-3.1.11, created on 2015-11-30 23:19:37
         compiled from "templates/plantillas/modulos/clientes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103054651856244bfd1920b3-48419279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0420e588c8f140981aaefc6982f8fda3e4f189' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/panel.tpl',
      1 => 1448946902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103054651856244bfd1920b3-48419279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56244bfd1d2875_16032821',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56244bfd1d2875_16032821')) {function content_56244bfd1d2875_16032821($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de clientes</h1>
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
		<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/clientes/modificar.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>