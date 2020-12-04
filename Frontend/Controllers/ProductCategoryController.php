<?php
include "Frontend/Models/ProductModel.php";
class ProductCategoryController extends Controller{
    use ProductModel;
    public function index(){
        $pageSize = 7;
        $totalRecord = $this->totalRecord();//ham trong model
        //tinh so trang
        $numPage = ceil($totalRecord/$pageSize);
        $p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
        $from = $p * $pageSize;
        
        $data = $this->fetchAll($from,$pageSize);
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
        //goi view, truyen du lieu ra view
        $this->renderHTML("Frontend/Views/ProductCategoryView.php",array("data"=>$data,"numPage"=>$numPage,"id"=>$id));
    }
}
