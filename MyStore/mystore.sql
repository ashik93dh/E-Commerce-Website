-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 06:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(99) NOT NULL,
  `admin_password` varchar(99) NOT NULL,
  `admin_phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`) VALUES
(1, 'Ashikur Rahman', 'wreevu007@gmail.com', 'barbados321', 1620851232),
(2, 'Mujibur Rahman', 'mujibbd55@gmail.com', 'mujib123', 1712728434);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `order_id` varchar(99) NOT NULL,
  `product_id` varchar(99) NOT NULL,
  `product_qty` int(99) NOT NULL,
  `order_by` varchar(99) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `order_id`, `product_id`, `product_qty`, `order_by`, `date`) VALUES
(15, '6', '30 ', 2, '', '2017-03-21 11:20:59'),
(16, '6', '26', 1, '', '2017-03-21 11:22:50'),
(17, '6', '22', 1, '', '2017-03-21 11:22:57'),
(44, '10', '28', 2, '', '2017-03-21 12:53:16'),
(45, '10', '27', 1, '', '2017-03-21 12:53:17'),
(46, '10', '24', 1, '', '2017-03-21 12:53:18'),
(47, '10', '22', 1, '', '2017-03-21 12:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat`) VALUES
(1, 'Mobile'),
(2, 'Laptop'),
(3, 'Computer'),
(4, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` varchar(99) NOT NULL,
  `product_name` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_img` text NOT NULL,
  `product_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_name`, `product_desc`, `product_price`, `product_img`, `product_status`) VALUES
(22, 'Mobile', 'One Plus-X', '                                                                                                                                                                        Ram 4 GB\r\nRom 32 GB\r\nAndroid Marshmallow                                                                                                                                                            ', 299, 'oneplus-x.jpg', 'Yes'),
(24, 'Computer', 'iMac', '                                                                                                                Apple Computer                                                                                                        ', 1300, 'iMac27.jpg', 'Yes'),
(26, 'Mobile', 'iPhone6', '                                                                                                                Apple Phone        \r\n32Gb                                                                                                ', 500, 'iPhone.jpg', 'Yes'),
(27, 'Accessories', 'Converse', '                                                        Newly imported from Thailand                                                    ', 50, 'converse.jpg', 'Yes'),
(28, 'Laptop', 'Dell Core i5', '                                                        Ram 8GB                                                    ', 500, 'dell.jpg', 'Yes'),
(30, 'Accessories', 'Home Box System', '                                                        Create a movie theatre in your own home                                                    ', 450, 'roku-premiere.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(99) NOT NULL,
  `cell_no` int(11) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cell_no`, `password`) VALUES
(3, 'Mujibur Rahman', 'mujibbd55@gmail.com', 1712728434, '12286266448e3f804787f9213bfa3aa7'),
(4, 'Mahfuza Khatun', 'champabd65@gmail.com', 1558638161, '06537ed77e138478825887d49ae839ed'),
(6, 'Hero Alam', 'alam123@gmail.com', 1642042007, 'e75ddb9f487cd7ea2bc842bc7171fa36'),
(7, 'Rubaiyat Islam', 'rubaiyatctg66@gmail.com', 1954977219, 'd0e0dc6c50861bb6199eb3482c8e3a95'),
(10, 'Md.Ashikur Rahman', 'ashik93dh@gmail.com', 1620851232, '61ac1b3d1016d146c00b9af530709128');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
