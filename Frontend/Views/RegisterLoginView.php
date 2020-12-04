<?php
$this->fileLayout = "Frontend/Views/Layout_phu.php";
?>
<?php
if(isset($_POST['submit'])){
   $captcha;
   if(isset($_POST['g-recaptcha-response'])){
      $captcha = $_POST['g-recaptcha-response'];
   }
   if(!$captcha){
      echo '<h2>Hay xac nhan CAPTCHA</h2>';
   }else{
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcvbbsUAAAAAJ4jEi_cCvvziae_GXd-M7N9UnOi".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
      if($response.success == false){
         echo '<h2>SPAM!</h2>';
      }else{
         echo '<h2>'.$name.' Khong phai robot :)</h2>';
      }
   }
}
?>
<div class="block-user-login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="">
                    <div class="block-right">
                        <h4>Đăng ký tài khoản</h4>
                        <div class="form-login">
                            <form id="myForm" method="post" action="<?php echo $formAction; ?> ">
                                <div class="">
                                    <div class="form-group ">
                                        <input type="text" name="guest_name" id="" class="form-control " placeholder="Họ và tên" aria-describedby="helpId" required></div>
                                </div>
                                <div class="pass-ctn">
                                    <div class="form-group "><input type="email" name="guest_email" id="" class="form-control" placeholder="Email" aria-describedby="helpId" required></div>
                                    <div class="form-group "><input type="text" name="guest_phone" id="" class="form-control" placeholder="Số điện thoại" aria-describedby="helpId" required></div>
                                </div>
                                <div class="pass-ctn">
                                    <div class="form-group ">
                                        <input type="password" name="guest_password" id="pass" class="form-control input-pass" placeholder="Mật khẩu" aria-describedby="helpId" required>

                                    </div>
                                    <div class="form-group" style="margin-bottom: -16px;">
                                        <input type="password" name="guest_password" id="repass" class="form-control input-pass" placeholder="Nhập lại mật khẩu" aria-describedby="helpId" required> <br>

                                    </div>
                                </div>
                                <div class="pass-ctn">
                                    <div id="loi_repass" class="form-group" style="font-size:12px;"></div>
                                </div>
                                <div class="">
                                    <div class="form-group "><input type="text" name="guest_address" id="" class="form-control" placeholder="Địa chỉ" aria-describedby="helpId" required></div>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LcvbbsUAAAAAHMW3G_iBoiANDWXPimTae3IV25t"></div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-submit" style="background-color: #0091ea; width:100%;" value="Đăng ký">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    // function validateForm() {
    //     var check = true;
    //     document.getElementById("loi_repass").innerHTML = "";
    //     document.getElementById("repass").style = "";
    //     if (document.forms["myForm"]["pass"].value != document.forms["myForm"]["repass"].value) {
    //         document.getElementById("loi_repass").innerHTML = "Mật khẩu không khớp";
    //         document.getElementById("loi_repass").style.color = '#b71c1c';
    //         check = false;
    //     }
    //     return check;
    // }
    $(document).ready(function() {
        $("#repass").blur(function() {
            var pass = $("#pass").val();
            var repass = $("#repass").val();
            if (pass != repass) {
                $("#loi_repass").html("Mật khẩu không khớp");
                $("#loi_repass").css("color", "#b71c1c");
            }else{
                $("#loi_repass").empty();
            }
            if (repass == "") {
                $("#loi_repass").empty();
            }
        })
    })
</script>