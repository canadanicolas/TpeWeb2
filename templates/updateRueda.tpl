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
{if $logged eq true}
    {foreach from=$ruedas item=rueda}
    <form action="ruedas/update/confirm/{$rueda->id_rueda}" method="POST">
    {/foreach}
            <section class="formulario_agregar">
                <input class="input_form_tabla" id="rueda" name="agregar_rueda" type="text" placeholder="Num ID: " value="">
                <input class="input_form_tabla" id="modelo" name="agregar_modelo" type="number" placeholder="Medida: " value="">
                <input class="input_form_tabla" id="medida" name="agregar_medida" type="text" placeholder="Modelo: " value="">
                <input class="input_form_tabla" id="dureza" name="agregar_dureza" type="text" placeholder="Dureza: " value="">
                <input class="input_form_tabla" id="precio" name="agregar_precio" type="double" placeholder="Precio: " value="">
            <select class="input_form_tabla" id="id_marca" name="agregar_id_marca" value="">  
                <option value="" selected>Elegir Marca</option>
                    {foreach from=$marcas item=marca}
                    <option value="{$marca->id_marca}"> {$marca->nombre}</option>
                    {/foreach}
            </select> 
            </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Editar" value="">
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
                    <th>Num ID</th>
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
                            <td>{$rueda->id_rueda}</td>
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

{include file="footer.tpl"}