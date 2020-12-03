{include file="header.tpl"}
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
                {foreach from=$ruedas item=rueda}
                            <tr>
                            <td>{$rueda->medida}</td>
                            <td>{$rueda->modelo}</td>
                            <td>{$rueda->dureza}</td>
                            <td>{$rueda->precio}</td>
                    {foreach from=$marcas item=marca}
                        {if $rueda->id_marca eq $marca->id_marca}
                            <td>{$marca->nombre}</td>
                        {/if}
                    {/foreach}
                            </tr>
                {/foreach}
            </tbody>
        </table>
    </section>
        <div><h2>Comentarios del publico:</h2></div>
        {foreach from=$ruedas item=rueda}
                <input class="hidden" name="id_rueda" type="number" value={$rueda->id_rueda}>
        {/foreach}
    {if $logged eq "user"}
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
    {/if}
    <br><br>
    <div id="container_comentarios" class="comentarios">
        {include file="vue/comentarios.vue"}
    </div>
<script type="text/javascript" src="js/clientSideRendering.js"></script>
{include file="footer.tpl"}