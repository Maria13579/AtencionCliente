{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/Encabezado.tpl"}
{include file="Navs/barratrabajador.tpl"}
<div  class="center-align">
    <h1 >Ventas</h1> 
    <br/><br/>
    <div >
        <a href="?class=Estado&method=atendidoventas" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Atendido</a>
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
                {if isset($listaesperav)}
                    {foreach from=$listaesperav item=$v}
                        <tr>
                            <td>
                            {$v['Usuario_id_Usuario']}
                            </td>
                            <td>
                            {$v['Codigo_id_Codigo']}
                            </td>
                            <td>
                            Espera
                            </td>                                 
                        </tr>
                    {/foreach}
                {/if}
                </tbody>
            </table>
        </div>
    </div>
{include file="templates/Cabeceras/Footer.tpl"}