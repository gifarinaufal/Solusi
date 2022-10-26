-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 06:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Content` text NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Title`, `Content`, `Category`, `Created_date`, `Updated_date`, `Status`) VALUES
(1, 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdsadasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'asdsadasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasdsadasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasdsadasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasdsadasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasdsadasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasdsadasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasdsadasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'asdasdasd', '2022-10-26 16:05:21', '2022-10-26 16:05:21', 'Thrash'),
(2, 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 'asdasd', '2022-10-26 14:36:47', '2022-10-26 14:36:47', 'Thrash'),
(3, 'asdasdasdasdasddata,asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', ' asdasdasdasdasddata,asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasddata,asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasddata,asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasddata,asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasddata,asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 'asdasdasdasdasddata,asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasddata,asdasd', '2022-10-26 15:26:41', '2022-10-26 15:26:41', 'Publish'),
(4, 'dasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas', 'dasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasdasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasdasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasdasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasdasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas', 'dasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas', '2022-10-26 15:02:21', '2022-10-26 15:02:21', 'Publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
