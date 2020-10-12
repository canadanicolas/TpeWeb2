{include file="header.tpl"}
{if $logged eq true}
    <div>
        <button class="li_barranavegacion" name="logout"><a href="logout"> Logout </a></button>
    </div>
{/if}
{if $logged eq false}
    <div>
        <button class="li_barranavegacion" name="login"><a href="login"> Login </a></button>
    </div>
{/if}
   <section class="contenido_paginas">
    <h2 class="titulos">Guia de decks (tablas) de skate</h2>
        <h4>Materiales y tecnologías:</h4>
        <p>La gran mayoría de tablas están fabricadas con láminas de madera. En las tablas de calidad, se suelen usar 7 láminas de arce canadiense.</p>
        <p>Hay modelos de gama alta en casi todas las marcas, que incorporan alguna parte o capa de fibra de vidrio o fibra de carbono, o diversas técnicas en su construcción que aumentan el rendimiento y la resistencia de las mismas. </p>
        <h4>Medidas (ancho):</h4>
        <p>Las tablas de skate de adulto ( a partir de unos 13 años ya se debería usar tabla de adulto.), tienen un rango de medida por lo general que va desde 7,5 a 9 pulgadas.</p>
        <p>Una tabla más estrecha es más eficaz al hacer trucos técnicos ya que es más fácil moverla y hacerla girar (flips, etc) pero, al mismo tiempo, ofrece algo menos de estabilidad y espacio a la hora de caer los trucos</p>
        <p>una tabla más ancha nos ofrece una mayor estabilidad a la hora de montar aunque será algo más costoso moverla en los trucos.</p>
        <p>Por esto, a la hora de patinar en calle y hacer trucos técnicos se suelen usar tablas menores de 8 pulgadas y para patinar en rampa, bowls, grandes gaps, etc suele usarse tablas de entre 8 y 9 pulgadas.</p>
        <h4>Marcas mas importantes:</h4>
        <ul class="lidecks">
            <li>Flip</li>
            <li>Element</li>
            <li>Santa Cruz</li>
            <li>Baker</li>
            <li>Toy Machine</li>
            <li>Girl</li>
            <li>Plan B</li>
        </ul>
        <figure class="imagenesilustrativas">
            <img src="imagenes/deckschart.png" alt="deck_chart" class="decks_chart">
        </figure>
    </section>


{include file="footer.tpl"}