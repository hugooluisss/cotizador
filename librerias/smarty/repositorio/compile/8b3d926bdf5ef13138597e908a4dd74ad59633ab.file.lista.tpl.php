<?php /* Smarty version Smarty-3.1.11, created on 2016-09-02 12:16:55
         compiled from "templates/plantillas/modulos/clientes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1717749068562451df214162-43774788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3d926bdf5ef13138597e908a4dd74ad59633ab' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/lista.tpl',
      1 => 1472836488,
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
		<div class="text-left">
			<div class="btn-group">
				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
					Marketing<span class="caret"></span>
				</button>
				
				<ul class="dropdown-menu" role="menu">
					<li><a href="#" id="btnGenerarEmail">Generar lista</a></li>
					<li class="divider"></li>
					<li><a href="#" id="btnTodasEmpresas">Seleccionar a las empresas</a></li>
					<li><a href="#" id="btnTodasPersonas">Seleccionar unitarios</a></li>
					<li class="divider"></li>
					<li><a href="#" id="btnTodosEmail">Seleccionar todos</a></li>
					<li><a href="#" id="btnLimpiarEmail">Limpiar selección</a></li>
				</ul>
			</div>
		</div>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblClientes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th></th>
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
						<td><input type="checkbox" class="email" email="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['row']->value['tipo'];?>
"/></td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rfc'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" style="padding: 6px 7px 6.5px 7px;" action="crm" title="Seguimiento de clientes" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><img src="repositorio/img/manosBlancas.png" style="width: 25px; height: 15px;" /></button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" cliente="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>