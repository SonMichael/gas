-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 07:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_nano`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'trumilo', 'admin@gmail.com', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gift_category_id` int(11) NOT NULL,
  `visible` tinyint(255) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `name`, `color`, `material`, `weight`, `price`, `image`, `gift_category_id`, `visible`) VALUES
(1, 'Bếp gas mini', 'Đỏ', 'Thép', 1, '150000.00', 'images/gift1.jpg', 1, 0),
(2, 'Bếp đôi', 'Đỏ', 'Thép', 1, '150000.00', 'images/gift2.jpg', 1, 0),
(3, 'Bộ chén dĩa', 'Đỏ', 'Composit', 1, '150000.00', 'images/gift3.jpg', 2, 0),
(4, 'Nước tương', 'Đỏ', 'Composit', 1, '150000.00', 'images/gift4.jpg', 3, 0),
(5, 'Bột ngọt', 'Đỏ', 'Composit', 1, '150000.00', 'images/gift5.jpg', 3, 0),
(6, 'Dầu ăn', 'Đỏ', 'Composit', 1, '150000.00', 'images/gift6.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gift_category`
--

CREATE TABLE `gift_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `visible` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift_category`
--

INSERT INTO `gift_category` (`id`, `name`, `visible`) VALUES
(1, 'BẾP GAS', 1),
(2, 'ĐỒ DÙNG GIA ĐÌNH', 1),
(3, 'GIA VỊ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `visible` tinyint(255) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `color`, `material`, `weight`, `price`, `visible`, `image`) VALUES
(1, 'EIF gas', 'Đỏ', 'Thép', 15, '290000.00', 0, 'images/gallery-img1.jpg'),
(2, 'LP Petrol', 'Đỏ', 'Composit', 13, '320000.00', 0, 'images/gallery-img2.jpg'),
(3, 'Petrol Limex', 'Đỏ', 'Composit', 13, '320000.00', 0, 'images/gallery-img3.jpg'),
(4, 'Nam Gas', 'Đỏ', 'Composit', 13, '320000.00', 0, 'images/gallery-img4.jpg'),
(5, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, '320000.00', 0, 'images/gallery-img5.jpg'),
(6, 'Nam Gas', 'Cam', 'Composit', 13, '320000.00', 0, 'images/gallery-img6.jpg'),
(7, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, '320000.00', 1, 'js');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `visible` tinyint(255) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `address`, `phone_number`, `visible`) VALUES
(1, 'Cửa Hàng Số 1', '268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM', '010-0230-040', 0),
(2, 'Cửa Hàng Số 2', '268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM', '010-0230-040', 0),
(3, 'ccdb', 'Phường 13, Tân Bình, Thành phố Hồ Chí Minh, Vietnam', '010-0230-040', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(3, 'trumilo', '123456', 'loitruongminhit@gmail.com'),
(4, 'Admin', '123456', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_category`
--
ALTER TABLE `gift_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gift_category`
--
ALTER TABLE `gift_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
