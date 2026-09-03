-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2026 at 08:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint UNSIGNED NOT NULL,
  `tower_id` bigint UNSIGNED NOT NULL,
  `unit_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `koor_id` bigint UNSIGNED DEFAULT NULL,
  `complaint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` text COLLATE utf8mb4_unicode_ci,
  `photo3` text COLLATE utf8mb4_unicode_ci,
  `status` enum('accept','finish','proses','request','deny','pending','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'request',
  `tanggal_eksekusi` date DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `tower_id`, `unit_id`, `user_id`, `koor_id`, `complaint`, `photo1`, `photo2`, `photo3`, `status`, `tanggal_eksekusi`, `keterangan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 16, 16, 1, NULL, 'Pergantian lampu dan cat dinding kamar mandi', 'complaints/complaint_6a9926e7cf72a.jpeg', 'complaints/complaint_6a9926e7cfbae.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:03', '2026-09-03 00:51:03'),
(2, 16, 17, 1, NULL, 'Pengenatan wastafel', 'complaints/complaint_6a9926e821e1a.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(3, 17, 18, 1, NULL, 'Perbaikan dinding retak kamar tidur', 'complaints/complaint_6a9926e82364f.jpeg', 'complaints/complaint_6a9926e823976.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(4, 16, 19, 1, NULL, 'Perbaikan dinding retak kamar tidur', 'complaints/complaint_6a9926e8255ac.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(5, 18, 20, 1, NULL, 'Perbaikan fitting lampu', 'complaints/complaint_6a9926e826f8b.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(6, 16, 21, 1, NULL, 'Perbaikan dinding retak kamar tidur dan pemgecatan ', 'complaints/complaint_6a9926e828214.jpeg', 'complaints/complaint_6a9926e828551.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(7, 16, 22, 1, NULL, 'Pengecatan hunian', 'complaints/complaint_6a9926e829f18.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(8, 19, 23, 1, NULL, 'Pergantian lampu dan cat dinding kamar mandi', 'complaints/complaint_6a9926e82be6d.jpeg', 'complaints/complaint_6a9926e82c360.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(9, 19, 24, 1, NULL, 'Perbaikan keramik wastafel', 'complaints/complaint_6a9926e82df5d.jpeg', 'complaints/complaint_6a9926e82e349.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(10, 16, 25, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e82fcfd.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(11, 16, 26, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e831521.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(12, 18, 27, 1, NULL, 'Perbaikan grease trap mampet', 'complaints/complaint_6a9926e832ba9.jpeg', 'complaints/complaint_6a9926e832fa0.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(13, 19, 28, 1, NULL, 'Pergantian sillinder', 'complaints/complaint_6a9926e834773.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(14, 19, 29, 1, NULL, 'Pergantian sillinder', 'complaints/complaint_6a9926e83612b.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(15, 19, 30, 1, NULL, 'Perbaikan kebocoran diatas dapur', 'complaints/complaint_6a9926e83798e.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(16, 17, 31, 1, NULL, 'Perbaikan dinding retak kamar tidur', 'complaints/complaint_6a9926e838fcb.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(17, 18, 32, 1, NULL, 'Perbaikan meteran air', 'complaints/complaint_6a9926e83a814.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(18, 16, 33, 1, NULL, 'Perbaikan meteran air', 'complaints/complaint_6a9926e83c08b.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(19, 19, 28, 1, NULL, 'Perbaikan fitting lampu', 'complaints/complaint_6a9926e83d7d4.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(20, 19, 34, 1, NULL, 'Perbaikan fitting lampu', 'complaints/complaint_6a9926e83ed02.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(21, 18, 35, 1, NULL, 'Perbaikan plin keramik dan tembok bolong', 'complaints/complaint_6a9926e840288.jpeg', 'complaints/complaint_6a9926e8405bc.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(22, 20, 36, 1, NULL, 'Perbaikan grease trap mampet', 'complaints/complaint_6a9926e841f29.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(23, 16, 37, 1, NULL, 'Pergantian sillinder', 'complaints/complaint_6a9926e8436e6.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(24, 18, 38, 1, NULL, 'Perbaikan instalasi listrik', 'complaints/complaint_6a9926e844ef6.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(25, 16, 39, 1, NULL, 'Pengenatan kamar mandi ', 'complaints/complaint_6a9926e84668a.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(26, 16, 40, 1, NULL, 'Pergantian sillinder', 'complaints/complaint_6a9926e847cd3.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(27, 16, 40, 1, NULL, 'Pengenatan kamar mandi ', 'complaints/complaint_6a9926e8491f5.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(28, 19, 41, 1, NULL, 'Perbaikan pintu kamar mandi', 'complaints/complaint_6a9926e84a83b.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(29, 19, 42, 1, NULL, 'Perbaikan dinding dan keramik', 'complaints/complaint_6a9926e84be23.jpeg', 'complaints/complaint_6a9926e84c11f.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(30, 16, 43, 1, NULL, 'Perbaikan kran ', 'complaints/complaint_6a9926e84d9e0.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(31, 17, 44, 1, NULL, 'Perbaikan balkon mampet', 'complaints/complaint_6a9926e84f3e8.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(32, 1, 1, 1, NULL, 'Perbaikan kwh', 'complaints/complaint_6a9926e8501d3.png', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(33, 19, 45, 1, NULL, 'Perbaikan engsel pintu', 'complaints/complaint_6a9926e851c4f.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(34, 16, 46, 1, NULL, 'Melancarkan floor drain mampet', 'complaints/complaint_6a9926e853191.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(35, 16, 47, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e854754.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(36, 20, 48, 1, NULL, 'Perbaikan floor drain balkon', 'complaints/complaint_6a9926e8561c5.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(37, 20, 49, 1, NULL, 'Perbaikan dinding', 'complaints/complaint_6a9926e857ada.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(38, 18, 50, 1, NULL, 'Perbaikan floor drain balkon', 'complaints/complaint_6a9926e858f1b.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(39, 16, 51, 1, NULL, 'Pengenatan wastafel', 'complaints/complaint_6a9926e85a4a1.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(40, 20, 49, 1, NULL, 'Pengecatan hunian', 'complaints/complaint_6a9926e85bbd8.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(41, 16, 52, 1, NULL, 'Perbaikan dinding', 'complaints/complaint_6a9926e85d2c2.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(42, 20, 53, 1, NULL, 'Perbaikan floor drain balkon', 'complaints/complaint_6a9926e85e956.jpeg', 'complaints/complaint_6a9926e85eca5.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(43, 16, 54, 1, NULL, 'Melancarkan floor drain mampet', 'complaints/complaint_6a9926e860575.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(44, 19, 55, 1, NULL, 'Perbaikan handle pintu hunian', 'complaints/complaint_6a9926e861af0.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(45, 19, 56, 1, NULL, 'Pengenatan kamar mandi', 'complaints/complaint_6a9926e86318d.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(46, 20, 57, 1, NULL, 'Perbaikan dinding', 'complaints/complaint_6a9926e864cb7.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(47, 16, 58, 1, NULL, 'Perbaikan pintu kamar mandi', 'complaints/complaint_6a9926e866446.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(48, 20, 59, 1, NULL, 'Perbaikan pintu kamar mandi', 'complaints/complaint_6a9926e8678f3.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(49, 20, 60, 1, NULL, 'Pengecatan hunian', 'complaints/complaint_6a9926e868f3b.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(50, 20, 61, 1, NULL, 'Pengecatan hunian', 'complaints/complaint_6a9926e86a908.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(51, 16, 62, 1, NULL, 'Pengecatan hunian', 'complaints/complaint_6a9926e86c024.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(52, 16, 63, 1, NULL, 'Perbaikan dinding', 'complaints/complaint_6a9926e86d5a5.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(53, 19, 64, 1, NULL, 'Perbaikan dinding', 'complaints/complaint_6a9926e86f0bf.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(54, 16, 65, 1, NULL, 'Pengecatan hunian', 'complaints/complaint_6a9926e87094f.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(55, 20, 66, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e872688.jpeg', 'complaints/complaint_6a9926e8729a7.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(56, 18, 67, 1, NULL, 'Perbaikan saklar', 'complaints/complaint_6a9926e873fd5.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(57, 19, 68, 1, NULL, 'Perbaikan handle pintu', 'complaints/complaint_6a9926e87574a.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(58, 1, 1, 1, NULL, 'Melancarkan floor drain mampet', 'complaints/complaint_6a9926e8763af.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(59, 16, 69, 1, NULL, 'Perbaikan pintu kamar mandi', 'complaints/complaint_6a9926e877ae3.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(60, 18, 70, 1, NULL, 'Perbaikan jalur pipa', 'complaints/complaint_6a9926e879416.jpeg', 'complaints/complaint_6a9926e879713.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(61, 18, 71, 1, NULL, 'Perbaikan wastafel mampet', 'complaints/complaint_6a9926e87ae21.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(62, 17, 72, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e87c4f3.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(63, 16, 73, 1, NULL, 'Perbaikan listrik hunian', 'complaints/complaint_6a9926e87da28.jpeg', 'complaints/complaint_6a9926e87dd38.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(64, 19, 74, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e87f390.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(65, 16, 75, 1, NULL, 'Perbaikan Pintu', 'complaints/complaint_6a9926e880cf9.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(66, 16, 76, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e88224a.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(67, 16, 77, 1, NULL, 'Perbaikan wastafel mampet', 'complaints/complaint_6a9926e88392e.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(68, 20, 78, 1, NULL, 'Perbaikan KWH ', 'complaints/complaint_6a9926e8851c9.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(69, 16, 79, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e8869d4.jpeg', 'complaints/complaint_6a9926e886dce.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(70, 20, 80, 1, NULL, 'Perbaikan kebocoran hunian', 'complaints/complaint_6a9926e888410.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(71, 16, 81, 1, NULL, 'Pengenatan area wastafel', 'complaints/complaint_6a9926e889983.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(72, 16, 82, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e88b086.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(73, 16, 83, 1, NULL, 'Perbaikan kebocoran di atas dapur', 'complaints/complaint_6a9926e88c454.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(74, 19, 84, 1, NULL, 'Perbaikan wastafel mampet', 'complaints/complaint_6a9926e88da70.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(75, 20, 85, 1, NULL, 'Pengenatan area wastafel', 'complaints/complaint_6a9926e88f0b5.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(76, 17, 86, 1, NULL, 'Pengenatan area wastafel', 'complaints/complaint_6a9926e89061d.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(77, 17, 87, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e891e67.jpeg', 'complaints/complaint_6a9926e892151.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(78, 17, 88, 1, NULL, 'Pergantian meteran air', 'complaints/complaint_6a9926e8937cf.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(79, 17, 89, 1, NULL, 'Perbaikan kamar mandi', 'complaints/complaint_6a9926e8950e9.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(80, 17, 90, 1, NULL, 'Pengecetan kamar mandi', 'complaints/complaint_6a9926e896386.jpeg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(81, 18, 91, 1, NULL, 'Perbaikan pintu dan saklar', 'complaints/complaint_6a9926e897871.jpeg', 'complaints/complaint_6a9926e897bc5.jpeg', NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(82, 16, 92, 1, NULL, 'Pengenatan kamar mandi', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(83, 16, 93, 1, NULL, 'Pengenatan kamar mandi', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(84, 16, 94, 1, NULL, 'Pengenatan kamar mandi', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(85, 16, 95, 1, NULL, 'Pengenatan area wastafel', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(86, 19, 96, 1, NULL, 'Perbaikan wastafel bocor', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(87, 18, 97, 1, NULL, 'Pengenatan kamar mandi', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(88, 16, 98, 1, NULL, 'Perbaikan pintu kamar mandi', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(89, 18, 99, 1, NULL, 'Perlancar floor drain mampet', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(90, 17, 100, 1, NULL, 'Perbaikan pintu utama', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(91, 16, 62, 1, NULL, 'Pengenatan kamar mandi', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(92, 17, 101, 1, NULL, 'Perbaikan kamar mandi', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(93, 18, 102, 1, NULL, 'Pengenatan balkon', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(94, 16, 98, 1, NULL, 'Perbaikan Wastafel', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(95, 19, 103, 1, NULL, 'Perlancar floor drain mampet', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(96, 16, 104, 1, NULL, 'Pengenatan kamar mandi dan balkon', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(97, 20, 78, 1, NULL, 'Pengenatan area wastafel', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(98, 20, 105, 1, NULL, 'Perbaikan pintu utama', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(99, 20, 106, 1, NULL, 'Pengenatan balkon', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(100, 19, 107, 1, NULL, 'Perbaikan kran wastafel', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(101, 16, 108, 1, NULL, 'Perbaikan pintu utama', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(102, 19, 109, 1, NULL, 'Pengenatan balkon', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(103, 19, 110, 1, NULL, 'Pengenatan balkon', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(104, 18, 111, 1, NULL, 'Perbaikan kran wastafel', 'complaints/placeholder.jpg', NULL, NULL, 'request', NULL, NULL, NULL, '2026-09-03 00:51:04', '2026-09-03 00:51:04'),
(105, 18, 119, 1, NULL, 'Mengganti kran wastafel yang rusak', 'complaints/rawabuaya_6a9926f8291eb.jpeg', 'complaints/rawabuaya_6a9926f8294e6.jpeg', NULL, 'finish', '2026-01-31', NULL, NULL, '2026-01-30 17:00:00', '2026-01-30 17:00:00'),
(106, 16, 120, 1, NULL, 'Memperbaiki gagang pintu yang lepas/rusak', 'complaints/rawabuaya_6a9926f82977d.jpeg', 'complaints/rawabuaya_6a9926f8299ac.jpeg', NULL, 'finish', '2026-01-29', NULL, NULL, '2026-01-28 17:00:00', '2026-01-28 17:00:00'),
(107, 16, 121, 1, NULL, 'Memperbaiki gagang pintu yang lepas/rusak', 'complaints/rawabuaya_6a9926f829bcc.jpeg', 'complaints/rawabuaya_6a9926f829dcd.jpeg', 'complaints/rawabuaya_6a9926f82bd3f.jpeg', 'finish', '2026-01-13', NULL, NULL, '2026-01-12 17:00:00', '2026-01-12 17:00:00'),
(108, 16, 122, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f82a051.jpeg', 'complaints/rawabuaya_6a9926f82a3a5.jpeg', NULL, 'finish', '2026-01-03', NULL, NULL, '2025-12-31 17:00:00', '2025-12-31 17:00:00'),
(109, 20, 123, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f82a721.jpeg', 'complaints/rawabuaya_6a9926f82aa62.jpeg', 'complaints/rawabuaya_6a9926f82acab.jpeg', 'finish', '2026-01-22', NULL, NULL, '2026-01-19 17:00:00', '2026-01-19 17:00:00'),
(110, 21, 124, 1, NULL, 'Memperbaiki kebocoran kantor karena hujan', 'complaints/rawabuaya_6a9926f82b359.jpeg', 'complaints/rawabuaya_6a9926f82b766.jpeg', 'complaints/rawabuaya_6a9926f82bac5.jpeg', 'finish', '2026-01-28', NULL, NULL, '2026-01-27 17:00:00', '2026-01-27 17:00:00'),
(111, 16, 125, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f82bf7e.jpeg', 'complaints/rawabuaya_6a9926f82c1b9.jpeg', 'complaints/rawabuaya_6a9926f82cccf.jpeg', 'finish', '2026-01-02', NULL, NULL, '2025-12-31 17:00:00', '2025-12-31 17:00:00'),
(112, 16, 126, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f82cf72.jpeg', 'complaints/rawabuaya_6a9926f82d1b1.jpeg', 'complaints/rawabuaya_6a9926f82d427.jpeg', 'finish', '2026-01-05', NULL, NULL, '2026-01-01 17:00:00', '2026-01-01 17:00:00'),
(113, 16, 127, 1, NULL, 'Perbaikan wastafel bocor', 'complaints/rawabuaya_6a9926f82d768.jpeg', 'complaints/rawabuaya_6a9926f82da97.jpeg', 'complaints/rawabuaya_6a9926f82dd71.jpeg', 'finish', '2026-01-08', NULL, NULL, '2026-01-07 17:00:00', '2026-01-07 17:00:00'),
(114, 17, 128, 1, NULL, 'Perbaikan Nat kamar madi dan Pintu kamar mandi', 'complaints/rawabuaya_6a9926f82eab1.jpeg', 'complaints/rawabuaya_6a9926f82eda0.jpeg', 'complaints/rawabuaya_6a9926f82f099.jpeg', 'finish', '2026-01-10', NULL, NULL, '2026-01-07 17:00:00', '2026-01-07 17:00:00'),
(115, 16, 129, 1, NULL, 'Perbaikan Nat kamar madi ', 'complaints/rawabuaya_6a9926f82f98a.jpeg', 'complaints/rawabuaya_6a9926f82fc88.jpeg', 'complaints/rawabuaya_6a9926f82ff17.jpeg', 'finish', '2026-01-20', NULL, NULL, '2026-01-17 17:00:00', '2026-01-17 17:00:00'),
(116, 16, 130, 1, NULL, 'Perbaikan Nat kamar madi ', 'complaints/rawabuaya_6a9926f830463.jpeg', 'complaints/rawabuaya_6a9926f8309a2.jpeg', 'complaints/rawabuaya_6a9926f830c9f.jpeg', 'finish', '2026-01-23', NULL, NULL, '2026-01-19 17:00:00', '2026-01-19 17:00:00'),
(117, 16, 131, 1, NULL, 'Perbaikan wastafel bocor ', 'complaints/rawabuaya_6a9926f8311e6.jpeg', 'complaints/rawabuaya_6a9926f831483.jpeg', 'complaints/rawabuaya_6a9926f83173a.jpeg', 'finish', '2026-01-25', NULL, NULL, '2026-01-24 17:00:00', '2026-01-24 17:00:00'),
(118, 17, 132, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f831bfa.jpeg', 'complaints/rawabuaya_6a9926f831f80.jpeg', 'complaints/rawabuaya_6a9926f8321bb.jpeg', 'finish', '2026-01-26', NULL, NULL, '2026-01-24 17:00:00', '2026-01-24 17:00:00'),
(119, 16, 133, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f834246.jpeg', 'complaints/rawabuaya_6a9926f8345ab.jpeg', 'complaints/rawabuaya_6a9926f8349f1.jpeg', 'finish', '2026-01-27', NULL, NULL, '2026-01-25 17:00:00', '2026-01-25 17:00:00'),
(120, 20, 134, 1, NULL, 'Perbaikan gagang pintu utama', 'complaints/rawabuaya_6a9926f8356d2.jpeg', 'complaints/rawabuaya_6a9926f8359ec.jpeg', 'complaints/rawabuaya_6a9926f835ce0.jpeg', 'finish', '2026-01-28', NULL, NULL, '2026-01-27 17:00:00', '2026-01-27 17:00:00'),
(121, 16, 135, 1, NULL, 'Memperbaiki Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f837234.jpeg', 'complaints/rawabuaya_6a9926f8375ba.jpeg', NULL, 'finish', '2026-02-06', NULL, NULL, '2026-02-03 17:00:00', '2026-02-03 17:00:00'),
(122, 17, 136, 1, NULL, 'Memperbaiki Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f837828.jpeg', 'complaints/rawabuaya_6a9926f837aae.jpeg', NULL, 'finish', '2026-02-24', NULL, NULL, '2026-02-21 17:00:00', '2026-02-21 17:00:00'),
(123, 16, 137, 1, NULL, 'Memperbaiki gagang pintu yang rusak', 'complaints/rawabuaya_6a9926f837cfd.jpeg', 'complaints/rawabuaya_6a9926f837ffc.jpeg', NULL, 'finish', '2026-02-26', NULL, NULL, '2026-02-25 17:00:00', '2026-02-25 17:00:00'),
(124, 17, 138, 1, NULL, 'Melancarkan kamar mandi mampet', 'complaints/rawabuaya_6a9926f83838d.jpeg', 'complaints/rawabuaya_6a9926f83898f.jpeg', NULL, 'finish', '2026-02-05', NULL, NULL, '2026-02-04 17:00:00', '2026-02-04 17:00:00'),
(125, 16, 139, 1, NULL, 'Memperbaiki meteran listrik error', 'complaints/rawabuaya_6a9926f838cd7.jpeg', 'complaints/rawabuaya_6a9926f838f9f.jpeg', 'complaints/rawabuaya_6a9926f8391ff.jpeg', 'finish', '2026-02-08', NULL, NULL, '2026-02-07 17:00:00', '2026-02-07 17:00:00'),
(126, 18, 140, 1, NULL, 'Memperbaiki Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f839485.jpeg', 'complaints/rawabuaya_6a9926f8396f5.jpeg', 'complaints/rawabuaya_6a9926f839947.jpeg', 'finish', '2026-02-27', NULL, NULL, '2026-02-23 17:00:00', '2026-02-23 17:00:00'),
(127, 18, 141, 1, NULL, 'Memperbaiki Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f839b94.jpeg', 'complaints/rawabuaya_6a9926f839dbd.jpeg', 'complaints/rawabuaya_6a9926f83a049.jpeg', 'finish', '2026-02-21', NULL, NULL, '2026-02-18 17:00:00', '2026-02-18 17:00:00'),
(128, 18, 140, 1, NULL, 'Memperbaiki Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f83a350.jpeg', 'complaints/rawabuaya_6a9926f83a5b0.jpeg', 'complaints/rawabuaya_6a9926f83ae82.jpeg', 'finish', '2026-02-09', NULL, NULL, '2026-02-07 17:00:00', '2026-02-07 17:00:00'),
(129, 18, 142, 1, NULL, 'Memperbaiki Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f83b6b8.jpeg', 'complaints/rawabuaya_6a9926f83b96a.jpeg', 'complaints/rawabuaya_6a9926f83bbd6.jpeg', 'finish', '2026-02-04', NULL, NULL, '2026-02-01 17:00:00', '2026-02-01 17:00:00'),
(130, 17, 143, 1, NULL, 'Memperbaiki meteran listrik error', 'complaints/rawabuaya_6a9926f83c146.jpeg', 'complaints/rawabuaya_6a9926f83c408.jpeg', 'complaints/rawabuaya_6a9926f83c682.jpeg', 'finish', '2026-02-08', NULL, NULL, '2026-02-07 17:00:00', '2026-02-07 17:00:00'),
(131, 16, 144, 1, NULL, 'Mengganti kran rusak', 'complaints/rawabuaya_6a9926f83cfbd.jpeg', 'complaints/rawabuaya_6a9926f83d25e.jpeg', 'complaints/rawabuaya_6a9926f83d4b0.jpeg', 'finish', '2026-02-16', NULL, NULL, '2026-02-15 17:00:00', '2026-02-15 17:00:00'),
(132, 20, 145, 1, NULL, 'Memperbaiki dinding bocor', 'complaints/rawabuaya_6a9926f83d9c3.jpeg', 'complaints/rawabuaya_6a9926f83dc02.jpeg', 'complaints/rawabuaya_6a9926f83e057.jpeg', 'finish', '2026-02-03', NULL, NULL, '2026-01-31 17:00:00', '2026-01-31 17:00:00'),
(133, 16, 146, 1, NULL, 'Ganti kunci silinder pintu utama', 'complaints/rawabuaya_6a9926f83e6aa.jpeg', 'complaints/rawabuaya_6a9926f83ebdd.jpeg', 'complaints/rawabuaya_6a9926f83f088.jpeg', 'finish', '2026-02-16', NULL, NULL, '2026-02-15 17:00:00', '2026-02-15 17:00:00'),
(134, 18, 147, 1, NULL, 'Memperbaiki meteran air hunian yang kotor', 'complaints/rawabuaya_6a9926f83f7cf.jpeg', 'complaints/rawabuaya_6a9926f83fa93.jpeg', 'complaints/rawabuaya_6a9926f83fd22.jpeg', 'finish', '2026-02-20', NULL, NULL, '2026-02-19 17:00:00', '2026-02-19 17:00:00'),
(135, 17, 148, 1, NULL, 'Perbaikan FD kamar mandi', 'complaints/rawabuaya_6a9926f8402a4.jpeg', 'complaints/rawabuaya_6a9926f840591.jpeg', 'complaints/rawabuaya_6a9926f840818.jpeg', 'finish', '2026-02-04', NULL, NULL, '2026-01-31 17:00:00', '2026-01-31 17:00:00'),
(136, 17, 148, 1, NULL, 'Perbaikan FD kamar mandi', 'complaints/rawabuaya_6a9926f840fe7.jpeg', 'complaints/rawabuaya_6a9926f8412e2.jpeg', 'complaints/rawabuaya_6a9926f84158b.jpeg', 'finish', '2026-02-04', NULL, NULL, '2026-01-31 17:00:00', '2026-01-31 17:00:00'),
(137, 17, 149, 1, NULL, 'Membersihkan grase trap / wastafel yang mampet', 'complaints/rawabuaya_6a9926f842c15.jpeg', 'complaints/rawabuaya_6a9926f842f31.jpeg', NULL, 'finish', '2026-03-02', NULL, NULL, '2026-03-01 17:00:00', '2026-03-01 17:00:00'),
(138, 22, 150, 1, NULL, 'Melancarkan kamar mandi mampet', 'complaints/rawabuaya_6a9926f84320b.jpeg', 'complaints/rawabuaya_6a9926f8434b9.jpeg', NULL, 'finish', '2026-03-14', NULL, NULL, '2026-03-13 17:00:00', '2026-03-13 17:00:00'),
(139, 16, 151, 1, NULL, 'Memperbaiki meteran listrik yang error', 'complaints/rawabuaya_6a9926f843724.jpeg', 'complaints/rawabuaya_6a9926f84397b.jpeg', NULL, 'finish', '2026-03-06', NULL, NULL, '2026-03-05 17:00:00', '2026-03-05 17:00:00'),
(140, 19, 152, 1, NULL, 'Mengganti lampu ruang kamar', 'complaints/rawabuaya_6a9926f843c8d.jpeg', 'complaints/rawabuaya_6a9926f843eaa.jpeg', NULL, 'finish', '2026-03-30', NULL, NULL, '2026-03-29 17:00:00', '2026-03-29 17:00:00'),
(141, 18, 153, 1, NULL, 'Memperbaiki dinding wastafel dan nat area kamar mandi', 'complaints/rawabuaya_6a9926f8440f1.jpeg', 'complaints/rawabuaya_6a9926f8442f4.jpeg', NULL, 'finish', '2026-03-10', NULL, NULL, '2026-03-08 17:00:00', '2026-03-08 17:00:00'),
(142, 18, 154, 1, NULL, 'Memperbaiki MCB yang kendor ', 'complaints/rawabuaya_6a9926f8444da.jpeg', 'complaints/rawabuaya_6a9926f84477e.jpeg', NULL, 'finish', '2026-03-14', NULL, NULL, '2026-03-13 17:00:00', '2026-03-13 17:00:00'),
(143, 19, 155, 1, NULL, 'Memperbaiki nat kamar mandi dan wastafel', 'complaints/rawabuaya_6a9926f844a05.jpeg', 'complaints/rawabuaya_6a9926f844c58.jpeg', NULL, 'finish', '2026-03-09', NULL, NULL, '2026-03-07 17:00:00', '2026-03-07 17:00:00'),
(144, 17, 156, 1, NULL, 'Memperbaiki cat ruang tamu dan luar selasar', 'complaints/rawabuaya_6a9926f844e96.jpeg', 'complaints/rawabuaya_6a9926f845154.jpeg', NULL, 'finish', '2026-03-11', NULL, NULL, '2026-03-10 17:00:00', '2026-03-10 17:00:00'),
(145, 18, 157, 1, NULL, 'Memperbaiki nat kamar mandi', 'complaints/rawabuaya_6a9926f8453af.jpeg', 'complaints/rawabuaya_6a9926f8455c1.jpeg', NULL, 'finish', '2026-03-04', NULL, NULL, '2026-02-28 17:00:00', '2026-02-28 17:00:00'),
(146, 16, 158, 1, NULL, 'Memperbaiki saklar kamar yang rusak', 'complaints/rawabuaya_6a9926f8459d5.jpeg', 'complaints/rawabuaya_6a9926f845eb6.jpeg', 'complaints/rawabuaya_6a9926f846246.jpeg', 'finish', '2026-03-08', NULL, NULL, '2026-03-07 17:00:00', '2026-03-07 17:00:00'),
(147, 20, 159, 1, NULL, 'Memperbaii dan mengganti kran patah', 'complaints/rawabuaya_6a9926f8465c0.jpeg', 'complaints/rawabuaya_6a9926f84689d.jpeg', 'complaints/rawabuaya_6a9926f846b15.jpeg', 'finish', '2026-03-17', NULL, NULL, '2026-03-16 17:00:00', '2026-03-16 17:00:00'),
(148, 18, 154, 1, NULL, 'Memperbaiki instalasi listrik yang kendor', 'complaints/rawabuaya_6a9926f847312.jpeg', 'complaints/rawabuaya_6a9926f847746.jpeg', 'complaints/rawabuaya_6a9926f8479d1.jpeg', 'finish', '2026-03-14', NULL, NULL, '2026-03-13 17:00:00', '2026-03-13 17:00:00'),
(149, 18, 160, 1, NULL, 'Mengganti lampu selasar', 'complaints/rawabuaya_6a9926f84898d.jpeg', 'complaints/rawabuaya_6a9926f848b8c.jpeg', NULL, 'finish', '2026-04-26', NULL, NULL, '2026-04-25 17:00:00', '2026-04-25 17:00:00'),
(150, 20, 161, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f848e06.jpeg', 'complaints/rawabuaya_6a9926f849156.jpeg', NULL, 'finish', '2026-04-29', NULL, NULL, '2026-04-27 17:00:00', '2026-04-27 17:00:00'),
(151, 16, 162, 1, NULL, 'Perbaikan gagang jendela yang rusak', 'complaints/rawabuaya_6a9926f849437.jpeg', 'complaints/rawabuaya_6a9926f849756.jpeg', 'complaints/rawabuaya_6a9926f84c6dd.jpeg', 'finish', '2026-04-11', NULL, NULL, '2026-04-10 17:00:00', '2026-04-10 17:00:00'),
(152, 16, 163, 1, NULL, 'Perbaikan Nat kamar mandi', 'complaints/rawabuaya_6a9926f849a09.jpeg', 'complaints/rawabuaya_6a9926f849c1f.jpeg', NULL, 'finish', '2026-04-17', NULL, NULL, '2026-04-14 17:00:00', '2026-04-14 17:00:00'),
(153, 20, 164, 1, NULL, 'Memperbaiki tembok retak', 'complaints/rawabuaya_6a9926f849ea4.jpeg', 'complaints/rawabuaya_6a9926f84a12d.jpeg', 'complaints/rawabuaya_6a9926f84a394.jpeg', 'finish', '2026-04-23', NULL, NULL, '2026-04-22 17:00:00', '2026-04-22 17:00:00'),
(154, 16, 165, 1, NULL, '\nMemperbaiki Nat kamar mandi dan balkon yang rusak', 'complaints/rawabuaya_6a9926f84a5b2.jpeg', 'complaints/rawabuaya_6a9926f84a82f.jpeg', 'complaints/rawabuaya_6a9926f84aa9b.jpeg', 'finish', '2026-04-24', NULL, NULL, '2026-04-22 17:00:00', '2026-04-22 17:00:00'),
(155, 16, 166, 1, NULL, 'Memperbaiki gagang pintu yang lepas/rusak', 'complaints/rawabuaya_6a9926f84ad37.jpeg', 'complaints/rawabuaya_6a9926f84b189.jpeg', 'complaints/rawabuaya_6a9926f84b4f6.jpeg', 'finish', '2026-04-29', NULL, NULL, '2026-04-28 17:00:00', '2026-04-28 17:00:00'),
(156, 16, 167, 1, NULL, '\nMemperbaiki Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f84b7fa.jpeg', 'complaints/rawabuaya_6a9926f84bb71.jpeg', 'complaints/rawabuaya_6a9926f84be7b.jpeg', 'finish', '2026-04-29', NULL, NULL, '2026-04-25 17:00:00', '2026-04-25 17:00:00'),
(157, 16, 165, 1, NULL, 'Perbaikan nat kamar mandi', 'complaints/rawabuaya_6a9926f84c9c6.jpeg', 'complaints/rawabuaya_6a9926f84cc9d.jpeg', 'complaints/rawabuaya_6a9926f84cf39.jpeg', 'finish', '2026-04-11', NULL, NULL, '2026-04-11 13:26:00', '2026-04-11 13:26:00'),
(158, 16, 168, 1, NULL, 'Perbaikan nat kamar mandi', 'complaints/rawabuaya_6a9926f84e12b.jpeg', 'complaints/rawabuaya_6a9926f84e3b7.jpeg', 'complaints/rawabuaya_6a9926f84e697.jpeg', 'finish', '2026-04-11', NULL, NULL, '2026-04-09 13:26:00', '2026-04-09 13:26:00'),
(159, 16, 163, 1, NULL, 'Mengganti kran kamar mandi', 'complaints/rawabuaya_6a9926f850b0d.jpeg', 'complaints/rawabuaya_6a9926f850efd.jpeg', 'complaints/rawabuaya_6a9926f851296.jpeg', 'finish', '2026-04-14', NULL, NULL, '2026-04-14 13:26:00', '2026-04-14 13:26:00'),
(160, 19, 169, 1, NULL, 'Memperbaiki kran wastafel', 'complaints/rawabuaya_6a9926f851852.jpeg', 'complaints/rawabuaya_6a9926f851a98.jpeg', 'complaints/rawabuaya_6a9926f851d5a.jpeg', 'finish', '2026-04-08', NULL, NULL, '2026-04-08 13:26:00', '2026-04-08 13:26:00'),
(161, 17, 170, 1, NULL, 'Memperbaiki gagang pintu ', 'complaints/rawabuaya_6a9926f851f9a.jpeg', 'complaints/rawabuaya_6a9926f85229a.jpeg', 'complaints/rawabuaya_6a9926f852600.jpeg', 'finish', '2026-04-07', NULL, NULL, '2026-04-07 13:26:00', '2026-04-07 13:26:00'),
(162, 17, 171, 1, NULL, 'Memperbaiki nat kamar mandi', 'complaints/rawabuaya_6a9926f8528c0.jpeg', 'complaints/rawabuaya_6a9926f852b96.jpeg', 'complaints/rawabuaya_6a9926f852e85.jpeg', 'finish', '2026-04-05', NULL, NULL, '2026-04-05 13:26:00', '2026-04-05 13:26:00'),
(163, 18, 154, 1, NULL, 'Membersihkan grase trap / wastafel yang mampet', 'complaints/rawabuaya_6a9926f85373e.jpeg', 'complaints/rawabuaya_6a9926f853a83.jpeg', NULL, 'finish', '2026-05-17', NULL, NULL, '2026-05-16 17:00:00', '2026-05-16 17:00:00'),
(164, 20, 172, 1, NULL, 'Memperbaiki meteran listrik error', 'complaints/rawabuaya_6a9926f853d7a.jpeg', 'complaints/rawabuaya_6a9926f854007.jpeg', NULL, 'finish', '2026-05-18', NULL, NULL, '2026-05-17 17:00:00', '2026-05-17 17:00:00'),
(165, 20, 173, 1, NULL, 'Perbaikan Nat kamar mandi yang rusak', 'complaints/rawabuaya_6a9926f85427e.jpeg', 'complaints/rawabuaya_6a9926f854691.jpeg', 'complaints/rawabuaya_6a9926f8548c0.jpeg', 'finish', '2026-05-30', NULL, NULL, '2026-05-28 17:00:00', '2026-05-28 17:00:00'),
(166, 20, 174, 1, NULL, 'Pengecatan hunian yang banyak coretan didinding', 'complaints/rawabuaya_6a9926f854db1.jpeg', 'complaints/rawabuaya_6a9926f854fd9.jpeg', NULL, 'finish', '2026-06-22', NULL, NULL, '2026-06-21 17:00:00', '2026-06-21 17:00:00'),
(167, 20, 161, 1, NULL, 'Mengganti engsel pintu kamar mandi yang berkarat/rusak', 'complaints/rawabuaya_6a9926f855274.jpeg', 'complaints/rawabuaya_6a9926f8554e1.jpeg', NULL, 'finish', '2026-06-17', NULL, NULL, '2026-06-16 17:00:00', '2026-06-16 17:00:00'),
(168, 20, 164, 1, NULL, 'Merapihkan hunian kosong untuk penghuni selnjutnya', 'complaints/rawabuaya_6a9926f855705.jpeg', 'complaints/rawabuaya_6a9926f855910.jpeg', 'complaints/rawabuaya_6a9926f857dd6.jpeg', 'finish', '2026-06-16', NULL, NULL, '2026-06-15 17:00:00', '2026-06-15 17:00:00'),
(169, 16, 175, 1, NULL, 'Memperbaiki tembok bolong dan retak', 'complaints/rawabuaya_6a9926f855b85.jpeg', 'complaints/rawabuaya_6a9926f855def.jpeg', NULL, 'finish', '2026-06-11', NULL, NULL, '2026-06-10 17:00:00', '2026-06-10 17:00:00'),
(170, 20, 164, 1, NULL, 'Memperbaiki tembok wastafel yang rusak ', 'complaints/rawabuaya_6a9926f856058.jpeg', 'complaints/rawabuaya_6a9926f856311.jpeg', 'complaints/rawabuaya_6a9926f8565ef.jpeg', 'finish', '2026-06-10', NULL, NULL, '2026-06-09 17:00:00', '2026-06-09 17:00:00'),
(171, 17, 176, 1, NULL, 'Mengecat tembok hunian yang banyak coretan ', 'complaints/rawabuaya_6a9926f856836.jpeg', 'complaints/rawabuaya_6a9926f856aa7.jpeg', 'complaints/rawabuaya_6a9926f856d89.jpeg', 'finish', '2026-06-11', NULL, NULL, '2026-06-10 17:00:00', '2026-06-10 17:00:00'),
(172, 18, 177, 1, NULL, 'Mengganti lampu hunian rusak', 'complaints/rawabuaya_6a9926f857015.jpeg', 'complaints/rawabuaya_6a9926f857449.jpeg', 'complaints/rawabuaya_6a9926f857848.jpeg', 'finish', '2026-06-29', NULL, NULL, '2026-06-28 17:00:00', '2026-06-28 17:00:00'),
(173, 18, 112, 1, NULL, 'Memperbaiki keramik pecah', 'complaints/rawabuaya_6a9926f8585bd.jpeg', 'complaints/rawabuaya_6a9926f858859.jpeg', NULL, 'finish', '2026-07-29', NULL, NULL, '2026-07-28 17:00:00', '2026-07-28 17:00:00'),
(174, 19, 113, 1, NULL, 'Perbaikan pintu kamar mandi', 'complaints/rawabuaya_6a9926f858ac1.jpeg', 'complaints/rawabuaya_6a9926f858d01.jpeg', NULL, 'finish', '2026-07-29', NULL, NULL, '2026-07-28 17:00:00', '2026-07-28 17:00:00'),
(175, 19, 114, 1, NULL, 'perbaikan wastafel', 'complaints/rawabuaya_6a9926f858ef1.jpeg', 'complaints/rawabuaya_6a9926f8590c1.jpeg', 'complaints/rawabuaya_6a9926f85b172.jpeg', 'finish', '2026-07-29', NULL, NULL, '2026-07-28 17:00:00', '2026-07-28 17:00:00'),
(176, 18, 115, 1, NULL, 'Perbaikan grase trape', 'complaints/rawabuaya_6a9926f859251.jpeg', 'complaints/rawabuaya_6a9926f859555.jpeg', NULL, 'finish', '2026-07-23', NULL, NULL, '2026-07-22 17:00:00', '2026-07-22 17:00:00'),
(177, 17, 116, 1, NULL, 'Memperbaiki tembok retak', 'complaints/rawabuaya_6a9926f859810.jpeg', 'complaints/rawabuaya_6a9926f859a74.jpeg', 'complaints/rawabuaya_6a9926f859d18.jpeg', 'finish', '2026-07-23', NULL, NULL, '2026-07-22 17:00:00', '2026-07-22 17:00:00'),
(178, 19, 117, 1, NULL, 'Mengganti lampu', 'complaints/rawabuaya_6a9926f859f52.jpeg', 'complaints/rawabuaya_6a9926f85a1e6.jpeg', 'complaints/rawabuaya_6a9926f85a463.jpeg', 'finish', '2026-04-04', NULL, NULL, '2026-04-03 17:00:00', '2026-04-03 17:00:00'),
(179, 19, 118, 1, NULL, 'Mengganti balas dan lampu', 'complaints/rawabuaya_6a9926f85a6dd.jpeg', 'complaints/rawabuaya_6a9926f85a8ff.jpeg', 'complaints/rawabuaya_6a9926f85ab9d.jpeg', 'finish', '2026-04-04', NULL, NULL, '2026-04-03 17:00:00', '2026-04-03 17:00:00'),
(180, 18, 112, 1, NULL, 'Memperbaiki keramik pecah', 'complaints/rawabuaya_6a9926f8585bd.jpeg', 'complaints/rawabuaya_6a9926f858859.jpeg', NULL, 'finish', '2026-07-29', NULL, NULL, '2026-07-28 17:00:00', '2026-07-28 17:00:00'),
(181, 19, 113, 1, NULL, 'Perbaikan pintu kamar mandi', 'complaints/rawabuaya_6a9926f858ac1.jpeg', 'complaints/rawabuaya_6a9926f858d01.jpeg', NULL, 'finish', '2026-07-29', NULL, NULL, '2026-07-28 17:00:00', '2026-07-28 17:00:00'),
(182, 19, 114, 1, NULL, 'perbaikan wastafel', 'complaints/rawabuaya_6a9926f858ef1.jpeg', 'complaints/rawabuaya_6a9926f8590c1.jpeg', 'complaints/rawabuaya_6a9926f85b172.jpeg', 'finish', '2026-07-29', NULL, NULL, '2026-07-28 17:00:00', '2026-07-28 17:00:00'),
(183, 18, 115, 1, NULL, 'Perbaikan grase trape', 'complaints/rawabuaya_6a9926f859251.jpeg', 'complaints/rawabuaya_6a9926f859555.jpeg', NULL, 'finish', '2026-07-23', NULL, NULL, '2026-07-22 17:00:00', '2026-07-22 17:00:00'),
(184, 17, 116, 1, NULL, 'Memperbaiki tembok retak', 'complaints/rawabuaya_6a9926f859810.jpeg', 'complaints/rawabuaya_6a9926f859a74.jpeg', 'complaints/rawabuaya_6a9926f859d18.jpeg', 'finish', '2026-07-23', NULL, NULL, '2026-07-22 17:00:00', '2026-07-22 17:00:00'),
(185, 19, 117, 1, NULL, 'Mengganti lampu', 'complaints/rawabuaya_6a9926f859f52.jpeg', 'complaints/rawabuaya_6a9926f85a1e6.jpeg', 'complaints/rawabuaya_6a9926f85a463.jpeg', 'finish', '2026-04-04', NULL, NULL, '2026-04-03 17:00:00', '2026-04-03 17:00:00'),
(186, 19, 118, 1, NULL, 'Mengganti balas dan lampu', 'complaints/rawabuaya_6a9926f85a6dd.jpeg', 'complaints/rawabuaya_6a9926f85a8ff.jpeg', 'complaints/rawabuaya_6a9926f85ab9d.jpeg', 'finish', '2026-04-04', NULL, NULL, '2026-04-03 17:00:00', '2026-04-03 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaints_tower_id_foreign` (`tower_id`),
  ADD KEY `complaints_unit_id_foreign` (`unit_id`),
  ADD KEY `complaints_user_id_foreign` (`user_id`),
  ADD KEY `complaints_koor_id_foreign` (`koor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_koor_id_foreign` FOREIGN KEY (`koor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaints_tower_id_foreign` FOREIGN KEY (`tower_id`) REFERENCES `towers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaints_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaints_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
