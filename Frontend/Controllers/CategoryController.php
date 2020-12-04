<?php
include "Frontend/Models/CategoryModel.php";
class CategoryController extends Controller{
    use CategoryModel;
    public function index(){
        $data = $this->getAll();
        $this->renderHTML("Frontend/Views/CategoryView.php",array("data"=>$data));
    }
    public function index1(){
        $data1 = $this->getAll();
        $this->renderHTML("Frontend/Views/HeaderView.php",array("data1"=>$data1));
    }
}

?>