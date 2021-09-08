<?php
/* Smarty version 3.1.39, created on 2021-09-08 20:53:19
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\ProTec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6139069f327fb2_56454616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b333ec23b3eef7553a95080e8a72bd9bed7b6496' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\ProTec.tpl',
      1 => 1631127029,
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
function content_6139069f327fb2_56454616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/baracliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="center-align"><h1 >Problemas tecnicos</h1> </div>
<br/>
<div >
<div class="center-align"><a href="?class=Codigo&method=Codigoprotec" class="waves-effect waves-light btn"><i class="material-icons right">
</i>Generar Codigo</a></div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
