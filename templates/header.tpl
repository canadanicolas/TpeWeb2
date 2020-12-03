<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="{BASE_URL}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
{if $logged eq "user"}
    <div>
        <button class="li_barranavegacion" name="logout"><a href="logout"> Logout </a></button>
    </div>
{elseif $logged eq "admin"}
    <div>
        <button class="li_barranavegacion" name="logout"><a href="logout"> Logout </a></button>
        <button class="li_barranavegacion" name="lista Usuarios"><a href="usuarios"> Lista Usuarios </a></button>
    </div>
{elseif $logged eq "false"}
    <div>
        <button class="li_barranavegacion" name="login"><a href="login"> Login </a></button>
    </div>
{/if}
<p>{$logged}</p>
