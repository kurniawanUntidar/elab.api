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

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-06 21:15:09', 1),
(2, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 21:34:33', 1),
(3, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 21:39:32', 1),
(4, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 21:40:20', 1),
(5, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 21:41:33', 1),
(6, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 21:46:11', 1),
(7, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 21:56:07', 1),
(8, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 21:57:30', 1),
(9, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 22:02:54', 1),
(10, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 22:15:58', 1),
(11, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 22:24:10', 1),
(12, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 22:32:33', 1),
(13, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 22:35:39', 1),
(14, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 22:55:25', 1),
(15, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 22:56:10', 1),
(16, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:00:10', 1),
(17, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:01:01', 1),
(18, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:01:30', 1),
(19, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:03:12', 1),
(20, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:05:38', 1),
(21, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:07:40', 1),
(22, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:22:01', 1),
(23, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:22:50', 1),
(24, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:23:07', 1),
(25, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:24:36', 1),
(26, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:25:12', 1),
(27, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:26:38', 1),
(28, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:27:13', 1),
(29, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:27:21', 1),
(30, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:28:00', 1),
(31, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:28:09', 1),
(32, '127.0.0.1', 'elab.admin@gmail.com', 2, '2025-07-06 23:29:46', 1),
(33, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 00:56:29', 1),
(34, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 00:58:52', 1),
(35, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 01:53:56', 1),
(36, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 01:54:14', 1),
(37, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 01:54:59', 1),
(38, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 04:38:12', 1),
(39, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 04:44:31', 1),
(40, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 04:47:48', 1),
(41, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-07 04:49:17', 1),
(42, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-08 08:31:19', 1),
(43, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-13 13:43:46', 1),
(44, '127.0.0.1', 'Elab', NULL, '2025-07-21 22:18:01', 0),
(45, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-21 22:18:07', 1),
(46, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-07-21 22:20:04', 1),
(47, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-21 22:33:13', 1),
(48, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-07-21 22:33:45', 1),
(49, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-21 23:10:48', 1),
(50, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-21 23:11:02', 1),
(51, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-07-21 23:11:25', 1),
(52, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-22 06:19:05', 1),
(53, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-22 06:22:03', 1),
(54, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-26 16:30:27', 1),
(55, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-07-26 16:31:57', 1),
(56, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-26 16:43:12', 1),
(57, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-07-26 16:43:46', 1),
(58, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-27 07:15:24', 1),
(59, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-07-31 02:09:12', 1),
(60, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-07-31 02:34:15', 1),
(61, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-08-18 01:01:35', 1),
(62, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', 1, '2025-08-23 00:34:39', 1),
(63, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 02:58:43', 1),
(64, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:22:38', 1),
(65, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:22:44', 1),
(66, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:23:07', 1),
(67, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:30:54', 1),
(68, '127.0.0.1', 'elab', NULL, '2025-08-23 07:38:39', 0),
(69, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:39:02', 1),
(70, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:39:23', 1),
(71, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:39:24', 1),
(72, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:39:26', 1),
(73, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-23 07:39:34', 1),
(74, '127.0.0.1', 'elab@untidar.ac.id', 2, '2025-08-26 14:34:20', 1),
(75, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', NULL, '2025-10-06 12:20:03', 0),
(76, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', NULL, '2025-10-06 12:20:13', 0),
(77, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', NULL, '2025-10-06 12:24:39', 0),
(78, '127.0.0.1', 'dwi.kurniawan@untidar.ac.id', NULL, '2025-10-06 12:24:52', 0),
(79, '127.0.0.1', 'elab', NULL, '2025-10-08 18:13:54', 0),
(80, '127.0.0.1', 'elab', NULL, '2025-10-08 18:14:08', 0),
(81, '127.0.0.1', 'kurniawan', NULL, '2025-10-08 18:14:23', 0),
(82, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 18:19:40', 1),
(83, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 19:37:55', 1),
(84, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 19:37:56', 1),
(85, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 19:38:34', 1),
(86, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 20:06:17', 1),
(87, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 20:10:20', 1),
(88, '127.0.0.1', 'admn', NULL, '2025-10-08 20:17:01', 0),
(89, '127.0.0.1', 'admn', NULL, '2025-10-08 20:24:09', 0),
(90, '127.0.0.1', 'admn', NULL, '2025-10-08 20:24:11', 0),
(91, '127.0.0.1', 'admin', NULL, '2025-10-08 20:24:34', 0),
(92, '127.0.0.1', 'admn', NULL, '2025-10-08 20:24:52', 0),
(93, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 20:25:01', 1),
(94, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 20:32:12', 1),
(95, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 20:42:45', 1),
(96, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 20:53:00', 1),
(97, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 20:55:11', 1),
(98, '127.0.0.1', 'dwi.citratechindo@gmail.com', 3, '2025-10-08 21:00:02', 1),
(99, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-08 21:48:55', 1),
(100, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-08 21:51:23', 1),
(101, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-08 21:56:47', 1),
(102, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-08 21:59:19', 1),
(103, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 11:29:21', 1),
(104, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 22:16:20', 1),
(105, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 22:23:23', 1),
(106, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 22:24:46', 1),
(107, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 22:25:34', 1),
(108, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 22:48:46', 1),
(109, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 22:59:37', 1),
(110, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 23:04:57', 1),
(111, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-09 23:06:51', 1),
(112, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:26:11', 1),
(113, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:39:16', 1),
(114, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:39:18', 1),
(115, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:40:06', 1),
(116, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:55:37', 1),
(117, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:56:54', 1),
(118, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:58:26', 1),
(119, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-15 12:59:38', 1),
(120, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-20 20:42:00', 1),
(121, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-20 20:48:20', 1),
(122, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-20 21:22:26', 1),
(123, '127.0.0.1', 'dwi.citratechindo@gmail.com', 1025, '2025-10-20 21:23:12', 1),
(124, '192.168.100.6', 'dwi.kurniawan@untidar.ac.id', NULL, '2026-09-30 16:21:33', 0),
(125, '192.168.100.6', 'dwi.kurniawan@untidar.ac.id', NULL, '2026-09-30 16:21:52', 0),
(126, '192.168.100.6', 'dwi.kurniawan@untidar.ac.id', NULL, '2026-09-30 16:22:02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
