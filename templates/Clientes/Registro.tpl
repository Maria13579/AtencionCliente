{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/EncabezadoN.tpl"}

<div class="row">
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