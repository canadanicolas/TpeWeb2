<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 18:41:30
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc28bcaab7f24_41444317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8ba4e49eb30aa6244f3818d18f28af70301621' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\header.tpl',
      1 => 1606585288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc28bcaab7f24_41444317 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="<?php echo BASE_URL;?>
">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <header>
            <img class="logo" src="imagenes/logo.png" alt="logo">
            <h1>Skateboarding</h1>
            <img class="logo" src="imagenes/logo.png" alt="logo">
        </header>
        <nav class="navegacion">
        <button id="menu">Menu</button>
        <ul id="barranavegacion">
            <li class="li_barranavegacion"><a href="home">Home</a></li>
            <li class="li_barranavegacion"><a href="ruedas">Ruedas</a></li>
            <li class="li_barranavegacion"><a href="rulemanes">Rulemanes</a></li>
            <li class="li_barranavegacion"><a href="trucks">Trucks</a></li>
            <li class="li_barranavegacion"><a href="decks">Decks</a></li>
        </ul>
        </nav>
<?php if ($_smarty_tpl->tpl_vars['logged']->value == "user") {?>
    <div>
        <button class="li_barranavegacion" name="logout"><a href="logout"> Logout </a></button>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['logged']->value == "admin") {?>
    <div>
        <button class="li_barranavegacion" name="logout"><a href="logout"> Logout </a></button>
        <button class="li_barranavegacion" name="lista Usuarios"><a href="usuarios"> Lista Usuarios </a></button>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['logged']->value == "false") {?>
    <div>
        <button class="li_barranavegacion" name="login"><a href="login"> Login </a></button>
    </div>
<?php }?>
<p><?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
</p>
<?php }
}
