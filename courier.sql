-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 03:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_type` enum('Agent','Vendor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_type`, `company_name`, `owner_name`, `email`, `phone`, `company_desc`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Agent', 'Spadestack 2', 'Spadestack owner', 'spadestack@gxxxx.com', '0182329324', 'IT', 'Dhaka', '2018-11-19 20:02:46', '2018-11-22 08:28:33'),
(4, 'Agent', 'Emmerich LLC', 'Geoffrey Heller I', 'josephine.walsh@example.com', '743.885.4518 x993', 'Multi-tiered modular policy', '297 Georgianna Parkways Apt. 747\nSouth Bradyton, WY 86767', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(5, 'Agent', 'Homenick, Cruickshank and Howe', 'Marianne Stiedemann', 'gutkowski.spencer@example.com', '586-655-0670 x68233', 'Visionary bottom-line service-desk', '9968 Schuppe Pass\nCaylastad, NJ 70805-4960', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(52, 'Agent', 'Demo Book Publisher', 'book owner', 'booowner@gmail.com', '012931444', 'Publisher', 'NA', '2018-11-22 11:32:06', '2018-11-22 11:32:06'),
(53, 'Agent', 'NANO TEch', 'tech', 'ws@ddd.c', '8748848', 'Dessss', 'dhfkgdk', '2018-12-04 10:10:46', '2018-12-04 10:10:46'),
(54, 'Vendor', 'SkyTech', 'skytech admin', 'ws@ddd.c', '01586364799', 'It solution', 'none', '2018-12-04 10:27:57', '2018-12-04 10:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2018_10_26_235155_create_companies_table', 1),
(15, '2018_10_27_154246_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcel_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` enum('CASH','DUE') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_processed` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `processing_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_profit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `agent_id`, `order_date`, `parcel_desc`, `weight`, `payment_type`, `booking_amount`, `is_processed`, `processing_amount`, `net_profit`, `processing_date`, `created_at`, `updated_at`) VALUES
(1, '222', '1', '2018-11-07', 'abcde abcde abcde abcde abcde', '123', 'DUE', '1123', 'yes', '1000', '123', NULL, '2018-11-22 08:30:20', '2018-12-04 09:42:51'),
(2, '878', '4', '2018-11-28', 'parcel', '687', 'CASH', '7865', 'no', NULL, NULL, NULL, '2018-11-22 08:30:51', '2018-11-22 08:30:51'),
(3, '655', '5', '2018-11-05', 'abcde abcde abcde abcde abcde', '501', 'CASH', '1123', 'yes', '700', '1123', NULL, '2018-11-22 08:31:20', '2018-12-04 09:43:00'),
(4, '908', '52', '2018-11-28', 'parcel ltd', '687', 'DUE', '7865', 'yes', '7000', '865', '2018-12-04', '2018-11-22 11:32:49', '2018-12-03 09:20:03'),
(5, '544', '1', '2018-12-04', 'doc', '1', 'CASH', '700', 'no', NULL, NULL, NULL, '2018-12-03 09:45:11', '2018-12-03 09:45:11'),
(6, '544', '1', '2016-10-01', 'doc', '1', 'DUE', '875', 'yes', '300', '875', NULL, '2018-12-03 09:45:50', '2018-12-04 09:43:08'),
(7, '3431', '52', '2018-12-05', 'books', '1234124', 'CASH', '9990', 'no', NULL, NULL, NULL, '2018-12-04 08:59:50', '2018-12-04 08:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$JOUoJrQbTlJbWYw9UBw56.AUuFHH4So.EPETb.19/0kY0uGo3WaNC', 'xeL1jMKnAvhyFnLOsYYnGT1uK3e8f9CC0Z37OBRwfyn7veC8aoYTNWwWxOxi', '2018-11-19 20:09:22', '2018-11-19 20:09:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
