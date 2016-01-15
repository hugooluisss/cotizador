<?php /* Smarty version Smarty-3.1.11, created on 2016-01-14 22:19:14
         compiled from "templates/plantillas/modulos/pedidos/seguimiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9756441965695c95f4f1265-79054230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa925f598fcb7985ecb2bd1c52321de7107ec1d6' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/seguimiento.tpl',
      1 => 1452831552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9756441965695c95f4f1265-79054230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5695c95f571650_08334402',
  'variables' => 
  array (
    'pedido' => 0,
    'archivos' => 0,
    'archivo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5695c95f571650_08334402')) {function content_5695c95f571650_08334402($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Seguimiento de Pedidos</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<div class="btn-group" role="group" aria-label="...">
			<button type="button" class="btn btn-success" id="btnImprimir">Generar en PDF</button>
		</div>
		<h3>Generales</h3>
		<div class="row">
			<div class="col-xs-4"><label>Número</label></div>
			<div class="col-xs-8"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Fecha de registro</label></div>
			<div class="col-xs-8"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getRegistro();?>
</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Probable entrega</label></div>
			<div class="col-xs-8"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getEntrega();?>
</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Estado</label></div>
			<div class="col-xs-8"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->estado->getNombre();?>
</div>
		</div>
		<hr />
		<h3>Cliente</h3>
		<div class="row">
			<div class="col-xs-4"><label>Nombre</label></div>
			<div class="col-xs-8"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->cliente->getNombre();?>
</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><label>Email</label></div>
			<div class="col-xs-8"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->cliente->getEmail();?>
</div>
		</div>
		<hr />
		<h3>Archivos</h3>
		<form id="upload" method="post" action="?mod=cseguimiento&action=uploadfile" enctype="multipart/form-data">
			<input type="hidden" id="pedido" name="pedido" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
">
			<input type="file" name="upl" multiple />
			<ul class="elementos list-group">
			<?php  $_smarty_tpl->tpl_vars['archivo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['archivo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archivos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['archivo']->key => $_smarty_tpl->tpl_vars['archivo']->value){
$_smarty_tpl->tpl_vars['archivo']->_loop = true;
?>
				<li class="list-group-item">
					<?php if (in_array($_smarty_tpl->tpl_vars['archivo']->value['extension'],array('jpg','png','jpeg','gif','bmp','tiff'))){?>
						<img class="img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['archivo']->value['ruta'];?>
" />
					<?php }?>
					<p><?php echo $_smarty_tpl->tpl_vars['archivo']->value['nombre'];?>
</p>
					<a class="btn btn-primary btn-xs vista">Vista previa</a>
				</li>
			<?php } ?>
			</ul>
		</form>
	</div>
</div><?php }} ?>