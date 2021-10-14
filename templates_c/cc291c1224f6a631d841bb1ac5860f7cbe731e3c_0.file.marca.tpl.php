<?php
/* Smarty version 3.1.39, created on 2021-10-14 04:12:13
  from 'C:\xampp\htdocs\BeGaming\templates\marca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616791fd9c6df6_54488223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc291c1224f6a631d841bb1ac5860f7cbe731e3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BeGaming\\templates\\marca.tpl',
      1 => 1634177432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616791fd9c6df6_54488223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    

     <h1><?php echo $_smarty_tpl->tpl_vars['nombreMarca']->value;?>
 </h1>
    
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <li> producto:<?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</li>
            <li> Descripcion:<?php echo $_smarty_tpl->tpl_vars['marca']->value->descripcion;?>
</li>
            <li> Precio:<?php echo $_smarty_tpl->tpl_vars['marca']->value->precio;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    
           
       

    <a href="home/">Volver atras</a>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
