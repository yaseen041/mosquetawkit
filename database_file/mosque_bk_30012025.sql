-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2025 at 09:25 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.27

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
-- Table structure for table `mosques`
--

DROP TABLE IF EXISTS `mosques`;
CREATE TABLE IF NOT EXISTS `mosques` (
  `id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int DEFAULT NULL,
  `mosque_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `message_expire_date` datetime DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0= inactive, 1= active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mosques`
--

INSERT INTO `mosques` (`id`, `unique_id`, `mosque_name`, `app_name`, `email`, `password`, `country`, `city`, `qr_code`, `message`, `message_expire_date`, `status`, `created_at`, `updated_at`) VALUES
(10, NULL, 'Iman Mosque', 'FaithConnect', 'imanmosque@example.com', '2025-01-30 13:40:53', 'Malaysia', 'Kuala Lumpur', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225527.png', 'Friday sermon at 1:30 PM.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(11, NULL, 'Taqwa Mosque', 'HalalFinder', 'taqwamosque@example.com', '2025-01-30 13:40:53', 'South Africa', 'Cape Town', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225652.png', 'Eid prayer at 7:00 AM.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(12, NULL, 'Masjid Al-Tawheed', 'IslamicEvents', 'tawheedmasjid@example.com', '2025-01-30 13:40:53', 'Saudi Arabia', 'Riyadh', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219919.png', 'Charity event this Sunday.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(13, NULL, 'Nurul Islam Mosque', 'QuranRecite', 'nurulislam@example.com', '2025-01-30 13:40:53', 'Bangladesh', 'Dhaka', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219978.png', 'Tafseer classes every weekend.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(4, NULL, 'Al-Falah Mosque', 'PrayerApp', 'alfalah@example.com', '2025-01-30 13:40:53', 'USA', 'New York', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219919.png', 'Welcome to Al-Falah Mosque.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(6, NULL, 'Rahma Mosque', 'IslamicApp', 'rahmamosque@example.com', '2025-01-30 13:40:53', 'UK', 'London', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225527.png', 'Community events every Friday.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(7, NULL, 'Salam Mosque', 'PrayerTime', 'salammosque@example.com', '2025-01-30 13:40:53', 'Australia', 'Sydney', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225652.png', 'Fajr prayer at 5:00 AM.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(8, NULL, 'Masjid Al-Noor', 'QiblaFinder', 'masjidnoor@example.com', '2025-01-30 13:40:53', 'UAE', 'Dubai', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219919.png', 'Ramadan special programs available.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(9, NULL, 'Masjid Al-Huda', 'MuslimApp', 'masjidhuda@example.com', '2025-01-30 13:40:53', 'Pakistan', 'Karachi', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219978.png', 'Dua session every evening.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(14, NULL, 'Masjid Al-Ikhlas', 'HadithApp', 'ikhlasmasjid@example.com', '2025-01-30 13:40:53', 'Turkey', 'Istanbul', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225527.png', 'Community Iftar arrangements.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(15, NULL, 'Masjid As-Salam', 'DuaHelper', 'assalammosque@example.com', '2025-01-30 13:40:53', 'France', 'Paris', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225652.png', 'Monthly Islamic lectures.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(16, NULL, 'Masjid Al-Bilal', 'UmmahConnect', 'bilalmosque@example.com', '2025-01-30 13:40:53', 'India', 'Mumbai', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219919.png', 'Youth Islamic program every Saturday.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 09:21:02'),
(17, NULL, 'Masjid Al-Farooq', 'MuslimCalendar', 'farooqmosque@example.com', '2025-01-30 13:40:53', 'Egypt', 'Cairo', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219978.png', 'Zakat collection available.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(18, NULL, 'Masjid Al-Wahda', 'HajjGuide', 'wahdamosque@example.com', '2025-01-30 13:40:53', 'Indonesia', 'Jakarta', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225527.png', 'Hajj and Umrah guidance.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(19, NULL, 'Masjid Al-Khair', 'PrayerReminder', 'khairmosque@example.com', '2025-01-30 13:40:53', 'Qatar', 'Doha', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225652.png', 'Tahajjud prayer every night.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(20, NULL, 'Masjid Al-Siddiq', 'MeccaCompass', 'siddiqmosque@example.com', '2025-01-30 13:40:53', 'Jordan', 'Amman', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219919.png', 'New Quran memorization classes.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(21, NULL, 'Masjid Al-Barakah', 'RamadanTracker', 'barakahmosque@example.com', '2025-01-30 13:40:53', 'Nigeria', 'Lagos', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219978.png', 'Special youth programs.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(22, NULL, 'Masjid Al-Ihsan', 'IslamicRadio', 'ihsanmosque@example.com', '2025-01-30 13:40:53', 'Morocco', 'Casablanca', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225527.png', 'Mawlid celebrations planned.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(25, NULL, 'Masjid Al-Nabawi', 'MadinaLive', 'nabawimosque@example.com', '2025-01-30 13:40:53', 'Saudi Arabia', 'Medina', 'http://localhost/mosquetawkit/uploads/qrcodes/1738219978.png', 'Hajj registration assistance.', '2025-01-30 13:40:29', 0, '2025-01-30 13:39:41', '2025-01-30 09:21:52'),
(26, NULL, 'Masjid Al-Mujahideen', 'JannahGuide', 'mujahideenmosque@example.com', '2025-01-30 13:40:53', 'Somalia', 'Mogadishu', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225527.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 13:40:06'),
(27, NULL, 'Masjid Al-Quds', 'PalestineSupport', 'qudsmasjid@example.com', '2025-01-30 13:40:53', 'Palestine', 'Jerusalem', 'http://localhost/mosquetawkit/uploads/qrcodes/1738225652.png', 'Charity fundraising drive.', '2025-01-30 13:40:29', 1, '2025-01-30 13:39:41', '2025-01-30 09:21:16');

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
