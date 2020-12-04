<?php
//kế thừa layout1.php để laod vào đây
$this->fileLayout = "Admin/Views/Layout1.php";
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add edit blog/li>
    </ol>
    <div class="col-md-12">
        <div class="panel panel-primary">

            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Title</div>
                        <div class="col-md-10">
                            <input type="text" value="<?php echo isset($record->title) ? $record->title : ""; ?>" name="title" class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Descripition</div>
                        <div class="col-md-10">
                            <textarea name="discription" id="discription">
                            <?php echo isset($record->discription) ? $record->discription : ""; ?>
                        </textarea>
                            <script>
                                CKEDITOR.replace('discription', {
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

                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Upload image</div>
                        <div class="col-md-10">
                            <input type="file" name="img">
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <?php if (isset($record->img) && $record->img != "" && file_exists("Assets/upload/blog/" . $record->img)) : ?>
                                <img src="Assets/upload/blog/<?php echo $record->img; ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- end rows -->
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