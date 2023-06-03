-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2023 at 06:51 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

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
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `product_condition` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_link` varchar(200) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `price`, `location`, `product_condition`, `image_link`, `username`, `user_email`, `user_phone`) VALUES
(1, 'Sackboy Adventure', '1950', 'Gulshan', 'Mint', 'https://m.media-amazon.com/images/I/81W13YKKR1L.jpg', 'Shams', 'shams12@gmail.com', '01705694753'),
(2, 'Batman Arkham City', '2000', 'Banani', 'Used', 'https://upload.wikimedia.org/wikipedia/en/0/00/Batman_Arkham_City_Game_Cover.jpg', 'Anik', 'anik@anik.com', '015976357'),
(3, 'Call of Duty Modern Warfare', '500', 'Dhanmondi', 'Used', 'https://upload.wikimedia.org/wikipedia/en/d/d4/Call_of_Duty_-_Modern_Warfare_Remastered.jpeg', 'Rafsan', 'rafsan.quayes@gmail.com', '01780633351'),
(4, 'Assassin\'s Creed Black Flag', '5000', 'Uttara', 'Mint', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK-d1oh_5azjh2sm4voD2b0m0wZ2XRer1y9Wt-ArEDJibZmhFKaWZtqYYQ0XRpi5YHDh8&usqp=CAU', 'Shams', 'shams12@gmail.com', '01705694753'),
(6, 'Witcher 3', '10000', 'Dhaka', 'Mint', 'https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg', 'Rafsan', 'rafsanquayes@gmail.com', '01706333510'),
(7, 'Grand Theft Auto V', '1200', 'Dhaka', 'Used', 'https://www.gamershopbd.com/wp-content/uploads/2021/01/Grand-Theft-Auto-V-cover.jpg', 'Shams', 'shams@shams.com', '015468723141');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
