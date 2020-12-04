<?php
trait CategoryModel{
    public function getAll(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * from tbl_category order by id DESC");
        return $query->fetchAll();
    }
}

?>