-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 07:48 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentcate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parentcate_id`, `created_at`, `updated_at`) VALUES
(1, 'MOBILES', 0, NULL, NULL),
(2, 'LAPTOPS', 0, NULL, NULL),
(3, 'TELEVISIONS', 0, NULL, NULL),
(4, 'Redmi', 1, '2021-06-13 21:24:58', '2021-06-13 21:24:58'),
(5, 'Oneplus', 1, '2021-06-13 21:25:10', '2021-06-13 21:25:10'),
(6, 'Samsung', 1, '2021-06-13 21:26:12', '2021-06-13 21:26:12'),
(7, 'Realme', 1, '2021-06-13 21:26:22', '2021-06-13 21:26:22'),
(8, 'MI', 1, '2021-06-13 21:26:44', '2021-06-13 21:26:44'),
(9, 'Acer', 2, '2021-06-13 21:26:56', '2021-06-13 21:26:56'),
(10, 'Apple', 2, '2021-06-13 21:27:09', '2021-06-13 21:27:09'),
(11, 'Dell', 2, '2021-06-13 21:27:18', '2021-06-13 21:27:18'),
(12, 'HP', 2, '2021-06-13 21:27:30', '2021-06-13 21:27:30'),
(13, 'Smart tv', 3, '2021-06-13 21:28:03', '2021-06-13 21:28:03'),
(14, 'FullHD tv', 3, '2021-06-13 21:28:25', '2021-06-13 21:28:25'),
(15, 'Linux smart tv', 3, '2021-06-13 21:28:40', '2021-06-13 21:28:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
