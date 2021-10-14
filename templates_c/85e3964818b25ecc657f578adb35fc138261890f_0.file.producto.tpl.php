<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:53:32
  from 'C:\xampp\htdocs\BeGaming\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61677f8c502913_84694071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e3964818b25ecc657f578adb35fc138261890f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BeGaming\\templates\\producto.tpl',
      1 => 1634152752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61677f8c502913_84694071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
  </h1>
    
    <ul>
        <li> Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 </li>
        <li> Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
        <li> Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_marca;?>
 </li>
    </ul> 

    <a href="home/">Volver atras</a>

            
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
