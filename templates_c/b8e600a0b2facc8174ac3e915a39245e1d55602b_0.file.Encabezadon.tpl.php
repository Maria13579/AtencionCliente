<?php
/* Smarty version 3.1.39, created on 2021-08-27 17:22:02
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Navs\Encabezadon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6129031ac5ed64_60239647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8e600a0b2facc8174ac3e915a39245e1d55602b' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Navs\\Encabezadon.tpl',
      1 => 1630075156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6129031ac5ed64_60239647 (Smarty_Internal_Template $_smarty_tpl) {
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
