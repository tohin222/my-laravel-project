-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 08:06 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_new_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'iphone', 'reag ey', 'LG-Q7_Plus-Moroccan_Blue-1-3x.jpg', '2018-10-12 08:40:10', '2018-10-12 08:40:26'),
(5, 'sumsung', 'wrsg w4tyg', 'in-sm-b313e-sm-b313ezkdins-000000001-front-black.jpg', '2018-10-12 08:52:48', '2018-10-12 08:53:03'),
(6, 'others', 'ragte', 'fruity-tingle-ice-cream-cones-121035-1.jpg', '2018-10-12 08:54:30', '2018-10-12 08:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(22, 'electronics', 'earyhg etsyh rtyuh', '4962e7d7-7d00-4aea-942e-d357b4c4b3fd_1.c113f93aab7a9620cf5890bddc628e96.jpeg', NULL, '2018-10-12 06:32:32', '2018-10-12 06:32:32'),
(23, 'iphone', 'ftyujr rtsuhsruty', 'Windows10_ViewAll__hero_1920.jpg', 22, '2018-10-12 06:37:18', '2018-10-12 06:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(2, 'narayganj', 12, '2018-10-15 05:02:31', '2018-10-15 05:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(12, 'dhaka', 1, '2018-10-14 10:48:53', '2018-10-14 10:48:53'),
(14, 'khulna', 7, '2018-10-14 10:49:58', '2018-10-14 10:49:58'),
(15, 'barisal', 4, '2018-10-14 10:50:15', '2018-10-14 10:50:15');

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
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_10_05_141152_create_products_table', 1),
(13, '2018_10_05_171919_create_categories_table', 1),
(14, '2018_10_05_171941_create_brands_table', 1),
(15, '2018_10_05_171957_create_admins_table', 1),
(16, '2018_10_05_175446_create_product_images_table', 1),
(18, '2014_10_12_000000_create_users_table', 2),
(19, '2018_10_14_135258_create_divisions_table', 3),
(20, '2018_10_14_135616_create_districts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lajokboy81@gmail.com', '$2y$10$CFYnIHhp1ZhC3Rf9rZECb.v5zDkv74iwbEew6YaCWIrk/kqs8RNsy', '2018-10-13 10:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(66, 23, 6, 'apple', 'fjdntud', 'apple', 55, 77, 0, NULL, 1, '2018-10-12 05:14:34', '2018-10-12 05:14:34'),
(67, 23, 6, 'huwai', 'fghn sztyh', 'huwai', 55, 7879, 0, NULL, 1, '2018-10-12 05:15:15', '2018-10-12 05:15:15'),
(68, 23, 6, 'iphone', 'ftju', 'iphone', 45, 45, 0, NULL, 1, '2018-10-12 05:18:22', '2018-10-12 05:18:22'),
(69, 23, 6, 'mango', 'fydj rtsu', 'mango', 567, 575, 0, NULL, 1, '2018-10-12 05:20:29', '2018-10-12 05:20:29'),
(70, 23, 6, 'muri', 'ehy', 'muri', 66, 88, 0, NULL, 1, '2018-10-12 05:25:00', '2018-10-12 05:25:00'),
(71, 23, 6, 'laptop', 'sRGterhy', 'laptop', 1, 66, 0, NULL, 1, '2018-10-12 05:26:32', '2018-10-12 05:26:32'),
(72, 23, 6, 'iphone3', 'iphone3dzsag w4rt', 'iphone3', 34, 4643, 0, NULL, 1, '2018-10-12 09:17:29', '2018-10-12 09:17:29'),
(73, 26, 5, 'bottle', 'wtf 3q45tg', 'bottle', 645, 75, 0, NULL, 1, '2018-10-12 09:50:43', '2018-10-12 09:50:43'),
(74, 24, 3, 'Shirt', 'earhg yt6hy', 'shirt', 425, 436, 0, NULL, 1, '2018-10-12 10:52:08', '2018-10-12 10:52:08'),
(75, 23, 6, 'ball', 'thyry', 'ball', 3, 7, 0, NULL, 1, '2018-10-12 10:54:19', '2018-10-13 09:03:53'),
(76, 22, 6, 'rafiq gang', 'kbigiwf', 'rafiq-gang', 46, 788, 0, NULL, 1, '2018-10-14 01:09:29', '2018-10-14 01:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(37, 66, 'images.jpg', '2018-10-12 05:14:34', '2018-10-12 05:14:34'),
(38, 67, 'in-sm-b313e-sm-b313ezkdins-000000001-front-black.jpg', '2018-10-12 05:15:15', '2018-10-12 05:15:15'),
(39, 67, 'LG-Q7_Plus-Moroccan_Blue-1-3x.jpg', '2018-10-12 05:15:15', '2018-10-12 05:15:15'),
(40, 67, 'c05962448.png', '2018-10-12 05:15:15', '2018-10-12 05:15:15'),
(41, 68, 'LG-Q7_Plus-Moroccan_Blue-1-3x.jpg', '2018-10-12 05:18:22', '2018-10-12 05:18:22'),
(42, 68, '4962e7d7-7d00-4aea-942e-d357b4c4b3fd_1.c113f93aab7a9620cf5890bddc628e96.jpeg', '2018-10-12 05:18:22', '2018-10-12 05:18:22'),
(43, 69, 'in-sm-b313e-sm-b313ezkdins-000000001-front-black.jpg', '2018-10-12 05:20:29', '2018-10-12 05:20:29'),
(44, 70, 'LG-Q7_Plus-Moroccan_Blue-1-3x.jpg', '2018-10-12 05:25:01', '2018-10-12 05:25:01'),
(45, 71, 'c05962448.png', '2018-10-12 05:26:33', '2018-10-12 05:26:33'),
(46, 71, 'download.jpg', '2018-10-12 05:26:33', '2018-10-12 05:26:33'),
(47, 71, 'images.jpg', '2018-10-12 05:26:33', '2018-10-12 05:26:33'),
(48, 72, 'in-sm-b313e-sm-b313ezkdins-000000001-front-black.jpg', '2018-10-12 09:17:29', '2018-10-12 09:17:29'),
(49, 73, 'fruity-tingle-ice-cream-cones-121035-1.jpg', '2018-10-12 09:50:43', '2018-10-12 09:50:43'),
(50, 74, 'catalog_detail_image_large.jpg', '2018-10-12 10:52:09', '2018-10-12 10:52:09'),
(51, 75, '220px-Basketball.png', '2018-10-12 10:54:19', '2018-10-12 10:54:19'),
(52, 76, 'RedmiNote5.jpg', '2018-10-14 01:09:30', '2018-10-14 01:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL COMMENT 'division table id',
  `district_id` int(10) UNSIGNED NOT NULL COMMENT 'district table id',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0==inactive---1==active---2==ban',
  `ip_adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `phone_num`, `email`, `password`, `street_adress`, `division_id`, `district_id`, `status`, `ip_adress`, `avatar`, `shipping_adress`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'galimjhh', 'galimjhh', 'galimjhhgalimjhh', '46464646216516', 'galim@gmail.com', '$2y$10$wZbHXh8r55VFs/fbGAxgJuClhhYE7KTOHZhmIsk.KD06fJHftDjNG', 'kokqwf', 15, 2, 0, '127.0.0.1', NULL, NULL, NULL, 'G3nk6RYC9smP2p3Y6gLocPJRs382fftWZ5uwW0tfU9DtnauxDzYBCKI3WIou', '2018-10-15 08:02:53', '2018-10-15 08:02:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_phone_num_unique` (`phone_num`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
