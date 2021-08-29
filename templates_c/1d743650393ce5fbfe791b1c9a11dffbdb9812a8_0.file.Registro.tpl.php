<?php
/* Smarty version 3.1.39, created on 2021-08-29 04:06:54
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\Registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612aebbe8e63a2_61272269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d743650393ce5fbfe791b1c9a11dffbdb9812a8' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\Registro.tpl',
      1 => 1630202749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_612aebbe8e63a2_61272269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<h1 class="center-align"> Registro de Usuarios</h1>
<div class="container">
<div class="center-align">
    <div class="row">
        <div class="col s8" class="center-align">
            <form method="post" action="?class=Cliente&method=regisCliente">
                <div class="input-field col s12">
                    <input  type="text" name="nombre" placeholder="Nombre">   
                    <br/>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <br/>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="Telefono" placeholder="Telefono">
                    <br/>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="Correo" placeholder="Correo">
                    <br/>
                </div>
                <div class="center-align input-field col s8" >
                    <input class="waves-effect waves-light btn " type= "submit" value="Guardar Usuario">
                </div>     
            </form>
        </div>
    </div>
</div>
</div>
<br/> <br/> <br/>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
