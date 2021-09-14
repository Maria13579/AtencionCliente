<?php
/* Smarty version 3.1.39, created on 2021-09-14 03:17:51
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Trabajador\ventas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613ff83fb4e388_52880170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9adaa66c71732518fafba78345875f8f9431bae' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Trabajador\\ventas.tpl',
      1 => 1631582268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/barratrabajador.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_613ff83fb4e388_52880170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/barratrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                <?php if ((isset($_smarty_tpl->tpl_vars['listaesperav']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaesperav']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                        <tr>
                            <td>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['Usuario_id_Usuario'];?>

                            </td>
                            <td>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['Codigo_id_Codigo'];?>

                            </td>
                            <td>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['Estado_idEstado'];?>

                            </td>                                
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
