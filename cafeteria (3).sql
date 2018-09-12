-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2018 at 06:36 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.1.20-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`, `username`, `role`, `mobile`, `status`) VALUES
(1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'admin', '1234567890', 0),
(2, 'manager@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'manager', 'manager', '9876543210', 0),
(3, 'kitchen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'kitchen', 'kitchen', '0123456789', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `bike_cc` varchar(255) DEFAULT NULL,
  `bike_plan` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `txid` varchar(255) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `payment`, `email`, `mobile`, `bike_cc`, `bike_plan`, `name`, `txid`, `service`, `created_at`) VALUES
(1, '354', 'amit@gmail.com', '9990708450', 'Bikes_Below_150CC', 'Basic Plan', 'amit', 'tx-14269', NULL, '2018-07-13 12:04:32'),
(2, '354', 'sahutech8@gmail.com', '845834685', 'Bikes_Below_150CC', 'Standard Plan', 'sahutech', 'tx-54405', NULL, '2018-07-13 12:04:32'),
(3, '413', 'sahutech8@gmail.com', '845834685', 'Bikes_Below_150CC', 'Premium Plan', 'sahutech', 'tx-17777', NULL, '2018-07-13 12:04:32'),
(4, '354', 'sahutech8@gmail.com', '845834685', 'Bikes_Below_150CC', 'Basic Plan', 'sahutech', 'tx-20235', 3, '2018-07-13 12:04:32'),
(5, '350', NULL, NULL, 'Bikes_Below_150CC', 'Basic Plan', NULL, 'tx-99148', 3, '2018-07-15 04:25:23'),
(6, '300', NULL, NULL, 'Bikes_Below_150CC', 'Standard Plan', NULL, 'tx-50331', 4, '2018-07-15 04:27:07'),
(7, '300', NULL, NULL, 'Bikes_Below_150CC', 'Standard Plan', NULL, 'tx-78773', 4, '2018-07-15 04:31:28'),
(8, '300', NULL, NULL, 'Bikes_Below_150CC', 'Basic Plan', NULL, 'tx-21994', 3, '2018-07-15 04:40:50'),
(9, '1300', NULL, NULL, 'Bikes_Below_150CC', 'Basic Plan', NULL, 'tx-55041', 3, '2018-07-17 19:51:36'),
(10, '50', NULL, NULL, 'Bikes_150CC_and_220CC', 'Premium Plan', NULL, 'tx-60778', 6, '2018-07-18 09:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `brand_table`
--

CREATE TABLE `brand_table` (
  `SN` int(11) NOT NULL,
  `Brand_price` varchar(255) NOT NULL,
  `Brand_Name` varchar(255) NOT NULL,
  `Brand_menu` varchar(255) NOT NULL,
  `discount_price` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_table`
--

INSERT INTO `brand_table` (`SN`, `Brand_price`, `Brand_Name`, `Brand_menu`, `discount_price`, `total_price`) VALUES
(10, '400', 'Chicken Korma', 'Chicken', '4', '384'),
(11, '300', 'vag food', 'Vagitable', '4', '288');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `cat_id` int(11) NOT NULL,
  `SN` int(11) NOT NULL,
  `Category_ID` varchar(255) NOT NULL,
  `Category_Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`cat_id`, `SN`, `Category_ID`, `Category_Name`) VALUES
(23, 0, '001', 'chicken'),
(24, 0, '002', 'vagitable'),
(25, 0, '003', 'snacks'),
(26, 0, '001', 'lunch'),
(27, 0, '005', 'dinner');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_menu` text NOT NULL,
  `order_quantity` text,
  `order_table` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `menu_price` text,
  `dis_price` text,
  `total_price` varchar(100) DEFAULT NULL,
  `tot_qua` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_menu`, `order_quantity`, `order_table`, `user_name`, `menu_price`, `dis_price`, `total_price`, `tot_qua`) VALUES
(14, 'Chicken Korma,vag food', '1,1', 1, NULL, '400,300', '384,288', '672', ''),
(15, 'Chicken Korma,vag food', '3,5', 1, NULL, '400,300', '384,288', '2592', ''),
(16, 'Chicken Korma,vag food', '4,5', 3, NULL, '400,300', '384,288', '2976', ''),
(17, 'Chicken Korma,vag food', '2,3', 4, NULL, '400,300', '384,288', '1632', ''),
(18, 'Chicken Korma,vag food', '1,2', 4, NULL, '400,300', '384,288', '960', 'Full,half');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'honda', 'a.jpg', 2000.00, '1');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `res_id` int(11) NOT NULL,
  `Service_ID` varchar(100) DEFAULT NULL,
  `user_name` varchar(150) DEFAULT NULL,
  `res_table_seat` varchar(150) NOT NULL,
  `res_seat` varchar(200) NOT NULL,
  `waiter_service` varchar(100) DEFAULT NULL,
  `res_date_and_time` varchar(100) DEFAULT NULL,
  `order_close` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `Service_ID`, `user_name`, `res_table_seat`, `res_seat`, `waiter_service`, `res_date_and_time`, `order_close`, `status`) VALUES
(10, 'right-6', 'itcare', '2', 'reserved', 'kasif', '2018/09/19 15:14', 1, 1),
(11, 'right-4', NULL, '5', 'available', NULL, NULL, NULL, 0),
(12, 'left-4', 'itcare', '6', 'reserved', 'demo', '2018/09/20 20:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_table`
--

CREATE TABLE `service_table` (
  `SN` int(11) NOT NULL,
  `Service_ID` varchar(255) NOT NULL,
  `Service_Name` varchar(255) NOT NULL,
  `total_seat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_table`
--

INSERT INTO `service_table` (`SN`, `Service_ID`, `Service_Name`, `total_seat`) VALUES
(70, '1', 'left', 2),
(71, '2', 'middle', 4),
(72, '3', 'right', 3),
(73, '6', 'left', 6);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `stock_cat` varchar(100) NOT NULL,
  `stock_name` varchar(100) NOT NULL,
  `stock_url` varchar(150) NOT NULL,
  `stock_price` varchar(100) NOT NULL,
  `stock_quantity` float NOT NULL,
  `stock_total` varchar(100) NOT NULL,
  `stock_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `stock_cat`, `stock_name`, `stock_url`, `stock_price`, `stock_quantity`, `stock_total`, `stock_status`, `created_at`, `updated_at`) VALUES
(1, 'chilli', 'Chilli Powder', 'Chilli-Powder', '200', 12, '23', 2, '2018-09-12 10:46:05', '2018-09-12 12:07:17'),
(3, 'chilli', 'grenn cilli', 'grenn-cilli', '400', 3, '9', 0, '2018-09-12 11:37:22', '2018-09-12 12:29:11'),
(6, 'chilli', 'chilli powder', 'chilli-powder', '45', 1, '45', 0, '2018-09-12 12:40:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock_cat`
--

CREATE TABLE `stock_cat` (
  `stock_cat_id` int(11) NOT NULL,
  `stoke_cat_name` varchar(150) NOT NULL,
  `stock_cat_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_cat`
--

INSERT INTO `stock_cat` (`stock_cat_id`, `stoke_cat_name`, `stock_cat_url`) VALUES
(2, 'chilli', 'chilli');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bike_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `cover`, `picture`, `password`, `mobile`, `bike_name`, `address`, `link`, `login_time`, `status`, `created`, `modified`) VALUES
(1, '', '', 'Shubham Sahu', '', 'amit@gmail.com', '', '', '', 'download.jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '34324324', 'Hero', 'Gurgaon', '', '2018-07-22 22:42:01', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', '', 'ssadfsad@gmail.com', '', 'ssadfsad@gmail.com', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', '4324324', NULL, NULL, '', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_database`
--

CREATE TABLE `user_database` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `User_Mobile` varchar(10) NOT NULL,
  `User_Address` varchar(255) NOT NULL,
  `User_Password` varchar(255) NOT NULL,
  `OTP` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_database`
--

INSERT INTO `user_database` (`User_ID`, `User_Name`, `User_Email`, `User_Mobile`, `User_Address`, `User_Password`, `OTP`) VALUES
(1, 'Admin', 'admin@vkbikes.com', '', '', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `id` int(11) NOT NULL,
  `waiter_id` varchar(100) NOT NULL,
  `waiter_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`id`, `waiter_id`, `waiter_name`) VALUES
(1, 'emp-001', 'prateek'),
(4, 'emp-003', 'kasif'),
(5, 'emp-005', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `brand_table`
--
ALTER TABLE `brand_table`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `service_table`
--
ALTER TABLE `service_table`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `stock_cat`
--
ALTER TABLE `stock_cat`
  ADD PRIMARY KEY (`stock_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_database`
--
ALTER TABLE `user_database`
  ADD PRIMARY KEY (`User_Email`),
  ADD UNIQUE KEY `User_ID` (`User_ID`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `brand_table`
--
ALTER TABLE `brand_table`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `service_table`
--
ALTER TABLE `service_table`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `stock_cat`
--
ALTER TABLE `stock_cat`
  MODIFY `stock_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `waiter`
--
ALTER TABLE `waiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
