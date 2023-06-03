-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 07:07 PM
-- Server version: 8.0.27
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse482`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_price` float NOT NULL,
  `items` varchar(255) NOT NULL,
  `payment_option` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `trx` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user_id`, `name`, `total_price`, `items`, `payment_option`, `number`, `trx`) VALUES
(1, 'Reagan Lara', 3950, '[]', 'Taka', '+1 (714) 642-3466', 'Ad consequuntur dolo'),
(1, 'Whoopi Montoya', 2500, '[]', 'Online', '+1 (539) 188-9281', 'Ut tenetur nulla rec'),
(1, 'Whoopi Montoya', 2500, '[]', 'Online', '+1 (539) 188-9281', 'Ut tenetur nulla rec');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
