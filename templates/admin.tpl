{include file='templates/header.tpl'}
    
    <a href="logout/">Logout</a>
    
    <h2>Lista de productos:</h2>

    <div class="lista-productos">
        <ul>
            {foreach from=$product item=$producto}
                <li> Nombre: {$producto->nombre} - Descripcion: {$producto->descripcion} - Precio: {$producto->precio} - Marca: {$producto->nombre_marca}  <a href="deleteProducto/{$producto->id_producto}">borrar</a> - <a href="formEditarProducto/{$producto->id_producto}">modificar</a> </li>         
            {/foreach}
        </ul>
    </div>

    <p>Agregue un nuevo producto:</p>

    <form action="createProducto" method="post">
            <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
            <input type="text" name="descripcion" id="descripcion"  placeholder="Descripcion">
            <input type="number" name="precio" id="precio"  placeholder="Precio">
            <select type=text name="id_marca" id="id_marca">
                {foreach from=$marcas item=$marca}
                    <option value={$marca->id_marca}>{$marca->nombre_marca} </option>         
                {/foreach}
            </select>
            <input type="submit" value="Guardar">
            
    </form>

    <h3>Lista de marcas:</h3>
    <div class="lista-marcas">
        <ul>
            {foreach from=$marcas item=$marca}
                <li> {$marca->nombre_marca}  <a href="deleteMarca/{$marca->id_marca}">borrar</a> - <a href="formEditarMarca/{$marca->id_marca}">modificar</a></li>         
            {/foreach}
        </ul>
    </div>

    <p>Agregue una nueva marca:</p>

    <form action="createMarca" method="post">
            <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
            <input type="submit" value="Guardar">       
    </form>

    <br>
    
    <a href="home/">Volver al home</a>

{include file='templates/footer.tpl'}