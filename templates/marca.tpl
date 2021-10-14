{include file='templates/header.tpl'}
    

     <h1>{$nombreMarca} </h1>
    
    <ul>
        {foreach from=$marcas item=$marca}
            <li> producto:{$marca->nombre}</li>
            <li> Descripcion:{$marca->descripcion}</li>
            <li> Precio:{$marca->precio}</li>
        {/foreach}
    </ul>
    
           
       

    <a href="home/">Volver atras</a>


{include file='templates/footer.tpl'}