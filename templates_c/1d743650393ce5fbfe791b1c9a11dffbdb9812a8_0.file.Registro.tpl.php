<?php
/* Smarty version 3.1.39, created on 2021-08-29 03:05:53
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\Registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612add71ae7d80_73920216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d743650393ce5fbfe791b1c9a11dffbdb9812a8' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\Registro.tpl',
      1 => 1630199149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
  ),
),false)) {
function content_612add71ae7d80_73920216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="align-center">
<div class="row" class="center-align">
<div class="align-center">
<form method="post" action="?class=Clientes&method=Registro" class="col s8">
<h3 class="center-align">Registro de Usuarios</h3>


<div class="center-align">
<div class="input-field col s8">
<input id="Nombre" type="text" class="validate" required="" name="Nombre"/>
<label for="Nombre">Nombre</label>
</div>
</div>

<div class="center-align">
<div class=" input-field col s8">
<input id="Apellido" type="text" class="validate" required="" name="Apellido"/>
<label for="Apellido">Apellido</label>
</div>
</div>

<div class="center-align">
<div class=" input-field col s8">
<input id="Telefono" type="text" class="validate" required="" name="Telefono"/>
<label for="Telefono">Telefono</label>
</div>
</div>

<div class="center-align">
<div class=" input-field col s8">
<input id="Correo" type="text" class="validate" required="" name="Correo"/>
<label for="Correo">Correo</label>
</div>
</div>

<div class="center-align">
<div class=" input-field col s8">
<input id="Usuario" type="text" class="validate" required="" name="Usuario"/>
<label for="Usuario">Usuario</label>
</div>
</div>


<div class="center-align">
<div class=" input-field col s8">
<input id="Pass" type="text" class="validate" required="" name="Pass"/>
<label for="Pass">Contraseña</label>
</div>
</div>

<div class="center-align">
<div class="input-field col s12">
<input class="btn waves-effect waves-light" type="submit" name="action"/>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div><?php }
}
