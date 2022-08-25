-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 04:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `transac_id` int(5) NOT NULL,
  `contents` varchar(40) NOT NULL,
  `no_of_items` int(5) NOT NULL,
  `total_cost` int(5) NOT NULL,
  `cus_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`transac_id`, `contents`, `no_of_items`, `total_cost`, `cus_id`) VALUES
(1, 'earphones', 1, 1500, 1),
(2, 'Bottle', 3, 2000, 1),
(3, 'Smart Watch', 6, 7000, 1),
(4, 'Shirts', 7, 4999, 0),
(5, 'spectacles', 2, 4999, 0),
(6, 'College bag', 4, 2999, 1),
(7, 'shampoo', 5, 900, 0),
(8, 'shoes', 3, 5999, 0),
(9, 'deodorant', 1, 899, 1),
(10, 'harry potter books', 7, 1999, 1),
(11, 'Speakers', 5, 2999, 0),
(12, 'Basket balls', 10, 30000, 0),
(13, 'traveling bag', 1, 2999, 1),
(14, 'curtains', 5, 1000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`transac_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
