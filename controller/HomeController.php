<?php

    require_once "./view/HomeView.php";
    require_once "./model/ProductoModel.php";
    require_once "./model/MarcaModel.php";
    
    class HomeController {

        private $ProductoModel;
        private $MarcaModel;
        private $view;
        private $authHelper;

        function __construct(){
            $this->ProductoModel = new ProductoModel();
            $this->MarcaModel = new MarcaModel();
            $this->view = new HomeView();
            $this->authHelper = new AuthHelper();
        }
        function showHome() {
            
            $product = $this->ProductoModel->getProductos();
            $marcas = $this->MarcaModel->getMarcas();
      
            $this->view->showView($product, $marcas);
            

        }
    

    }
    