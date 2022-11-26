-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.175.1
-- Generation Time: Jun 18, 2021 at 08:42 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

-- صفحه مدیریت username = admin   password = admin

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
-- Database: `shop_db`
--


--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `detail` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO `contact` (`id`,`username`,`detail`) VALUES
('14','admin','admin@gmail.com');

--
-- Dumping data for table `contact`
--

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `orderdate` date NOT NULL,
  `pro_code` int(10) NOT NULL,
  `pro_qty` int(10) NOT NULL,
  `pro_price` float NOT NULL,
  `mobile` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(400) COLLATE utf8_persian_ci NOT NULL,
  `trackcode` varchar(24) COLLATE utf8_persian_ci NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orders`
--


--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_code` int(10) NOT NULL,
  `pro_name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `pro_qty` int(10) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_image` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `pro_detail` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_code`, `pro_name`, `pro_qty`, `pro_price`, `pro_image`, `pro_detail`) VALUES 
('1', 'Huawei nova 7i', '12', '40991000', 'im7.jpg', '4/6 Gigabyte RAM , 1920*1080 P,48-8-2 Camera,Front 16,4500Am Battery'),
('2','Huawei nova 5t','7','56000000','Nova5t.jpg','8 Gigabyte RAM , 1920*1080 P,48-8-2-2 Camera,Front 32,4000Am Battery'),
('3','Huawei Y9','16','36000000','huawei_y9.jpg','4 Gigabyte RAM , 1080*720 P,13-2 Camera,Front 8,4000Am Battery'),
('4','HUAWEI P40 PRO','9','211990000','P40.jpg','8 Gigabyte RAM , 2640*1200 P,50-40-12 Camera,Front 32,5000Am Battery'),
('5','HUAWEI Y7P (P40 LITE E)','13','29990000','Y7p.jpg','4 Gigabyte RAM , 1560*720 P,48-8-2 Camera,Front 8,4500Am Battery'),
('6','HUAWEI Y8P','8','37500000','Y8p.jpg','4/6 Gigabyte RAM , 2400*1080 P,48-8-2 Camera,Front 16,4000Am Battery'),
('7','HUAWEI P50','0','000','P50.jpg','8/12 Gigabyte RAM , 2340*1080 P,68-48-12-2 Camera,Front 50,None-Am Battery'),
('8','HUAWEI MATE 40E','16','56000000','M40.jpg','8 Gigabyte RAM , 2340*1080 P,64-16-8 Camera,Front 13,4200Am Battery'),
('9','HUAWEI MATE X2','6','60000000','MX2.jpg','8 Gigabyte RAM , 2480*2200 P,50-16-12-8 Camera,Front 16,5000Am Battery');

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `realname` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`realname`, `username`, `password`, `email`, `type`) VALUES
('Ù…Ø¯ÛŒØ±ÛŒØª Ø³Ø§ÛŒØª', 'admin', 'admin', 'admin@gmail.com', 1),
('Amirreza', 'amir', '123', 'amir@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
