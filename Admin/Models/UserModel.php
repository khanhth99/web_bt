<?php
    trait UserModel{
        //danh sách các bản ghi: từ bản ghi nào  đến bản ghi nào
        public function fetchAll($from, $pageSize){
            $conn = Connection::getInstance();
            $query  = $conn->query("SELECT * from tbl_user_admin order by id desc  limit $from, $pageSize");
            return $query->fetchAll();
        }
        //tính tổng số lượng bản ghi
        public function totalRecord(){
            $conn = Connection::getInstance();
            $query  = $conn->query("SELECT id from tbl_user_admin ");
            return $query->rowCount();
        }
        //lấy một bản ghi
        public function fetch($id){
            $conn = Connection::getInstance();
            $query  = $conn->prepare("SELECT * from tbl_user_admin where id=:id");
            $query->execute(array("id"=>$id));
            return $query->fetch();
        }
        //update bẩn ghi
        public function update($id){
            $name = $_POST["name"];
            $password = $_POST["password"];
            $conn = Connection::getInstance();

            $query  = $conn->prepare("UPDATE tbl_user_admin set name=:name where id=:id");
            $query->execute(array("id"=>$id,"name"=>$name));
            //nếu pass không rỗng thì update pass
            if($password !=""){
                //mã hóa pass bằng hàm md5
                $password = md5($password);
                $query  = $conn->prepare("UPDATE tbl_user_admin set password=:pass where id=:id");
                $query->execute(array("id"=>$id,"pass"=>$password));
            }

        }
        //insert ban ghi
		public function insert(){
			$name = $_POST["name"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			$email = $_POST["email"];
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into tbl_user_admin set name=:name, email=:email, password=:password");
			$query->execute(array("name"=>$name,"email"=>$email,"password"=>$password));			
        }
        public function deleteUser($id){
            $conn = Connection::getInstance();
            $query = $conn->prepare("DELETE from tbl_user_admin where id=:id");
			$query->execute(array("id"=>$id));
        }
        public function fetchAllCheck(){
            $conn = Connection::getInstance();
            $email = $_POST["email"];
            $query  = $conn->query("SELECT * from tbl_user_admin where email='$email' ");
            return $query->rowCount();
        }
    }

?>