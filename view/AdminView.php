<?php
    require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";
    class AdminView {
        
        private $smarty;

        function __construct(){
          $this->smarty = new Smarty();
        }
        
        function formularioAdmin($product, $marcas){
            $this->smarty->assign('product', $product);
            $this->smarty->assign('marcas', $marcas);
            $this->smarty->display('templates/admin.tpl');
           
            
        }
        
        function showAdminLocation(){
            header("Location: ".BASE_URL."admin");
        }

    }