-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 06:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treatment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$2VSI3/6E4sinXYWYS1DDs.pjiX2nVBMzVNp3i6rom.r6I4QFBy4ma', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'clinic1', '2019-08-26 18:17:32', '2017-07-30 11:19:48'),
(2, 'clinic2', '2019-11-27 09:06:23', '2019-08-26 18:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `name`, `mobile`, `clinic_id`, `created_at`, `updated_at`, `id_number`, `email`, `password`, `remember_token`) VALUES
(1, 2, 'Abdulsalam ALROAS', '+905367711855', 1, '2020-04-06 13:27:57', '2020-04-06 13:27:57', '1234567890', 'doctor@doctor.com', '$2y$10$2VSI3/6E4sinXYWYS1DDs.pjiX2nVBMzVNp3i6rom.r6I4QFBy4ma', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `thread_id`, `user_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'you have a problem in your mind', '2020-04-06 14:02:07', '2020-04-06 14:02:07', NULL),
(2, 1, 1, 'ok thanks', '2020-04-06 14:07:35', '2020-04-06 14:07:35', NULL),
(3, 1, 2, 'nmnnnmnnnm', '2020-04-06 14:11:45', '2020-04-06 14:11:45', NULL),
(4, 2, 2, 'mn', '2020-04-06 14:12:37', '2020-04-06 14:12:37', NULL),
(5, 2, 2, 'nmn', '2020-04-06 14:13:06', '2020-04-06 14:13:06', NULL),
(6, 2, 1, 'ok', '2020-04-06 14:14:45', '2020-04-06 14:14:45', NULL),
(7, 2, 2, 'm', '2020-04-06 14:26:54', '2020-04-06 14:26:54', NULL),
(8, 3, 1, 'm', '2020-04-06 14:30:48', '2020-04-06 14:30:48', NULL),
(9, 4, 1, 'test 1', '2020-04-06 14:33:30', '2020-04-06 14:33:30', NULL),
(10, 4, 2, 'test 2', '2020-04-06 14:34:08', '2020-04-06 14:34:08', NULL),
(11, 2, 1, 'sds', '2020-04-07 06:01:51', '2020-04-07 06:01:51', NULL),
(12, 2, 1, 'hhh', '2020-04-07 06:09:43', '2020-04-07 06:09:43', NULL),
(13, 4, 1, 'asdasd', '2020-04-07 06:14:07', '2020-04-07 06:14:07', NULL),
(14, 2, 1, 'السلام عليكم', '2020-04-07 06:15:00', '2020-04-07 06:15:00', NULL),
(15, 2, 1, 'Subject: RE: Selling .edu email accounts', '2020-04-07 06:15:39', '2020-04-07 06:15:39', NULL),
(16, 2, 1, 'Subject: RE: Selling .edu email accounts', '2020-04-07 06:15:41', '2020-04-07 06:15:41', NULL),
(17, 2, 1, 'Hello', '2020-04-07 06:30:06', '2020-04-07 06:30:06', NULL),
(18, 4, 1, 'ok', '2020-04-07 06:30:18', '2020-04-07 06:30:18', NULL),
(19, 4, 1, 'asd', '2020-04-07 06:30:20', '2020-04-07 06:30:20', NULL),
(20, 4, 1, 'sda', '2020-04-07 06:30:21', '2020-04-07 06:30:21', NULL),
(21, 4, 1, 'sad', '2020-04-07 06:30:22', '2020-04-07 06:30:22', NULL),
(22, 4, 1, 'asd', '2020-04-07 06:30:24', '2020-04-07 06:30:24', NULL),
(23, 4, 1, 'asd', '2020-04-07 06:30:25', '2020-04-07 06:30:25', NULL),
(24, 4, 1, 'sad', '2020-04-07 06:30:26', '2020-04-07 06:30:26', NULL),
(25, 4, 1, 'sa', '2020-04-07 06:30:27', '2020-04-07 06:30:27', NULL),
(26, 2, 2, 'success', '2020-04-07 09:05:21', '2020-04-07 09:05:21', NULL),
(27, 5, 2, 'm', '2020-04-07 09:29:03', '2020-04-07 09:29:03', NULL),
(28, 5, 2, 'mm', '2020-04-07 09:29:17', '2020-04-07 09:29:17', NULL),
(29, 6, 1, 'nnnnn', '2020-04-07 16:49:19', '2020-04-07 16:49:19', NULL),
(30, 6, 1, 'jjjk', '2020-04-07 16:56:03', '2020-04-07 16:56:03', NULL),
(31, 7, 2, 'sdxsd', '2020-04-07 17:00:14', '2020-04-07 17:00:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_participants`
--

CREATE TABLE `messenger_participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messenger_participants`
--

INSERT INTO `messenger_participants` (`id`, `thread_id`, `user_id`, `last_read`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2020-04-07 10:29:41', '2020-04-06 14:02:07', '2020-04-07 10:29:41', NULL),
(2, 1, 1, '2020-04-07 10:30:32', '2020-04-06 14:02:07', '2020-04-07 10:30:32', NULL),
(3, 2, 2, '2020-04-07 09:40:37', '2020-04-06 14:12:37', '2020-04-07 09:40:37', NULL),
(4, 2, 1, '2020-04-07 16:56:13', '2020-04-06 14:12:37', '2020-04-07 16:56:13', NULL),
(5, 3, 1, '2020-04-07 16:56:11', '2020-04-06 14:30:48', '2020-04-07 16:56:11', NULL),
(6, 3, 2, '2020-04-07 10:29:39', '2020-04-06 14:30:48', '2020-04-07 10:29:39', NULL),
(7, 4, 1, '2020-04-07 10:30:30', '2020-04-06 14:33:30', '2020-04-07 10:30:30', NULL),
(8, 4, 2, '2020-04-07 10:29:35', '2020-04-06 14:33:30', '2020-04-07 10:29:35', NULL),
(9, 5, 2, '2020-04-07 09:41:03', '2020-04-07 09:29:03', '2020-04-07 09:41:03', NULL),
(10, 6, 1, '2020-04-07 16:56:03', '2020-04-07 16:49:19', '2020-04-07 16:56:03', NULL),
(11, 6, 2, '2020-04-07 16:59:53', '2020-04-07 16:49:19', '2020-04-07 16:59:53', NULL),
(12, 7, 2, '2020-04-07 17:00:15', '2020-04-07 17:00:14', '2020-04-07 17:00:15', NULL),
(13, 7, 1, '2020-04-07 17:00:53', '2020-04-07 17:00:14', '2020-04-07 17:00:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_threads`
--

CREATE TABLE `messenger_threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messenger_threads`
--

INSERT INTO `messenger_threads` (`id`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hello Sire', '2020-04-06 14:02:07', '2020-04-06 14:11:45', NULL),
(2, 'RE: Selling .edu email accounts', '2020-04-06 14:12:37', '2020-04-07 09:05:21', NULL),
(3, 'Supported countries', '2020-04-06 14:30:48', '2020-04-06 14:30:48', NULL),
(4, 'subject', '2020-04-06 14:33:30', '2020-04-07 06:30:28', NULL),
(5, 'Supported countries', '2020-04-07 09:29:03', '2020-04-07 09:29:17', NULL),
(6, 'RE: Selling .edu email accounts', '2020-04-07 16:49:19', '2020-04-07 16:56:03', NULL),
(7, 'RE: Selling .edu email accounts', '2020-04-07 17:00:14', '2020-04-07 17:00:14', NULL);

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
(3, '2014_10_28_175635_create_threads_table', 1),
(4, '2014_10_28_175710_create_messages_table', 1),
(5, '2014_10_28_180224_create_participants_table', 1),
(6, '2014_11_03_154831_add_soft_deletes_to_participants_table', 1),
(7, '2014_12_04_124531_add_softdeletes_to_threads_table', 1),
(8, '2017_03_30_152742_add_soft_deletes_to_messages_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_03_13_190823_create_profiles_table', 1),
(11, '2020_03_13_191505_create_clinics_table', 1),
(12, '2020_03_13_191807_create_doctors_table', 1),
(13, '2020_03_14_060805_create_reservations_table', 1),
(14, '2020_03_14_103514_create_admins_table', 1),
(15, '2020_03_15_140608_add_id_number_to_doctors_table', 1),
(16, '2020_04_07_093211_create_prescriptions_table', 2);

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
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `reservation_id`, `doctor_id`, `user_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 10, 2, 1, 'success', '2020-04-07 07:34:31', '2020-04-07 09:04:36'),
(2, 9, 2, 1, 'name: value \r\nnname: value', '2020-04-07 07:34:31', '2020-04-07 17:00:38'),
(5, 39, 2, 1, '', '2020-04-12 14:58:20', '2020-04-12 14:58:20'),
(6, 40, 2, 1, '', '2020-04-12 14:58:24', '2020-04-12 14:58:24'),
(7, 41, 2, 1, '', '2020-04-12 14:58:29', '2020-04-12 14:58:29'),
(8, 42, 2, 1, '', '2020-04-12 14:58:33', '2020-04-12 14:58:33'),
(9, 43, 2, 1, '', '2020-04-12 14:58:37', '2020-04-12 14:58:37'),
(10, 44, 2, 1, '', '2020-04-12 14:58:41', '2020-04-12 14:58:41'),
(11, 45, 2, 1, '', '2020-04-12 14:58:46', '2020-04-12 14:58:46'),
(12, 46, 2, 1, '', '2020-04-12 14:58:51', '2020-04-12 14:58:51'),
(13, 47, 2, 1, '', '2020-04-12 14:58:57', '2020-04-12 14:58:57'),
(14, 48, 2, 1, '', '2020-04-12 14:59:01', '2020-04-12 14:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `mobile`, `profile_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'user', '9660000000', '2218', '2020-04-06 13:27:22', '2020-04-06 13:27:22'),
(2, 2, 'Abdulsalam ALROAS', '9660000000', '1230', '2020-04-06 14:14:03', '2020-04-06 14:14:03'),
(3, 3, 'user2', '9660000000', '5206', '2020-04-07 10:35:26', '2020-04-07 10:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `clinic_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `clinic_id`, `doctor_id`, `state`, `notes`, `date`, `created_at`, `updated_at`) VALUES
(9, 1, 1, 2, 'new', NULL, '2020-06-27', '2020-04-07 07:18:20', '2020-04-07 07:18:20'),
(10, 1, 2, 2, 'new', NULL, '2020-06-27', '2020-04-07 07:34:31', '2020-04-07 07:34:31'),
(39, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:20', '2020-04-12 14:58:20'),
(40, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:24', '2020-04-12 14:58:24'),
(41, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:29', '2020-04-12 14:58:29'),
(42, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:33', '2020-04-12 14:58:33'),
(43, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:37', '2020-04-12 14:58:37'),
(44, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:41', '2020-04-12 14:58:41'),
(45, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:46', '2020-04-12 14:58:46'),
(46, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:51', '2020-04-12 14:58:51'),
(47, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:58:57', '2020-04-12 14:58:57'),
(48, 1, 1, 2, 'new', NULL, '2020-04-30', '2020-04-12 14:59:01', '2020-04-12 14:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0,
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

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 0, 'user@user.com', NULL, '$2y$10$2VSI3/6E4sinXYWYS1DDs.pjiX2nVBMzVNp3i6rom.r6I4QFBy4ma', NULL, NULL, NULL),
(2, 'Abdulsalam ALROAS', 1, 'doctor@doctor.com', NULL, '$2y$10$2VSI3/6E4sinXYWYS1DDs.pjiX2nVBMzVNp3i6rom.r6I4QFBy4ma', NULL, '2020-04-06 13:27:57', '2020-04-06 13:27:57'),
(3, 'user2', 0, 'user2@user.com', NULL, '$2y$10$l3k22/Q7WYJzqg8/JloPuepC4GjsHfS5hE15VNdu4gU8uYjpJWqsu', NULL, '2020-04-07 10:35:26', '2020-04-07 10:35:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD KEY `doctors_clinic_id_foreign` (`clinic_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messenger_participants`
--
ALTER TABLE `messenger_participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messenger_threads`
--
ALTER TABLE `messenger_threads`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_clinic_id_foreign` (`clinic_id`),
  ADD KEY `reservations_doctor_id_foreign` (`doctor_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `messenger_participants`
--
ALTER TABLE `messenger_participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messenger_threads`
--
ALTER TABLE `messenger_threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_clinic_id_foreign` FOREIGN KEY (`clinic_id`) REFERENCES `clinics` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_clinic_id_foreign` FOREIGN KEY (`clinic_id`) REFERENCES `clinics` (`id`),
  ADD CONSTRAINT `reservations_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
