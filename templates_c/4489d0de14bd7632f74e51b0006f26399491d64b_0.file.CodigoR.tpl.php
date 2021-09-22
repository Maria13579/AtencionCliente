<?php
/* Smarty version 3.1.39, created on 2021-09-22 07:42:56
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\CodigoR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ac2609d0eb1_29322443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4489d0de14bd7632f74e51b0006f26399491d64b' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\CodigoR.tpl',
      1 => 1632285914,
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
function content_614ac2609d0eb1_29322443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="center-align"><h1>Resolucion de Dudas</h1></div>

<div class="center-align"><h3>Codigo:</h3></div>
<div class="center-align"><h4><?php echo $_smarty_tpl->tpl_vars['le']->value;
echo $_smarty_tpl->tpl_vars['co']->value;?>
</h4></div>
<div class="center-align"><a href="?class=listas&method=listasredu" class="waves-effect waves-light btn"><i class="material-icons right"></i>Ver lista de espera </a></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
