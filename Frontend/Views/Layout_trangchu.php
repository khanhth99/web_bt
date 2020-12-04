<!doctype html>
<html lang="en">



<head>
    <title>On SHOP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <base href="http://localhost:10/projectshop/"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Assets/Frontend/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Frontend/node_modules/swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/Frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/override.css">
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/index.css">
    <script type="text/javascript" src="Assets/Frontend/js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <!-- Header -->
    <?php include "Frontend/Views/HeaderView.php"; ?>

    <div class="block-home-pages">

        <!-- Slideshow -->
        <?php include "Frontend/Views/SlideView.php"; ?>
        <!-- /.Slideshow -->
        <section id="banner-product" class="banner-ads-img">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="banner-product-item">
                            <div class="thumb">
                                <img class="thumb-h" src="Assets/Frontend/images/banner_1.png" alt="">
                            </div>
                            <div class="content-item">
                                <div class="content">
                                    <h4>STYLYSH <strong>JEN’S</strong></h4>
                                    <h4> <strong>SAVE UP TO <span>60%</span></strong> </h4>
                                    <a href="product-detail.html">Shop now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <div class="banner-product-item">
                            <div class="thumb">
                                <img class="thumb-h" src="Assets/Frontend/images/banner_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <!-- Block-saleoff-product -->

            <!-- /.block-top-sale-product -->
            

            <!-- /.block-new-product -->
            <?php echo $this->view; ?>
            <!-- block-registor-email -->
            <section id="block-registor-email" class="block-registor-email">
                <div class="registor-email-ctn">
                    <h5>ĐĂNG KÝ ĐỂ NHẬN TIN KHUYẾN MẠI</h5>
                    <div class="form-regis">
                        <form action="#">
                            <div class="form-group custom-input main-font">
                                <div class="input-item">
                                    <input type="text" id="name" required />
                                    <label for="name">Nhập email của bạn</label>
                                </div>
                                <button type="submit" class="btn btn-submit">
                                    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" fill="#d4b69f" viewBox="0 0 268.832 268.832" style="enable-background:new 0 0 268.832 268.832;" xml:space="preserve">
                                        <g>
                                            <path d="M265.171,125.577l-80-80c-4.881-4.881-12.797-4.881-17.678,0c-4.882,4.882-4.882,12.796,0,17.678l58.661,58.661H12.5
                                        c-6.903,0-12.5,5.597-12.5,12.5c0,6.902,5.597,12.5,12.5,12.5h213.654l-58.659,58.661c-4.882,4.882-4.882,12.796,0,17.678
                                        c2.44,2.439,5.64,3.661,8.839,3.661s6.398-1.222,8.839-3.661l79.998-80C270.053,138.373,270.053,130.459,265.171,125.577z" />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /.block-registor-email -->


            <!--  -->

        </div>
    </div>
    <!-- block-footer -->
    <?php include "Frontend/Views/FooterView.php"; ?>
    <!-- /.block-footer -->
    <!-- </div> -->
    <!-- POPUP -->
    <div id="modal-container">
        <div class="modal-background">

            <div class="container modal">
                <div class="content-popup">
                    <section class="popup-search">
                        <!-- Search -->
                        <div class="block-header-search">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control content-font" placeholder="Tìm kiếm sản phẩm" aria-describedby="helpId">
                                <button type="submit" class="btn btn-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path d="M21.4999 21.5L15.8999 15.9" stroke="#969696" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.5 18.5C14.4706 18.5 18.5 14.4706 18.5 9.5C18.5 4.52944 14.4706 0.5 9.5 0.5C4.52944 0.5 0.5 4.52944 0.5 9.5C0.5 14.4706 4.52944 18.5 9.5 18.5Z" stroke="#969696" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- /.Search -->
                    </section>
                </div>
            </div>
        </div>
    </div>

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