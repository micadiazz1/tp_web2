<?php
/* Smarty version 3.1.39, created on 2021-10-11 21:28:00
  from 'C:\xampp\htdocs\tp-web2\templates\updateProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616490409b9864_26564474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd77b6b73c883923520bcd29b15cd7ba01e107a61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp-web2\\templates\\updateProducto.tpl',
      1 => 1633980213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616490409b9864_26564474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="updateProducto" method="post">
        <input type="text" name="nombre" id="nombre"  placeholder="Nombre"  >
        <input type="text" name="descripcion" id="descripcion"  placeholder="Descripcion">
        <input type="number" name="precio" id="precio"  placeholder="Precio">
        <select type=text name="id_marca" id="id_marca">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre_marca;?>
 </option>         
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="submit" value="modificar">
        
</form>
<a href="admin/">Volver atras</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
