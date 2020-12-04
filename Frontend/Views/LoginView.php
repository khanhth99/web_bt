<?php
$this->fileLayout = "Frontend/Views/Layout_phu.php";
?>
<script>
    $(document).ready(function() {
        $("#email").blur(function() {
            var email = $("#email").val();
            $.post("index.php?controller=Login&action=doAddCheck", {email: email}, function(data) {
                if (data == 0) {
                    $("#checkemail").html("Email không tồn tại mời bạn đăng ký.");
                    $("#checkemail").css("color", "#f44336 ");
                } else {
                    $("#checkemail").empty();
                }
                if (email == "") {
                    $("#checkemail").empty();
                }
            });
        })
    })
</script>
<div class="block-user-login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="">
                    <div class="block-right">
                        <h4>Đăng nhập</h4>
                        <div class="form-login form-forgot-password">
                            <form method="post" action="index.php?controller=Login&action=doLogin">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                                    <span id="checkemail"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-pass" placeholder="Mật khẩu" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label class="custom-check main-font">
                                        <input class="input" type="radio" name="radio">Ghi nhớ
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="forgot-pass" style="float: left;"><a href="forgot-password.html">Quên mật khẩu</a></div>
                                    <div class="social-sec"  style="float: left;margin-left: 400px;margin-top: -23px;">
                                        <a href="#"><img src="Assets/Frontend/images/fb-icon.png" alt="facebook"></a>
                                        <a href="#"><img src="Assets/Frontend/images/gplus-icon.png" alt="google"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="submit_user" type="submit" class="btn btn-submit" value="Đăng nhập" style="background-color: #0091ea; width:100%;">

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>