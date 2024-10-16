-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(30) NOT NULL,
  `a_password` varchar(30) NOT NULL,
  `a_image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`, `a_image`) VALUES
(1, 'chintan', 'chintan123', 'Admin.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `u_id_fk` int(11) DEFAULT NULL,
  `single_prod_id_fk` int(11) DEFAULT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`u_id_fk`, `single_prod_id_fk`, `cart_id`, `quantity`) VALUES
(1, 1, 25, '1'),
(1, 3, 30, '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(30) NOT NULL,
  `cate_image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_image`) VALUES
(1, 'Men\'s', 'baner-right-image-02.jpg'),
(2, 'Women\'s', 'baner-right-image-01.jpg'),
(3, 'Kid\'s', 'baner-right-image-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `subcate_id_fk` int(11) DEFAULT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(30) DEFAULT NULL,
  `prod_image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`subcate_id_fk`, `prod_id`, `prod_name`, `prod_image`) VALUES
(1, 1, 'T-Shirts', 't.jpg'),
(1, 2, 'Casual Shirts', 'c.jpg'),
(1, 3, 'Formal Shirts', 'f.jpg'),
(1, 4, 'Sweatshirts', 's.jpg'),
(2, 5, 'Jeans', 'j,jpg'),
(2, 6, 'Casual Trousers', 'c.jpg'),
(2, 7, 'Formal Trousers', 'f.jpg'),
(2, 8, 'Shorts', 's.jpg'),
(3, 9, 'Casual Shoes', 'c.jpg'),
(3, 10, 'Sports Shoes', 's.jpg'),
(3, 11, 'Formal Shoes', 'f,jpg'),
(3, 12, 'Sandals', 's.jpg'),
(4, 13, 'Active T-Shirts', 'at,jpg'),
(4, 14, 'Track Pants', 'sp.jpg'),
(4, 15, 'Tracksuits', 'tr.jpg'),
(4, 16, 'Jackets', 'j.jpg'),
(5, 17, 'Briefs & Trunks', 'b.jpg'),
(5, 18, 'Boxers', 'b.jpg'),
(5, 19, 'Vests', 'v.jpg'),
(5, 20, 'Thermals', 't.jpg'),
(6, 21, 'Titan', 'ti.jpg'),
(6, 22, 'Casio', 'c.jpg'),
(6, 23, 'Sonata', 's.jpg'),
(6, 24, 'Fastrack', 'f.jpg'),
(7, 25, 'Kurtas &Suits', 'ks.jpg'),
(7, 26, 'Kurtis', 'ku.jpg'),
(7, 27, 'Sarees', 'sa.jpg'),
(7, 28, 'Salwars', 's.jpg'),
(8, 29, 'Tops', 't.jpg'),
(8, 30, 'Tshirts', 'ts.jpg'),
(8, 31, 'Jeans', 'j.jpg'),
(8, 32, 'Skirts', 'sk.jpg'),
(9, 33, 'Flats', 'f.jpg'),
(9, 34, 'Casual Shoes', 'cs.jpg'),
(9, 35, 'Sport Shoes', 'ss.jpg'),
(9, 36, 'Heels', 'h.jpg'),
(10, 37, 'Sport Shoes', 'ss.jpg'),
(10, 38, 'Sport Tshirts', 'st.jpg'),
(10, 39, 'Active Pents', 'ap.jpg'),
(10, 40, 'Active TShirts', 'at.jpg'),
(11, 41, 'Bra', 'b.jpg'),
(11, 42, 'Briefs', 'bb.jpg'),
(11, 43, 'Shapewear', 'sw.jpg'),
(11, 44, 'Sleepwear', 'sl.jpg'),
(12, 45, 'Sonata', 's.jpg'),
(12, 46, 'Titan', 't.jpg'),
(12, 47, 'Casio', 'c.jpg'),
(12, 48, 'Rado', 'r.jpg'),
(13, 49, 'T-Shirts', 'ts.jpg'),
(13, 50, 'Shirts', 'sh.jpg'),
(13, 51, 'Jeans', 'je.jpg'),
(13, 52, 'Trousers', 'tr.jpg'),
(14, 53, 'Dresses', 'dr.jpg'),
(14, 54, 'Tops', 'tp.jpg'),
(14, 55, 'Lahenga', 'l.jpg'),
(14, 56, 'Kurtas', 'ku.jpg'),
(15, 57, 'Casual Shoes', 'cs.jpg'),
(15, 58, 'Flipflops', 'ff.jpg'),
(15, 59, 'Sandals', 'ss.jpg'),
(15, 60, 'Sport Shoes', 'ssc.jpg'),
(16, 61, 'Bodysuits', 'bs.jpg'),
(16, 62, 'Rompers', 'ro,jpg'),
(16, 63, 'Winter Wear', 'ww.jpg'),
(16, 64, 'Infant Care', 'ic.jpg'),
(17, 65, 'Learning & Development', 'ld.jpg'),
(17, 66, 'Activity Toys', 'at.jpg'),
(17, 67, 'Soft Toys', 'st.jpg'),
(17, 68, 'Video Game', 'vg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `single_product`
--

CREATE TABLE `single_product` (
  `prod_id_fk` int(11) DEFAULT NULL,
  `single_prod_id` int(11) NOT NULL,
  `single_prod_name` varchar(50) DEFAULT NULL,
  `single_prod_detail` varchar(50) DEFAULT NULL,
  `single_prod_descrip` varchar(200) DEFAULT NULL,
  `single_prod_size` varchar(50) DEFAULT NULL,
  `single_prod_image` varchar(50) DEFAULT NULL,
  `single_prod_price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `single_product`
--

INSERT INTO `single_product` (`prod_id_fk`, `single_prod_id`, `single_prod_name`, `single_prod_detail`, `single_prod_descrip`, `single_prod_size`, `single_prod_image`, `single_prod_price`) VALUES
(1, 1, 'Aero Armour', 'Unisex Round Neck Pure Cotton T-shirt', 'Olive green Tshirt for unisex\r\nShort length\r\nRound neck\r\nShort, regular sleeves\r\nCotton fabric\r\n\r\nSi', 'S,M,L,XL,XXL,3XL,4XL,5XL', 't.jpg', '799'),
(1, 2, 'Being Human', 'Graphic Printed Pure Cotton Pocket T-shirt', 'Lime green T-shirt for men\r\nGraphic printed\r\nRegular length\r\nRound neck\r\nShort, regular sleeves\r\nWov', 'S,M,L,XL,XXL,3XL', 'bh.jpg', '384'),
(2, 3, 'THE BEAR HOUSE', 'Slim Fit Self Design Button-Down Shirt', 'PRODUCT DETAILS \r\nOlive green self design opaque casual shirt ,has a button-down collar, button plac', 'S,M,L,XL,XXL', 's.jpg', '779'),
(2, 4, 'Marks & Spencer', 'Spread Collar Casual Shirt', 'White solid regular Casual shirt, has spread collar, button placket, 1 patch pocket, long regular sl', 'S,M,L,XL,XXL,3XL', 'ms.jpg', '799');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `cate_id_fk` int(11) DEFAULT NULL,
  `subcate_id` int(11) NOT NULL,
  `subcate_name` varchar(50) DEFAULT NULL,
  `subcate_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`cate_id_fk`, `subcate_id`, `subcate_name`, `subcate_image`) VALUES
(1, 1, 'Topwear', 'Mens-01.jpg'),
(1, 2, 'Bottomwear', 'Mens-02.jpg'),
(1, 3, 'Footerwear', 'Mens-03.jpg'),
(1, 4, 'Sports & Active Wear', 'Mens-04.jpg'),
(1, 5, 'Innerwear & sleepwear', 'Mens-05.jpg'),
(1, 6, 'Watches', 'Mens-06.jpg'),
(2, 7, 'Indian Wear', 'Women-01.jpg'),
(2, 8, 'Western Wear', 'Women-02.jpg'),
(2, 9, 'Footerwear', 'Women-03.jpg'),
(2, 10, 'Sports & Active Wear', 'Women-04.jpg'),
(2, 11, 'Lingerie & sleepwear', 'Women-05.jpg'),
(2, 12, 'Watches', 'Women-06.jpg'),
(3, 13, 'Boy Clothing', 'Kids-01.jpg'),
(3, 14, 'Girls Clothing', 'Kids-02.jpg'),
(3, 15, 'Footwear', 'Kids-03.jpg'),
(3, 16, 'Infants', 'Kids-04.jpg'),
(3, 17, 'Toys & Games', 'Kids-05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `u_firstname` varchar(30) NOT NULL,
  `u_middlename` varchar(30) NOT NULL,
  `u_lastname` varchar(30) NOT NULL,
  `u_username` varchar(30) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_mobile` varchar(30) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_gender` varchar(30) NOT NULL,
  `u_languages` varchar(30) NOT NULL,
  `u_image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_firstname`, `u_middlename`, `u_lastname`, `u_username`, `u_password`, `u_email`, `u_mobile`, `u_address`, `u_gender`, `u_languages`, `u_image`) VALUES
(1, 'chintan', 'Mukeshbhai', 'trivedi', 'chintan1234', 'c@1234', 'c@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English,Gujarat,Hindi', 'Latest.jpg'),
(2, 'prashant', 'mukesh', 'trivedi', 'prashant@123', '1234', 'p@gmail.com', '9427922245', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English,Hindi,Tamil', 'my.jpeg'),
(3, 'sadasda', 'asdasda', 'asdasdd', 'sdadsad', 'c@1234', 'asda@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English', 'my.jpeg'),
(4, 'sadasda', 'asdasda', 'asdasdd', 'sdadsad', 'c@1234', 'asda@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English', 'my.jpeg'),
(5, 'sadasda', 'asdasda', 'asdasdd', 'sdadsad', 'c@1234', 'asda@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English', 'my.jpeg'),
(6, 'sadasda', 'asdasda', 'asdasdd', 'sdadsad', 'c@1234', 'asda@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English', 'my.jpeg'),
(7, 'sadasda', 'asdasda', 'asdasdd', 'sdadsad', 'c@1234', 'asda@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English', 'my.jpeg'),
(8, 'sadasda', 'asdasda', 'asdasdd', 'sdadsad', 'c@1234', 'asda@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English', 'my.jpeg'),
(9, 'sadasda', 'asdasda', 'asdasdd', 'sdadsad', 'c@1234', 'asda@gmail.com', '9898452527', '200,dadri faliyu,op.girls hostel,vyara,DT-tapi', 'Male', 'English', 'my.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `u_id_fk` (`u_id_fk`),
  ADD KEY `single_prod_id_fk` (`single_prod_id_fk`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `subcate_id_fk` (`subcate_id_fk`);

--
-- Indexes for table `single_product`
--
ALTER TABLE `single_product`
  ADD PRIMARY KEY (`single_prod_id`),
  ADD KEY `prod_id_fk` (`prod_id_fk`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcate_id`),
  ADD KEY `cate_id_fk` (`cate_id_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `single_product`
--
ALTER TABLE `single_product`
  MODIFY `single_prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`u_id_fk`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`single_prod_id_fk`) REFERENCES `single_product` (`single_prod_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcate_id_fk`) REFERENCES `subcategory` (`subcate_id`);

--
-- Constraints for table `single_product`
--
ALTER TABLE `single_product`
  ADD CONSTRAINT `single_product_ibfk_1` FOREIGN KEY (`prod_id_fk`) REFERENCES `product` (`prod_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cate_id_fk`) REFERENCES `category` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
