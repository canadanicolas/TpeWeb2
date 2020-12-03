<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 03:37:59
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\listaPorMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc45b07c667b6_68796684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a2111b14c9db2afbe3baa442600915932a3a8c' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\listaPorMarca.tpl',
      1 => 1606702669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc45b07c667b6_68796684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <?php if ($_smarty_tpl->tpl_vars['rueda']->value->id_marca == $_smarty_tpl->tpl_vars['id']->value) {?>
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
                    <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                            
            </tbody>
        </table>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
