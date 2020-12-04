<?php 
	//include file model
	include "Frontend/Models/LoginModel.php";
	class LoginController extends Controller{
		//su dung class LoginModel
		use LoginModel;
		public function index(){
			//load view
			$this->renderHTML("Frontend/Views/LoginView.php");
		}
		//khi an nut submit
		public function doLogin(){
			//goi ham lay 1 ban ghi tu class model
            $record = $this->modelFetch();
           
			if(isset($record->email)&&isset($record->name)&&isset($record->phone)&&isset($record->address)){
				//gan session email
				$_SESSION["email"] = $record->email;
				$_SESSION["name"] = $record->name;
				$_SESSION["phone"] = $record->phone;
				$_SESSION["address"] = $record->address;
								
			}
			//quay tro lai trang index.php?controller=Admin
			header("location:index.php");
		}
		public function doAddCheck(){
			$data = $this->modelFetchCheck();
			echo $data;
		}
	}
 ?>


