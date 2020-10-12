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
    {foreach from=$marcas item=marca}
    <form action="marca/update/confirm/{$marca->id_marca}" method="POST">
    {/foreach}
        <section class="formulario_agregar">
            <input class="input_form_tabla" id="marca" name="agregar_marca_id" type="number" placeholder="Num ID: " value="">
            <input class="input_form_tabla" id="nombre" name="agregar_nombre" type="text" placeholder="Nombre: " value="">
            <input class="input_form_tabla" id="pais" name="agregar_pais" type="text" placeholder="Pais de origen: " value="">
        </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Editar" value="">
        </section>
    </form>
    {/if}
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Num ID</th>
                    <th>Marca</th>
                    <th>Pais de origen (mm)</th>
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                {foreach from=$marcas item=marca}
                            <tr>
                            <td>{$marca->id_marca}</td>
                            <td>{$marca->nombre}</td>
                            <td>{$marca->pais_origen}</td>
                            </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    </section>
{include file="footer.tpl"}