{include file="header.tpl"}
{if $logged != "false"}
    {foreach from=$marcas item=marca}
    <form action="marca/update/confirm/{$marca->id_marca}" method="POST">
    
        <section class="formulario_agregar">
            <input class="input_form_tabla"  name="agregar_nombre" type="text" value="{$marca->nombre}">
            <input class="input_form_tabla"  name="agregar_pais" type="text"  value="{$marca->pais_origen}">
        </section>
    {/foreach}
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Editar" value="">
        </section>
    </form>
    {/if}
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Pais de origen (mm)</th>
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                {foreach from=$marcas item=marca}
                            <tr>
                            <td>{$marca->nombre}</td>
                            <td>{$marca->pais_origen}</td>
                            </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    </section>
{include file="footer.tpl"}