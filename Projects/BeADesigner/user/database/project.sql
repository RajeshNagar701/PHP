-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 10:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'admin@123', 'aaaa'),
(2, 'admin@123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(5) NOT NULL,
  `area_name` varchar(15) NOT NULL,
  `city_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`) VALUES
(2, 'bapunagar', 1),
(3, 'Raipur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(39, 'Gift'),
(40, 'Printed Product'),
(41, 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(5) NOT NULL,
  `city_name` varchar(15) NOT NULL,
  `state_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Ahmedabad', 5),
(2, 'rajkot', 5);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(2) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `area_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `cust_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `gift` varchar(50) NOT NULL,
  `dog` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`cust_id`, `customer_id`, `name`, `email`, `gender`, `gift`, `dog`, `address`, `contact`, `photo`, `price`) VALUES
(1, 3, 'b', 'jjkhkj', 'Male', 'Myself', '2017-12-31', 'nkjnk', '5r5765', 'img.png', '350RS');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(5) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `email_id`, `password`, `f_name`, `l_name`, `gender`, `dob`, `address`, `contact_no`) VALUES
(2, 'sandylad66@gmail.com', '12345', 'sandeep', 'lad', '0', '1993-03-17', 'ahmedabad', 2147483647),
(3, 'abc@gmail.com', '1234', 'abc', 'patel', 'Male', '0000-00-00', '', 0),
(4, 'abc@gmail.com', '1234', 'abc', 'patel', '0', '1993-03-17', 'ahmedabad', 4756685),
(5, 'xyz@hotmail.com', 'abc123', 'Amit', 'Shah', 'Male', '0000-00-00', '', 0),
(6, '', 'zczxxzx', 'cx', 'z', 'female', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `image_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`image_id`, `name`, `image`, `price`, `qty`) VALUES
(4, 'Pilo', 'pilo.jpg', 400, 1),
(5, 'Tshirt', 'tshirts.jpeg', 350, 2),
(6, 'Photo frame', 'frame5.jpg', 350, 4),
(7, 'Mug', 'mug1.jpg', 350, 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(5) NOT NULL,
  `feedback` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `product_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback`, `date`, `product_id`, `customer_id`) VALUES
(3, 'Nice product', '2017-03-24', 34, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `discription` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `colour` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `sub_category_id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `show_index` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `image`, `discription`, `price`, `colour`, `size`, `quantity`, `sub_category_id`, `category_id`, `show_index`) VALUES
(34, 'teddy', 'teddy1.jpg', 'Teddy Bear', 400, 'White & Pi', '0', 5, 7, 39, 1),
(36, 'Teddy Bear', 'teddy3.jpg', 'Teddy Bear', 500, 'Red', '0', 7, 7, 40, 0),
(37, 'Teddy Bear', 'teddy4.jpg', 'Teddy Bear', 600, 'White & Pi', '0', 5, 7, 0, 0),
(38, 'Photo frame', 'pf1.jpg', 'Photo frame', 350, 'Black & Pi', '0', 4, 8, 0, 1),
(39, 'Photo frame', 'pf2.jpg', 'Photo frame', 700, 'Brown', '0', 2, 8, 0, 0),
(40, 'Photo frame', 'pf3.jpg', 'Photo frame', 400, 'Blue', '0', 6, 8, 0, 0),
(41, 'Idol', 'idol1.jpg', 'Idol ', 450, 'Gold', '0', 3, 9, 0, 0),
(42, 'Idol ', 'idol2.jpg', 'Idol ', 350, 'Orange', '0', 3, 9, 0, 0),
(43, 'Idol ', 'idol3.jpg', 'Idol ', 400, 'Coper', '0', 1, 9, 0, 0),
(44, 'Idol ', 'idol4.jpg', 'Idol ', 399, 'Red', '0', 2, 9, 0, 0),
(45, 'Men tshirt', 'm1.jpg', 'Men tshirt', 350, 'Black', 'XL', 4, 11, 0, 0),
(46, 'Men tshirt', 'm2.jpg', 'Men tshirt', 400, 'Red', 'm', 3, 11, 0, 0),
(47, 'Men tshirt', 'm3.jpg', 'Men tshirt', 450, 'Blue', 'L', 1, 11, 0, 0),
(48, 'Men tshirt', 'm4.jpg', 'Men tshirt', 350, 'blue & yel', 'M', 1, 11, 0, 0),
(49, 'Womens Tshirt', 'w1.jpg', 'Womens Tshirt', 450, 'yellow', 'L', 2, 12, 0, 0),
(50, 'Womens Tshirt', 'w2.jpg', 'Womens Tshirt', 500, 'Black', 'M', 2, 12, 0, 0),
(51, 'kids Tshirt', 'k1.jpg', 'kids Tshirt', 250, 'yellow', 'L', 2, 13, 0, 0),
(53, 'kids tshirt', 'k2.jpg', 'kids tshirt', 250, 'white', '', 2, 13, 0, 0),
(54, 'kids tshirt', 'k3.jpg', 'kids tshirt', 400, 'Orange', 'S', 2, 13, 0, 0),
(55, 'kids tshirt', 'k4.jpg', 'kids tshirt', 35, 'yellow', 'S', 1, 13, 0, 0),
(56, 'Mug', 'mg1.jpg', 'Two mugs', 450, 'white', '', 2, 10, 0, 0),
(57, 'Mug', 'mg2.jpg', 'Mug', 400, 'White & Re', '', 4, 10, 0, 0),
(58, 'Mug', 'mg3.jpg', 'Mug', 450, 'Orange & W', '', 2, 10, 0, 0),
(59, 'Mug', 'mg4.jpg', 'Mug', 300, 'white', '', 5, 10, 0, 0),
(60, 'Mug', 'mg5.jpg', 'Mug', 499, 'Black', '', 4, 10, 0, 0),
(61, 'Visiting Card', 'vc1.jpg', 'Visiting Card', 0, 'purple', '', 0, 15, 0, 0),
(62, 'Visiting Card', 'vc2.png', 'Visiting Card', 0, 'White & Gr', '', 0, 15, 0, 0),
(63, 'Visiting Card', 'vc3.jpg', 'Visiting Card', 0, 'Blue', '', 0, 15, 0, 0),
(64, 'Visiting Card', 'vc4.jpg', 'Visiting Card', 0, 'Gray & Ora', '', 0, 15, 0, 0),
(65, 'Pilo', 'p1.jpg', 'Pillo', 250, 'white', '', 2, 14, 0, 0),
(66, 'Pillo', 'p2.jpg', 'Pillo', 350, 'Pink', '', 4, 14, 0, 0),
(67, 'Pillo', 'p3.jpg', 'Pillo', 400, 'yellow', '', 1, 14, 0, 0),
(68, 'Pillo', 'p4.jpg', 'Pillo', 399, 'white', '', 3, 14, 0, 0),
(69, 'Diwali card', 'dw1.jpg', 'Diwali card', 350, '', '', 4, 16, 0, 0),
(70, 'Diwali card', 'dw2.jpg', 'Diwali card', 499, '', '', 5, 16, 0, 0),
(71, 'Diwali card', 'dw3.jpg', 'Diwali card', 399, '', '', 6, 16, 0, 0),
(72, 'Diwali card', 'd4.jpg', 'Diwali card', 450, '', '', 5, 16, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(5) NOT NULL,
  `shipping_address` varchar(100) NOT NULL,
  `shipping_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_address`, `shipping_date`) VALUES
(1, 'ahmedabad', '2017-03-25'),
(2, 'ahmedabad', '2017-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(5) NOT NULL,
  `state_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(5, 'gujarat'),
(6, 'Maharastra'),
(7, 'Rajasthan'),
(8, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(5) NOT NULL,
  `sub_category_name` varchar(20) NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `sub_category_name`, `category_id`) VALUES
(7, 'Teddy bear', 39),
(8, 'Photo frame', 39),
(9, 'Idol', 39),
(10, 'Mug', 40),
(11, 'Mens tshirt', 40),
(12, 'Womens tshirt', 40),
(13, 'Kids tshirt', 40),
(14, 'Pillow', 40),
(15, 'Visiting card', 41),
(16, 'Diwali card', 41);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `products` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_status` enum('Pending','Done','','') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_id`, `date`, `user_id`, `products`, `total`, `payment_status`) VALUES
(1, '2017-03-21', 3, '22', 100, 'Done'),
(2, '2017-03-23', 3, '22', 100, 'Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `area_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`sub_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
