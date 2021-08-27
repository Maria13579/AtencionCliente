<?php
/* Smarty version 3.1.39, created on 2021-08-27 16:21:19
  from 'C:\xampp\htdocs\Proyecto-main\templates\Navs\EncabezadoN.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128f4dfc8e415_13320173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d9e820b33b2c6fbed81f9a9c5f7cf6d86d53889' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto-main\\templates\\Navs\\EncabezadoN.tpl',
      1 => 1630074062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128f4dfc8e415_13320173 (Smarty_Internal_Template $_smarty_tpl) {
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
    <li><a href="?class=Home&method=Inicio">Salir</a></li>
  </ul>
</div>
</nav><?php }
}
