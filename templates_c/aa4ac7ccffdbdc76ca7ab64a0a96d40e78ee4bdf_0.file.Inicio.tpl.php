<?php
/* Smarty version 3.1.39, created on 2021-09-28 03:21:55
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Clientes\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61526e33e9bf78_72737336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa4ac7ccffdbdc76ca7ab64a0a96d40e78ee4bdf' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Clientes\\Inicio.tpl',
      1 => 1632792114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_61526e33e9bf78_72737336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_prefixVariable1 = 'Trabajador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
 
<?php }?>

<div>
    <h1 class="center-align ">Inicio de Usuarios</h1>
  </div>
  
  <?php if ((isset($_smarty_tpl->tpl_vars['msn']->value))) {?>
    <h5 msn="center-align"><?php echo $_smarty_tpl->tpl_vars['msn']->value;?>
</h5>
<?php }?>

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
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
