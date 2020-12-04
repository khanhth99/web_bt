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
        <li class="breadcrumb-item active">List product</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div style="margin-bottom:5px;">
            <a href="index.php?area=Admin&controller=Product&action=add" class="btn btn-primary">Add product</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table"></i>
            List product</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th style="width:80px;">Image</th>
                            <th>Name</th>
                            <th>Giá (VNĐ)</th>
                            <th style="width: 150px;">Category</th>
                            <th style="width: 100px;">Trạng thái</th>
                            <th style="width:50px;" style="text-align: center;">Hot</th>
                            <th style="width:50px;" style="text-align: center;">Sale</th>
                            <th style="width:50px;" style="text-align: center;">Total</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="width:80px;">Image</th>
                            <th>Name</th>
                            <th>Giá (VNĐ)</th>
                            <th style="width: 150px;">Category</th>
                            <th style="width: 100px;">Trạng thái</th>
                            <th style="width:50px;" style="text-align: center;">Hot</th>
                            <th style="width:50px;" style="text-align: center;">Sale</th>
                            <th style="width:50px;" style="text-align: center;">Total</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $rows) : ?>
                            <tr>
                                <td><?php if ($rows->img1 != "" && file_exists("Assets/upload/product/" . $rows->img1)) : ?>
                                        <img src="Assets/upload/product/<?php echo $rows->img1; ?>" alt="" style="width: 100px;">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $rows->name; ?></td>
                                <td><b><?php echo number_format($rows->price); ?></b></td>
                                <td>
                                    <?php
                                        //tu day co the goi thang ham trong model
                                        $category = $this->getCategory($rows->category_id);
                                        echo isset($category->name) ? $category->name : "";
                                        ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php
                                        if ($rows->status == 1) {
                                            echo '<span class="fa fa-check" style="color: blue;"> Còn hàng</span>';
                                        } else {
                                            echo '<span class="fa fa-times" style="color: red;"> Hết hàng</span>';
                                        }
                                        ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php
                                        if ($rows->hotproduct == 1) {
                                            echo '<i class="fab fa-hotjar" style="color: red;"></i>';
                                        }
                                        ?>
                                </td>
                                <td style="text-align: center;"><?php echo $rows->sale . " %"; ?></td>
                                <td style="text-align: center;"><?php echo $rows->total; ?></td>
                                <td style="text-align:center; width: 131px;">
                                    <a style="color: #fff; font-size: 12px; text-decoration: none;" href="index.php?area=Admin&controller=Product&action=edit&id=<?php echo $rows->id; ?>"><button type="button" style="padding: 1px; font-size: 12px;"  class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button></a>
                                    &nbsp;
                                    <a style="color: #fff; font-size: 12px; text-decoration: none;" href="index.php?area=Admin&controller=Product&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><button type="button" style="padding: 1px; font-size: 12px;"  class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button></a>
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