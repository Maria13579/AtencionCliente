<?php
/* Smarty version 3.1.39, created on 2021-09-08 20:58:20
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\CodigoR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613907cc6f2d58_27751709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4489d0de14bd7632f74e51b0006f26399491d64b' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\CodigoR.tpl',
      1 => 1631127497,
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
function content_613907cc6f2d58_27751709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="center-align"><h1>Resolucion de Dudas</h1></div>

<div class="center-align"><h3>Codigo:</h3></div>
<div class="center-align"><h4><?php echo $_smarty_tpl->tpl_vars['le']->value;
echo $_smarty_tpl->tpl_vars['co']->value;?>
</h4></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
