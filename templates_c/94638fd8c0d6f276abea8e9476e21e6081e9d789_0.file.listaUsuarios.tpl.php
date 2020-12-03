<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 07:51:11
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\listaUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb372df40d6e8_85073828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94638fd8c0d6f276abea8e9476e21e6081e9d789' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\listaUsuarios.tpl',
      1 => 1605595472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb372df40d6e8_85073828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="titulos">Lista de todos los Usuarios Registrados</h2>
   <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Rol Actual</th>
                    <th>Nombre</th>
                    <th>Cambiar Rol</th>
                    <th>Eliminar Usuario</th>
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 0) {?>
                            <td>Usuario Registrado</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
                            <td>Admin</td>
                        <?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->usuario;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 0) {?>
                        <form action="admin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" method="POST">
                        <td><input id="input_admin" type="submit" value="Set Admin"></td>
                        </form>
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
                        <form action="registrado/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" method="POST">
                        <td><input id="input_admin" type="submit" value="Remover Admin"></td>
                        </form>
                    <?php }?>
                        <form action="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" method="POST">
                        <td><input id="input_delete" type="submit" value="Eliminar Usuario"></td>
                        </form>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
