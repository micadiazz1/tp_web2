<?php
 require_once "./view/LoginView.php";
 require_once "./model/UserModel.php";
 
    
    class LoginController {

        
        private $model;
        private $view;
        function __construct(){
            $this->model = new UserModel();
            $this->view = new LoginView();
            
        }
        function login(){
            session_start();
            if(!isset($_SESSION['email'])){
                $this->view->showLogin();
            }
            else{
                $this->view->showAdmin();
            }

        }
        function verifyLogin(){
            if(!empty($_POST['email']) && !empty($_POST['password'])){
                
                $email = $_POST['email'];
                $password = $_POST['password'];
            
                $user = $this->model->getUser($email);
            
                if($user && password_verify($password, $user->password)){
                    
                    session_start();
                    $_SESSION['email'] = $email;
 
                    $this->view->showAdmin();
                }
                else{
                    $this->view->showLogin("Acceso denegado");
                }
            }
        }
        
        function logout(){
            session_start();
            session_destroy();
            $this->view->showLogin("Deslogueado");
        }
    

    }