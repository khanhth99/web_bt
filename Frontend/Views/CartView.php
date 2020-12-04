<?php
$this->fileLayout = "Frontend/Views/Layout_phu.php";
?>
<div class="block-breadcrumb">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Trang chủ</a>
            <span class="breadcrumb-item active">Giỏ hàng</span>
        </nav>
    </div>
</div>
<!-- /.Breadcrumb -->

<div class="block-cart-page">
    <div class="container">
        <!-- <div class="block-cart-head">
                <h1 class="header-font">Giỏ hàng</h1>
                <div class="meta">( <span>6</span> sản phẩm )</div>
            </div> -->
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <form action="index.php?controller=Cart&action=update" method="post">

                    <div class="block-table-cart">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION["cart"] as $product) : ?>
                                    <tr>
                                        <td>
                                            <div class="cart-product-item">
                                                <div class="thumb"><img src="Assets/upload/product/<?php echo $product["img1"]; ?>" alt=""></div>
                                                <div class="cart-product-info">
                                                    <h6 class="name header-font"><a href="products/detail/<?php echo $product['id']; ?>/<?php echo  $product['category_id']; ?>/<?php echo $this->removeUnicode($product['name']);?>">Áo sơ mi dài tay Beige</a></h6>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong class="price-pink-color"><?php echo number_format($product["price"]); ?>đ</strong>
                                        </td>
                                        <td class="text-center">
                                            <div class="quantity">
                                                <input type="number" min="1" max="9" step="1" name="product_<?php echo $product["id"]; ?>" value="<?php echo $product["number"]; ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <strong class="price-pink-color"><?php echo number_format($product["price"] * $product["number"]); ?>đ</strong>
                                        </td>
                                        <td scope="row">
                                            <button type="button" class="btn btn-close">
                                                <a href="index.php?controller=Cart&action=action=delete&id=<?php echo $product["id"]; ?>">x</a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="block-cart-total">
                            <div class="pay-ctn">

                                <?php if ($this->cartNumber() >= 0) : ?>
                                    <div class="item-group">
                                        <a href="destroycart" class="btn" style="background-color: #ff7043;">Xóa toàn bộ</a>
                                    </div>
                                    <div class="item-group">
                                        <input type="submit" class="btn btn-paynow" value="Cập nhật">
                                    </div>
                                <?php endif; ?>
                                <div class="item-group">
                                    <a class="btn btn-continue" href="category">Tiếp tục mua sắm</a>
                                </div>
                            </div>
                            <div class="pay-ctn">
                                <div class="item-group">
                                    <p class="title-price header-font">Tổng tạm tính: </p>
                                    <strong class="price"><?php echo number_format($this->cartTotal()); ?>đ</strong>
                                </div>
                                <div class="item-group">
                                    <a class="btn btn-paynow" href="pay">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>