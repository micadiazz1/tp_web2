<?php
/* Smarty version 3.1.39, created on 2021-10-10 17:26:21
  from 'C:\xampp\htdocs\tp-web2\tp-web2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163061db4d437_19188309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e66aa42455aa38ded4c0a56761cfeb2392280dd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp-web2\\tp-web2\\templates\\producto.tpl',
      1 => 1633879579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6163061db4d437_19188309 (Smarty_Internal_Template $_smarty_tpl) {
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
