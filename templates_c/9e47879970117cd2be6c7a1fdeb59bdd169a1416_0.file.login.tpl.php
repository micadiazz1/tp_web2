<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:25:22
  from 'C:\xampp\htdocs\BeGaming\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61683dd23e63f2_83060607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e47879970117cd2be6c7a1fdeb59bdd169a1416' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BeGaming\\templates\\login.tpl',
      1 => 1634221510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61683dd23e63f2_83060607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h2>Log In </h2>
    
    <form action="verify" method="post">
            <input type="text" name="email" id="email"  placeholder="email" required>
            <input type="password" name="password" id="password"  placeholder="Password" required>
       
            <input type="submit" value="Iniciar Sesión">
            
    </form>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>










<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
