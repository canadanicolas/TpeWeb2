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
   <section class="div_contacto">
        <form action="">
            <label for="nombre"> Nombre: </label> <input type="text" name="nombre" placeholder="Nombre" value=""/>
            <label for="email">Email: </label> <input type="email" name="email" placeholder="Email" value=""/>
            <label for="telefono">Telefono: </label> <input type="number" name="telefono" placeholder="Telefono" value=""/>
            <label for="mensaje">Mensaje: </label> <textarea name="comentario" placeholder="Su mensaje..." rows="8" cols="40"></textarea>
            <section class="div_generar_captcha">
                <input id="boton_generar_captcha" type="button" value="Nuevo Captcha">
                <p id="captcha_random"></p>
            </section>
            <section>
                <label>Captcha:</label>
                <input type="number" name="captcha_user" id="captcha_user" placeholder="Captcha" value="">
                <section class="div_validar_captcha">
                    <input id="validar_captcha" type="button" value="Validar Captcha">
                    <img id="tick_o_cruz" alt="">
                    <p id="captcha_correcto_incorrecto"></p>
                </section>
            </section>
            <input id="boton_submit" type="submit" value="Enviar">
        </form>
    </section>

{include file="footer.tpl"}