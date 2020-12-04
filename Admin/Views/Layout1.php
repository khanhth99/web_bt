<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý sản phẩm</title>

    <!-- Custom fonts for this template-->
    <link href="Assets/Admin/Layout/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <base href="http://localhost:10/projectshop/"> -->
    <!-- Page level plugin CSS-->
    <link href="Assets/Admin/Layout/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Assets/Admin/Layout/css/sb-admin.css" rel="stylesheet">

    <script type="text/javascript" src="Assets/Admin/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="Assets/Frontend/js/jquery-3.4.1.min.js"></script>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.php?area=Admin&controller=Product">Quản lý bán hàng</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Xin chào: <?php echo $_SESSION["name_admin"]; ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="admin/success">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown active show">
                <a class="nav-link dropdown-toggle " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu show" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a style="<?php if ($_GET['controller'] == 'Category') echo 'background: #42a5f5; color: #fff;'; ?>" class="dropdown-item" href="index.php?area=Admin&controller=Category">
                        Danh mục sản phẩm
                    </a>
                    <a style="<?php if ($_GET['controller'] == 'Product') echo 'background: #42a5f5; color: #fff;'; ?>" class="dropdown-item" href="index.php?area=Admin&controller=Product">
                        Danh sách sản phẩm
                    </a>
                    <a style="<?php if ($_GET['controller'] == 'User') echo 'background: #42a5f5; color: #fff;'; ?>" class="dropdown-item" href="index.php?area=Admin&controller=User">
                        Quản lý user
                    </a>
                    
                    <a style="<?php if ($_GET['controller'] == 'Slide') echo 'background: #42a5f5; color: #fff;'; ?>" class="dropdown-item" href="index.php?area=Admin&controller=Slide">
                        Edit Slide
                    </a>
                    <a class="dropdown-item" href="index.php?area=Admin&controller=Logout">
                        Đăng xuất
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Order</h6>
                    <a style="<?php if ($_GET['controller'] == 'Cart') echo 'background: #42a5f5; color: #fff;'; ?>" class="dropdown-item" href="index.php?area=Admin&controller=Cart&action=order">
                        Danh sách đơn hàng
                    </a>

                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Add User</h6>
                    <a class="dropdown-item" href="index.php?area=Admin&controller=User&action=add">Register</a>


                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?area=Admin&controller=Logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <?php
            //xuat noi dung cua view trong MVC ra day
            echo $this->view;
            ?>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn muốn đăng xuất?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php?area=Admin&controller=Logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="Assets/Admin/Layout/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/Admin/Layout/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Assets/Admin/Layout/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="Assets/Admin/Layout/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/Admin/Layout/vendor/datatables/jquery.dataTables.js"></script>
    <script src="Assets/Admin/Layout/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Assets/Admin/Layout/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="Assets/Admin/Layout/js/demo/datatables-demo.js"></script>
    <script src="Assets/Admin/Layout/js/demo/chart-area-demo.js"></script>

</body>

</html>