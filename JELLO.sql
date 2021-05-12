-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2021 at 12:09 PM
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
(21, 'manoj', 'mddasgudiya@gmail.com', 'md');

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
(42, 'admin/jello/productimages/42a.png', 'admin/jello/productimages/42b.png', 'admin/jello/productimages/42c.png', 'admin/jello/productimages/42d.png'),
(43, 'admin/jello/productimages/43a.png', 'admin/jello/productimages/43b.jpg', 'admin/jello/productimages/43c.png', 'admin/jello/productimages/43d.png'),
(44, 'admin/jello/productimages/44a.png', 'admin/jello/productimages/44b.jpg', 'admin/jello/productimages/44c.png', 'admin/jello/productimages/44d.png'),
(45, 'admin/jello/productimages/45a.png', 'admin/jello/productimages/45b.jpg', 'admin/jello/productimages/45c.png', 'admin/jello/productimages/45d.png'),
(46, 'admin/jello/productimages/46a.jpeg', 'admin/jello/productimages/46b.jpeg', 'admin/jello/productimages/46c.jpeg', 'admin/jello/productimages/46d.jpeg'),
(47, 'admin/jello/productimages/47a.jpeg', 'admin/jello/productimages/47b.jpeg', 'admin/jello/productimages/47c.jpeg', 'admin/jello/productimages/47d.jpeg'),
(48, 'admin/jello/productimages/48a.jpeg', 'admin/jello/productimages/48b.jpeg', 'admin/jello/productimages/48c.jpeg', 'admin/jello/productimages/48d.jpeg'),
(49, 'admin/jello/productimages/49a.jpeg', 'admin/jello/productimages/49b.jpeg', 'admin/jello/productimages/49c.jpeg', 'admin/jello/productimages/49d.jpeg'),
(50, 'admin/jello/productimages/50a.jpeg', 'admin/jello/productimages/50b.jpeg', 'admin/jello/productimages/50c.jpeg', 'admin/jello/productimages/50d.jpeg'),
(51, 'admin/jello/productimages/51a.jpeg', 'admin/jello/productimages/51b.jpeg', 'admin/jello/productimages/51c.jpeg', 'admin/jello/productimages/51d.jpeg'),
(52, 'admin/jello/productimages/52a.jpeg', 'admin/jello/productimages/52b.jpeg', 'admin/jello/productimages/52c.jpeg', 'admin/jello/productimages/52d.jpeg'),
(53, 'admin/jello/productimages/53a.jpeg', 'admin/jello/productimages/53b.jpeg', 'admin/jello/productimages/53c.jpeg', 'admin/jello/productimages/53d.jpeg'),
(54, 'admin/jello/productimages/54a.jpg', 'admin/jello/productimages/54b.png', 'admin/jello/productimages/54c.png', 'admin/jello/productimages/54d.jpg'),
(55, 'admin/jello/productimages/55a.jpg', 'admin/jello/productimages/55b.png', 'admin/jello/productimages/55c.png', 'admin/jello/productimages/55d.jpg'),
(56, 'admin/jello/productimages/56a.jpg', 'admin/jello/productimages/56b.png', 'admin/jello/productimages/56c.png', 'admin/jello/productimages/56d.jpg'),
(57, 'admin/jello/productimages/57a.jpg', 'admin/jello/productimages/57b.png', 'admin/jello/productimages/57c.png', 'admin/jello/productimages/57d.jpg'),
(58, 'admin/jello/productimages/58a.jpg', 'admin/jello/productimages/58b.png', 'admin/jello/productimages/58c.png', 'admin/jello/productimages/58d.jpg'),
(59, 'admin/jello/productimages/59a.jpg', 'admin/jello/productimages/59b.png', 'admin/jello/productimages/59c.png', 'admin/jello/productimages/59d.jpg'),
(60, 'admin/jello/productimages/60a.jpg', 'admin/jello/productimages/60b.png', 'admin/jello/productimages/60c.png', 'admin/jello/productimages/60d.jpg'),
(61, 'admin/jello/productimages/61a.jpg', 'admin/jello/productimages/61b.png', 'admin/jello/productimages/61c.png', 'admin/jello/productimages/61d.jpg'),
(62, 'admin/jello/productimages/62a.png', NULL, NULL, NULL);

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
(40, 'Men', 'All the male related clothes are available under Men category.', 'imagenull'),
(41, 'Women', 'all the Women Related are inside Women category', 'imagenull'),
(43, 'Children', 'Children related clothes', 'imagenull'),
(45, 'Games', 'Description of Category', 'imagenull');

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
(42, 'Saari', 'Red Saari', 'men', 'men', 'men', 'option1', 4000, 22, 'red saari', '', '', ''),
(43, 'red sari', 'red saari', 'men', 'men', 'men', 'published', 3500, 0, 'women sari', '', '', ''),
(44, 'red sari', 'red saari', 'men', 'men', 'men', 'published', 3500, 0, 'women sari', '', '', ''),
(45, 'red sari', 'red saari', 'men', 'men', 'men', 'published', 3500, 0, 'women sari', '', '', ''),
(46, 'shirt', 'male shirt', 'men', 'men', 'men', 'option1', 1200, 0, 'Male shirt', '', '', ''),
(47, 'shirt', 'male shirt', 'men', 'men', 'men', 'option1', 1200, 0, 'Male shirt', '', '', ''),
(48, 'shirt', 'male shirt', 'men', 'men', 'men', 'option1', 1200, 0, 'Male shirt', '', '', ''),
(49, 'Black shirt', 'black shirt vest', 'men', 'men', 'men', 'published', 206, 0, 'Product Description', '', '', ''),
(50, 'Black shirt', 'black shirt vest', 'men', 'men', 'men', 'published', 206, 0, 'Product Description', '', '', ''),
(51, 'Black shirt', 'black shirt vest', 'men', 'men', 'men', 'published', 206, 0, 'Product Description', '', '', ''),
(52, 'Black shirt', 'black shirt vest', 'men', 'men', 'men', 'published', 206, 0, 'Product Description', '', '', ''),
(53, 'Black shirt', 'black shirt vest', 'men', 'men', 'men', 'published', 206, 0, 'Product Description', '', '', ''),
(54, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(55, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(56, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(57, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(58, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(59, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(60, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(61, 'sari', 'sari', 'men', 'men', 'men', 'published', 2321, 0, 'Product Description', '', '', ''),
(62, 'abc', 'abc', 'men', 'men', 'men', 'option1', 32423, 234, 'Product Description', '', 'zAXA', 'CCSSC');

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
(14, 'Men', 'Shoes', 'male shoes', 'imagenull'),
(15, 'Men', 'CLOTHING', 'All the clothes are related to this clothes', 'imagenull'),
(16, 'Men', 'Accessories', 'all other elements related to male example glass,male fashion etc', 'imagenull'),
(17, 'Games', 'Basket Ball', 'Basket Ball', 'imagenull'),
(18, 'Women', 'Clothing', 'all the clothes related female', 'imagenull'),
(19, 'Women', 'Bag', 'Hand Bag', 'imagenull'),
(20, 'Women', 'Accessories', 'female Accessories', 'imagenull'),
(21, 'Women', 'Beauti-parler', 'Women Beuty Parler fashaion', 'imagenull'),
(22, 'Children', 'CLOTHING', 'Description of Category', 'imagenull'),
(23, 'Children', 'Sports', 'Chldren sports games', 'imagenull'),
(24, 'Children', 'Shoes', 'child shoes', 'imagenull'),
(25, 'Children', 'Accessories', 'Description of Category', 'imagenull');

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
(18, 'Men', 'Shoes', 'All Shoes', 'Description of Category', 'imagenull'),
(19, 'Men', 'Shoes', 'Running', 'Running shoes', 'imagenull'),
(20, 'Men', 'Shoes', 'Training and Gym', 'Training and Gym shoes', 'imagenull'),
(21, 'Men', 'Shoes', 'Gaming Shoes', 'Description of Category', 'imagenull'),
(22, 'Men', 'CLOTHING', 'Sweater', 'winter season clothes sweater', 'imagenull'),
(23, 'Men', 'CLOTHING', 'Shirt', 'Male shirt latest design', 'imagenull'),
(24, 'Men', 'CLOTHING', 'Jeans', 'Jeans Paint latest designed', 'imagenull'),
(25, 'Men', 'CLOTHING', 'Hawaiian shirt', '', 'imagenull'),
(26, 'Men', 'CLOTHING', 'Gloves', 'Gloves', 'imagenull'),
(27, 'Men', 'Accessories', 'Glass', 'male Glass', 'imagenull'),
(28, 'Men', 'Accessories', 'Male Fashion', 'Male Fashion', 'imagenull'),
(29, 'Men', 'Accessories', 'Watch', 'Male Watch', 'imagenull'),
(30, 'Women', 'Clothing', 'SAARI', 'All saari', 'imagenull'),
(31, 'Women', 'Clothing', 'traditional clothes', '', 'imagenull'),
(32, 'Women', 'Clothing', 'Hindusm  clothes', 'hindu clothes', 'imagenull'),
(33, 'Women', 'Bag', 'Hand Bag', 'Description of Category', 'imagenull'),
(34, 'Women', 'Bag', 'Party Bag', 'Description of Category', 'imagenull'),
(35, 'Women', 'Clothing', 'Lady Vest', 'Description of Category', 'imagenull'),
(36, 'Children', 'CLOTHING', 'School dress', 'Description of Category', 'imagenull'),
(37, 'Children', 'Sports', 'Pubg Gun', 'Pubg gun', 'imagenull');

-- --------------------------------------------------------

--
-- Table structure for table `Temp_Cart`
--

CREATE TABLE `Temp_Cart` (
  `Temp_cart_id` int(44) NOT NULL,
  `temp_user_id` int(33) NOT NULL,
  `product_id` int(44) NOT NULL,
  `product_quantity` int(44) DEFAULT NULL,
  `product_size` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Temp_Cart`
--

INSERT INTO `Temp_Cart` (`Temp_cart_id`, `temp_user_id`, `product_id`, `product_quantity`, `product_size`) VALUES
(36, 18, 46, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp_user`
--

CREATE TABLE `temp_user` (
  `cookies_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_user`
--

INSERT INTO `temp_user` (`cookies_user_id`) VALUES
(41),
(42);

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
-- Indexes for table `temp_user`
--
ALTER TABLE `temp_user`
  ADD PRIMARY KEY (`cookies_user_id`);

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
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `Product_CheckOut`
--
ALTER TABLE `Product_CheckOut`
  MODIFY `CheckOut_id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `product_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(44) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_categoryid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `sub_sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `Temp_Cart`
--
ALTER TABLE `Temp_Cart`
  MODIFY `Temp_cart_id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `temp_user`
--
ALTER TABLE `temp_user`
  MODIFY `cookies_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
