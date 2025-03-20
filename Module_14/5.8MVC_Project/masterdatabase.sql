-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 08:54 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `ang`
--

CREATE TABLE `ang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ang`
--

INSERT INTO `ang` (`id`, `name`, `phone`) VALUES
(1, 'name', 123456123),
(2, 'name', 123456789),
(3, 'test', 987987987),
(4, 'name', 789987987),
(5, 'rushik', 98798798),
(6, 'chekc', 456456);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`) VALUES
(1, 'TV'),
(2, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Baroda', 1),
(3, 'Surat', 1),
(4, 'Bhavnagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `countrry_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_title` varchar(200) NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_price` varchar(50) NOT NULL,
  `prod_insert_date` datetime NOT NULL,
  `prod_image` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_title`, `prod_desc`, `prod_price`, `prod_insert_date`, `prod_image`, `category_id`) VALUES
(1, 'LG GD510', 'Mobile ', '5000', '2018-02-06 00:00:00', 'default.jpg', 2),
(2, 'Samsund', 'Mobile ', '50000', '2018-02-06 00:00:00', 'default.jpg', 2),
(3, 'Penasonic', 'Plazma TV', '50000', '2018-02-06 00:00:00', 'default.jpg', 1),
(4, 'Doloremque itaque enim dicta eum molestiae eveniet ipsa minus sunt placeat quia enim occaecat tempor quaerat facilis nihil cupidatat', 'Consectetur aspernatur doloremque ut dolorum aut veritatis tempore voluptas enim rerum et amet eos', '113', '2009-04-08 00:00:00', 'default.jpg', 1),
(5, 'Doloremque itaque enim dicta eum molestiae eveniet ipsa minus sunt placeat quia enim occaecat tempor quaerat facilis nihil cupidatat', 'Consectetur aspernatur doloremque ut dolorum aut veritatis tempore voluptas enim rerum et amet eos', '113', '2009-04-08 00:00:00', 'default.jpg', 1),
(6, 'data', 'data', '456', '2017-09-28 00:00:00', 'default.jpg', 1),
(7, 'data', 'data', '456', '2017-09-28 00:00:00', 'default.jpg', 1),
(8, 'data', 'data', '456', '2017-09-28 00:00:00', 'default.jpg', 1),
(9, 'data', 'data', '456', '2017-09-28 00:00:00', 'default.jpg', 1),
(10, 'data', 'data', '456', '2017-09-28 00:00:00', 'default.jpg', 1),
(11, 'data', 'data', '456', '2017-09-28 00:00:00', 'default.jpg', 1),
(12, 'product', 'tite', '789', '2018-02-14 00:00:00', 'default.jpg', 1),
(13, 'check', 'descr', '123', '2018-12-31 00:00:00', 'DM A4 Post - 27 Jan.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(200) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'Guajrat', 1),
(2, 'Maharastra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `category_id`, `subcategory_title`) VALUES
(1, 1, 'samsund'),
(2, 1, 'Akai'),
(3, 1, 'ABc'),
(4, 2, 'Nokia'),
(5, 2, 'Mi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hobby` varchar(200) NOT NULL,
  `city` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2' COMMENT '1 for the admin and 2 for the general user',
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `gender`, `email`, `hobby`, `city`, `role_id`, `mobile`) VALUES
(1, 'admin', '123', 'Male', 'admin@gmail', 'Cricket,Music', 1, 1, ''),
(3, 'Sandeep', '123', 'Female', 'email@mail', 'Cricket,Reading', 2, 2, ''),
(9, 'nabuwyby', 'Pa$$w0rd!', 'Male', 'rodo@hotmail', 'Cricket,Music,Reading', 1, 2, ''),
(10, 'nabuwyby', 'Pa$$w0rd!', 'Male', 'rodo@hotmail', 'Cricket,Music,Reading', 1, 2, '345635612568'),
(15, 'bokuziv', 'Pa$$w0rd!', 'Female', 'updae@mail.com', 'Reading', 2, 2, '9898989898'),
(16, 'bokuziv', 'Pa$$w0rd!', 'Female', 'datysi@yahoo', 'Crikect,Reading', 2, 2, '987987987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ang`
--
ALTER TABLE `ang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ang`
--
ALTER TABLE `ang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
