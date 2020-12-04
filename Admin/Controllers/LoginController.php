<?php 
	//include file model
	include "Admin/Models/LoginModel.php";
	class LoginController extends Controller{
		//su dung class LoginModel
		use LoginModel;
		public function index(){
			//load view
			$this->renderHTML("Admin/Views/LoginView.php");
		}
		//khi an nut submit
		public function doLogin(){
			//goi ham lay 1 ban ghi tu class model
			$record = $this->modelFetch();
			if(isset($record->email)){
				//gan session email
				$_SESSION["email_admin"] = $record->email;
								
			}
			if(isset($record->name)){
				$_SESSION["name_admin"] = $record->name;
			}
			//quay tro lai trang index.php?controller=Admin
			header("location:index.php?area=Admin");
		}
	}
 ?>


