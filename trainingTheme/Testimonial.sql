-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 06:42 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpresstraining`
--

-- --------------------------------------------------------

--
-- Table structure for table `wordpress`
--

CREATE TABLE `wordpress` (
  `ID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `testimonial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wordpress`
--

INSERT INTO `wordpress` (`ID`, `name`, `email`, `phone_number`, `testimonial`) VALUES
(6, 'sdsadsa sasa', 'sadbas@bdsd.com', 32132737, 'fsd hbs dhs dsdvsavdsavd dahqwehwbe'),
(7, 'sdsadsad', 'kaka@hasdh.co', 877676, 'vsd gvsa dasvdgsadv'),
(948, 'dasdsad', 'asdbsbd@adjasbd.com', 9182812, 'ddjsd asbdhsbdhas'),
(728, 'sdsadb', 'fdnsadd@ccc.co', 88188181, 'asjdnjs asndhsadbhsbd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
