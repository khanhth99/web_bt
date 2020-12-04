<?php
trait SearchModel
{
    public function searchAll($from, $pageSize)
    {
        $search = $_POST["search"];
        $search_arr = explode(' ', $search);
        $search_cc  = implode('%', $search_arr);
        $conn = Connection::getInstance();
        $query = $conn->prepare("SELECT * FROM tbl_product  WHERE name LIKE '%$search_cc%' limit $from, $pageSize");
        $query->execute();
        return $query->fetchAll();
    }
    public function totalRecord(){
        $search = $_POST["search"];
        $search_arr = explode(' ', $search);
        $search_cc  = implode('%', $search_arr);
        $conn = Connection::getInstance();
        $query = $conn->prepare("SELECT * FROM tbl_product  WHERE name LIKE '%$search_cc%'");
        $query->execute();
        return $query->rowCount();
    }
}
