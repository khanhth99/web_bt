<?php
include "Frontend/Models/ProductModel.php";
class ProductDetailController extends Controller{
    use ProductModel;
    public function index(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
        
        $data1 = $this->productCate();
        $record = $this->fetchOne($id);
        //print_r($data1);
        $this->renderHTML("Frontend/Views/ProductDetailView.php",array("record"=>$record,"data1"=>$data1));
    }
}
?>