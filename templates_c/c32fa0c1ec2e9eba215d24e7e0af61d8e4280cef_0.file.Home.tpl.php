<?php
/* Smarty version 3.1.39, created on 2021-09-24 02:24:08
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d1aa83c8797_66518732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32fa0c1ec2e9eba215d24e7e0af61d8e4280cef' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Home.tpl',
      1 => 1632443045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614d1aa83c8797_66518732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel cyan darken-2  "><h1 class="center-align white-text">Bienvenido</h1> </div>
<br/><br/>
<div class="center-align">
<a href="?class=Direcciones&method=VistaInicio" class="waves-effect waves-light btn"><i class="material-icons right">assignment_ind</i>Trabajador</a>
<a href="?class=Direcciones&method=visInicio" class="waves-effect waves-light btn"><i class="material-icons right">face</i>Cliente</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
