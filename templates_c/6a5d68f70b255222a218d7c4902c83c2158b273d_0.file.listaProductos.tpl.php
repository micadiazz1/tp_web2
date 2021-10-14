<?php
/* Smarty version 3.1.39, created on 2021-10-14 15:12:50
  from 'C:\xampp\htdocs\BeGaming\templates\listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61682cd20782f6_18587802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5d68f70b255222a218d7c4902c83c2158b273d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BeGaming\\templates\\listaProductos.tpl',
      1 => 1634217167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61682cd20782f6_18587802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="login/">Log In</a>

<h2>Lista de productos:</h2>

<div class="lista-productos">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <li> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 -  <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_marca;?>
 -  <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Ver informacion</a>   </li>         
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<h3>Lista de marcas:</h3>
<div class="lista-marcas">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <li> <?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre_marca;?>
 - <a href="marca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">Ver todo</a> </li>         
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
