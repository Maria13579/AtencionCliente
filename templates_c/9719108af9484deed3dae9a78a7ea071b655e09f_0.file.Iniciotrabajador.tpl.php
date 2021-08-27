<?php
/* Smarty version 3.1.39, created on 2021-08-27 16:35:43
  from 'C:\xampp\htdocs\Proyecto-main\templates\Trabajador\Iniciotrabajador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128f83f83fa03_54747219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9719108af9484deed3dae9a78a7ea071b655e09f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto-main\\templates\\Trabajador\\Iniciotrabajador.tpl',
      1 => 1630074939,
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
function content_6128f83f83fa03_54747219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                 <br/><br/>
                 <div class="row">
                 <div class="center">
                 <?php if ((isset($_smarty_tpl->tpl_vars['msn']->value))) {?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['msn']->value;?>
</h1>
                    <?php } else { ?>
                        <h3></h3>
                 <?php }?>    
                 </div>               
                 <form method="post" action="?class=User&method=BuscarUsuario" >
                      <div class = "center">
                            <div  class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input  type="text" name="user" placeholder="Ingrese su Usuario">   
                                                               
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                        <input type="password" name="pass" placeholder="Ingrese su Contraseña">                                   
                               </div>
                            </div>
                      </div>
                      <div class = "center">
                         <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                      </div>                   
                 </form>
              </div>
              </div>
                </div>
                </div>
                <br/> <br/> <br/>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
