-- phpMyAdmin SQL Dump
-- version 5.2.2deb1+deb13u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2026 at 02:33 PM
-- Server version: 8.4.6-cluster
-- PHP Version: 8.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elab_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `order_position` int NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `url`, `icon`, `order_position`, `permission_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Dashboard', '/', 'fas fa-fw fa-tachometer-alt', 1, 2, 1, NULL, NULL),
(2, NULL, 'Management', '#', 'fas fa-fw fa-cogs', 10, 1, 1, NULL, NULL),
(3, NULL, 'Inventory', '#', 'fas fa-fw fa-warehouse', 20, 5, 1, NULL, NULL),
(4, NULL, 'Dokument Mutu', '#', 'fas fa-fw fa-book', 30, 4, 1, NULL, NULL),
(5, NULL, 'Pengelolaan Lab.', '#', 'fas fa-fw fa-toolbox', 40, 3, 1, NULL, NULL),
(6, NULL, 'Profile', '#', 'fas fa-fw fa-address-card', 50, 2, 1, NULL, NULL),
(7, NULL, 'Permohonan', '#', 'fas fa-fw fa-paper-plane', 60, 2, 1, NULL, NULL),
(8, 2, 'Groups', 'admin/groups', 'fas fa-fw fa-users', 11, 1, 1, NULL, NULL),
(9, 2, 'Users', 'admin/users', 'fas fa-fw fa-user', 12, 1, 1, NULL, NULL),
(10, 2, 'Role', 'admin/role', 'fas fa-fw fa-user-check', 13, 1, 1, NULL, NULL),
(11, 2, 'Permissions', 'admin/permissions', 'fas fa-fw fa-check-circle', 14, 1, 1, NULL, NULL),
(12, 2, 'Menu', 'admin/menu', 'fas fa-fw fa-list-ol', 15, 1, 1, NULL, NULL),
(13, 2, 'Submenu', 'admin/submenu', 'fas fa-fw fa-list-ul', 16, 1, 1, NULL, NULL),
(14, 3, 'Alat', 'alat', 'fas fa-fw fa-microscope', 21, 5, 1, NULL, NULL),
(15, 3, 'Bahan', 'bahan', 'fas fa-fw fa-microchip', 22, 5, 1, NULL, NULL),
(16, 3, 'Fasilitas', 'fasilitas', 'fas fa-fw fa-warehouse', 23, 5, 1, NULL, NULL),
(17, 4, 'Level 1', 'document/level1', 'fas fa-fw fa-file-pdf', 31, 4, 1, NULL, NULL),
(18, 4, 'Level 2', 'document/level2', 'fas fa-fw fa-file-pdf', 32, 4, 1, NULL, NULL),
(19, 4, 'Level 3', 'document/level3', 'fas fa-fw fa-file-pdf', 33, 4, 1, NULL, NULL),
(20, 4, 'Level 4', 'document/level4', 'fas fa-fw fa-file-pdf', 34, 4, 1, NULL, NULL),
(21, 5, 'Penggunaan', 'alat/penggunaan', 'fas fa-fw fa-hand-holding-water', 41, 3, 1, NULL, NULL),
(22, 5, 'Perawatan', 'alat/perawatan', 'fas fa-fw fa-hand-holding-medical', 42, 3, 1, NULL, NULL),
(23, 5, 'Evaluasi dan Kalibrasi', 'alat/evaluasi', 'fas fa-fw fa-hand-holding-heart', 43, 3, 1, NULL, NULL),
(24, 5, 'Cetak QR', 'alat/qr', 'fas fa-fw fa-qrcode', 44, 3, 1, NULL, NULL),
(25, 6, 'My Profile', 'user/profile', 'fas fa-fw fa-address-book', 51, 2, 1, NULL, NULL),
(26, 6, 'Edit Profile', 'user/edit', 'fas fa-fw fa-edit', 52, 2, 1, NULL, NULL),
(27, 6, 'Change Password', 'user/changepassword', 'fas fa-fw fa-eye-slash', 53, 2, 1, NULL, NULL),
(28, 7, 'Keterangan Bebas Lab.', 'permohonan/bebaslab', 'fas fa-fw fa-file-alt', 61, 2, 1, NULL, NULL),
(29, 7, 'Peminjaman Alat', 'permohonan/pinjamalat', 'fas fa-fw fa-file-alt', 62, 2, 1, NULL, NULL),
(30, 7, 'Pengadaan Alat', 'permohonan/pengadaanalat', 'fas fa-fw fa-file-alt', 63, 5, 1, NULL, NULL),
(31, 7, 'Pengadaan Bahan', 'permohonan/pengadaanbahan', 'fas fa-fw fa-file-alt', 64, 5, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parent_id` (`parent_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `fk_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
