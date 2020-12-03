<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 18:36:55
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\registracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc28ab78bed39_25052255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7bf45a4803931c868d3fd804f25d8c6bbf4a34' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\registracion.tpl',
      1 => 1606585013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerLoginRegistracion.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc28ab78bed39_25052255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerLoginRegistracion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <section class="div_contacto">
        <form action="registrar" method="POST">
            <label for="user"> Nuevo Usuario: </label> <input type="text" name="input_user" placeholder="Usuario:" value=""/>
            <label for="password">Contraseña: </label> <input type="password" name="input_pass" placeholder="Contraseña:" value=""/>
            </section>
            <input id="input_registrar" type="submit" value="Registrate">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
