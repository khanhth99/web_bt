<?php
trait ProductModel
{
    //danh sách các bản ghi: từ bản ghi nào  đến bản ghi nào
    public function fetchAll($from, $pageSize)
    {
        $conn = Connection::getInstance();
        $query  = $conn->query("SELECT * from tbl_product order by id desc  limit $from, $pageSize");
        return $query->fetchAll();
    }
    //tính tổng số lượng bản ghi
    public function totalRecord()
    {
        $conn = Connection::getInstance();
        $query  = $conn->query("SELECT id from tbl_product ");
        return $query->rowCount();
    }
    //lấy một bản ghi
    public function fetch($id)
    {
        $conn = Connection::getInstance();
        $query  = $conn->prepare("SELECT * from tbl_product where id=:id");
        $query->execute(array("id" => $id));
        return $query->fetch();
    }
    //update bẩn ghi
    public function update($id)
    {
        $name = $_POST["name"];
        $category_id = $_POST["category_id"];
        $price = $_POST["price"];
        $content = $_POST["content"];
        $status = isset($_POST["status"]) ? 1 : 0;
        $hotproduct = isset($_POST["hotproduct"]) ? 1 : 0;
        $sale = $_POST["sale"];
        $total = $_POST["total"];
        $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        $conn = Connection::getInstance();
        $query = $conn->prepare("update tbl_product set name=:name, category_id=:category_id,
        price=:price, content=:content, status=:status,hotproduct=:hotproduct,sale=:sale,total=:total where id=:id");
        $query->execute(array(
            "name" => $name, "category_id" => $category_id,
            "price" => $price, "content" => $content, "status" => $status,"hotproduct"=>$hotproduct,"sale"=>$sale,"total"=>$total, "id" => $id
        ));
        //nếu user upload ảnh
        if ($_FILES["img1"]["name"] != "") {
            //--
            //lấy ảnh cũ để xóa
            $query = $conn->prepare("SELECT img1 from tbl_product where id=:id");
            $query->execute(array("id" => $id));
            $old_img = $query->fetch();
            if (isset($old_img) && $old_img->img1 != "" && file_exists("Assets/upload/product/" . $old_img->img1))
                unlink("Assets/upload/product/" . $old_img->img1);
            //--
            $img1 = time() . $_FILES["img1"]["name"];
            //upload ảnh
            move_uploaded_file($_FILES["img1"]["tmp_name"], "Assets/upload/product/$img1");
            $query = $conn->prepare("update tbl_product set img1=:img1 where id=:id");
            $query->execute(array(
                "img1" => $img1,
                "id" => $id
            ));
        }
        if ($_FILES["img2"]["name"] != "") {
            //--
            //lấy ảnh cũ để xóa
            $query = $conn->prepare("SELECT img2 from tbl_product where id=:id");
            $query->execute(array("id" => $id));
            $old_img = $query->fetch();
            if (isset($old_img) && $old_img->img2 != "" && file_exists("Assets/upload/product/" . $old_img->img2))
                unlink("Assets/upload/product/" . $old_img->img2);
            //--
            $img2 = time() . $_FILES["img2"]["name"];
            move_uploaded_file($_FILES["img2"]["tmp_name"], "Assets/upload/product/$img2");
            $query = $conn->prepare("update tbl_product set img2=:img2 where id=:id");
            $query->execute(array(
                "img2" => $img2,
                "id" => $id
            ));
        }
        if ($_FILES["img3"]["name"] != "") {
            //--
            //lấy ảnh cũ để xóa
            $query = $conn->prepare("SELECT img3 from tbl_product where id=:id");
            $query->execute(array("id" => $id));
            $old_img = $query->fetch();
            if (isset($old_img) && $old_img->img3 != "" && file_exists("Assets/upload/product/" . $old_img->img3))
                unlink("Assets/upload/product/" . $old_img->img3);
            //--
            $img3 = time() . $_FILES["img3"]["name"];
            move_uploaded_file($_FILES["img3"]["tmp_name"], "Assets/upload/product/$img3");
            $query = $conn->prepare("update tbl_product set img3=:img3 where id=:id");
            $query->execute(array(
                "img3" => $img3,
                "id" => $id
            ));
        }
    }
    //insert ban ghi
    public function insert()
    {
        $name = $_POST["name"];
        $category_id = $_POST["category_id"];
        $price = $_POST["price"];
        $content = $_POST["content"];
        $status = isset($_POST["status"]) ? 1 : 0;
        $hotproduct = isset($_POST["hotproduct"]) ? 1 : 0;
        $sale = $_POST["sale"];
        $total = $_POST["total"];
        $img1 = "";
        $img2 = "";
        $img3 = "";

        if ($_FILES["img1"]["name"] != "") {
            $img1 = time() . $_FILES["img1"]["name"];
            //upload ảnh
            move_uploaded_file($_FILES["img1"]["tmp_name"], "Assets/upload/product/$img1");
        }
        if ($_FILES["img2"]["name"] != "") {
            $img2 = time() . $_FILES["img2"]["name"];
            //upload ảnh
            move_uploaded_file($_FILES["img2"]["tmp_name"], "Assets/upload/product/$img2");
        }
        if ($_FILES["img3"]["name"] != "") {
            $img3 = time() . $_FILES["img3"]["name"];
            //upload ảnh
            move_uploaded_file($_FILES["img3"]["tmp_name"], "Assets/upload/product/$img3");
        }
        $conn = Connection::getInstance();
        $query = $conn->prepare("INSERT INTO tbl_product set name=:name, category_id=:category_id,
           price=:price, content=:content, status=:status,hotproduct=:hotproduct,sale=:sale,total=:total,img1=:img1, img2=:img2, img3=:img3");
        $query->execute(array(
            "name" => $name, "category_id" => $category_id,
            "price" => $price, "content" => $content, "status" => $status,"hotproduct"=>$hotproduct,"sale"=>$sale,"total"=>$total,  "img1" => $img1, "img2" => $img2, "img3" => $img3
        ));
    }
    public function deleteProduct($id)
    {
        $conn = Connection::getInstance();
        //--
        //lấy ảnh cũ để xóa
        $query = $conn->prepare("SELECT img,img1,img2,img3,img4 from tbl_product where id=:id");
        $query->execute(array("id" => $id));
        $old_img = $query->fetch();
        
        if (isset($old_img) && $old_img->img1 != "" && file_exists("Assets/upload/product/" . $old_img->img1))
            unlink("Assets/upload/product/" . $old_img->img1);
        if (isset($old_img) && $old_img->img2 != "" && file_exists("Assets/upload/product/" . $old_img->img2))
            unlink("Assets/upload/product/" . $old_img->img2);
        if (isset($old_img) && $old_img->img3 != "" && file_exists("Assets/upload/product/" . $old_img->img3))
            unlink("Assets/upload/product/" . $old_img->img3);
       
        //--
        $query = $conn->prepare("DELETE from tbl_product where id=:id");
        $query->execute(array("id" => $id));
    }
    //lấy danh mục tin tức
    public function  getCategory($category_id)
    {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT name from tbl_category where id=$category_id");
        return $query->fetch();
    }
}
