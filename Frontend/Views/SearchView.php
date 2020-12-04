<?php
$this->fileLayout = "Frontend/Views/Layout_search.php";
?>
<div class="heading-ctn">
    <div class="heading">
        <h1>
            <?php
            echo isset($search) ? $search: "";
            ?>
            <span>( sản phẩm)</span></h1>
        
    </div>

</div>
<div class="list-product">

    <div class="row">
        <?php foreach ($data as $rows1) : ?>
            <div class="col-sm-6 col-xl-4">
                <div class="product-box pink-shadow">
                    <div class="hot-wrap">
                        <div class="status-item main-yellow">-<?php echo $rows1->sale; ?>%</div>
                        <div class="flash-hot">Hot</div>
                    </div>
                    <div class="thumb">
                        <a class="pd-img" href="products/detail/<?php echo  $rows1->id; ?>/<?php echo  $rows1->category_id; ?>/<?php echo $this->removeUnicode($rows1->name);?>"><img src="Assets/upload/product/<?php echo $rows1->img1; ?>" alt=""></a>
                        <div class="action">
                            <button type="button" class="btn btn-addcart"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                            <a href="index.php?controller=Cart&action=add&id=<?php echo  $rows1->id; ?>" style="color: #424242;">Thêm vào giỏ</a>
                                <span>
                                    <a name="" id="" class="btn btn-like" href="javascript:void(0)" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                            <path d="M21.4921 3.00805C20.9349 2.45087 20.2734 2.00888 19.5455 1.70733C18.8175 1.40579 18.0373 1.25058 17.2493 1.25058C16.4613 1.25058 15.6811 1.40579 14.9531 1.70733C14.2252 2.00888 13.5637 2.45087 13.0065 3.00805C12.5865 3.42805 12.2701 3.90505 12.0001 4.40155C11.7338 3.88995 11.3942 3.41998 10.9921 3.00655C9.8668 1.8813 8.34064 1.24915 6.7493 1.24915C5.15796 1.24915 3.6318 1.8813 2.50655 3.00655C1.3813 4.1318 0.749146 5.65796 0.749146 7.2493C0.749146 8.84064 1.3813 10.3668 2.50655 11.4921L12.0001 20.7501L21.4921 11.4921C22.0495 10.9352 22.4918 10.274 22.7936 9.54609C23.0953 8.81821 23.2506 8.038 23.2506 7.25005C23.2506 6.46211 23.0953 5.68189 22.7936 4.95401C22.4918 4.22614 22.0495 3.56488 21.4921 3.00805V3.00805Z" stroke="#749ebb" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </span>
                            </button>
                            <div class="btn-viewmore"><a href="products/detail/<?php echo  $rows1->id; ?>/<?php echo  $rows1->category_id; ?>/<?php echo $this->removeUnicode($rows1->name);?>">Xem chi tiết</a></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4 class="name header-font">
                            <a href="products/detail/<?php echo  $rows1->id; ?>/<?php echo  $rows1->category_id; ?>/<?php echo $this->removeUnicode($rows1->name);?>"><?php echo $rows1->name; ?></a>
                        </h4>
                        <div class="price-ctn">
                            <div class="price-new header-font price-pink-color">
                                <span class="price"><?php echo number_format($rows1->price * (100 - $rows1->sale) / 100); ?> đ</span>
                            </div>
                            <div class="price-old header-font">
                                <span class="price"><?php echo number_format($rows1->price); ?> đ</span>
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
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="block-pagination">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                <li class="page-item active">
                    <a class="page-link" href="index.php?controller=Search&p=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
      
    </nav>
    
</div>
