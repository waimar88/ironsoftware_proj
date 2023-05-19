-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 09:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_design`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id` int(11) NOT NULL,
  `category` varchar(55) NOT NULL,
  `title` varchar(125) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(155) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id`, `category`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'pdf', 'C# PDF Library that prioritizes accuracy, ease of use, and speed', 'IronPDF is the leading C# PDF library for generating & editing PDFs. Its user friendly API allows developers to rapidly deliver professional, high quality PDFs from HTML in .NET projects.', 'pro-pdf.svg', '2023-05-19 05:56:12', NULL),
(2, 'barcode', 'A C# Barcode Library that prioritizes accuracy, ease of use, and speed.', 'IronBarcode is the leading C# Barcode & QR library for reading and creating QR & Barcodes in .NET. Its user friendly API allows developers to add Barcode functionality to .NET projects in minutes.', 'pro-barcode.svg', '2023-05-19 05:57:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
