<?php

$conn = new PDO("mysql:host=localhost;dbname=project_php_shop", "root", "");
$conn->exec("set names 'utf8'");


$row = $_POST['row'];
$rowperpage = 3;
// selecting posts
$query = 'SELECT * FROM tbl_blog limit ' . $row . ',' . $rowperpage;
$query = $conn->prepare($query);

//Thiết lập kiểu dữ liệu trả về
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();
$result = $query->fetchAll();
$html = '';

foreach ($result as $row) {
    $id = $row['id'];
    $title = $row['title'];
    $img = $row['img'];
    $total_view = $row['total_view'];
    $create_at = $row['create_at'];
    $content = $row['content'];
    $shortcontent = substr($content, 0, 160) . "...";

    // Creating HTML structure
    $html .= '<div class="post" id="post' . $id . '" >';
    $html .= ' <div class="row" style="margin-bottom: 10px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">';
    $html .= ' <div class="col-md-4">';
    $html .= ' <a class="" href="index.php?controller=BlogDetail&id=<?php echo  $rows->id; ?>">';
    $html .= '<img class="img-fluid" style="width: 250px; float: left;" src="Assets/upload/blog/'.$img.'" alt="">';
    $html .= ' </a>';
    $html .= ' </div>';
    $html .= '<div class="col-md-8">';
    $html .= '<div class="content" style="float: left;">';
    $html .= ' <h5 id="new-title" class="name-blog">';
    $html .= '<a href="index.php?controller=BlogDetail&id=<?php echo  $rows->id; ?>">'.$title.'</a>';
    $html .= '</h5>';
    $html .= '<div class="author-view">';
    $html .= ' <div class="meta">'.$shortcontent.'</div>';
    $html .= '</div>';
    $html .= '<div class="author-view">';
    $html .= ' <div class="meta">';
    $html .= ' <a href="#">Duy Khánh</a>| <span class="date">'. $create_at.'</span>';
    $html .= '</div>';
    $html .= ' <div class="meta"><span> <a href="#">'.$total_view.'</a> views</a><i class="fa fa-eye"></i></span></div>';
    $html .= ' </div>';
    $html .= '  </div>
            </div>
        </div>
        </div>';
}

echo $html;
