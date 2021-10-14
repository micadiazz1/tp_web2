{include file='templates/header.tpl'}

<a href="login/">Log In</a>

<h2>Lista de productos:</h2>

<div class="lista-productos">
    <ul>
        {foreach from=$product item=$producto}
            <li> {$producto->nombre} -  {$producto->nombre_marca} -  <a href="producto/{$producto->id_producto}">Ver informacion</a>   </li>         
        {/foreach}
    </ul>
</div>
<h3>Lista de marcas:</h3>
<div class="lista-marcas">
    <ul>
        {foreach from=$marcas item=$marca}
            <li> {$marca->nombre_marca} - <a href="marca/{$marca->id_marca}">Ver todo</a> </li>         
        {/foreach}
    </ul>
</div>


{include file='templates/footer.tpl'}