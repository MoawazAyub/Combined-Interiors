-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 01:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Coal'),
(2, 'Bricks'),
(3, 'Marbles'),
(4, 'Fanoos'),
(5, 'House Holds'),
(6, 'paint Services'),
(7, 'Irons');

-- --------------------------------------------------------

--
-- Table structure for table `cusers`
--

CREATE TABLE `cusers` (
  `Cusers_id` int(11) NOT NULL,
  `Cusers_name` varchar(255) NOT NULL,
  `Cusers_password` varchar(255) NOT NULL,
  `Cusers_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cusers`
--

INSERT INTO `cusers` (`Cusers_id`, `Cusers_name`, `Cusers_password`, `Cusers_email`) VALUES
(1, 'Akram', 'jaja', 'jaja@gmail.com'),
(2, 'Mohsin', 'TA', 'ha@gmail.com'),
(3, 'zahid', 'zahid', 'zahid@gmail.com'),
(4, 'Jamshaid', 'jimi', 'jam@jam.com'),
(5, 'pak', 'pki', 'pki@gmail.com'),
(6, 'lion', 'lion', 'lion@lion.com'),
(7, 'pak', 'pak', 'pak@pak.com'),
(8, 'pak', 'pak', 'pak@pak.com'),
(9, 'pak', 'pak', 'pak@pak.com'),
(10, 'pak', 'pak', 'pak@pak.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(1, 'Green Coal', 1, 2511, 10, 'The harder forms, such as anthracite coal, can be regarded as metamorphic rock because of later exposure to elevated temperature and pressure. Coal is composed primarily of carbon, along with variable quantities of other elements, chiefly hydrogen, sulfur, oxygen, and nitrogen.', 'The harder forms, such as anthracite coal, can be regarded as metamorphic rock because of later....', 'http://placehold.it/320x150'),
(2, 'Black Bricks', 2, 2155, 3, 'A brick is building material used to make walls, pavements and other elements in masonry construction. ... Two basic categories of bricks are fired and non-fired bricks. Block is a similar term referring to a rectangular building unit composed of similar materials, but is usually larger than a brick.', 'A brick is building material used to make walls, pavements and other elements in masonry construction....', 'http://placehold.it/320x150'),
(4, 'Sohail Coal', 1, 100, 5, 'This is a special piece', 'this is good stuff', ''),
(6, 'white paint', 6, 12, 7, 'very good white paint', 'very good white paint', ''),
(7, 'yogurt', 2, 456, 50, 'drjsjajlfakf', 'zdfs', ''),
(8, 'Sheriar', 5, 12, 2, 'saefeffwefwef', 'uuykuli;op;', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Moawaz Ayub', 'Moawaz@gmail.com', 'fast'),
(2, 'Ali', 'Ali@gmail.com', 'lion');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_password` varchar(255) NOT NULL,
  `vendor_phone` varchar(255) NOT NULL,
  `vendor_shop_addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_email`, `vendor_password`, `vendor_phone`, `vendor_shop_addr`) VALUES
(1, 'zakaria', 'zakaria@ria.com', 'zaka', '090078601', '252-A,military Accounts'),
(3, 'jamshaid', 'jami@gmail.com', 'jami', '02001423015', 'alias road karachi'),
(4, '123', 'ad@gmail.com', 'asd', '02000142', '252 - A lahore');

-- --------------------------------------------------------

--
-- Table structure for table `vproducts`
--

CREATE TABLE `vproducts` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vproducts`
--

INSERT INTO `vproducts` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`, `vendor_id`) VALUES
(1, 'Tetra', 1, 12, 123, 'Very well established tetra', 'Very well established tetra', '', 1),
(2, 'Grafite Rock', 3, 14567, 3, 'Yar ye to bohat mainga hay', 'Yar ye to bohat mainga hay', '', 3),
(6, 'blue fanoos', 4, 25504, 13, 'most famous product', 'most famous product', '', 1),
(7, 'ticoon blaster', 5, 120, 89, 'this is taken from dragon ball xenoverse ', 'this has to be good', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cusers`
--
ALTER TABLE `cusers`
  ADD PRIMARY KEY (`Cusers_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vproducts`
--
ALTER TABLE `vproducts`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cusers`
--
ALTER TABLE `cusers`
  MODIFY `Cusers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vproducts`
--
ALTER TABLE `vproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
