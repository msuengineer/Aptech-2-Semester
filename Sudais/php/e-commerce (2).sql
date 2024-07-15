-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 03:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronic', 1, '2024-06-07 06:26:51', '2024-06-07 06:26:51'),
(2, 'Jewelry', 1, '2024-06-07 06:27:24', '2024-06-07 06:27:24'),
(3, 'Mobile', 1, '2024-06-07 06:27:41', '2024-06-07 06:27:41'),
(4, 'Kitchen Appliances', 1, '2024-06-07 06:46:36', '2024-06-07 06:46:36'),
(5, 'Home Decor', 1, '2024-06-07 06:46:52', '2024-06-07 06:46:52'),
(6, 'Books', 1, '2024-06-07 06:47:01', '2024-06-07 06:47:01'),
(7, 'Fitness', 1, '2024-06-07 06:47:12', '2024-06-07 06:47:12'),
(8, 'Gaming', 1, '2024-06-07 06:47:21', '2024-06-07 06:47:21'),
(9, 'Gadgets', 1, '2024-06-07 06:47:33', '2024-06-07 06:47:33'),
(10, 'DIY & Crafts', 1, '2024-06-07 06:47:40', '2024-06-07 06:47:40'),
(11, 'Gardening', 1, '2024-06-07 06:47:48', '2024-06-07 06:47:48'),
(12, 'Art Supplies', 1, '2024-06-07 06:47:55', '2024-06-07 06:47:55'),
(13, 'Office', 1, '2024-06-07 06:48:03', '2024-06-07 06:48:03'),
(14, 'Photography', 1, '2024-06-07 06:48:09', '2024-06-07 06:48:09'),
(15, 'Music', 1, '2024-06-07 06:48:15', '2024-06-07 06:48:15'),
(16, 'Food & Beverage', 1, '2024-06-07 06:48:25', '2024-06-07 06:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `stock`, `price`, `color`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Huawei P30', 'mobile', 50, 400, 'Breathing Crystal', 4.4, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(2, 'LG TV', 'electronic', 20, 1000, 'Silver', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(3, 'Platinum Ring', 'jewelry', 5, 800, 'Platinum', 4.9, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(4, 'Asus Laptop', 'electronic', 30, 1200, 'Black', 4.5, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(5, 'Titan Watch', 'jewelry', 40, 200, 'Black', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(6, 'Smartwatch with Health Monitoring Features', 'Electronics', 100, 150, 'Black', 4.5, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(7, 'Air Fryer with Rotisserie Function', 'Kitchen Appliances', 75, 200, 'Black', 4.7, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(8, 'Designer Scarf Collection', 'Fashion', 50, 80, 'Various', 4.3, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(9, 'Handcrafted Wooden Wall Clock', 'Home Decor', 60, 100, 'Brown', 4.6, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(11, 'Yoga Mat with Alignment Lines', 'Fitness', 80, 35, 'Blue', 4.7, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(12, 'Bestselling Mystery Novel Series Box Set', 'Books', 70, 50, 'Various', 4.5, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(13, 'Portable Camping Hammock with Mosquito Net', 'Outdoor', 85, 45, 'Green', 4.6, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(14, 'High-Performance Tennis Racket', 'Sports', 55, 120, 'Black,Red', 4.9, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(15, 'Virtual Reality Headset with Motion Controllers', 'Gaming', 65, 250, 'Black', 4.4, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(16, 'Interactive Cat Toy Tower', 'Pets', 40, 50, 'Various', 4.3, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(17, 'Educational Building Blocks Set', 'Baby & Kids', 60, 40, 'Various', 4.8, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(18, 'Bluetooth Key Finder Tracker', 'Gadgets', 75, 20, 'Black', 4.2, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(19, 'Lightweight Foldable Backpack', 'Travel', 90, 30, 'Blue', 4.5, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(20, 'Candle Making Kit with Essential Oils', 'DIY & Crafts', 80, 25, 'Various', 4.6, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(21, 'Indoor Herb Garden Kit', 'Gardening', 70, 35, 'Various', 4.7, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(22, 'Watercolor Paint Set with Brushes', 'Art Supplies', 60, 40, 'Various', 4.4, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(23, 'Ergonomic Mesh Back Office Chair', 'Office', 55, 120, 'Black', 4.8, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(24, 'Portable Bluetooth Speaker with LED Lights', 'Music', 85, 70, 'Black', 4.6, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(25, 'Smartphone Camera Lens Kit', 'Photography', 75, 50, 'Black', 4.4, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(26, 'Car Seat Gap Filler Organizer', 'Automotive', 60, 20, 'Black', 4.3, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(27, 'LED Light-Up Balloons', 'Party Supplies', 80, 15, 'Various', 4.2, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(28, 'Gourmet Coffee Sampler Pack', 'Food & Beverage', 90, 25, 'Various', 4.5, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(29, 'Sterling Silver Gemstone Earrings', 'Jewelry', 70, 60, 'Various', 4.7, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(30, 'Lenovo Laptop', 'electronic', 20, 1000, 'Gray', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(31, 'Diamond Earrings', 'jewelry', 10, 200, 'White', 4.9, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(32, 'Sony Laptop', 'electronic', 30, 1500, 'Silver ,Black', 4.6, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(33, 'Rolex Watch', 'jewelry', 10, 10000, 'Gold', 4.8, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(34, 'Acer Laptop', 'electronic', 20, 800, 'Black', 4.4, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(35, 'Sapphire Ring', 'jewelry', 5, 500, 'Blue', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(36, 'Dell Laptop', 'electronic', 30, 1200, 'Black', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(37, 'iPhone 14', 'mobile', 50, 800, 'Space Gray', 4.8, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(38, 'Gold Chain', 'jewelry', 200, 150, 'Gold', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(39, 'Samsung TV', 'electronic', 30, 1200, 'Black', 4.6, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(40, 'Apple Watch', 'electronic', 40, 300, 'Silver', 4.9, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(41, 'Pearl Necklace', 'jewelry', 150, 80, 'White', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(42, 'OnePlus 9', 'mobile', 60, 600, 'Midnight Blue', 4.4, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(43, 'Sony Headphones', 'electronic', 20, 100, 'Black', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(44, 'Diamond Ring', 'jewelry', 10, 500, 'Gold', 4.9, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(45, 'Google Pixel', 'mobile', 40, 500, 'Just Black', 4.5, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(46, 'Fitbit Smartwatch', 'electronic', 30, 200, 'Rose Gold', 4.3, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(47, 'Silver Earrings', 'jewelry', 100, 20, 'Silver', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(49, 'Canon Camera', 'electronic', 20, 800, 'Black', 4.8, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(50, 'Gold Bracelet', 'jewelry', 50, 100, 'Gold', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(51, 'Oppo Reno', 'mobile', 40, 350, 'Ocean Green', 4.3, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(52, 'JBL Speakers', 'electronic', 30, 150, 'Black', 4.5, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(53, 'Pearl Earrings', 'jewelry', 80, 30, 'White', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(54, 'Vivo V21', 'mobile', 60, 300, 'Sunset Dazzle', 4.4, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(55, 'Xiaomi Mi 11', 'mobile', 50, 450, 'Midnight Gray', 4.6, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(56, 'LG TV', 'electronic', 20, 1000, 'Silver', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(57, 'Platinum Ring', 'jewelry', 5, 800, 'Platinum', 4.9, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(58, 'Asus Laptop', 'electronic', 30, 1200, 'Black', 4.5, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(59, 'Titan Watch', 'jewelry', 40, 200, 'Black', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(60, 'Lenovo Laptop', 'electronic', 20, 1000, 'Gray', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(61, 'Diamond Earrings', 'jewelry', 10, 200, 'White', 4.9, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(62, 'Sony Laptop', 'electronic', 30, 1500, 'Silver', 4.6, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(63, 'Rolex Watch', 'jewelry', 10, 10000, 'Gold', 4.8, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(64, 'Acer Laptop', 'electronic', 20, 800, 'Black', 4.4, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(65, 'Sapphire Ring', 'jewelry', 5, 500, 'Blue', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(66, 'Dell Laptop', 'electronic', 30, 1200, 'Black', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(67, 'Emerald Ring', 'jewelry', 5, 600, 'Green', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(68, 'HP Laptop', 'electronic', 20, 1000, 'Silver', 4.5, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(69, 'Ruby Ring', 'jewelry', 5, 700, 'Red', 4.3, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(70, 'Microsoft Surface', 'electronic', 30, 1500, 'Gray', 4.8, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(71, 'Topaz Ring', 'jewelry', 5, 400, 'Yellow', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(72, 'MacBook Pro', 'electronic', 20, 2000, 'Silver', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(73, 'Amethyst Ring', 'jewelry', 5, 500, 'Purple', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(74, 'iPad Pro', 'electronic', 30, 1000, 'Space Gray', 4.8, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(75, 'Turquoise Ring', 'jewelry', 5, 300, 'Blue', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(76, 'MacBook Air', 'electronic', 20, 1500, 'Gold', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(77, 'Garnet Ring', 'jewelry', 5, 600, 'Red', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(78, 'iPhone 13', 'mobile', 50, 900, 'Midnight Black', 4.8, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(79, 'Citrine Ring', 'jewelry', 5, 400, 'Yellow', 4.1, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(80, 'iPhone 12', 'mobile', 50, 800, 'Pacific Blue', 4.7, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(81, 'Aquamarine Ring', 'jewelry', 5, 500, 'Blue', 4.2, 1, '2024-06-05 15:10:32', '2024-06-05 15:10:32'),
(82, 'iPhone 11', 'mobile', 80, 800, 'Space Gray', 4.9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Joggers', 'Shoes', 56, 100, 'Blue,Black,Grey', 5, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(84, 'Smartwatch with Health Monitoring Features', 'Electronics', 100, 150, 'Black', 4.5, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(85, 'Air Fryer with Rotisserie Function', 'Kitchen Appliances', 75, 200, 'Black', 4.7, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(86, 'Designer Scarf Collection', 'Fashion', 50, 80, 'Various', 4.3, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54'),
(87, 'Handcrafted Wooden Wall Clock', 'Home Decor', 60, 100, 'Brown', 4.6, 1, '2024-06-07 15:27:54', '2024-06-07 15:27:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
