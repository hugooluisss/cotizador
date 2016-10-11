<?php /* Smarty version Smarty-3.1.11, created on 2016-09-01 13:05:07
         compiled from "templates/plantillas/modulos/clientes/crm/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184498470257b34ef59ac638-84354251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af8edf5302ac2516074a4ca4c4804c92b812d0ea' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/crm/panel.tpl',
      1 => 1472753057,
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
    'ultimaCompra' => 0,
    'diferenciaUltimaCompra' => 0,
    'ordenes' => 0,
    'comprados' => 0,
    'comentarios' => 0,
    'primercomentario' => 0,
    'montoTotal' => 0,
    'meses' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b34ef59f27c2_54734959')) {function content_57b34ef59f27c2_54734959($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/cotizador/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de clientes</h1>
	</div>
</div>
<div class="box">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header" style="border-bottom: 5px solid #00AF00; color: #009200; font-size: 30px">&nbsp;&nbsp;&nbsp;&nbsp;<img src="repositorio/img/manos.png" style="width: 120px" /> Seguimiento de clientes</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="btn-toolbar" role="toolbar">
				<div class="btn-group btn-xs">
					<button type="button" id="btnClientes" class="btn btn-default">Clientes</button>
				</div>
				<div class="btn-group btn-xs">
					<button type="button" id="btnAvisos" class="btn btn-warning">Avisos</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h1 class="page-header" style="color: green">Contacto</h1>
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
					<label for="" class="col-lg-5 control-label">Tipo</label>
					<div class="col-lg-7"><b><?php if ($_smarty_tpl->tpl_vars['cliente']->value->getTipo()=='F'){?>persona Física<?php }else{ ?>Moral<?php }?></b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Nombre</label>
					<div class="col-lg-7"><b><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNombre();?>
</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Dirección</label>
					<div class="col-lg-7"><b><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getDireccion();?>
</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Teléfono</label>
					<div class="col-lg-7"><b><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getTelefono();?>
</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Celular</label>
					<div class="col-lg-7" style="color: blue"><b><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getCelular();?>
</b></div>
				</div>
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Email</label>
					<div class="col-lg-7"><b><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEmail();?>
" style="color: blue"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEmail();?>
</a></b></div>
				</div>
				<!--
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Estado</label>
					<div class="col-lg-7"></div>
				</div>-->
				<div class="form-group">
					<label for="" class="col-lg-5 control-label">Última compra</label>
					<div class="col-lg-7"><b><?php echo $_smarty_tpl->tpl_vars['ultimaCompra']->value;?>
</b></div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
" />
				<br />
				<div class="text-center" style="font-size: 16px; border: 1px solid red; padding: 7px;">Hace <b><?php echo $_smarty_tpl->tpl_vars['diferenciaUltimaCompra']->value['mes'];?>
 meses</b> y <?php echo $_smarty_tpl->tpl_vars['diferenciaUltimaCompra']->value['dias'];?>
 dias más que no compra</div>
			</form>
		</div>
		<div class="col-md-8">
			<h1 class="page-header" style="color: green">Historial de pedidos</h1>
			<table id="tblPedidosCRM" class="table table-bordered table-hover" data-order='[[ 2, "desc" ]]'>
				<thead>
					<tr>
						<th>#</th>
						<th>Exc</th>
						<th>Fecha</th>
						<th>Entrega el</th>
						<th>Cliente</th>
						<th>Vendedor</th>
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
						<tr style="background: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
">
							<td style="<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
</td>
							<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['row']->value['excede']==1){?><i class="fa fa-star" aria-hidden="true"></i><?php }?></td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['entrega'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cliente'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['vendedor'];?>
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
	<hr />
	<div class="row">
		<div class="col-md-7">
			<h1 class="page-header" style="color: green">Productos comprados</h1>
			<div style="border: 1px solid #00AF00">
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
		</div>
		<div class="col-md-5">
			<button class="btn btn-success" id="btnComentario">+ Añadir comentario</button>
			<div class="panel-group" id="accordion" style="margin-top: 30px">
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
	<br />
	<div class="row">
		<div class="col-md-5" style="font-size: 18px; color: green">
			<b>Total en compras</b>
			<input class="text-right" style="height: 60px; font-size: 28px; width: 200px;" id="txtMontoTotal" name="txtMontoTotal" value="$ <?php echo $_smarty_tpl->tpl_vars['montoTotal']->value;?>
" readonly disabled="true"/>
		</div>
		<div class="col-md-2" style="color: green">
			Meses en los que compra
		</div>
		<div class="col-md-5">
			<div style="position: relative; border: 2px solid green; height: 70px; vertical-align: middle; padding: 10px;">
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
	<br />
</div>


<div class="modal fade" id="winAvisos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Avisos</h1>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="btn-group">
							<button type="button" class="btn btn-primary" id="btnAgregar">Agregar</button>
						</div>
					</div>
				</div>
				<div id="dvListaAvisos">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="winAddAviso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Avisos</h1>
			</div>
			<div class="modal-body">
				<form role="form" id="frmAddAviso" class="form-horizontal" onsubmit="javascript: return false;">
					<div class="box">
						<div class="box-body">			
							<div class="form-group">
								<label for="txtFecha" class="col-lg-2">Fecha</label>
								<div class="col-lg-3">
									<input class="form-control" id="txtFecha" name="txtFecha" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" data-inputmask="'mask': '9999-99-99'">
								</div>
							</div>
							<div class="form-group">
								<label for="txtMensaje" class="col-lg-2">Mensaje</label>
								<div class="col-lg-10">
									<textarea id="txtMensaje" name="txtMensaje" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-info pull-right">Guardar</button>
							<input type="hidden" id="id"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<input id="cliente" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
" type="hidden" /><?php }} ?>