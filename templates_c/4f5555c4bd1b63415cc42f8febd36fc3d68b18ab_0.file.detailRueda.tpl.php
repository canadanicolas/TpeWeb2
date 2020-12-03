<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 03:56:42
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\detailRueda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc45f6a811473_91290092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5555c4bd1b63415cc42f8febd36fc3d68b18ab' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\detailRueda.tpl',
      1 => 1606704823,
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
function content_5fc45f6a811473_91290092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Medida</th>
                    <th>Modelo</th>
                    <th>Dureza</th>
                    <th>Precio</th>
                    <th>ID Marca</th>
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
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == "user") {?>
    <form id="form_comentario" action="comentarios/insert" name="form-comentario" method="POST">
        <div class="valoracion"><h3>Insertar comentario:</h3></div>
        <input  name="input_textoComentario" type="textarea" name="message" rows="5" cols="20" placeholder="inserte su comentario aqui." value=""></textarea>
        <div class="valoracion"><h3>Insertar valoracion del 1 al 5:</h3></div>
            <div class="clasificacion">
                <input id="radio1" type="radio" name="radio1" value="5">
                <label for="radio1">★</label>
                <input id="radio2" type="radio" name="radio2" value="4">
                <label for="radio2">★</label>
                <input id="radio3" type="radio" name="radio3" value="3">
                <label for="radio3">★</label>
                <input id="radio4" type="radio" name="radio4" value="2">
                <label for="radio4">★</label>
                <input id="radio5" type="radio" name="radio5" value="1">
                <label for="radio5">★</label>
            </div>
        <div class="botones_tabla_ruedas"> 
        <input class="boton_tabla_ruedas" type="submit">
        </div>
    </form>
    <?php }?>
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
