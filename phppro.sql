-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2018 at 03:55 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myppro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `image`, `dat`) VALUES
(15, 'Lenovo', '11367.png', '2017-12-18 09:40:52'),
(17, 'Samsung', '31585.jpg', '2017-12-13 12:17:31'),
(22, 'Motorola', '17348.png', '2017-12-18 09:16:43'),
(23, 'Apple', '24983.jpg', '2017-12-20 15:51:48'),
(24, 'Oppo', '7119.png', '2017-12-23 11:40:06'),
(25, 'Vivo', '28585.png', '2017-12-23 11:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `contact`, `message`, `dat`) VALUES
(13, 'abc', 'abc@gmail.com', '9876543210', 'This is first message ', '2017-12-25 18:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `oid` varchar(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(11) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `oid`, `pid`, `pro_name`, `price`, `quantity`, `user_email`, `name`, `contact`, `address`, `city`, `pincode`, `dat`) VALUES
(14, 'ord30216', 21, 'OPPO F5', 17000, 2, 'xyz@gmail.com', 'xyz', '9876543211', 'shastri nagar', 'delhi', '110031', '2017-12-30 08:14:05'),
(15, 'ord24993', 21, 'OPPO F5', 17000, 1, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2017-12-30 08:16:08'),
(16, 'ord24993', 17, 'Samsung Galaxy Note 8', 59900, 2, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2017-12-30 08:16:08'),
(17, 'ord18854', 18, 'Motorola Moto M', 12999, 2, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2017-12-31 10:30:59'),
(18, 'ord18854', 17, 'Samsung Galaxy Note 8', 59900, 1, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2017-12-31 10:30:59'),
(19, 'ord8508', 22, 'Vivo V7 Plus', 18990, 1, 'xyz@gmail.com', 'xyz', '9876543211', 'shastri nagar', 'delhi', '110031', '2017-12-31 10:32:27'),
(20, 'ord23010', 18, 'Motorola Moto M', 12999, 1, 'xyz@gmail.com', 'xyz', '9876543211', 'shastri nagar', 'delhi', '110031', '2017-12-31 10:33:05'),
(21, 'ord2406', 17, 'Samsung Galaxy Note 8', 59900, 1, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2018-01-01 08:56:00'),
(22, 'ord25607', 22, 'Vivo V7 Plus', 18990, 3, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2018-01-02 07:48:28'),
(23, 'ord25607', 19, 'Apple iPhone X', 92000, 1, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2018-01-02 07:48:29'),
(24, 'ord25607', 18, 'Motorola Moto M', 12999, 3, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2018-01-02 07:48:29'),
(25, 'ord25607', 21, 'OPPO F5', 17000, 1, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2018-01-02 07:48:30'),
(26, 'ord2551', 18, 'Motorola Moto M', 12999, 1, 'xyz@gmail.com', 'xyz', '9876543211', 'shastri nagar', 'delhi', '110031', '2018-01-02 07:54:37'),
(27, 'ord6018', 21, 'OPPO F5', 17000, 2, 'xyz@gmail.com', 'xyz', '9876543211', 'shastri nagar', 'delhi', '110031', '2018-01-02 08:00:34'),
(28, 'ord5172', 21, 'OPPO F5', 17000, 1, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2018-01-02 08:16:10'),
(29, 'ord5172', 18, 'Motorola Moto M', 12999, 2, 'abc@gmail.com', 'abc', '9876543210', 'shastri nagar', 'delhi', '110031', '2018-01-02 08:16:10'),
(30, 'ord10236', 20, 'Samsung Galaxy On Max', 14000, 1, 'xyz@gmail.com', 'xyz', '9876543211', 'shastri nagar', 'delhi', '110031', '2018-01-02 08:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `mobile_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `operating_system` varchar(50) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `internal_memory` varchar(100) NOT NULL,
  `camera` varchar(50) NOT NULL,
  `display` varchar(50) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `mobile_name`, `price`, `quantity`, `discount`, `processor`, `operating_system`, `ram`, `internal_memory`, `camera`, `display`, `battery`, `colour`, `warranty`, `image`, `dat`) VALUES
(13, 'Lenovo', 'Lenovo Vibe K5 Note', 9999, 50, 999, 'Octa Core, 1.8 GHz Processor', 'Android, v6.0', '3 GB', '32 GB', '13 MP Rear + 8 MP Front Camera', '5.5 inches, 1080 x 1920 px display', '3300 mAh Battery', 'Black', '1 Year', '9726.jpg', '2017-12-19 09:32:00'),
(14, 'Samsung', 'Samsung Galaxy On Nxt', 13000, 50, 1500, 'Octa Core, 1.6 GHz Processor', 'Android, v6.0', '3 GB', '64 GB', '13 MP Rear + 8 MP Front Camera', '5.5 inches, 1920 x 1080 px display', '3300 mAh Battery', 'Black', '1 Year', '12161.jpg', '2017-12-18 09:58:49'),
(16, 'Motorola', 'Motorola Moto G5s Plus', 13999, 19, 1500, 'Octa Core, 2 GHz Processor', 'Android, v7.1', '4 GB', '64 GB', '13 MP Rear + 8 MP Front Camera', '5.5 inches, 1920 x 1080 px display', '3000 mAh Battery', 'Black', '1 Year', '19549.jpg', '2017-12-30 08:01:11'),
(17, 'Samsung', 'Samsung Galaxy Note 8', 64900, 24, 5000, 'Octa Core, 2.3 GHz Processor', 'Android, v7.1', '6 GB', '64 GB', '12 MP Dual Rear + 8 MP Front Camera', '6.3 inches, 1440 x 2960 px display', '3300 mAh Battery', 'Gold', '1 Year', '3279.jpg', '2018-01-01 08:56:00'),
(19, 'Apple', 'Apple iPhone X', 102000, 41, 10000, 'Hexa Core Processor', 'iOS, v11', '3 GB', '256 GB', '12MP + 12MP Dual Rear Camera | 7MP Front Camera', '5.8 inches, 1125 x 2436 px display', '2716 mAh Battery', 'Black', '1 Year', '17728.jpg', '2018-01-02 07:48:29'),
(21, 'Oppo', 'OPPO F5', 19990, 25, 2990, 'Octa Core, 2.3 GHz Processor', 'Android, v7.1', '6 GB', '64 GB', '16 MP Rear + 20 MP Front Camera', '6 inches, 1080 x 2160 px display', '3300 mAh Battery', 'Black', '1 Year', '6492.jpg', '2018-01-02 08:36:20'),
(22, 'Vivo', 'Vivo V7 Plus', 21990, 50, 3000, 'Octa Core, 1.8 GHz Processor', 'Android, v7.1', '4 GB', '64 GB', '16 MP Rear + 24 MP Front Camera', '6 inches, 1080 x 2160 px display', '3300 mAh Battery', 'Black', '1 Year', '14638.jpg', '2018-01-02 08:36:06'),
(23, 'Samsung', 'Samsung Galaxy On Max', 13900, 25, 2000, 'Octa Core, 2.3 GHz Processor', 'Android, v7.1', '4 GB', '32 GB', '13 MP Rear + 13 MP Front Camera', '5.7 inches, 1920 x 1080 px display', '3300 mAh Battery', 'Gold', '1 Year', '4101.jpg', '2018-01-20 11:28:21'),
(24, 'Motorola', 'Motorola Moto M', 13000, 20, 1500, 'Octa Core, 2.3 GHz Processor', 'Android, v6.0', '4 GB', '64 GB', '13 MP Rear + 8 MP Front Camera', '5.5 inches, 1920 x 1080 px display', '3000 mAh Battery', 'White', '1 Year', '9663.jpg', '2018-01-20 11:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE IF NOT EXISTS `tempcart` (
`id` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quan` int(11) NOT NULL,
  `purchase` int(11) NOT NULL DEFAULT '0',
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`id`, `sid`, `pid`, `quan`, `purchase`, `dat`) VALUES
(35, '2ck9c60bad0ofv8ahmn0fgfnn0', '21', 2, 1, '2017-12-30 08:14:05'),
(36, '2ck9c60bad0ofv8ahmn0fgfnn0', '21', 1, 1, '2017-12-30 08:16:08'),
(37, '2ck9c60bad0ofv8ahmn0fgfnn0', '17', 2, 1, '2017-12-30 08:16:08'),
(38, 'j8s7u59j1nh4lafv56vqkp4qi2', '18', 2, 1, '2017-12-31 10:30:59'),
(39, 'j8s7u59j1nh4lafv56vqkp4qi2', '17', 1, 1, '2017-12-31 10:30:59'),
(40, 'j8s7u59j1nh4lafv56vqkp4qi2', '22', 1, 1, '2017-12-31 10:32:27'),
(41, 'j8s7u59j1nh4lafv56vqkp4qi2', '18', 1, 1, '2017-12-31 10:33:05'),
(51, '90c8h6qun4i3muqbak710uftb4', '17', 1, 1, '2018-01-01 08:56:00'),
(57, '8kk2ao05kd3alll7v3sd383r76', '22', 3, 1, '2018-01-02 07:48:29'),
(58, '8kk2ao05kd3alll7v3sd383r76', '19', 1, 1, '2018-01-02 07:48:29'),
(59, '8kk2ao05kd3alll7v3sd383r76', '18', 3, 1, '2018-01-02 07:48:29'),
(60, '8kk2ao05kd3alll7v3sd383r76', '21', 1, 1, '2018-01-02 07:48:30'),
(61, '8kk2ao05kd3alll7v3sd383r76', '18', 1, 1, '2018-01-02 07:54:37'),
(62, '8kk2ao05kd3alll7v3sd383r76', '21', 2, 1, '2018-01-02 08:00:34'),
(63, '8kk2ao05kd3alll7v3sd383r76', '21', 1, 1, '2018-01-02 08:16:10'),
(64, '8kk2ao05kd3alll7v3sd383r76', '18', 2, 1, '2018-01-02 08:16:10'),
(67, 'sdlkfhisb83oolprflt4bjjgc0', '20', 1, 1, '2018-01-02 08:50:44'),
(72, '53pi4p2fg6ukeccvegmc7ncc12', '22', 1, 0, '2018-01-21 13:37:11'),
(73, '53pi4p2fg6ukeccvegmc7ncc12', '24', 1, 0, '2018-01-21 13:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `address`, `city`, `pincode`, `photo`, `dat`) VALUES
(15, 'abc', 'abc@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '9876543210', 'shastri nagar', 'delhi', '110031', '19651.jpg', '2017-12-29 10:57:18'),
(16, 'xyz', 'xyz@gmail.com', '2b743ea5699560665032496d957cd8c0075029d5', '9876543211', 'shastri nagar', 'delhi', '110031', '14700.jpg', '2017-12-25 16:59:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempcart`
--
ALTER TABLE `tempcart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tempcart`
--
ALTER TABLE `tempcart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
