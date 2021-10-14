<?php
/* Smarty version 3.1.39, created on 2021-10-10 17:26:23
  from 'C:\xampp\htdocs\tp-web2\tp-web2\templates\marca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163061fe6f006_22500518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ab563096bc3cc9913c398a909a48528deb7041' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp-web2\\tp-web2\\templates\\marca.tpl',
      1 => 1633653254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6163061fe6f006_22500518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre_marca;?>
 </h1>
<ul>
    <li> producto:<?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</li>
    <li> Descripcion:<?php echo $_smarty_tpl->tpl_vars['marca']->value->descripcion;?>
</li>
    <li> Precio:<?php echo $_smarty_tpl->tpl_vars['marca']->value->precio;?>
</li> 
</ul>

<a href="home/">Volver atras</a>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
