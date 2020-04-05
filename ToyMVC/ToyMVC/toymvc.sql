-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 03:46 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toymvc`
--
DROP DATABASE IF EXISTS `toymvc`;
CREATE DATABASE IF NOT EXISTS `toymvc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `toymvc`;

-- --------------------------------------------------------

--
-- Table structure for table `toy`
--

DROP TABLE IF EXISTS `toy`;
CREATE TABLE `toy` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toy`
--

INSERT INTO `toy` (`id`, `name`, `description`, `price`) VALUES
(1, 'Model Train', 'A black steam train engine.', '34.22'),
(2, 'Pogo Stick', 'Has big spring. Enables children to bounce up and down.', '12.77'),
(3, 'Red Ball', 'Round. Highly kickable.', '4.55'),
(4, 'Racing Car', 'Fast car.', '2.34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
