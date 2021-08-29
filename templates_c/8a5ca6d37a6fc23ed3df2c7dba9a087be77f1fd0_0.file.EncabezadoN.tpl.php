<?php
/* Smarty version 3.1.39, created on 2021-08-29 02:50:58
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Navs\EncabezadoN.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612ad9f2f340f7_90989815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5ca6d37a6fc23ed3df2c7dba9a087be77f1fd0' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Navs\\EncabezadoN.tpl',
      1 => 1630075156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612ad9f2f340f7_90989815 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
<div class="nav-wrapper cyan darken-2">
  <a class="brand-logo center">
  <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ro']->value;?>

    <?php } else { ?>
      Bienvenido            
  <?php }?>
    </a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="?class=Home&method=Inicio">👈 Salir</a></li>
  </ul>
</div>
</nav><?php }
}
