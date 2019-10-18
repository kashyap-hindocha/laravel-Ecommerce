-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 09:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtronic`
--

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
(3, '2018_12_01_114714_create_orders_table', 1),
(4, '2018_12_01_120120_create_orders_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charges` double(8,2) NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_amount` double(8,2) NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_email`, `name`, `address`, `city`, `state`, `pincode`, `country`, `mobile`, `shipping_charges`, `coupon_code`, `coupon_amount`, `order_status`, `payment_method`, `grand_total`, `created_at`, `updated_at`) VALUES
(19, '7', 'monali@gmail.com', 'name', 'address', 'city', 'state', 'pincode', 'country', 'mobile', 0.00, '', 0.00, 'New', 'COD', 850.00, '2019-10-09 13:21:59', '2019-10-09 13:21:59'),
(20, '4', 'kapopat@gmail.com', 'name', 'address', 'city', 'state', 'pincode', 'country', 'mobile', 0.00, '', 0.00, 'New', 'COD', 1000.00, '2019-10-10 12:17:21', '2019-10-10 12:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` int(30) NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_qty` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`order_id`, `user_id`, `product_id`, `product_code`, `product_name`, `product_color`, `product_size`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(19, 7, 28, 0, 'Pink Party Shirt', 'Pink', 'small', 850, 1, '2019-10-09 13:21:59', '2019-10-09 13:21:59'),
(20, 4, 27, 0, 'Nubuck Leather High', 'Black', '9', 1000, 1, '2019-10-10 12:17:21', '2019-10-10 12:17:21');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `care` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `product_color`, `description`, `care`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'White Polo Casual T-Shirt', 'WPCTS001', 'White', 'White Polo Casual T-Shirts', 'Soft Wool', 700.00, '64943.jpg', '2018-12-11 08:14:34', '2018-12-26 05:31:09'),
(2, 2, 'Red Casual T-Shirts', 'RCTS002', 'Red', 'Red Casual T-Shirts', 'Soft Wool', 750.00, '15233.PNG', '2018-12-11 08:25:54', '2018-12-11 08:25:54'),
(3, 5, 'Elegant Green Formal Shirt', 'EGFS003', 'Green', 'Elegant Green Formal Shirt', 'Cotton Stuff', 1250.00, '81563.jpeg', '2018-12-11 08:41:57', '2018-12-11 08:41:57'),
(4, 5, 'White Formal T-Shirts', 'WFTS004', 'White', 'Nologo white polo t-shirt with navy collar', 'Nologo white polo t-shirt with navy collar', 800.00, '61487.jpg', '2018-12-11 08:48:24', '2018-12-11 08:48:24'),
(5, 5, 'Graphite Grey formal Shirt', 'GGFS005', 'Grey', 'Graphite grey formal Shirt', 'Plain Cotton', 1050.00, '56324.png', '2018-12-11 08:56:36', '2018-12-11 08:56:36'),
(6, 5, 'Bamboo Fiber Black Shirt', 'BFBS006', 'Black', 'Men\'s dress shirts Bamboo fiber Black shirts', 'Fiber', 1300.00, '41879.jpg', '2018-12-11 09:04:43', '2018-12-11 09:04:43'),
(7, 4, 'Mens Casual Leather Shoes', 'MCLS001', 'Black', 'New Arrival Awesome Mens Casual Leather Shoes For Men Dress Shoes Flats Shoes Pure Color Hot Sale Good Price', 'Leather Shoes', 1500.00, '16919.jpg', '2018-12-11 09:25:38', '2018-12-11 09:25:38'),
(8, 4, 'Hot Men\'s Creative Bright Face', 'BCMS002', 'Black', 'Hot Men\'s Creative Bright Face Genuine Leather Shoes Mens', 'Leather Shoes', 1250.00, '14631.jpg', '2018-12-11 09:31:51', '2018-12-11 09:31:51'),
(9, 4, 'Casual Shoes light brown J-16', 'CSLB003', 'Brown', 'Casual Shoes light brown J-16 Shoes for men', 'Soft Laather Shoes', 1150.00, '11761.jpg', '2018-12-11 09:41:31', '2018-12-11 09:41:31'),
(10, 9, 'New HandMade Leather Shoes', 'FBLS004', 'Brown', 'New HandMade Leather Shoes\r\nGood for both dress wear and casual wear. - Color: Brown. - Color: Black.', 'Leather Shoes', 1450.00, '45127.jpg', '2018-12-11 09:48:56', '2018-12-11 09:48:56'),
(11, 9, 'Leather Dress Shoes', 'MFS002', 'Brown', 'New 2018 Leather Dress Shoes For Men Formal Shoe', 'Full Pure Laather', 1550.00, '16180.jpg', '2018-12-13 06:04:42', '2018-12-13 13:20:14'),
(12, 9, 'Men\'s Business Dress Shoes', 'MFS007', 'Black', 'Luxury Pointy Men\'s Business Dress Shoes', 'Pure Leather', 1350.00, '76972.jpg', '2018-12-13 12:53:48', '2018-12-13 13:19:41'),
(13, 10, 'Casual Men\'s Flat Shoes', 'CMFS001', 'Brown / Blue', 'Casual Men\'s Flat Shoes', 'Soft Wool', 950.00, '4218.jpg', '2018-12-13 13:04:32', '2018-12-13 13:04:32'),
(14, 10, '2018 New Summer Brand Mens', 'CMFS007', 'Grey / Blue', '2018 New Summer Brand Mens Flat Shoes', 'RubberFeature\r\nLight,Breathable\r\nHard-WearingShoes', 1250.00, '54064.jpg', '2018-12-13 13:16:12', '2018-12-13 13:18:58'),
(15, 24, 'Mens Casual Jacket', 'MCJ001', 'Off-White', 'Matching up with the ever increasing requirements of the customers, our company is engaged in providing Mens Casual Jacket', 'Soft Wool', 1000.00, '21722.jpg', '2018-12-14 12:55:14', '2018-12-14 12:55:14'),
(16, 24, 'Autumn Mens Casual Jacket', 'MCJ005', 'Brown', 'Autumn Mens Business Casual jacket-mens Casual jacket coat this is standard EU size basic on bust', 'Soft Wool', 1250.00, '26428.jpg', '2018-12-14 13:00:12', '2018-12-14 13:00:12'),
(17, 24, 'Black PU Laather', 'MCJ009', 'Black', 'Black PU Leather Slim Fit Jacket for Men', 'Leather Stuff', 1500.00, '81932.jpg', '2018-12-14 13:04:47', '2018-12-14 13:04:47'),
(18, 25, 'US Formal Mens Slim', 'FMJ001', 'Grey', 'US-Formal-Mens-Slim-Fit-One-Button-Suit', 'Soft Wool', 1350.00, '66540.jpg', '2018-12-14 13:14:27', '2018-12-14 13:14:27'),
(19, 25, 'Men Stylish Grey Coat', 'MFJ005', 'Grey', 'Men Stylish Grey Coat', 'Cotton & polyster', 1000.00, '2141.jpg', '2018-12-14 13:20:02', '2018-12-14 13:20:02'),
(20, 12, 'Chiffon Casual Shirt', 'WCS001', 'White', 'White Women Fashion Chiffon Casual Shirt', 'Silk', 750.00, '76822.jpg', '2018-12-14 13:24:28', '2018-12-14 13:24:28'),
(21, 12, 'Casual Loose-Sleeveless', 'WCS005', 'Pink', 'Fashion-Women-039-s-Casual-Loose-Sleeveless-Chiffon', 'Chiffon', 950.00, '12198.jpg', '2018-12-14 13:29:48', '2018-12-14 13:29:48'),
(22, 12, 'Roadster Casual Shirt', 'WCS009', 'Blue', 'Buy Roadster Women\'s Blue Checkered Casual Shirt online  at best price.Blue and redchecked shirt, has a mandarin collar, a full button placket, long sleeves with roll-up tabs', 'Soft', 850.00, '39440.jpg', '2018-12-14 13:33:45', '2018-12-14 13:33:45'),
(23, 14, 'Net Kamdani Shirt', 'WFS001', 'Light Pink', 'Cotton net kamdani shirt', 'Cotton', 1350.00, '77947.jpg', '2018-12-14 13:38:23', '2018-12-14 13:50:09'),
(24, 14, 'Black Kurti', 'WFS005', 'Black', 'Women Designer Kurti Tunic Top Dress 03', 'Cotton', 1000.00, '72603.jpg', '2018-12-14 13:41:25', '2018-12-14 13:49:56'),
(25, 16, '2018 Sneaker Shoes', 'WFS001', 'Pink', '2018 Sneaker Shoes', 'Rubber Sole', 1250.00, '73174.jpg', '2018-12-14 14:12:15', '2018-12-14 14:12:15'),
(26, 16, 'Red Casual Shoes', 'WCS010', 'Red', 'Womens Casual Shoes Genuine Leather', 'Leather', 1350.00, '91023.jpg', '2018-12-14 14:20:24', '2018-12-14 14:20:24'),
(27, 17, 'Nubuck Leather High', 'WFS015', 'Black', 'Nubuck Leather High Heeled Shoe', 'Leather', 1000.00, '22049.jpg', '2018-12-14 14:25:10', '2018-12-14 14:25:10'),
(28, 19, 'Pink Party Shirt', 'KCW001', 'Pink', 'Party Wear Kids', 'Soft Wool', 750.00, '77277.jpg', '2018-12-14 14:34:37', '2018-12-14 14:34:37'),
(29, 21, 'Navy Tuxedo Wear', 'KFW001', 'Navy', 'Navy Tuxedo Formal Wear For Boys', 'Cotton', 1500.00, '33224.jpg', '2018-12-14 14:37:44', '2018-12-14 14:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `sku`, `size`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'WPCTS001', 'Small', 700.00, 6, '2018-12-11 08:17:57', '2018-12-26 05:32:45'),
(2, 1, 'WPCTS002', 'Medium', 750.00, 5, '2018-12-11 08:20:08', '2018-12-26 05:32:45'),
(3, 1, 'WPCTS003', 'Large', 800.00, 5, '2018-12-11 08:20:08', '2018-12-26 05:32:45'),
(4, 1, 'WPCTS004', 'Extra Large', 900.00, 5, '2018-12-11 08:20:08', '2018-12-26 05:32:45'),
(5, 2, 'RCTS002', 'Small', 750.00, 5, '2018-12-11 08:27:15', '2018-12-11 08:27:15'),
(6, 2, 'RCTS003', 'Medium', 800.00, 5, '2018-12-11 08:27:15', '2018-12-11 08:27:15'),
(7, 2, 'RCTS004', 'Large', 850.00, 5, '2018-12-11 08:27:15', '2018-12-11 08:27:15'),
(8, 2, 'RCTS005', 'Extra Large', 1000.00, 5, '2018-12-11 08:27:15', '2018-12-11 08:27:15'),
(9, 3, 'EGFS003', 'Small', 1250.00, 5, '2018-12-11 08:43:02', '2018-12-11 08:43:02'),
(10, 3, 'EGFS004', 'Medium', 1300.00, 5, '2018-12-11 08:43:02', '2018-12-11 08:43:02'),
(11, 3, 'EGFS005', 'Large', 1350.00, 5, '2018-12-11 08:43:03', '2018-12-11 08:43:03'),
(12, 3, 'EGFS006', 'Extra Large', 1500.00, 5, '2018-12-11 08:43:03', '2018-12-11 08:43:03'),
(13, 4, 'WFTS004', 'Small', 800.00, 5, '2018-12-11 08:50:15', '2018-12-11 08:50:15'),
(14, 4, 'WFTS005', 'Medium', 850.00, 5, '2018-12-11 08:50:15', '2018-12-11 08:50:15'),
(15, 4, 'WFTS006', 'Large', 900.00, 5, '2018-12-11 08:50:15', '2018-12-11 08:50:15'),
(16, 4, 'WFTS007', 'Extra Large', 1000.00, 5, '2018-12-11 08:50:15', '2018-12-11 08:50:15'),
(17, 5, 'GGFS005', 'Small', 1050.00, 5, '2018-12-11 08:58:48', '2018-12-11 08:58:48'),
(18, 5, 'GGFS006', 'Medium', 1100.00, 5, '2018-12-11 08:58:48', '2018-12-11 08:58:48'),
(19, 5, 'GGFS007', 'Large', 1150.00, 5, '2018-12-11 08:58:48', '2018-12-11 08:58:48'),
(20, 5, 'GGFS008', 'Extra Large', 1200.00, 5, '2018-12-11 08:58:48', '2018-12-11 08:58:48'),
(21, 6, 'BFBS006', 'Small', 1300.00, 5, '2018-12-11 09:06:07', '2018-12-11 09:06:07'),
(22, 6, 'BFBS007', 'Medium', 1350.00, 5, '2018-12-11 09:06:07', '2018-12-11 09:06:07'),
(23, 6, 'BFBS008', 'Large', 1500.00, 5, '2018-12-11 09:06:07', '2018-12-11 09:06:07'),
(24, 6, 'BFBS009', 'Extra Large', 1600.00, 5, '2018-12-11 09:06:07', '2018-12-11 09:06:07'),
(25, 7, 'MCLS001', '8', 1500.00, 5, '2018-12-11 09:26:27', '2018-12-11 09:26:27'),
(26, 7, 'MCLS002', '9', 1500.00, 5, '2018-12-11 09:27:25', '2018-12-11 09:27:25'),
(27, 7, 'MCLS003', '10', 1500.00, 5, '2018-12-11 09:27:25', '2018-12-11 09:27:25'),
(28, 7, 'MCLS004', '11', 1600.00, 5, '2018-12-11 09:27:25', '2018-12-11 09:27:25'),
(29, 7, 'MCLS005', '12', 1700.00, 5, '2018-12-11 09:27:25', '2018-12-11 09:27:25'),
(30, 8, 'BCMS002', '8', 1250.00, 5, '2018-12-11 09:33:09', '2018-12-11 09:33:09'),
(31, 8, 'BCMS003', '9', 1300.00, 5, '2018-12-11 09:33:09', '2018-12-11 09:33:09'),
(32, 8, 'BCMS004', '10', 1400.00, 5, '2018-12-11 09:33:09', '2018-12-11 09:33:09'),
(33, 8, 'BCMS005', '11', 1500.00, 5, '2018-12-11 09:33:09', '2018-12-11 09:33:09'),
(34, 8, 'BCMS006', '12', 1600.00, 5, '2018-12-11 09:33:09', '2018-12-11 09:33:09'),
(35, 9, 'CSLB003', '8', 1150.00, 5, '2018-12-11 09:43:07', '2018-12-11 09:43:07'),
(36, 9, 'CSLB004', '9', 1200.00, 5, '2018-12-11 09:43:07', '2018-12-11 09:43:07'),
(37, 9, 'CSLB005', '10', 1250.00, 5, '2018-12-11 09:43:07', '2018-12-11 09:43:07'),
(38, 9, 'CSLB006', '11', 1300.00, 5, '2018-12-11 09:43:07', '2018-12-11 09:43:07'),
(39, 9, 'CSLB007', '12', 1400.00, 5, '2018-12-11 09:43:07', '2018-12-11 09:43:07'),
(40, 10, 'FBLS004', '8', 1450.00, 5, '2018-12-11 09:49:59', '2018-12-11 09:49:59'),
(41, 10, 'FBLS005', '9', 1450.00, 5, '2018-12-11 09:49:59', '2018-12-11 09:49:59'),
(42, 10, 'FBLS006', '10', 1500.00, 5, '2018-12-11 09:50:00', '2018-12-11 09:50:00'),
(43, 10, 'FBLS007', '11', 1600.00, 5, '2018-12-11 09:50:00', '2018-12-11 09:50:00'),
(44, 10, 'FBLS008', '12', 1700.00, 5, '2018-12-11 09:50:00', '2018-12-11 09:50:00'),
(45, 11, 'MFS003', '7', 1350.00, 5, '2018-12-13 12:56:13', '2018-12-13 12:56:13'),
(46, 11, 'MFS004', '8', 1350.00, 5, '2018-12-13 12:56:13', '2018-12-13 12:56:13'),
(47, 11, 'MFS005', '9', 1350.00, 5, '2018-12-13 12:56:13', '2018-12-13 12:56:13'),
(48, 11, 'MFS006', '10', 1350.00, 5, '2018-12-13 12:56:13', '2018-12-13 12:56:13'),
(49, 12, 'MFS008', '8', 1500.00, 5, '2018-12-13 12:57:54', '2018-12-13 12:57:54'),
(50, 12, 'MFS009', '9', 1500.00, 5, '2018-12-13 12:57:54', '2018-12-13 12:57:54'),
(51, 12, 'MFS010', '10', 1500.00, 5, '2018-12-13 12:57:54', '2018-12-13 12:57:54'),
(52, 12, 'MFS011', '11', 1500.00, 5, '2018-12-13 12:57:54', '2018-12-13 12:57:54'),
(53, 13, 'CMFS002', '8', 950.00, 5, '2018-12-13 13:05:29', '2018-12-13 13:05:29'),
(54, 13, 'CMFS003', '9', 1000.00, 5, '2018-12-13 13:05:29', '2018-12-13 13:05:29'),
(55, 13, 'CMFS004', '10', 1000.00, 5, '2018-12-13 13:06:12', '2018-12-13 13:06:12'),
(56, 13, 'CMFS005', '11', 1000.00, 5, '2018-12-13 13:06:12', '2018-12-13 13:06:12'),
(57, 14, 'CMFS007', '8', 1250.00, 5, '2018-12-13 13:17:18', '2018-12-13 13:17:18'),
(58, 14, 'CMFS008', '9', 1250.00, 5, '2018-12-13 13:17:18', '2018-12-13 13:17:18'),
(59, 14, 'CMFS009', '10', 1250.00, 5, '2018-12-13 13:17:18', '2018-12-13 13:17:18'),
(60, 14, 'CMFS010', '11', 1250.00, 5, '2018-12-13 13:17:18', '2018-12-13 13:17:18'),
(61, 15, 'MCJ001', 'Small', 1000.00, 5, '2018-12-14 12:56:52', '2018-12-14 12:56:52'),
(62, 15, 'MCJ002', 'Medium', 1000.00, 5, '2018-12-14 12:56:52', '2018-12-14 12:56:52'),
(63, 15, 'MCJ003', 'Large', 1000.00, 5, '2018-12-14 12:56:52', '2018-12-14 12:56:52'),
(64, 15, 'MCJ004', 'Extra Large', 1000.00, 5, '2018-12-14 12:56:52', '2018-12-14 12:56:52'),
(65, 16, 'MCJ005', 'Small', 1250.00, 5, '2018-12-14 13:01:10', '2018-12-14 13:01:10'),
(66, 16, 'MCJ006', 'Medium', 1250.00, 5, '2018-12-14 13:01:10', '2018-12-14 13:01:10'),
(67, 16, 'MCJ007', 'Large', 1250.00, 5, '2018-12-14 13:01:10', '2018-12-14 13:01:10'),
(68, 16, 'MCJ008', 'Extra Large', 1250.00, 5, '2018-12-14 13:01:10', '2018-12-14 13:01:10'),
(69, 17, 'MCJ009', 'Small', 1500.00, 5, '2018-12-14 13:06:22', '2018-12-14 13:06:22'),
(70, 17, 'MCJ010', 'Medium', 1500.00, 5, '2018-12-14 13:06:22', '2018-12-14 13:06:22'),
(71, 17, 'MCJ011', 'Large', 1500.00, 5, '2018-12-14 13:06:22', '2018-12-14 13:06:22'),
(72, 17, 'MCJ012', 'Extra Large', 1500.00, 5, '2018-12-14 13:06:22', '2018-12-14 13:06:22'),
(73, 18, 'FMJ001', 'Small', 1350.00, 5, '2018-12-14 13:15:45', '2018-12-14 13:15:45'),
(74, 18, 'FMJ002', 'Medium', 1350.00, 5, '2018-12-14 13:15:45', '2018-12-14 13:15:45'),
(75, 18, 'FMJ003', 'Large', 1350.00, 5, '2018-12-14 13:15:45', '2018-12-14 13:15:45'),
(76, 18, 'FMJ004', 'Extra Large', 1350.00, 5, '2018-12-14 13:15:45', '2018-12-14 13:15:45'),
(77, 19, 'MFJ005', 'Small', 1000.00, 5, '2018-12-14 13:21:09', '2018-12-14 13:21:09'),
(78, 19, 'MFJ006', 'Medium', 1000.00, 5, '2018-12-14 13:21:09', '2018-12-14 13:21:09'),
(79, 19, 'MFJ007', 'Large', 1000.00, 5, '2018-12-14 13:21:09', '2018-12-14 13:21:09'),
(80, 19, 'MFJ008', 'Extra Large', 1000.00, 5, '2018-12-14 13:21:09', '2018-12-14 13:21:09'),
(81, 20, 'WCS001', 'Small', 750.00, 5, '2018-12-14 13:26:41', '2018-12-14 13:26:41'),
(82, 20, 'WCS002', 'Medium', 750.00, 5, '2018-12-14 13:26:41', '2018-12-14 13:26:41'),
(83, 20, 'WCS003', 'Large', 750.00, 5, '2018-12-14 13:26:41', '2018-12-14 13:26:41'),
(84, 20, 'WCS004', 'Extra Large', 750.00, 5, '2018-12-14 13:26:41', '2018-12-14 13:26:41'),
(85, 23, 'WFS001', 'Small', 1350.00, 5, '2018-12-14 13:39:14', '2018-12-14 13:39:14'),
(86, 23, 'WFS002', 'Medium', 1350.00, 5, '2018-12-14 13:39:14', '2018-12-14 13:39:14'),
(87, 23, 'WFS003', 'Large', 1350.00, 5, '2018-12-14 13:39:14', '2018-12-14 13:39:14'),
(88, 23, 'WFS004', 'Extra Large', 1350.00, 5, '2018-12-14 13:39:14', '2018-12-14 13:39:14'),
(89, 24, 'WFS005', 'Small', 1000.00, 5, '2018-12-14 13:42:17', '2018-12-14 13:42:17'),
(90, 24, 'WFS006', 'Medium', 1000.00, 5, '2018-12-14 13:42:17', '2018-12-14 13:42:17'),
(91, 24, 'WFS007', 'Large', 1000.00, 5, '2018-12-14 13:42:17', '2018-12-14 13:42:17'),
(92, 24, 'WFS008', 'Extra Large', 1000.00, 5, '2018-12-14 13:42:17', '2018-12-14 13:42:17'),
(93, 25, 'WFS010', '8', 1250.00, 5, '2018-12-14 14:17:21', '2018-12-14 14:17:21'),
(94, 25, 'WFS011', '9', 1250.00, 5, '2018-12-14 14:18:09', '2018-12-14 14:18:09'),
(95, 25, 'WFS012', '10', 1250.00, 5, '2018-12-14 14:18:09', '2018-12-14 14:18:09'),
(96, 25, 'WFS013', '11', 1250.00, 5, '2018-12-14 14:18:09', '2018-12-14 14:18:09'),
(97, 27, 'WFS015', '8', 1000.00, 5, '2018-12-14 14:26:06', '2018-12-14 14:26:06'),
(98, 27, 'WFS016', '9', 1000.00, 5, '2018-12-14 14:26:06', '2018-12-14 14:26:06'),
(99, 27, 'WFS017', '10', 1000.00, 5, '2018-12-14 14:26:06', '2018-12-14 14:26:06'),
(100, 27, 'WFS018', '11', 1000.00, 5, '2018-12-14 14:26:06', '2018-12-14 14:26:06'),
(101, 28, 'KCW001', 'small', 850.00, 5, '2018-12-14 14:35:28', '2018-12-14 14:35:28'),
(102, 28, 'KCW002', 'Medium', 850.00, 5, '2018-12-14 14:35:28', '2018-12-14 14:35:28'),
(103, 28, 'KCW003', 'Large', 850.00, 5, '2018-12-14 14:35:28', '2018-12-14 14:35:28'),
(104, 28, 'KCW004', 'Extra Large', 850.00, 5, '2018-12-14 14:35:28', '2018-12-14 14:35:28'),
(105, 29, 'KFW001', 'Small', 1500.00, 5, '2018-12-14 14:38:16', '2018-12-14 14:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1425.jpg', '2018-12-11 13:14:59', '2018-12-11 08:14:59'),
(2, 1, '9280.jpg', '2018-12-11 13:15:14', '2018-12-11 08:15:14'),
(3, 2, '8910.PNG', '2018-12-11 13:28:06', '2018-12-11 08:28:06'),
(4, 2, '1355.PNG', '2018-12-11 13:28:19', '2018-12-11 08:28:19'),
(5, 3, '7671.jpeg', '2018-12-11 13:43:28', '2018-12-11 08:43:28'),
(6, 3, '7263.jpeg', '2018-12-11 13:43:36', '2018-12-11 08:43:36'),
(7, 4, '5924.jpg', '2018-12-11 13:48:46', '2018-12-11 08:48:46'),
(8, 17, '6273.PNG', '2018-12-14 18:05:04', '2018-12-14 13:05:04');

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
(1, 'kashyap', 'k@gmail.com', NULL, '$2y$10$2KhnGgrdr.iQ30e67FplpekfGxc.NDGRTM0aO61NQLk7yOfROI7ja', NULL, '2019-10-01 00:56:38', '2019-10-01 00:56:38'),
(2, 'milind', 'msomaiya36@gmail.com', NULL, '$2y$10$uankkJOaZZjMamyzB/Zl3.6yMWiXFV4uD4p8ljKLIQnexH/wx8ZmK', 'elC9B6u6IScfPXBwRQrr9BjQY3EHwz3frky6NWYmjPQPyuZ1lId9oYvpKDYN', '2019-10-09 12:17:57', '2019-10-09 12:17:57'),
(3, 'kalpesh', 'kapopat', NULL, '$2y$10$qcz/hcP/2e1mjy4SNUNPv.z7phHckIBixR5gLmoKdpnZXMuctTe/K', 'Py8vPolQNRmm9zI2Qq3hJAXXq09CXJHeZKOVGUnISNHIsuqFblH4OX33H7BB', '2019-10-09 12:31:17', '2019-10-09 12:31:17'),
(4, 'kalpesh', 'kapopat@gmail.com', NULL, '$2y$10$7SrZIMDn.maAsBxGS2ruq.2M1p9EwqehwKJTKkfkiYvddQcwgmUHS', 'MyJRlRq5tD5Y7pgZOlC5B7QYtH79dQyI9Iu0wOyXhzzRa1A6qfjdLVPrn61e', '2019-10-09 12:31:54', '2019-10-09 12:31:54'),
(5, 'admin', 'admin@admin.com', NULL, '$2y$10$hLncAW4UjWcUcJPJFIufMeGhb.bRQ2agIc12IqrT3MjfbA5zC7zdq', 'gUz8jr4r3W3yC4xZ7mFxcM6us8Ych5BlMn5EZvrre8KE0yTe0PVBXODdiPPY', '2019-10-09 12:50:40', '2019-10-09 12:50:40'),
(6, 'milind', 'milind@gmail.com', NULL, '$2y$10$yNxFVfPsOBpsxBUSJ3gQ9uTf1F/J/M4b.vGRb9xlMxr1wThXxv6OO', 'fhdasiU2JAArSXos2fcARMVkov8LiANSpzqE71O9iXjxlVGcjo9Bt5dnNNhJ', '2019-10-09 12:53:35', '2019-10-09 12:53:35'),
(7, 'monali', 'monali@gmail.com', NULL, '$2y$10$hT9IsBsiTWh7Th5YO0HyFuKpkx6I2feTjgdQEX37byr4ONfpRlrsi', 'B02qFUdlVJHrpkItkCs1kOPwwQL446tX52KwfLeZAySA4YqlhDUZ92cxOl6b', '2019-10-09 13:11:57', '2019-10-09 13:11:57');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
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
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
