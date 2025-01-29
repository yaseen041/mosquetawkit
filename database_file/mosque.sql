-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2025 at 01:33 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mosque`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` tinyint DEFAULT '0' COMMENT '0= super_admin, 1 = admin',
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 = inactive, 1 = active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$EAd4rCB1B0dDTUkhkUf9guMfg5ojFlJfwS8gBESwu1gPqakxxArHe', 0, 1, '2022-09-12 18:42:51', '2024-11-22 12:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_10_18_075819_create_plans_table', 1),
(3, '2024_10_21_081705_create_emails_table', 2),
(4, '2024_10_21_095620_create_profile_change_logs_table', 3),
(5, '2024_10_21_113652_create_photo_change_logs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`,`token`),
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('liqukawe@mailinator.com', 'qnh58ZIkO3gkHiGawe7OIlmWwrHyeRIXnMgFxbq0nETkukMPLWx4RD4JroH0DROA', '2024-12-10 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `meta_tag`, `meta_key`, `meta_value`) VALUES
(1, 'project', 'site_title', 'أوقات الصلاة - Prayer Times | توقيت مكة'),
(2, 'project', 'short_site_title', 'PT'),
(3, 'project', 'site_logo', 'logo.png'),
(4, 'project', 'admin_email', 'info@explorelogicsit.com'),
(5, 'project', 'noreply_email', 'noreply@explorelogicsit.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w9_application` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_application` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_application` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint NOT NULL DEFAULT '0' COMMENT '0 = un-verified, \r\n1 = verified',
  `verification_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `verified_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 = inactive, \r\n1 = active,\r\n2 = suspended',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `full_name`, `password`, `email`, `phone_no`, `company_name`, `address`, `tax_id`, `w9_application`, `tax_application`, `credit_application`, `is_verified`, `verification_token`, `verified_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad', 'Yaseen', 'Muhammad Yaseen', '$2y$10$xcSHnrvGa6.Qr44I0CaW.OPZ15klPSJiq6fTlOg6WTtS4Gwn2RX8C', 'yaseen3327095758@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-12-06 02:22:05', 1, '2024-12-06 14:21:41', '2024-12-06 14:23:59'),
(9, 'Test', 'User', 'Test User', '$2y$10$VAZed6Tej7l4QGuqi5MNZOaq3Z6EV/Xn0/PmuKLzClkguUcOACp3W', 'dev1@explorelogicsit.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-12-19 01:42:13', 1, '2024-12-19 13:39:34', '2025-01-15 12:52:06'),
(11, 'Paki', 'Patrick', 'Paki Patrick', '$2y$10$ifPpYjXxXTVTG9rPGK4S6uX7OX1HQeEA9WZsLTGyPp8zEyy1SxSuS', 'winteh@free-webmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-12-20 06:22:14', 0, '2024-12-20 06:18:55', '2025-01-09 13:55:36'),
(12, 'expolre', 'dev', 'dev explore', '$2y$10$sYPBI8cR97hF4jPiA7bLIuGi47VylhkobZ08VOjNa2IP5.PPUezUO', 'vodey59974@kelenson.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-12-20 02:23:20', 1, '2024-12-20 14:22:53', '2024-12-20 14:25:58'),
(13, 'Xerxes', 'Clemons', 'Xerxes Clemons', '$2y$10$FjJ0Tfy8JuxoMjql0wR1FeifiIMLVERAHisut/hH4bfz257zzck3K', 'roxulyp@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '6G6cniVplYrHLlI9P5ftmH3suMMseC7wiogVvWfavaIf5UUNbXl9CRQk8Sip', NULL, 1, '2025-01-15 08:35:01', '2025-01-15 08:35:01'),
(16, 'Robert', 'Rich', 'Robert Rich', '$2y$10$90prnVblFk7HF/mcWuAzZumR06WhawyinPQDL9IPpCphQECTv6O9u', 'tosy@mailinator.com', '19824793416', 'Cook and Bailey Co', 'Optio accusantium d', 'Est rem animi cons', '1737009591_aHeidykeue.pdf', '1737009591_wHDFkt8lS0.pdf', '1737009591_PdsxGTt4T4.pdf', 0, 'eT4w9EuFXiarJdsSMU21rXVZF7uH8LX3FxWNWvr4XCrmxjWIm32293GxIOWS', NULL, 1, '2025-01-16 06:39:51', '2025-01-16 06:39:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
