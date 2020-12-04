<?php
//kế thừa layout1.php để laod vào đây
$this->fileLayout = "Admin/Views/Layout1.php";
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add edit product</li>
    </ol>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Name</div>
                        <div class="col-md-10">
                            <input type="text" value="<?php echo isset($record->name) ? $record->name : ""; ?>" name="name" class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Giá</div>
                        <div class="col-md-5">
                            <input type="text" value="<?php echo isset($record->price) ? $record->price : ""; ?>" name="price" class="form-control" required>
                        </div>
                        <div class="col-md-2">VNĐ</div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Category</div>
                        <div class="col-md-10">
                            <select name="category_id" class="form-control" style="width: 300px;">
                                <option value="0"></option>
                                <?php
                                $conn = Connection::getInstance();
                                $query = $conn->query("SELECT * from tbl_category order by id desc");
                                $category = $query->fetchAll();
                                foreach ($category as $rows) :
                                    ?>
                                    <option value="<?php echo $rows->id; ?>" <?php if (isset($record->category_id) && $record->category_id == $rows->id) : ?> selected <?php endif; ?>> <?php echo $rows->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Content</div>
                        <div class="col-md-10">
                            <textarea name="content" id="content">
                        <?php echo isset($record->content) ? $record->content : ""; ?>
                        </textarea>
                            <script>
                                CKEDITOR.replace('content', {
                                    filebrowserBrowseUrl: 'Assets/Admin/ckfinder/ckfinder.html',
                                    filebrowserImageBrowseUrl: 'Assets/Admin/ckfinder/ckfinder.html?Type=Images',
                                    filebrowserUploadUrl: 'Assets/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                    filebrowserImageUploadUrl: 'Assets/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                    filebrowserWindowWidth: '1000',
                                    filebrowserWindowHeight: '700'
                                });
                            </script>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        
                        <div class="col-md-3">
                            <label for="status">status</label>
                            <input type="checkbox" name="status" id="status" <?php if (isset($record->status) && $record->status == 1) : ?>checked<?php endif; ?>>
                        </div>
                        <div class="col-md-3">
                            <label for="hotproduct">Hot</label>
                            <input type="checkbox" name="hotproduct" id="hotproduct" <?php if (isset($record->hotproduct) && $record->hotproduct == 1) : ?>checked<?php endif; ?>>
                        </div>
                        <div class="col-md-3">
                            <label for="sale">Sale %</label>
                            <input type="number" name="sale" id="sale" value="<?php if (isset($record->sale)) {
                                                                                    echo $record->sale;
                                                                                } ?>">
                        </div>
                        <div class="col-md-3">
                        <label for="total">Total</label>
                            <input type="number" name="total" id="total" value="<?php if (isset($record->total)) {
                                                                                    echo $record->total;
                                                                                } ?>">
                        </div>
                    </div>
                    <!-- end rows -->

                    <!-- upload img -->


                    <div style="border: 1px solid #212121; margin-bottom: 5px;">
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Upload image active</div>
                            <div class="col-md-10">
                                <input type="file" name="img1" style="width: 300px;">
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- lấy ảnh ra nếu có -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <?php if (isset($record->img1) && $record->img1 != "" && file_exists("Assets/upload/product/" . $record->img1)) : ?>
                                    <img src="Assets/upload/product/<?php echo $record->img1; ?>" alt="" style="width: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div style="border: 1px solid #212121; margin-bottom: 5px;">
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Upload image 1</div>
                            <div class="col-md-10">
                                <input type="file" name="img2" style="width: 300px;">
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- lấy ảnh ra nếu có -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <?php if (isset($record->img2) && $record->img2 != "" && file_exists("Assets/upload/product/" . $record->img2)) : ?>
                                    <img src="Assets/upload/product/<?php echo $record->img2; ?>" alt="" style="width: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div style="border: 1px solid #212121; margin-bottom: 5px;">
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Upload image 2</div>
                            <div class="col-md-10">
                                <input type="file" name="img3" style="width: 300px;">
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- lấy ảnh ra nếu có -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <?php if (isset($record->img3) && $record->img3 != "" && file_exists("Assets/upload/product/" . $record->img3)) : ?>
                                    <img src="Assets/upload/product/<?php echo $record->img3; ?>" alt="" style="width: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input type="submit" value="Process" class="btn btn-primary">
                        </div>
                    </div>
                    <!-- end rows -->
                </form>
            </div>
        </div>
    </div>
</div>