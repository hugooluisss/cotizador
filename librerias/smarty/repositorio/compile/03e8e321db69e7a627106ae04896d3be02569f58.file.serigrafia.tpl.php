<?php /* Smarty version Smarty-3.1.11, created on 2015-11-03 08:46:08
         compiled from "templates/plantillas/modulos/cotizador/serigrafia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:884607774562e68cab41e08-02864492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03e8e321db69e7a627106ae04896d3be02569f58' => 
    array (
      0 => 'templates/plantillas/modulos/cotizador/serigrafia.tpl',
      1 => 1446561641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884607774562e68cab41e08-02864492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_562e68cab42625_38539749',
  'variables' => 
  array (
    'posiciones' => 0,
    'item' => 0,
    'tamanos' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562e68cab42625_38539749')) {function content_562e68cab42625_38539749($_smarty_tpl) {?><form role="form" id="frmAddSerigrafia" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<div class="col-xs-2"><label for="selPosicion">Posición</label></div>
		<div class="col-xs-10">
			<select id="selPosicion" name="selPosicion" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['posiciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idItem'];?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="selTamano">Tamaño</label></div>
		<div class="col-xs-4">
			<select id="selTamano" name="selTamano" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tamanos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idTamano'];?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="selColores">No. de colores</label></div>
		<div class="col-xs-2">
			<select id="selColores" name="selColores" class="form-control">
				<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['color']->step = 1;$_smarty_tpl->tpl_vars['color']->total = (int)ceil(($_smarty_tpl->tpl_vars['color']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['color']->step));
if ($_smarty_tpl->tpl_vars['color']->total > 0){
for ($_smarty_tpl->tpl_vars['color']->value = 1, $_smarty_tpl->tpl_vars['color']->iteration = 1;$_smarty_tpl->tpl_vars['color']->iteration <= $_smarty_tpl->tpl_vars['color']->total;$_smarty_tpl->tpl_vars['color']->value += $_smarty_tpl->tpl_vars['color']->step, $_smarty_tpl->tpl_vars['color']->iteration++){
$_smarty_tpl->tpl_vars['color']->first = $_smarty_tpl->tpl_vars['color']->iteration == 1;$_smarty_tpl->tpl_vars['color']->last = $_smarty_tpl->tpl_vars['color']->iteration == $_smarty_tpl->tpl_vars['color']->total;?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" nombre="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</option>
				<?php }} ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-2"><label for="txtCantidad_s">Cantidad</label></div>
		<div class="col-xs-2">
			<input class="form-control" id="txtCantidad" name="txtCantidad" autocomplete="off">
		</div>
	</div>	
	
	<div class="row">
		<div class="col-xs-12"><button type="button" id="btnBuscarPrecioSerigrafia" class="btn btn-default">Obtener precio</button></div>
	</div>
</form>
<br />

<div class="row">
	<div class="form-group">
		<div class="col-lg-12">
			<input class="form-control" id="serigrafia_concepto" placeholder="Concepto" disabled="true">
		</div>
	</div>
	<br />
	<div class="form-group">
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">C</span>
				<input class="form-control" id="serigrafia_cantidad" placeholder="Cantidad" disabled="true"/>
			</div>
		</div>
		<div class="col-xs-6 col-md-6">
			<div class="input-group">
				<span class="input-group-addon">$</span>
				<input type="text" class="form-control" id="serigrafia_precio" disabled="true"/>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12 text-right">
		<div class="btn btn-success" id="btnAgregarSerigrafia"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Agregar</span></div>
	</div>
</div><?php }} ?>