<?php /* Smarty version Smarty-3.1.11, created on 2016-05-02 11:51:28
         compiled from "templates/plantillas/modulos/pedidos/nombresNumeros/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8197823956946c8dd54b92-90480949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a467b9eaf36d4b34d171035d44785005a372a071' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/nombresNumeros/nuevo.tpl',
      1 => 1455824286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8197823956946c8dd54b92-90480949',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56946c8dd7cc75_90328200',
  'variables' => 
  array (
    'tallas' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56946c8dd7cc75_90328200')) {function content_56946c8dd7cc75_90328200($_smarty_tpl) {?><form action="#" onsubmit="javascript: return false;" id="frmNumerosLetras">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<label class="col-xs-4" for="txtNombre">Nombre</label>
				<div class="col-xs-8">
					<input type="text" class="form-control" id="txtNombre" placeholder="Nombre">
				</div>
			</div>
			<div class="row">
				<label class="col-xs-4" for="txtNumero">Número</label>
				<div class="col-xs-8">
					<input type="text" class="form-control" id="txtNumero" placeholder="Número">
				</div>
			</div>
			<div class="row">
				<label class="col-xs-4" for="selTalla">Talle</label>
				<div class="col-xs-8">
					<select id="selTalla" name="selTalla">
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tallas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>

						<?php } ?>
					</select>
				</div>
			</div>
		</div>
		<div class="foter-body">
			<input type="submit" value="Guardar" class="btn btn-success"/>
		</div>
	</div>
</form><?php }} ?>