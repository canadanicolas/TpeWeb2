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
        <img class="imagen_portada" src="imagenes/portada.jpg" alt="skateboarding_en_skatepark">
    <section class="titulos">
        <h2>Todo lo que necesitas para arrancar y mejorar en el mundo del skateboarding</h2>
    </section>
    <section class="div_categorias">
        <figure>
            <a href="ruedas"><img src="imagenes/categoriaruedas.jpg" alt="ruedas_skate" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="ruedas">Ruedas</a></figcaption>
        </figure>
        <figure>
            <a href="rulemanes"><img src="imagenes/categoriarulemanes.jpg" alt="rulemanes_skate" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="rulemanes">Rulemanes</a></figcaption>
        </figure>
        <figure>
            <a href="trucks"><img src="imagenes/categoriatrucks.jpg" alt="trucks_skate" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="trucks">Trucks</a></figcaption>
        </figure>
        <figure>
            <a href="decks"><img src="imagenes/categoriadecks.png" alt="decks_skate_colgados" class="imagen_categorias"></a>
            <figcaption class="fuente_categorias"><a href="decks">Decks</a></figcaption>
        </figure>
    </section>

{include file="footer.tpl"}