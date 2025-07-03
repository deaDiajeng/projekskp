-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2025 at 05:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id_achievement` int NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `achievement` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `is_deleted` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id_achievement`, `name`, `achievement`, `image`, `is_deleted`) VALUES
(1, 'Yudha', 'Al Bayyinah', 'IMG_20220331_170502_HDR_20250608_102416.jpg', 1),
(2, 'Yudha', 'Al Bayyinah', 'IMG_20220908_172730~2_20250607_094716.jpg', 1),
(3, 'Khaula', 'At Takwir', 'IMG_20220331_170653_HDR_20250608_160627.jpg', 0),
(4, 'Adeeva', 'An Naba', 'IMG_20220331_170644_HDR_20250608_160613.jpg', 1),
(5, 'Shakeel', 'An Naba', 'IMG_20220623_171308_HDR_20250608_160656.jpg', 1),
(6, 'Azzam', 'Al Bayyinah', 'IMG-20200506-WA0023_20250618_0818231.jpg', 0),
(7, 'Alwin', 'Al Muthafifin', 'IMG_20180104_165335_20250610_051927.jpg', 0),
(8, 'Shakeel', 'An Naba', '(!)IMG-20240731-WA0034_20250611_064915.jpg', 0),
(9, 'Abris ', 'An Nashr ', '9079352_20250612_032739.jpg', 0),
(10, 'Bagas', 'Al-Takwir', '1_20250611_122452.png', 1),
(11, 'Naya', 'An Naba', '1_20250612_032723.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `descript` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `is_deleted` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `title`, `date`, `descript`, `image`, `is_deleted`) VALUES
(17, 'Dummy', '2025-07-03', 'Dummy', 'immortal_20250703_161617.png', 0),
(18, 'Dummy 2', '2025-07-02', 'Dummy 2', 'istockphoto-1241777878-612x612_20250703_161717.jpg', 0),
(19, 'Dummy 3', '2025-07-01', 'Dummy 3', 'pngtree-blue-microfiber-duster-wipe-material-microfiber-photo-picture-image_4666702_20250703_161748.', 1),
(20, 'Dummy 3', '2025-07-01', 'Dummy 3', 'Sand_JE5_BE3_20250703_161808.jpg', 0),
(21, 'Dummy 4', '2025-07-02', 'Dummy 4', 'tire-mark-vector-sticker-cartoon-tired_587486_wh860_20250703_161901.png', 0),
(22, 'Dummy 5', '2025-07-03', 'Dummy 5', 'pngtree-water-glass-cartoon-illustration-png-image_5103087_20250703_161920.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu_settings`
--

CREATE TABLE `cms_menu_settings` (
  `id` int NOT NULL,
  `menu_utama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cms_menu_settings`
--

INSERT INTO `cms_menu_settings` (`id`, `menu_utama`, `is_active`) VALUES
(2, 'capaian', 1),
(3, 'gallery', 1),
(4, 'agenda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int NOT NULL,
  `event` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `is_deleted` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `event`, `image`, `is_deleted`) VALUES
(2, 'Baca', 'IMG_20220420_141736_.jpg', 0),
(3, 'Hafalan', 'IMG_20220615_170815_HDR_20250608_102532.jpg', 1),
(4, 'Ngaji', 'IMG-20230131-WA0006_.jpg', 0),
(5, 'Opening ', 'IMG_20180104_164838_20250610_052331.jpg', 0),
(6, 'Camp', 'Untitled_design_.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id_registration` int NOT NULL,
  `fullname` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `school` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `grade` int NOT NULL,
  `parent` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_job` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_phone` int NOT NULL,
  `is_deleted` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id_registration`, `fullname`, `birth_date`, `address`, `school`, `grade`, `parent`, `parent_job`, `parent_phone`, `is_deleted`) VALUES
(2, 'diajeng', '2002-07-02', 'Ciomas', 'Kaifa', 8, '-', '-', 0, 1),
(10, 'Mizyan', '2025-06-01', 'Ciomas', 'Kaifa', 2, 'Ayu', 'Guru', 0, 1),
(15, 'Hana', '2025-06-01', 'Ciomas', 'Kaifa', 2, 'Ayu', 'Guru', 0, 1),
(16, 'A5', '2025-05-05', 'Ciomas', 'Kaifa', 3, 'A4', 'Guru', 0, 0),
(17, 'A5', '2025-05-05', 'Ciomas', 'Kaifa', 3, 'A4', 'Guru', 838, 1),
(18, 'v', '2025-04-01', 'Ciomas', 'Kaifa', 2, '-', '-', 0, 1),
(19, 'v', '2025-04-01', 'Ciomas', 'Kaifa', 2, '-', '-', 123456, 1),
(20, 'Vee', '2025-04-01', 'Ciomas', 'Kaifa', 2, '-', '-', 62838, 1),
(21, 'adeba', '2019-06-18', 'Ciomas', 'Kaifa', 2, 'Ayu', 'Guru', 0, 1),
(22, 'Noerul', '2025-01-01', 'Ciomas', 'Kaifa', 3, 'Ayu', 'Guru', 0, 0),
(23, 'lita', '2011-02-01', 'uhuy', 'auuu', 1, 'eyyy', 'uyyy', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin234'),
(2, 'admin', 'rq2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id_achievement`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `cms_menu_settings`
--
ALTER TABLE `cms_menu_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id_registration`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id_achievement` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cms_menu_settings`
--
ALTER TABLE `cms_menu_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id_registration` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
