{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/Encabezado.tpl"}


{if $nav='Trabajador'}
 
{/if}

<div>
    <h1 class="center-align blue-text text- darken-4">Inicio de Usuarios</h1>
  </div>
  
  {if isset($msn)}
    <h5 msn="center-align">{$msn}</h5>
{/if}

<div class="container">
    <form method="post" action="?class=user&method=BuscarUsuario">
        <div class="row">
            <div class="center-align">


            <div class="input-field col s6">
            <input name="user" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">User</label>
            </div>

            <div class="input-field col s6">
                <input name="pass" id="first_name2" type="password" class="validate">
                <label class="active" for="first_name2">Pass</label>
            </div>
        </div>
        <div class="center-align">
        <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar Sesion
         <i class="material-icons right">send</i>
        </button>
       </div>
       <br />

       
    </form>
    <div class="center-align">
    <a href="?class=Direcciones&method=Registro" class="waves-effect waves-light btn"><i class="material-icons right">assignment</i>Registro</a>
    </div>
</div>