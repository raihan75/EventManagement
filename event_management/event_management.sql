-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 12:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `description`, `image`) VALUES
(2, 'Birthday', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', 'images/1.jpg'),
(5, 'Corporate', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', ''),
(3, 'Reception', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', ''),
(4, 'Termenic Ceremony', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', ''),
(1, 'Wedding', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `service_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=inactive; 1=active; 2=completed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `order_id` int(11) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `vat` decimal(10,0) NOT NULL,
  `grand_total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `review_date` date NOT NULL,
  `event_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `event_name` (`event_name`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `catering` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `decoration` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `venue` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`service_id`) REFERENCES `security` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`service_id`) REFERENCES `photography` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_6` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`event_name`) REFERENCES `event` (`name`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
