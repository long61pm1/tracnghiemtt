-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 06:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tracnghiemtt`
--

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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_16_021528_create_tbl_admin_table', 2),
(4, '2020_07_16_121511_create_tbl_cau_hoi_table', 3),
(5, '2020_07_17_023503_create_tbl_user_table', 4),
(6, '2020_07_17_134618_create_tbl_score_table', 5),
(7, '2020_07_17_161404_create_tbl_score_table', 6),
(8, '2020_07_17_165011_create_tbl_user_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_name`, `admin_phone`, `admin_avatar`, `created_at`, `updated_at`) VALUES
(1, 'longdc', 'e10adc3949ba59abbe56e057f20f883e', 'Đào Công Long', '031234567', 'logo.png', '2020-07-16 02:33:52', '2020-07-16 02:33:52'),
(3, 'namtd', 'e10adc3949ba59abbe56e057f20f883e', 'Nam TD', '0987654342', 'ava_1.png', NULL, NULL),
(4, 'tungcs', 'e10adc3949ba59abbe56e057f20f883e', 'Công Sơn Tùng', '098987867', 'ava_2.png', NULL, NULL),
(5, 'duongdd', 'e10adc3949ba59abbe56e057f20f883e', 'Đào Đình Dương', '098564738', 'ava_3.png', NULL, NULL),
(6, 'hieutd', 'e10adc3949ba59abbe56e057f20f883e', 'Trịnh Đức Hiệu', '0987463789', 'ava_4.png', NULL, NULL),
(7, 'hieunt', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Trung Hiếu', '098778943', 'ava_5.png', NULL, NULL),
(8, 'test1333', 'e10adc3949ba59abbe56e057f20f883e', 'test1', '098578493', 'ava_6.png', NULL, NULL),
(10, 'anhnguyen', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Anh', '0946738291', 'ava_7.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cau_hoi`
--

CREATE TABLE `tbl_cau_hoi` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `question_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_A` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_B` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_C` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_D` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_true` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cau_hoi`
--

INSERT INTO `tbl_cau_hoi` (`question_id`, `question_number`, `question_title`, `question_A`, `question_B`, `question_C`, `question_D`, `question_true`, `created_at`, `updated_at`) VALUES
(1, '1', 'Chọn chữ tiếp theo cho dãy: A || D || G || J || ?', 'H', 'P', 'M', 'N', 'C', '2020-07-16 12:22:00', '2020-07-16 12:22:00'),
(2, '1', 'Số tiếp theo của dãy: 1 || 3 || 6 || 10 || ?', '13', '15', '17', '19', 'B', '2020-07-16 12:22:02', '2020-07-16 12:22:02'),
(3, '1', 'Số tiếp theo của dãy: 1 || 1 || 2 ||  3 || 5 || ?', '6', '8', '9', '11', 'B', NULL, NULL),
(6, '1', 'Số tiếp theo của dãy: 21 || 20 || 18 || 15 || 11 || ?', '9', '8', '7', '6', 'D', NULL, NULL),
(7, '1', 'Số tiếp theo của dãy: 8 || 6 || 7 || 5 || 6 || 4 || ?', '7', '5', '8', '10', 'B', NULL, NULL),
(8, '1', 'Số tiếp theo của dãy: 65536 || 256 || 16 || ?', '8', '6', '4', '2', 'C', NULL, NULL),
(9, '1', 'Số tiếp theo của dãy: 1 || 0 || -1 || 0 || ?', '-1', '1', '0', '2', 'B', NULL, NULL),
(10, '1', 'Số tiếp theo của dãy: 1 || 0 || -1 || 0 || ?', '-1', '1', '0', '2', 'B', NULL, NULL),
(11, '1', 'Số tiếp theo của dãy: 3968 || 63 || 8 || 3 || ?', '9', '6', '3', '2', 'D', NULL, NULL),
(12, '1', 'Số nào sẽ là số tiếp theo trong chuỗi: 1 - 1 - 2 - 3 - 5 - 8 - 13 - ?', '13', '21', '26', '31', 'B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_username`, `user_password`, `user_name`, `user_phone`, `user_avatar`, `score_1`, `score_2`, `score_3`, `score_4`, `score_5`, `score_6`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 'Đỗ Xuân Một', '094756893', 'ava_1.png', '8', '9', '9', '7', '9', '0', '2020-07-17 17:42:16', '2020-07-17 17:42:16'),
(2, 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'Đỗ Thị Hai', '094783940', 'ava_2.png', '2', '6', '9', '8', '9', '8', '2020-07-17 17:42:24', '2020-07-17 17:42:24'),
(3, 'user3', 'e10adc3949ba59abbe56e057f20f883e', 'Mỹ Hầu Ba', '089473782', 'ava_3.png', '0', '0', '0', '0', '0', '0', NULL, NULL),
(4, 'user4', 'd41d8cd98f00b204e9800998ecf8427e', 'Nguyễn Phốt Pho', '0967485938', 'ava_4.png', '0', '0', '0', '0', '0', '0', NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cau_hoi`
--
ALTER TABLE `tbl_cau_hoi`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_cau_hoi`
--
ALTER TABLE `tbl_cau_hoi`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
