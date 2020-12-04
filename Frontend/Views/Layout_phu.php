<!doctype html>
<html lang="en">



<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="http://localhost:10/projectshop/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Assets/Frontend/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Frontend/node_modules/swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/Frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/override.css">
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/index.css">
    <script type="text/javascript" src="Assets/Frontend/js/jquery-3.4.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
</head>

<body>

    <!-- Header -->
    <?php include "Frontend/Views/HeaderView.php"; ?>
    <!-- /.Header -->

    <!-- overlay -->
    <div class="block-overlay"></div>
    <!-- /.overlay -->

    <?php echo $this->view; ?>

    <!-- block-footer -->
    <?php include "Frontend/Views/FooterView.php";?>
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