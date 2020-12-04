<?php
include "Admin/Models/SlideModel.php";
class SlideController extends Controller{
    //kha báo để dử dụng class SlideModel
    use SlideModel;
    public function __construct()
    {
        $this->authentication();
    }
    public function index(){
        $data = $this->fetchAll();
        //gọi view
        $this->renderHTML("Admin/Views/SlideView.php",array("data"=>$data));


    }
    //edit Slide
    public function edit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"]:0;
        //gọi hàm trong model dể lấy 1 bane ghi
        $record = $this->fetch($id);
        //tạo biến $formAction để điều phối action của form
        $formAction = "index.php?area=Admin&controller=Slide&action=doEdit&id=$id";
        $this->renderHTML("Admin/Views/AddEditSlideView.php",array("record"=>$record,"formAction"=>$formAction));
    }
    public function doEdit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        //gọi hàm insert trong model để insert bản ghi
        $this->update($id);
        header("location:index.php?area=Admin&controller=Slide");
    }   
    public function add(){
        
        //tạo biến $formAction để điều phối action của form
        $formAction = "index.php?area=Admin&controller=Slide&action=doAdd";
        //gọi view truyền dữ liệu ra view
        $this->renderHTML("Admin/Views/AddEditSlideView.php",array("formAction"=>$formAction));
    } 
    public function doAdd(){
        //gọi hàm insert trong model để insert bản ghi
        $this->insert();
        header("location:index.php?area=Admin&controller=Slide");
    }   
    public function delete(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        //gọi hàm delete trong model để insert bản ghi
        $this->deleteSlide($id);
        header("location:index.php?area=Admin&controller=Slide");
    }   
}
?>  