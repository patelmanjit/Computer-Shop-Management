-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 05:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`) VALUES
(1, 'Admin123@gmail.com', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` int(10) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Number`, `Message`) VALUES
(9, 'smit patel', 'mjk@gmail.com', 567895423, 'qwertyuioplkjhgfdsa'),
(10, 'ketan ', 'test.test@gmail.com', 2147483647, 'this is a message'),
(12, 'try ', 'try@gmail.com', 776543289, 'this is only for try');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(40) NOT NULL,
  `pin_code` int(8) NOT NULL,
  `total_products` varchar(200) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total_price` int(50) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `image`, `description`, `quantity`, `price`) VALUES
(94, 'Lenovo', 'le1.jpg', 'Lenovo IdeaPad Slim 3 11th Gen Intel Core i5 15.6 inches FHD Thin & Light Laptop (8GB/512GB SSD/Windows 11/MS Office 2021/2Yr Warranty/Backlit Keyboard/Arctic Grey/1.65Kg)', 13, 55000),
(95, 'Dell', 'de1.jpg', 'Dell New 2021 Inspiron 3511 NB || Intel Core i3-11th Gen || 16 GB Ram || 1TB HDD+256GB SSD || Windows 11 Home+Office 2021 || 32 GB Pendrive sandisk|| FHD Display|Black Color || 1 Yr Warranty', 13, 49000),
(96, 'Acer', 'ac5.jpg', 'Acer Aspire 5 11th Gen Core i5 14-inch (35.56 cms) Full HD IPS Thin & Light Laptop- (8 GB/512 GB SSD/Windows 11 Home/Intel Iris Xe Graphics/Pure Silver/1.45 KG/MS Office), A514-54', 15, 54000),
(97, 'Asus', 'as3.jpg', ' ASUS VivoBook 14 (2021), 14-inch (35.56 cms) FHD, Intel Core i7-1065G7 10th Gen, Thin and Light Laptop (16GB/512GB SSD/Integrated Graphics/Office 2021/Windows 11/Silver/1.6 Kg)', 15, 57000),
(112, 'Canon Printer', 'pr1.jpg', 'Canon Pixma G3000 All-in-One Wireless Ink Tank Colour Printer Printer Type - Ink Tank, Functionality - All-in-One (Print, Scan, Copy), Printer Output - Color', 15, 13000),
(113, 'Kanget CPU', 'cp1.jpg', 'Kanget Assemble Desktop PC CPU with 320 GB HDD | 4 GB DDR3 RAM | Core 2 Duo 3.0 GHz | G-41 Motherboard | WiFi (InteI Core 2 Duo)', 15, 9500),
(120, 'LG Monitor', 'mo1.jpg', 'LG 60 cm/24 inches Full HD IPS 1920 x 1080 Pixels LCD Monitor, Inbuilt Speaker, HDMI x 2, VGA Port, 75 Hz Refresh Rate, AMD Freesync, 3 Side Borderless Slim Design - 24ML600S-W (White)', 15, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `Firstname`, `Lastname`, `Email`, `Password`, `Contact`, `Address`) VALUES
(1, 'smit', 'patel', 'smit123@gmail.com', 'smit123', 9346788, 'anand,gujarat'),
(7, 'bhaktesh', 'patel', 'demo@demo.com', 'demo12345', 78659776, 'this is my address'),
(13, 'Manjit', 'Patel', 'mjk@gmail.com', 'mjklop', 933344556, 'abc xyz this is my address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
