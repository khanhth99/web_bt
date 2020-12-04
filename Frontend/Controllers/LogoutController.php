<?php
    class LogoutController{
        public function index(){
            unset($_SESSION["email"]);
            unset($_SESSION["name"]);
            unset($_SESSION["phone"]);
            unset($_SESSION["address"]);
            header("location:home");
        }
    }
?>