<?php
/* Smarty version 3.1.39, created on 2021-08-29 03:30:45
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Navs\Encabezado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612ae3455871a2_04769494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6875c2f455cb1f0fb17d4a9e458aa78be2561065' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Navs\\Encabezado.tpl',
      1 => 1630200414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612ae3455871a2_04769494 (Smarty_Internal_Template $_smarty_tpl) {
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
    <li><a href="?class=Home&method=Inicio">👉🏻Salir </a></li>
  </ul>
</div>
</nav><?php }
}
