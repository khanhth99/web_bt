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
        <div class="card-header">
            <i class="fas fa-table"></i>
            List order</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Địa chỉ</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Địa chỉ</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $rows) : ?>
                            <tr>
                                <td><?php echo $rows->fullname; ?></td>
                                <td><?php echo $rows->email; ?></td>
                                <td><?php echo $rows->phone; ?></td>
                                <td><?php echo $rows->address; ?></td>
                                <td><?php echo $rows->create_at; ?></td>
                                <td>
                                    <?php if ($rows->status == 1) : ?>
                                        <span class="glyphicon glyphicon-check">Đã giao</span>
                                    <?php else : ?>
                                        <span class="glyphicon glyphicon-check">Chưa giao</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="index.php?area=Admin&controller=Cart&action=OrderDetail&id=<?php echo $rows->order_id; ?>"> Chi tiết</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <style type="text/css">
                    .pagination {
                        padding: 0px;
                        margin: 0px;
                    }
                </style>
                <ul class="pagination">
                    <li class="page-item">
                        <a href="" class="page-link">Trang</a>

                    </li>
                    <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                        <li class="page-item <?php if ($_GET["p"] == $i) {
                                                        echo "active";
                                                    } ?>">
                            <a href="index.php?area=Admin&controller=Product&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>