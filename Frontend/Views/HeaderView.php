<header id="block-header" class="block-header sticky-top">
	<div class="container">
		<div class="header-main">
			<div id="block-logo-header" class="logo">
				<a href="home"><img src="Assets/Frontend/images/logo2.png" alt=""></a>
			</div>
			<div id="block-action-header">
				<div class="user-action">
					
					
				</div>

				<div class="cart">
					<a class="text-color link-custom" href="cart">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						<?php
						$cartNumber = 0;
						if (isset($_SESSION["cart"]) == true) {
							foreach ($_SESSION["cart"] as $product) {
								$cartNumber = $cartNumber + $product["number"];
							}
						}
						?>
						<span class="count-product"><?php echo $cartNumber; ?></span>
					</a>
				</div>
				<!-- Search -->
				<div class="">
					<div class="form-group form-inline">
						<form action="index.php?controller=Search" method="post">
							<input type="text" name="search" id="search_update" class="form-control content-font" placeholder="Tìm kiếm sản phẩm" aria-describedby="helpId">
							<button type="submit" class="btn btn-search">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<!-- /.Search -->

				<div class="open-sidemenu">
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /.Header -->

<!-- menu -->
<nav id="sidenav" class="main-menu">
	<ul>
		<li class="header-font active">
			<a href="home">Trang chủ</a>
		</li>
		<li class="header-font">
			<a href="products/category/3/thoi-trang-nam.html">Sản phẩm</a>
			<svg class="accodition" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
				<path d="M0.669162 0.629922C0.615535 0.685235 0.572992 0.750919 0.543966 0.82322C0.51494 0.89552 0.5 0.973019 0.5 1.05129C0.5 1.12955 0.51494 1.20705 0.543966 1.27935C0.572992 1.35165 0.615535 1.41734 0.669162 1.47265L4.58694 5.52101C4.64051 5.57638 4.70412 5.62031 4.77414 5.65028C4.84416 5.68025 4.91922 5.69568 4.99501 5.69568C5.07081 5.69568 5.14587 5.68025 5.21589 5.65028C5.28591 5.62031 5.34952 5.57638 5.40309 5.52101L9.32087 1.47265C9.37663 1.41784 9.42121 1.35207 9.45197 1.27919C9.48272 1.20632 9.49904 1.12783 9.49996 1.04834C9.50088 0.96885 9.48637 0.889977 9.4573 0.816368C9.42823 0.742759 9.38519 0.675904 9.3307 0.619744C9.27622 0.563583 9.2114 0.519253 9.14006 0.489368C9.06872 0.459483 8.99231 0.444647 8.91533 0.445735C8.83835 0.446822 8.76236 0.46381 8.69184 0.4957C8.62132 0.527588 8.5577 0.573733 8.50472 0.631411L4.99501 4.25841L1.48531 0.631412C1.43183 0.57594 1.3683 0.531895 1.29833 0.501796C1.22836 0.471697 1.15333 0.456133 1.07753 0.455995C1.00173 0.455856 0.926654 0.471147 0.856583 0.500991C0.786511 0.530834 0.722824 0.574646 0.669162 0.629922Z" fill="#25292C" />
			</svg>
			<ul class="sub-menu">
				<?php
				$conn = Connection::getInstance();
				$query = $conn->query("select * from tbl_category order by id desc");
				?>
				<?php foreach ($query as $rows) : ?>
					<li><a href="products/category/<?php echo $rows->id; ?>/<?php echo $this->removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</li>
		
		<li class="header-font">
			<a href="about">Giới thiệu</a>
		</li>
		<li class="header-font">
			<a href="contact">Liên hệ</a>
		</li>
	</ul>
</nav>
<!-- /.menu -->
