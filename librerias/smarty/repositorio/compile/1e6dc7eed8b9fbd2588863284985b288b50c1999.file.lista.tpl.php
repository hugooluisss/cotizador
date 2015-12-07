<?php /* Smarty version Smarty-3.1.11, created on 2015-12-07 10:27:07
         compiled from "templates/plantillas/modulos/tecnicasImpresion/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20810844365657293fd40eb0-35319481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e6dc7eed8b9fbd2588863284985b288b50c1999' => 
    array (
      0 => 'templates/plantillas/modulos/tecnicasImpresion/lista.tpl',
      1 => 1449505625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20810844365657293fd40eb0-35319481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5657293fdcff02_60867867',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5657293fdcff02_60867867')) {function content_5657293fdcff02_60867867($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblEstampado" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idItem'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="precios" title="Precios" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>$</button>
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>