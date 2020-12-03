<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 07:28:27
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\rulemanes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb36d8b1b9172_87301660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae9dedaeec1c8173b39f43754dc6c3c3eedee67a' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\rulemanes.tpl',
      1 => 1605594025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb36d8b1b9172_87301660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <section class="contenido_paginas" >
    <h2 class="titulos">Guia de rulemanes para el skate</h2>
        <h4>Informacion basica:</h4>
        <p>Los rodamientos pueden tener gran influencia en la velocidad y la experiencia total del skate.</p>
        <p>Sin importar que tipo de rulemanes utilices, usted debe evitar exponerlos a agua, arena y humedad, ya que esto acorta considerablemente el plazo de vida útil de los rulemanes.</p>
        <h4>Material:</h4>
        <p>La mayoría de los rulemanes están fabricados en acero. Los rulemanes baratos son fabricados generalmente en diversos metales mezclados a presión, como por ejemplo cromo, titanio o acero suizo.</p>
        <p>En los rulemanes de cerámica las bolas están fabricadas en cerámica industrial. Estas son menos vulnerables a la oxidación y duran más tiempo que las de acero.</p>
        <figure class="imagenesilustrativas">    
            <img src="imagenes/rulemanesCeramicaVsAcero.jpg" alt="rulemanes_ceramica_vs_acero" class="rulemanes_ceramicavsacero">
        </figure>
        <h4>Precisión / ABEC / I.S.O:</h4>
        <p>Cuanto más alto sea la clasificación ABEC/I.S.O, menor será la deviación en las piezas del rodamiento = más energía será transferida a las ruedas.</p>
        <p>La unica diferencia entre ABEC e I.S.O es que algunas marcas utilizan una u otra para diferenciar sus productos (Pero la mas utilizada ampliamente es la ABEC)</p>
        <table class="tabla_rulemanes">
            <tr>
                <th>Tipo:</th>
                <th>ABEC 1</th>
                <th>ABEC 3</th>
                <th>ABEC 5</th>
                <th>ABEC 7</th>
                <th>ABEC 9</th>
            </tr>
            <tr>
                <th>Conversion a I.S.O</th>
                <td>I.S.O 0</td>
                <td>I.S.O 6</td>
                <td>I.S.O 5</td>
                <td>I.S.O 4</td>
                <td>I.S.O 2</td>
            </tr>
            <tr>
                <th>Milimetros</th>
                <td>0.0075 mm</td>
                <td>0.0050 mm</td>
                <td>0.0035 mm</td>
                <td>0.0025 mm</td>
                <td>0.0012 mm</td>
            </tr>
            <tr>
                <th>Pulgadas</th>
                <td>0.000295"</td>
                <td>0.000197"</td>
                <td>0.000138"</td>
                <td>0.000098"</td>
                <td>0.000047"</td>
            </tr>
        </table>
        <h4>Partes de un ruleman:</h4>
        <ul class="li_partes_ruleman">
            <li>Un anillo interior</li>
            <li>Un anillo exterior</li>
            <li>Cuerpos de rodadura (las bolillas)</li>
            <li>Jaula</li>
            <li>Sellado</li>
            <li>Lubricante</li>
        </ul>
        <figure class="imagenesilustrativas">
            <img src="imagenes/rulemaneschart.png" alt="rulemanes_chart" class="rulemanes_chart">
        </figure>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
