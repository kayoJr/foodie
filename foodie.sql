-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 10:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `rn` int(25) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` double NOT NULL,
  `picture` varchar(500) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `picture`, `type`) VALUES
(5, 'cheese burger', 2500, 'burger.jpg', 'main_dish'),
(9, 'coktail', 25, 'drinks.jpg', 'drinks'),
(10, 'chocolate', 12, 'dessert.jpg', 'dessert'),
(11, 'snack', 10, 'snacks.jpg', 'snack'),
(12, 'main', 4, 'burger.jpg', 'main_dish'),
(15, 'da', 3, 'burger.jpg', 'main_dish'),
(16, '3', 33, 'burger.jpg', 'main_dish'),
(17, 'dafa', 3, 'burger.jpg', 'main_dish'),
(18, 'daf', 32, 'burger.jpg', 'main_dish'),
(19, 'af', 3, 'burger.jpg', 'main_dish'),
(20, 'edfa', 3, 'burger.jpg', 'main_dish'),
(21, 'a', 3, 'burger.jpg', 'main_dish'),
(22, 'daf', 5, 'burger.jpg', 'main_dish'),
(23, 'adf', 3, 'burger.jpg', 'main_dish'),
(24, 'daf', 32, 'burger.jpg', 'main_dish'),
(25, 'adsf', 3, 'burger.jpg', 'main_dish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rn` (`rn`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `rn` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
