<?php /* Smarty version Smarty-3.1.11, created on 2015-10-22 23:52:46
         compiled from "templates/plantillas/modulos/serigrafia/precios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13360069575629b8450b0ca4-68660470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39fd7c732e5beb8b02e4be08c6d44ca39bbd85c0' => 
    array (
      0 => 'templates/plantillas/modulos/serigrafia/precios.tpl',
      1 => 1445575959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13360069575629b8450b0ca4-68660470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5629b84510a554_91144324',
  'variables' => 
  array (
    'nombre' => 0,
    'id' => 0,
    'color' => 0,
    'tamanos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5629b84510a554_91144324')) {function content_5629b84510a554_91144324($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Precios para <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h1>
	</div>
</div>
<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>

<div class="row">
	<label class="col-xs-4" for="selLimite">Limite superior en cantidad</label>
	<div class="col-xs-8">
		<select id="selLimite" name="selLimite">
		</select>
	</div>
</div>

<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['color']->step = 1;$_smarty_tpl->tpl_vars['color']->total = (int)ceil(($_smarty_tpl->tpl_vars['color']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['color']->step));
if ($_smarty_tpl->tpl_vars['color']->total > 0){
for ($_smarty_tpl->tpl_vars['color']->value = 1, $_smarty_tpl->tpl_vars['color']->iteration = 1;$_smarty_tpl->tpl_vars['color']->iteration <= $_smarty_tpl->tpl_vars['color']->total;$_smarty_tpl->tpl_vars['color']->value += $_smarty_tpl->tpl_vars['color']->step, $_smarty_tpl->tpl_vars['color']->iteration++){
$_smarty_tpl->tpl_vars['color']->first = $_smarty_tpl->tpl_vars['color']->iteration == 1;$_smarty_tpl->tpl_vars['color']->last = $_smarty_tpl->tpl_vars['color']->iteration == $_smarty_tpl->tpl_vars['color']->total;?>
	<div class="col-xs-6 col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 colores
			</div>
			<div class="panel-body">
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tamanos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<div class="row">
						<div class="col-xs-6 col-md-3"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
:</div>
						<div class="col-xs-6 col-md-9"><input type="text" class="form-control" color="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" tamano="<?php echo $_smarty_tpl->tpl_vars['row']->value['tamano'];?>
" value="" /></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php }} ?><?php }} ?>