<?php
/* Smarty version 3.1.39, created on 2021-10-11 22:22:32
  from 'C:\xampp\htdocs\tp-web2\templates\updateMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61649d08c62686_22486637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90c13695dd70c3675dcd7e0386f7045e57319437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp-web2\\templates\\updateMarca.tpl',
      1 => 1633983742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61649d08c62686_22486637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="updateMarca" method="post">
        <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
        <input type="submit" value="modificar">
        
</form>
<a href="admin/">Volver atras</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
