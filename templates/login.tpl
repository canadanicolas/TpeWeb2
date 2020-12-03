{include file="headerLoginRegistracion.tpl"}

   <section class="div_contacto">
        <form action="login" method="POST">
        <div>
            <h3>{$mensaje}</h3>
        </div>
            <label for="user"> Usuario: </label> <input type="text" name="input_user" placeholder="Usuario:" value=""/>
            <label for="password">Contraseña: </label> <input type="password" name="input_pass" placeholder="Contraseña:" value=""/>
            <label>No tienes un usuario? <a href="registracion">Registrate</a></label>
            </section>
            <input id="input_login" type="submit" value="Login">
        </form>
    </section>

{include file="footer.tpl"}