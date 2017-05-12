<?php /* Smarty version Smarty-3.1.11, created on 2017-05-12 12:19:27
         compiled from "templates/plantillas/modulos/gastos/listaAnio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16629388745915d95020d6f6-18149594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b1e531f7a9a8f42882566b664e178124b10d5a' => 
    array (
      0 => 'templates/plantillas/modulos/gastos/listaAnio.tpl',
      1 => 1494609560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16629388745915d95020d6f6-18149594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5915d95029c1b1_05534006',
  'variables' => 
  array (
    'ventas' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5915d95029c1b1_05534006')) {function content_5915d95029c1b1_05534006($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblAnio" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Año</th>
					<th>Mes</th>
					<th>Ingresos</th>
					<th>Mercaderia</th>
					<th>Gastos</th>
					<th>Total</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ventas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['anio'];?>
</td>
						<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombremes'];?>
</td>
						<td class="text-right"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value['ventas']);?>
</td>
						<td class="text-right"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value['mercaderia']);?>
</td>
						<td class="text-right"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value['gastos']);?>
</td>
						<td class="text-right"><?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['row']->value['ventas']-$_smarty_tpl->tpl_vars['row']->value['mercaderia']-$_smarty_tpl->tpl_vars['row']->value['gastos']));?>
</td>
						<td class="text-right">
							<button type="button" class="btn btn-success" action="detalle" title="Detalle de gastos" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winGastos"><i class="fa fa-info" aria-hidden="true"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>