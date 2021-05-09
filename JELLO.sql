-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 01:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JELLO`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(25) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_email` varchar(55) NOT NULL,
  `admin_password` int(25) NOT NULL,
  `admin_mobilenumber` int(15) DEFAULT NULL,
  `admin_image` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mobilenumber`, `admin_image`) VALUES
(1, 'manoj', 'mddasgudiya@gmail.com', 122, 98080, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `CART`
--

CREATE TABLE `CART` (
  `cart_id` int(44) NOT NULL,
  `product_id` int(44) NOT NULL,
  `customer_id` int(44) NOT NULL,
  `Temp_cart_id` int(44) NOT NULL,
  `quantity` int(44) NOT NULL,
  `size_id` int(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer_Authentication`
--

CREATE TABLE `Customer_Authentication` (
  `user_id` int(30) NOT NULL,
  `user_name` varchar(44) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer_Authentication`
--

INSERT INTO `Customer_Authentication` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(7, 'manoj', 'mddasgudiya@gmail.com', 'md');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `product_id` int(22) NOT NULL,
  `image_a` varchar(200) DEFAULT NULL,
  `image_b` varchar(200) DEFAULT NULL,
  `image_c` varchar(200) DEFAULT NULL,
  `image_d` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`product_id`, `image_a`, `image_b`, `image_c`, `image_d`) VALUES
(36, 'admin/jello/productimages/36a.jpg', NULL, NULL, NULL),
(38, 'admin/jello/productimages/38a.jpeg', 'admin/jello/productimages/38b.jpeg', 'admin/jello/productimages/38c.jpeg', 'admin/jello/productimages/38d.jpeg'),
(39, 'admin/jello/productimages/39a.jpg', 'admin/jello/productimages/39b.jpg', 'admin/jello/productimages/39c.jpg', 'admin/jello/productimages/39d.jpg'),
(40, 'admin/jello/productimages/40a.png', 'admin/jello/', 'admin/jello/productimages/40c.png', 'admin/jello/'),
(41, 'admin/jello/productimages/41a.png', 'admin/jello/productimages/41b.png', 'admin/jello/productimages/41c.png', 'admin/jello/productimages/41d.png');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(55) NOT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `category_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`category_id`, `category_name`, `category_description`, `category_image`) VALUES
(38, 'men', 'Description of Category', 'imagenull'),
(39, 'Women', 'Description of Category', 'imagenull');

-- --------------------------------------------------------

--
-- Table structure for table `Product_CheckOut`
--

CREATE TABLE `Product_CheckOut` (
  `CheckOut_id` int(55) NOT NULL,
  `product_id` int(55) NOT NULL,
  `customer_id` int(55) NOT NULL,
  `Cart_id` int(55) NOT NULL,
  `place` varchar(55) DEFAULT NULL,
  `mobile_number` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `product_id` int(50) NOT NULL,
  `color_name` varchar(20) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `product_id` int(55) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category` varchar(55) NOT NULL,
  `product_sub_category` varchar(55) NOT NULL,
  `product_sub_sub_category` varchar(55) DEFAULT NULL,
  `product_status` varchar(20) NOT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_discount` int(11) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_brand` varchar(55) DEFAULT NULL,
  `meta_title` varchar(55) DEFAULT NULL,
  `meta_keyword` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_id`, `product_name`, `product_title`, `product_category`, `product_sub_category`, `product_sub_sub_category`, `product_status`, `product_price`, `product_discount`, `product_description`, `product_brand`, `meta_title`, `meta_keyword`) VALUES
(38, 'shirt', '', 'men', 'men', 'men', 'option1', 23, 0, 'Product Description', '', '', ''),
(39, 'saari', 'women saari', 'men', 'men', 'men', 'option1', 34, 0, 'Product Description', '', '', ''),
(40, 'red saari', 'sari', 'men', 'men', 'men', 'published', 23, 0, 'Product Description', '', '', ''),
(41, 'sari', '', 'men', 'men', 'men', 'option1', 22, 0, 'Product Description', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_price`
--

CREATE TABLE `product_price` (
  `product_id` int(55) NOT NULL,
  `product_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(44) NOT NULL,
  `product_id` int(50) NOT NULL,
  `product_size` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_categoryid` int(3) NOT NULL,
  `which_main_category` varchar(30) NOT NULL,
  `sub_categoryname` varchar(55) NOT NULL,
  `sub_categorydescription` varchar(1000) DEFAULT NULL,
  `sub_catogeryimage` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_categoryid`, `which_main_category`, `sub_categoryname`, `sub_categorydescription`, `sub_catogeryimage`) VALUES
(11, 'men', 'shoes', 'Description of Category', 'imagenull'),
(12, 'Women', 'lady bag', 'Description of Category', 'imagenull'),
(13, 'Women', 'clothes', 'Description of Category', 'imagenull');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_category`
--

CREATE TABLE `sub_sub_category` (
  `sub_sub_id` int(5) NOT NULL,
  `which_main_category` varchar(55) NOT NULL,
  `which_sub_category` varchar(30) NOT NULL,
  `sub_sub_name` varchar(55) NOT NULL,
  `sub_sub_description` varchar(200) DEFAULT NULL,
  `sub_sub_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sub_category`
--

INSERT INTO `sub_sub_category` (`sub_sub_id`, `which_main_category`, `which_sub_category`, `sub_sub_name`, `sub_sub_description`, `sub_sub_image`) VALUES
(13, 'men', 'shoes', 'runnning shoes', 'Description of Category', 'imagenull'),
(14, 'Women', 'lady bag', 'hand bag', 'Description of Category', 'imagenull'),
(15, 'Women', 'clothes', 'traditional clothes', 'Description of Category', 'imagenull');

-- --------------------------------------------------------

--
-- Table structure for table `Temp_Cart`
--

CREATE TABLE `Temp_Cart` (
  `Temp_cart_id` int(44) NOT NULL,
  `product_id` int(44) NOT NULL,
  `Temp_quantity` int(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`,`admin_email`);

--
-- Indexes for table `CART`
--
ALTER TABLE `CART`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `Customer_Authentication`
--
ALTER TABLE `Customer_Authentication`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `Product_CheckOut`
--
ALTER TABLE `Product_CheckOut`
  ADD PRIMARY KEY (`CheckOut_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_price`
--
ALTER TABLE `product_price`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_categoryid`);

--
-- Indexes for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD PRIMARY KEY (`sub_sub_id`);

--
-- Indexes for table `Temp_Cart`
--
ALTER TABLE `Temp_Cart`
  ADD PRIMARY KEY (`Temp_cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `CART`
--
ALTER TABLE `CART`
  MODIFY `cart_id` int(44) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer_Authentication`
--
ALTER TABLE `Customer_Authentication`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `Product_CheckOut`
--
ALTER TABLE `Product_CheckOut`
  MODIFY `CheckOut_id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `product_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(44) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_categoryid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `sub_sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Temp_Cart`
--
ALTER TABLE `Temp_Cart`
  MODIFY `Temp_cart_id` int(44) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
