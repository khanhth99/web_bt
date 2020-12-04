<?php
    trait CategoryModel{
        public function fetchAll($from, $pageSize){
            $conn = Connection::getInstance();
            $query  = $conn->query("SELECT * from tbl_category order by id desc  limit $from, $pageSize");
            return $query->fetchAll();
        }
        
        //tính tổng số lượng bản ghi
        public function totalRecord(){
            $conn = Connection::getInstance();
            $query  = $conn->query("SELECT id from tbl_category ");
            return $query->rowCount();
        }
        //lấy một bản ghi
        public function fetch($id){
            $conn = Connection::getInstance();
            $query  = $conn->prepare("SELECT * from tbl_category where id=:id");
            $query->execute(array("id"=>$id));
            // trả về tổng số lượng bản ghi
            return $query->fetch();
        }
        //update bẩn ghi
        public function update($id){
            $name = $_POST["name"];
            $conn = Connection::getInstance();
            $query  = $conn->prepare("UPDATE tbl_category set name=:name where id=:id");
            $query->execute(array("id"=>$id,"name"=>$name));
            //nếu pass không rỗng thì update pass
        }
		public function insert(){
            $name = $_POST["name"];
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into tbl_category set name=:name");
			$query->execute(array("name"=>$name));			
        }
        public function deleteCategory($id){
            $conn = Connection::getInstance();
            $query = $conn->prepare("DELETE from tbl_category where id=:id");
			$query->execute(array("id"=>$id));
        }
    }

?>