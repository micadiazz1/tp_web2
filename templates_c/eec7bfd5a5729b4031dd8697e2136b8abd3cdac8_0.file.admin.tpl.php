<?php
/* Smarty version 3.1.39, created on 2021-10-11 22:21:34
  from 'C:\xampp\htdocs\tp-web2\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61649ccec9de09_73134236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eec7bfd5a5729b4031dd8697e2136b8abd3cdac8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp-web2\\templates\\admin.tpl',
      1 => 1633983550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61649ccec9de09_73134236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Lista de productos:</h2>

<div class="lista-productos">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <li> Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 - Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 - Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 - Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_marca;?>
  <a href="deleteProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">borrar</a> - <a href="updateProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">modificar</a> </li>         
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<p>Agregue un nuevo producto:</p>

<form action="createProducto" method="post">
        <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
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
        <input type="submit" value="Guardar">
        
</form>

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
  <a href="deleteMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">borrar</a> - <a href="updateMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">modificar</a></li>         
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<p>Agregue una nueva marca:</p>

<form action="CreateMarca" method="post">
        <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
        <input type="submit" value="Guardar">       
</form>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
