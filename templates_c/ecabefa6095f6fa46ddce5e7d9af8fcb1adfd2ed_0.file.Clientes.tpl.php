<?php
/* Smarty version 3.1.39, created on 2021-08-27 16:12:18
  from 'C:\xampp\htdocs\Proyecto-main\templates\Clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128f2c2503826_23482914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecabefa6095f6fa46ddce5e7d9af8fcb1adfd2ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto-main\\templates\\Clientes.tpl',
      1 => 1630072441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Clientes/Registro.tpl' => 1,
  ),
),false)) {
function content_6128f2c2503826_23482914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<div class="col 4">
<h1 class="center-align"></h1>
</div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'registro') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:Clientes/Registro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}?>

<?php }
}
