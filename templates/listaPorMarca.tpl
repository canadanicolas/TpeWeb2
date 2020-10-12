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
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Num ID</th>
                    <th>Medida</th>
                    <th>Modelo</th>
                    <th>Dureza</th>
                    <th>Precio</th>
                    <th>Marca</th>
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                {foreach from=$ruedas item=rueda}
                    {if $rueda->id_marca eq $id}
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
                    {/if}
            {/foreach}                            
            </tbody>
        </table>
    </section>

{include file="footer.tpl"}