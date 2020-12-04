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
        <li class="breadcrumb-item active">List order</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div style="margin-bottom:5px;">
            <a href="index.php?area=Admin&controller=Cart&action=sent&id=<?php echo $id; ?>" class="btn btn-primary">Xác nhận đã giao hàng</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table"></i>
            List order</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $rows) : ?>
                            <tr>
                                <td style="width:100px; "><img style="width:100px; " src="Assets/upload/product/<?php echo $rows->img ?>" alt=""></td>
                                <td><?php echo $rows->name; ?></td>
                                <th><?php echo number_format($rows->price); ?></th>
                                <th><?php echo $rows->number; ?></th>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>