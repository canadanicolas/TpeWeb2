<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 18:43:07
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc28c2b377529_33901229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd862241f31017de7a53d3053f8909da4ec9a8fb5' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\login.tpl',
      1 => 1606585006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerLoginRegistracion.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc28c2b377529_33901229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerLoginRegistracion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <section class="div_contacto">
        <form action="login" method="POST">
        <div>
            <h3><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
        </div>
            <label for="user"> Usuario: </label> <input type="text" name="input_user" placeholder="Usuario:" value=""/>
            <label for="password">Contraseña: </label> <input type="password" name="input_pass" placeholder="Contraseña:" value=""/>
            <label>No tienes un usuario? <a href="registracion">Registrate</a></label>
            </section>
            <input id="input_login" type="submit" value="Login">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
