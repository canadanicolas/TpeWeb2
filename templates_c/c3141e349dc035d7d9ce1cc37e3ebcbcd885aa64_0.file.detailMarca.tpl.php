<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 23:38:00
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\detailMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f86b818fd70_13179341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3141e349dc035d7d9ce1cc37e3ebcbcd885aa64' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\detailMarca.tpl',
      1 => 1602193034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerParaID.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f86b818fd70_13179341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerParaID.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['logged']->value == true) {?>
    <div>
        <button class="li_barranavegacion" name="logout"><a href="logout"> Logout </a></button>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['logged']->value == false) {?>
    <div>
        <button class="li_barranavegacion" name="login"><a href="login"> Login </a></button>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['logged']->value == true) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
    <form action="marca/update/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
" method="POST">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <section class="formulario_agregar">
            <input class="input_form_tabla" id="marca" name="agregar_marca" type="number" placeholder="Num ID: " value="">
            <input class="input_form_tabla" id="nombre" name="agregar_nombre" type="text" placeholder="Nombre: " value="">
            <input class="input_form_tabla" id="pais" name="agregar_pais" type="text" placeholder="Pais de origen: " value="">
        </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Editar" value="">
        </section>
    </form>
    <?php }?>
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Num ID</th>
                    <th>Marca</th>
                    <th>Pais de origen (mm)</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->pais_origen;?>
</td>
                            </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
