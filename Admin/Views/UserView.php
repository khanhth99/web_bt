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
        <li class="breadcrumb-item active">List User</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div style="margin-bottom:5px;">
            <a href="index.php?area=Admin&controller=User&action=add" class="btn btn-primary">Add user</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table"></i>
            List User</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $rows) : ?>
                            <tr>
                                <td><?php echo $rows->name; ?></td>
                                <td><?php echo $rows->email; ?></td>
                                <td style="text-align:center; width: 131px;">
                                    <button type="button" style="padding: 1px; font-size: 12px;"  class="btn btn-warning"><a style="color: #fff; font-size: 12px; text-decoration: none;" href="index.php?area=Admin&controller=User&action=edit&id=<?php echo $rows->id; ?>"><i class="fa fa-pencil"></i> Edit</a></button>
                                    &nbsp;
                                    <button type="button" style="padding: 1px; font-size: 12px;"  class="btn btn-danger"><a style="color: #fff; font-size: 12px; text-decoration: none;" href="index.php?area=Admin&controller=User&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="far fa-trash-alt"></i> Delete</a></button>
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
                        <li class="page-item">
                            <a href="index.php?area=Admin&controller=User&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>

                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>