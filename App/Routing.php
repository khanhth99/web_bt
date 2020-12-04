<?php  
	//tao bien $area de luu thuc muc Frontend hoac Admin
	$area = "Frontend";	
	//neu bien area co ton tai tren url thi lay no
	$area = isset($_GET["area"]) ? $_GET["area"]:$area;
 	//lay bien action truyen tu url, neu khong co thi gan mac dinh la index
 	$action = isset($_GET["action"]) ? $_GET["action"]:"index";
 	//lay bien controller truyen tu url, neu khong co thi gan mac dinh la PhongbanController
 	$controller = isset($_GET["controller"]) ? ucfirst($_GET["controller"])."Controller" :"HomeController";
 	//duong dan cua fileController
 	$fileController = "$area/Controllers/$controller.php";
 	//kiem tra xem file co ton tai khong, neu co ton tai thi include file
 	if(file_exists($fileController)){
 		include $fileController;
 		//kiem tra xem class co ton tai khong, neu co ton tai thi khoi tao object
 		if(class_exists($controller)){
 			$obj = new $controller();
 			$obj->$action();
 		}else
 			die("class does not exists");
 	}
 	//echo $fileController; //Controllers/Admin/HomeController.php
  ?>