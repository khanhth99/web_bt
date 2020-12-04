<?php
include "Frontend/Models/HomeModel.php";
class HomeController extends Controller{
    use HomeModel;
    public function index(){
        $this->renderHTML("Frontend/Views/HomeView.php");
    }
}
?>