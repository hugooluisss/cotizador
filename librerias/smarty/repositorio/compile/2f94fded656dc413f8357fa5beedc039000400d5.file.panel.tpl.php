<?php /* Smarty version Smarty-3.1.11, created on 2016-04-13 12:57:40
         compiled from "templates/plantillas/modulos/pedidos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2774012305668731c725e83-64649492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f94fded656dc413f8357fa5beedc039000400d5' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/panel.tpl',
      1 => 1460482314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2774012305668731c725e83-64649492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5668731c73ff98_42267663',
  'variables' => 
  array (
    'PAGE' => 0,
    'estados' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5668731c73ff98_42267663')) {function content_5668731c73ff98_42267663($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Pedidos</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#nuevo">Nuevo / modificar</a></li>
	<li><a data-toggle="tab" href="#lista">Lista</a></li>
</ul>

<div class="tab-content"> 
	<div id="nuevo" class="tab-pane fade in active">
		<div class="box">
			<div class="box-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/nuevo.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
	<div id="lista" class="tab-pane fade in">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-xs-12 text-right">
						<a href="#" id="btnAyuda" class="btn btn-primary"><i class="fa fa-bullhorn"></i> Ayuda de estados</a>
					</div>
				</div>
				<br />
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/pedidos/listaPanel.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div>

<input type="hidden" id="perfil" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['tipoUsuario'];?>
" />


<div class="modal fade" id="winAyuda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Guía de Colores Pedidos</h1>
			</div>
			<div class="modal-body">
				<table id="tblEstados" class="table table-bordered table-hover" data-order='[[ 1, "desc" ]]'>
					<thead>
						<tr>
							<th>Estado</th>
							<th>Color</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
								<td><span style="background: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
; border: 1px solid #ccc;">&nbsp;&nbsp;&nbsp;</span></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>