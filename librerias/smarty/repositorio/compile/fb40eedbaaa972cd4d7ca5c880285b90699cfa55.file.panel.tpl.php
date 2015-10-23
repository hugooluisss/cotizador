<?php /* Smarty version Smarty-3.1.11, created on 2015-10-21 13:39:04
         compiled from "templates/plantillas/modulos/cotizador/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16673014955627d49016d9f5-60308485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb40eedbaaa972cd4d7ca5c880285b90699cfa55' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/panel.tpl',
      1 => 1445452224,
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
    'ropa' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627d490189626_22194698')) {function content_5627d490189626_22194698($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Cotizador</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#ropa">Ropa</a></li>
</ul>

<div class="tab-content">
	<div id="ropa" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-xs-2"><label for="selRopa">Artículo</label></div>
					<div class="col-xs-6">
						<select id="selRopa" name="selRopa" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ropa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idItem'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
							<?php } ?>
						</select>
					</div>
					<div class="col-xs-2"><button type="button" id="btnBuscarTallas" class="btn btn-default">Obtener tallas</button></div>
				</div>
				<div class="row" id="dvTallas">
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>