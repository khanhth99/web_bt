<?php
$this->fileLayout = "Frontend/Views/Layout_phu.php";
?>
<?php

?>
<!-- Breadcrumb -->
<div class="block-breadcrumb">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Trang chủ</a>
            <span class="breadcrumb-item active">Giỏ hàng</span>
            <span class="breadcrumb-item active">Đặt hàng</span>
        </nav>
    </div>
</div>
<!-- /.Breadcrumb -->

<div class="block-pay-page">
    <div class="container">
        <div class="row">

            <div class="col-md-8">

                <div class="block-payment-info">
                    <div class="wrap-box">
                        <div class="payment-info mb-5">
                            <h4 class="mb-4">Thông tin </h4>
                            <form class="form-payment" method="post" action="index.php?controller=Cart&action=doCheckOut">
                                <div class="form-group mb-3">
                                    <div class="input-item">
                                        <input type="text" id="name" name="fullname" value="<?php if (isset($_SESSION["name"])) {
                                                                                                echo $_SESSION["name"];
                                                                                            } ?>" required />
                                        <label for="name">Họ tên</label>
                                    </div>

                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-item">
                                        <input type="text" id="email" name="email" value="<?php if (isset($_SESSION["email"])) {
                                                                                                echo $_SESSION["email"];
                                                                                            } ?>" required />
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="text" id="phone" value="<?php if (isset($_SESSION["phone"])) {
                                                                                    echo $_SESSION["phone"];
                                                                                } ?>" name="phone" required />
                                        <label for="phone">Số điện thoại</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-item full">
                                        <input type="text" id="address" name="address" value="<?php if (isset($_SESSION["address"])) {
                                                                                                    echo $_SESSION["address"];
                                                                                                } ?>" required />
                                        <label for="address">Địa chỉ</label>
                                    </div>
                                </div>


                        </div>
                        <hr>
                        <!--  -->

                        <!--  -->
                        <div class="create-account">
                            <?php if (!isset($_SESSION["email"])) : ?>
                                <h6> <span><img class="img-fluid" src="images/speaker.png" alt=""></span> Tạo tài khoản từ thông tin liên hệ</h6>
                                <p>Tào tài khoản bằng cách nhập mật khẩu dưới đây. Nếu bạn đã có tài khoản, vui lòng <a href="login">đăng nhập</a> ! </p>
                            <?php endif; ?>
                            

                            <div class="box-radio">
                                <label class="custom-check">
                                    <input class="input" type="checkbox" name="radio" required>
                                    <span>Tôi đồng ý với chính sách & điều khoản của công ty!</span>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="block-payment-cart">
                    <div class="wrap-box">
                        <h4 class="title">Đơn hàng của bạn</h4>
                        <div class="right-ctn">
                            <div class="block-code">
                                <div class="total-pay">
                                    <span>Tổng tạm tính:</span>
                                    <strong><?php echo number_format($this->cartTotal()); ?> đ</strong>
                                </div>
                                <div class="ship-price">
                                    <span>Phí ship:</span>
                                    <strong><?php if ($this->cartTotal() > 200000) {
                                                echo "Miễn phí vận chuyển cho đơn hàng của bạn";
                                            } else {
                                                echo "20.000 đ";
                                            } ?></strong>
                                </div>

                               

                            </div>

                            <div class="total-price">
                                <span>Tổng thanh toán:</span>
                                <strong><?php echo number_format($this->cartTotal() + 20000); ?> VND</strong>
                            </div>
                           
                            <div class="cart-action">
                                <a href="index.php?controller=Cart&action=account" style="color:#fff;">
                                    <button id="ok" name="smb" type="submit" class="btn btn-payment-success"> Thanh toán</button></a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php

?>
<!-- <script>
    $(document).ready(function {
        $("#ok").click(function {
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var address = $("#address").val();
            alert(name);
            $.post("index.php?controller=Cart&action=doCheckOut", {
                name: name,
                email: email,
                phone: phone,
                address: address
            }, function(data) {
                if(data==1)
                {
                    window.location.href = "home";
                }
            })

        })
    })
</script> -->