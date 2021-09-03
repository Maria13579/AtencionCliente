<?php
/* Smarty version 3.1.39, created on 2021-09-01 20:42:43
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Trabajador\ventas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612fc9a35295e7_13595565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9adaa66c71732518fafba78345875f8f9431bae' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Trabajador\\ventas.tpl',
      1 => 1630521757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/barratrabajador.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_612fc9a35295e7_13595565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/barratrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div  class="center-align">
    <h1 >Ventas</h1> 
    <br/><br/>
    <div >
        <a href="?class=&method=" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Libre</a>
        <a class="waves-effect waves-light btn"><i class="material-icons right">close</i>Ocupado</a>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
