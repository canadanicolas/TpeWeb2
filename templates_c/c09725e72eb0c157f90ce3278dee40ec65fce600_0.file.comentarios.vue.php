<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 05:32:35
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\vue\comentarios.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc8ce32e60f6_06048458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c09725e72eb0c157f90ce3278dee40ec65fce600' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\vue\\comentarios.vue',
      1 => 1606192329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbc8ce32e60f6_06048458 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="vue-comentario">

    <ul id="lista-comentarios" class="">
        <li v-for="comentario in comments"> 
        {{comentario.texto}} - Valoracion: {{comentario.valoracion}}/5

            <?php if ($_smarty_tpl->tpl_vars['logged']->value == "admin") {?>
            
             - <button class="boton_tabla_ruedas" v-on:click="deleteComentario(comentario.id_comentario)">Eliminar</button>
            
            <?php }?>
        </li>
    </ul>

</div>

<?php }
}
