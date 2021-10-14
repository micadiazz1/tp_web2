<?php
    class MarcaModel {
        
        private $db;

        function __construct(){
           $this->db = new PDO('mysql:host=localhost;'.'dbname=tiendahardware;charset=utf8', 'root', '');
        }
        function getMarcas(){
            //Enviamos la consulta y nos devuelve el resultado
            $sentencia = $this->db->prepare( "select * from marca");
            $sentencia->execute();
            $marcas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
            return $marcas;
                
        }
        function getMarca($id_marca){
            $sentencia = $this->db->prepare('SELECT producto.*, marca.nombre_marca FROM producto INNER JOIN marca ON producto.id_marca = marca.id_marca WHERE producto.id_marca = ?');
            $sentencia->execute(array($id_marca));
            $detalleMarca = $sentencia->fetchAll(PDO::FETCH_OBJ);
            
            return $detalleMarca;
        }

        function getMarcaID($id_marca){
            $sentencia = $this->db->prepare('SELECT * from marca WHERE id_marca = ?');
            $sentencia->execute(array($id_marca));
            $detalleMarca = $sentencia->fetch(PDO::FETCH_OBJ);
            
            return $detalleMarca;
        }
        function inssertMarca($nombre){
            $sentencia = $this->db->prepare('INSERT INTO marca(nombre_marca) VALUES(?)');
            $sentencia->execute(array($nombre));
        }
        function quitarMarca($id_marca){
            $sentencia = $this->db->prepare('DELETE FROM marca WHERE id_marca=?');
            $sentencia->execute(array($id_marca));
        }
        function modificarMarca($nombre,$id_marca){
            $sentencia = $this->db->prepare("UPDATE marca SET nombre_marca = ? WHERE id_marca = ?");
            $sentencia->execute(array($nombre,$id_marca));
        }
        
    }