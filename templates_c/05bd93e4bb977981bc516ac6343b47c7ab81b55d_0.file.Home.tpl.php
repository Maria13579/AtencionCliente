<?php
/* Smarty version 3.1.39, created on 2021-08-27 15:30:44
  from 'C:\xampp\htdocs\Proyecto-main\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128e904628000_29797540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05bd93e4bb977981bc516ac6343b47c7ab81b55d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto-main\\templates\\Home.tpl',
      1 => 1630070810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6128e904628000_29797540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel teal lighten-2 "><h1 class="center-align">Bienvenido</h1> </div>
<br/><br/>
<div class="center-align">
<a href="?class=Direcciones&method=VistaInicio" class="waves-effect waves-light btn"><i class="material-icons right">assignment_ind</i>Trabajador</a>
<a href="?class=Direcciones&method=Inicio" class="waves-effect waves-light btn"><i class="material-icons right">face</i>Cliente</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
