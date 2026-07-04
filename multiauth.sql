-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 03:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '01961363543', 'sohidulislam@gmail.com', NULL, '$2y$10$BdmZPWWiRmDaiIoqpB.FQuR2uh6b6ZtMIcywmF43upYdO6OdBm7Ga', NULL, '2019-10-10 01:29:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(1, 'Walton', 'public/media/brand/280721_13_10_22.png', NULL, NULL),
(2, 'Arrong', 'public/media/brand/280721_18_39_00.jpg', NULL, NULL),
(3, 'Indian Silk', 'public/media/brand/290721_13_30_58.jpg', NULL, NULL),
(4, 'Levi’s', 'public/media/brand/290721_14_09_18.png', NULL, NULL),
(5, 'Vivo', 'public/media/brand/290721_14_55_26.png', NULL, NULL),
(6, 'Lenovo', 'public/media/brand/010821_16_23_42.jpg', NULL, NULL),
(7, 'Dove', 'public/media/brand/010821_17_16_16.jpg', NULL, NULL),
(8, 'Lambs & Lvy', 'public/media/brand/010821_17_49_28.jpg', NULL, NULL),
(9, 'Seven Minerals', 'public/media/brand/010821_17_34_37.jpg', NULL, NULL),
(10, 'Hatil', 'public/media/brand/020821_10_04_34.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Women\'s Fashion', '2021-07-28 07:16:37', '2021-07-28 07:16:37'),
(2, 'Electronics', '2021-07-28 10:45:14', '2021-07-28 10:45:14'),
(3, 'Man\'s Fashion', '2021-07-29 07:19:10', '2021-07-29 07:19:10'),
(4, 'Child\'s', '2021-07-29 07:19:52', '2021-07-29 07:19:52'),
(5, 'Watch', '2021-07-29 07:20:05', '2021-07-29 07:20:05'),
(6, 'Furniture', '2021-07-29 07:20:22', '2021-07-29 07:20:22'),
(7, 'Beauty', '2021-07-29 07:20:48', '2021-07-29 07:20:48'),
(8, 'Sports & Outdoor', '2021-07-29 07:21:31', '2021-07-29 07:21:31'),
(9, 'Household', '2021-07-29 07:22:33', '2021-07-29 07:22:33'),
(10, 'Gifts & Crafts', '2021-07-29 07:35:23', '2021-07-29 07:35:23'),
(11, 'Wedding', '2021-07-29 07:36:06', '2021-07-29 07:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'ecommmerce20', '20', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2021_07_28_081634_create_categories_table', 2),
(6, '2021_07_28_082257_create_brands_table', 2),
(7, '2021_07_28_082342_create_subcategories_table', 2),
(8, '2021_07_28_133255_create_coupons_table', 3),
(9, '2021_07_28_134639_create_coupons_table', 4),
(10, '2021_07_28_144936_create_newslaters_table', 5),
(11, '2021_07_28_160843_create_products_table', 6),
(12, '2021_07_28_163333_create_products_table', 7),
(13, '2021_08_10_181940_create_wishlists_table', 8),
(14, '2021_08_15_105706_create_settings_table', 9),
(15, '2021_08_20_111626_create_orders_table', 10),
(16, '2021_08_20_120317_create_shippings_table', 11),
(17, '2021_08_23_093104_create_orders_table', 11),
(18, '2021_08_23_094643_create_order_details_table', 12),
(19, '2016_06_01_000001_create_oauth_auth_codes_table', 13),
(20, '2016_06_01_000002_create_oauth_access_tokens_table', 13),
(21, '2016_06_01_000003_create_oauth_refresh_tokens_table', 13),
(22, '2016_06_01_000004_create_oauth_clients_table', 13),
(23, '2016_06_01_000005_create_oauth_personal_access_clients_table', 13),
(24, '2022_01_22_141712_create_shipping_table', 14),
(25, '2022_01_22_142141_create_order_details_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'anamikagain8@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'TrtaAidcSZT6YzsIljedTUFkNoTebuerNB4Od3lO', NULL, 'http://localhost', 1, 0, 0, '2021-08-23 07:52:34', '2021-08-23 07:52:34'),
(2, NULL, 'Laravel Password Grant Client', 'K1vEzJmS58o7LXAmH5IXgm1IYZRY6FNveSxFCs49', 'users', 'http://localhost', 0, 1, 0, '2021-08-23 07:52:34', '2021-08-23 07:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-08-23 07:52:34', '2021-08-23 07:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blnc_transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_type`, `payment_id`, `paying_amount`, `blnc_transection`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `month`, `date`, `year`, `created_at`, `updated_at`) VALUES
(1, '7', '', 'card_1KKkCmFaH4bcSD9MHKTrKcAn', '274.99', 'txn_3KKkCmFaH4bcSD9M1l8qnVSG', '61ec0ef53b64f', '254.99', '20', '0', '274.99', '0', 'January', '22-01-22', '2022', NULL, NULL),
(2, '7', '', 'card_1KKkG5FaH4bcSD9M50F15Qbh', '274.99', 'txn_3KKkG5FaH4bcSD9M07cYghXd', '61ec0fc288ec5', '254.99', '20', '0', '274.99', '0', 'January', '22-01-22', '2022', NULL, NULL),
(3, '7', '', 'card_1KKkQWFaH4bcSD9MgNNSY1jt', '274.99', 'txn_3KKkQWFaH4bcSD9M023FPV9e', '61ec1249783d8', '254.99', '20', '0', '274.99', '0', 'January', '22-01-22', '2022', NULL, NULL),
(4, '7', '', 'card_1KKkTkFaH4bcSD9MTBipQYTU', '274.99', 'txn_3KKkTkFaH4bcSD9M0XN2YwcY', '61ec131164a0b', '254.99', '20', '0', '274.99', '0', 'January', '22-01-22', '2022', NULL, NULL),
(5, '7', 'stripe', 'card_1KKlh0FaH4bcSD9M3Xlbdu3l', '274.99', 'txn_3KKlh0FaH4bcSD9M13P0pYDa', '61ec254ad2fc1', '254.99', '20', '0', '274.99', '0', 'January', '22-01-22', '2022', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singleprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `singleprice`, `totalprice`, `created_at`, `updated_at`) VALUES
(4, '24', 'Lenovo Flex 5 14\" 2-in-1 Laptop', 'black', 'Big', '1', '254.99', '254.99', NULL, NULL),
(5, '24', 'Lenovo Flex 5 14\" 2-in-1 Laptop', 'black', 'Big', '1', '254.99', '254.99', NULL, NULL);

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
('anamikagain8@gmail.com', '$2y$10$Opoxj4mgaobq.cHOvRmdHejaVlUANvWvcddmrtJfg8D/sLXIZUqaK', '2022-01-22 06:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` int(11) DEFAULT NULL,
  `hot_deal` int(11) DEFAULT NULL,
  `best_rated` int(11) DEFAULT NULL,
  `mid_slider` int(11) DEFAULT NULL,
  `hot_new` int(11) DEFAULT NULL,
  `buyone_getone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trend` int(11) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `buyone_getone`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '1', 'Walton WD32R (813mm) LED TV', '5656', '100', '<p>\r\n                   \r\n                        </p><div class=\"wpsm-one-half tabletblockdisplay\"><span class=\"onsale\"><span></span></span><div class=\"woocommerce-product-details__short-description\"><p>–&nbsp;Screen size: 813mm<br>\r\n– Aspect ratio:&nbsp;16:9<br>\r\n– Resolution:&nbsp;1366 x 768<br>\r\n– Viewing angle:&nbsp;H 178<sup>0</sup>&nbsp;/ V 178<sup>0</sup></p>\r\n</div></div><p><br></p>', 'Black', 'Big', '55000', NULL, NULL, 1, 1, 1, 1, 1, '', 1, 'public/media/product/1706551658498544.jpg', 'public/media/product/1706551658523155.jpg', 'public/media/product/1706551658561413.jpg', 1, NULL, NULL),
(2, '1', '3', '2', 'Olive Green Jacquard Cotton Top', '657678', '80', 'Olive green and black jacquard textured cotton top with loop button opening.', 'Green', 'Big', '1200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/media/product/1706552894077887.PNG', 'public/media/product/1706552894161412.PNG', 'public/media/product/1706552894242639.PNG', 1, NULL, NULL),
(3, '1', '3', '3', 'Yashika Women\'s Art Silk Saree With...', '769823489', '100', '<p>\r\n                   </p><ul class=\"a-unordered-list a-vertical a-spacing-mini\"><li><span class=\"a-list-item\">\r\nCare Instructions: Hand Wash\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nColor Name: Blue\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nFabric: Art Silk\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nThe length of the Saree is 5.5 mtrs and Blouse is 0.80 mtrs\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nWash Care: Hand wash &amp; dry wash but requested not to use hard brush on the fabric\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nProduct color may slightly vary due to photographic lighting sources on \r\nyour monitor settings or device setting and lighting used in mode\r\n\r\n</span></li></ul><p><br></p>', 'Blue', 'Free Size', '1768', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'public/media/product/1706628078508798.jpg', 'public/media/product/1706628078889447.png', 'public/media/product/1706628078947456.png', 1, NULL, NULL),
(4, '1', '3', '3', 'BHAKARWADi Women\'s Khadi silk Saree with Blouse', '3423535', '24', '<ul class=\"a-unordered-list a-vertical a-spacing-mini\"><li><span class=\"a-list-item\">\r\nCare Instructions: Machine Wash\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nColor :- Beige Sarees\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nFabric :- Khadi Silk Sarees\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nFloral Sarees\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nWith Blouse Piece\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nSaree length: 5.5 mtr, blouse length: 0.80 mtr\r\n\r\n</span></li></ul>', 'Beige', 'Free size', '1900', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1706628309425153.jpg', 'public/media/product/1706628309697404.jpg', 'public/media/product/1706628309862005.png', 1, NULL, NULL),
(5, '1', '10', '4', 'Synthetic a-line Dress', '34664', '44', '<p>\r\n                   </p><ul class=\"a-unordered-list a-vertical a-spacing-mini\"><li><span class=\"a-list-item\">\r\nCare Instructions: Hand Wash Only\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nFit Type: Regular\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nColor Name: Blue\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nMaterial: Synthetic\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nHand wash\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nA-Line\r\n\r\n</span></li><li><span class=\"a-list-item\">\r\nHalf Sleeve\r\n\r\n</span></li></ul><p><br></p>', 'Blue', 'XL ,L ,M', '1000', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 1, 'public/media/product/1706629231211271.jpg', 'public/media/product/1706629231443719.jpg', 'public/media/product/1706629231591920.jpg', 1, NULL, NULL),
(6, '2', '16', '5', 'Vivo-V17', '6446', '70', '<th>display</th><td>6.44 inches</td><tr><th>front camera</th><td>32 MP</td></tr><tr><th>battery</th><td>4500 mAh</td></tr><tr><th>processor</th><td>Qualcomm Snapdragon 675</td></tr><tr><th>ram</th><td>8 GB</td></tr><th>rear camera</th><td>48 MP + 8 MP + 2 MP + 2 MP</td>', 'Red,blue,White', 'Big', '5000', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'public/media/product/1706629789328204.jpg', 'public/media/product/1706629789517469.jpg', 'public/media/product/1706629789539030.jpg', 1, NULL, NULL),
(7, '2', '15', '1', 'Passion BX7 Series', '6556', '45', '<td class=\"description-heading\">Display</td>\r\n<td>35.56cm (14.0\") HD (1366X768) Matte LED Backlit Display with 45% NTSC</td>\r\n\r\n<tr>\r\n<td class=\"description-heading\">Generation </td>\r\n<td>7<sup>th</sup> Generation Processor</td>\r\n</tr>\r\n<tr>\r\n<td class=\"description-heading\">CPU</td>\r\n<td>Intel® Core™ i3-7020U 2.30GHz</td>\r\n</tr>\r\n<tr>\r\n<td class=\"description-heading\">Cache Memory</td>\r\n<td>3 MB Intel® Smart Cache</td>\r\n</tr>\r\n<tr>\r\n<td class=\"description-heading\">RAM</td>\r\n<td>4GB DDR4 2133MHz RAM</td>\r\n</tr>\r\n<tr>\r\n<td class=\"description-heading\" rowspan=\"2\">Storage</td>\r\n<td>512GB SATAIII M.2 2280 SSD Or,</td>\r\n</tr>\r\n<tr>\r\n<td>1TB HDD, 5400rpm, 7mm</td>\r\n</tr>\r\n\r\n<td class=\"description-heading\">Bluetooth</td>\r\n<td>Wi-Fi 5.0 (802.11ac) + BT 4.2</td>', 'Black', 'Big', '10000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1706630963432704.png', 'public/media/product/1706630963646362.png', 'public/media/product/1706630963685064.png', 1, NULL, NULL),
(8, '2', '15', '1', 'PASSION BX5800', '4545', '44', '<span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:verdana,geneva,sans-serif\">- 35.56cm (14.0\") HD Matte LED backlit display<br>\r\n- Intel® Core™ i5-8250U 1.60GHz Up to 3.40 GHz<br>\r\n- 8<sup>th</sup> Generation processor<br>\r\n- 1TB HDD, 5400rpm, 7mm<br>\r\n- 8GB DDR4 2400MHz RAM<br>\r\n- 802.11ac WLAN + BT 4.2<br>\r\n- Color: Black</span></span></span>', 'white', 'Big', '20000', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 1, 'public/media/product/1706631152265849.png', 'public/media/product/1706631152422247.png', 'public/media/product/1706631152465008.png', 1, NULL, NULL),
(9, '2', '15', '6', 'Lenovo Flex 5 14\" 2-in-1 Laptop', '54788', '70', '<h1 id=\"title\" class=\"a-size-large a-spacing-none\" style=\"box-sizing: border-box; padding: 0px; margin-right: 0px; margin-left: 0px; text-rendering: optimizelegibility; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 0px !important; font-size: 24px !important; line-height: 32px !important;\"><span id=\"productTitle\" class=\"a-size-large product-title-word-break\" style=\"box-sizing: border-box; text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;\">Lenovo Flex 5 14\" 2-in-1 Laptop, 14.0\" FHD (1920 x 1080) Touch Display, AMD Ryzen 5 4500U Processor, 16GB DDR4, 256GB SSD, AMD Radeon Graphics, Digital Pen Included, Win 10, 81X20005US, Graphite Grey</span></h1>', 'Black', 'Big', '$595.38', NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 'public/media/product/1706910101279649.jpg', 'public/media/product/1706910101660689.jpg', 'public/media/product/1706910101850884.jpg', 1, NULL, NULL),
(10, '1', '24', '7', '34 Oz Hand Wash', '6577', '60', '<table class=\"a-normal a-spacing-micro\" style=\"box-sizing: border-box; width: 472.047px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 4px !important;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 3px 3px 0px; float: none !important; margin-right: 0px; width: 123.578px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Item Form</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 0px 3px 3px; float: none !important; margin-right: 0px; width: 348.469px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Wash</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 123.578px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Use for</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 348.469px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Whole Body</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 123.578px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 348.469px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Dove</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 123.578px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Special Ingredients</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 348.469px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\"><span class=\"a-truncate\" data-a-word-break=\"normal\" data-a-max-rows=\"3\" data-a-overflow-marker=\"&amp;hellip;\" data-a-recalculate=\"false\" data-a-updated=\"true\" style=\"box-sizing: border-box; display: inline-block; position: relative; width: 345.469px; overflow: hidden; word-break: normal; max-height: 3.9em; line-height: 1.3em !important;\"><span class=\"a-truncate-full a-offscreen\" style=\"box-sizing: border-box; display: inline-block; width: 345.469px; opacity: 0; position: absolute !important; left: 0px !important; bottom: -1px !important; z-index: -1 !important;\">This blend of moisturizing ingredients is proven to work with your skin to nourish it, so it can maintain and create new moisture. For best results, squeeze the moisturizing body wash into your hand or onto a shower pouf and work it into a rich lather</span><span class=\"a-truncate-cut\" aria-hidden=\"true\" style=\"box-sizing: border-box; display: inline-block; width: 345.469px; height: 3.9em;\">This blend of moisturizing ingredients is proven to work with your skin to nourish it, so it can maintain and create new moisture.</span></span></span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 0px 0px; float: none !important; margin-right: 0px; width: 123.578px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Scent</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 0px 3px; float: none !important; margin-right: 0px; width: 348.469px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Deep Moisture</span></td></tr></tbody></table>', 'White', 'Big', '$8.99', NULL, NULL, NULL, NULL, 1, NULL, NULL, '1', 1, 'public/media/product/1706912441092862.jpg', 'public/media/product/1706912441219441.jpg', 'public/media/product/1706912441341022.jpg', 1, NULL, NULL),
(11, '4', '23', '8', 'Bedtime Originals Twinkle Toes Pink Elephant Plush, Hazel', '54788', '70', '<table class=\"a-normal a-spacing-micro\" style=\"box-sizing: border-box; width: 617.688px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 4px !important;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Bedtime Originals</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Product Dimensions</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">9 x 7 x 9 inches; 0.32 Ounces</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Age Range (Description)</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Kid</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Color</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Hazel</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 0px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Material</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 0px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Polyester</span></td></tr></tbody></table>', 'Hazel', 'Big', '$9.99', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 'public/media/product/1706912992379296.jpg', 'public/media/product/1706912992580925.jpg', 'public/media/product/1706912992759334.jpg', 1, NULL, NULL),
(12, '1', '24', '9', 'Organic Aloe Vera Spray for Body & Hair', '76897', '90', '<table class=\"a-normal a-spacing-micro\" style=\"box-sizing: border-box; width: 617.688px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 4px !important;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Special Ingredients</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Aloe Vera</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Item Form</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Spray</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Seven Minerals</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Skin Type</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Normal</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 0px 0px; float: none !important; margin-right: 0px; width: 161.703px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Age Range&nbsp;</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 0px 3px; float: none !important; margin-right: 0px; width: 455.984px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Adult</span></td></tr></tbody></table>', 'normal', 'Big', '12', NULL, NULL, NULL, 1, 1, NULL, 1, NULL, 1, 'public/media/product/1706913565280766.jpg', 'public/media/product/1706913565341917.jpg', 'public/media/product/1706913565444723.jpg', 1, NULL, NULL),
(13, '2', '15', '6', 'Lenovo Chromebook C330 2-in-1 Convertible Laptop', '3443', '60', '<table class=\"a-normal a-spacing-micro\" style=\"box-sizing: border-box; width: 402.703px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 4px !important;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Series</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">IdeaPad C330</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Lenovo</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Specific Uses For Product</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Personal</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Display Size</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">11.6 inches LED</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 0px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><p><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Operating System</span></p><p><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\"><br></span></p></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 0px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><p><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Chrome OS</span></p><p><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\"><br></span></p></td></tr></tbody></table>', 'White', 'Big', '254.99', NULL, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 'public/media/product/1706964053004528.jpg', 'public/media/product/1706964053438610.jpg', 'public/media/product/1706964053606239.jpg', 1, NULL, NULL),
(14, '1', '12', '3', 'Beautiful Dark Green Wedding Salwar Kameez', '178855', '40', '<img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Buy Beautiful Dark Green Wedding Salwar Kameez.</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Salwar Kameez is Designed With Heavy Embroidery Thread, Zari &amp; Coding and Dupatta with Lace Border Work.</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Top Fabric: Georgette</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Bottom Fabric: Santoon</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Dupatta Fabric: Chiffon</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Color: Dark Green .</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Bottom Color: Dark Green</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Dupatta Color: Dark Green</span>', 'Dark Green', 'Normal', '45.82', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 'public/media/product/1706964751431041.jpeg', 'public/media/product/1706964751495136.jpeg', 'public/media/product/1706964751554550.jpeg', 1, NULL, NULL),
(15, '1', '12', '3', 'Salwar Kameez Dress For Girl', '68990', '80', '<img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Buy Beautiful Dark Green Wedding Salwar Kameez.</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Salwar Kameez is Designed With Heavy Embroidery Thread, Zari &amp; Coding and Dupatta with Lace Border Work.</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Top Fabric: Georgette</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Bottom Fabric: Santoon</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Dupatta Fabric: Chiffon</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Color: Dark Green .</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Bottom Color: Dark Green</span><br style=\"box-sizing: border-box; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><img src=\"https://www.a1designerwear.com/Themes/DefaultClean/Content/images/arrow.png\" alt=\">\" style=\"box-sizing: border-box; border: 0px; color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, sans-serif; font-size: 13px;\">&nbsp;Dupatta Color: Dark Green</span>', 'Black', 'Normal', '57.99', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, 'public/media/product/1706964951980299.jpg', 'public/media/product/1706964952013462.jpg', 'public/media/product/1706964952042004.jpg', 1, NULL, NULL),
(16, '2', '25', '1', 'Walton NBR-1201 12-Piece High-Speed Blender/Mixer System, Gray (600 Watts)', '76897', '70', '<table class=\"a-normal a-spacing-micro\" style=\"box-sizing: border-box; width: 402.703px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 4px !important;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Color</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Gray</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Material</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Polycarbonate</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\">Walton</td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Voltage</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; float: none !important; margin-right: 0px; width: 297.281px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">230 Volts</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 0px 0px; float: none !important; margin-right: 0px; width: 105.422px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Product Dimensions</span></td></tr></tbody></table>', 'Gray', 'Big', '69.87', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 'public/media/product/1706965444684396.jpg', 'public/media/product/1706965444829573.jpg', 'public/media/product/1706965445020985.jpg', 1, NULL, NULL),
(17, '3', '26', '2', 'Ivory Printed Endi Silk Panjabi', '8789', '60', '<table class=\"data table additional-attributes\" id=\"product-attribute-specs-table\" style=\"margin: 0px 0px 2rem; padding: 0px; box-sizing: border-box; width: 413px; border-collapse: collapse; border: none; font-family: futura-pt, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);\"><tbody style=\"margin: 0px; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51);\"><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Colour</th><td class=\"col data\" data-th=\"Colour\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Ecru</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Fabric</th><td class=\"col data\" data-th=\"Fabric\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Endi Silk</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Value Addition</th><td class=\"col data\" data-th=\"Value Addition\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Screen Print</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Collar/Neck</th><td class=\"col data\" data-th=\"Collar/Neck\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Band Collar</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Cut /Fit</th><td class=\"col data\" data-th=\"Cut /Fit\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Regular Fit</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Sleeve</th><td class=\"col data\" data-th=\"Sleeve\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Long Sleeve</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Pocket</th><td class=\"col data\" data-th=\"Pocket\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Side Pocket</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Length</th><td class=\"col data\" data-th=\"Length\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Long</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Care</th><td class=\"col data\" data-th=\"Care\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Hand Wash With Mild Detergent In Cold Water</td></tr></tbody></table>', 'Ecru', '40 ,38', '12', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, 'public/media/product/1706966191542099.jpg', 'public/media/product/1706966191753981.jpg', 'public/media/product/1706966191905169.jpg', 1, NULL, NULL),
(18, '9', '27', '2', 'Ivory Nakshi Kantha Embroidered Cotton Bed Cover', '7676', '32', '<table class=\"data table additional-attributes\" id=\"product-attribute-specs-table\" style=\"margin: 0px 0px 2rem; padding: 0px; box-sizing: border-box; width: 413px; border-collapse: collapse; border: none; font-family: futura-pt, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);\"><tbody style=\"margin: 0px; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51);\"><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Colour</th><td class=\"col data\" data-th=\"Colour\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Ivory &amp; Black</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Fabric</th><td class=\"col data\" data-th=\"Fabric\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Cotton</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Value Addition</th><td class=\"col data\" data-th=\"Value Addition\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Nakshi Kantha Embroidery</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Pillow Cover</th><td class=\"col data\" data-th=\"Pillow Cover\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">With No Pillow Cover</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Length</th><td class=\"col data\" data-th=\"Length\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">90</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Width</th><td class=\"col data\" data-th=\"Width\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">60</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Measurement Unit</th><td class=\"col data\" data-th=\"Measurement Unit\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Inch</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Care</th><td class=\"col data\" data-th=\"Care\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Hand Wash With Mild Detergent In Cold Water</td></tr></tbody></table>', 'Ivory,Black', 'Big', '12', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, 'public/media/product/1706966596849358.jpg', 'public/media/product/1706966597269462.jpg', 'public/media/product/1706966597692992.jpg', 1, NULL, NULL),
(19, '6', '28', '10', 'Acadia-197 and Broadway-197 (6 Chair + 1 Table + 2 NTM Glass) Dining Set', '6565', '69', '<ul style=\"box-sizing: border-box; margin-bottom: 10px; color: rgb(59, 58, 60); font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(249, 249, 249);\"><li style=\"box-sizing: border-box;\">Made from Kiln-dried imported Beech wood and veneered engineered wood.</li><li style=\"box-sizing: border-box;\">High quality environment friendly Italian Ultra Violet (UV) and Polyurethane (PU) Lacquer in antique finish</li><li style=\"box-sizing: border-box;\">Please refer to images for dimension details</li><li style=\"box-sizing: border-box;\">Imported fabric upholstery with soft and durable cushioning. Fabric can be selected from available options</li><li style=\"box-sizing: border-box;\">Fabric can be dry-cleaned</li><li style=\"box-sizing: border-box;\">Any assembly or installation required will be done by the HATIL team at the time of delivery (one day after delivery for CKD items)</li><li style=\"box-sizing: border-box;\">Imported high quality hardware fittings</li><li style=\"box-sizing: border-box;\">Imported high quality 10&nbsp;mm thick tempered glass</li><li style=\"box-sizing: border-box;\">Indoor use only</li><li style=\"box-sizing: border-box;\">Most of our furniture is made of natural components, which will have natural differences in grain construction and occasional minor blemish</li></ul>', 'wood', '6 Seat', '254.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1706977619394828.jpg', 'public/media/product/1706977620012971.jpg', 'public/media/product/1706977620697205.jpg', 1, NULL, NULL);
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `buyone_getone`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(20, '6', '28', NULL, 'Mack-181 and Kingstown-194 (6 Chair and 1 Table)', '5454', '66', '<ul style=\"box-sizing: border-box; margin-bottom: 10px; color: rgb(59, 58, 60); font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(249, 249, 249); list-style-type: circle;\"><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Made from Kiln-dried imported Beech wood and veneered engineered wood.</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">High quality environment friendly Italian Ultra Violet (UV) and Polyurethane (PU) Lacquer in antique finish</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Please refer to images for dimension details</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Any assembly or installation required will be done by the HATIL team at the time of delivery (one day after delivery for CKD items)</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Imported high quality hardware fittings</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Indoor use only</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Weight 101.00</span></span></span><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">&nbsp;Kgs</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; line-height: 16.4067px;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Most of our furniture is made of natural components, which will have natural differences in grain construction and occasional minor blemish</span></span></span></span></li></ul>', 'Wood', 'Big', '254.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'public/media/product/1706977861839078.PNG', 'public/media/product/1706977861905185.PNG', 'public/media/product/1706977861963833.PNG', 1, NULL, NULL),
(21, '6', '27', '10', 'Ladder Shelf', '6767', '88', '<ul style=\"box-sizing: border-box; margin-bottom: 10px; color: rgb(59, 58, 60); font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(249, 249, 249); list-style-type: circle;\"><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Made from Kiln-dried imported Beech wood and veneered engineered wood.</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">High quality environment friendly Italian Ultra Violet (UV) and Polyurethane (PU) Lacquer in antique finish</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Please refer to images for dimension details</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Any assembly or installation required will be done by the HATIL team at the time of delivery (one day after delivery for CKD items)</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Imported high quality hardware fittings</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Indoor use only</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; background: white;\"><span style=\"box-sizing: border-box; line-height: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Weight 101.00</span></span></span><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">&nbsp;Kgs</span></span></span></span></span></span></li><li style=\"box-sizing: border-box; margin: 0in 0in 0.0001pt;\"><span style=\"box-sizing: border-box; font-size: 11.5pt;\"><span style=\"box-sizing: border-box; line-height: 16.4067px;\"><span style=\"box-sizing: border-box; font-family: Arial, sans-serif;\"><span style=\"box-sizing: border-box; color: black;\">Most of our furniture is made of natural components, which will have natural differences in grain construction and occasional minor blemish</span></span></span></span></li></ul>', 'wood', 'Big', '45.82', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 'public/media/product/1706978026219397.png', 'public/media/product/1706978026388771.png', 'public/media/product/1706978026552775.png', 1, NULL, NULL),
(22, '9', '27', '2', 'Cane Hanging Lamp', '6543', '55', '<div class=\"product attribute description\" style=\"margin: 0px 0px 2rem; padding: 0px; box-sizing: border-box; font-family: futura-pt, sans-serif; font-size: 16px;\"><h3 style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; box-sizing: border-box; font-weight: 600; font-size: 2rem; text-transform: uppercase;\"><br></h3></div><div class=\"additional-attributes-wrapper table-wrapper\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-family: futura-pt, sans-serif; font-size: 16px;\"><table class=\"data table additional-attributes\" id=\"product-attribute-specs-table\" style=\"margin: 0px 0px 2rem; padding: 0px; box-sizing: border-box; width: 413px; border-collapse: collapse; border: none;\"><tbody style=\"margin: 0px; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51);\"><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Colour</th><td class=\"col data\" data-th=\"Colour\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Natural</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Material</th><td class=\"col data\" data-th=\"Material\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Cane, Wrought Iron</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Shape</th><td class=\"col data\" data-th=\"Shape\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Round</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Mounted</th><td class=\"col data\" data-th=\"Mounted\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Roof Mount</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Height</th><td class=\"col data\" data-th=\"Height\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">26.5</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Diameter</th><td class=\"col data\" data-th=\"Diameter\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">9</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box; background: rgb(251, 251, 251);\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Measurement Unit</th><td class=\"col data\" data-th=\"Measurement Unit\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">CM</td></tr><tr style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><th class=\"col label\" scope=\"row\" style=\"margin: 0px; padding: 5.5px 30px 10px 0px; box-sizing: border-box; border: none;\">Care</th><td class=\"col data\" data-th=\"Care\" style=\"margin: 0px; padding: 5.5px 5px 10px; box-sizing: border-box; border: none;\">Clean With Soft Dry Brush And Keep It Dry Place</td></tr></tbody></table></div>', 'Orange', 'Big', '9', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'public/media/product/1706978772997806.jpg', 'public/media/product/1706978773169335.jpg', 'public/media/product/1706978773335380.jpg', 1, NULL, NULL),
(23, '3', '6', '4', 'Blue Check Cotton Slim Fit Short Kurta', '8979', '89', '<span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Price: 630 BDT</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Code: PRKT-455</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Color: Orange, Sky Blue</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Material: Silk Paper&nbsp;</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Size: (13.4X6.1X6.1)\"</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Measurement Unit: Inch</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Place of Origin: Bangladesh&nbsp;</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Care Instructions: Wipe with Soft Dry Brush After Using</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"color: rgb(51, 51, 51); font-family: Rubik, sans-serif; background-color: rgb(245, 245, 245);\">Features: Eco-friendly.</span>', 'Blue', 'Big', '12', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'public/media/product/1706979558619294.jpg', 'public/media/product/1706979558646127.jpg', 'public/media/product/1706979558667714.jpg', 1, NULL, NULL),
(24, '2', '15', '1', 'Lenovo Flex 5 14\" 2-in-1 Laptop', '54788', '70', 'wedyl', 'black', 'Big', '254.99', NULL, NULL, 1, 1, 1, 1, 1, '1', 1, 'public/media/product/1707732524161294.png', 'public/media/product/1707732524208248.png', 'public/media/product/1707732524240676.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `vat`, `shipping_charge`, `shopname`, `email`, `phone`, `address`, `logo`, `created_at`, `updated_at`) VALUES
(1, '10', '20', 'DressMart', 'anamikagain8@gmail.com', '01985036559', 'house #46,road #11,merul badda,Dhaka', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `ship_city`) VALUES
(1, '3', 'user', '01985026588', 'user@gmail.com', 'dhaka', 'dhaka'),
(2, '4', 'user', '01985026588', 'user@gmail.com', 'dhaka', 'dhaka'),
(3, '5', 'user', '01985026588', 'user@gmail.com', 'dhaka', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(2, 2, 'Television', NULL, NULL),
(3, 1, 'Saree', NULL, NULL),
(4, 1, 'shoes', NULL, NULL),
(5, 3, 'shoes', NULL, NULL),
(6, 3, 'shairt', NULL, NULL),
(7, 3, 'pants', NULL, NULL),
(8, 3, 'T-Shirt', NULL, NULL),
(9, 3, 'Belt', NULL, NULL),
(10, 1, 'Kamiz', NULL, NULL),
(11, 1, 'salwar', NULL, NULL),
(12, 1, 'Three Piece', NULL, NULL),
(13, 1, 'Jewelry', NULL, NULL),
(14, 2, 'Refrigerator & Freezer', NULL, NULL),
(15, 2, 'Computer', NULL, NULL),
(16, 2, 'Smart Phone', NULL, NULL),
(17, 2, 'Direct Cool Refrigerator', NULL, NULL),
(18, 4, 'Newborn Girls(0-1.5Y)', NULL, NULL),
(19, 4, 'Newborn Boys(0-1.5Y)', NULL, NULL),
(20, 4, 'Junior girls(2Y-9Y)', NULL, NULL),
(21, 4, 'Junior Boys(2Y-9Y)', NULL, NULL),
(22, 4, 'shoes', NULL, NULL),
(23, 4, 'Toys & Books', NULL, NULL),
(24, 1, 'accessories', NULL, NULL),
(25, 2, 'Home Appliances', NULL, NULL),
(26, 3, 'Panjabi', NULL, NULL),
(27, 9, 'Home Decor', NULL, NULL),
(28, 6, 'Home Decor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohidul Islam', NULL, 'sohidulislam@gmail.com', NULL, '$2y$10$AXmPJQ.tg/8z5VJr6Z9Ar.XJzte2Ytw058vRAes3CxI7CXwAr/CT6', 'XsaoHObqHnCYAwiEC02ZuSSSSvOYIf5KVZPwHUiA9QzNs8yZ2HPEoqxhxca8', '2019-10-04 23:27:57', '2019-10-04 23:27:57'),
(2, 'Jahidul Islam', NULL, 'jahidulislam@gmail.com', NULL, '$2y$10$t58WdGEyeKN5e/80mbWoRev4WSW8ANTJugJW.NfosJx31W0qxbjEq', NULL, '2019-10-05 04:47:42', '2019-10-05 04:47:42'),
(3, 'ana', '43789', 'ana@gmail.com', NULL, '123456', NULL, NULL, NULL),
(4, 'Deb Gain', '018767867546', 'deb539@gmail.com', NULL, '$2y$10$5elX55rrCU06YT5yBb9kU.Ft6FssTtCL4LUM3CKUeVOiO0DmrP87m', NULL, '2021-08-01 09:42:45', '2021-08-01 09:42:45'),
(5, 'anamika', '01876786754', 'anamikagain8@gmail.com', NULL, '$2y$10$f8bsiZIlYW2FwC6lhgPAnOCt.twGlN/Up6PTsOK4/UCyJU5mhKfBW', NULL, '2021-08-11 02:48:23', '2021-08-11 02:48:23'),
(6, 'anamika', '01985026559', 'anugain@blog.com', NULL, '$2y$10$lqbuP3Clnk1lhUbQspUHvudz1WwR2/P0JfcQdr2VUL4kMOVVWrdKa', NULL, '2021-08-12 09:07:50', '2021-08-12 09:07:50'),
(7, 'user', '09827363', 'user@gmail.com', NULL, '$2y$10$RYIvdc9vh6FVaUxHMqoLSeha2qY1u0yl.zFDCtgZC3fk2MamT1FTy', NULL, '2022-01-22 06:20:52', '2022-01-22 06:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 5, 24, NULL, NULL),
(2, 5, 22, NULL, NULL),
(3, 5, 20, NULL, NULL),
(4, 5, 18, NULL, NULL),
(5, 5, 23, NULL, NULL),
(6, 5, 21, NULL, NULL),
(7, 5, 10, NULL, NULL),
(8, 4, 24, NULL, NULL),
(9, 4, 22, NULL, NULL),
(10, 4, 20, NULL, NULL),
(11, 4, 18, NULL, NULL),
(12, 6, 21, NULL, NULL);

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
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
