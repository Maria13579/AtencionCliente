<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:59:21
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\listaprotec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d14d94e45e2_76853646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6410347e937dd10ea2e95208f45090d3b16d76b' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\listaprotec.tpl',
      1 => 1632441544,
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
function content_614d14d94e45e2_76853646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="center-align">
        <h2>Atendiendo al código </h2>
         <?php if ((isset($_smarty_tpl->tpl_vars['codigou']->value))) {?>
             <h3> <?php echo $_smarty_tpl->tpl_vars['codigou']->value;
echo $_smarty_tpl->tpl_vars['codigos']->value;?>
</h3>
         <?php }?>
    </div>
    <META HTTP-EQUIV="REFRESH" CONTENT="5;?class=listas&method=listasprotec">
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
