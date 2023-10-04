-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 01:20 PM
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
-- Database: `thistlesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer` text DEFAULT NULL,
  `cost` varchar(200) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `questions_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_skipped` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `cost`, `file_name`, `questions_id`, `user_id`, `is_skipped`, `created_at`, `updated_at`) VALUES
(1, 'hsjk', NULL, NULL, 1, 1, 0, '2023-10-04 03:33:52', '2023-10-04 03:34:24'),
(2, 'fndn', NULL, NULL, 2, 1, 0, '2023-10-04 03:34:32', '2023-10-04 03:42:35'),
(3, 'hlscnb', NULL, NULL, 3, 1, 0, '2023-10-04 03:34:34', '2023-10-04 03:42:40'),
(4, 'dfghjkl', NULL, NULL, 4, 1, 0, '2023-10-04 03:34:36', '2023-10-04 03:42:45'),
(5, 'hdjkfhsdk', NULL, NULL, 5, 1, 0, '2023-10-04 03:34:38', '2023-10-04 03:42:49'),
(6, 'sdcnvnm', NULL, NULL, 6, 1, 0, '2023-10-04 03:34:58', '2023-10-04 03:42:55'),
(7, NULL, NULL, NULL, 7, 1, 0, '2023-10-04 03:34:58', '2023-10-04 03:42:57'),
(8, 'd cn', NULL, NULL, 8, 1, 0, '2023-10-04 03:34:58', '2023-10-04 03:43:01'),
(9, 'dsbc,nmdm,v', NULL, NULL, 9, 1, 0, '2023-10-04 03:34:58', '2023-10-04 03:43:06'),
(10, 'dsbjhv.kjnk,ds', NULL, NULL, 10, 1, 0, '2023-10-04 03:34:58', '2023-10-04 03:43:11'),
(11, 'Yes', NULL, NULL, 11, 1, 0, '2023-10-04 03:34:58', '2023-10-04 03:43:15'),
(12, NULL, NULL, NULL, 12, 1, 1, '2023-10-04 03:34:58', '2023-10-04 03:34:58'),
(13, NULL, NULL, NULL, 13, 1, 1, '2023-10-04 03:34:58', '2023-10-04 03:34:58'),
(14, NULL, NULL, NULL, 14, 1, 1, '2023-10-04 03:34:58', '2023-10-04 03:34:58'),
(15, NULL, NULL, NULL, 15, 1, 1, '2023-10-04 03:34:58', '2023-10-04 03:34:58'),
(16, NULL, NULL, NULL, 16, 1, 1, '2023-10-04 03:34:58', '2023-10-04 03:34:58'),
(17, NULL, NULL, NULL, 17, 1, 1, '2023-10-04 03:34:58', '2023-10-04 03:34:58'),
(18, 'No', NULL, NULL, 88, 1, 0, '2023-10-04 03:35:35', '2023-10-04 03:35:35'),
(19, 'Yes', NULL, NULL, 94, 1, 0, '2023-10-04 03:43:34', '2023-10-04 03:43:34'),
(20, 'fbhxkjn,', NULL, NULL, 95, 1, 0, '2023-10-04 03:43:40', '2023-10-04 03:43:40'),
(21, 'No', NULL, NULL, 96, 1, 0, '2023-10-04 03:43:43', '2023-10-04 03:43:43'),
(22, 'Yes', NULL, NULL, 98, 1, 0, '2023-10-04 03:43:50', '2023-10-04 03:43:50'),
(23, ',m vm,,mmmm', NULL, NULL, 99, 1, 0, '2023-10-04 03:43:56', '2023-10-04 03:43:56'),
(24, 'No', NULL, NULL, 100, 1, 0, '2023-10-04 03:43:59', '2023-10-04 03:43:59'),
(25, 'No', NULL, NULL, 102, 1, 0, '2023-10-04 03:44:02', '2023-10-04 03:44:02'),
(26, 'gsnf', NULL, NULL, 55, 1, 0, '2023-10-04 03:44:27', '2023-10-04 03:44:27'),
(64, NULL, NULL, NULL, 1, 3, 1, '2023-10-04 04:49:01', '2023-10-04 05:01:13'),
(65, NULL, NULL, NULL, 2, 3, 1, '2023-10-04 04:49:04', '2023-10-04 05:00:35'),
(66, NULL, NULL, NULL, 3, 3, 1, '2023-10-04 04:49:06', '2023-10-04 05:00:35'),
(67, NULL, NULL, NULL, 4, 3, 1, '2023-10-04 04:49:09', '2023-10-04 05:00:35'),
(68, NULL, NULL, NULL, 5, 3, 1, '2023-10-04 04:49:12', '2023-10-04 05:00:35'),
(69, 'random', NULL, NULL, 6, 3, 0, '2023-10-04 04:49:15', '2023-10-04 04:49:15'),
(70, 'random', NULL, NULL, 7, 3, 0, '2023-10-04 04:49:18', '2023-10-04 04:49:18'),
(71, 'random', NULL, NULL, 8, 3, 0, '2023-10-04 04:49:22', '2023-10-04 04:49:22'),
(72, 'random', NULL, NULL, 9, 3, 0, '2023-10-04 04:49:34', '2023-10-04 04:49:34'),
(73, 'random', NULL, NULL, 10, 3, 0, '2023-10-04 04:49:37', '2023-10-04 04:49:37'),
(74, NULL, NULL, NULL, 11, 3, 1, '2023-10-04 04:49:42', '2023-10-04 04:50:29'),
(75, NULL, NULL, NULL, 12, 3, 1, '2023-10-04 04:49:52', '2023-10-04 04:50:29'),
(76, NULL, NULL, NULL, 13, 3, 1, '2023-10-04 04:49:57', '2023-10-04 04:50:29'),
(77, NULL, NULL, NULL, 14, 3, 1, '2023-10-04 04:50:01', '2023-10-04 04:50:29'),
(78, NULL, NULL, NULL, 16, 3, 1, '2023-10-04 04:50:05', '2023-10-04 04:50:29'),
(79, NULL, NULL, NULL, 17, 3, 1, '2023-10-04 04:50:09', '2023-10-04 04:50:29'),
(80, NULL, NULL, NULL, 18, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(81, NULL, NULL, NULL, 19, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(82, NULL, NULL, NULL, 20, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(83, NULL, NULL, NULL, 21, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(84, NULL, NULL, NULL, 22, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(85, NULL, NULL, NULL, 23, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(86, NULL, NULL, NULL, 24, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(87, NULL, NULL, NULL, 25, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(88, NULL, NULL, NULL, 26, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(89, NULL, NULL, NULL, 27, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(90, NULL, NULL, NULL, 28, 3, 1, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(91, 'random', NULL, NULL, 29, 3, 0, '2023-10-04 04:50:17', '2023-10-04 04:50:17'),
(92, 'random', NULL, NULL, 30, 3, 0, '2023-10-04 04:50:20', '2023-10-04 04:50:20'),
(93, 'random', NULL, NULL, 31, 3, 0, '2023-10-04 04:50:23', '2023-10-04 04:50:23'),
(94, 'random', NULL, NULL, 32, 3, 0, '2023-10-04 04:50:26', '2023-10-04 04:50:26'),
(95, 'No', NULL, NULL, 33, 3, 0, '2023-10-04 04:50:29', '2023-10-04 04:50:29'),
(96, NULL, NULL, NULL, 15, 3, 1, '2023-10-04 04:50:29', '2023-10-04 04:50:29'),
(97, 'random', NULL, NULL, 41, 3, 0, '2023-10-04 04:50:34', '2023-10-04 04:50:34'),
(98, 'random', NULL, NULL, 42, 3, 0, '2023-10-04 04:50:37', '2023-10-04 04:50:37'),
(99, 'random', NULL, NULL, 43, 3, 0, '2023-10-04 04:50:40', '2023-10-04 04:50:40'),
(100, 'Yes', NULL, NULL, 44, 3, 0, '2023-10-04 04:50:47', '2023-10-04 04:50:47'),
(101, 'random', NULL, NULL, 45, 3, 0, '2023-10-04 04:50:50', '2023-10-04 04:50:50'),
(102, 'Yes', NULL, NULL, 46, 3, 0, '2023-10-04 04:50:53', '2023-10-04 05:00:15'),
(103, 'No', NULL, NULL, 46, 1, 0, '2023-10-04 04:51:54', '2023-10-04 04:59:18'),
(104, 'random', NULL, NULL, 47, 3, 0, '2023-10-04 05:00:28', '2023-10-04 05:00:28'),
(105, 'No', NULL, NULL, 48, 3, 0, '2023-10-04 05:00:35', '2023-10-04 05:00:35'),
(106, NULL, NULL, NULL, 55, 3, 1, '2023-10-04 05:00:37', '2023-10-04 05:00:43'),
(107, NULL, NULL, NULL, 56, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(108, NULL, NULL, NULL, 57, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(109, NULL, NULL, NULL, 58, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(110, NULL, NULL, NULL, 59, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(111, NULL, NULL, NULL, 60, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(112, NULL, NULL, NULL, 61, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(113, NULL, NULL, NULL, 62, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(114, NULL, NULL, NULL, 63, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(115, NULL, NULL, NULL, 64, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(116, NULL, NULL, NULL, 65, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(117, NULL, NULL, NULL, 66, 3, 1, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(118, NULL, NULL, NULL, 67, 3, 1, '2023-10-04 05:00:46', '2023-10-04 05:00:46'),
(119, NULL, NULL, NULL, 68, 3, 1, '2023-10-04 05:00:46', '2023-10-04 05:00:46'),
(120, NULL, NULL, NULL, 69, 3, 1, '2023-10-04 05:00:48', '2023-10-04 05:00:48'),
(121, NULL, NULL, NULL, 70, 3, 1, '2023-10-04 05:00:48', '2023-10-04 05:00:48'),
(122, NULL, NULL, NULL, 71, 3, 1, '2023-10-04 05:00:48', '2023-10-04 05:00:48'),
(123, 'random', NULL, NULL, 72, 3, 0, '2023-10-04 05:00:52', '2023-10-04 05:01:07'),
(124, 'No', NULL, NULL, 73, 3, 0, '2023-10-04 05:00:52', '2023-10-04 05:01:13'),
(125, NULL, NULL, NULL, 83, 3, 1, '2023-10-04 05:01:23', '2023-10-04 05:01:23'),
(126, NULL, NULL, NULL, 84, 3, 1, '2023-10-04 05:01:23', '2023-10-04 05:01:23'),
(127, NULL, NULL, NULL, 85, 3, 1, '2023-10-04 05:01:23', '2023-10-04 05:01:23'),
(128, NULL, NULL, NULL, 86, 3, 1, '2023-10-04 05:01:23', '2023-10-04 05:01:23'),
(129, NULL, NULL, NULL, 87, 3, 1, '2023-10-04 05:01:23', '2023-10-04 05:01:23'),
(130, 'Yes', NULL, NULL, 88, 3, 0, '2023-10-04 05:01:26', '2023-10-04 05:01:26'),
(131, 'random', NULL, NULL, 89, 3, 0, '2023-10-04 05:01:31', '2023-10-04 05:01:31'),
(132, 'No', NULL, NULL, 90, 3, 0, '2023-10-04 05:01:35', '2023-10-04 05:01:35'),
(133, 'No', NULL, NULL, 92, 3, 0, '2023-10-04 05:01:38', '2023-10-04 05:01:38'),
(134, 'Yes', NULL, NULL, 94, 3, 0, '2023-10-04 05:01:41', '2023-10-04 05:01:41'),
(135, 'random', NULL, NULL, 95, 3, 0, '2023-10-04 05:01:44', '2023-10-04 05:01:44'),
(136, 'No', NULL, NULL, 96, 3, 0, '2023-10-04 05:01:47', '2023-10-04 05:01:47'),
(137, 'No', NULL, NULL, 98, 3, 0, '2023-10-04 05:01:51', '2023-10-04 05:01:51'),
(138, 'No', NULL, NULL, 100, 3, 0, '2023-10-04 05:01:54', '2023-10-04 05:01:54'),
(139, 'No', NULL, NULL, 102, 3, 0, '2023-10-04 05:01:57', '2023-10-04 05:01:57'),
(140, NULL, NULL, NULL, 104, 3, 1, '2023-10-04 05:02:01', '2023-10-04 05:02:01'),
(141, NULL, NULL, NULL, 105, 3, 1, '2023-10-04 05:02:01', '2023-10-04 05:02:01'),
(142, NULL, NULL, NULL, 106, 3, 1, '2023-10-04 05:02:01', '2023-10-04 05:02:01'),
(143, NULL, NULL, NULL, 107, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(144, NULL, NULL, NULL, 108, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(145, NULL, NULL, NULL, 109, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(146, NULL, NULL, NULL, 110, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(147, NULL, NULL, NULL, 111, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(148, NULL, NULL, NULL, 112, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(149, NULL, NULL, NULL, 113, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(150, NULL, NULL, NULL, 114, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(151, NULL, NULL, NULL, 115, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(152, NULL, NULL, NULL, 116, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(153, NULL, NULL, NULL, 117, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(154, NULL, NULL, NULL, 118, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(155, NULL, NULL, NULL, 119, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(156, NULL, NULL, NULL, 120, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(157, NULL, NULL, NULL, 121, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(158, NULL, NULL, NULL, 122, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(159, NULL, NULL, NULL, 123, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(160, NULL, NULL, NULL, 124, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(161, NULL, NULL, NULL, 125, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(162, NULL, NULL, NULL, 126, 3, 1, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(163, NULL, NULL, NULL, 127, 3, 1, '2023-10-04 05:02:09', '2023-10-04 05:02:09'),
(164, NULL, NULL, NULL, 128, 3, 1, '2023-10-04 05:02:14', '2023-10-04 05:02:14'),
(165, NULL, NULL, NULL, 129, 3, 1, '2023-10-04 05:02:14', '2023-10-04 05:02:14'),
(166, NULL, NULL, NULL, 130, 3, 1, '2023-10-04 05:02:14', '2023-10-04 05:02:14'),
(167, NULL, NULL, NULL, 131, 3, 1, '2023-10-04 05:02:14', '2023-10-04 05:02:14'),
(168, NULL, NULL, NULL, 132, 3, 1, '2023-10-04 05:02:14', '2023-10-04 05:02:14'),
(169, NULL, NULL, NULL, 133, 3, 1, '2023-10-04 05:02:14', '2023-10-04 05:02:14'),
(170, 'random', NULL, NULL, 134, 3, 0, '2023-10-04 05:02:18', '2023-10-04 05:02:18'),
(171, 'random', NULL, NULL, 135, 3, 0, '2023-10-04 05:02:21', '2023-10-04 05:02:21'),
(172, 'random', NULL, NULL, 136, 3, 0, '2023-10-04 05:02:24', '2023-10-04 05:02:24'),
(173, 'random', NULL, NULL, 137, 3, 0, '2023-10-04 05:02:26', '2023-10-04 05:02:26'),
(174, NULL, NULL, 'abc.pdf', 138, 3, 0, '2023-10-04 05:02:41', '2023-10-04 05:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `back_urls`
--

CREATE TABLE `back_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `back_url` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `back_urls`
--

INSERT INTO `back_urls` (`id`, `back_url`, `user_id`, `created_at`, `updated_at`) VALUES
(19, 'http://localhost:8000/heading/1/question/1', 3, '2023-10-04 04:48:49', '2023-10-04 04:48:49'),
(20, 'http://localhost:8000/heading/1/question/2', 3, '2023-10-04 04:49:01', '2023-10-04 04:49:01'),
(21, 'http://localhost:8000/heading/1/question/3', 3, '2023-10-04 04:49:04', '2023-10-04 04:49:04'),
(22, 'http://localhost:8000/heading/1/question/4', 3, '2023-10-04 04:49:07', '2023-10-04 04:49:07'),
(23, 'http://localhost:8000/heading/1/question/5', 3, '2023-10-04 04:49:10', '2023-10-04 04:49:10'),
(24, 'http://localhost:8000/heading/2/question/1', 3, '2023-10-04 04:49:12', '2023-10-04 04:49:12'),
(25, 'http://localhost:8000/heading/2/question/2', 3, '2023-10-04 04:49:15', '2023-10-04 04:49:15'),
(26, 'http://localhost:8000/heading/2/question/3', 3, '2023-10-04 04:49:18', '2023-10-04 04:49:18'),
(27, 'http://localhost:8000/heading/2/question/4', 3, '2023-10-04 04:49:22', '2023-10-04 04:49:22'),
(28, 'http://localhost:8000/heading/2/question/5', 3, '2023-10-04 04:49:34', '2023-10-04 04:49:34'),
(29, 'http://localhost:8000/heading/2/question/6', 3, '2023-10-04 04:49:37', '2023-10-04 04:49:37'),
(30, 'http://localhost:8000/heading/2/question/7', 3, '2023-10-04 04:49:42', '2023-10-04 04:49:42'),
(31, 'http://localhost:8000/heading/2/question/8', 3, '2023-10-04 04:49:53', '2023-10-04 04:49:53'),
(32, 'http://localhost:8000/heading/2/question/9', 3, '2023-10-04 04:49:58', '2023-10-04 04:49:58'),
(33, 'http://localhost:8000/heading/2/question/11', 3, '2023-10-04 04:50:01', '2023-10-04 04:50:01'),
(34, 'http://localhost:8000/heading/2/question/12', 3, '2023-10-04 04:50:06', '2023-10-04 04:50:06'),
(35, 'http://localhost:8000/heading/3/question/1', 3, '2023-10-04 04:50:09', '2023-10-04 04:50:09'),
(36, 'http://localhost:8000/heading/4/question/1', 3, '2023-10-04 04:50:13', '2023-10-04 04:50:13'),
(37, 'http://localhost:8000/heading/4/question/2', 3, '2023-10-04 04:50:17', '2023-10-04 04:50:17'),
(38, 'http://localhost:8000/heading/4/question/3', 3, '2023-10-04 04:50:21', '2023-10-04 04:50:21'),
(39, 'http://localhost:8000/heading/4/question/4', 3, '2023-10-04 04:50:24', '2023-10-04 04:50:24'),
(40, 'http://localhost:8000/heading/4/question/5', 3, '2023-10-04 04:50:27', '2023-10-04 04:50:27'),
(41, 'http://localhost:8000/heading/5/question/1', 3, '2023-10-04 04:50:30', '2023-10-04 04:50:30'),
(42, 'http://localhost:8000/heading/6/question/1', 3, '2023-10-04 04:50:34', '2023-10-04 04:50:34'),
(43, 'http://localhost:8000/heading/6/question/2', 3, '2023-10-04 04:50:37', '2023-10-04 04:50:37'),
(44, 'http://localhost:8000/heading/6/question/3', 3, '2023-10-04 04:50:40', '2023-10-04 04:50:40'),
(45, 'http://localhost:8000/heading/6/question/4', 3, '2023-10-04 04:50:47', '2023-10-04 04:50:47'),
(46, 'http://localhost:8000/heading/6/question/5', 3, '2023-10-04 04:50:50', '2023-10-04 04:50:50'),
(47, 'http://localhost:8000/heading/8/question/0', 3, '2023-10-04 04:50:54', '2023-10-04 04:50:54'),
(48, 'http://localhost:8000/heading/7/question/1', 1, '2023-10-04 04:59:09', '2023-10-04 04:59:09'),
(49, 'http://localhost:8000/heading/8/question/1', 3, '2023-10-04 05:00:28', '2023-10-04 05:00:28'),
(50, 'http://localhost:8000/heading/9/question/1', 3, '2023-10-04 05:00:35', '2023-10-04 05:00:35'),
(51, 'http://localhost:8000/heading/9/question/2', 3, '2023-10-04 05:00:37', '2023-10-04 05:00:37'),
(52, 'http://localhost:8000/heading/10/question/1', 3, '2023-10-04 05:00:43', '2023-10-04 05:00:43'),
(53, 'http://localhost:8000/heading/11/question/1', 3, '2023-10-04 05:00:46', '2023-10-04 05:00:46'),
(54, 'http://localhost:8000/heading/12/question/1', 3, '2023-10-04 05:00:49', '2023-10-04 05:00:49'),
(55, 'http://localhost:8000/heading/13/question/1', 3, '2023-10-04 05:00:52', '2023-10-04 05:00:52'),
(56, 'http://localhost:8000/heading/12/question/2', 3, '2023-10-04 05:01:08', '2023-10-04 05:01:08'),
(57, 'http://localhost:8000/heading/14/question/1', 3, '2023-10-04 05:01:13', '2023-10-04 05:01:13'),
(58, 'http://localhost:8000/heading/15/question/1', 3, '2023-10-04 05:01:23', '2023-10-04 05:01:23'),
(59, 'http://localhost:8000/heading/15/question/2', 3, '2023-10-04 05:01:27', '2023-10-04 05:01:27'),
(60, 'http://localhost:8000/heading/15/question/3', 3, '2023-10-04 05:01:32', '2023-10-04 05:01:32'),
(61, 'http://localhost:8000/heading/15/question/5', 3, '2023-10-04 05:01:35', '2023-10-04 05:01:35'),
(62, 'http://localhost:8000/heading/15/question/7', 3, '2023-10-04 05:01:39', '2023-10-04 05:01:39'),
(63, 'http://localhost:8000/heading/15/question/8', 3, '2023-10-04 05:01:42', '2023-10-04 05:01:42'),
(64, 'http://localhost:8000/heading/15/question/9', 3, '2023-10-04 05:01:45', '2023-10-04 05:01:45'),
(65, 'http://localhost:8000/heading/15/question/11', 3, '2023-10-04 05:01:48', '2023-10-04 05:01:48'),
(66, 'http://localhost:8000/heading/15/question/13', 3, '2023-10-04 05:01:51', '2023-10-04 05:01:51'),
(67, 'http://localhost:8000/heading/15/question/15', 3, '2023-10-04 05:01:55', '2023-10-04 05:01:55'),
(68, 'http://localhost:8000/heading/16/question/1', 3, '2023-10-04 05:01:58', '2023-10-04 05:01:58'),
(69, 'http://localhost:8000/heading/17/question/1', 3, '2023-10-04 05:02:02', '2023-10-04 05:02:02'),
(70, 'http://localhost:8000/heading/18/question/1', 3, '2023-10-04 05:02:06', '2023-10-04 05:02:06'),
(71, 'http://localhost:8000/heading/19/question/1', 3, '2023-10-04 05:02:09', '2023-10-04 05:02:09'),
(72, 'http://localhost:8000/heading/20/question/1', 3, '2023-10-04 05:02:14', '2023-10-04 05:02:14'),
(73, 'http://localhost:8000/heading/20/question/2', 3, '2023-10-04 05:02:18', '2023-10-04 05:02:18'),
(74, 'http://localhost:8000/heading/20/question/3', 3, '2023-10-04 05:02:21', '2023-10-04 05:02:21'),
(75, 'http://localhost:8000/heading/20/question/4', 3, '2023-10-04 05:02:24', '2023-10-04 05:02:24'),
(76, 'http://localhost:8000/heading/21/question/1', 3, '2023-10-04 05:02:27', '2023-10-04 05:02:27'),
(77, 'http://localhost:8000/heading/22/question/1', 3, '2023-10-04 05:02:41', '2023-10-04 05:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_id` bigint(20) UNSIGNED NOT NULL,
  `entity_type` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generated_reports`
--

CREATE TABLE `generated_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_id` bigint(20) UNSIGNED NOT NULL,
  `report` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(96, '2023_08_26_073351_create_background__infos_table', 1),
(108, '2023_09_07_055050_remove_unique_in_users', 6),
(125, '2014_10_12_000000_create_users_table', 7),
(131, '2023_08_26_081203_create_reports_table', 7),
(132, '2023_08_26_081904_create_goals_table', 7),
(133, '2023_08_26_082726_create_metadata_table', 7),
(134, '2023_08_26_111555_create_background_infos_table', 7),
(135, '2023_08_30_053605_create_save_progresses_table', 7),
(168, '2014_10_12_100000_create_password_reset_tokens_table', 8),
(169, '2014_10_12_100000_create_password_resets_table', 8),
(170, '2019_08_19_000000_create_failed_jobs_table', 8),
(171, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(172, '2023_08_26_080153_create_documents_table', 8),
(173, '2023_09_04_060020_add_category_to_documents', 8),
(174, '2023_09_06_055112_add_type_to_reports', 8),
(175, '2023_09_06_060442_add_foreign_key_of_entity_id_in_documents', 8),
(176, '2023_09_11_074149_create_generated_reports_table', 8),
(177, '2023_09_11_103119_create_question_headings_table', 8),
(178, '2023_09_11_103216_create_questions_table', 8),
(179, '2023_09_11_103233_create_question_options_table', 9),
(180, '2023_09_11_103246_create_answers_table', 9),
(181, '2023_09_22_093713_create_schedules_table', 9),
(182, '2023_10_03_121910_create_back_urls_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_id` bigint(20) UNSIGNED NOT NULL,
  `guidance_notes` text NOT NULL,
  `questions` text NOT NULL,
  `instructions` text NOT NULL,
  `input_type` enum('checkbox','text','file','cost','table','radio','skipable','swap') NOT NULL,
  `sequence` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `heading_id`, `guidance_notes`, `questions`, `instructions`, `input_type`, `sequence`, `created_at`, `updated_at`) VALUES
(1, 1, 'The purpose of this part is to provide the NDIA with a brief overview of your life to \r\ndate, and how your life has been impacted by disability.  There is no need to provide a detailed \r\nmedical description of your disability.  The NDIA is more interested in how that disability affects your \r\nlife in the areas of mobility, communication, social interaction, self-management, learning, and self-\r\ncare.  Remember to describe yourself on a bad day, rather than when they are at your best.', 'What disabilities or other lifelong conditions have you been diagnosed with? In a few sentences, briefly summarise your life and condition so far.', '“I am 18 years old and have severe autism and an intellectual disability.  I am non-verbal and have \r\nsignificant issues with self-regulation, self-harm, and repetitive behaviours which affect all areas of \r\nmy life.  I am unable to care for myself without significant support.”   \r\n“I am 17 years old and have quadriplegic cerebral palsy.  I am unable to walk or feed myself, and \r\nneed assistance with all aspects of my daily life including personal care”.', 'text', 1, '2023-09-27 10:50:29', '2023-09-27 10:50:29'),
(2, 1, '', 'How has disability impacted your life?  Please try briefly to address all areas of your life, \r\nsuch school, home and social life.  Please focus on the struggles and challenges that you face.', '“Disability significantly impacts all areas of my life.  I have no speech, so find communication a \r\nstruggle which can cause frustration and anxiety.  I have no prospects of ever finding paid \r\nemployment.  I am unable to attend to my morning or evening self-care needs without support.  I am \r\nincontinent.  At school, I focus on trying to learn practical living skills such as cooking and self-care.  I \r\nhave no friends, and do not enjoy socialising with others.  I am heavily medicated, which has affected \r\nmy weight and general health”. \r\n“I experience significant and permanent disability with extreme functional impairment and complex, \r\nhigh and enduring physical support needs. I require access to 24-hour support for basic daily \r\nactivities, including toileting, mobility (e.g. transfers from bed to chair via ceiling track hoist) and \r\nfood preparation and consumption. I use a motorised wheelchair (self-drive) or manual wheelchair \r\n(attendant propelled) with significant trunk support and customised seating for all home-based and \r\ncommunity mobility. I require the assistance of two people for ceiling hoist transfers. I can verbalise \r\nsome single words and letters (e.g. ‘yes/no’); however, I have no other verbal communication. I \r\ncommunicate primarily by typing into or using speech output on a Samsung Galaxy tablet, used as an \r\naugmentative communication device. I have severe difficulty in joining in community activities.”', 'text', 2, '2023-09-27 10:50:29', '2023-09-27 10:50:29'),
(3, 1, '', 'What supports and interventions have been provided for you to this point in your life?', '“I received ABA therapy in my early years.  Since then, I have worked with a speech therapist and \r\noccupational therapist at school.  For communication, I have an ipad with Proloquo2go”. \r\n“At school, I was accompanied by a teaching assistant throughout the day who helped me with all my \r\nphysical requirements such as writing, typing, eating and transferring from their wheelchair to the \r\ntoilet.  I have worked with a physiotherapist for seven years.  I use a hoist to transfer from my bed to \r\nmy wheelchair or commode.  I also use an occupational therapist.” ', 'text', 3, '2023-09-27 10:54:42', '2023-09-27 10:54:42'),
(4, 1, '', 'Where do you live, and with whom? ', '', 'text', 4, '2023-09-27 10:55:35', '2023-09-27 10:55:35'),
(5, 1, '', 'When do / did you finish school?', '', 'text', 5, '2023-09-27 10:56:19', '2023-09-27 10:56:19'),
(6, 2, 'The NDIS needs to hear about any challenges that you have with mobility.  When \r\nconsidering mobility, your answers below should address not only physical issues which may limit \r\nyour functional movement, but also any behavioural issues, intellectual disabilities or the like which \r\nmay make (say) travelling by car or public transport difficult. \r\n<br>\r\nPlease note that home modifications and vehicle modifications / driver supports are addressed in a \r\nseparate section of this questionnaire.   \r\n<br>\r\nIf you have no issues with mobility, you can skip to the next section <a href=\"/skipSection\">here</a>', 'What are your goals for relating to mobility?  [Note:  Your goals are a crucial part of your \r\nNDIS Reassessment.  Make sure you properly describe your goals related to mobility.  NDIS will not \r\nprovide funding unless your requirements are sufficiently linked to those goals.  Also make sure that \r\nyou indicate the time frame within which you wish to achieve each goal.]', '“I would like to maximise my independence by being able to independently transfer in and out of my \r\nwheelchair within 2 months”.  \r\n \r\n“To be able to independently access public transport using my wheelchair within 3 months”.  \r\n \r\n“Within the next year, to be able to travel safely in a car without having an anxiety attack, trying to \r\nexit the car when it is moving, or interfering with the driver.”', 'text', 1, '2023-09-27 10:56:53', '2023-09-27 10:56:53'),
(7, 2, '', 'Do you have limited movement?  For example, do you experience difficulties in basic \nphysical activities such as walking, standing, or climbing stairs due to conditions like cerebral palsy or \nmuscular dystrophy?  Please provide as much detail as possible.', '\r\nmoving from my chair to another location.  My cerebral palsy affects my muscle tone and control, \r\ncausing a combination of stiffness (spasticity), involuntary movement (dystonia), and decreased \r\nmuscle strength.”   \r\n \r\n“My cerebral palsy presents substantial difficulties in basic physical activities. My impaired muscle \r\ncoordination and control make walking particularly challenging. I primarily use crutches for support, \r\nbut my mobility remains limited due to my condition. Tasks like standing and climbing stairs are \r\nsignificantly challenging and often require substantial assistance”. ', 'text', 2, '2023-09-27 10:56:53', '2023-09-27 10:56:53'),
(8, 2, '', 'Do you have balance issues, leading to a higher risk of falls and associated injuries?  \r\nPlease provide full details. ', '“My muscle tone and control are affected by my disability, which can make it difficult for me to \r\nmaintain an upright position, even when seated.   I rely on my wheelchair for mobility and need \r\nadaptive equipment for stability and support. The risk of falls is a constant concern, so we\'ve made \r\nmodifications at home, like installing grab bars and using a hospital bed, to minimise the risk”. \r\n \r\n“It\'s particularly difficult for me to balance when I am transferring from my wheelchair to another \r\nplace, like a bed or a car. Because of this, I am at a higher risk of falling during these transitions.  I am \r\nworking with therapists to develop safe practices around such transitions”.', 'text', 3, '2023-09-27 11:00:38', '2023-09-27 11:00:38'),
(9, 2, '', 'If you rely on wheelchairs or other mobility aids for movement and face challenges \r\nnavigating different environments, particularly those that are not wheelchair-accessible, please \r\nprovide full details.', '“One of the biggest challenges that I face is when locations aren\'t wheelchair accessible.  My \r\nindependence can be significantly limited by the environment, like when I encounter buildings \r\nwithout ramps or elevators, narrow doorways, and inaccessible bathrooms. These instances can be \r\nfrustrating and make my everyday life more challenging”. \r\n \r\n“Accessibility can be a big issue for me. For example, when I am trying to get into a building that only \r\nhas steps, I can’t get in without assistance. And in social situations, like when friends are planning to \r\ngo somewhere, I always must ask if it\'s wheelchair accessible. That adds an extra layer of planning \r\nand sometimes disappointment when I realise that I can\'t join in”. ', 'text', 4, '2023-09-27 11:00:38', '2023-09-27 11:00:38'),
(10, 2, '', 'If you have difficulties using public transportation or travelling in a private car please \r\nprovide full details of how this limits your ability to access services, maintain social connections, or \r\nengage in employment or educational opportunities. ', '“Public transportation and travelling in a private car both present their own sets of challenges for \r\nme. Buses and trains aren\'t always equipped with ramps or designated wheelchair spaces, and \r\nsometimes other passengers aren\'t considerate of the space I need. In a private car, it\'s a struggle to \r\nget my wheelchair in and out of the car, and I am reliant on someone else to drive. These difficulties \r\nlimit my access to services like shopping, medical appointments, and social events. They also affect \r\nmy educational opportunities because it becomes harder for me to commute to school”. \r\n \r\n“Public transportation is especially tough because it\'s often crowded, noisy, and unpredictable, all of \r\nwhich can cause me significant distress. Private cars are somewhat better, but the process of getting \r\nin and out, buckling the seatbelt, and the motion of the vehicle can be challenging too.  If I am  \r\nanxious I may shout loud noises which distract the driver, or sometimes I may try and jump out of \r\nthe car whilst it is moving.  This generally means that I need two on one support when travelling in a \r\ncar.  These difficulties can limit my ability to access services like therapy sessions, maintain social \r\nconnections, or participate in educational opportunities”.', 'text', 5, '2023-09-27 11:02:41', '2023-09-27 11:02:41'),
(11, 2, '', 'Do you require any assistive technology for mobility?  [Please note that vehicle \r\nmodifications and home modifications are addressed later in a separate part of this questionnaire]  ', '', 'checkbox', 6, '2023-09-27 11:02:41', '2023-09-27 11:02:41'),
(12, 2, 'Guidance note:  If you want to learn more about how the NDIS funds assistive technology, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a>\r\nto read their Operational Guidelines.', 'What assistive technology for mobility do you require, why, and how much will it cost? ', '“I am unable to transfer independently from my wheelchair to other seating, to commode or bed \r\nand require a hoist for most of my transfers . A ceiling hoist is requires to ensure safe transferring to \r\nreduce risks of injury and falls.  C-Series C450 Manual Traverse Ceiling Hoist with track -installed \r\ncost  $[insert]”', 'cost', 7, '2023-09-27 11:04:23', '2023-09-27 11:04:23'),
(13, 2, '', 'Is this a new item for you, or are you looking to fund a replacement?', '', 'radio', 8, '2023-09-27 11:04:23', '2023-09-27 11:04:23'),
(14, 2, '', 'What is the reason this item needs to be replaced? ', '', 'skipable', 9, '2023-09-20 11:07:40', '2023-09-27 11:07:40'),
(15, 2, '', 'As this assistive technology falls within the “mid cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from an assistive technology adviser \r\nconfirming that you need the technology and the reasons for this.  That evidence must tell NDIS:<br>\r\n• the assistive technology you need<br>  \r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs.   <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'skipable', 10, '2023-09-27 11:08:03', '2023-09-27 11:08:03'),
(16, 2, '', 'As this assistive technology falls within the “high cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from a qualified assistive technology assessor \r\nsuch as an allied health practitioners, orientation and mobility specialist, or professional \r\nrehabilitation engineers confirming that you need the technology and the reasons for this.  That \r\nevidence must tell NDIS:  <br>\r\n• the assistive technology you need <br> \r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs.   <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'text', 11, '2023-09-27 11:09:03', '2023-09-27 11:09:03'),
(17, 2, '', 'As this assistive technology falls within the “high cost” category, you will also need to \r\nsupply NDIS with a quote.  Please confirm details of your quote (supplier / date / amount): ', '', 'text', 12, '2023-09-27 11:10:11', '2023-09-27 11:10:11'),
(18, 3, 'Communication is a fundamental aspect of human life.  If you have difficulties with \r\ncommunication, the NDIS needs to hear about it.  Efficient communication supports allow individuals \r\nto express their needs and make decisions, thereby promoting personal autonomy.  It is also \r\nimportant for forming relationships, learning, working, and engaging in social activities.  When \r\nanswering our questions about communication, remember that communication can be much more \r\nthan talking.  Non-verbal communication assisted by technology might be important.  And / or, do \r\nyou need to build capacity around communication, requiring the assistance of a speech pathologist?   \r\n<br>\r\nIf you have no issues with communication, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'What are your goals relating to communication?  [Note:  Your goals are a crucial part of \r\nyour NDIS Reassessment.  Make sure you properly describe your goals related to communication.  \r\nNDIS will not provide funding unless your requirements are sufficiently linked to those goals.  Also \r\nmake sure that you indicate the time frame within which you wish to achieve each goal.] ', '“To learn how to use Proloquo2go for a broader range of words and concepts, within the next 12 \r\nmonths” \r\n“To learn some basic Auslan sign language within the next 12 months” \r\n“To further develop my reading skills within the next 12 months” \r\n“To build confidence to ask for help or express needs public settings, such the park or a local store or \r\ncafé, within the next 12 months” \r\n \r\n“Within two years, to develop the skills to write clear and concise emails and text messages for \r\nvarious purposes, such as requesting information or communicating with friends.” \r\n \r\n“To improve my ability to initiate, maintain, and end a conversation appropriately with different \r\npeople, such as peers, support workers, or strangers, within two years”. \r\n \r\n“Over the next five years, to develop the ability to independently communicate my thoughts, \r\nfeelings, and ideas effectively in a variety of social settings.”', 'text', 1, '2023-09-28 05:29:55', '2023-09-28 05:29:55'),
(19, 3, '', 'Describe the difficulties that you experience with communication, in as much detail as \r\npossible.  Don’t limit your response to verbal communication.  If you can’t talk, then do you \r\ncommunicate in other ways such through gestures, signs, pictures or technology?  What challenges \r\nand limitations do you face through using those other means of communication?  Do you understand \r\nthings that are said to you?  And if so, to what level?', '“I experience difficulties with communication due to limited muscle control. While I cannot speak, I \r\ncommunicate through gestures and a communication device that tracks eye movements. However, \r\nusing the device is challenging for me, as it requires precise eye movements, which can be tiring and \r\nfrustrating. It also takes time for others to understand my messages as the communication device \r\nrelies on predictive text and symbols. Despite these challenges, I have a good understanding of things \r\nsaid to me”.   \r\n \r\n“I face communication difficulties in both verbal and non-verbal aspects. While I can speak, my \r\nspeech is often unclear and difficult to understand, causing frustration when trying to convey \r\ncomplex thoughts. To compensate, I use sign language and picture cards to express my needs and \r\nemotions. However, I sometimes struggle with the motor skills required for certain signs, leading to \r\nmisunderstandings.  I understand simple instructions and familiar phrases, but they may have \r\ndifficulty comprehending abstract concepts or complex language structures”. \r\n \r\n“I experience challenges with both verbal and non-verbal communication.  I have limited speech and \r\noften rely on echolalia, repeating words or phrases I hear. To communicate, I use a combination of \r\ngestures, pictures, and a communication app on my tablet. The app helps me to construct sentences, \r\nbut it can still be challenging to express abstract ideas or emotions. While I can understand concrete \r\ninstructions and familiar routines, I am completely unable to comprehend abstract concepts or to \r\ninterpret social cues.  This makes social situations very difficult and unpleasant for me”.', 'text', 2, '2023-09-28 05:29:55', '2023-09-28 05:29:55'),
(20, 3, '', 'How do your challenges with communication restrict your independence, ability to learn \r\nor participate in the workforce, or ability to engage in social or community activities?  When writing \r\nthis response, consider all times of day and different settings such as home, school, recreational \r\nactivities etc.', '“My communication challenges significantly impact my independence and participation in various \r\nsettings. At home, I rely heavily on caregivers to understand my needs and desires, which can \r\nsometimes lead to frustration and a sense of helplessness. In school, the limited communication \r\nhinders my ability to actively participate in class discussions and group projects, which can affect my \r\nlearning and academic progress.  During recreational activities, I may find it difficult to initiate \r\ninteractions with peers, leading to feelings of isolation and exclusion.” \r\n \r\n“My communication challenges have a profound impact on my independence and social \r\nparticipation. At home, I may have difficulty expressing emotions and needs clearly, which can lead \r\nto misunderstandings and behavioural issues including physical violence against family members and \r\nsupport workers.  In the school environment, my communication difficulties hinder my learning and \r\nengagement in group activities, making it challenging to build friendships. In social and community \r\nsettings, I often feel overwhelmed by sensory stimuli, leading to social withdrawal and difficulty \r\nengaging in group events or community activities. These communication challenges can also affect \r\nmy prospects in the workforce, as employers may not fully understand my strengths and talents due \r\nto my difficulties in expressing myself”.', 'text', 3, '2023-09-28 05:34:30', '2023-09-28 05:34:30'),
(21, 3, '', 'Do you require ongoing help from a speech pathologist after you finish school?   For \r\nexample, to help them to speak or to communicate via signs or assistive technology?', '“I benefit from the support of a speech pathologist. The speech pathologist helps me work on \r\nimproving my speech clarity and oral muscle control. Additionally, the pathologist assists in finding \r\nthe right augmentative and alternative communication (AAC) system that suits my needs, such as a \r\ncommunication device with eye-tracking technology. The speech pathologist plays a crucial role in \r\nguiding my progress and enhancing my ability to communicate effectively, both verbally and through \r\nassistive technology.  It is important that I continue to see the speech pathologist after I leave \r\nschool”. \r\n \r\n“I require help from a speech pathologist.  I generally see her [insert frequency].  The speech \r\npathologist works with me to improve my speech articulation and language skills. Additionally, the \r\nspeech pathologist helps with alternative communication methods, such as using sign language and \r\npicture cards, to enhance my ability to express myself. The speech pathologist\'s expertise has been \r\ninstrumental in supporting my communication development and overall confidence in social \r\ninteractions”. \r\n \r\n“I have not seen a speech pathologist for some time, due to lack of funds.  However, I need to see \r\none ongoing, for the extra support that I will need when transitioning from school to adult life.  Once \r\nI have left school, I will need help with keeping my assistive technology (Proloquo2go) up to date \r\nand preparing social stories and visual schedules.\"', 'text', 4, '2023-09-28 05:35:46', '2023-09-28 05:35:46'),
(22, 3, '', 'Do you require any assistive technology for communication? ', '', 'checkbox', 5, '2023-09-28 05:35:46', '2023-09-28 05:35:46'),
(23, 3, 'If you want to learn more about how the NDIS funds assistive technology, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a> to read their Operational Guidelines.', 'What assistive technology for communication do you require, why, and how much will it cost? ', '“I will require an iPad for communication, along with the iPad app Proloquo2go I am able to \r\nverbalise some single words and letters (e.g. ‘yes/no’); however I have no other verbal \r\ncommunication. I communicate primarily by typing into or using speech output on an iPad, used as \r\nan augmentative communication device. The iPad will cost $[insert] and Proloquo2go will cost \r\n$[insert]”.', 'cost', 6, '2023-09-28 05:37:07', '2023-09-28 05:37:07'),
(24, 3, '', 'Is this a new item for you, or are you looking to fund a replacement?', '', 'radio', 7, '2023-09-28 05:38:26', '2023-09-28 05:38:26'),
(25, 3, '', 'What is the reason this item needs to be replaced? ', '', 'skipable', 8, '2023-09-28 05:39:03', '2023-09-28 05:39:03'),
(26, 3, '', 'As this assistive technology falls within the “mid cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from an assistive technology adviser \r\nconfirming that you need the technology and the reasons for this.  That evidence must tell NDIS:<br>\r\n• the assistive technology you need <br>  \r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs. <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'skipable', 9, '2023-09-28 05:39:43', '2023-09-28 05:39:43'),
(27, 3, '', 'As this assistive technology falls within the “high cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from a qualified assistive technology assessor \r\nsuch as an allied health practitioners, orientation and mobility specialist, or professional \r\nrehabilitation engineers confirming that you need the technology and the reasons for this.  That \r\nevidence must tell NDIS: <br>  \r\n• the assistive technology you need<br>  \r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs.   <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'text', 10, '2023-09-28 05:39:43', '2023-09-28 05:39:43'),
(28, 3, '', 'As this assistive technology falls within the “high cost” category, you will also need to \r\nsupply NDIS with a quote.  Please confirm details of your quote (supplier / date / amount): ', '', 'text', 11, '2023-09-28 05:42:29', '2023-09-28 05:42:29'),
(29, 4, 'The NDIA needs to hear about your needs and requirements in respect of Social \r\nand Community Participation.  Participation in social and community activities can help individuals \r\nfeel more connected and involved in their community, and help you to build skills.  This section is \r\nyour opportunity to tell the NDIA about the support you will need to help you in this area after you \r\nleave school. \r\n<br>\r\nIf you have high support needs, such as two on one support due to behavioural challenges, then we \r\nstrongly encourage you to obtain a specialist report from a behaviour management practitioner or \r\nother suitably qualified professional. \r\n<br>\r\nIf you want to learn more about how the NDIS funds social and recreational supports, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a> to \r\nread their Operational Guidelines. <br>\r\nIf you have no issues with social interaction, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'What are your goals relating to social interaction?  [Note:  Your goals are a crucial part of \r\nyour NDIS Reassessment.  Make sure you properly describe your goals related to social interaction.  \r\nNDIS will not provide funding unless your requirements are sufficiently linked to those goals.  Also \r\nmake sure that you indicate the time frame within which you wish to achieve each goal] ', '“To be able to participate in community activities such as [walking in the park]/[going to the \r\nshops]/[going on excursions]/[going to the cinema]/[etc], within the next 6 months” \r\n“To be able to visit my relatives interstate, within the next 12 months” \r\n“To be able to play soccer in the park with my friends, within the next 12 months” \r\n“To be able to attend sporting events in the city, within the next 12 months” \r\n“To express my emotions clearly so that I avoid anxiety and distress in social situations, within the \r\nnext 12 months” \r\n“To be able to go to a restaurant with my family, within the next 6 months” \r\n \r\n“To be able to go overseas on an aeroplane next year” \r\n“To be able to communicate with confidence so that I can socialise with friends, with my skills to \r\nincrease over the next few years” \r\n“To have the skills and capacity to self-regulate my emotions.  This is an ongoing goal for the next few \r\nyears.” \r\n“Over the next few years, to make genuine long-term friendships with people my age” \r\n“To improve my social skills in behaving appropriately with my family, peers and members of the \r\ncommunity, over the long term”. ', 'text', 1, '2023-09-28 05:42:29', '2023-09-28 05:42:29'),
(30, 4, '', 'What are the specific social and / or community activities that you engage in, or want to \r\nengage in?  And what are the benefits that you receive, or expect to receive, from these activities?', '“I like to visit family and friends in the evenings and on weekends.  This helps with my mental health \r\nand social skills, and makes me feel less isolated.”  \r\n \r\n“I like to go for a long walk in the park, at least once per day.  This helps to regulate my emotions.” \r\n  \r\n“My leisure interests include spectating ice hockey, which I travel to the Melbourne CBD to watch \r\nregularly.  I enjoy following my favourite team and wearing my team guernsey.”  \r\n \r\n“To calm me down and help with my anxiety, I go for multiple long drives each day.” ', 'text', 2, '2023-09-28 05:45:18', '2023-09-28 05:45:18'),
(31, 4, '', 'What support is required for those activities, and how often do you engage (or wish to engage) in \r\nthose activities?  If so need a support worker to accompany you, please indicate the necessary \r\nsupport ratio (e.g. one on one, two on one) and the reasons why.', '“I catch up with family and friends twice a week, each time for about 4 hours including travel.  I need \r\none-on-one support the entire time.” \r\n \r\n“When planning to go to a sporting event in the city, I require a support worker to purchase tickets \r\nfor me over the phone, as I am unable to buy wheelchair accessible tickets online.  I require another \r\nperson to accompany me to the game to provide mobility and toileting assistance.  Each support \r\nshift lasts about 5 hours in total”. \r\n \r\n“I need one-on-one support at all times whilst I am out in the community, as I have no road sense \r\nand can easily abscond or get lost.” \r\n \r\n“I need two on one support in the car, as I can tend to open the car door when the vehicle is \r\nmoving”. ', 'text', 3, '2023-09-28 05:46:28', '2023-09-28 05:46:28'),
(32, 4, '', 'What difficulties or challenges do you have with engaging in social and community \r\nactivities?', '“When out and about in the community I can behave inappropriately in shops by taking food off the \r\nshelves and eating it.” \r\n \r\n“When in cafes I can barge past people, bump into them, and knock over their food and drinks.” \r\n \r\n“If I become anxious in a public space I can have a meltdown.  I may drop to the floor and risk \r\ncausing harm to myself and others, and also property damage.” \r\n \r\n“I am unable to speak so find it difficult to communicate what I want and need”.', 'text', 4, '2023-09-28 05:48:07', '2023-09-28 05:48:07'),
(33, 4, '', 'Do you require any assistive technology for social and community activities which has not \r\nalready previously been described in this questionnaire?', '', 'checkbox', 5, '2023-09-28 05:48:07', '2023-09-28 05:48:07'),
(34, 4, 'If you want to learn more about how the NDIS funds assistive technology, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a>\r\nto read their Operational Guidelines. ', 'What assistive technology for social and community activities do you require, why, and how much \r\nwill it cost?', '“To participate in the community, I need a portable ramp.  My local chess club, which I intend to \r\nattend every Monday, has a step to get in the front door, so I need access to a ramp to be able to \r\nplay”.  This will cost $[insert].', 'cost', 6, '2023-09-28 05:50:05', '2023-09-28 05:50:05'),
(35, 4, '', 'Is this a new item for you, or are you looking to fund a replacement?', '', 'radio', 7, '2023-09-28 05:52:17', '2023-09-28 05:52:17'),
(36, 4, '', 'What is the reason this item needs to be replaced?', '', 'skipable', 8, '2023-09-28 05:52:17', '2023-09-28 05:52:17'),
(37, 4, '', 'As this assistive technology falls within the “mid cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from an assistive technology adviser \r\nconfirming that you need the technology and the reasons for this.  That evidence must tell NDIS:<br>\r\n• the assistive technology you need <br> \r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs. <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'skipable', 9, '2023-09-28 05:53:36', '2023-09-28 05:53:36'),
(39, 4, '', 'As this assistive technology falls within the “high cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from a qualified assistive technology assessor \r\nsuch as an allied health practitioners, orientation and mobility specialist, or professional \r\nrehabilitation engineers confirming that you need the technology and the reasons for this.  That \r\nevidence must tell NDIS: <br>\r\n• the assistive technology you need  <br>\r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs. <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report. ', '', 'text', 10, '2023-09-28 05:59:59', '2023-09-28 05:59:59'),
(40, 4, '', 'As this assistive technology falls within the “high cost” category, you will also need to \r\nsupply NDIS with a quote.  Please confirm details of your quote (supplier / date / amount): ', '', 'text', 11, '2023-09-28 06:02:50', '2023-09-28 06:02:50'),
(41, 5, 'Self-management plays a pivotal role in enabling people with disabilities to live \r\nmore independent and fulfilling lives.  Self-management skills empower individuals to have greater \r\ncontrol over their lives, make their own decisions, and increase their personal autonomy.  This can in \r\nturn help to increase self-esteem and positively impact on mental health.   \r\n<br>\r\nIssues with self-management can include things like stress, anxiety, inability to control emotions, \r\noutbursts, self-harm, violence against others, and property damage. \r\n<br>\r\nIf you have no issues with self-management, you can skip to the next section <a href=\"/skipSection\">here</a>', 'What are your goals relating to self-management and independence?  [Note:  Your goals \r\nare a crucial part of your NDIS Reassessment.  Make sure you properly describe your goals related to \r\nself-management and independence.  NDIS will not provide funding unless your requirements are \r\nsufficiently linked to those goals.  Also make sure that you indicate the time frame within which you \r\nwish to achieve each goal] ', '“To be able to use public transport, within the next 12 months” \r\n“To be able to attend community events with minimal assistance, within the next 12 months” \r\n“To dress myself independently with the use of adaptive tools, within the next 12 months” \r\n“To be able to follow my [morning routines] / [evening routines] with minimal assistance, within the \r\nnext 24 months” \r\n“To be able to prepare my own food, within the next 24 months” \r\n“To be able to clean and maintain my home, within the next 24 months” \r\n“To have appropriate therapy and training for myself and my supports workers to support transition \r\ninto my future home, within the next 2 years.” \r\n“To live in my own home with my siblings, within the next 3 years” \r\n“To find appropriate specialist disability accommodation and live there as independently as possible, \r\nwithin the next 5 years” \r\n“To develop reciprocal communication skills, over the long term”', 'text', 1, '2023-09-28 06:03:39', '2023-09-28 06:03:39'),
(42, 6, 'If you have behavioural vulnerabilities, then here is the place to provide all the \r\ndetails.  For example, do they become unduly stressed or anxious?  Does this then spill over into \r\nother behaviours such as self-harm, violence towards others, or property destruction?  Are you \r\nverbally abusive or threatening towards others?  Do you have trouble managing your emotions?   \r\nThe more information that you can provide, the better. \r\n<br>\r\nIf you have no behavioural vulnerabilities, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'Describe your behavioural vulnerabilities in as much detail as possible, giving specific \r\nexamples of your behaviours of concern, what might trigger those behaviours, and the impacts or \r\nconsequences of those behaviours for you and others.  Please also indicate how frequently these \r\nbehaviours occur. ', '“I can become very anxious for various reasons, including changes to my routine, being denied food \r\nrequests, or being told no if I want to go for a drive.  Plus sometimes, there is no discernible trigger \r\nfor my anxiety.  When I become anxious I may jump up and down or throw myself on the floor.  I \r\nmight also self-harm by biting my arm.  In some cases, I will be physically violent towards my \r\nparents, teachers, and carers, biting and scratching them.  I have a violent episode roughly once per \r\nweek on average, although during bad times I can have a violent incident everyday for up to 5 days \r\nconsecutively.” \r\n \r\n“When I hear loud noises, this can trigger me to self-harm.  I generally bang my head violently \r\nagainst a wall.  This can last for up to 30 minutes and can cause me significant pain and distress”. ', 'text', 1, '2023-09-28 06:03:39', '2023-09-28 06:03:39'),
(43, 6, '', 'Do support workers need to be particularly vigilant with you at certain times or in certain \r\nenvironments?  For example, in environments which are busy, noisy, or unfamiliar to you?  What \r\nmay happen in such environments?  Might you create a risk to yourself or others?', '“I become particularly anxious in shopping centres and may [abscond] / [self harm] [etc] in those \r\nplaces.  This is particularly the case on weekends when the shopping centres are busy” \r\n \r\n“I will not tolerate waiting in a queue.  If I am required to do this for longer than say 30 seconds, I \r\nmay [insert].”   \r\n \r\n“I might suddenly drop to the ground in shops or restaurants, causing others to be inconvenienced \r\nor hurt.” \r\n \r\n“I have no road sense and might run across a road without looking”. \r\n \r\n“I might open the car door and try to exit the vehicle when it is still moving”.', 'text', 2, '2023-09-28 06:07:02', '2023-09-28 06:07:02'),
(44, 6, '', 'Do support workers need to undertake shadow shifts or any other knowledge or training \r\nbefore working with you, in order that they may appropriately assist in managing your behaviours \r\nand ensure that everyone is safe?', '', 'checkbox', 3, '2023-09-28 06:07:02', '2023-09-28 06:07:02'),
(45, 6, '', 'What support do you need to assist with behaviour management?', '“I need two on one support when out in the community, because I may drop to the floor at any time \r\nin shops or cafes.  I need two people to ensure that everyone is safe and to pick me up and remove \r\nme from the situation.” \r\n \r\n“I need two on one support when being driven in the car, because I tend to attack the driver if the \r\ntraffic is slow or if I am triggered by songs that I don’t like on the radio.” \r\n \r\n“I need a Positive Behaviour Support Plan to be prepared for me to provide to my support workers \r\nor proposed respite care, so that they can understand how to help manage those behaviours.”', 'text', 4, '2023-09-28 06:09:36', '2023-09-28 06:09:36'),
(46, 6, '', 'Do you have a Positive Behaviour Support Plan?', '', 'checkbox', 5, '2023-09-28 06:11:10', '2023-09-28 06:11:10'),
(47, 7, 'If you tend to cause property damage, either intentionally or unintentionally, then \r\nthis is the section to provide full details.   \r\nIf you have no issues with property damage, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'Describe the circumstances in which you damage property, and what you tend to damage.', 'When I have an anxious episode I can become violent.  Over the last two years I have done the \r\nfollowing: \r\n• Breaking the glass pool fence door. I violently shake this until it shatters. \r\n \r\n \r\n• Regular smashing of plates and crockery  \r\n \r\n \r\n• Lounge room sofas and my bed need to be replaced once a year due to me bouncing on them \r\nand breaking them.  \r\n \r\n• I urinate in the family cars causing damage to car seats, and afterwards cars require a \r\nprofessional detail to get properly clean.  \r\n \r\n• Due to faeces smears on the walls of my room, corridor and bathroom, family have needed to \r\npay for a professional painter to come in and paint the walls inside the house.   \r\n \r\n• I have ripped doors off hingers and ripped off fly screens, and damaged sash windows. Family \r\nhave replaced windows and doors with heavy duty steel windows and doors which have a high \r\nimpact resistant grade of glass.  \r\n \r\n• Stained glass smashed on front door due to violent door slamming. \r\n \r\n• Door to garage ripped off hinges. \r\n \r\n• I need a heavy duty continence mattresses as I destroy normal ones with urine. ', 'text', 1, '2023-09-28 06:13:00', '2023-09-28 06:13:00'),
(48, 8, '', 'Do you require any assistive technology for self-management which has not already \r\npreviously been described in this questionnaire??', '', 'checkbox', 1, '2023-09-28 06:13:00', '2023-09-28 06:13:00'),
(49, 8, 'If you want to learn more about how the NDIS funds assistive technology, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a> \r\nto read their Operational Guidelines.', 'What assistive technology for self-management do you require, why, and how much will it cost? ', '“In accordance with my positive behaviour support plan, I need a special seatbelt to ensure that I \r\ncannot leave the car whilst it is moving”. ', 'cost', 2, '2023-09-28 06:15:40', '2023-09-28 06:15:40'),
(50, 8, '', 'Is this a new item for you, or are you looking to fund a replacement?', '', 'radio', 3, '2023-09-28 06:15:40', '2023-09-28 06:15:40'),
(51, 8, '', 'What is the reason this item needs to be replaced?', '', 'skipable', 4, '2023-09-28 06:18:37', '2023-09-28 06:18:37'),
(52, 8, '', 'As this assistive technology falls within the “mid cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from an assistive technology adviser \r\nconfirming that you need the technology and the reasons for this.  That evidence must tell NDIS:  \r\n• the assistive technology you need  \r\n• why it is the best value \r\n• how it will help with your needs and goals \r\n• an estimate of how much the assistive technology costs.   \r\n \r\nPlease confirm the name of your expert and the date of their letter or report.As this assistive technology falls within the “mid cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from an assistive technology adviser \r\nconfirming that you need the technology and the reasons for this.  That evidence must tell NDIS:  <br>\r\n• the assistive technology you need  <br>\r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs.   <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'skipable', 5, '2023-09-28 06:21:01', '2023-09-28 06:21:01'),
(53, 8, '', 'As this assistive technology falls within the “high cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from a qualified assistive technology assessor \r\nsuch as an allied health practitioners, orientation and mobility specialist, or professional \r\nrehabilitation engineers confirming that you need the technology and the reasons for this.  That \r\nevidence must tell NDIS:  <br>\r\n• the assistive technology you need  <br>\r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs.   <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'text', 6, '2023-09-28 06:21:01', '2023-09-28 06:21:01'),
(54, 8, '', 'As this assistive technology falls within the “high cost” category, you will also need to \r\nsupply NDIS with a quote.  Please confirm details of your quote (supplier / date / amount):', '', 'text', 7, '2023-09-28 06:23:27', '2023-09-28 06:23:27'),
(55, 9, 'Learning should not stop when you leave school.  As such, the NDIS will fund \r\nvarious work or education supports which relate to your disability.  NDIS will generally fund supports \r\nto help you build your basic work skills, or personal care during work or study.  They will not \r\nnormally fund things like meals at work, changes to your work building, general equipment for work \r\nor study, or general work-related training.   \r\n<br>\r\nIf you want to learn more about how the NDIS funds work and study supports, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a>\r\n to read \r\ntheir Operational Guidelines. <br>\r\nIf you have no issues with learning / employment, you can skip to the next section <a href=\"/skipSection\">here</a>', 'What are your goals relating to learning and employment?  [Note:  Your goals are a crucial \r\npart of your NDIS Reassessment.  Make sure you properly describe your goals related to learning and \r\nemployment.  NDIS will not provide funding unless your requirements are sufficiently linked to those \r\ngoals.  Also make sure that you indicate the time frame within which you wish to achieve each goal]', '“To be able to attend a day program when I leave school” \r\n“To be able to participate in [art] / [music] / [other] classes when I leave school” \r\n“To be able to start working part time at a sheltered workshop, within 6 months of leaving school” \r\n“To continue to develop my reading and writing skills in the two years after I have left school” \r\n“To have appropriate skills and supports to participate in the workforce and keep a job, over the long \r\nterm”.', 'text', 1, '2023-09-28 06:30:38', '2023-09-28 06:30:38'),
(56, 9, '', 'Do you intend to seek employment upon leaving school? What\'s the nature of your job or \r\nthe job that you are seeking? Are you looking part-time, full-time, or casual work?', '“When I leave school I hope to build my skills so that I can eventually work two mornings a week in a \r\nlocal café”. \r\n \r\n“When I leave school I intend to apply for a job in a sheltered workshop, 5 mornings a week.” \r\n \r\n“Due to my severe autism and intellectual disability, I have no realistic prospect of ever finding \r\nwork.”', 'text', 2, '2023-09-28 06:30:38', '2023-09-28 06:30:38'),
(57, 9, '', 'What do want to learn (or continue to learn) when you leave school? ', '“I want to continue learning life skills when I leave school.  In particular, I want to learn how to cook \r\na meal with support, and how to wash my clothes and clean my home with support.”', 'text', 3, '2023-09-28 06:34:16', '2023-09-28 06:34:16'),
(58, 9, '', ' Describe specific challenges you face in your learning or employment. This could include \r\ncognitive challenges, physical barriers, sensory issues, or social and emotional challenges.', '“My intellectual disability means that it takes a very long time for me to learn new skills.  I cannot \r\nread or write, and I have little or no understanding of complex concepts or instructions.” \r\n“Getting to classes is hard due to my restricted movement.  My challenges with hand movements \r\nalso make it hard for me to write or take notes in class.  I use a wheelchair to get around which \r\nrequires some study or work spaces to be modified”. ', 'text', 4, '2023-09-28 06:34:16', '2023-09-28 06:34:16'),
(59, 9, '', 'Clearly specify the kind of supports that would help you with your learning or \r\nemployment. This might include workplace modifications, learning aids, transport assistance, or \r\ntherapeutic support.', '“As I use a wheelchair, I require an adjustable desk with a trackball mouse and a gaming keyboard to \r\nto study at a computer. The gaming keyboard allows me to save shortcuts on the device so that I can \r\nwork more efficiently”.  \r\n \r\n“If I am to attend any classes, I need a support worker to help me to eat and go to the toilet”.  ', 'text', 5, '2023-09-28 06:36:24', '2023-09-28 06:36:24'),
(60, 9, '', 'Do you require any assistive technology for learning or employment which has not \r\nalready previously been described in this questionnaire??', '', 'checkbox', 6, '2023-09-28 06:36:24', '2023-09-28 06:36:24'),
(61, 9, 'If you want to learn more about how the NDIS funds assistive technology, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a>\r\nto read their Operational Guidelines.', 'What assistive technology for learning or employment do you require, why, and how much will it \r\ncost?', '“Trackball mouse as I can’t grab and click a normal mouse – about $80” \r\n \r\n“Gaming keyboard to allow me to save shortcuts – about $300” \r\n \r\n“Adjustable desk to accommodate my wheelchair – about $600” ', 'cost', 7, '2023-09-28 06:38:08', '2023-09-28 06:38:08'),
(62, 9, '', 'Is this a new item for you, or are you looking to fund a replacement?', '', 'radio', 8, '2023-09-28 06:38:08', '2023-09-28 06:38:08'),
(63, 9, '', 'What is the reason this item needs to be replaced? ', '', 'skipable', 9, '2023-09-28 06:41:38', '2023-09-28 06:41:38'),
(64, 9, '', 'As this assistive technology falls within the “mid cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from an assistive technology adviser \r\nconfirming that you need the technology and the reasons for this.  That evidence must tell NDIS:<br>\r\n• the assistive technology you need  <br>\r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs.   <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'skipable', 10, '2023-09-28 06:41:38', '2023-09-28 06:41:38'),
(65, 9, '', ' As this assistive technology falls within the “high cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from a qualified assistive technology assessor \r\nsuch as an allied health practitioners, orientation and mobility specialist, or professional \r\nrehabilitation engineers confirming that you need the technology and the reasons for this.  That \r\nevidence must tell NDIS: <br> \r\n• the assistive technology you need  <br>\r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs.   <br>\r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'text', 11, '2023-09-28 06:43:15', '2023-09-28 06:43:15');
INSERT INTO `questions` (`id`, `heading_id`, `guidance_notes`, `questions`, `instructions`, `input_type`, `sequence`, `created_at`, `updated_at`) VALUES
(66, 9, '', 'As this assistive technology falls within the “high cost” category, you will also need to \r\nsupply NDIS with a quote.  Please confirm details of your quote (supplier / date / amount):', '', 'text', 12, '2023-09-28 06:44:35', '2023-09-28 06:44:35'),
(67, 10, 'Notes:  It is important to let the NDIS know about the issues and challenges that you face \r\nfrom the perspective of personal care and living skills, and the support that you need to assist with \r\nthose challenges.   \r\n <br>\r\nIf you have no issues with self-care, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'What are your goals relating to self-care, health, physical capacity and wellbeing?  [Note:  \r\nYour goals are a crucial part of your NDIS Reassessment.  Make sure you properly describe your goals \r\nrelated to self-care, health, physical capacity and wellbeing.  NDIS will not provide funding unless \r\nyour requirements are sufficiently linked to those goals.  Also make sure that you indicate the time \r\nframe within which you wish to achieve each goal] ', '“To be able to use my right arm within the next 6 months” \r\n“To attend the gym at least once per week, within 6 months” \r\n“To improve the functionality in my legs within the next 12 months” \r\n“To lose weight on a sustainable basis over the next 12 months” \r\n“To improve my fine motor skills over the next two years” \r\n“To improve my diet through learning to tolerate a broader range of foods, over the next two years” \r\n“To improve my health and fitness over the long term” \r\n“To stay mobile for as long as I can, over the long term” \r\n“To eat a balanced and healthy diet over the long term”', 'text', 1, '2023-09-28 06:44:35', '2023-09-28 06:44:35'),
(68, 10, '', 'Describe the issues and challenges that you have with your personal care and living skills.  \r\nPlease address your routines both in the morning and in the evening, and the support that you \r\nrequire. ', '“I need assistance with a hoist to get in and out of bed” \r\n“I need assistance with cleaning my bed as I am generally incontinent during the night” \r\n“I need assistance with showering, toileting, brushing my teeth, applying deodorant, dressing, and all \r\naspects my morning personal care routine.  This assistance entails [provide details].” \r\n“I need full assistance with all aspects of my morning personal care routine, including [provide \r\ndetails]” \r\n \r\n“I am unable to follow verbal or physical prompting in the shower and I require my body and hair to \r\nbe washed for me by another person. I also require another person to dry my body after a shower. “  \r\n“I require another person to brush my teeth and hair, put deodorant on, and look after all other \r\npersonal hygiene requirements for me.”   \r\n“I require full support after bowel motions and verbal and physical prompting to wash hands.  I am \r\ndoubly incontinent. “   \r\n“I am unable to engage in any domestic/living tasks in the home.  In particular [provide further \r\ndetails]”  \r\n“I require skill building supports from an occupational therapist to begin to engage in personal care \r\ntasks. The occupational therapist will need to work closely with other therapists such as my \r\nbehaviour and speech therapist to ensure that I am able to begin developing new skills safely”', 'text', 2, '2023-09-28 06:46:36', '2023-09-28 06:46:36'),
(69, 11, ' Mealtimes, diets, and eating may present their own challenges for you.  This \r\nsection covers these things. \r\n \r\nThe NDIS will generally fund equipment for a HEN or PEG (feeding tube) and associated supports. \r\n <Br>\r\nThe NDIS may also fund a dietitian to create and review a nutritional meal plan for you.  If you don’t \r\nhave family, friends or carers help or they can’t help you to prepare meals, they may fund support to \r\nhelp you. They will only do this if your disability affects your ability to understand healthy eating or to \r\neat, cook or prepare meals on your own.  They will also generally fund training for the people who \r\nhelp you with your nutrition support needs if your disability means you have trouble looking after \r\nyour nutrition yourself.  Training could be for a family member, carer, or support worker.  The training \r\nmay include how to help you follow a nutritional meal plan.  Or it could be a nurse to train a support \r\nworker in how to help with a HEN plan.    \r\n <br>\r\nIf you want to learn more about how the NDIS funds nutrition supports including meal preparation, \r\nclick <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a>\r\n to read their Operational Guidelines.\r\n<br>\r\nIf you have no issues with meals, eating, and / or drinking, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'Do you have physical difficulties with eating, or behavioural issues associated with food \r\nand mealtimes?  If so, please describe these difficulties and how they affect you and the family.  \r\nPlease also describe the support that you need with eating. ', '“I am unable to hold a knife and fork.  I require somebody to cut up my food and then feed it to me, \r\nmouthful by mouthful.   This can make family mealtimes difficult, as one person needs to focus \r\nprimarily on me.  I therefore need one on one support at mealtimes.” \r\n“I am at increased risk of choking due to [dysphagia] / [the side effects of medications]/[decreased \r\nprotective airway reflexes]/[inability to swallow certain food textures].  This means that my family \r\nneeds to be hyper-vigilant at mealtimes, with me needing one-on-one support and assistance.” \r\n“I will attempt to help with cooking sausages but will often attempt to eat the raw sausages from the \r\npan, and do not understand they need to be cooked.  I will also attempt to tip all the cooking oil into \r\nthe pan and there is a high-risk that the hot oil will ‘splatter’ onto my hands, wrists, face.” \r\n“I will throw food onto the floor when I don’t want to eat something particular.  I will also pick up \r\nand eat food off the floor / ground if I see a desirable food item.  I will also take food from other \r\npeople’s plates if sitting nearby and also can approach people who are eating and take their food if I \r\nfind it desirable.  For all of these reasons, I need one on one support during mealtimes.\"', 'text', 1, '2023-09-28 06:47:28', '2023-09-28 06:47:28'),
(70, 11, '', 'Do you need support with food preparation?  Or indeed, are you able to prepare food at \r\nall?  Please describe these difficulties, how they affect you and the family, and the support that you \r\nneed.', '“I can tell someone what I want made, but need one on one assistance with shopping and cooking” \r\n \r\n“When shopping for groceries or other necessities my household, I require full support from another \r\nperson. I need the assistance to transfer in and out of my accessible vehicle, be fastened in the \r\nvehicle, transported to the shopping centre/grocery store, to reach items required in the store, and \r\nto be transported and to carry my groceries home. I participate in shopping more than once per \r\nweek.  I make all decisions about the items I would like to purchase.”  \r\n“I love assisting in the kitchen, but I can’t complete all steps in a recipe. I would love to be able to \r\ncook my own meals independently. I need funding for a support worker and Occupational Therapist \r\nto learn how to cook safely.” ', 'text', 2, '2023-09-28 06:50:14', '2023-09-28 06:50:14'),
(71, 11, '', 'Do you need support with nutrition and meal planning?  In particular, could a nutritionist \r\nassist and why?', '\"I have trouble understanding what meals are healthy. I need a dietician to plan my meals for me to  ensure I maintain good nutrition”.  “I often eat too much, so a nutritionist could help me plan more filling meals to control my food  intake while maintaining satisfaction”.', 'text', 3, '2023-09-28 06:51:13', '2023-09-28 06:51:13'),
(72, 12, 'If you have no issues during the night, you can skip to the next section <a href=\"/skipSection\">here</a>.\r\n\r\n', 'Describe your nighttime routine and any challenges that this brings.  In particular, do you \r\ntend to wake up during the night, or very early in the morning?  If so, what do you need and how \r\ndoes this affect you and others?', '“Usually once a week I will wake as early as 4am.  I will come in and pull the doona off my father and \r\nensure that my father gets up.  I then want to start my morning routine as per usual, but this is three \r\nhours early.  I become very stressed once I have finished my morning routine as I then have to wait a \r\nnumber of hours to go to school start my day.  This leads to a build-up of confusion and anxiety, \r\nwhich can sometime manifest in self-harm or violence towards others.”   \r\n \r\n“When I soil myself in the night, it results in faeces being smeared all over walls, clothing, bed linen \r\netc.  This occurs as I attempt to clean up after myself without going to get support.”  \r\n \r\n \r\n“I sometimes like to go out to socialise at night. I require funding for a support worker to assist me \r\nwith my night routine including getting into bed as my parents are already asleep when I get home”.', 'text', 1, '2023-09-28 06:52:17', '2023-09-28 06:52:17'),
(73, 12, '', 'Do you require any assistive technology for self-care which has not already previously \r\nbeen described in this questionnaire??', '', 'checkbox', 2, '2023-09-28 06:52:17', '2023-09-28 06:52:17'),
(74, 13, 'Guidance note:  If you want to learn more about how the NDIS funds assistive technology, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a> \r\nto read their Operational Guidelines.', 'What assistive technology for self-care do you require, why, and how much will it cost?', '“I need a commode shower chair to allow me to sit down while I’m taking a shower as I cannot stand \r\nfor that long. A good quality chair rises, lowers and tilts, which prevents support workers assisting \r\nme from injuring their back while bending over to help me shower – cost is approximately $12,000”.', 'cost', 1, '2023-09-28 06:54:11', '2023-09-28 06:54:11'),
(75, 13, '', 'Is this a new item for you, or are you looking to fund a replacement?', '', 'radio', 2, '2023-09-28 06:56:01', '2023-09-28 06:56:01'),
(76, 13, '', 'What is the reason this item needs to be replaced?', '', 'skipable', 3, '2023-09-28 06:56:01', '2023-09-28 06:56:01'),
(77, 13, '', 'As this assistive technology falls within the “mid cost” category, you will need to supply \r\nNDIS with written evidence (such as a letter or report) from an assistive technology adviser \r\nconfirming that you need the technology and the reasons for this.  That evidence must tell NDIS:  <br>\r\n• the assistive technology you need  <br>\r\n• why it is the best value <br>\r\n• how it will help with your needs and goals <br>\r\n• an estimate of how much the assistive technology costs. <br>  \r\n \r\nPlease confirm the name of your expert and the date of their letter or report.', '', 'skipable', 4, '2023-09-28 06:58:12', '2023-09-28 06:58:12'),
(78, 13, '', 'As this assistive technology falls within the “high cost” category, you will need to supply \nNDIS with written evidence (such as a letter or report) from a qualified assistive technology assessor \nsuch as an allied health practitioners, orientation and mobility specialist, or professional \nrehabilitation engineers confirming that you need the technology and the reasons for this.  That \nevidence must tell NDIS: <br> \n• the assistive technology you need <br> \n• why it is the best value <br>\n• how it will help with your needs and goals <br>\n• an estimate of how much the assistive technology costs.   <br>\n \nPlease confirm the name of your expert and the date of their letter or report.', '', 'text', 5, '2023-09-28 06:58:12', '2023-09-28 06:58:12'),
(81, 13, '', 'As this assistive technology falls within the “high cost” category, you will also need to \r\nsupply NDIS with a quote.  Please confirm details of your quote (supplier / date / amount): ', '', 'text', 6, '2023-09-28 06:59:56', '2023-09-28 06:59:56'),
(83, 14, 'The NDIS will fund short term accommodation or “STA” where this is considered \r\n“reasonable and necessary”.  STA refers to accommodation for people with disabilities for short \r\nperiods, which could range from one night to two weeks. It often includes respite care, allowing \r\nparticipants to temporarily reside outside their usual living arrangement and can give regular \r\ncaregivers a break. \r\nSome of the reasons why NDIS might fund STA are as follows: <br>\r\n• If the young adult\'s primary caregiver needs temporary relief due to unforeseen \r\ncircumstances or to prevent long-term care fatigue, the NDIS may consider funding STA. <br>\r\n \r\n• If STA will aid the young adult to build their capacity and skills. For example, if a young adult <br>\r\nis transitioning to living independently and needs short-term stays to adjust.<br> \r\n• If the accommodation provides therapeutic or behavioral supports essential for the young \r\nadult’s wellbeing. <br>\r\n• If there are concerns about the young adult’s safety in their current living arrangement, even \r\nif temporary, STA may be funded as a protective measure. <br>\r\nIf you want to learn more about how the NDIS funds STA, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a> to read their Operational \r\nGuidelines.\r\nIf you do not require overnight respite or short term accommodation, you can skip to the next \r\nsection <a href=\"/skipSection\">here</a>.', 'When do you require STA?  And for how long?  For example, do you require overnight \r\nrespite on certain days of the week, and / or for certain blocks of time (e.g. two weeks during the \r\nsummer holidays).  Please describe your requirements in detail. ', '“My parents go away on holiday for two weeks per year, and it is not possible for them to take me as \r\nI become too anxious when I am out of my routine.  I will need STA for that time.” \r\n“To give my parents some respite, and for me to have a break from them, I require short term \r\naccommodation two nights a week on weekdays”.', 'text', 1, '2023-09-28 07:24:02', '2023-09-28 07:24:03'),
(84, 14, '', 'Are there regular times when a family member or other informal career is unavailable? If \r\nso, specify the length of time and regularity of this occurring.', '“I live with my mum who is my primary career, and she needs to travel frequently for work, sometimes \r\novernight.  This means that I need short term accommodation roughly 5 nights per month.”', 'text', 2, '2023-09-28 07:24:03', '2023-09-28 07:24:03'),
(85, 14, '', 'Do your parents or primary carers have any holidays or breaks planned?  If so, when and \r\nfor how long?', '“My parents need to go overseas to visit elderly relatives.  They intend to do this for two weeks in \r\nMarch next year”', 'text', 3, '2023-09-28 07:29:54', '2023-09-28 07:29:54'),
(86, 14, '', 'Will respite care assist with the mental or physical health of your parent or other primary \r\ncarer?  Why and how?', '“My parents can become exhausted providing me with full time care.  In addition, my frequent \r\nviolence towards myself and my family members takes an emotional and physical toll.  They would \r\ngreatly benefit from one night per week of overnight respite.”', 'text', 4, '2023-09-28 07:29:54', '2023-09-28 07:29:54'),
(87, 14, '', 'Would respite care help you to achieve your goals?  For example, learning to live with \r\nother people for when you eventually leave home?', '“Ultimately, I would like to move into Specialist Disability Accommodation.  However, I will need to \r\ngain various skills before I can successfully make that transition.  For example, learning to live with \r\nother people and share facilities.  Having STA over the next few years will help me to learn those \r\nskills and greatly assist with my transition to living in my own home”.', 'text', 5, '2023-09-28 07:31:42', '2023-09-28 07:31:42'),
(88, 15, 'Particularly now that you are leaving school, you may need various ongoing and / or \r\nadditional therapies to help you rise to the new challenges and opportunities that are ahead in the \r\nadult world.   Those therapies might include physiotherapy, occupational therapy, speech therapy, \r\nphysical therapy, behavioural therapy, vocational rehabilitation, and others.  The extent of NDIS \r\nfunding for therapies will depends on your unique needs and goals.  <br> \r\nIf you do not require any therapies, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'Do you require occupational therapy (OT)?  [Note:  OT can support school leavers in \r\nenhancing daily living skills, vocational skills, and independence. This might include functional \r\nassessments, adaptive equipment recommendations, and strategies for managing tasks in various \r\nnew settings such as an adult centre].', '', 'swap', 1, '2023-09-28 07:33:18', '2023-09-28 07:33:18'),
(89, 15, '', 'What OT do you require, and why', ' “I require an occupational therapist to assist in  the transition planning process for moving from school to adult life. This should include assessing my  readiness for attending an adult centre, providing recommendations for reasonable  accommodations or supports, and helping to develop strategies for managing the transition  effectively.   If this assistance is not provided, then I will likely struggle to participate in an adult  centre because [insert].  I also need an OT to write reports for the following devices: [insert]”] ', 'text', 2, '2023-09-28 07:33:18', '2023-09-28 07:33:18'),
(90, 15, '', 'Do you require speech therapy?  [Note:  If you have communication difficulties, a speech \ntherapist can help in refining speech, understanding, and non-verbal communication methods, which \ncan be critical in employment or higher education settings].', '', 'swap', 3, '2023-09-28 07:44:19', '2023-09-28 07:44:19'),
(91, 15, '', 'What speech therapy do you require,  and why?', '\"Yes. I’m concerned  that my legs are losing flexibility, strength and range of movement and that I’m unable to exercise  regularly in any way. Having regular access to physical therapy allows me to maintain leg flexibility,  leg strength for weight bearing, improve circulation, digestion, mood, and sleep.\"“I require a speech therapist to  provide training on functional communication skills that are necessary for adult life.  These include  skills like making phone calls, asking for assistance, navigating public transport, or communicating in  a workplace environment”.', 'text', 4, '2023-09-28 07:45:33', '2023-09-28 07:45:33'),
(92, 15, '', 'Do you require physical therapy? [Note: if you have physical disabilities you might benefit \nfrom therapy to improve mobility, strength, and endurance, ensuring they can navigate diverse \nenvironments.', '', 'swap', 5, '2023-09-28 07:46:23', '2023-09-28 07:46:23'),
(93, 15, '', 'What physical  therapy do \nyou require, and why?school leavers, especially if you are heading to environments where networking or teamwork is \nessential]', ' Yes. I’m concerned  that my legs are losing flexibility, strength and range of movement and that I’m unable to exercise  regularly in any way. Having regular access to physical therapy allows me to maintain leg flexibility,  leg strength for weight bearing, improve circulation, digestion, mood, and sleep.', 'text', 6, '2023-09-28 07:47:48', '2023-09-28 07:47:48'),
(94, 15, '', 'Do you require psychological or counselling services?  [Note: Transitioning from school can \nbe daunting. Psychological services can offer coping strategies, address mental health concerns, and \nprovide support for building social and emotional skills].', '', 'swap', 7, '2023-09-28 07:47:48', '2023-09-28 07:47:48'),
(95, 15, '', 'What psychological or counselling services do you require, and why?', '“I am having trouble with understanding my place  in the world, primarily due to my disability. I often struggle with forming personal relationships, as I  communicate in an alternative way, and this has caused me some self-confidence issues that I would  like to work through with a psychologist”.', 'text', 8, '2023-09-28 07:50:13', '2023-09-28 07:50:13'),
(96, 15, '', 'Do you require behaviour therapy?  [Note:  For individuals with behavioural concerns, \nspecialised therapy can assist in developing positive behaviours, which can be crucial in workplace or \ncommunity settings].  ].', '', 'swap', 9, '2023-09-28 07:53:37', '2023-09-28 07:53:37'),
(97, 15, '', 'What \npsychological or counselling services do you require, and why?', '“I require a behaviour management practitioner to prepare a positive \nbehaviour support plan for provision to prospective adult centres and support workers”.', 'text', 10, '2023-09-28 07:53:37', '2023-09-28 07:53:37'),
(98, 15, '', 'Do you require social skills training?  [Note: Enhancing social interactions can be vital for \nschool leavers, especially if you are heading to environments where networking or teamwork is \nessential]', '', 'swap', 11, '2023-09-28 07:56:57', '2023-09-28 07:56:57'),
(99, 15, '', 'What vocational rehabilitation \nservices do you require, and why?', ' I am \nlooking for a job where I will be interacting with colleagues and clients. I often get anxious talking to \nnew people and I want to improve my social skills so that I am more comfortable talking to everyone \nin the workplace. ', 'text', 12, '2023-09-28 07:56:57', '2023-09-28 07:56:57'),
(100, 15, '', ' Do you require assistive technology training?  [Note:  if you are reliant on technology for \ncommunication, mobility, or daily tasks, this training ensures that you can use devices efficiently in \ndiverse settings]', '', 'swap', 13, '2023-09-28 08:02:42', '2023-09-28 08:02:42'),
(101, 15, '', 'What assistive \ntechnology training do you require, and why?.', 'I am moving into a new house which has home assistive technology. I want training from an \noccupational therapist for myself and my support workers to ensure everyone I and my workers are \nsafe in my home.', 'text', 14, '2023-09-28 08:02:42', '2023-09-28 08:02:42'),
(102, 15, '', ' Do you require any other therapies not mentioned above?', '', 'swap', 15, '2023-09-28 05:39:49', '2023-09-28 05:39:49'),
(103, 15, '', 'What therapies do you require, and why?', '', 'text', 16, '2023-09-28 08:07:09', '2023-09-28 08:07:09'),
(104, 16, 'Remember that NDIS will only fund modifications related to your disability.  As such, they will \r\ngenerally not fund things like cosmetic features or general everyday maintenance.   \r\n<br>\r\nA report from an Occupational Therapist or other professional, explaining why you need the \r\nmodification(s) is generally very useful.  Indeed, it is essential if the cost of the modifications is \r\n$10,000 or more.  You should also get a quote for the proposed modification(s), particularly if they \r\nare expensive.   \r\n<br>\r\nIf you live in community or public housing, a group home, or Specialist Disability Accommodation, \r\nthe NDIA will generally not fund modifications. \r\n<br>\r\nIf you are looking to buy a home and want the NDIS to fund modifications, speak with them first \r\nbefore signing the sale contract.\r\n<br>\r\nIt is important that you get all necessary approvals for your proposed home modifications and \r\nsubmit these to the NDIS as part of the documentation for your Reassessment.  Necessary approvals \r\nmay include approval from the homeowner (if not yourself) or body corporate.    \r\n<br>\r\nIf you want to apply for funding for home modifications, we recommend that you click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology\">here</a> to read \r\ntheir Operational Guidelines. \r\n<br>\r\nIf you do not require any home modifications, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'Please describe your current living arrangements.  For example, do you live with your \r\nparents, or rent your home?', '', 'text', 1, '2023-09-28 08:09:45', '2023-09-28 05:39:49'),
(105, 16, '', 'How long do you intend to live in your current home?  And, if you only intend to live there \r\nfor a short period of time, why should the NDIS fund modications? ', '', 'text', 2, '2023-09-28 05:39:49', '2023-09-28 05:39:49'),
(106, 16, '', 'What home modifications do you require, and why?  How much will those modifications \r\ncost?  Please also explain why any cheaper alternatives may not be suitable.', '“Ramps are required to replace or supplement stairs for easier access to the home in the following \r\nplaces:[insert]”.   \r\n \r\n“Handrails are required along corridors and on walls to provide support with balance issues, \r\nthroughout the house.  This will cost $[X] based on a quote that I have received from [insert]”. \r\n \r\n“The installation of roll-in showers, grab bars, and height-adjustable sink counters are required in \r\nour downstairs bathroom to make it accessible.  This will cost $[X] based on a quote that I have \r\nreceived from [insert]”. \r\n \r\n“In our kitchen we need lowered countertops and sinks, pull-down shelving, and front control \r\nappliances.  This will cost $[X] based on a quote that I have received from [insert]”.', 'text', 3, '2023-09-28 08:12:30', '2023-09-28 08:12:30'),
(107, 17, 'FYI, the NDIS may potentially fund various supports such as vehicle modifications, \r\nadditional insurance premiums for modified vehicles, any additional specialised driving lessons due \r\nto your disability, or assessment of modifications required if you are a passenger in the car.   \r\n<br>\r\nIf you want to learn more about how the NDIS funds vehicle modifications and driving supports, click <a href=\"https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/vehicle-modifications-and-driving-supports\"></a> to read their Operational Guidelines.\r\n<br>\r\nIf you do not require any vehicle modifications or driving supports, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'Do you require changes to be made to a vehicle so you can drive it or be a passenger in it? ', '', 'swap', 1, '2023-09-28 05:39:49', '2023-09-28 05:39:49'),
(108, 17, '', 'What changes do you need to be \r\nmade, why do you need those changes ,and what is the likely cost?', '“I need a row 2 / row 3 conversion in our family car, to fit my wheelchair.  The likely cost is [insert]”', 'text', 2, '2023-09-28 05:07:05', '2023-09-28 08:18:31'),
(109, 17, '', ' Do you require help to purchase a vehicle that has already been modified (ie funding the \r\nvalue of the modifications)?', '', 'swap', 3, '2023-09-28 08:24:41', '2023-09-28 08:24:41'),
(110, 17, '', 'What modifications do you need, why do you need them, and what is the value of the modifications (taking into account wear and tear) and the cost of the entire modified vehicle?', 'I would like to buy a second hand people mover which has already been configured for a wheelchair.  \r\nThe cost of such a vehicle over a normal unmodified vehicle is roughly $[insert].', 'text', 4, '2023-09-28 08:24:41', '2023-09-28 08:24:41'),
(111, 17, '', 'Do you require a driver trained occupational therapist assessment and a driving instructor \r\nfor the onroad part of the assessment, if you plan to drive the vehicle?', '', 'swap', 5, '2023-09-28 08:26:35', '2023-09-28 08:26:35'),
(112, 17, '', 'Why do you need these supports ,and what is the likely cost?', '', 'text', 6, '2023-09-28 08:26:35', '2023-09-28 08:26:35'),
(113, 17, '', 'Do you require specialised driving lessons ', '', 'swap', 7, '2023-09-28 08:29:49', '2023-09-28 08:29:49'),
(114, 17, '', 'Why do you need this support ,and what is the likely cost?', '', 'text', 8, '2023-09-28 08:29:49', '2023-09-28 08:29:49'),
(115, 17, '', 'Do you require assessment and trial of passenger modifications? ', '', 'swap', 9, '2023-09-28 08:31:51', '2023-09-28 06:09:20'),
(116, 17, '', 'Why do you need this support ,and what is the likely cost?', '', 'text', 10, '2023-09-28 08:31:51', '2023-09-28 08:31:51'),
(117, 17, '', 'Do you require help with extra insurance costs because your vehicle has been modified? ', '', 'swap', 11, '2023-09-28 08:36:18', '2023-09-28 08:36:18'),
(118, 17, '', 'Why do you need this help ,and what \r\nis the cost of the extra premium over and above the normal insurance cost for an unmodified \r\nvehicle?', '', 'text', 12, '2023-09-28 08:36:18', '2023-09-28 08:36:18'),
(119, 17, '', 'Do you require help with an engineering certificate or authorisation report you need to \r\nregister a vehicle with modifications?', '', 'swap', 13, '2023-09-28 08:37:53', '2023-09-28 08:37:53'),
(120, 17, '', 'Why do you need this help, and what is the likely cost?', '', 'text', 14, '2023-09-28 08:37:53', '2023-09-28 08:37:53'),
(121, 17, '', ' Do you require help with your transport needs while your vehicle is being modified? ', '', 'swap', 15, '2023-09-28 08:40:04', '2023-09-28 08:40:04'),
(122, 17, '', 'Why do you need this help, how long \r\nfor, and what is the likely cost?', '', 'text', 16, '2023-09-28 08:40:04', '2023-09-28 08:40:04'),
(123, 17, '', 'Do you require help with the costs of maintenance or repair of the modifications? ', '', 'swap', 17, '2023-09-28 08:41:30', '2023-09-28 08:41:30'),
(124, 17, '', 'Why do you need this help, and what is the likely cost?', '', 'text', 18, '2023-09-28 08:42:23', '2023-09-28 08:42:23'),
(125, 17, '', 'Do you require an inspection for a vehicle condition report for a vehicle older than 5 years \r\nand no longer under warranty to confirm it is safe and reliable for daily use, and suitable to modify? ', '', 'swap', 19, '2023-09-28 08:43:00', '2023-09-28 08:43:00'),
(126, 17, '', 'Why do you need this inspection ,and \r\nwhat is the likely cost?', '', 'text', 20, '2023-09-28 08:43:00', '2023-09-28 08:43:00'),
(127, 18, 'For young adults who are leaving a Special Developmental School or a Specialist School, having a \r\ngood support coordinator can make all the difference.  If you don’t already have one, then we \r\nstrongly recommend that you apply for NDIS funding to get funding for support coordination.  <br>\r\nSupport coordination helps you to make the best use of your budget and the supports in your plan, \r\nwhich can be vital at this important life stage where you will likely have a bigger budget to manage \r\nand a range of new services that will be required.  <br>\r\nIf you want to learn more about support coordination, click <a href=\"https://www.ndis.gov.au/participants/using-your-plan/who-can-help-start-your-plan/support-coordination\"></a> <br>\r\nIf you do not require funding for support coordination, you can skip to the next section <a href=\"/skipSection\">here</a>\r\n', 'Do you need support coordination included in your plan for when you leave school and, if so, why?', '“I need support coordination in my plan.  I haven’t had it in my plan to date, as my parents have been \r\nable to cope.  However, now that I am leaving school there is a new level of complexity and more \r\ntime required to be invested.  I also expect to have a bigger NDIS budget that will need to be \r\nappropriately managed.  I will also need support with understanding my post-school options, \r\nparticularly with recommendations for adult centres and then liasing with those adult centres and \r\nchoosing the right one for me.  Finally, I will likely need more support workers at home, who will \r\nneed to be found, retained, and managed.” \r\n“I need support coordination in my plan for when I need school.  I am conscious that my goals may \r\nchange during this important life stage, and I may need help with articulating those changing goals.  I \r\nam also likely to need various capacity building supports, such as speech therapy and OT, which were \r\npreviously provided by my school.  But now, I will need to find those services in the market and my \r\nparents don’t know how to do this or where to look.”', 'text', 1, '2023-09-28 09:09:00', '2023-09-28 09:09:00'),
(128, 19, 'The NDIS may potentially fund the following transport costs for school leavers: <br> \n• Level 1 - The NDIS will provide up to $1,606 per year (FY24 number) if you are not working, \nstudying, or attending day programs but are seeking to enhance their community access. <br>\n• Level 2 - The NDIS will provide up to $2,472 per year (FY24 number) if you are currently \nworking or studying part-time (up to 15 hours a week), participating in day programs and for \nother social, recreational or leisure activities. <br>\n \n• Level 3 - The NDIS will provide up to $3,456 per year (FY24 number) if you are currently \nworking, looking for work, or studying, at least 15 hours a week, and are unable to use public \ntransport because of their disability. \nPlus, in exceptional circumstances, you may potentially receive higher funding if you have either \ngeneral or funded supports in your plan to enable your participation in employment. <br>\nIf you want to learn more about funding for transport, click <a href=\"https://www.ndis.gov.au/participants/creating-your-plan/plan-budget-and-rules/transport-funding\">here</a>.\n<br>\nIf you do not require funding for transport, you can skip to the next section <a href=\"/skipSection\">here</a>', 'Are currently working, looking for work, or studying at least 15 hours per week and \r\nunable to use public transport because of your disability?  If yes, then you can ask for Level 3 Transport Funding.', '', 'swap', 1, '2023-09-28 09:25:02', '2023-09-28 09:25:02'),
(129, 19, '', 'Provide more information about your study / work (what, where, etc), and also the \r\nreasons why you cannot use public transport due to your disability.', '“When I leave school I will start work at a sheltered workshop every morning Monday to Friday (20 \r\nhours per week).  I am unable to use public transport because I am in a wheelchair and the relevant \r\nbus route does not provide accessible buses which accommodate wheelchair users”.', 'text', 2, '2023-09-28 09:25:32', '2023-09-28 09:25:32'),
(130, 19, '', 'Are you working or studying part time up to 15 hours per week and participating in other social, recreational or leisure activities (including day programs).  If yes, then you can ask for Level 2 \r\nTransport Funding.', '', 'swap', 3, '2023-09-28 09:26:40', '2023-09-28 09:26:40'),
(131, 19, '', 'Provide more information about your study / work (what, where, etc) and the day \r\nprograms, social, recreational or leisure activities in which you participate.', '“When I leave school I will work two mornings per week in a local café (6 hours per week).  On the \r\ndays where I am not working I will attend an adult centre for three full days per week.  On the \r\nafternoons when I am not working, I will engage in sporting activities such as swimming at the local \r\npool”.', 'text', 4, '2023-09-28 09:27:13', '2023-09-28 09:27:13'),
(132, 19, '', 'Are you not working, but looking to enhance your community access?  If yes, then you can ask for Level 1 Transport Funding.', '', 'swap', 5, '2023-09-28 09:31:41', '2023-09-28 09:31:41'),
(133, 19, '', 'Do any exceptional circumstances apply to you which justify you receiving greater than Level 3 transport funding?  If so, please provide details and indicate how much funding you need.  \r\n[You should only complete this section if you anticipate receiving supports in your plan to fund your \r\nparticipation in employment]. ', '“In the area where I live, it is remote and there is no accessible public transport.  This means that I \r\nwill need to take a taxi to work five days per week.” \r\n“I am unable to use public transport due to my intellectual disability.  Even if I am accompanied by a \r\nsupport worker, I can often become “triggered” by a noisy or crowded bus or train.  This is turn can \r\nlead me to become violent towards myself or others.” ', 'text', 6, '2023-09-28 09:31:41', '2023-09-28 09:31:41'),
(134, 20, 'Informal supports, such as family and friends, play an essential role in the lives of \r\npeople with disabilities. While you are transitioning into adulthood, these supports continue to be \r\nimportant. However, the nature of the support is likely to change.  Your parents might shift from \r\nproviding day-to-day care to being more of a coordinator, advocate, or mentor, helping you to \r\nnavigate your relationships with formal supports and advocating for your needs and rights.   \r\nAs you become an adult, there will be a shift in the tasks you are expected to handle. Just as non-\r\ndisabled 18-year-olds are typically expected to contribute to household chores such as cleaning, \r\nlaundry, and cooking, you with a disability may also be encouraged to take on such responsibilities as \r\nper your capacity. However, if your disability prevents you from carrying out these tasks, NDIS \r\nfunding can be utilized to ensure these activities are covered.', 'Who is in your current support network?', '“I live with my mum and dad, sister (aged 20) and brother (aged 15)  We have no other family \r\nsupport nearby.” \r\n“I live with my mum.  My parents are divorced and my dad lives two hours away.  I see him other \r\nweekend.  We have no other support from family or friends.”', 'text', 1, '2023-09-28 09:35:24', '2023-09-28 09:35:24'),
(135, 20, '', 'What are the current, or anticipated, limitations and constraints on their time? ', '“My dad works full time.  My mum cut back her working hours to support me, but for financial \r\nreasons she needs to go back to full time work when I leave school.  My sister works and is at \r\nuniversity full time, so has little time or capacity to assist.  My brother is at school and is too young to \r\nassist.”', 'text', 2, '2023-09-28 09:35:24', '2023-09-28 09:35:24'),
(136, 20, '', 'Are you able to contribute to household chores in a similar way to other young adults?  If not, why not?', '“I am unable to do any household chores without one-on-one supervision.  It is easier and quicker for my parents to attend to household chores than to supervise me to do them.”', 'text', 3, '2023-09-28 09:40:08', '2023-09-28 09:40:08'),
(137, 20, '', 'Do you require funding for assistance with household chores such as cleaning and \r\ngardening (if you are unable to contribute like any other school leaver, then we suggest you request \r\nsuch funding):?', '“Because I am unable to contribute to household tasks, I require third party support to help share my \r\nload as one of the adults in our house.  I need someone to do the cleaning once a week, and the gardening once a month.” ', 'text', 4, '2023-09-28 09:41:23', '2023-09-28 09:41:23'),
(138, 21, ' It is important that your family members tell the NDIS about the impact of your \r\ndisability upon them, and especially on your primary carer.  This section is their opportunity to tell \r\ntheir story and explain the impact that your disability has on their life.  They should provide as much \r\ndetail and specific examples as possible.  This section is important in order to highlight any impacts \r\non the carer’s own well-being, including physical, emotional, social, or financial strains, emphasising \r\nthe importance of additional support (particularly such as for respite or short term accommodation).  \r\nA well-structured and detailed carer\'s impact statement can influence the decisions made by the \r\nNDIS in terms of what support is provided and at what funding level. ', 'Please provide a carer’s impact statement from your primary carer or another family \r\nmember.  You can upload this as a separate Word document if you would like. ', '', 'file', 1, '2023-09-28 09:42:54', '2023-09-28 09:42:54'),
(139, 22, 'When you leave school, you are likely to require additional support during the days, \r\nparticularly during times when you were previously at school.  Please complete the table to below to \r\nindicate the days and hours during which you will require support.  Generally speaking, you are likely \r\nto require additional support for at least the hours that you were in school, maybe more.', '', '', 'table', 1, '2023-09-28 09:42:54', '2023-09-28 09:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `question_headings`
--

CREATE TABLE `question_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `sequence` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_headings`
--

INSERT INTO `question_headings` (`id`, `name`, `sub_heading`, `sequence`, `created_at`, `updated_at`) VALUES
(1, 'PART 1 – BACKGROUND', '', 1, '2023-09-27 10:44:25', '2023-09-27 10:44:25'),
(2, 'PART 2 – MOBILITY', '', 2, '2023-09-27 10:44:25', '2023-09-27 10:44:25'),
(3, 'PART 3 - COMMUNICATION', '', 3, '2023-09-27 10:45:19', '2023-09-27 10:45:19'),
(4, 'PART 4 – SOCIAL INTERACTION', '', 4, '2023-09-27 10:45:19', '2023-09-27 10:45:19'),
(5, 'PART 5 – SELF-MANAGEMENT', '', 5, '2023-09-27 10:46:33', '2023-09-27 10:46:33'),
(6, 'PART 5 – SELF-MANAGEMENT', '5.1. Behavioural vulnerabilities', 6, '2023-09-27 10:47:10', '2023-09-27 10:47:10'),
(7, 'PART 5 – SELF-MANAGEMENT ', '5.2 – Property damage', 7, '2023-09-27 10:48:31', '2023-09-27 10:48:31'),
(8, 'PART 5 – SELF-MANAGEMENT ', '5.3 – Assistive technology', 8, '2023-09-27 10:48:31', '2023-09-27 10:48:31'),
(9, 'PART 6 – LEARNING / EMPLOYMENT', '', 9, '2023-09-28 06:24:31', '2023-09-28 06:24:31'),
(10, 'PART 7 – SELF CARE', '7.1 – Personal care and living skills', 10, '2023-09-28 06:27:18', '2023-09-28 06:27:18'),
(11, 'PART 7 – SELF CARE', '7.2 – Meals, eating and drinking', 11, '2023-09-28 06:27:48', '2023-09-28 06:27:48'),
(12, 'PART 7 – SELF CARE', '7.3 :  During the night', 12, '2023-09-28 06:28:32', '2023-09-28 06:28:32'),
(13, 'PART 7 – SELF CARE', '7.4 :  Assistive technology ', 13, '2023-09-28 06:29:11', '2023-09-28 06:29:11'),
(14, 'PART 8 – OVERNIGHT RESPITE / SHORT TERM ACCOMMODATION ', '', 14, '2023-09-28 07:09:38', '2023-09-28 07:09:38'),
(15, 'PART 9 – NECESSARY THERAPIES', '', 15, '2023-09-28 07:15:57', '2023-09-28 07:15:57'),
(16, 'PART 10 – HOME MODIFICATIONS ', '', 16, '2023-09-28 07:15:57', '2023-09-28 07:15:57'),
(17, 'PART 11 – VEHICLE MODIFICATIONS AND DRIVING SUPPORTS', '', 17, '2023-09-28 07:17:15', '2023-09-28 07:17:15'),
(18, 'PART 12 – SUPPORT COORDINATION', '', 18, '2023-09-28 07:17:15', '2023-09-28 07:17:15'),
(19, 'PART 13 – TRANSPORT', '', 19, '2023-09-28 07:18:32', '2023-09-28 07:18:32'),
(20, 'PART 14 – SUPPORT NETWORK', '', 20, '2023-09-28 07:18:32', '2023-09-28 07:18:32'),
(21, 'PART 15 – FAMILY AND CARER IMPACT STATEMENT ', '', 21, '2023-09-28 07:21:14', '2023-09-28 07:21:14'),
(22, 'PART 15 – PROPOSED DETAILED SCHEDULE FOR WHEN YOU LEAVE SCHOOL ', '', 22, '2023-09-28 07:21:14', '2023-09-28 07:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `options` varchar(255) NOT NULL,
  `heading_id` bigint(20) UNSIGNED NOT NULL,
  `questions_id` bigint(20) UNSIGNED NOT NULL,
  `questions_sequence` varchar(1000) DEFAULT NULL,
  `after_replacement_ques` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `options`, `heading_id`, `questions_id`, `questions_sequence`, `after_replacement_ques`, `created_at`, `updated_at`) VALUES
(1, 'Yes', 2, 11, '7,8,9,10,11,12', '9,10,11,12', '2023-09-28 10:11:15', '2023-09-28 10:11:15'),
(2, 'Yes', 3, 22, '6,7,8,9,10,11', '8,9,10,11', '2023-09-28 10:11:15', '2023-09-28 10:11:15'),
(5, 'Yes', 4, 33, '6,7,8,9,10,11,12', '8,10,11,12', '2023-09-28 12:34:05', '2023-09-28 12:34:05'),
(6, 'Yes', 9, 60, '7,8,9,10,11,12', '9,10,11,12', '2023-10-02 05:09:18', '2023-10-02 05:09:18'),
(7, 'Yes', 13, 73, '1,2,3,4,5,6', '3,4,5,6', '2023-10-03 11:55:54', '2023-10-03 11:55:54'),
(8, 'Yes', 8, 48, '2,3,4,5,6,7', '4,5,6,7', '2023-10-04 08:07:12', '2023-10-04 08:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` enum('upload','download','generated') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `save_progresses`
--

CREATE TABLE `save_progresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `current_route` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save_progresses`
--

INSERT INTO `save_progresses` (`id`, `current_route`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:8000/heading/1/question/1', 1, '2023-09-20 05:16:37', '2023-10-04 03:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) NOT NULL,
  `time_period` varchar(255) DEFAULT NULL,
  `support` text DEFAULT NULL,
  `ratio` varchar(255) DEFAULT NULL,
  `explanation` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `heading_id`, `user_id`, `day`, `time_period`, `support`, `ratio`, `explanation`, `created_at`, `updated_at`) VALUES
(1, 22, 3, '1', NULL, NULL, NULL, NULL, '2023-10-04 05:02:51', '2023-10-04 05:02:51'),
(2, 22, 3, '2', NULL, NULL, NULL, NULL, '2023-10-04 05:02:51', '2023-10-04 05:02:51'),
(3, 22, 3, '3', NULL, NULL, NULL, NULL, '2023-10-04 05:02:51', '2023-10-04 05:02:51'),
(4, 22, 3, '4', NULL, NULL, NULL, NULL, '2023-10-04 05:02:51', '2023-10-04 05:02:51'),
(5, 22, 3, '5', NULL, NULL, NULL, NULL, '2023-10-04 05:02:51', '2023-10-04 05:02:51'),
(6, 22, 3, '6', NULL, NULL, NULL, NULL, '2023-10-04 05:02:51', '2023-10-04 05:02:51'),
(7, 22, 3, '8', NULL, NULL, NULL, NULL, '2023-10-04 05:02:51', '2023-10-04 05:02:51'),
(8, 22, 3, '1', '16:02 - 20:03', 'random', 'One-on-two', 'random', '2023-10-04 05:03:10', '2023-10-04 05:03:10'),
(9, 22, 1, '1', NULL, NULL, NULL, NULL, '2023-10-04 05:17:29', '2023-10-04 05:17:29'),
(10, 22, 1, '2', NULL, NULL, NULL, NULL, '2023-10-04 05:17:29', '2023-10-04 05:17:29'),
(11, 22, 1, '3', NULL, NULL, NULL, NULL, '2023-10-04 05:17:29', '2023-10-04 05:17:29'),
(12, 22, 1, '4', NULL, NULL, NULL, NULL, '2023-10-04 05:17:29', '2023-10-04 05:17:29'),
(13, 22, 1, '5', NULL, NULL, NULL, NULL, '2023-10-04 05:18:45', '2023-10-04 05:18:45'),
(24, 22, 1, '1', '19:56 - 21:56', 'bjhkj,', 'One-on-three', 'bjgyuk,m', '2023-10-04 05:56:22', '2023-10-04 05:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `accept_agreement` tinyint(1) NOT NULL DEFAULT 0,
  `verification_token` varchar(255) NOT NULL DEFAULT 'null',
  `image` varchar(600) DEFAULT 'user-profile.jpg',
  `url_image` varchar(1000) NOT NULL DEFAULT 'null',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `authentication_type` enum('form','google','apple') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `accept_agreement`, `verification_token`, `image`, `url_image`, `remember_token`, `created_at`, `updated_at`, `authentication_type`) VALUES
(1, 'Muntaha Khan', 'muntahakhan982@gmail.com', NULL, NULL, 0, 'null', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocKOA-GHR2D0udM3X44bO9DmGGO8jJbB06DCZLZtcmNt8Js=s96-c', NULL, NULL, NULL, 'google'),
(3, 'muntaha khan', 'muntahak165@gmail.com', NULL, NULL, 0, 'null', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocLQYwUtol_XHgYBOy6savQYt5Sd0tQnuGwbNL2OYf5S=s96-c', NULL, NULL, NULL, 'google');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_questions_id_foreign` (`questions_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

--
-- Indexes for table `back_urls`
--
ALTER TABLE `back_urls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `back_urls_user_id_foreign` (`user_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`),
  ADD KEY `documents_entity_id_foreign` (`entity_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generated_reports`
--
ALTER TABLE `generated_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `generated_reports_user_id_foreign` (`user_id`),
  ADD KEY `generated_reports_entity_id_foreign` (`entity_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_heading_id_foreign` (`heading_id`);

--
-- Indexes for table `question_headings`
--
ALTER TABLE `question_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_options_heading_id_foreign` (`heading_id`),
  ADD KEY `question_options_questions_id_foreign` (`questions_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `save_progresses`
--
ALTER TABLE `save_progresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `save_progresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_heading_id_foreign` (`heading_id`),
  ADD KEY `schedules_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `back_urls`
--
ALTER TABLE `back_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generated_reports`
--
ALTER TABLE `generated_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `question_headings`
--
ALTER TABLE `question_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `save_progresses`
--
ALTER TABLE `save_progresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_questions_id_foreign` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `back_urls`
--
ALTER TABLE `back_urls`
  ADD CONSTRAINT `back_urls_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `generated_reports`
--
ALTER TABLE `generated_reports`
  ADD CONSTRAINT `generated_reports_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `generated_reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_heading_id_foreign` FOREIGN KEY (`heading_id`) REFERENCES `question_headings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `question_options_heading_id_foreign` FOREIGN KEY (`heading_id`) REFERENCES `question_headings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_options_questions_id_foreign` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `save_progresses`
--
ALTER TABLE `save_progresses`
  ADD CONSTRAINT `save_progresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_heading_id_foreign` FOREIGN KEY (`heading_id`) REFERENCES `question_headings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
