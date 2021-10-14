<?php
    require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";
    class ProductosView {
        
        private $smarty;

        function __construct(){
          $this->smarty = new Smarty();
        }
        function detailView($producto) {
            $this->smarty->assign('producto', $producto);
            $this->smarty->display('templates/producto.tpl');
           
        }
        function updateProduView($marcas,$id){
            $this->smarty->assign('id', $id);
            
            $this->smarty->assign('marcas', $marcas);
            
            $this->smarty->display('templates/updateProducto.tpl');
            
        }
        function marcaView($productosMarca, $marca){
            $this->smarty->assign('nombreMarca', $marca->nombre_marca);
            $this->smarty->assign('marcas', $productosMarca);
            $this->smarty->display('templates/marca.tpl');
        }
        function updateMarcaView($id){
            $this->smarty->assign('id', $id);

            $this->smarty->display('templates/updateMarca.tpl');
            
        }
    }    