{include file="header.tpl"}
{if $logged eq "admin"}
    {foreach from=$ruedas item=rueda}
    <form action="ruedas/update/confirm/{$rueda->id_rueda}" method="POST">
            <section class="formulario_agregar">
                <input class="input_form_tabla" name="agregar_imagen" type="file" value="{$rueda->imagen}"/>
                <input class="input_form_tabla"  name="agregar_modelo" type="text" value="{$rueda->modelo}">
                <input class="input_form_tabla"  name="agregar_medida" type="text" value="{$rueda->medida}">
                <input class="input_form_tabla" name="agregar_dureza" type="text"value="{$rueda->dureza}">
                <input class="input_form_tabla" name="agregar_precio" type="double"value="{$rueda->precio}">
            {/foreach}
            <select class="input_form_tabla"  name="agregar_id_marca" value=""> 
            {foreach from=$marcas item=marca}
                <option value="{$marca->id_marca}" selected>{$marca->nombre}</option>
            {/foreach}
            </select> 
            </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Editar">
        </section>
    </form>
{/if}
{foreach from=$ruedas item=rueda}
<h2 class="titulos">Detalles de la rueda Numero: {$rueda->id_rueda}</h2>
{/foreach}
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
                {foreach from=$ruedas item=rueda}
                            <tr>
                            <td><img class="logo" src="imagenes/{$rueda->imagen}"></td>
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
    <br><br>
    <div id="container_comentarios" class="comentarios">
        {include file="vue/comentarios.vue"}
    </div>
<script type="text/javascript" src="js/clientSideRendering.js"></script>
{include file="footer.tpl"}