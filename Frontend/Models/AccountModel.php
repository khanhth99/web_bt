<?php
trait AccountModel{
    
    //lay mot ban ghi
		public function modelFetch(){
			
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);

			$conn = Connection::getInstance();
			$query = $conn->prepare("select name,email from tbl_user_admin where email=:mail and password=:pass");
			$query->execute(array("mail"=>$email,"pass"=>$password));
			$result = $query->fetch();
			return $result;
			//---
		}
}
?>