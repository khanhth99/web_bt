    <!-- Scroll to Top Button-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>
    <footer id="block-footer" class="block-footer">
        <div class="top-ft">
            <div class="container">
                <div class="ft-main">
                    <div class="ft-item">
                        <div class="widget-footer" style="padding-right: 15px;">
                            <div class="logo-ft">
                                <a href="#"><img class="img-fluid" src="Assets/Frontend/images/logo2.png" alt=""></a>
                            </div>
                            <div class="contact-item clearfix">
                                HUYPHAM chuyên cung cấp thời trang chất lượng với mẫu mã đa dạng, phương châm khách hàng là thượng đế.
                            </div>
                        </div>
                    </div>
                    <div class="ft-item">
                        <div class="widget-footer">
                            <h5 class="header-font">Danh mục</h5>
                            <ul>
                                <?php
                                $conn = Connection::getInstance();
                                $query = $conn->query("select name,id from tbl_category order by id desc");
                                ?>
                                <?php foreach ($query as $row) : ?>
                                    <li><a href="products/category/<?php echo $rows->id; ?>/<?php echo $this->removeUnicode($rows->name); ?>"><?php echo $row->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div>
                    <div class="ft-item">
                        <div class="widget-footer">
                            <h5 class="header-font">Liên lạc</h5>
                            <div class="new-eclipse">

                                <div class="contact-item clearfix">
                                    <span>Email</span>
                                    <a href="#">huy15011999@gmail.com</a>
                                </div>
                                <div class="contact-item clearfix">
                                    <span>SĐT</span>
                                    <a href="#">0902137114</a>
                                </div>
                                <div class="contact-item clearfix">
                                    <span>Địa chỉ</span>
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-item">
                        <div class="widget-footer">
                            <h5 class="header-font">Giới thiệu</h5>
                            <ul>
                                <li><a href="about">Về chúng tôi</a></li>
                                <li><a href="TermsConditions">Điều khoản & Chính sách</a></li>
                                <li><a href="contact">Liên hệ</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </footer>
    <button onclick="topFunction()" id="backtotop" title="Go to top"><img id="imgbacktotop" src="Assets/Frontend/images/up-chevron.png" alt=""></button>
    <script>
        //Get the button
        var mybutton = document.getElementById("backtotop");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>