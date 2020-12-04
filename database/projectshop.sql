-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 03:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slideseason` varchar(500) NOT NULL,
  `slidename` varchar(500) NOT NULL,
  `slidesale` varchar(500) NOT NULL,
  `slidedescription` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slideseason`, `slidename`, `slidesale`, `slidedescription`, `status`, `img`) VALUES
(1, 'Xuân Hè', 'Túi Xách Tay', 'SALE UP TO 50%', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, saepe dolore aliquam culpa necessitatibus rerum et ratione assumenda ea dicta! In, iusto dolorem. Optio deleniti commodi voluptate quaerat! Assumenda, quia.z</p>\r\n', 0, '1569039456slider.png'),
(2, 'Xuân Hè', 'Túi Xách Tay', 'SALE UP TO 50%', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, saepe dolore aliquam culpa necessitatibus rerum et ratione assumenda ea dicta! In, iusto dolorem. Optio deleniti commodi voluptate quaerat! Assumenda, quia.z	', 1, '1569039456slider.png'),
(4, 'Thu đông', 'Áo công sở', 'sale up to 10%', '<p>&aacute;o mới về nha mn</p>\r\n', 1, '1569042360blog_2.png'),
(5, 'Đông', 'Áo choàng', 'sale up to 10%', '<p>Những mẫu v&aacute;y len nữ si&ecirc;u xinh được c&aacute;c thiếu nữ diện v&ocirc; c&ugrave;ng điệu đ&agrave; v&agrave; thanh tho&aacute;t. Bạn chắc chắn sẽ thật nổi bật v&agrave; thu h&uacute;t khi diện ch&uacute;ng. H&atilde;y c&ugrave;ng ch&uacute;ng m&igrave;nh tham khảo những mẫu...</p>\r\n', 1, '1569046125fas1.png'),
(6, 'Hè 2019', 'Mặc áo ấm mùa hè!!', 'sale up to 15%', '<p><em>Th&ocirc;ng tin từ Trung t&acirc;m Kh&iacute; tượng thủy văn Quốc gia, ng&agrave;y 9-5, trời H&agrave; Nội nhiều m&acirc;y, đ&ecirc;m v&agrave; s&aacute;ng c&oacute; mưa, mưa r&agrave;o. Nhiệt độ thấp nhất từ 23 - 25 độ C. C&aacute;i lạnh đến đột ngột giữa ng&agrave;y h&egrave; th&aacute;ng 5 khiến nhiều người d&acirc;n thủ đ&ocirc; phải mặc th&ecirc;m những chiếc &aacute;o kho&aacute;c khi ra đường.</em></p>\r\n', 1, '1569053203blog_13.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'PHỤ KIỆN TRANG SỨC'),
(2, 'THỜI TRANG NỮ'),
(3, 'THỜI TRANG NAM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `fullname`, `email`, `address`, `phone`) VALUES
(1, 'Nguyễn Duy Khánh', 'khanhth99@gmail.com', 'hà nội', '0986457328');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email`
--

CREATE TABLE `tbl_email` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0: chưa giao hàng - 1: đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `create_at`, `status`) VALUES
(1, 1, '2020-12-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `price`, `number`) VALUES
(5, 3, 5, 12000000, 1),
(6, 3, 4, 13000000, 1),
(7, 4, 25, 195000, 3),
(8, 5, 25, 195000, 3),
(9, 6, 25, 195000, 1),
(10, 7, 25, 195000, 1),
(11, 8, 20, 1000, 1),
(12, 9, 25, 195000, 2),
(13, 10, 22, 195000, 1),
(14, 12, 24, 195000, 1),
(15, 13, 20, 1000, 1),
(16, 17, 20, 1000, 1),
(17, 18, 23, 195000, 1),
(18, 19, 20, 1000, 1),
(19, 20, 20, 1000, 2),
(20, 21, 24, 195000, 1),
(21, 22, 24, 195000, 1),
(22, 1, 25, 195000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `hotproduct` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `category_id`, `name`, `content`, `price`, `status`, `hotproduct`, `sale`, `total`, `img1`, `img2`, `img3`) VALUES
(31, 3, 'Áo khoác cổ cao lót lông Ultralight CU045', '<p>&aacute;o l&oacute;t l&ocirc;ng nam</p>\r\n', 5900000, 1, 1, 10, 10, '160708764550562742792_75b839e886_k.jpg', '160708764550562648752_ecac16f55c_k.jpg', '160708764550562516911_fd9c59a184_k.jpg'),
(32, 3, 'áo thun nam cổ tròn form rộng thời trang Everest', '<ul>\r\n	<li>Chất liệu thun mềm mại co gi&atilde;n tốt , tho&aacute;ng m&aacute;t</li>\r\n	<li>Thiết kế thời trang ph&ugrave; hợp xu hướng hiện nay</li>\r\n	<li>Kiểu d&aacute;ng đa phong c&aacute;ch</li>\r\n	<li>Đường may tinh tế sắc sảo</li>\r\n	<li>Áo thun được thi&ecirc;́t k&ecirc;́ v&ecirc;̉ đẹp trẻ trung năng đ&ocirc;̣ng nhưng kh&ocirc;ng kém ph&acirc;̀n mạnh mẽ.</li>\r\n	<li>Áo được thi&ecirc;́t k&ecirc;́ đẹp, chu&acirc;̉n form, đường may sắc xảo, vải dày, mịn, th&acirc;́m hút m&ocirc;̀', 120000, 0, 1, 15, 12, '160708802585f862e7c31bf638c79ead6b98110438.jpg_720x720q80.jpg_.webp', '', ''),
(33, 3, ' Áo nỉ in họa tiết Triangle TW009', '', 350000, 0, 1, 20, 0, '160708811350512570356_cee968dbe8_k.jpg', '160708811350512735317_effba26cea_k.jpg', ''),
(34, 3, 'Quần nỉ trơn basic BS200', '', 330000, 1, 0, 15, 0, '160708820550478024483_093408a4c5_k.jpg', '160708820550478731431_c2eb817a25_k.jpg', ''),
(35, 2, 'Chân váy xếp ly MIDI', '<ul>\r\n	<li>H&agrave;ng b&ecirc;n shop bao vải v&agrave; chất nh&eacute;!</li>\r\n	<li>M&agrave;u sắc trang nh&atilde;, dễ phối đồ</li>\r\n	<li>H&igrave;nh để dưới nền chụp, hoặc treo tr&ecirc;n s&agrave;o lu&ocirc;n l&agrave; h&igrave;nh thật của shop. Hoặc Video clips lu&ocirc;n l&agrave; thật.</li>\r\n	<li>K&iacute;ch thước OneSize thường ph&ugrave; hợp cho c&aacute;c bạn tầm 40kg - 52kg (Đối với c&aacute;c bạn c&oacute; th&acirc;n h&igrave;nh c&acirc;n đối)</li>\r\n	<li>Khi nhận được h&agrave;ng, c&a', 150000, 1, 0, 0, 10, '16070886912e369b0094700c37218fb7db67302b60.jpg_720x720q80.jpg_.webp', '', ''),
(36, 3, 'Sơ mi ngắn tay họa tiết Torano TB143', '', 330000, 0, 1, 10, 11, '160708875549991072391_be80302438_k.jpg', '', ''),
(37, 3, 'Sơ mi ngắn tay bamboo họa tiết Leaves ', '', 350000, 0, 1, 30, 10, '1607088832img_2005_49837259371_oa.jpg', '', ''),
(38, 3, 'Áo len cổ tròn phối vai Pazzini', '', 420000, 1, 0, 15, 0, '1607088896img_6829_jpga.jpg', '1607088896img_6831_jpga.jpg', ''),
(39, 2, 'ÁO KHOÁC HOODIE NỮ CÓ NÓN THÊU CHỮ', '', 190000, 1, 0, 10, 10, '1607089046b6fe38929bfcc7786639b60696321d0d.jpg_720x720q80.jpg_.webp', '', ''),
(40, 2, 'Áo Khoác Hoodie Nữ In Hình Chú Mèo', '<ul>\r\n	<li>&Aacute;o hoodie form rộng năng động, thể thao, c&ugrave;ng với thiết kế độc đ&aacute;o tạo cho người mặc phong c&aacute;ch rất trẻ trung, thể thao v&agrave; hiện đại.</li>\r\n	<li>Chất vải thun nỉ,rất mịn m&agrave;ng, tạo sự th&ocirc;ng tho&aacute;ng, dễ chịu khi sử dụng.</li>\r\n	<li>Sản phẩm ph&ugrave; hợp khi kết hợp với quần short, quần jogger , gi&agrave;y thể thao tạo n&ecirc;n tổng thể khoẻ khoắn, ph&ugrave; hợp với c&aacute;c bạn trẻ c&oacute; phong c&aacute;ch c&aacute; t&iacute', 150000, 1, 0, 15, 0, '16070891188542b8fe7b3a487cf824063a64a1147f.jpg_720x720q80.jpg_.webp', '', ''),
(41, 1, 'Thắt lưng AL008', '', 320000, 0, 0, 0, 10, '1607089242al008__1_.jpg', '1607089242al008a__1_.jpg', ''),
(42, 1, 'KHĂN LEN FCB', '', 280000, 1, 0, 0, 20, '1607089313783ad088-19e2-44e8-aadc-4ad86d853a39_f377d23e5ecd4d3f8256b793eea34b56_master.webp', '', ''),
(43, 2, 'ÁO sơ mi nữ công sở TAY DÀI CỔ KIỂU NÚT NGỌC', '<p>-H&agrave;ng Thiết kế trẻ trung, tinh tế hợp thời trang ph&ugrave; hợp với nhiều lứa tuổi</p>\r\n\r\n<p>-Đường may tinh tế, tỉ mỉ, chắc chắn</p>\r\n\r\n<p>-Form su&ocirc;ng rộng tạo cảm gi&aacute;c thoải m&aacute;i khi mặc</p>\r\n\r\n<p>-Chất liệu voan tơ nhung lụa cao cấp, mềm mại l&aacute;n mịn, m&aacute;t v&agrave; thấm h&uacute;t mồ h&ocirc;i tốt</p>\r\n\r\n<p>-Kiểu d&aacute;ng hiện đại, đường n&eacute;t c&aacute;ch điệu</p>\r\n\r\n<p>-Mang phong c&aacute;ch nữ t&iacute;nh, thanh lịch</p>\r\n\r\n<p>Gợi &yacute; ', 330000, 0, 1, 15, 15, '1607089595aocongso.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_admin`
--

CREATE TABLE `tbl_user_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_admin`
--

INSERT INTO `tbl_user_admin` (`id`, `name`, `email`, `password`) VALUES
(2, 'Huy Phạm', 'huy15011999@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_email`
--
ALTER TABLE `tbl_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_email`
--
ALTER TABLE `tbl_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
