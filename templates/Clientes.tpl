{include file="templates/Cabeceras/Header.tpl"}
<div class="row">
<div class="col 4">
<h1 class="center-align"></h1>
</div>
</div>

{if isset($rol)}
    {if $rol=='registro'}
        {include file='Clientes/Registro.tpl'}
    {/if}
{/if}

{include file="templates/Cabeceras/Footer.tpl"}