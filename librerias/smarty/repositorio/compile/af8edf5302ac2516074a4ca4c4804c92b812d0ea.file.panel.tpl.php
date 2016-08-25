<?php /* Smarty version Smarty-3.1.11, created on 2016-08-22 13:32:31
         compiled from "templates/plantillas/modulos/clientes/crm/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184498470257b34ef59ac638-84354251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af8edf5302ac2516074a4ca4c4804c92b812d0ea' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/crm/panel.tpl',
      1 => 1471890748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184498470257b34ef59ac638-84354251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57b34ef59f27c2_54734959',
  'variables' => 
  array (
    'tipoClientes' => 0,
    'row' => 0,
    'cliente' => 0,
    'ordenes' => 0,
    'comprados' => 0,
    'comentarios' => 0,
    'primercomentario' => 0,
    'montoTotal' => 0,
    'meses' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b34ef59f27c2_54734959')) {function content_57b34ef59f27c2_54734959($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de clientes</h1>
	</div>
</div>
<div class="box">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><i class="fa fa-sign-language fa-4x" aria-hidden="true"></i> Seguimiento de clientes</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<h1 class="page-header">Contacto</h1>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="selTipo" class="col-lg-5 control-label">Tipo de cliente</label>
					<div class="col-lg-7">
						<select class="form-control" id="selTipo" name="selTipo">
							<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipoClientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTipoCliente'];?>
" <?php if ($_smarty_tpl->tpl_vars['cliente']->value->getClasificacion()==$_smarty_tpl->tpl_vars['row']->value['idTipoCliente']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Nombre</label>
					<div class="col-lg-7"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNombre();?>
</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Dirección</label>
					<div class="col-lg-7"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getDireccion();?>
</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Teléfono</label>
					<div class="col-lg-7"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getTelefono();?>
</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Celular</label>
					<div class="col-lg-7"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getCelular();?>
</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Email</label>
					<div class="col-lg-7"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEmail();?>
</div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Estado</label>
					<div class="col-lg-7"></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Última compra</label>
					<div class="col-lg-7"></div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
" />
			</form>
		</div>
		<div class="col-md-7">
			<h1 class="page-header">Historial de pedidos</h1>
			<table id="tblPedidos" class="table table-bordered table-hover" data-order='[[ 2, "desc" ]]'>
				<thead>
					<tr>
						<th>#</th>
						<th>Exc</th>
						<th>Fecha</th>
						<th>Entrega el</th>
						<th>Precio</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
						<tr>
							<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
</td>
							<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['row']->value['excede']==1){?><i class="fa fa-star" aria-hidden="true"></i><?php }?></td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['entrega'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
							<td style="text-align: right">
								<button type="button" class="btn btn-circle" action="imprimir" title="Imprimir" pedido='<?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
'><i class="fa fa-print"></i></button>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<h1 class="page-header">Productos comprados</h1>
			<table id="tblComprados" class="table table-bordered table-hover" data-order='[[ 2, "desc" ]]'>
				<thead>
					<tr>
						<th>#</th>
						<th>Descripción</th>
						<th>Marca</th>
						<th>Talla</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comprados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idTalla'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ropa'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marca'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['talla'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-5">
			<button class="btn btn-success" id="btnComentario">+ Añadir comentario</button>
			<div class="panel-group" id="accordion">
				<?php $_smarty_tpl->tpl_vars["primercomentario"] = new Smarty_variable("1", null, 0);?>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#comentario<?php echo $_smarty_tpl->tpl_vars['row']->value['idComentario'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</a>
							</h4>
						</div>
						<div id="comentario<?php echo $_smarty_tpl->tpl_vars['row']->value['idComentario'];?>
" class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['primercomentario']->value==1){?>in<?php }?>">
							<div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>
</div>
						</div>
					</div>
					
					<?php $_smarty_tpl->tpl_vars["primercomentario"] = new Smarty_variable("0", null, 0);?>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<b>Total en compras</b>
			<input class="text-right" id="txtMontoTotal" name="txtMontoTotal" value="$ <?php echo $_smarty_tpl->tpl_vars['montoTotal']->value;?>
" readonly disabled="true"/>
		</div>
		<div class="col-md-2">
			Meses en los que compra
		</div>
		<div class="col-md-6">
			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['meses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<div class="mesesCRM">
				<?php if ($_smarty_tpl->tpl_vars['row']->value['totalCompras']>0){?>
					<b><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</b>
				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

				<?php }?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="box">
</div><?php }} ?>