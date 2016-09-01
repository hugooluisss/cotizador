<?php /* Smarty version Smarty-3.1.11, created on 2016-08-31 08:38:15
         compiled from "templates/plantillas/modulos/clientes/crm/aviso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89235566557c6ddc705d002-45665317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99acec1fb390acde6261a3009c2ae0f2a3484eb8' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/crm/aviso.tpl',
      1 => 1472650615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89235566557c6ddc705d002-45665317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aviso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c6ddc70ddf73_54453757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6ddc70ddf73_54453757')) {function content_57c6ddc70ddf73_54453757($_smarty_tpl) {?><div class="row">
	<div class="col-lg-2 text-right text-success">Fecha</div>
	<div class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['aviso']->value['alerta'];?>
</div>
</div>
<div class="row">
	<div class="col-lg-2 text-right text-success">Mensaje</div>
	<div class="col-lg-10"><?php echo nl2br($_smarty_tpl->tpl_vars['aviso']->value['mensaje']);?>
</div>
</div><?php }} ?>