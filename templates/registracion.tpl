{include file="headerLoginRegistracion.tpl"}

   <section class="div_contacto">
        <form action="registrar" method="POST">
            <label for="user"> Nuevo Usuario: </label> <input type="text" name="input_user" placeholder="Usuario:" value=""/>
            <label for="password">Contraseña: </label> <input type="password" name="input_pass" placeholder="Contraseña:" value=""/>
            </section>
            <input id="input_registrar" type="submit" value="Registrate">
        </form>
    </section>

{include file="footer.tpl"}