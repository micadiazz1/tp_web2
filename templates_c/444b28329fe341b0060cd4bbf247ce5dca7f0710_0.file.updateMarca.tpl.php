<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:02:29
  from 'C:\xampp\htdocs\BeGaming\templates\updateMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61689ae5384467_59667176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444b28329fe341b0060cd4bbf247ce5dca7f0710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BeGaming\\templates\\updateMarca.tpl',
      1 => 1634152734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61689ae5384467_59667176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form action="confirmacionUpdateMarca/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
                <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
                <input type="submit" value="modificar">

        </form>
        <a href="admin/">Volver atras</a>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
