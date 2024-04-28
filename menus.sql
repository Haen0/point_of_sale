-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 11:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_alan`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama`, `kategori`, `foto`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Ramen Karage', 'Ramen', 'img/menu/pusUgAMaUv94BildzLpMGigeAyFza8VSZznCjXVR.jpg', 30000, '2024-04-27 14:13:58', '2024-04-27 14:13:58'),
(2, 'Ramen Beef', 'Ramen', 'img/menu/yi3py32qxYDdSD17x2QS2yMg0YqfutJ4TSQhUrGs.jpg', 45000, '2024-04-27 14:16:36', '2024-04-27 14:16:36'),
(3, 'Ramen Menma', 'Ramen', 'img/menu/9SLZcuYXWPsZbQNedwSH4AgdZhyOL7ZpdolZweqZ.jpg', 35000, '2024-04-27 14:18:06', '2024-04-27 14:18:06'),
(4, 'Ramen Gyoza', 'Ramen', 'img/menu/jnKSq0tZPUAPxZQfQGb1XRbmH5JLe95DVKLOtnEP.jpg', 40000, '2024-04-27 14:19:05', '2024-04-27 14:19:05'),
(5, 'Ramen Chicken Katsu', 'Ramen', 'img/menu/1bdha8Xr6lpRhcIV2nm1yQcYDF5NmXTZVk1SHKC0.jpg', 38000, '2024-04-27 14:20:12', '2024-04-27 14:20:12'),
(6, 'Udon Tempura', 'Udon', 'img/menu/Dot1r7GR5kNxBqTpHZ1VD4ryX0qqzFLauicpM73R.jpg', 50000, '2024-04-27 14:21:01', '2024-04-27 14:21:01'),
(7, 'Udon Gyoza', 'Udon', 'img/menu/DZy3zaICwPDyIjRdoXR9mA50dA4qo5cIJbmzGRtE.jpg', 55000, '2024-04-27 14:22:25', '2024-04-27 14:22:25'),
(8, 'Udon Golden Beef', 'Udon', 'img/menu/jGyJ7hnaFmjeaObyFApfqj1Lh3kvuP3IGJbKLXBF.jpg', 70000, '2024-04-27 14:23:45', '2024-04-27 14:23:45'),
(9, 'Udon Torikatsu', 'Udon', 'img/menu/4ldxBfF9i9O205SOWyDSoPvJpSsLyACFDUS1muzT.jpg', 60000, '2024-04-27 14:24:26', '2024-04-27 14:24:26'),
(10, 'Lemon Juice', 'Minuman', 'img/menu/tEPnYP8jqNuC3uGoZzdjvfsTQco4PvgKpQ7m1qC6.jpg', 15000, '2024-04-27 14:26:39', '2024-04-27 14:26:39'),
(11, 'Coffee Latte', 'Minuman', 'img/menu/1F2UINw9V2dtpNdbGNwbixVKtDBiiQ61zVC8feCG.jpg', 18000, '2024-04-27 14:27:32', '2024-04-27 14:27:32'),
(12, 'Coffee Espreso', 'Minuman', 'img/menu/rPWtbQ818VP0gey4s8qZUjGSd1TXaS2JcAFJM5H3.jpg', 10000, '2024-04-27 14:28:32', '2024-04-27 14:28:32'),
(13, 'Fresh Milk', 'Minuman', 'img/menu/vAkUbC5R7TM3ZaUqcrnuwulGmLrrLX0F0y2LLdx7.jpg', 10000, '2024-04-27 14:29:22', '2024-04-27 14:29:22'),
(14, 'Sushi Small', 'Sushi', 'img/menu/xYRiaVH2QnYWze7wu1epGIifmsWifbUVDMAlbifR.jpg', 25000, '2024-04-27 14:30:06', '2024-04-27 14:30:06'),
(15, 'Sushi Large', 'Sushi', 'img/menu/RaUr5qwO6GWqHKecCSrvuw6Apz0WSOFvoFmBrEzx.jpg', 35000, '2024-04-27 14:30:38', '2024-04-27 14:30:38');
(16, 'Ramen Cemen', 'Ramen', 'img/menu/UPyVPVTTOC268QUbRCYBeXOr5ysGL3zTO7DzCmy2.jpg', 40000, '2024-04-27 14:31:38', '2024-04-27 14:31:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
