<nav>
<div class="nav-wrapper cyan darken-2">
  <a class="brand-logo center">
  {if isset($nombre)}
    {$nombre}  {$apellido} {$ro}
    {else}
      Bienvenido         
  {/if}
    </a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="?class=Home&method=Inicio"><span class="material-icons"><br>  logout</span> </a></li>
  </ul>
</div>
</nav>