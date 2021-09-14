{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/Encabezado.tpl"}
{include file="Navs/barratrabajador.tpl"}
<div  class="center-align">
    <h1 >Resolucion de dudas</h1> 
    <br/><br/>
    <div >
        <a href="?class=Estado&method=atendidoredu" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Atendido</a>
    </div>
    <br/>
    </div>
    <div class ="col s8">
    <table>
        <thead>
            <tr>    
                <th>Cliente</th>                          
                <th>Codigo</th>
                <th>Estado</th>
                                         
            </tr>
        </thead>
        <tbody>
        {if isset($listaesperar)}
            {foreach from=$listaesperar item=$r}
                <tr>
                    <td>
                     {$r['Usuario_id_Usuario']}
                    </td>
                    <td>
                    {$r['Codigo_id_Codigo']}
                    </td>
                    <td>
                    Espera
                    </td>                                
                </tr>
            {/foreach}
        {/if}
        </tbody>
    </table>
{include file="templates/Cabeceras/Footer.tpl"}