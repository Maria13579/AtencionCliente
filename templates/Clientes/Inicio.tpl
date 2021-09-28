{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/Encabezado.tpl"}


{if $nav='Trabajador'}
 
{/if}

<div>
    <h1 class="center-align ">Inicio de Usuarios</h1>
  </div>
  
  {if isset($msn)}
    <h5 msn="center-align">{$msn}</h5>
{/if}

<div class="container">
    <form method="post" action="?class=User&method=buscarclientes">
        <div class="row">
            <div class="center-align">
                    <div class="input-field col s8">
                        <input  type="text" name="nombre" placeholder="Nombre">   
                        <br/>
                    </div>
                    <div class="input-field col s8">
                     <input type="text" name="apellido" placeholder="Apellido">
                     <br/>
                    </div>
                    <div class="input-field col s8">
                      <input type="text" name="Telefono" placeholder="Telefono">
                      <br/>
                  </div>
             </div>
         <div>
        </div>
        <br/> <br/> <br/> <br/>
        <div class="center-align" >
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
    </div>
    </div>
{include file="templates/Cabeceras/Footer.tpl"}