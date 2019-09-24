-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 08:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `add_to_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_card`
--

CREATE TABLE `add_to_card` (
  `id` bigint(20) NOT NULL,
  `cid` varchar(500) NOT NULL,
  `product_id` varchar(500) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quenty` varchar(500) NOT NULL,
  `total_amount` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `all_order`
--

CREATE TABLE `all_order` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `total_product` varchar(500) NOT NULL,
  `total_amount` varchar(500) NOT NULL,
  `payment_type` varchar(500) NOT NULL,
  `payment_status` varchar(500) NOT NULL,
  `delever` varchar(500) NOT NULL,
  `delever_date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `all_order`
--

INSERT INTO `all_order` (`id`, `name`, `email`, `contact`, `city`, `date`, `total_product`, `total_amount`, `payment_type`, `payment_status`, `delever`, `delever_date`) VALUES
(1000, 'deepak patel', 'deepakpatel@digimonk.in', '8435144608', 'gwalior', '02-09-2018 13:40:37pm', '6', '16800', 'COD', 'Pending', 'Pending', ''),
(1001, 'deepak patel', 'deepakpatel@digimonk.in', '8435144608', 'gwalior', '02-09-2018 13:41:36pm', '6', '16800', 'COD', 'Pending', 'Pending', ''),
(1002, 'deepak patel', 'deepakpatel@digimonk.in', '8435144608', 'gwalior', '02-09-2018 13:42:44pm', '6', '16800', 'COD', 'Pending', 'Pending', ''),
(1003, 'deepak patel', 'deepakpatel@digimonk.in', '8435144608', 'gwalior', '02-09-2018 13:53:28pm', '6', '16800', 'COD', 'Pending', 'Pending', ''),
(1005, 'deepak patel', 'deepakpatel@digimonk.in', '8435144608', 'gwalior', '02-09-2018 13:59:00pm', '2', '24000', 'COD', 'Pending', 'Pending', ''),
(1008, 'deepak patel', 'deepakpatel@digimonk.in', '7999908258', 'gwalior', '02-09-2018 14:04:37pm', '2', '4000', 'COD', 'Pending', 'Pending', ''),
(1009, 'deepak patel', 'geetanshmadhok@digimonk.in', '7999908258', 'gwalior', '02-09-2018 14:04:45pm', '2', '16000', 'COD', 'Pending', 'Pending', ''),
(1010, 'deepak patel', 'admin@gmail.com', '7999908258', 'gwalior', '03-09-2018 08:55:20am', '2', '36000', 'COD', 'Pending', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `oreder_product`
--

CREATE TABLE `oreder_product` (
  `id` bigint(20) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `product_id` varchar(500) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quenty` varchar(500) NOT NULL,
  `total_amount` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oreder_product`
--

INSERT INTO `oreder_product` (`id`, `order_id`, `product_id`, `product_name`, `price`, `quenty`, `total_amount`) VALUES
(1, '1003', '2', 'Iphone', '7000', '1', '7000'),
(2, '1003', '3', 'Jute', '2000', '1', '2000'),
(3, '1003', '5', 'Gogal', '300', '1', '300'),
(4, '1003', '6', 'Web cam', '500', '1', '500'),
(5, '1003', '1', 'Printer', '5000', '1', '5000'),
(6, '1003', '4', 'smart wach', '2000', '1', '2000'),
(7, '1005', '1', 'Printer', '5000', '2', '10000'),
(8, '1005', '2', 'Iphone', '7000', '2', '14000'),
(9, '1008', '3', 'Jute', '2000', '1', '2000'),
(10, '1008', '4', 'smart wach', '2000', '1', '2000'),
(11, '1009', '3', 'Jute', '2000', '1', '2000'),
(12, '1009', '2', 'Iphone', '7000', '2', '14000'),
(13, '1010', '1', 'Printer', '5000', '3', '15000'),
(14, '1010', '2', 'Iphone', '7000', '3', '21000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Printer', 'https://support.hp.com/wps/wcm/connect/pps/b0fa0a5f-9b6b-4348-b8c8-d1ac59573b1c/Printers.png?MOD=AJPERES', '5000'),
(2, 'Iphone', 'https://i.gadgets360cdn.com/large/iphone_8_product_red_1523279135310.jpg?output-quality=80', '7000'),
(3, 'Jute', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNQ4P6yy-qFEdTpC38EH2YGDa5lCNTIwJf1oo-FEyPmv3-2FJk', '2000'),
(4, 'smart wach', 'https://support.apple.com/library/content/dam/edam/applecare/images/en_US/homepod/watch-product-lockup-callout.png', '2000'),
(5, 'Gogal', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLZXsyYFtndcUr75OY9ir8S8wFn5Bou_3gCohfj1tsmyzgIr_JxA', '300'),
(6, 'Web cam', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZ18Qf6aCN8OiOvtMp-u1WtfdUN-yARsFGRqdJ8Y5Ek0BkQYC', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_card`
--
ALTER TABLE `add_to_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_order`
--
ALTER TABLE `all_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oreder_product`
--
ALTER TABLE `oreder_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_card`
--
ALTER TABLE `add_to_card`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `all_order`
--
ALTER TABLE `all_order`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `oreder_product`
--
ALTER TABLE `oreder_product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
