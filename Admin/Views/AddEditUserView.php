<?php
//kế thừa layout1.php để laod vào đây
$this->fileLayout = "Admin/Views/Layout1.php";
?>
<script>
    $(document).ready(function() {
        $("#email").blur(function() {
            var email = $("#email").val();
            $.post("index.php?area=Admin&controller=User&action=checkAddUser", {
                email: email
            }, function(data) {
                if (data == 0) {
                    $("#checkemail").html("Email hợp lệ");
                    $("#checkemail").css("color", "blue");
                } else {
                    $("#checkemail").html("Email đã tồn tại");
                    $("#checkemail").css("color", "red");
                }
                if (email == "") {
                    $("#checkemail").empty();
                }
            });

        })

    })
</script>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add edit user</li>
    </ol>
    <div class="col-md-12" class="breadcrumb">
        <div class="panel panel-primary">

            <div class="panel-body">
                <form method="post" action="<?php echo $formAction; ?>">
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Name</div>
                        <div class="col-md-10">
                            <input type="text" value="<?php echo isset($record->name) ? $record->name : ""; ?>" name="name" class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Email</div>
                        <div class="col-md-10">
                            <input id="email" type="email" <?php if (isset($record->email)) : ?> disabled <?php endif; ?> value="<?php echo isset($record->email) ? $record->email : ""; ?>" name="email" class="form-control" required>
                            <span id="checkemail"></span>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Password</div>
                        <div class="col-md-10">
                            <input type="password" <?php if (isset($record->email)) : ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else : ?> required <?php endif; ?> name="password" class="form-control">
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input type="submit" value="Register" class="btn btn-primary btn-block">
                        </div>
                    </div>
                    <!-- end rows -->
                </form>

            </div>
        </div>
    </div>
</div>