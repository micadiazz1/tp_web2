<?php

    require_once "./view/AdminView.php";
    require_once "./model/ProductoModel.php";
    require_once "./model/MarcaModel.php";
    require_once "./helpers/AuthHelper.php";
    
    class AdminController {

        private $ProductoModel;
        private $MarcaModel;
        private $authHelper;
        private $view;
        function __construct(){
            $this->ProductoModel = new ProductoModel();
            $this->MarcaModel = new MarcaModel();
            $this->authHelper = new AuthHelper();
            $this->view = new HomeView();

        }
        function adminForm() {
            if ( $this->authHelper->checkLogin()){
                $productos = $this->ProductoModel->getProductos();
                $marcas = $this->MarcaModel->getMarcas();
                $this->view->formProduct($productos, $marcas);
            }
            
           
            
            
        }

    }