{include file='templates/header.tpl'}
    <h1> {$producto->nombre}  </h1>
    
    <ul>
        <li> Descripcion: {$producto->descripcion} </li>
        <li> Precio: {$producto->precio}</li>
        <li> Marca: {$producto->nombre_marca} </li>
    </ul> 

    <a href="home/">Volver atras</a>

            
{include file='templates/footer.tpl'}