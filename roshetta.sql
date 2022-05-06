-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2022 at 10:39 PM
-- Server version: 8.0.27
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roshetta`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

DROP TABLE IF EXISTS `medicines`;
CREATE TABLE IF NOT EXISTS `medicines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Primperan Tablets', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(2, 'Omez 20 Capsules', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(3, 'Spasmofen Amp', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(4, 'Xithrone 500 mg', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(5, 'Dexamethasone Amp', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(6, ' Ceftriaxone 1g', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(7, 'Panadol Advance', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(8, 'Decancit SR', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(9, 'PowerCaps', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(10, 'Congestal', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(11, 'Comtrex Tablets', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(12, 'Panadol Extra Tablets', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(13, 'Depovit B12 Amp', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(14, 'Omega 3 Plus', '2022-05-06 21:59:15', '2022-05-06 21:59:15'),
(15, ' Neurimax Cap Amp', '2022-05-06 21:59:15', '2022-05-06 21:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `medicine` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `patient_id` int UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `medicine`, `notes`, `patient_id`, `img`, `created_at`, `updated_at`) VALUES
(15, '  Primperan Tablets', ' some details', 0, '', '2022-05-06 17:56:15', '2022-05-06 17:56:36'),
(16, '  ', ' some details here', 0, '', '2022-05-06 17:56:15', '2022-05-06 17:56:36'),
(17, '  Omez 20 Capsules', ' hiiiiiiiiiiii', 2, '', '2022-05-06 17:56:15', '2022-05-06 17:56:36'),
(18, '  Xithrone 500 mg', ' rrrrrrrrr', 2, '', '2022-05-06 17:56:15', '2022-05-06 17:56:36'),
(19, 'Panadol Advance', 'ddddddd', 3, '', '2022-05-06 17:56:15', '2022-05-06 17:56:36'),
(20, 'Xithrone 500 mg', '3pandol', 3, '', '2022-05-06 17:56:15', '2022-05-06 17:56:36'),
(21, 'Dexamethasone Amp', 'notes 3', 3, '', '2022-05-06 17:56:15', '2022-05-06 17:56:36'),
(22, 'some here', 'details', 2, '/img/roshetta/627565bb00ff5.png', '2022-05-06 16:15:23', '2022-05-06 16:15:23'),
(23, 'some here', 'details', 2, '/img/roshetta/62756642689fb.png', '2022-05-06 16:17:38', '2022-05-06 16:17:38'),
(24, 'some here', 'details', 2, '/img/roshetta/627568819ede5.png', '2022-05-06 16:27:13', '2022-05-06 16:27:13'),
(25, ' Decancit SR', 'roshetta 4', 3, '', '2022-05-06 19:10:07', '2022-05-06 19:10:07'),
(26, 'Dexamethasone Amp', 'eeee5', 3, '', '2022-05-06 19:11:54', '2022-05-06 19:11:54'),
(27, 'Omez 20 Capsules', 'eeee5rfrgv', 3, '', '2022-05-06 19:12:29', '2022-05-06 19:12:29'),
(28, 'Xithrone 500 mg', 'sssssss', 4, '', '2022-05-06 19:21:09', '2022-05-06 19:21:09'),
(29, 'some here', 'details', 2, '/img/roshetta/627576b4d5946.png', '2022-05-06 17:27:49', '2022-05-06 17:27:49'),
(30, 'some here', 'details', 2, '/img/roshetta/627577838abae.png', '2022-05-06 17:31:15', '2022-05-06 17:31:15'),
(32, 'Primperan Tablets', 'sssssssss', 7, '', '2022-05-06 21:54:50', '2022-05-06 21:54:50'),
(33, 'Omez 20 Capsules', 'test', 7, '', '2022-05-06 22:22:41', '2022-05-06 22:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'GOyxvVUFoVUXXatloqGfk0UFQ3W8lpp3OMQc9HSt', '11da54a2dbfebe445c73e42acf0a8d0f5eebb53186b5b84e5d0b52a12220a39a', '[\"*\"]', NULL, '2022-05-05 00:12:21', '2022-05-05 00:12:21'),
(2, 'App\\Models\\User', 2, 'mWxgXGszUrxWKXao6JwjA5b4MX1Lx9alUkwcXW41', '823920b6ded34b64976147c1ec3d703276d9ea569f0788ca94997d27fe88fb61', '[\"*\"]', NULL, '2022-05-05 00:37:30', '2022-05-05 00:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('doctor','patient') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doctor',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Awad', 'mohamed@gmail.com', NULL, '35', NULL, 'doctor', '2022-05-05 00:12:21', '2022-05-05 00:12:21'),
(2, 'Mazen Awad', 'mazen@gmail.com', NULL, '35', NULL, 'doctor', '2022-05-05 00:37:30', '2022-05-05 00:37:30'),
(3, 'Abdul_Rahman Awad', 'Abdul_Rahman@gmail.com', NULL, '123456', NULL, 'doctor', NULL, NULL),
(4, 'Mohamed Taher', 'Mohamed@gmail.com', NULL, '123456', NULL, 'doctor', NULL, NULL),
(7, 'Ahmed Gamal', 'Ahmed_Gamal@gmail.com', NULL, '55555', NULL, 'patient', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
