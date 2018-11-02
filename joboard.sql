-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2018 at 02:48 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `title`, `company`, `url`, `created_at`, `updated_at`) VALUES
(75, 12, 'engineer, software', NULL, 'http://jobviewtrack.com/en-ca/job-131e417e42021b19460645432d0f090e0b45111a6b36444c544348011d6c741b46171f001c0264124d5c5f/c17c4953423a7241e74370dae95528d2.html?affid=d9c8f942114d73022683107e1fd8d6c4', '2018-11-02 11:41:52', '2018-11-02 11:41:52'),
(73, 12, 'Web designer', NULL, 'http://jobviewtrack.com/en-ca/job-4c49416948170609491152613f040c47214507010e1d4f593c1f145059/b1289b234530ea6293485723138fa027.html?affid=d9c8f942114d73022683107e1fd8d6c4', '2018-11-02 10:52:42', '2018-11-02 10:52:42'),
(74, 12, 'Full Stack/LAMP Developer', 'Autodata Solutions', 'http://jobviewtrack.com/en-ca/job-4f4a41614c091f4e63115606040e1e02172238090403286d484141443c1a46174b432c041802094f040d1b716c5e51412f200a1842184f130d136f555c1442/09402371725778cb2bdb6819d848d078.html?affid=d9c8f942114d73022683107e1fd8d6c4', '2018-11-02 10:54:50', '2018-11-02 10:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_10_28_225458_favorites_migration', 1),
(3, '2018_10_29_213319_create_technologies_table', 1),
(4, '2018_10_29_213344_create_profiles_table', 1),
(5, '2018_10_29_213720_create_technology_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `location`, `created_at`, `updated_at`) VALUES
(12, 12, 'Calgary', '2018-11-02 10:52:10', '2018-11-02 10:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

DROP TABLE IF EXISTS `technologies`;
CREATE TABLE IF NOT EXISTS `technologies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `description`, `created_at`, `updated_at`) VALUES
(6, 'laravel', '2018-11-01 23:28:26', '2018-11-01 23:28:26'),
(5, 'php', '2018-11-01 23:28:26', '2018-11-01 23:28:26'),
(7, 'vue.js', '2018-10-31 17:55:57', '2018-10-31 17:55:57'),
(8, 'bootstrap', '2018-11-01 23:26:51', '2018-11-01 23:26:51'),
(9, 'html', '2018-11-01 23:26:51', '2018-11-01 23:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `technology_user`
--

DROP TABLE IF EXISTS `technology_user`;
CREATE TABLE IF NOT EXISTS `technology_user` (
  `technology_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `technology_user_technology_id_foreign` (`technology_id`),
  KEY `technology_user_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technology_user`
--

INSERT INTO `technology_user` (`technology_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 4, NULL, NULL),
(7, 5, NULL, NULL),
(1, 4, NULL, NULL),
(6, 5, NULL, NULL),
(5, 5, NULL, NULL),
(7, 6, NULL, NULL),
(6, 6, NULL, NULL),
(5, 6, NULL, NULL),
(6, 7, NULL, NULL),
(5, 7, NULL, NULL),
(7, 7, NULL, NULL),
(5, 8, NULL, NULL),
(7, 8, NULL, NULL),
(6, 8, NULL, NULL),
(5, 4, NULL, NULL),
(5, 9, NULL, NULL),
(7, 4, NULL, NULL),
(7, 9, NULL, NULL),
(6, 9, NULL, NULL),
(9, 9, NULL, NULL),
(8, 9, NULL, NULL),
(6, 10, NULL, NULL),
(5, 10, NULL, NULL),
(8, 10, NULL, NULL),
(7, 10, NULL, NULL),
(5, 10, NULL, NULL),
(6, 11, NULL, NULL),
(5, 11, NULL, NULL),
(8, 11, NULL, NULL),
(9, 11, NULL, NULL),
(7, 12, NULL, NULL),
(8, 12, NULL, NULL),
(5, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Johnathan Dionne', '123@123.com', '$2y$10$mEICni8DgAdArBPLFUUa4eU8CAe9r24nIDWWPMF5kKZK5KFJd7kKO', NULL, '2018-11-02 10:52:10', '2018-11-02 10:52:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
