-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 08:52 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friend_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accepted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_coverphoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `my_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `my_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_uni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_uni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_uni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `u_id`, `u_name`, `user_image`, `user_coverphoto`, `email`, `language`, `dob_day`, `dob_month`, `dob_year`, `gender`, `my_city`, `my_country`, `about_me`, `school`, `from_school`, `to_school`, `description_school`, `university`, `from_uni`, `to_uni`, `description_uni`, `company`, `designation`, `from_work`, `to_work`, `city_work`, `description_work`, `interest`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Oshit Sutra Dar', '/upload/1500964502.jpg', '/upload/1500964538.jpg', 'oshit@gmail.com', 'Bangla, English', '1', 'Jan', '1996', 'Male', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-25 00:07:17', '2017-07-25 00:07:38', NULL),
(2, '2', 'Aleya nur mohol siddika', '/upload/1500964733.jpg', '/upload/1500964820.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-25 00:07:37', '2017-07-25 00:07:20', NULL),
(3, '3', 'Ismaile Hossain', '/upload/1500965066.jpg', '/upload/1500965040.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-25 00:07:33', '2017-07-25 00:07:26', NULL),
(4, '4', 'Nur MohammadNahid', '/upload/1500965126.jpg', '/upload/1500965313.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-25 00:07:04', '2017-07-25 00:07:33', NULL),
(5, '5', 'Dipak Dev Nath', '/upload/1500965158.jpg', '/upload/1500965343.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-25 00:07:44', '2017-07-25 00:07:03', NULL),
(6, '6', 'Masud Rahman', '/upload/1500965195.jpg', '/upload/1500965246.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-25 00:07:23', '2017-07-25 00:07:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unlike` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(3, '2017_05_28_062426_create_user_info_table', 1),
(4, '2017_05_28_065054_create_user_photo_table', 1),
(5, '2017_05_28_065531_create_comment_table', 1),
(6, '2017_05_28_070452_create_like_table', 1),
(7, '2017_05_30_173839_create_signup_table', 1),
(8, '2017_06_03_054411_create_statuses_table', 1),
(9, '2017_06_06_050418_create_informations_table', 1),
(10, '2017_06_06_063416_create_friends_table', 1),
(11, '2017_06_15_134612_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friend_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `u_id`, `u_name`, `status`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '1', 'Oshit Sutra Dar', 'Nice Nature', '/upload/1500964625.jpg', '2017-07-25 00:37:05', '2017-07-25 00:37:05', NULL),
(4, '2', 'Aleya nur mohol siddika', NULL, '/upload/1500964883.JPG', '2017-07-25 00:41:23', '2017-07-25 00:41:24', NULL),
(5, '2', 'Aleya nur mohol siddika', NULL, '/upload/1500964899.jpg', '2017-07-25 00:41:39', '2017-07-25 00:41:39', NULL),
(6, '2', 'Aleya nur mohol siddika', NULL, '/upload/1500964923.jpg', '2017-07-25 00:42:02', '2017-07-25 00:42:03', NULL),
(8, '3', 'Ismaile Hossain', NULL, '/upload/1500964984.jpg', '2017-07-25 00:43:04', '2017-07-25 00:43:04', NULL),
(9, '3', 'Ismaile Hossain', NULL, '/upload/1500964995.jpg', '2017-07-25 00:43:15', '2017-07-25 00:43:15', NULL),
(10, '6', 'Masud Rahman', NULL, '/upload/1500965268.jpg', '2017-07-25 00:47:48', '2017-07-25 00:47:48', NULL),
(11, '4', 'Nur MohammadNahid', NULL, '/upload/1500965296.jpg', '2017-07-25 00:48:16', '2017-07-25 00:48:17', NULL),
(12, '5', 'Dipak Dev Nath', NULL, '/upload/1500965361.jpg', '2017-07-25 00:49:21', '2017-07-25 00:49:21', NULL),
(13, '1', 'Oshit Sutra Dar', NULL, '/upload/1500965463.JPG', '2017-07-25 00:51:03', '2017-07-25 00:51:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oshit Sutra Dar', 'oshit@gmail.com', '$2y$10$vEKVvO3WryhA8gVClsNNjuAE0PRFQCpqv6CV7HJS3KvcFMihpzQSW', 'd78Re323qelQIccw27WB6DtPJys4eUPM5B5M6Kl7zgtNVxeUrEx3fV7gFn3Q', '2017-07-25 00:33:16', '2017-07-25 00:33:16'),
(2, 'Aleya nur mohol siddika', 'aleya@gmail.com', '$2y$10$4j7oxuXd3ZeEpbSHAYlz2uGJO9dQgyddDGHZng1xO3QVQbOQH744y', 'F5trs1JwRGH2CsW9KXujSU5PDr3kZ4dipUD5JwreiVp9vIG9PFBuQlkducjg', '2017-07-25 00:38:37', '2017-07-25 00:38:37'),
(3, 'Ismaile Hossain', 'ismaile@gmail.com', '$2y$10$.nhprLNG29oneic2Pg8L7uRRepLaODUjI8dX6m0RaFZ/wIiAd.Y7W', 'tpidD1JBGtJurMRyWu0koOa2yt6b0QTVAsdmaRDm4ot3P57azwin7XRXkXyZ', '2017-07-25 00:42:33', '2017-07-25 00:42:33'),
(4, 'Nur MohammadNahid', 'nahid@gmail.com', '$2y$10$cgptavArs5Ui6TM7iugJEeHSyVkXx/FGfhdN4/zZdTiBIzcscp38W', 'RhtKt8omXTLfXIY8jfOB1u5rGrFJfyDpkdFJKd8YO31pd7hdnZFdphTGybWP', '2017-07-25 00:45:04', '2017-07-25 00:45:04'),
(5, 'Dipak Dev Nath', 'Dipak@gmail.com', '$2y$10$B21Fu4OPLvTwYge5J6HY8OcCqG7KmELnp/Ken4vLc64uW7dm.hLie', 'afQjACD2nku1I9aTc6fEFWjmVt8ntnaQvoRlrd1r4BjTJrzO6IO3EPJofEgv', '2017-07-25 00:45:44', '2017-07-25 00:45:44'),
(6, 'Masud Rahman', 'masud@gmail.com', '$2y$10$ZgD2Wbjuj6gvNTDpObcfJ.mUBybnxH78HqSApeLi9Mc/n384lcNTS', '0sv8e1qVjfXvCZXXDZWX2yrC5hzburJ209s75qGQcr1lhPSm5PLpZZpuJyNg', '2017-07-25 00:46:23', '2017-07-25 00:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_photo`
--

CREATE TABLE `user_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_photo`
--
ALTER TABLE `user_photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_photo`
--
ALTER TABLE `user_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
