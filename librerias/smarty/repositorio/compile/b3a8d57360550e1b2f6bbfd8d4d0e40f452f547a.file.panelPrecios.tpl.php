<?php /* Smarty version Smarty-3.1.11, created on 2015-12-07 11:09:52
         compiled from "templates/plantillas/modulos/tecnicasImpresion/panelPrecios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15235281985665bb18dbbe42-96015887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a8d57360550e1b2f6bbfd8d4d0e40f452f547a' => 
    array (
      0 => 'templates/plantillas/modulos/tecnicasImpresion/panelPrecios.tpl',
      1 => 1449508190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15235281985665bb18dbbe42-96015887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5665bb18e094f2_27787019',
  'variables' => 
  array (
    'nombre' => 0,
    'id' => 0,
    'limites' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5665bb18e094f2_27787019')) {function content_5665bb18e094f2_27787019($_smarty_tpl) {?><div class="row">
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
" precio="<?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['inferior'];?>
</option>
			<?php } ?>
		</select>
	</div>
</div>
<div class="row">
	<label class="col-xs-4 col-lg-3" for="txtPrecio">Precio</label>
	<div class="col-xs-8 col-lg-7">
		<input type="text" value="" id="txtPrecio" name="txtPrecio"  style="text-align: right"/>
	</div>
</div><?php }} ?>