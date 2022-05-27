-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 01:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiztask`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_25_101323_questions', 2),
(6, '2022_05_25_101343_answers', 2),
(7, '2022_05_27_064224_record', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What is php?', 'client side', 'server side', 'Both client side and server side', 'none of the above', 'option_2', NULL, NULL),
(2, 'Who is the father of PHP?', 'Drek KolkevDrek Kolkevi', 'Rasmus Lerdorf', ' Willam Makepiece', 'List Barely', 'option_2', NULL, NULL),
(3, ' How to define a function in PHP?', 'functionName(parameters) {function body}', 'function {function body}', 'function functionName(parameters) {function body}', 'data type functionName(parameters) {function body}', 'option_3', NULL, NULL),
(4, 'Which is the right way of declaring a variable in PHP?', '$3hello\n', '$_hello', '$this', '$5_Hello', 'option_2', '2022-05-26 07:28:50', '2022-05-26 07:28:50'),
(5, ' Which of the following PHP functions can be used for generating unique ids?', 'uniqueid()', 'md5()', 'id()', 'none of the above', 'option_1', '2022-05-26 07:49:59', '2022-05-26 07:49:59'),
(6, 'A function in PHP which starts with __ (double underscore) is known as __________', 'Default Function', 'User Defined Function', 'Inbuilt Function', 'Magic Function', 'option_4', '2022-05-27 03:52:00', '2022-05-27 03:52:00'),
(7, 'Which of the following web servers are required to run the PHP script?', 'Apache and PHP', 'IIS', 'XAMPP', 'Any of the mentioned', 'option_2', '2022-05-27 03:53:09', '2022-05-27 03:53:09'),
(8, 'Which one of the following PHP function is used to determine a file’s last access time?', 'filetime()', 'fileatime()', 'fileltime()', 'filectime()', 'option_2', '2022-05-27 03:54:26', '2022-05-27 03:54:26'),
(9, 'The developers of PHP deprecated the safe mode feature as of which PHP version?', 'PHP 5.3.1', 'PHP 5.1.0', 'PHP 5.2.0', 'PHP 5.3.0', 'option_1', '2022-05-27 03:55:22', '2022-05-27 03:55:22'),
(10, 'What does PDO stand for?', 'PHP Data Object', 'PHP Database Orientation', 'PHP Database Object', 'PHP Data Orientation', 'option_1', '2022-05-27 03:56:16', '2022-05-27 03:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correctans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wrongans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `email`, `correctans`, `wrongans`, `total`, `created_at`, `updated_at`) VALUES
(1, 'aish.agarwal25@gmail.com', '3', '3', '3', '2022-05-27 01:45:47', '2022-05-27 01:45:47'),
(2, 'adity.salunkhe29@gmail.com', '1', '3', '1', '2022-05-27 02:48:39', '2022-05-27 02:48:39'),
(3, 'adity.salunkhe29@gmail.com', '1', '3', '1', '2022-05-27 02:48:47', '2022-05-27 02:48:47'),
(4, 'adity.salunkhe29@gmail.com', '1', '3', '1', '2022-05-27 02:49:08', '2022-05-27 02:49:08'),
(5, 'adity.salunkhe1999@gmail.com', '3', '2', '3', '2022-05-27 02:49:42', '2022-05-27 02:49:42'),
(6, 'adity.salunkhe29@gmail.com', '0', '1', '0', '2022-05-27 02:50:18', '2022-05-27 02:50:18'),
(7, 'anujpratap.1906@gmail.com', '0', '2', '0', '2022-05-27 02:51:23', '2022-05-27 02:51:23'),
(8, '12345@gmail.com', '1', '0', '1', '2022-05-27 02:53:28', '2022-05-27 02:53:28'),
(9, '12345@gmail.com', '1', '0', '1', '2022-05-27 02:53:39', '2022-05-27 02:53:39'),
(10, 'sam@yokmail.com', '1', '1', '1', '2022-05-27 03:08:09', '2022-05-27 03:08:09'),
(11, 'sam@yokmail.com', '2', '3', '2', '2022-05-27 03:09:51', '2022-05-27 03:09:51'),
(12, 'aish.agarwal25@gmail.com', '3', '7', '3', '2022-05-27 03:57:44', '2022-05-27 03:57:44'),
(13, 'aish@gmail.com', '1', '0', '1', '2022-05-27 03:58:30', '2022-05-27 03:58:30'),
(14, 'aish@gmail.com', '1', '0', '1', '2022-05-27 04:08:51', '2022-05-27 04:08:51'),
(15, 'aish@gmail.com', '1', '0', '1', '2022-05-27 04:09:15', '2022-05-27 04:09:15'),
(16, 'aish@gmail.com', '3', '7', '3', '2022-05-27 04:19:30', '2022-05-27 04:19:30'),
(17, 'aish@gmail.com', '3', '8', '3', '2022-05-27 04:20:08', '2022-05-27 04:20:08'),
(18, 'aish@gmail.com', '3', '9', '3', '2022-05-27 04:20:14', '2022-05-27 04:20:14'),
(19, 'aish@gmail.com', '3', '10', '3', '2022-05-27 04:20:47', '2022-05-27 04:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adity', 'adity.salunkhe29@gmail.com', NULL, '$2y$10$rzoSW3j1gopJWXsg8lfe6.nZOAuR7cuaLdxc7uNNykD/AEmcI8q1C', NULL, '2022-05-25 04:28:23', '2022-05-25 04:28:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
