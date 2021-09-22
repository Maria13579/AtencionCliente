<?php
    header("Refresh:1");
?>
{include file="templates/Cabeceras/Header.tpl"}

{include file="Navs/Encabezado.tpl"}
{include file="Navs/baracliente.tpl"}
    <div class="center-align">
        <h2>Atendiendo al código </h2>
        <h3> {$codigou}  {$codigos}</h3>
    </div>
{include file="templates/Cabeceras/Footer.tpl"}