<?php
//kế thừa layout1.php để laod vào đây
$this->fileLayout = "Admin/Views/Layout1.php";
// echo isset($record1->name)?$record1->name:"no";
// echo isset($record->name)?$record->name:"no222";
// <?php if($result->parent==$_GET["id"]){echo "selected";}else{ echo ""; } 
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add edit category</li>
    </ol>
    <div class="col-md-12">
        <div class="panel panel-primary">

            <div class="panel-body">
                <form method="post" action="<?php echo $formAction; ?>">
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Name</div>
                        <div class="col-md-10">
                            <input type="text" value="<?php echo isset($record->name) ? $record->name : ""; ?>" name="name" class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->

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