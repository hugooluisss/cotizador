<?php /* Smarty version Smarty-3.1.11, created on 2015-10-26 12:24:35
         compiled from "templates/plantillas/modulos/serigrafia/panelPrecios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107712063562b95336a3222-93941343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd867ec72c1f1cd748cc23ed8f9312a09aeccd08' => 
    array (
      0 => 'templates/plantillas/modulos/serigrafia/panelPrecios.tpl',
      1 => 1445874753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107712063562b95336a3222-93941343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562b9533716944_56828207',
  'variables' => 
  array (
    'nombre' => 0,
    'id' => 0,
    'limites' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9533716944_56828207')) {function content_562b9533716944_56828207($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Precios para <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h1>
	</div>
</div>
<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>

<div class="row">
	<label class="col-xs-4 col-lg-3" for="selLimite">A partir de </label>
	<div class="col-xs-8 col-lg-7">
		<select id="selLimite" name="selLimite">
			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['limites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idLimite'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['inferior'];?>
</option>
			<?php } ?>
		</select>
	</div>
</div>

<div id="lista">
</div><?php }} ?>