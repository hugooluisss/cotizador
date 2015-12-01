<?php /* Smarty version Smarty-3.1.11, created on 2015-11-30 23:19:37
         compiled from "templates/plantillas/modulos/clientes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1717749068562451df214162-43774788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3d926bdf5ef13138597e908a4dd74ad59633ab' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/lista.tpl',
      1 => 1448517266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1717749068562451df214162-43774788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562451df28ccc7_81928227',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562451df28ccc7_81928227')) {function content_562451df28ccc7_81928227($_smarty_tpl) {?><div class="box">
	<div class="box-header">
		<h3 class="box-title">Lista de clientes</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblClientes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>E-mail</th>
					<th>RFC</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rfc'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" cliente="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>