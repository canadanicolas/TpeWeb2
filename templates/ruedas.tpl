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
<h2 class="titulos">Guia de ruedas de skate</h2>
<section class="contenido_paginas">
    <h4>Material:</h4>
    <p>Prácticamente la totalidad de ruedas de skate hoy en día están fabricadas con poliuretano. Es un material que es bastante resistente a la abrasión y tiene unas buenas condiciones de agarre.</p>
    <h4>Medida (diametro):</h4>
    <p>La medida sería el aspecto más importante y en lo primero que debemos fijarnos cuando estamos eligiendo un juego de ruedas.</p>
    <p>La medida utilizada por las marcas es el diámetro de la rueda expresada en milímetros (mm).</p>
    <p>Cuanto mayor es el diámetro, la rueda puede alcanzar una mayor velocidad y nos facilita la entrada y salida al grindar en obstáculos.</p>
    <p>Por otro lado, cuanto más pequeña es una rueda, su peso es menor, y la altura con respecto al suelo y el centro de gravedad disminuyen, lo que hace que tengan un mejor rendimiento para realizar trucos técnicos de calle.</p>
    <h4>Dureza (Durometer):</h4>
    <p>El durometer, es una escala que tiene varias categorías. Para las ruedas de skate, se usa comunmente la escala “A” (aunque varias marcas todavia usan la escala "B"). Cuando mayor es el número, mayor es la dureza de la rueda.</p>
    <p> las ruedas más duras ofrecen una mayor velocidad y un menor agarre, por lo que son las preferidas para rampa, skate parks y realizar trucos técnicos. Siempre deben usarse en terrenos más o menos lisos. Por el contrario, las ruedas blandas desarrollan menor velocidad pero ofrecen mucho más agarre y son las preferidas por los skaters que patinan en una mayor variedad de terrenos y usan el skate para desplazarse, ya que las ruedas blandas absorben mucho mejor las irregularidades del suelo.</p>
    <table class="tabla_durezas_ruedas">
        <tr>
            <th>"A"</th>
            <td>100</td>
            <td>95</td>
            <td>75</td>
            <td>80</td>
            <td>90</td>
        </tr>
        <tr>
            <th>"B"</th>
            <td>85</td>
            <td>81</td>
            <td>76</td>
            <td>71</td>
            <td>62</td>
        </tr>
    </table>
    <h4>Tabla comparativa sobre las mejores ruedas de 2020</h4>
    {if $logged eq true}
    <form action="ruedas/insert" method="POST">
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
            <input class="boton_tabla_ruedas" type="submit" value="Agregar" value="">
        </section>
    </form>
    {/if}
    <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    {if $logged eq false}
                        <th>Detalle</th>
                    {/if}
                    {if $logged eq true}
                        <th>Editar</th>
                        <th>Borrar</th>
                    {/if}
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                {foreach from=$ruedas item=rueda}
                    <tr>
                    <td>{$rueda->modelo}</td>
                    {foreach from=$marcas item=marca}
                        {if $rueda->id_marca eq $marca->id_marca}
                            <td><a href="ruedas/filter/{$marca->id_marca}">{$marca->nombre}</a></td>
                        {/if}
                    {/foreach}
                        <td>{$rueda->precio}</td>  
                    {if $logged eq false}                                  
                        <td><button class="detalle_fila"><a href="ruedas/detail/{$rueda->id_rueda}">Detalle</a></button></td>
                    {/if}
                    {if $logged eq true}
                        <td><button class="detalle_fila"><a href="ruedas/update/{$rueda->id_rueda}">Editar</a></button></td>
                        <td><button class="borrar_fila"><a href="ruedas/delete/{$rueda->id_rueda}">Borrar</a></button></td>
                    {/if}
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    </section>
    <h4>Tabla Marcas</h4>
    {if $logged eq true}
    <form action="marca/insert" method="POST">
        <section class="formulario_agregar">
            <input class="input_form_tabla" id="marca" name="agregar_marca" type="number" placeholder="Num ID: " value="">
            <input class="input_form_tabla" id="nombre" name="agregar_nombre" type="text" placeholder="Nombre: " value="">
            <input class="input_form_tabla" id="pais" name="agregar_pais" type="text" placeholder="Pais de origen: " value="">
        </section>
        <section class="botones_tabla_ruedas"> 
            <input class="boton_tabla_ruedas" type="submit" value="Agregar" value="">
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
                    {if $logged eq true}
                    <th>Editar</th>
                    <th>Borrar</th>
                    {/if}
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                {foreach from=$marcas item=marca}
                            <tr>
                            <td>{$marca->id_marca}</td>
                            <td>{$marca->nombre}</td>
                            <td>{$marca->pais_origen}</td>
                            {if $logged eq true}
                                <td><button class="editar_fila"><a href="marca/update/{$marca->id_marca}">Editar</a></button></td>
                                <td><button class="borrar_fila"><a href="marca/delete/{$marca->id_marca}">Borrar</a></button></td>
                            {/if}
                            </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    </section>

    <figure class="imagenesilustrativas">
        <img src="imagenes/ruedaschart.jpg" alt="tipos_de_ruedas" class="ruedas_chart">
    </figure>
</section>

{include file="footer.tpl"}