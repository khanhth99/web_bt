<!doctype html>
<html lang="en">



<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="http://localhost:10/projectshop/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Assets/Frontend/css/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/Frontend/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Frontend/node_modules/swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/Frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/override.css">
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/index.css">
</head>

<body>
    <?php include "Frontend/Views/HeaderView.php"; ?>

    <!-- overlay -->
    <div class="block-overlay"></div>
    <!-- /.overlay -->
    <!-- Breadcrumb -->
    <div class="block-breadcrumb">
        <div class="container">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="#">Trang chủ</a>
                <span class="breadcrumb-item active">Sản phẩm</span>
            </nav>
        </div>
    </div>
    <!-- /.Breadcrumb -->
    <!-- Product pages -->
    <div class="block-product-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-3">
                    <div class="block-list-product">
                        <?php echo $this->view; ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- Side bar -->
                    <div id="block-sidebar" class="block-sidebar">

                        <?php
                        include "Frontend/Controllers/CategoryController.php";
                        $obj =  new CategoryController();
                        $obj->index();
                        ?>

                    </div>
                    <!-- /.Side bar -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.Product pages -->

    <!-- block-footer -->
    <?php include "Frontend/Views/FooterView.php"; ?>
    <!-- /.block-footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Assets/Frontend/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="Assets/Frontend/js/jquery-ui.min.js"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="Assets/Frontend/js/jquery.matchHeight.js" type="text/javascript"></script>
    <script src="Assets/Frontend/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="Assets/Frontend/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="Assets/Frontend/node_modules/swiper/dist/js/swiper.min.js"></script>
    <script src="Assets/Frontend/js/index.js"></script>
</body>



</html>