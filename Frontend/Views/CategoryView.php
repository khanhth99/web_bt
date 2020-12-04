<div class="widget-sidebar">
    <h4 class="widget-title">
        Danh mục sản phẩm
    </h4>
    <div class="widget-content">
        <div class="menu-side">
            <ul>
                <?php foreach ($data as $rows) : ?>
                    <li><a class="a-normal" href="products/category/<?php echo $rows->id; ?>/<?php echo $this->removeUnicode($rows->name);?>"><?php echo $rows->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>