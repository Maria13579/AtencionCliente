<?php
/* Smarty version 3.1.39, created on 2021-08-27 16:39:29
  from 'C:\xampp\htdocs\Proyecto-main\templates\Navs\Encabezado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128f9219deee9_10131462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fc6a26c31356a1b5723e8ee926d536437d548cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto-main\\templates\\Navs\\Encabezado.tpl',
      1 => 1630075161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128f9219deee9_10131462 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
<div class="nav-wrapper cyan darken-2">
  <a class="brand-logo center">
  <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ro']->value;?>

    <?php } else { ?>
      Inicio Sesion            
  <?php }?>
    </a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="?class=Home&method=Inicio">👈 Salir  </a></li>
  </ul>
</div>
</nav><?php }
}
