<?php
    require_once "./view/LoginView.php";
    class AuthHelper{
        private $view;

        function __construct(){
            $this->view = new LoginView();
        }

        function checkLogin(){
            session_start();
           
            if(!isset($_SESSION['email'])){
                $this->view->showLogin();
                return false;
            }
            return true;
        }
        
       


    }