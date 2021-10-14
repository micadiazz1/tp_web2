<?php
    require_once "./model/ProductoModel.php";
    require_once "./view/ProductosView.php";
    require_once "./view/AdminView.php";
    require_once "./model/MarcaModel.php";
    

    class ProductosController {

        private $productoModel;
        private $marcaModel;
        private $view;
        private $adminView;
        private $authHelper;

        function __construct(){
            $this->productoModel = new ProductoModel();
            $this->marcaModel = new MarcaModel();
            $this->view = new ProductosView();
            $this->adminView = new AdminView();
            $this->authHelper = new AuthHelper();
         
        }

        function detailProducto($id_producto){
            
            $producto = $this->productoModel->getProducto($id_producto);
            $this->view->detailView($producto);

        }
        function createProducto(){
            
            $this->productoModel->inssertProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'], $_POST['id_marca']);
            $this->adminView->showAdminLocation();
        }
        function deleteProducto($id_producto){
            
            $this->productoModel->quitarProducto($id_producto);
            $this->adminView->showAdminLocation();
        }
        function formEditarProducto($id_producto){
            $this->authHelper->checkLogin();
            //mostramos form
            $this->productoModel->getProducto($id_producto);
            $marcas = $this->marcaModel->getMarcas();
            $this->view->updateProduView($marcas, $id_producto);
        }

        function updateProducto ($id_producto){
            
            $this->productoModel->modificarProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'], $_POST['id_marca'],$id_producto);   
            $this->adminView->showAdminLocation();   
        }
        function detailMarca($id_marca){
            
            $productosMarca = $this->marcaModel->getMarca($id_marca);
            $marca = $this->marcaModel->getMarcaID($id_marca);
            $this->view->marcaView($productosMarca, $marca);

        }

        function createMarca(){
            $this->marcaModel->inssertMarca($_POST['nombre']);
            $this->adminView->showAdminLocation();
        }

        function deleteMarca($id_marca){
            $this->marcaModel->quitarMarca($id_marca);
            $this->adminView->showAdminLocation();
        }

        function formEditarMarca($id_marca){
            $this->authHelper->checkLogin();
            $this->marcaModel->getMarca($id_marca);
            $this->view->updateMarcaView($id_marca);
        }

        function updateMarca($id_marca){
            $this->marcaModel->modificarMarca($_POST['nombre'],$id_marca);
            $this->adminView->showAdminLocation(); 
        }
    }

    
