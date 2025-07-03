-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 12:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
  `id_achievement` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `achievement` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0
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
  `id_agenda` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `date` int(11) NOT NULL,
  `descript` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `title`, `date`, `descript`, `image`, `is_deleted`) VALUES
(3, 'login', 0, '2025-05-08', 'github_20250511_135528_20250526_054245_20250603_073859.png', 1),
(4, 'Baca', 0, 'baca jilid ', 'IMG-20220908-WA0019_20250531_095639.jpg', 1),
(5, 'Belajar', 0, '2025-05-05', 'github_20250511_135528_20250526_054245.png', 1),
(6, 'Pawai', 0, '2025-05-18', 'IMG-20180227-WA0006_20250530_105059.jpg', 1),
(7, 'Tarhib', 0, 'Pawai menyambut tahun baru islam', 'IMG-20220316-WA0010_20250606_134204.jpg', 1),
(8, 'camp', 0, 'quran camp selama 2 hari 1 malam', 'IMG_20220310_170531_20250607_082119.jpg', 1),
(9, 'Rihlah', 0, 'Study tour ke tempat bla bla bla', 'IMG-20220126-WA0027_20250606_135113.jpg', 1),
(10, 'Pawai', 2025, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem', 'IMG-20221108-WA0011_20250608_100816.jpg', 0),
(11, 'Haflah', 2025, 'Lorem ipsum dolor sit amet, consectetur adipiscing ', 'IMG_20220929_161458~2_20250608_100745.jpg', 0),
(12, 'sien', 2025, 'Berkemah selama 2 hari 1 malam bersama santri dan guru-guru yang bertujuan ', 'IMG_20220929_161623_20250608_101116.jpg', 1),
(13, 'Apa Ja', 2025, 'Kalau kamu ingin implementasi serupa di modal lain (misalnya capaianModal Jika setelah ini masih ada garis yang tidak muncul, bisa jadi karena pengaruh table-responsive atau overflow div pembungkusnya. Tapi dari kode kamu, itu harusnya aman.', 'IMG-20191120-WA0003_20250611_044208.jpg', 1),
(14, 'Tambah data', 2025, 'buat cek maksimal yg nampil', '1_20250611_080205.png', 0),
(15, 'lagi', 2025, 'buat cek jumlah tampil', '9076867_20250611_080301.jpg', 1),
(16, 'cvbn', 2025, 'ccvbnm,', '9079352_20250611_080502.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu_settings`
--

CREATE TABLE `cms_menu_settings` (
  `id` int(11) NOT NULL,
  `menu_utama` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
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
  `id_gallery` int(11) NOT NULL,
  `event` varchar(75) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0
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
  `id_registration` int(11) NOT NULL,
  `fullname` varchar(75) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `grade` int(11) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `parent_job` varchar(100) NOT NULL,
  `parent_phone` int(11) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0
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
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
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
  MODIFY `id_achievement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cms_menu_settings`
--
ALTER TABLE `cms_menu_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id_registration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
