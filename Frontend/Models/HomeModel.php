<?php
trait HomeModel{
    //sanr phẩm nổi bật
    public function productHot(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT name,img1,price,id,sale,category_id from tbl_product where hotproduct=1 order by id desc limit 0,6");
        return $query->fetchAll();
    }
    public function productNew(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT name,img1,price,id,sale,category_id from tbl_product where hotproduct=0 order by id desc limit 0,6");
        return $query->fetchAll();
    }
}
?>