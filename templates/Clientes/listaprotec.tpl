
{include file="templates/Cabeceras/Header.tpl"}

{include file="Navs/Encabezado.tpl"}
{include file="Navs/baracliente.tpl"}
    <div class="center-align">
        <h2>Atendiendo al código </h2>
         {if isset($codigou)}
             <h3> {$codigou}{$codigos}</h3>
         {/if}
    </div>
    <META HTTP-EQUIV="REFRESH" CONTENT="5;?class=listas&method=listasprotec">
{include file="templates/Cabeceras/Footer.tpl"}