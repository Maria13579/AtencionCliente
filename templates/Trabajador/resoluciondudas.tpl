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
    <div class ="col s4">
    <table>
        <thead>
            <tr>    
                <th>Cliente</th>                          
                
                                        
            </tr>
        </thead>
        <tbody>
            {if isset($nombreu)}
                {foreach from=$nombreu item=$v}
                    <tr>
                        <td>
                        {$v['nombre'] }  {$v['Apellido'] }
                        </td>                     
                    </tr>
              {/foreach}
          {/if}
        </tbody>
    </table>
</div>
<div class="col s4">
    <table>
        <thead>
            <tr>    
                <th>Codigo</th>                          
                <th>Espera</th>   
                                        
            </tr>
        </thead>
        <tbody>
            {if isset($codigou)}
                {foreach from=$codigou item=$v}
                    <tr>
                        <td>
                        {$v['letra'] }  {$v['Codigo'] }
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
{include file="templates/Cabeceras/Footer.tpl"}