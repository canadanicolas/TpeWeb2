<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 22:59:37
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\Trucks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f7db9aa9579_04992430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f21b446e21dde87412a7c0442c7d54ee2034d9e' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\Trucks.tpl',
      1 => 1602190523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f7db9aa9579_04992430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['logged']->value == true) {?>
    <div>
        <button class="li_barranavegacion" name="logout"><a href="logout"> Logout </a></button>
    </div>
<?php }?>
       <section class="contenido_paginas">
    <h2 class="titulos">Guia trucks (ejes) de skate</h2>
        <h4>Material:</h4>
        <p>El material del que está construido el eje, influye principalmente en el peso y en la dureza del mismo.</p>
        <p>Para hacer trucos técnicos, siempre será más fácil mover un eje más ligero, mientras que si sólo buscamos desplazarnos con nuestro skate, el peso no nos debería influir prácticamente.</p>
        <p>En los ejes de gama más alta, se utilizan diversos materiales cómo magnesio o titanio, que hacen que el peso del eje baje considerablemente manteniendo en la medida de lo posible su resistencia.</p>
        <h4>Altura:</h4>
        <p>La altura del eje, se refiere al espacio entre la base y el hanger.  Esta altura hará que la tabla esté más cerca o lejos del suelo y determinará qué medida de rueda se puede usar sin que rocen con la tabla en giros grandes.</p>
        <p>Normalmente, las marcas clasifican los ejes en Bajos (Low), Medios (Mid) y Altos (High).</p>
        <h4>Ancho:</h4>
        <p>El ancho del eje es bastante importante y viene condicionada por el tamaño de tabla que usemos… ya que, no queremos que las ruedas sobresalgan de nuestra tabla ni que queden demasiado dentro.</p>
        <p>Por esto, siempre deberemos usar una medida de ejes acorde con el ancho de la tabla (de 7" a 9.75").</p>
        <figure class="imagenesilustrativas">
            <img  src="imagenes/truckschart.png" alt="trucks_chart" class="trucks_chart">
        </figure>
        </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
