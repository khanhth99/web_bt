<?php
include "Frontend/Models/RegisterLoginModel.php";
class RegisterLoginController extends Controller{
    use RegisterLoginModel;
    public function index(){
        $this->renderHTML("Frontend/Views/RegisterLoginView.php");
    }
	public function add(){
        //tạo biến $formAction để điều phối action của form
        $formAction = "index.php?controller=RegisterLogin&action=doAdd";
        //gọi view truyền dữ liệu ra view
        $this->renderHTML("Frontend/Views/RegisterLoginView.php",array("formAction"=>$formAction));
    } 
    public function doAdd(){
        //gọi hàm insert trong model để insert bản ghi
        $this->insert();
        header("location:index.php?controller=Login");
    }   
}
?>