<?php /* Smarty version Smarty-3.1.11, created on 2015-10-22 21:06:02
         compiled from "templates/plantillas/modulos/cotizador/tallas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15466083685627dc08ea5b41-90292082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f72bc95215fee358287989e94c145e6d31e52f4' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/tallas.tpl',
      1 => 1445565785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15466083685627dc08ea5b41-90292082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5627dc08ed5892_51240650',
  'variables' => 
  array (
    'tallas' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627dc08ed5892_51240650')) {function content_5627dc08ed5892_51240650($_smarty_tpl) {?><div class="row">
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tallas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	<div class="col-xs-6 col-lg-2 text-center">
		<div class="panel panel-info">
			<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <small class="text-muted">(<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value['neto']);?>
)</small></div>
			<div class="panel-body">
				<input class="form-control talla" value="0" talla="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTalla'];?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" precio="<?php echo $_smarty_tpl->tpl_vars['row']->value['neto'];?>
" talla="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTalla'];?>
"/>
			</div>
		</div>
	</div>
	<?php } ?>
</div>

<div class="row">
	<div class="form-group">
		<div class="col-lg-12">
			<input class="form-control" id="talla_concepto" placeholder="Concepto" disabled="true">
		</div>
	</div>
	<br />
	<div class="form-group">
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">C</span>
				<input class="form-control" id="talla_cantidad" placeholder="Cantidad" disabled="true"/>
			</div>
		</div>
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">$</span>
				<input type="text" class="form-control" id="talla_precio" disabled="true"/>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregarRopa"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div><?php }} ?>