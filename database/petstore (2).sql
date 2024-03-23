-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 08:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`, `productid`, `price`, `orderid`) VALUES
(2, 1, 2, 18, NULL),
(3, 1, 3, 150, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Cat and Dog'),
(2, 'Bird and small animals'),
(3, 'Fish');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `total`) VALUES
(1, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` varchar(50) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `c_id` int(5) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_img`, `c_id`, `description`) VALUES
(1, 'Circle brush', '15 ', 'images/brush.jpg', 1, 'brush for cats and dogs'),
(2, 'Rectangle brush', '18 ', 'images/brush2.jpg', 1, 'brush for cats and dogs'),
(3, 'Cage with one window', '150', 'images/cage.jpg', 1, 'For cats'),
(4, 'Cage with two windows', '180', 'images/cage4.jpg', 1, 'For cats'),
(5, 'Hand Bracelet Collar', '10', 'images/collar2.jpg', 1, 'For cats'),
(6, 'Bow Collar', '10', 'images/collar4.jpg', 1, 'For cats'),
(7, 'Food with turkey', '20', 'images/food.png', 1, 'For cats'),
(8, 'House Cage', '250', 'images/cage2.jpg', 1, 'For dogs'),
(9, 'Cage', '270', 'images/cage6.jpg', 1, 'For dogs'),
(10, 'Bow Ring Collar', '12', 'images/collar3.jpg', 1, 'For dogs'),
(11, 'Pedigree', '45', 'images/food1.jpg', 1, 'For dogs'),
(12, 'Royal Canin', '45', 'images/food3.jpg', 1, 'For dogs'),
(13, 'Brit', '60', 'images/food5.jpg', 2, 'For rabbit'),
(14, 'Single6', '55', 'images/food8.jpg', 2, 'For small animals'),
(15, 'Budgle', '65', 'images/birds.jpg', 2, 'For birds'),
(16, 'Sand', '30', 'images/sand.jpg', 2, 'For samall animals'),
(17, 'Antiparasitic spray for cages', '32', 'images/spray.jpg', 2, 'For birds and small animals'),
(18, 'Boll Toys', '14', 'images/toys.jpg', 2, 'For birds and small animals'),
(19, 'Toys', '317', 'images/toys2.jpg', 2, 'For small animals'),
(20, 'Grilled Cage', '560', 'images/cage5.jpg', 2, 'For birds and small animals'),
(21, 'Small animal water drinker', '32', 'images/water.jpg', 2, 'For birds and small animals'),
(22, 'Aquarium', '400', 'images/Aquarium.jpg', 3, 'For Fish'),
(23, 'Glass Aquarium', '800', 'images/glass Aquarium.jpg', 3, 'For Fish'),
(24, 'Aquafin', '25', 'images/food f.jpg', 3, 'For Fish'),
(25, 'protin powder', '25', 'images/food f1.jpg', 3, 'For Fish'),
(26, 'Filter', '120', 'images/filter.jpg', 3, 'For Aquarium'),
(27, 'Plant', '50', 'images/plant.jpg', 3, 'For Aquarium'),
(28, 'Aqua filter', '90', 'images/ox.jpg', 3, 'For Aquarium');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rat_id`, `user_id`, `rating`, `comment`, `prod_id`) VALUES
(1, 1, 1, 'sfadsd', 2),
(2, 1, 4, 'hii its nice one ', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`) VALUES
(1, 'RAJSHAH', 'rajshah123@gmail.com', '12345678'),
(2, 'admin123', 'admin123@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cid_fk` (`c_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rat_id`),
  ADD KEY `userid_fk` (`user_id`),
  ADD KEY `prodid_fk` (`prod_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cid_fk` FOREIGN KEY (`c_id`) REFERENCES `category` (`c_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `prodid_fk` FOREIGN KEY (`prod_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `userid_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
