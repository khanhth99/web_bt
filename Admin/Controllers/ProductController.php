<?php
include "Admin/Models/ProductModel.php";
class ProductController extends Controller{
    //kha báo để dử dụng class ProductModel
    use ProductModel;
    public function __construct()
    {
        $this->authentication();
    }
    public function index(){
        //số bản ghi trên 1 trang
        $pageSize = 10;
        //tính tổng số bản ghi
        $totalRecord = $this->totalRecord();
        //tính số trang
        //hàm ceil sử dụng để lấy trần VD ceil(2.1)=3
        $numPage = ceil($totalRecord/$pageSize);
        //lấy biến p truyền trên url
        $p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
        //lấy từ bản ghi nào
        $from = $p * $pageSize;
        //lấy các bản ghi
        $data = $this->fetchAll($from,$pageSize);
        //gọi view
        $this->renderHTML("Admin/Views/ProductView.php",array("data"=>$data,"numPage"=>$numPage));

    }
    //edit Product
    public function edit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"]:0;
        //gọi hàm trong model dể lấy 1 bane ghi
        $record = $this->fetch($id);
        //tạo biến $formAction để điều phối action của form
        $formAction = "index.php?area=Admin&controller=Product&action=doEdit&id=$id";
        //gọi view truyền dữ liệu ra view
        $this->renderHTML("Admin/Views/AddEditProductView.php",array("record"=>$record,"formAction"=>$formAction));
    }
    public function doEdit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        //gọi hàm insert trong model để insert bản ghi
        $this->update($id);
        header("location:index.php?area=Admin&controller=Product");
    }   
    public function add(){
        
        //tạo biến $formAction để điều phối action của form
        $formAction = "index.php?area=Admin&controller=Product&action=doAdd";
        //gọi view truyền dữ liệu ra view
        $this->renderHTML("Admin/Views/AddEditProductView.php",array("formAction"=>$formAction));
    } 
    public function doAdd(){
        //gọi hàm insert trong model để insert bản ghi
        $this->insert();
        header("location:index.php?area=Admin&controller=Product");
    }   
    public function delete(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        //gọi hàm delete trong model để insert bản ghi
        $this->deleteProduct($id);
        header("location:index.php?area=Admin&controller=Product");
    }   
}
?>  