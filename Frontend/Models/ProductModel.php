<?php 
trait ProductModel{
    public function fetchOne($id){
        $conn = Connection::getInstance();
        $query = $conn->prepare("SELECT * from tbl_product where id=:id");
        $query->execute(array("id"=>$id));

        return $query->fetch();
    }
    
    public function fetchAll($from, $pageSize){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
        $conn = Connection::getInstance();
        $query = $conn->query("select * from tbl_product where category_id=$id order by id desc limit $from, $pageSize");
        return $query->fetchAll();
    }

    public function totalRecord(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
        $conn = Connection::getInstance();
        $query = $conn->query("select id from tbl_product where category_id=$id");
        return $query->rowCount();
    }
    
    public function productCate(){
        $cate = isset($_GET["cate"])&&is_numeric($_GET["cate"])?$_GET["cate"]:0;
        $conn = Connection::getInstance();
        $query = $conn->query("select * from tbl_product where category_id=$cate order by id desc limit 0 , 6");
        return $query->fetchAll();
    }
}
