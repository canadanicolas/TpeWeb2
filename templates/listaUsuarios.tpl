{include file="header.tpl"}
<h2 class="titulos">Lista de todos los Usuarios Registrados</h2>
   <section class="section_tabla_ruedas">
        <table class="tabla_mejores_ruedas">
            <thead>
                <tr>
                    <th>Rol Actual</th>
                    <th>Nombre</th>
                    <th>Cambiar Rol</th>
                    <th>Eliminar Usuario</th>
                </tr>
            </thead>
            <tbody id="tbody_tabla_ruedas">
                {foreach from=$users item=user}
                    <tr>
                        {if $user->admin eq 0}
                            <td>Usuario Registrado</td>
                        {elseif $user->admin eq 1}
                            <td>Admin</td>
                        {/if}
                    <td>{$user->usuario}</td>
                    {if $user->admin eq 0}
                        <form action="admin/{$user->id_user}" method="POST">
                        <td><input id="input_admin" type="submit" value="Set Admin"></td>
                        </form>
                    {elseif $user->admin eq 1}
                        <form action="registrado/{$user->id_user}" method="POST">
                        <td><input id="input_admin" type="submit" value="Remover Admin"></td>
                        </form>
                    {/if}
                        <form action="deleteUser/{$user->id_user}" method="POST">
                        <td><input id="input_delete" type="submit" value="Eliminar Usuario"></td>
                        </form>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </section>

{include file="footer.tpl"}