<?php
$this->fileLayout = "Frontend/Views/Layout_phu.php";
?>

   <!-- Breadcrumb -->
    <div class="block-breadcrumb">
        <div class="container">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="index-2.html">Trang chủ</a>
                <span class="breadcrumb-item active">Tài khoản</span>
            </nav>
        </div>
    </div>
    <!-- /.Breadcrumb -->

    <div class="block-account-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="block-cart-head">
                        <h1 class="header-font">Lịch sử mua hàng</h1>
                    </div>
                    <div class="block-table-history">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Giá trị đơn</th>
                                    <th>Thanh toán</th>
                                    <th>Trạng thái đơn hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block-user-infor">
                        <h5 class="header-font text-color">Thông tin tài khoản</h5>
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <td scope="row">Họ và tên:</td>
                                    <td><?php if(isset($_SESSION["name"])) {echo $_SESSION["name"];}else{echo "Đăng nhập";} ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Địa chỉ:</td>
                                    <td><?php if(isset($_SESSION["address"])) {echo $_SESSION["address"];}else{echo "Đăng nhập";} ?></td>
                                </tr>
                                <tr>
                                    <td>điện thoại:</td>
                                    <td><?php if(isset($_SESSION["phone"])) {echo $_SESSION["phone"];}else{echo "Đăng nhập";} ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?php if(isset($_SESSION["email"])) {echo $_SESSION["email"];}else{echo "Đăng nhập";} ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a name="" id="" class="btn btn-block btn-setting" href="setting-address.html" role="button">Cài đặt địa chỉ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>