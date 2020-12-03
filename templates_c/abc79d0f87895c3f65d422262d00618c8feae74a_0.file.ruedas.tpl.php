<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 03:07:14
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\ruedas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc453d248db21_12411277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abc79d0f87895c3f65d422262d00618c8feae74a' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\ruedas.tpl',
      1 => 1606702032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc453d248db21_12411277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="titulos">Guia de ruedas de skate</h2>
<section class="contenido_paginas">
    <h4>Material:</h4>
    <p>Prácticamente la totalidad de ruedas de skate hoy en día están fabricadas con poliuretano. Es un material que es bastante resistente a la abrasión y tiene unas buenas condiciones de agarre.</p>
    <h4>Medida (diametro):</h4>
    <p>La medida sería el aspecto más importante y en lo primero que debemos fijarnos cuando estamos eligiendo un juego de ruedas.</p>
    <p>La medida utilizada por las marcas es el diámetro de la rueda expresada en milímetros (mm).</p>
    <p>Cuanto mayor es el diámetro, la rueda puede alcanzar una mayor velocidad y nos facilita la entrada y salida al grindar en obstáculos.</p>
    <p>Por otro lado, cuanto más pequeña es una rueda, su peso es menor, y la altura con respecto al suelo y el centro de gravedad disminuyen, lo que hace que tengan un mejor rendimiento para realizar trucos técnicos de calle.</p>
    <h4>Dureza (Durometer):</h4>
    <p>El durometer, es una escala que tiene varias categorías. Para las ruedas de skate, se usa comunmente la escala “A” (aunque varias marcas todavia usan la escala "B"). Cuando mayor es el número, mayor es la dureza de la rueda.</p>
    <p> las ruedas más duras ofrecen una mayor velocidad y un menor agarre, por lo que son las preferidas para rampa, skate parks y realizar trucos técnicos. Siempre deben usarse en terrenos más o menos lisos. Por el contrario, las ruedas blandas desarrollan menor velocidad pero ofrecen mucho más agarre y son las preferidas por los skaters que patinan en una mayor variedad de terrenos y usan el skate para desplazarse, ya que las ruedas blandas absorben mucho mejor las irregularidades del suelo.</p>
    <table class="tabla_durezas_ruedas">
        <tr>
            <th>"A"</th>
            <td>100</td>
            <td>95</td>
            <td>75</td>
            <td>80</td>
            <td>90</td>
        </tr>
        <tr>
            <th>"B"</th>
            <td>85</td>
            <td>81</td>
            <td>76</td>
            <td>71</td>
            <td>62</td>
        </tr>
    </table>
    <h4>Tabla comparativa sobre las mejores ruedas de 2020</h4>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == "admin") {?>
    <form action="ruedas/insert" method="POST">
        <section class="formulario_agregar">
            <input class="input_form_tabla" name="agregar_imagen" type="file" />
            <input class="input_form_tabla" id="modelo" name="agregar_modelo" type="number" placeholder="Medida: " value="">
            <input class="input_form_tabla" id="medida" name="agregar_medida" type="text" placeholder="Modelo: " value="">
            <input class="input_form_tabla" id="dureza" name="agregar_dureza" type="text" placeholder="Dureza: " value="">
            <input class="input_form_tabla" id="precio" name="agregar_precio" type="double" placeholder="Precio: " value="">
            <select class="input_form_tabla" id="id_marca" name="agregar_id_marca" value="">  
                <option value="" selected>Elegir Marca</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"> <?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Agregar" value="">
        </section>
    </form>
    <?php }?>
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Medida</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value != "admin") {?>
                        <th>Detalle</th>
                    <?php } else { ?>
                        <th>Editar</th>
                        <th>Borrar</th>
                    <?php }?>
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ruedas']->value, 'rueda');
$_smarty_tpl->tpl_vars['rueda']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rueda']->value) {
$_smarty_tpl->tpl_vars['rueda']->do_else = false;
?>
                    <tr>
                    <td><img class="logo" src="imagenes/<?php echo $_smarty_tpl->tpl_vars['rueda']->value->imagen;?>
"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rueda']->value->medida;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rueda']->value->modelo;?>
</td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['rueda']->value->id_marca == $_smarty_tpl->tpl_vars['marca']->value->id_marca) {?>
                            <td><a href="ruedas/filter/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</a></td>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <td><?php echo $_smarty_tpl->tpl_vars['rueda']->value->precio;?>
</td>  
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value != "admin") {?>                                  
                        <td><button class="detalle_fila"><a href="ruedas/detail/<?php echo $_smarty_tpl->tpl_vars['rueda']->value->id_rueda;?>
">Detalle</a></button></td>
                    <?php } else { ?>
                        <td><button class="detalle_fila"><a href="ruedas/update/<?php echo $_smarty_tpl->tpl_vars['rueda']->value->id_rueda;?>
">Editar</a></button></td>
                        <td><button class="borrar_fila"><a href="ruedas/delete/<?php echo $_smarty_tpl->tpl_vars['rueda']->value->id_rueda;?>
">Borrar</a></button></td>
                    <?php }?>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    </section>
    <h4>Tabla Marcas</h4>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == "admin") {?>
    <form action="marca/insert" method="POST">
        <section class="formulario_agregar">
            <input class="input_form_tabla" id="nombre" name="agregar_nombre" type="text" placeholder="Nombre: " value="">
            <input class="input_form_tabla" id="pais" name="agregar_pais" type="text" placeholder="Pais de origen: " value="">
        </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Agregar" value="">
        </section>
    </form>
    <?php }?>
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Pais de origen (mm)</th>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value == "admin") {?>
                    <th>Editar</th>
                    <th>Borrar</th>
                    <?php }?>
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                            <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->pais_origen;?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['logged']->value == "admin") {?>
                                <td><button class="editar_fila"><a href="marca/update/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">Editar</a></button></td>
                                <td><button class="borrar_fila"><a href="marca/delete/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">Borrar</a></button></td>
                            <?php }?>
                            </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    </section>

    <figure class="imagenesilustrativas">
        <img src="imagenes/ruedaschart.jpg" alt="tipos_de_ruedas" class="ruedas_chart">
    </figure>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
