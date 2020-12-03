<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 18:49:21
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\updateMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc28da18c8cf3_11914248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3f741c4167ed6f4febf8e06d9179fb7d637a05' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\updateMarca.tpl',
      1 => 1606585757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc28da18c8cf3_11914248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['logged']->value != "false") {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
    <form action="marca/update/confirm/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
" method="POST">
    
        <section class="formulario_agregar">
            <input class="input_form_tabla" id="nombre" name="agregar_nombre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
">
            <input class="input_form_tabla" id="pais" name="agregar_pais" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->pais_origen;?>
">
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Editar" value="">
        </section>
    </form>
    <?php }?>
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
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
