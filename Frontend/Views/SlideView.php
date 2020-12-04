<section id="block-slideshow" class="block-slideshow">
    <div class="container">
        <div class="owl-carousel owl-slide owl-banner" data-time="4000">
            <?php
            $conn = Connection::getInstance();
            $query = $conn->query("select * from slider where status=1 order by id desc");
            $slide = $query->fetchAll();
            foreach($slide as $rows) :
            ?>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 order-lg-6">
                        <img src="Assets/upload/slide/<?php echo $rows->img; ?>" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="slide-detail-preview">
                            <div class="season">
                                <h6><?php echo $rows->slideseason; ?></h6>
                            </div>
                            <div class="product-banner-name">
                                <h4><?php echo $rows->slidename; ?></h4>
                            </div>
                            <div class="sale-upto">
                                <h4><?php echo $rows->slidesale; ?></h4>
                            </div>
                            <div class="descript">
                                <p><?php echo $rows->slidedescription; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>