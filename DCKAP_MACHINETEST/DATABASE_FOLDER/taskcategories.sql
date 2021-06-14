-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 07:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_interview_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `taskcategories`
--

CREATE TABLE `taskcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testcasesum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `taskcat_id` int(11) NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taskcategories`
--

INSERT INTO `taskcategories` (`id`, `categoryname`, `testcasesum`, `description`, `taskcat_id`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'Redmi', 'Redmi 9 power', 'Blazing Blue, 4GB RAM, 64GB Storage- 6000mAh Batte48MP Quad Camera', 4, 'download.jpg', '2021-06-13 21:39:10', '2021-06-13 21:39:10'),
(2, 'Redmi', 'Redmi 9A', 'Sea Blue 2GB RAM 32GB Storage) | 2GHz Octa-core Helio G25 Processor', 4, 'download.jpg', '2021-06-13 21:42:30', '2021-06-13 21:42:30'),
(3, 'Oneplus', 'OnePlus 9R 5G', 'Carbon Black, 8GB RAM, 128GB Storage', 5, 'download.jpg', '2021-06-13 21:43:41', '2021-06-13 21:43:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taskcategories`
--
ALTER TABLE `taskcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taskcategories`
--
ALTER TABLE `taskcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
