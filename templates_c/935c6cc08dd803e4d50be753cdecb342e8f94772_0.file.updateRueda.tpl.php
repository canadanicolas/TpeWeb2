<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 03:55:19
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\updateRueda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc45f17782f94_08823776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '935c6cc08dd803e4d50be753cdecb342e8f94772' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\updateRueda.tpl',
      1 => 1606704908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/comentarios.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc45f17782f94_08823776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['logged']->value == "admin") {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ruedas']->value, 'rueda');
$_smarty_tpl->tpl_vars['rueda']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rueda']->value) {
$_smarty_tpl->tpl_vars['rueda']->do_else = false;
?>
    <form action="ruedas/update/confirm/<?php echo $_smarty_tpl->tpl_vars['rueda']->value->id_rueda;?>
" method="POST">
            <section class="formulario_agregar">
                <input class="input_form_tabla" name="agregar_imagen" type="file" value="<?php echo $_smarty_tpl->tpl_vars['rueda']->value->imagen;?>
"/>
                <input class="input_form_tabla" id="modelo" name="agregar_modelo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rueda']->value->modelo;?>
">
                <input class="input_form_tabla" id="medida" name="agregar_medida" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rueda']->value->medida;?>
">
                <input class="input_form_tabla" id="dureza" name="agregar_dureza" type="text"value="<?php echo $_smarty_tpl->tpl_vars['rueda']->value->dureza;?>
">
                <input class="input_form_tabla" id="precio" name="agregar_precio" type="double"value="<?php echo $_smarty_tpl->tpl_vars['rueda']->value->precio;?>
">
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <select class="input_form_tabla" id="id_marca" name="agregar_id_marca" value=""> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
" selected><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select> 
            </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Editar">
        </section>
    </form>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ruedas']->value, 'rueda');
$_smarty_tpl->tpl_vars['rueda']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rueda']->value) {
$_smarty_tpl->tpl_vars['rueda']->do_else = false;
?>
<h2 class="titulos">Detalles de la rueda Numero: <?php echo $_smarty_tpl->tpl_vars['rueda']->value->id_rueda;?>
</h2>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Medida</th>
                    <th>Modelo</th>
                    <th>Dureza</th>
                    <th>Precio</th>
                    <th>Marca</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['rueda']->value->dureza;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['rueda']->value->precio;?>
</td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['rueda']->value->id_marca == $_smarty_tpl->tpl_vars['marca']->value->id_marca) {?>
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</td>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </section>
    <div><h2>Comentarios del publico:</h2></div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ruedas']->value, 'rueda');
$_smarty_tpl->tpl_vars['rueda']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rueda']->value) {
$_smarty_tpl->tpl_vars['rueda']->do_else = false;
?>
                <input class="hidden" name="id_rueda" type="number" value=<?php echo $_smarty_tpl->tpl_vars['rueda']->value->id_rueda;?>
>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br><br>
    <div id="container_comentarios" class="comentarios">
        <?php $_smarty_tpl->_subTemplateRender("file:vue/comentarios.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/clientSideRendering.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
