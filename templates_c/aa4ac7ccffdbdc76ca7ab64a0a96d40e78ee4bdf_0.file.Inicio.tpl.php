<?php
/* Smarty version 3.1.39, created on 2021-08-27 17:22:02
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6129031ab9e559_66647298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa4ac7ccffdbdc76ca7ab64a0a96d40e78ee4bdf' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\Inicio.tpl',
      1 => 1630074114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezadon.tpl' => 1,
  ),
),false)) {
function content_6129031ab9e559_66647298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezadon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_prefixVariable1 = 'Trabajador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="collection">
    <a href="?class=Direcciones&method=Registro" class="collection-item ">Registro</a>
    </div>
    </div>
<?php }?>

<div>
    <h1 class="center-align blue-text text- darken-4">Inicio de Usuarios</h1>
  </div>
  
  <?php if ((isset($_smarty_tpl->tpl_vars['msn']->value))) {?>
    <h5 msn="center-align"><?php echo $_smarty_tpl->tpl_vars['msn']->value;?>
</h5>
<?php }?>

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
        <div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
         <i class="material-icons right">send</i>
        </button>
       </div>
       <br />

       
    </form>
</div><?php }
}
