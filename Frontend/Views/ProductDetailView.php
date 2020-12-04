<?php
$this->fileLayout = "Frontend/Views/Layout_phu.php";
?>
<?php if (isset($record->id)) : ?>
    <div class="block-breadcrumb">
        <div class="container">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="#">Trang chủ</a>
                <a class="breadcrumb-item" href="#">Sản phẩm</a>
                <span class="breadcrumb-item active"><?php echo $record->name; ?></span>
            </nav>
        </div>
    </div>
    <div class="block-pages-productdetail">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="gallery">
                        <div class="owl-1">
                            <!-- lặp ảnh ra đây -->
                            <div class="img"><img class="img-fluid" src="Assets/upload/product/<?php echo $record->img1; ?>" alt=""></div>
                            <?php if (isset($record->img2)) : ?>
                                <div class="img"><img class="img-fluid" src="Assets/upload/product/<?php echo $record->img2; ?>" alt=""></div>
                            <?php endif; ?>
                            <?php if (isset($record->img3)) : ?>
                                <div class="img"><img class="img-fluid" src="Assets/upload/product/<?php echo $record->img3; ?>" alt=""></div>
                            <?php endif; ?>
                        </div>
                        <!-- lặp ảnh ra đây ảnh nhỏ -->
                        <div class="owl-2">
                            <div class="thumb"><img class="img-fluid" src="Assets/upload/product/<?php echo $record->img1; ?>" alt=""></div>
                            <?php if (isset($record->img2)) : ?>
                                <div class="thumb"><img class="img-fluid" src="Assets/upload/product/<?php echo $record->img2; ?>" alt=""></div>
                            <?php endif; ?>
                            <?php if (isset($record->img3)) : ?>
                                <div class="thumb"><img class="img-fluid" src="Assets/upload/product/<?php echo $record->img3; ?>" alt=""></div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <article>
                        <div class="block-detail">
                            <h1 class="product-name header-font"><?php echo $record->name; ?></h1>
                            <div class="rating-ctn ">
                                <fieldset class="rate">
                                    <input id="rate2-star5" type="radio" name="rate2" value="5" />
                                    <label for="rate2-star5" title="Awesome">5</label>

                                    <input id="rate2-star5-half" type="radio" name="rate2" value="4.5" checked />
                                    <label class="star-half" for="rate2-star5-half" title="Excellent">4.5</label>

                                    <input id="rate2-star4" type="radio" name="rate2" value="4" />
                                    <label for="rate2-star4" title="Very good">4</label>

                                    <input id="rate2-star3-half" type="radio" name="rate2" value="3.5" />
                                    <label class="star-half" for="rate2-star3-half" title="Good">3.5</label>

                                    <input id="rate2-star3" type="radio" name="rate2" value="3" />
                                    <label for="rate2-star3" title="Satisfactory">3</label>

                                    <input id="rate2-star2-half" type="radio" name="rate2" value="2.5" />
                                    <label class="star-half" for="rate2-star2-half" title="Unsatisfactory">2.5</label>

                                    <input id="rate2-star2" type="radio" name="rate2" value="2" />
                                    <label for="rate2-star2" title="Bad">2</label>

                                    <input id="rate2-star1-half" type="radio" name="rate2" value="1.5" />
                                    <label class="star-half" for="rate2-star1-half" title="Very bad">1.5</label>

                                    <input id="rate2-star1" type="radio" name="rate2" value="1" />
                                    <label for="rate2-star1" title="Awful">1</label>

                                    <input id="rate2-star0-half" type="radio" name="rate2" value="0.5" />
                                    <label class="star-half" for="rate2-star0-half" title="Horrific">0.5</label>
                                </fieldset>
                                <span class="num-rate">(15 đánh giá)</span>
                            </div>
                            <div class="price-wrap">
                                <span class="price-new"><?php echo number_format($record->price * (100 - $record->sale) / 100); ?> VND</span>
                                <span class="price-old"><?php echo number_format($record->price); ?> VND</span>
                            </div>
                            <div class="desc">
                                <p>
                                    <?php echo $record->name; ?>
                                </p>
                            </div>
                            <div class="total-product">
                                <p>Số lượng sản phẩm <span><?php echo $record->total; ?></span></p>
                            </div>
                            <hr>

                            <form class="block-custom-change mb-4" action="#">
                                

                                <div class="form-action">
                                    <button type="button" class="btn btn-addcart header-font">
                                    <a href="index.php?controller=Cart&action=add&id=<?php echo  $record->id; ?>" style="color: #424242;">Thêm vào giỏ</a>
                                    </button>
                                    <button type="button" class="btn btn-buy header-font">
                                    <a href="index.php?controller=Cart&action=add&id=<?php echo  $record->id; ?>" style="color: #424242;">Mua hàng ngay</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
            <!-- Comment -->
            <div class="block-description">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link header-font active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-font" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            Đánh giá sản phẩm
                        </a>
                    </li>
                   
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <?php echo $record->content; ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="800" data-numposts="10"></div>
                    </div>
                </div>
            </div>
            <!-- /.Comment -->


            <!-- Block-saleoff-product -->

            <section id="block-related-product" class="block-product block-related-product">
                <div class="block-head header-font">
                    <h3>Sản phẩm cùng loại</h3>
                </div>
                <div class="owl-carousel owl-slide owl-saleoff-product">
          
                    <?php foreach ($data1 as $rows) : ?>
                        <!-- product -->
                        <div class="product-box pink-shadow">
                            <div class="hot-wrap">
                                <div class="status-item main-yellow">-<?php echo $rows->sale?>%</div>
                                <div class="flash-hot">Hot</div>
                            </div>
                            <div class="thumb">
                                
                                <a class="pd-img" href="products/detail/<?php echo  $rows->id; ?>/<?php echo  $rows->category_id; ?>/<?php echo $this->removeUnicode($rows->name);?>"><img src="Assets/upload/product/<?php echo $rows->img1; ?>" alt=""></a>
                                <div class="action">
                                    <button type="button" class="btn btn-addcart"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <a href="index.php?controller=Cart&action=add&id=<?php echo  $rows->id; ?>" style="color: #424242;">Thêm vào giỏ</a>
                                        <span>
                                            <a name="" id="" class="btn btn-like" href="javascript:void(0)" role="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                    <path d="M21.4921 3.00805C20.9349 2.45087 20.2734 2.00888 19.5455 1.70733C18.8175 1.40579 18.0373 1.25058 17.2493 1.25058C16.4613 1.25058 15.6811 1.40579 14.9531 1.70733C14.2252 2.00888 13.5637 2.45087 13.0065 3.00805C12.5865 3.42805 12.2701 3.90505 12.0001 4.40155C11.7338 3.88995 11.3942 3.41998 10.9921 3.00655C9.8668 1.8813 8.34064 1.24915 6.7493 1.24915C5.15796 1.24915 3.6318 1.8813 2.50655 3.00655C1.3813 4.1318 0.749146 5.65796 0.749146 7.2493C0.749146 8.84064 1.3813 10.3668 2.50655 11.4921L12.0001 20.7501L21.4921 11.4921C22.0495 10.9352 22.4918 10.274 22.7936 9.54609C23.0953 8.81821 23.2506 8.038 23.2506 7.25005C23.2506 6.46211 23.0953 5.68189 22.7936 4.95401C22.4918 4.22614 22.0495 3.56488 21.4921 3.00805V3.00805Z" stroke="#749ebb" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </span>
                                    </button>
                                    <div class="btn-viewmore"><a href="products/detail/<?php echo  $rows->id; ?>/<?php echo  $rows->category_id; ?>/<?php echo $this->removeUnicode($rows->name);?>">Xem chi tiết</a></div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4 class="name header-font">
                                    <a href="products/detail/<?php echo  $rows->id; ?>/<?php echo  $rows->category_id; ?>/<?php echo $this->removeUnicode($rows->name);?>"><?php echo $rows->name; ?></a>
                                </h4>
                                <div class="price-ctn">
                                    <div class="price-new header-font price-pink-color">
                                        <span class="price"><?php echo number_format($rows->price * (100 - $rows->sale) / 100); ?> đ</span>
                                    </div>
                                    <div class="price-old header-font">
                                        <span class="price"><?php echo number_format($rows->price); ?> đ</span>
                                    </div>
                                    <div class="rating-ctn ">
                                        <fieldset class="rate">
                                            <input id="rate2-star5" type="radio" name="rate2" value="5" />
                                            <label for="rate2-star5" title="Awesome">5</label>

                                            <input id="rate2-star5-half" type="radio" name="rate2" value="4.5" />
                                            <label class="star-half" for="rate2-star5-half" title="Excellent">4.5</label>

                                            <input id="rate2-star4" type="radio" name="rate2" value="4" />
                                            <label for="rate2-star4" title="Very good">4</label>

                                            <input id="rate2-star3-half" type="radio" name="rate2" value="3.5" />
                                            <label class="star-half" for="rate2-star3-half" title="Good">3.5</label>

                                            <input id="rate2-star3" type="radio" name="rate2" value="3" />
                                            <label for="rate2-star3" title="Satisfactory">3</label>

                                            <input id="rate2-star2-half" type="radio" name="rate2" value="2.5" />
                                            <label class="star-half" for="rate2-star2-half" title="Unsatisfactory">2.5</label>

                                            <input id="rate2-star2" type="radio" name="rate2" value="2" />
                                            <label for="rate2-star2" title="Bad">2</label>

                                            <input id="rate2-star1-half" type="radio" name="rate2" value="1.5" />
                                            <label class="star-half" for="rate2-star1-half" title="Very bad">1.5</label>

                                            <input id="rate2-star1" type="radio" name="rate2" value="1" />
                                            <label for="rate2-star1" title="Awful">1</label>

                                            <input id="rate2-star0-half" type="radio" name="rate2" value="0.5" />
                                            <label class="star-half" for="rate2-star0-half" title="Horrific">0.5</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                    <?php endforeach; ?>
                </div>
            </section>
            <!-- /.Block-saleoff-product -->

        </div>
    </div>
<?php endif; ?>