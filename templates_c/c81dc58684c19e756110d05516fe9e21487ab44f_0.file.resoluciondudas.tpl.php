<?php
/* Smarty version 3.1.39, created on 2021-09-14 04:10:45
  from 'C:\adobeTemp\htdocs\AtencionCliente\templates\Trabajador\resoluciondudas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614004a55533e4_39955087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81dc58684c19e756110d05516fe9e21487ab44f' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\AtencionCliente\\templates\\Trabajador\\resoluciondudas.tpl',
      1 => 1631585429,
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
function content_614004a55533e4_39955087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/barratrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div  class="center-align">
    <h1 >Resolucion de dudas</h1> 
    <br/><br/>
    <div >
        <a href="?class=Estado&method=atendidoredu" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Atendido</a>
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
        <?php if ((isset($_smarty_tpl->tpl_vars['listaesperar']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaesperar']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <tr>
                    <td>
                     <?php echo $_smarty_tpl->tpl_vars['r']->value['Usuario_id_Usuario'];?>

                    </td>
                    <td>
                    <?php echo $_smarty_tpl->tpl_vars['r']->value['Codigo_id_Codigo'];?>

                    </td>
                    <td>
                    Espera
                    </td>                                
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </tbody>
    </table>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
