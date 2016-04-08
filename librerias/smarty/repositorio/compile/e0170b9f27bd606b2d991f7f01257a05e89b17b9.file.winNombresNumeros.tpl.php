<?php /* Smarty version Smarty-3.1.11, created on 2016-04-06 13:54:16
         compiled from "templates/plantillas/modulos/pedidos/winNombresNumeros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84693939256946c8dd20f76-87368630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0170b9f27bd606b2d991f7f01257a05e89b17b9' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/winNombresNumeros.tpl',
      1 => 1459968734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84693939256946c8dd20f76-87368630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56946c8dd4aa42_79099574',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56946c8dd4aa42_79099574')) {function content_56946c8dd4aa42_79099574($_smarty_tpl) {?><div class="modal fade" id="winNombresNumeros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Lista de nombres y números</h1>
			</div>
			<div class="modal-body">
				<ul id="tabNombresNumeros" class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#nuevoNombreNumero">Nuevo / modificar</a></li>
					<li><a data-toggle="tab" href="#listaNombresNumeros">Lista</a></li>
				</ul>
				
				<div class="tab-content"> 
					<div id="nuevoNombreNumero" class="tab-pane fade in active">
						<div class="box">
							<div class="box-body">
								<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/nombresNumeros/nuevo.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							</div>
						</div>
					</div>
					<div id="listaNombresNumeros" class="tab-pane fade in">
						<div class="box">
							<div class="box-body">
								<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/nombresNumeros/lista.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>