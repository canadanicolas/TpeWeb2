<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 18:36:55
  from 'C:\Users\Usuario\Desktop\facu\xampp\htdocs\trabajos\tpe\templates\headerLoginRegistracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc28ab7cc5987_68158158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4eb3a5d1bbc032b526d818a11bd4d7cd54abc05' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\facu\\xampp\\htdocs\\trabajos\\tpe\\templates\\headerLoginRegistracion.tpl',
      1 => 1606584992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc28ab7cc5987_68158158 (Smarty_Internal_Template $_smarty_tpl) {
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
        </nav><?php }
}
