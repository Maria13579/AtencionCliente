<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:26:23
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\listaredu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d0d1f097051_28354775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f901cac26bfd71ab0ada3c1af051edbfbebbc8f' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\listaredu.tpl',
      1 => 1632439582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/baracliente.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614d0d1f097051_28354775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="center-align">
    <h2>Atendiendo al código </h2>
    <h3> <?php echo $_smarty_tpl->tpl_vars['codigou']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['codigos']->value;?>
</h3>
</div>
<META HTTP-EQUIV="REFRESH" CONTENT="5;?class=listas&method=listasredu">
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
