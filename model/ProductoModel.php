<?php
   
    class ProductoModel {
        
        private $db;

        function __construct(){
           $this->db = new PDO('mysql:host=localhost;'.'dbname=tiendahardware;charset=utf8', 'root', '');
        }
        function getProductos(){ 
            //muestro todos los productos
            $sentencia = $this->db->prepare( 'SELECT producto.*, marca.nombre_marca FROM producto INNER JOIN marca on producto.id_marca = marca.id_marca');
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
            return $productos;
                    
        }
        function getProducto($id_producto){
            //MUESTRO EL DETALLE DE UN SOLO PRODUCTOS
            $sentencia = $this->db->prepare('SELECT producto.*, marca.nombre_marca FROM producto INNER JOIN marca  ON producto.id_marca = marca.id_marca WHERE id_producto = ?');
            $sentencia->execute(array($id_producto));
            $detalleProduct = $sentencia->fetch(PDO::FETCH_OBJ);
        
            return $detalleProduct;
            
        
        }
        function inssertProducto($nombre, $descripcion, $precio, $id_marcas){
            $sentencia = $this->db->prepare('INSERT INTO producto(nombre, descripcion, precio, id_marca) VALUES(?, ?, ?, ?)');
            $sentencia->execute(array($nombre, $descripcion, $precio, $id_marcas));
        }
        function quitarProducto($id_producto){
            $sentencia = $this->db->prepare('DELETE FROM producto WHERE id_producto=?');
            $sentencia->execute(array($id_producto));
        }
        function modificarProducto( $nombre, $descripcion, $precio, $id_marca,$id_producto){
            $sentencia = $this->db->prepare("UPDATE producto SET nombre = ?, descripcion = ?, precio = ?, id_marca = ? WHERE id_producto = ?");
            $sentencia->execute(array($nombre, $descripcion, $precio, $id_marca,$id_producto));

        }  
    }