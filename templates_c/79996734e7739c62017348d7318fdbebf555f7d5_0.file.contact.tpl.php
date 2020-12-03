<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-21 21:36:52
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb97a64166aa3_44958200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79996734e7739c62017348d7318fdbebf555f7d5' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\contact.tpl',
      1 => 1605593912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb97a64166aa3_44958200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <section class="div_contacto">
        <form action="">
            <label for="nombre"> Nombre: </label> <input type="text" name="nombre" placeholder="Nombre" value=""/>
            <label for="email">Email: </label> <input type="email" name="email" placeholder="Email" value=""/>
            <label for="telefono">Telefono: </label> <input type="number" name="telefono" placeholder="Telefono" value=""/>
            <label for="mensaje">Mensaje: </label> <textarea name="comentario" placeholder="Su mensaje..." rows="8" cols="40"></textarea>
            <section class="div_generar_captcha">
                <input id="boton_generar_captcha" type="button" value="Nuevo Captcha">
                <p id="captcha_random"></p>
            </section>
            <section>
                <label>Captcha:</label>
                <input type="number" name="captcha_user" id="captcha_user" placeholder="Captcha" value="">
                <section class="div_validar_captcha">
                    <input id="validar_captcha" type="button" value="Validar Captcha">
                    <img id="tick_o_cruz" alt="">
                    <p id="captcha_correcto_incorrecto"></p>
                </section>
            </section>
            <input id="boton_submit" type="submit" value="Enviar">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
