<?php
/* Smarty version 3.1.39, created on 2021-09-03 18:11:44
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\CodigoV.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6132494031d7d6_98965153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b760cc99a0d80132a467b7b36e96c2f9aca04103' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\CodigoV.tpl',
      1 => 1630685496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/baracliente.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6132494031d7d6_98965153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="center-align"><h1>Ventas</h1></div>
<br/><br/>
<div class="center-align"><h2>Codigo:</h2></div>
<div class="center-align"><h4>
<?php if ((isset($_smarty_tpl->tpl_vars['le']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['le']->value;
echo $_smarty_tpl->tpl_vars['co']->value;?>

    <?php } else { ?>
      fallo       
  <?php }?></h4></div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
