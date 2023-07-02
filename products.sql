-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 02:43 PM
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
-- Database: `nicha_charoenying`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อสินค้า',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ราคาสินค้า',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รายละเอียดสินค้า',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปสินค้า',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ข้อต่อตรงลด-หนา SCG 3 นิ้วx1 1/4 นิ้ว สีฟ้า', '100', 'ข้อต่อตรงลด ใช้ต่อเปลี่ยนท่อประปาขนาดใหญ่จาก 3 นิ้ว เป็น 1 1/4 นิ้ว', 'Roc1EYgQG1.jpg', '2023-07-02 12:33:09', '2023-07-02 12:43:31'),
(3, 'ข้อต่อสามทางลด-บาง SCG 4 นิ้วX3 นิ้ว สีฟ้า', '180', 'ข้อต่อสามทางลด สำหรับเชื่อมต่อท่อประปา เพื่อเพิ่มเส้นทางเดินท่อ', 'a4ISZA1ukj.jpg', '2023-07-02 12:33:54', '2023-07-02 12:33:54'),
(4, 'หลอดไฟ มอก. LED 7 WATT ฝาขุ่น หรี่แสงได้ รุ่น E-27', '170', 'มีให้เลือกทั้งสี dayและสี warm', 'M8SlrDumAr.jpg', '2023-07-02 12:40:41', '2023-07-02 12:40:41'),
(5, 'หลอดตะเกียบแบบเสียบ มอก. PLC 10 W', '35', 'ประหยัดไฟกว่า 70% เมื่อเทียบกับหลอดไส้ มีอายุการใช้งานทนทาน 8,000-10,000 ชั่วโมง', 'evfwBMkqoc.jpg', '2023-07-02 12:41:27', '2023-07-02 12:41:27'),
(6, 'หลอดนีออน มอก.T8 18 WATT', '18', 'หลอดไฟฟลูออเรสเซนต์แบบตรงกำลังไฟ 18 วัตต์ ความสว่าง 980 Lumens (18 วัตต์)', 'jZTrasjWuw.jpg', '2023-07-02 12:42:10', '2023-07-02 12:42:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
