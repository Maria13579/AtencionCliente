<?php
/* Smarty version 3.1.39, created on 2021-09-22 08:04:37
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\Ven.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ac775ac68d1_95785729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f83dba1c77486513defe054056dfa9e24ce43f46' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\Ven.tpl',
      1 => 1632290666,
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
function content_614ac775ac68d1_95785729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="center-align"><h1 >Ventas</h1> </div>
<br/>
<div >
<div class="center-align"><a href="?class=Codigo&method=CodigoVentas" class="waves-effect waves-light btn"><i class="material-icons right">screen_lock_portrait</i>Generar Codigo</a></div>
<br><br>
<div class="center-align"><a href="?class=listas&method=listasventas" class="waves-effect waves-light btn"><i class="material-icons right">airplay</i> Ver lista de espera </a></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
