<?php
//ke thua layout1.php de load vao day
$this->fileLayout = "Admin/Views/Layout1.php";
?>
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">SLIDE</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=Admin&controller=Slide&action=add" class="btn btn-primary">Add SLIDE</a>
    </div>
        <div class="card-header">
            <i class="fas fa-table"></i>
            SLIDE</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th style="width:80px;">Image</th>
                    <th>Season</th>
                    <th>Name</th>
                    <th style="width: 200px;">Desciption</th>
                    <th style="width:100px;" style="text-align: center;">Sale name</th>
                    <th style="width: 50px;">Trạng thái</th>

                    <th style="width:100px;"></th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($data as $rows) : ?>
                    <tr>
                        <td><?php if ($rows->img != "" && file_exists("Assets/upload/slide/" . $rows->img)) : ?>
                                <img src="Assets/upload/slide/<?php echo $rows->img; ?>" alt="" style="width: 100px;">
                            <?php endif; ?>
                        </td>
                        <td><?php echo $rows->slideseason; ?></td>
                        <td><b><?php echo $rows->slidename; ?></b></td>
                        <td><?php echo $rows->slidedescription; ?></td>
                        <td><?php echo $rows->slidesale; ?></td>
                        <td style="text-align: center;">
                            <?php
                                if ($rows->status == 1) {
                                    echo '<span class="fa fa-check" style="color: blue;"> Hiện thị</span>';
                                } else {
                                    echo '<span class="fa fa-times" style="color: red;"> Ẩn</span>';
                                }
                                ?>
                        </td>

                        <td style="text-align:center; width: 131px;">
                            <button type="button" style="padding: 1px; font-size: 12px;"  class="btn btn-warning"><a style="color: #fff; font-size: 12px; text-decoration: none;" href="index.php?area=Admin&controller=Slide&action=edit&id=<?php echo $rows->id; ?>"><i class="fas fa-pencil-alt"></i> Edit</a></button>
                            &nbsp;
                            <button type="button" style="padding: 1px; font-size: 12px;"  class="btn btn-danger"><a style="color: #fff; font-size: 12px; text-decoration: none;" href="index.php?area=Admin&controller=Slide&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="far fa-trash-alt"></i> Delete</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>