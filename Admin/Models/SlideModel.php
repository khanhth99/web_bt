<?php
trait SlideModel
{
    //danh sách các bản ghi: từ bản ghi nào  đến bản ghi nào
    public function fetchAll()
    {
        $conn = Connection::getInstance();
        $query  = $conn->query("SELECT * from slider order by id desc ");
        return $query->fetchAll();
    }

    
    //lấy một bản ghi
    public function fetch($id)
    {
        $conn = Connection::getInstance();
        $query  = $conn->prepare("SELECT * from slider where id=:id");
        $query->execute(array("id" => $id));
        // trả về tổng số lượng bản ghi
        return $query->fetch();
    }
    //update bẩn ghi
    public function update($id)
    {
       
        $slideseason = $_POST["slideseason"];
        $slidename = $_POST["slidename"];
        $slidesale = $_POST["slidesale"];
        $status = isset($_POST["status"]) ? 1 : 0;
       
        $slidedescription = $_POST["slidedescription"];
        $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        $conn = Connection::getInstance();
        $query = $conn->prepare("update slider set slideseason=:slideseason,
        slidename=:slidename, slidesale=:slidesale, status=:status,slidedescription=:slidedescription where id=:id");
        $query->execute(array(
             "slideseason" => $slideseason,
            "slidename" => $slidename, "slidesale" => $slidesale,
             "status" => $status,"slidedescription"=>$slidedescription, "id" => $id
        ));
        //nếu user upload ảnh
        if ($_FILES["img"]["name"] != "") {
            $query = $conn->prepare("SELECT img from slider where id=:id");
            $query->execute(array("id" => $id));
            $old_img = $query->fetch();
            if (isset($old_img) && $old_img->img != "" && file_exists("Assets/upload/slide/" . $old_img->img))
                unlink("Assets/upload/slide/" . $old_img->img);
            //--
            $img = time() . $_FILES["img"]["name"];
            //upload ảnh
            move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/upload/slide/$img");
            $query = $conn->prepare("update slider set img=:img where id=:id");
            $query->execute(array(
                "img" => $img,
                "id" => $id
            ));
        }
        
    }
    //insert ban ghi
    public function insert()
    {
        $slideseason = $_POST["slideseason"];
        $slidename = $_POST["slidename"];
        $slidesale = $_POST["slidesale"];
        $status = isset($_POST["status"]) ? 1 : 0;
        $slidedescription = $_POST["slidedescription"];
        $img = "";
        //nếu user upload ảnh
        if ($_FILES["img"]["name"] != "") {
            $img = time() . $_FILES["img"]["name"];
            //upload ảnh
            move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/upload/slide/$img");
        }
        
        $conn = Connection::getInstance();
        $query = $conn->prepare("INSERT INTO slider set slideseason=:slideseason,
           slidename=:slidename, slidesale=:slidesale, status=:status,slidedescription=:slidedescription,img=:img");
        $query->execute(array(
             "slideseason" => $slideseason,
            "slidename" => $slidename, "slidesale" => $slidesale, "status" => $status,"slidedescription"=>$slidedescription,  "img" => $img
        ));
    }
    public function deleteSlide($id)
    {
        $conn = Connection::getInstance();
        //--
        //lấy ảnh cũ để xóa
        $query = $conn->prepare("SELECT img from slider where id=:id");
        $query->execute(array("id" => $id));
        $old_img = $query->fetch();
        if (isset($old_img) && $old_img->img != "" && file_exists("Assets/upload/slide/" . $old_img->img))
            unlink("Assets/upload/slide/" . $old_img->img);
       
        $query = $conn->prepare("DELETE from slider where id=:id");
        $query->execute(array("id" => $id));
    }
    
}
