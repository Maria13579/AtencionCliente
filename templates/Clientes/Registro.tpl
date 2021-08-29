{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/Encabezado.tpl"}  

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

{include file="templates/Cabeceras/Footer.tpl"}
