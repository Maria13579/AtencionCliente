<?php
/* Smarty version 3.1.39, created on 2021-09-01 20:42:40
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Trabajador\Problemastecnicos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612fc9a0e6eac1_38351501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bcd7e9b0921f8e348ad46c0f26fc3b97c9b5fd4' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Trabajador\\Problemastecnicos.tpl',
      1 => 1630521727,
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
function content_612fc9a0e6eac1_38351501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/barratrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div  class="center-align">
    <h1 >Problemas tecnicos</h1> 
    <br/><br/>
    <div >
        <a href="?class=&method=" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Libre</a>
        <a class="waves-effect waves-light btn"><i class="material-icons right">close</i>Ocupado</a>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
