<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 07:19:19
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb36b677830f7_08019579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7668d399d4ed6e647ea25ed8dd20c84912b60389' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\home.tpl',
      1 => 1605593933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb36b677830f7_08019579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <img class="imagen_portada" src="imagenes/portada.jpg" alt="skateboarding_en_skatepark">
    <section class="titulos">
        <h2>Todo lo que necesitas para arrancar y mejorar en el mundo del skateboarding</h2>
    </section>
    <section class="div_categorias">
        <figure>
            <a href="ruedas"><img src="imagenes/categoriaruedas.jpg" alt="ruedas_skate" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="ruedas">Ruedas</a></figcaption>
        </figure>
        <figure>
            <a href="rulemanes"><img src="imagenes/categoriarulemanes.jpg" alt="rulemanes_skate" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="rulemanes">Rulemanes</a></figcaption>
        </figure>
        <figure>
            <a href="trucks"><img src="imagenes/categoriatrucks.jpg" alt="trucks_skate" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="trucks">Trucks</a></figcaption>
        </figure>
        <figure>
            <a href="decks"><img src="imagenes/categoriadecks.png" alt="decks_skate_colgados" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="decks">Decks</a></figcaption>
        </figure>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
