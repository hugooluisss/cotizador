<?php /* Smarty version Smarty-3.1.11, created on 2017-02-22 20:33:43
         compiled from "templates/plantillas/modulos/campania/voto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21637736658ae47f6b8a431-53263224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61af3f6836875d1188f4e8f24e8297709563d1f3' => 
    array (
      0 => 'templates/plantillas/modulos/campania/voto.tpl',
      1 => 1487817222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21637736658ae47f6b8a431-53263224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ae47f6bf9938_15189828',
  'variables' => 
  array (
    'voto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae47f6bf9938_15189828')) {function content_58ae47f6bf9938_15189828($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['voto']->value){?>
<div class="alert alert-success  text-center">
	<p>Muchas gracias por tu voto</p>
	<br />
	<a href="http://www.ideactiva.com.uy">www.ideactiva.com.uy</a>
</div>
<?php }else{ ?>
<div class="alert alert-danger text-center">
	<p>No pudo ser procesado tu voto</p>
	<br />
	<a href="http://www.ideactiva.com.uy">www.ideactiva.com.uy</a>
</div>
<?php }?><?php }} ?>