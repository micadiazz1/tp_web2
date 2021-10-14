<?php
    require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";
    class HomeView {
        
        private $smarty;

        function __construct(){
          $this->smarty = new Smarty();
        }
        
        function showView($product, $marcas){
            $this->smarty->assign('product', $product);
            $this->smarty->assign('marcas', $marcas);
            $this->smarty->display('templates/listaProductos.tpl');
        }
     
        
        function formProduct($product, $marcas){
            $this->smarty->assign('product', $product);
            $this->smarty->assign('marcas', $marcas);
            $this->smarty->display('templates/admin.tpl');
           
            
        }
        
        function showAdminLocation(){
            header("Location: ".BASE_URL."admin");
        }

    }
