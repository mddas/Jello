-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2021 at 01:58 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(33) NOT NULL,
  `size_id` int(10) NOT NULL,
  `color_id` int(10) NOT NULL,
  `price_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `customer_id` int(44) NOT NULL,
  `customer_name` varchar(44) NOT NULL,
  `customer_email` varchar(55) DEFAULT NULL,
  `customer_password` varchar(25) NOT NULL,
  `customer_image` varchar(44) NOT NULL,
  `customer_mobilenumber` int(20) NOT NULL,
  `customer_place` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'men', 'Description of Category', 'image'),
(8, 'women', 'Description of Category', 'image');

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
  `meta_keyword` varchar(55) DEFAULT NULL,
  `product_image` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_id`, `product_name`, `product_title`, `product_category`, `product_sub_category`, `product_sub_sub_category`, `product_status`, `product_price`, `product_discount`, `product_description`, `product_brand`, `meta_title`, `meta_keyword`, `product_image`) VALUES
(18, 'Ayon', 'a cute boy', 'men', 'men', 'men', 'option1', 0, 0, 'Product Description', '', '', '', 'admin/jello/productimages/18.jpg'),
(19, 'Big Ayon', 'a cute boy', 'men', 'men', 'men', 'option1', 0, 0, 'Product Description', '', '', '', 'admin/jello/productimages/19.png'),
(20, 'Md', 'a cute boy', 'men', 'men', 'men', 'option1', 0, 0, 'Product Description', '', '', '', 'admin/jello/productimages/20.jpg'),
(21, 'Md', 'a cute boy', 'men', 'men', 'men', 'option1', 0, 0, 'Product Description', '', '', '', 'admin/jello/productimages/21.jpg'),
(22, 'Md', 'a cute boy', 'men', 'men', 'men', 'option1', 0, 0, 'Product Description', '', '', '', 'admin/jello/productimages/22.jpg');

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
(6, 'men', 'shoes', 'Description of Category', ''),
(7, 'men', 'clothing', 'Description of Category', ''),
(8, 'men', 'BAG', 'Description of Category', ''),
(9, 'women', 'Beauti-parler', 'Description of Category', 'image'),
(10, 'women', 'Lady-cycle', 'Description of Category', 'image');

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
(6, 'men', 'shoes', 'runnning shoes', 'Description of Category', 'image'),
(7, 'men', 'clothing', 'Vest', 'Description of Category', 'image'),
(8, 'women', 'BAG', 'hand bag', 'Description of Category', 'image'),
(9, 'women', 'Beauti-parler', 'power', 'Description of Category', 'image'),
(10, 'women', 'shoes', 'lady shoes', 'Description of Category', 'image'),
(11, 'women', 'Lady-cycle', 'chrger cycle', 'Description of Category', 'image');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`,`admin_email`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`category_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `customer_id` int(44) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `product_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(44) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_categoryid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `sub_sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
