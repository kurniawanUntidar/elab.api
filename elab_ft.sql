-- phpMyAdmin SQL Dump
-- version 5.2.2deb1+deb13u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2026 at 04:15 PM
-- Server version: 8.4.7
-- PHP Version: 8.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elab_ft`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'System Administrator'),
(2, 'Users', 'Regular User'),
(3, 'Guest', 'Just Walk Around');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile'),
(3, 'process-management', 'Manage all processes'),
(4, 'document-management', 'Manage all document'),
(5, 'inventory-management', 'Manage inventory and facility on lab');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hashedValidator` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `category` int UNSIGNED DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `category`, `content`, `author`, `created_at`, `updated_at`, `is_active`, `image`) VALUES
(1, 'Pelaksanaan Praktikum', 'pelaksanaan-praktikum', 1, '<p>Bapak/Ibu dosen pembimbing yang terhormat,</p>\r\n<p>Demi kalancarak kegiatan praktikum di laboratorium teknik elektro, kami mohon kesediaan bapak/ibu dosen pengampu praktikum untuk melakukan registrasi praktikum di sistem kami dengan meng klik tautan dibawah ini.</p>\r\n<p><a class=\"btn btn-primary\" href=\"activity/praktikum\" role=\"button\">Pilih Mata Kuliah</a></p>', 'Admin', '2026-10-22 15:17:28', '2026-10-22 15:17:28', 1, ''),
(2, 'Verifikasi Pengguna Baru', 'verifikasi-pengguna-baru', 1, '<p>PENTING..!<br>Untuk pengguna yang baru registrasi, cek email anda. Apabila di kotak masuk (<em>inbox</em>) tidak terdapat email verifikasi dari kami, harap cek di folder spam email anda.<br><br>Apabila dalam waktu 1x24 jam tidak juga ada email verifikasi akun, silahkan hubungi Pranata Laboratorium Pendidikan&nbsp;</p>', 'Admin', '2026-10-22 15:21:38', '2026-10-22 15:21:38', 1, ''),
(4, 'Peminjaman Alat', 'peminjaman-alat', 1, '<p>Pengguna yang telah teregistrasi dapat mengajukan peminjaman alat melalui applikasi</p>', 'Admin', '2026-10-22 15:22:27', '2026-10-22 15:22:27', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `category`, `description`) VALUES
(1, 'Annauncement', 'Semua jenis pengumuman yang penting untuk pengguna'),
(2, 'Article', 'Artikel yang dituliskan di web sebagai bahan referensi pembaca');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penulis` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created` int NOT NULL,
  `is_active` int NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id`, `kategori_id`, `judul`, `penulis`, `isi`, `created`, `is_active`, `role_id`) VALUES
(8, 1, 'Pelaksanaan Praktikum', 'Admin', '<p>Bapak/Ibu dosen pembimbing yang terhormat,</p>\n<p>Demi kalancarak kegiatan praktikum di laboratorium teknik elektro, kami mohon kesediaan bapak/ibu dosen pengampu praktikum untuk melakukan registrasi praktikum di sistem kami dengan meng klik tautan dibawah ini.</p>\n<p><a class=\"btn btn-primary\" href=\"activity/praktikum\" role=\"button\">Pilih Mata Kuliah</a></p>', 1660624431, 1, 3),
(10, 1, 'Verifikasi Pengguna Baru', 'admin@elab.untidar.ac.id', '<p>PENTING..!<br>Untuk pengguna yang baru registrasi, cek email anda. Apabila di kotak masuk (<em>inbox</em>) tidak terdapat email verifikasi dari kami, harap cek di folder spam email anda.<br><br>Apabila dalam waktu 1x24 jam tidak juga ada email verifikasi akun, silahkan hubungi Pranata Laboratorium Pendidikan&nbsp;</p>', 1690418575, 1, 8),
(11, 1, 'Peminjaman ALat', 'admin.elab@untidar.ac.id', '<p>Pengguna yang telah teregistrasi dapat mengajukan peminjaman alat melalui applikasi</p>', 1690446953, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`, `created_at`, `updated_at`) VALUES
(2, 'dwi.kurniawan@untidar.ac.id', '$2y$12$JD4c/5Wz9voxrO2ZvzS78udMLTIMItumQgLAO0mYuJTUoPQZlGzjC', 'kurniawan', 1, '2026-10-15', '2026-10-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_group_id_foreign` (`group_id`),
  ADD KEY `auth_groups_users_user_id_foregn` (`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parent_id` (`parent_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `auth_groups_users_user_id_foregn` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permissions_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

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
