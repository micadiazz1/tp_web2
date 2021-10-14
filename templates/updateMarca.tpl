{include file='templates/header.tpl'}

        <form action="confirmacionUpdateMarca/{$id}" method="post">
                <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
                <input type="submit" value="modificar">

        </form>
        <a href="admin/">Volver atras</a>

{include file='templates/footer.tpl'}