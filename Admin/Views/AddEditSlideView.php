<?php
//kế thừa layout1.php để laod vào đây
$this->fileLayout = "Admin/Views/Layout1.php";
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add edit SLIDE</li>
    </ol>
    <div class="col-md-12">
        <div class="panel panel-primary">

            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">

                    <!-- upload img -->

                    <div style="border: 1px solid #212121; margin-bottom: 5px;">
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Upload image SLIDE</div>
                            <div class="col-md-10">
                                <input type="file" name="img" style="width: 300px;">
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- lấy ảnh ra nếu có -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <?php if (isset($record->img) && $record->img != "" && file_exists("Assets/upload/slide/" . $record->img)) : ?>
                                    <img src="Assets/upload/slide/<?php echo $record->img; ?>" alt="" style="width: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Season</div>
                        <div class="col-md-10">
                            <input type="text" value="<?php echo isset($record->slideseason) ? $record->slideseason : ""; ?>" name="slideseason" class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Name</div>
                        <div class="col-md-5">
                            <input type="text" value="<?php echo isset($record->slidename) ? $record->slidename : ""; ?>" name="slidename" class="form-control" required>
                        </div>

                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">slidesale</div>
                        <div class="col-md-5">
                            <input type="text" value="<?php echo isset($record->slidesale) ? $record->slidesale : ""; ?>" name="slidesale" class="form-control" required>
                        </div>

                    </div>
                    <!-- end rows -->


                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Desciption</div>
                        <div class="col-md-10">
                            <textarea name="slidedescription" id="desciption">
                        <?php echo isset($record->slidedescription) ? $record->slidedescription : ""; ?>
                        </textarea>
                            <script>
                                CKEDITOR.replace('desciption');
                            </script>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="status">status</label>
                            <input type="checkbox" name="status" id="status" <?php if (isset($record->status) && $record->status == 1) : ?>checked<?php endif; ?>>
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