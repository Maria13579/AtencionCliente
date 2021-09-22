<?php
/* Smarty version 3.1.39, created on 2021-09-22 08:04:36
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\ReDu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ac774aa00d5_98252297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae8a82d3a2c19d94bafdc4a2e6a4ad7cf9fffc08' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\ReDu.tpl',
      1 => 1632290655,
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
function content_614ac774aa00d5_98252297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="center-align"><h1 >Resolucion de dudas</h1></div>
<br/>
<div >
<div class="center-align"><a href="?class=Codigo&method=Codigoredu" class="waves-effect waves-light btn"><i class="material-icons right">screen_lock_portrait

</i>Generar Codigo</a></div>
<br><br>
<div class="center-align"><a href="?class=listas&method=listasredu" class="waves-effect waves-light btn"><i class="material-icons right">airplay</i> Ver lista de espera </a></div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
