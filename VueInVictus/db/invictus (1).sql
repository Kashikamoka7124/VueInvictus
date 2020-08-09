-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2020 at 05:28 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invictus`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cups` int(11) NOT NULL DEFAULT '25',
  `projects` int(11) DEFAULT '25',
  `clients` int(11) DEFAULT '25',
  `affiliations` int(11) NOT NULL DEFAULT '25',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `cups`, `projects`, `clients`, `affiliations`, `created_at`, `updated_at`) VALUES
(1, 30, 50, 30, 30, '2020-07-29 12:02:10', '2020-07-29 12:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
CREATE TABLE IF NOT EXISTS `industries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'EDUCATION', 'This is education industry', 'storage/industry/ddp25Mw148S20s1MWbcywRujmTb4Ve57nGpcdLkq.png', NULL, NULL),
(2, 'TRAVEL AND TOURS', 'This is Travels And Tours industry', 'storage/industry/lI9NUZZXKU9qf0rEcpxYq4w98dyylLL3ZjiBeVK7.png', NULL, NULL),
(3, 'Educational', 'This is Education Industry', 'storage/industry/sqZpmO5Yudjm7PxDpXkk6pFNikoMlQL0OETPpxxj.png', NULL, NULL),
(4, 'EDUCATIONS', 'This is education industry', 'storage/industry/qOWl12O6dLj1HlC41H8cuPurXVWXrPLbBGWSv8XT.png', NULL, NULL),
(5, 'TRAVEL AND TOUR', 'This is Travels And Tours industry', 'storage/industry/lI9NUZZXKU9qf0rEcpxYq4w98dyylLL3ZjiBeVK7.png', NULL, NULL),
(6, 'STUDY', 'This is Education Industry', 'storage/industry/sqZpmO5Yudjm7PxDpXkk6pFNikoMlQL0OETPpxxj.png', NULL, NULL),
(7, 'INVICTUS', 'This is Education Industry', 'storage/industry/yzvecoqXeRT73jlZZkwVZsPYVnEv6nr0CgRuuq6b.png', NULL, NULL),
(8, 'UIL', 'This is education industry', 'storage/industry/ddp25Mw148S20s1MWbcywRujmTb4Ve57nGpcdLkq.png', NULL, NULL),
(9, 'KASHMIR', 'This is Travels And Tours industry', 'storage/industry/lI9NUZZXKU9qf0rEcpxYq4w98dyylLL3ZjiBeVK7.png', NULL, NULL),
(10, 'UNITED INDUSTRIES', 'This is Education Industry', 'storage/industry/sqZpmO5Yudjm7PxDpXkk6pFNikoMlQL0OETPpxxj.png', NULL, NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'FOOD PLACE', '<div><strong>asqwh</strong></div>', 'storage/portfolio/AxnRxsrNcjcl9deZPo0Pnaw35L0kAxFFwJr5GYyz.png', NULL, NULL),
(2, 'This is 2nd slider heading', '<div><del>hello world</del></div>', 'storage/portfolio/zz7Nk6Pmb8JQV0pHpxKeehqbXIJPuvbl1eKuOK9Y.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Why Kotlin Is New Age Preference For Adroid', 'We live in digital era with the advance of modren smart phone.', '<div>We live in digital era with the advance of modren smart phone. We live in digital era with the advance of modren smart phone.<br><strong>Some of the best things I’ve noted</strong> while reviewing these products were their number of fans, height adjustability, fan speed and coverage, and body design and dimensions. The fans play a key part in keeping your laptop cool, while the height adjustability improves the comfort level of using the laptop as well as adding more space beneath the laptop for further air movement.<br><br></div><div>But the fan size and speed also play a very important factor because it helps determine how fast it can get the heat off your laptop and get cool air going through. And of course, you will want it to be large enough for your laptop, but not too large so as to make the fan coverage ineffective.<br><br></div><div>While reading these reviews, you should be able to get a feeling for which one fits your laptop best. It can depend on your laptop’s size. Your laptop may get hot depending on what it is you do, which can help you decide whether you need just one huge fan, or two, three, four, or even five. Keep your laptop in mind while you read on.<br><br></div><div>It is important to always measure the width and length of your laptop to make sure that the cooling pad you choose fits the laptop. While it’s okay if it’s a little bigger than your laptop, you don’t want one tha<del>t’s too big and certainly not one that’s too small</del>.<br><br></div>', 'storage/post/NwOZPK1cQJharjZd1dMgC1vbjTDV9R4imcNoLnib.jpeg', NULL, NULL),
(2, 'Mobile app idea for 7 industries..', 'Tough time is on and the industries are suffering. Tough time is on and the industries are suffering.', '<div>Tough time is on and the industries are suffering.Tough time is on and the industries are suffering. Tough time is on and the industries are suffering.</div>', 'storage/post/EzdoI0THNmU4C8fvHtumN8E1wnweCjrryXqK5LPz.jpeg', NULL, NULL),
(3, '13 Best B2B Apps For Managing Your Bisuness', 'Runing a successful is not an easy task. Runing a successful is not an easy task. Runing a successful is not an easy task.', '<div>Runing a successful is not an easy task. Runing a successful is not an easy task. Runing a successful is not an easy task.&nbsp;</div>', 'storage/post/M5Dk9bGxxHIqoEasYubyvhIxPmFfIlrfkEN1XxdI.jpeg', NULL, NULL),
(4, 'Software Development: The Ultimate Guid For 2020', 'With programming language evolving and software development icon.', '<div>With programming language evolving and software development icon. With programming language evolving and software development icon. With programming language evolving and software development icon.</div>', 'storage/post/TEpQnU8QkxKOJnXBYR8kvgrP8eiwqhQZ6FE07QQA.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Maan Al-Masri', 'The work completed by the invictus team is of high quality and meets the requirements.They offered several design options to choose from that were attractive and fit for purpose.Despite some language barriers with the developers,the project is managed well.', 'storage/review/xzmO5iX9XeTmJM0bNJUWNtQPdPRP2PP23vjlY3e9.png', NULL, NULL),
(2, 'Maan', 'The work completed by the invictus team is of high quality and meets the requirements.They offered several design options to choose from that were attractive and fit for purpose.Despite some language barriers with the developers,the project is managed well.', 'storage/review/vCY2PFpiGjCpig2BtuNX5ZGP92dhPv2zvGLbBmRm.png', NULL, NULL),
(3, 'Aluison', 'The work completed by the invictus team is of high quality and meets the requirements.They offered several design options to choose from that were attractive and fit for purpose.Despite some language barriers with the developers,the project is managed well.', 'storage/review/yvgwwGWTMtiXdIf49hqBf4qCNlEWjBu2GCM9IBw2.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bilal', 'admin@invictussolutions.co', NULL, '$2y$10$x3RTsiRQvbrVZeIvm2t/8uWHzTdrl3drZUyDpmaxpRXhzMX/1AjqS', 'KxCaSZBU5soYZY6kFM4xFnbcu2X59hBy1rwFxtRU6bLTxeoZ55eSwpTdfft4', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
