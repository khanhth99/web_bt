<?php
    class LogoutController{
        public function index(){
            unset($_SESSION["email_admin"]);
            header("location:index.php?area=Admin");
        }
    }
?>