<?php

require_once "controller\HomeController.php";
require_once "controller\ProductosController.php";
require_once "controller\AdminController.php";
require_once "controller\LoginController.php";



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$homeController = new HomeController();
$productosController = new ProductosController();
$adminController = new AdminController();
$loginController = new LoginController();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'login': 
        $loginController->login(); 
        break;
    case 'verify': 
        $loginController->verifyLogin(); 
        break;
    case 'logout': 
        $loginController->logout(); 
        break;
    
    case 'home': 
        $homeController->showHome(); 
        break;
    case 'admin':
        $adminController->adminForm();
        break;
    case 'producto': //preguntar si en singular o prural
        $productosController->detailProducto($params[1]);
        break;
    case 'marca':
        $productosController->detailMarca($params[1]);
        break;
    case 'createProducto':
        $productosController->createProducto();
        break;
    case 'createMarca':
        $productosController->createMarca();
        break;
    case 'deleteProducto':
        $productosController->deleteProducto($params[1]);
        break;
    case 'deleteMarca':
        $productosController->deleteMarca($params[1]);
        break;
    case 'formEditarProducto':
        $productosController->formEditarProducto($params[1]);
        break;
    case 'confirmacionUpdateProducto':
        $productosController->updateProducto($params[1]);
        break;
    case 'formEditarMarca':
        $productosController->formEditarMarca($params[1]);
        break; 
    case 'confirmacionUpdateMarca':
        $productosController->updateMarca($params[1]);
        break;          
    default: 
        echo('404 Page not found'); 
        break;
}


