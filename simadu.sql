-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2025 at 03:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:2;', 1745850537),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1745850537;', 1745850537),
('laravel_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:92:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:14:\"view_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:18:\"view_any_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:16:\"create_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:16:\"update_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:17:\"restore_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:21:\"restore_any_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:19:\"replicate_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:17:\"reorder_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:16:\"delete_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:20:\"delete_any_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:22:\"force_delete_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:26:\"force_delete_any_complaint\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:11:\"view_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:15:\"view_any_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:13:\"create_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:13:\"update_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:14:\"restore_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:18:\"restore_any_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:16:\"replicate_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:14:\"reorder_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:13:\"delete_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:17:\"delete_any_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:19:\"force_delete_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:23:\"force_delete_any_lantai\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:14:\"view_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:18:\"view_any_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:16:\"create_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:16:\"update_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:17:\"restore_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:21:\"restore_any_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:19:\"replicate_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:17:\"reorder_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:16:\"delete_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:20:\"delete_any_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:22:\"force_delete_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:26:\"force_delete_any_penilaian\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:10:\"view_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:14:\"view_any_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:12:\"create_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:12:\"update_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:13:\"restore_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:17:\"restore_any_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:15:\"replicate_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:13:\"reorder_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:12:\"delete_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:16:\"delete_any_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:18:\"force_delete_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:22:\"force_delete_any_rusun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:10:\"view_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:14:\"view_any_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:12:\"create_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:12:\"update_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:13:\"restore_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:17:\"restore_any_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:15:\"replicate_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:13:\"reorder_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:12:\"delete_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:16:\"delete_any_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:18:\"force_delete_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:22:\"force_delete_any_tower\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:9:\"view_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:13:\"view_any_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:11:\"create_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:11:\"update_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:12:\"restore_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:16:\"restore_any_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:14:\"replicate_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:12:\"reorder_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:11:\"delete_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:15:\"delete_any_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:17:\"force_delete_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:21:\"force_delete_any_unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:12:\"restore_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:16:\"restore_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:14:\"replicate_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:12:\"reorder_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:17:\"force_delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:21:\"force_delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:12:\"page_Profile\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:27:\"widget_CountComplaintReport\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:7:\"petugas\";s:1:\"c\";s:3:\"web\";}}}', 1745863821);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint UNSIGNED NOT NULL,
  `unit_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_verified` bigint UNSIGNED DEFAULT NULL,
  `complaint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` text COLLATE utf8mb4_unicode_ci,
  `photo3` text COLLATE utf8mb4_unicode_ci,
  `status` enum('accept','finish','request','deny','re-schedule') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'request',
  `tanggal_eksekusi` date DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `unit_id`, `user_id`, `user_verified`, `complaint`, `photo1`, `photo2`, `photo3`, `status`, `tanggal_eksekusi`, `keterangan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 3, 'Aut sed esse dignissimos voluptatem dolorum ut officiis distinctio.', 'https://via.placeholder.com/640x480.png/00dd88?text=hic', 'https://via.placeholder.com/640x480.png/004422?text=aut', 'https://via.placeholder.com/640x480.png/0066ee?text=esse', 'request', '1981-06-04', 'Possimus voluptas aut ex velit ea doloremque eligendi labore.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(2, 3, 5, 2, 'Et quia ipsam et.', 'https://via.placeholder.com/640x480.png/00ff44?text=similique', 'https://via.placeholder.com/640x480.png/003388?text=dignissimos', 'https://via.placeholder.com/640x480.png/00bb88?text=itaque', 'deny', '1997-04-01', 'Labore dolores ipsam dolorum sed est eaque.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(3, 5, 2, 2, 'Eum quia et dolorum est.', 'https://via.placeholder.com/640x480.png/00eeaa?text=est', 'https://via.placeholder.com/640x480.png/009988?text=consequuntur', 'https://via.placeholder.com/640x480.png/0033dd?text=placeat', 're-schedule', '1980-03-01', 'Rerum laboriosam soluta quis dolorum quas quisquam dolores.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(4, 10, 4, 3, 'Animi iure voluptatem deserunt odit voluptas minima.', 'https://via.placeholder.com/640x480.png/0000aa?text=aut', 'https://via.placeholder.com/640x480.png/00dd33?text=a', 'https://via.placeholder.com/640x480.png/005588?text=quaerat', 'finish', '1995-04-18', 'Recusandae temporibus officiis deleniti optio quia dolores.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(5, 4, 2, 3, 'Dolores quisquam error et omnis perspiciatis ipsum sapiente.', 'https://via.placeholder.com/640x480.png/0099ee?text=nesciunt', 'https://via.placeholder.com/640x480.png/00eeff?text=recusandae', 'https://via.placeholder.com/640x480.png/005511?text=sunt', 'finish', '2012-12-31', 'Et aliquid laborum dolorum iure non quia hic.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(6, 7, 5, 5, 'Maiores rerum dolores provident et magnam aut qui.', 'https://via.placeholder.com/640x480.png/00eecc?text=voluptatem', 'https://via.placeholder.com/640x480.png/000077?text=possimus', 'https://via.placeholder.com/640x480.png/00ffbb?text=facilis', 'finish', '1996-06-13', 'Eius quisquam fugit rem facere iure.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(7, 4, 3, 3, 'Dignissimos dolores soluta eum beatae quaerat dolores earum.', 'https://via.placeholder.com/640x480.png/00ffbb?text=explicabo', 'https://via.placeholder.com/640x480.png/00dd33?text=reiciendis', 'https://via.placeholder.com/640x480.png/00aaee?text=est', 'accept', '1991-01-15', 'Dignissimos consequatur nihil esse beatae.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(8, 2, 4, 5, 'Suscipit ipsa officia accusamus consequatur autem.', 'https://via.placeholder.com/640x480.png/000099?text=est', 'https://via.placeholder.com/640x480.png/005533?text=qui', 'https://via.placeholder.com/640x480.png/00bb66?text=ipsum', 'request', '1985-05-04', 'Pariatur sed architecto ea nam.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(9, 9, 5, 5, 'Est fuga ad cum vero saepe cumque sit nostrum.', 'https://via.placeholder.com/640x480.png/0077ff?text=occaecati', 'https://via.placeholder.com/640x480.png/005500?text=recusandae', 'https://via.placeholder.com/640x480.png/00dd55?text=aut', 'finish', '2017-09-18', 'Ipsam dolorum odio numquam cum suscipit hic voluptatem.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(10, 9, 3, 5, 'Repudiandae quisquam excepturi cupiditate molestias nihil incidunt eius.', 'https://via.placeholder.com/640x480.png/00ccaa?text=suscipit', 'https://via.placeholder.com/640x480.png/00cc66?text=quos', 'https://via.placeholder.com/640x480.png/00ff55?text=quia', 'accept', '2024-04-03', 'Itaque sed fugiat est est et.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(11, 5, 2, 2, 'Enim aspernatur est molestiae ducimus accusantium perferendis quia.', 'https://via.placeholder.com/640x480.png/00ff88?text=assumenda', 'https://via.placeholder.com/640x480.png/007744?text=libero', 'https://via.placeholder.com/640x480.png/006666?text=laudantium', 'finish', '1974-05-22', 'Delectus culpa similique voluptatem.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(12, 4, 3, 4, 'Et facilis quos consequatur et accusamus est excepturi.', 'https://via.placeholder.com/640x480.png/007744?text=est', 'https://via.placeholder.com/640x480.png/000022?text=nulla', 'https://via.placeholder.com/640x480.png/006677?text=est', 'accept', '1988-11-14', 'Dolorum incidunt et mollitia recusandae.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(13, 5, 3, 2, 'Fuga maiores mollitia veniam.', 'https://via.placeholder.com/640x480.png/003311?text=sit', 'https://via.placeholder.com/640x480.png/00bb99?text=labore', 'https://via.placeholder.com/640x480.png/00cc88?text=saepe', 'deny', '2006-02-24', 'Unde doloremque qui architecto dolorum aut eius beatae.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(14, 3, 4, 5, 'Reprehenderit fugiat assumenda ea dignissimos adipisci.', 'https://via.placeholder.com/640x480.png/000044?text=voluptatem', 'https://via.placeholder.com/640x480.png/00aa77?text=rerum', 'https://via.placeholder.com/640x480.png/00cc55?text=est', 'finish', '2000-12-02', 'Tempore fugiat ut velit optio delectus provident.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(15, 6, 2, 3, 'Enim ipsum sit laudantium provident et animi.', 'https://via.placeholder.com/640x480.png/00aa44?text=repellat', 'https://via.placeholder.com/640x480.png/00dd88?text=aut', 'https://via.placeholder.com/640x480.png/009955?text=nisi', 'finish', '1972-11-01', 'Deleniti molestiae tempora eveniet at ipsam.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(16, 4, 3, 3, 'Placeat minus cum dolor magni deserunt nesciunt.', 'https://via.placeholder.com/640x480.png/005522?text=pariatur', 'https://via.placeholder.com/640x480.png/00dd55?text=doloribus', 'https://via.placeholder.com/640x480.png/00dd88?text=sapiente', 'deny', '2001-02-27', 'Omnis eius et eligendi eaque quo.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(17, 8, 3, 3, 'Magnam similique harum necessitatibus error et odio voluptatem voluptatum.', 'https://via.placeholder.com/640x480.png/00cc88?text=alias', 'https://via.placeholder.com/640x480.png/00eeff?text=est', 'https://via.placeholder.com/640x480.png/0011cc?text=explicabo', 'request', '1992-04-27', 'Dolorum aperiam odio et molestiae.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(18, 10, 2, 4, 'Porro provident dolores repellat sint.', 'https://via.placeholder.com/640x480.png/004466?text=ratione', 'https://via.placeholder.com/640x480.png/000000?text=dignissimos', 'https://via.placeholder.com/640x480.png/0099ee?text=natus', 're-schedule', '2018-10-02', 'Praesentium consequatur voluptates doloremque autem sequi.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(19, 2, 5, 3, 'Ut ratione dolore quidem inventore.', 'https://via.placeholder.com/640x480.png/005588?text=repellat', 'https://via.placeholder.com/640x480.png/00ddcc?text=velit', 'https://via.placeholder.com/640x480.png/00bbdd?text=praesentium', 'deny', '1982-08-10', 'Qui vitae sint reprehenderit id qui.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(20, 10, 2, 5, 'Ut ut officia dolorum aliquid id animi.', 'https://via.placeholder.com/640x480.png/008844?text=temporibus', 'https://via.placeholder.com/640x480.png/00ee55?text=ut', 'https://via.placeholder.com/640x480.png/0088aa?text=unde', 'request', '2023-07-24', 'Impedit sint tempore quod odio cupiditate recusandae quaerat.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(21, 8, 5, 3, 'Doloribus ipsam aperiam error voluptatum voluptate perspiciatis.', 'https://via.placeholder.com/640x480.png/00eedd?text=sunt', 'https://via.placeholder.com/640x480.png/00aa77?text=iure', 'https://via.placeholder.com/640x480.png/00aa88?text=qui', 'finish', '1987-08-19', 'Asperiores facilis minima consequatur voluptas a molestias.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(22, 7, 4, 3, 'Vel rerum beatae aspernatur sit iusto error veritatis ullam.', 'https://via.placeholder.com/640x480.png/0066cc?text=occaecati', 'https://via.placeholder.com/640x480.png/0033bb?text=culpa', 'https://via.placeholder.com/640x480.png/00ff11?text=fugit', 'deny', '1989-01-14', 'Aut quaerat aliquid optio et tempora ea at.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(23, 7, 2, 2, 'Facere iure ut perferendis maiores qui.', 'https://via.placeholder.com/640x480.png/00dd44?text=autem', 'https://via.placeholder.com/640x480.png/0066dd?text=qui', 'https://via.placeholder.com/640x480.png/0066ee?text=ut', 'accept', '2003-07-16', 'Cumque aut unde distinctio sequi accusantium qui rem.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(24, 8, 3, 3, 'Nihil dolores dolorum repellat quia maxime corporis eos.', 'https://via.placeholder.com/640x480.png/00ee00?text=dolor', 'https://via.placeholder.com/640x480.png/004455?text=impedit', 'https://via.placeholder.com/640x480.png/00ffcc?text=ipsa', 'request', '1987-06-26', 'Expedita culpa libero aspernatur nesciunt sequi dolor.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(25, 2, 2, 2, 'Sed in repellat similique rerum.', 'https://via.placeholder.com/640x480.png/00ffaa?text=sed', 'https://via.placeholder.com/640x480.png/0033dd?text=blanditiis', 'https://via.placeholder.com/640x480.png/00ee33?text=magnam', 'request', '1999-07-23', 'Expedita cum possimus qui eaque quia tempora.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(26, 6, 4, 2, 'Accusamus laborum omnis placeat qui nostrum aut.', 'https://via.placeholder.com/640x480.png/00aa33?text=hic', 'https://via.placeholder.com/640x480.png/0055ff?text=cum', 'https://via.placeholder.com/640x480.png/008844?text=et', 'finish', '1984-04-28', 'Impedit iure quis occaecati aut.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(27, 6, 2, 5, 'Quis sequi velit voluptate earum rerum eos quia quia.', 'https://via.placeholder.com/640x480.png/0022ee?text=aut', 'https://via.placeholder.com/640x480.png/009933?text=voluptates', 'https://via.placeholder.com/640x480.png/002266?text=ipsam', 'finish', '2011-01-06', 'Eum ut atque expedita illum quaerat quod distinctio.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(28, 4, 2, 4, 'Facilis quis est rem omnis asperiores nemo dolores.', 'https://via.placeholder.com/640x480.png/00eeee?text=libero', 'https://via.placeholder.com/640x480.png/000022?text=illo', 'https://via.placeholder.com/640x480.png/009988?text=provident', 'accept', '1971-06-04', 'Facere rem ut odio enim illum.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(29, 8, 4, 2, 'Sed officia ipsum aut porro.', 'https://via.placeholder.com/640x480.png/001133?text=voluptatem', 'https://via.placeholder.com/640x480.png/00aacc?text=dolores', 'https://via.placeholder.com/640x480.png/00ddff?text=voluptas', 'accept', '2007-02-13', 'Et sit consequatur vitae doloremque neque fuga tenetur.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(30, 6, 5, 5, 'Dolor voluptates expedita sunt dignissimos ut optio ut.', 'https://via.placeholder.com/640x480.png/00ffaa?text=corrupti', 'https://via.placeholder.com/640x480.png/0033aa?text=eum', 'https://via.placeholder.com/640x480.png/006666?text=eum', 'finish', '2021-10-23', 'Neque ut autem molestiae voluptates non.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(31, 2, 4, 3, 'Enim officiis quaerat molestiae recusandae quisquam.', 'https://via.placeholder.com/640x480.png/008855?text=autem', 'https://via.placeholder.com/640x480.png/001144?text=sed', 'https://via.placeholder.com/640x480.png/004466?text=vitae', 'deny', '1999-06-27', 'Quisquam aliquam nihil error delectus minus.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(32, 7, 5, 5, 'Soluta incidunt autem totam repellendus ea aut.', 'https://via.placeholder.com/640x480.png/008899?text=eos', 'https://via.placeholder.com/640x480.png/0055aa?text=et', 'https://via.placeholder.com/640x480.png/008855?text=facere', 'deny', '1982-10-24', 'Excepturi molestiae sit aliquid similique assumenda dolorum enim.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(33, 10, 5, 2, 'Tempora molestiae autem voluptatem sunt explicabo eum temporibus libero.', 'https://via.placeholder.com/640x480.png/00ff11?text=voluptas', 'https://via.placeholder.com/640x480.png/00aabb?text=magni', 'https://via.placeholder.com/640x480.png/003355?text=at', 'deny', '2007-03-10', 'Accusamus quo consequatur consequuntur earum corrupti odit repudiandae.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(34, 6, 3, 2, 'Sit deleniti a cupiditate totam ad.', 'https://via.placeholder.com/640x480.png/003366?text=beatae', 'https://via.placeholder.com/640x480.png/00cc22?text=tempore', 'https://via.placeholder.com/640x480.png/005544?text=autem', 'request', '1973-07-08', 'Ab deleniti veniam neque porro architecto.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(35, 3, 3, 4, 'Autem beatae est magni qui ut soluta est.', 'https://via.placeholder.com/640x480.png/001100?text=quis', 'https://via.placeholder.com/640x480.png/008877?text=aut', 'https://via.placeholder.com/640x480.png/0077aa?text=quia', 're-schedule', '1974-03-29', 'Vel accusantium itaque nesciunt optio.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(36, 5, 2, 5, 'Tempora repellendus eligendi repudiandae sed.', 'https://via.placeholder.com/640x480.png/002233?text=quia', 'https://via.placeholder.com/640x480.png/00bbcc?text=doloremque', 'https://via.placeholder.com/640x480.png/00eeaa?text=possimus', 're-schedule', '1985-05-14', 'Qui et nobis cupiditate omnis omnis.', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(37, 6, 4, 3, 'Molestias explicabo quas ut molestiae est.', 'https://via.placeholder.com/640x480.png/006633?text=est', 'https://via.placeholder.com/640x480.png/00ff44?text=autem', 'https://via.placeholder.com/640x480.png/009999?text=est', 'deny', '1998-04-02', 'Rerum fuga mollitia cupiditate rerum numquam dolorem unde.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(38, 2, 5, 5, 'Est ratione tenetur nesciunt tempore neque nostrum suscipit magni.', 'https://via.placeholder.com/640x480.png/0033ee?text=reiciendis', 'https://via.placeholder.com/640x480.png/0099ff?text=non', 'https://via.placeholder.com/640x480.png/009944?text=saepe', 'finish', '2003-03-23', 'Quos dolores quibusdam placeat vel ut.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(39, 4, 5, 3, 'Dicta corporis saepe laboriosam amet voluptas.', 'https://via.placeholder.com/640x480.png/00aa66?text=ut', 'https://via.placeholder.com/640x480.png/009977?text=sequi', 'https://via.placeholder.com/640x480.png/005566?text=quia', 'request', '2016-11-30', 'Aut sint sunt aliquam ex minima.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(40, 3, 5, 4, 'Atque minima et reiciendis dolorum voluptates voluptates.', 'https://via.placeholder.com/640x480.png/009911?text=blanditiis', 'https://via.placeholder.com/640x480.png/00ddff?text=minima', 'https://via.placeholder.com/640x480.png/007700?text=excepturi', 'deny', '1981-11-25', 'Adipisci harum velit facere distinctio.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(41, 22, 2, 3, 'dasd', 'complaints/01JSVYHRN6MWA852EKWFGS9NEJ.png', NULL, NULL, 'finish', '2025-05-05', NULL, NULL, '2025-04-27 08:41:13', '2025-04-28 08:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lantais`
--

CREATE TABLE `lantais` (
  `id` bigint UNSIGNED NOT NULL,
  `tower_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lantais`
--

INSERT INTO `lantais` (`id`, `tower_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '19', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(2, 8, '9', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(3, 2, '12', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(4, 9, '12', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(5, 9, '19', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(6, 7, '15', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(7, 8, '2', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(8, 3, '6', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(9, 6, '6', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(10, 3, '14', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_23_170213_create_rusuns_table', 1),
(6, '2025_04_26_034121_create_towers_table', 1),
(7, '2025_04_26_034144_create_lantais_table', 1),
(8, '2025_04_26_034203_create_units_table', 1),
(9, '2025_04_26_171939_add_rusun_id_on_users', 1),
(10, '2025_04_27_170308_create_complaints_table', 1),
(11, '2025_04_27_170318_create_penilaians_table', 1),
(12, '2025_04_24_073232_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaians`
--

CREATE TABLE `penilaians` (
  `id` bigint UNSIGNED NOT NULL,
  `complaint_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `rating_layanan` int NOT NULL,
  `rating_kualitas` int NOT NULL,
  `rating_kecepatan` int NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penilaians`
--

INSERT INTO `penilaians` (`id`, `complaint_id`, `user_id`, `rating_layanan`, `rating_kualitas`, `rating_kecepatan`, `komentar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 21, 7, 4, 2, 3, 'Quae recusandae fugit quaerat id eius velit quia.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(2, 22, 8, 2, 1, 2, 'Natus repudiandae ducimus error non.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(3, 23, 9, 3, 4, 1, 'Modi et rerum ab possimus officiis.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(4, 24, 10, 4, 2, 4, 'Labore odio laboriosam omnis dolor architecto.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(5, 25, 11, 1, 5, 5, 'Nam quis amet corrupti iusto.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(6, 26, 12, 1, 3, 2, 'Quo dignissimos ea ipsum qui rerum.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(7, 27, 13, 3, 4, 1, 'Dolorem aliquam labore doloremque error.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(8, 28, 14, 5, 2, 3, 'Eligendi itaque similique qui.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(9, 29, 15, 5, 1, 3, 'Ipsum eos eligendi maiores sint est tenetur.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(10, 30, 16, 4, 4, 4, 'Illo laborum molestias occaecati quo et eum temporibus.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(11, 31, 17, 1, 4, 4, 'Fugiat rerum voluptas voluptatibus aut est nemo corrupti debitis.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(12, 32, 18, 1, 2, 3, 'Voluptatem recusandae repudiandae doloribus.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(13, 33, 19, 3, 5, 3, 'Deleniti voluptatem quos saepe quibusdam suscipit sapiente.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(14, 34, 20, 2, 4, 5, 'Et eius laboriosam magni eum explicabo doloribus in.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(15, 35, 21, 1, 1, 2, 'Doloribus ducimus pariatur sint officiis sit soluta.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(16, 36, 22, 3, 4, 1, 'Rem qui excepturi nemo distinctio.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(17, 37, 23, 1, 1, 2, 'Nihil quis ipsa voluptate aliquid earum quia.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(18, 38, 24, 1, 1, 5, 'Dolor sunt nemo quis porro officiis neque ratione.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(19, 39, 25, 2, 2, 4, 'Cum illo aut quisquam.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(20, 40, 26, 5, 2, 3, 'Rem officia impedit et repudiandae quae.', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(21, 41, 2, 5, 4, 4, 'mantep lah', NULL, '2025-04-28 08:02:23', '2025-04-28 08:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(2, 'view_any_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(3, 'create_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(4, 'update_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(5, 'restore_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(6, 'restore_any_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(7, 'replicate_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(8, 'reorder_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(9, 'delete_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(10, 'delete_any_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(11, 'force_delete_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(12, 'force_delete_any_complaint', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(13, 'view_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(14, 'view_any_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(15, 'create_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(16, 'update_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(17, 'restore_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(18, 'restore_any_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(19, 'replicate_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(20, 'reorder_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(21, 'delete_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(22, 'delete_any_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(23, 'force_delete_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(24, 'force_delete_any_lantai', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(25, 'view_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(26, 'view_any_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(27, 'create_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(28, 'update_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(29, 'restore_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(30, 'restore_any_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(31, 'replicate_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(32, 'reorder_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(33, 'delete_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(34, 'delete_any_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(35, 'force_delete_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(36, 'force_delete_any_penilaian', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(37, 'view_role', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(38, 'view_any_role', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(39, 'create_role', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(40, 'update_role', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(41, 'delete_role', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(42, 'delete_any_role', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(43, 'view_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(44, 'view_any_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(45, 'create_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(46, 'update_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(47, 'restore_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(48, 'restore_any_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(49, 'replicate_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(50, 'reorder_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(51, 'delete_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(52, 'delete_any_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(53, 'force_delete_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(54, 'force_delete_any_rusun', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(55, 'view_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(56, 'view_any_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(57, 'create_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(58, 'update_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(59, 'restore_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(60, 'restore_any_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(61, 'replicate_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(62, 'reorder_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(63, 'delete_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(64, 'delete_any_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(65, 'force_delete_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(66, 'force_delete_any_tower', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(67, 'view_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(68, 'view_any_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(69, 'create_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(70, 'update_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(71, 'restore_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(72, 'restore_any_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(73, 'replicate_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(74, 'reorder_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(75, 'delete_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(76, 'delete_any_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(77, 'force_delete_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(78, 'force_delete_any_unit', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(79, 'view_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(80, 'view_any_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(81, 'create_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(82, 'update_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(83, 'restore_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(84, 'restore_any_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(85, 'replicate_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(86, 'reorder_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(87, 'delete_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(88, 'delete_any_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(89, 'force_delete_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(90, 'force_delete_any_user', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(91, 'page_Profile', 'web', '2025-04-27 07:12:13', '2025-04-27 07:12:13'),
(92, 'widget_CountComplaintReport', 'web', '2025-04-27 07:12:13', '2025-04-27 07:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2025-04-27 07:12:12', '2025-04-27 07:12:12'),
(2, 'user', 'web', '2025-04-27 07:14:26', '2025-04-27 07:14:26'),
(3, 'petugas', 'web', '2025-04-27 08:43:32', '2025-04-27 09:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(33, 2),
(1, 3),
(2, 3),
(4, 3),
(25, 3),
(26, 3),
(91, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rusuns`
--

CREATE TABLE `rusuns` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rusuns`
--

INSERT INTO `rusuns` (`id`, `name`, `address`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Est exercitationem quia aut occaecati sed veniam.', '3779 Gerhold Springs Apt. 485\nQuitzonville, HI 34857', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(2, 'Ad est doloremque consequatur omnis ratione atque iusto nisi.', '561 Zechariah Avenue Apt. 441\nGulgowskishire, CT 36193', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(3, 'Ab itaque perferendis est suscipit qui.', '73302 Jast Ridge\nSouth Hayliebury, RI 93485', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(4, 'Sed sapiente consequatur qui consequuntur asperiores.', '81707 Emmie Plaza Apt. 307\nRavenport, DC 36190-3238', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(5, 'Beatae dolorum praesentium quas odit esse.', '8194 Hackett Forges Apt. 910\nPort Carmela, AR 61787-7797', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(6, 'Necessitatibus tempora sunt impedit et repudiandae ut beatae.', '79891 Fisher Stravenue Suite 893\nCelestinefurt, PA 70395', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(7, 'Officiis molestiae dolorum repellendus quos error quas numquam ab.', '91043 Cruickshank Land Suite 929\nAbbeyburgh, TX 20178-0651', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(8, 'Et architecto inventore et asperiores blanditiis perferendis.', '485 Katherine Cliff\nLulubury, NM 18328', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(9, 'Optio fugiat numquam et totam velit.', '8177 Dietrich Stravenue Apt. 304\nNew Clovis, SD 00218-6564', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(10, 'Sit minus debitis et iure ea.', '85962 Brown Crossing\nClarkland, KY 92217', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DqBTzyVzqTxn0ycl70Ecvbc5bIlYIUL3OG5ELScT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUjNGSGZQRm04ODNkSVNCUzhROE50dGdsaVJQSVRvS3U3SHhiT2Q0WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb21wbGFpbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRiUnhwRjBRNUNTbmw5VkRlck5nYW9PcC96Vk5ISFE4aS5IcFVWb05ra1FDVERFVVc0LjBhdSI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1745852963),
('eupfLqZBPTSpG1Ew90CgLGFZLfgVklCyCy5WLTzt', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSUlidVpXcjQyZktyT0NWMHBTaThWUFUzSWw2U1BkTnNJVTdCdExJOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb21wbGFpbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRCLnFwM3lZZnRMdWF2VFVOZUN3dHlPUm5SVVM1SkNaSjJuZ3BmNHJONzFycDJNUlRjSXgvRyI7fQ==', 1745853856),
('oe4xCKHmsABX2um3gt6NhlPqvpeMWpdHlPWobKAt', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36 Edg/135.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSjg1a2RRYk9LbTJSYW5rNmw5Z3lzRDl4OUFCY0txVUIzTEFuWWRkTSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkcjJRYnlQQklub2laL3paZFg4Q0Y3dXpDMHB2bFVWellmcDd1T1ZOZ2gzb245MUlPMk1oWFciO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1745854650);

-- --------------------------------------------------------

--
-- Table structure for table `towers`
--

CREATE TABLE `towers` (
  `id` bigint UNSIGNED NOT NULL,
  `rusun_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towers`
--

INSERT INTO `towers` (`id`, `rusun_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 8, 'Tower 4', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(2, 1, 'Tower 5', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(3, 1, 'Tower A', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(4, 9, 'Tower 7', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(5, 3, 'Tower B', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(6, 4, 'Tower 8', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(7, 2, 'Tower A', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(8, 10, 'Tower 5', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(9, 5, 'Tower B', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(10, 10, 'Tower B', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint UNSIGNED NOT NULL,
  `lantai_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `lantai_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, '99', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(2, 7, '92', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(3, 10, '41', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(4, 5, '66', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(5, 1, '57', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(6, 1, '78', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(7, 9, '84', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(8, 2, '37', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(9, 3, '35', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(10, 3, '95', NULL, '2025-04-27 07:12:02', '2025-04-27 07:12:02'),
(11, 2, '51', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(12, 1, '38', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(13, 4, '100', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(14, 3, '87', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(15, 8, '58', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(16, 4, '85', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(17, 4, '40', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(18, 5, '14', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(19, 8, '9', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(20, 7, '4', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(21, 3, '73', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(22, 3, '56', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(23, 1, '72', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(24, 5, '9', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(25, 1, '63', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(26, 9, '17', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(27, 7, '17', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(28, 7, '24', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(29, 7, '26', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(30, 9, '31', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03'),
(31, 4, '15', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(32, 2, '13', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(33, 6, '85', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(34, 1, '59', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04'),
(35, 1, '44', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unit_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `unit_id`) VALUES
(1, 'Admin', 'admin@test.com', NULL, '$2y$12$bRxpF0Q5CSnl9VDerNgaoOp/zVNHHQ8i.HpUVoNkkQCTDEUW4.0au', NULL, NULL, NULL, '2025-04-27 07:12:02', '2025-04-27 11:14:36', NULL),
(2, 'Taryn Bailey', 'remington63@example.org', '2025-04-27 07:12:02', '$2y$12$B.qp3yYftLuavTUNeCwtyORnRUS5JCZJ2ngpf4rN71rp2MRTcIx/G', '1-747-485-8383', 'niMdmwHocw', NULL, '2025-04-27 07:12:03', '2025-04-27 07:15:07', 22),
(3, 'Sibyl Wehner', 'stamm.hanna@example.org', '2025-04-27 07:12:03', '$2y$12$r2QbyPBInoiZ/zZdX8CF7uzC0pvlUVzYfp7uOVNgh3on91IO2MhXW', '862.837.9085', '3kAQtnlnj7', NULL, '2025-04-27 07:12:03', '2025-04-27 08:44:10', 33),
(4, 'Alda Grant', 'cade.bogan@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '847-739-1698', 'wBx9mJKHgL', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 13),
(5, 'Janice Stracke', 'verdie60@example.com', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1-916-240-5761', 'Pqevkgsl9i', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 14),
(6, 'Neil Mante', 'bryon.kutch@example.net', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '(786) 968-4027', 'Uq6DIiNFx9', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 15),
(7, 'Dr. Hermina Muller', 'annie.wyman@example.net', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1-848-903-1482', 'TjBR4xxQ4T', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 16),
(8, 'Rachel Price', 'swilliamson@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '1-351-537-2000', '2L314nbGAk', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 17),
(9, 'Florence Kunze V', 'sjones@example.com', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '218.499.9109', '8lkp5FxK0Z', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 18),
(10, 'Lavon Russel', 'riley.reinger@example.net', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '(458) 922-6044', 'H1rWCw6Jls', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 19),
(11, 'Jason Wuckert', 'meredith74@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1.281.704.9615', 'QeEpaaBCuh', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 20),
(12, 'Dr. Helmer Hintz Jr.', 'javonte60@example.com', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '651.824.1399', '4Um78TfVUm', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 21),
(13, 'Yessenia Koss', 'pvonrueden@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '667-301-7042', 'rq9nWT98j0', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 22),
(14, 'Bradley Bergstrom', 'kdooley@example.net', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '617.453.2064', '2W2rMurC21', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 23),
(15, 'Elise Bogisich', 'ugottlieb@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1-386-886-7955', 'rkCPXvCuSG', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 24),
(16, 'Ford Buckridge', 'hermann.norwood@example.com', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1.307.512.9385', 'yQGazfGCog', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 25),
(17, 'Zetta Stoltenberg', 'schiller.watson@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '1-720-988-5647', '263g42PtTS', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 26),
(18, 'Johnpaul Gleason', 'nzieme@example.com', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '734.356.0225', 'yZ9XkktyZ9', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 27),
(19, 'Antonina Welch', 'oskiles@example.com', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1 (541) 435-3528', 'heMozGGLle', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 28),
(20, 'Maryjane Ryan', 'billy.block@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1-985-455-9298', 'Gn9kyEwkph', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 29),
(21, 'Bernardo Predovic', 'durgan.virgil@example.org', '2025-04-27 07:12:03', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1.425.776.7107', 'paIBZz4CTS', NULL, '2025-04-27 07:12:03', '2025-04-27 07:12:03', 30),
(22, 'Lizeth Champlin', 'alverta61@example.com', '2025-04-27 07:12:04', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '702.620.3205', 'oMH2LX3JU5', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04', 31),
(23, 'Taylor Stamm', 'sharon.grant@example.net', '2025-04-27 07:12:04', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '1-385-916-6540', 'QKyQWwHycN', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04', 32),
(24, 'Alice Romaguera', 'donnelly.elza@example.com', '2025-04-27 07:12:04', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+19252024488', '5JV0QbnEKt', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04', 33),
(25, 'Lawson Okuneva V', 'rkoelpin@example.org', '2025-04-27 07:12:04', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '+1-409-797-4887', 'RBNPtmC7Z9', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04', 34),
(26, 'Coy Grant', 'marco68@example.com', '2025-04-27 07:12:04', '$2y$12$MJJzeWV1z3TOGmozpERPt.EsrD3mUVXc.9eW2DQ9W3ZF5ig6CewtG', '1-415-260-6598', 'YGJNCGD2Ws', NULL, '2025-04-27 07:12:04', '2025-04-27 07:12:04', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaints_unit_id_foreign` (`unit_id`),
  ADD KEY `complaints_user_id_foreign` (`user_id`),
  ADD KEY `complaints_user_verified_foreign` (`user_verified`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lantais`
--
ALTER TABLE `lantais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lantais_tower_id_name_unique` (`tower_id`,`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penilaians`
--
ALTER TABLE `penilaians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaians_complaint_id_foreign` (`complaint_id`),
  ADD KEY `penilaians_user_id_foreign` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rusuns`
--
ALTER TABLE `rusuns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rusuns_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `towers`
--
ALTER TABLE `towers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `towers_rusun_id_name_unique` (`rusun_id`,`name`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_lantai_id_name_unique` (`lantai_id`,`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_unit_id_foreign` (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lantais`
--
ALTER TABLE `lantais`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penilaians`
--
ALTER TABLE `penilaians`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rusuns`
--
ALTER TABLE `rusuns`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `towers`
--
ALTER TABLE `towers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaints_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaints_user_verified_foreign` FOREIGN KEY (`user_verified`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lantais`
--
ALTER TABLE `lantais`
  ADD CONSTRAINT `lantais_tower_id_foreign` FOREIGN KEY (`tower_id`) REFERENCES `towers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penilaians`
--
ALTER TABLE `penilaians`
  ADD CONSTRAINT `penilaians_complaint_id_foreign` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaians_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `towers`
--
ALTER TABLE `towers`
  ADD CONSTRAINT `towers_rusun_id_foreign` FOREIGN KEY (`rusun_id`) REFERENCES `rusuns` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_lantai_id_foreign` FOREIGN KEY (`lantai_id`) REFERENCES `lantais` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
