-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2025 at 03:30 PM
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
  `name` varchar(75) NOT NULL,
  `achievement` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_deleted` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id_achievement`, `name`, `achievement`, `image`, `is_deleted`) VALUES
(1, 'Tes Data', 'Tidak Ada', 'immortal_20250606_112037.png', 0),
(2, 'Tes Data', 'Tidak Ade', 'arctic-fox-sitting-stockcake_20250606_112058.jpg', 1),
(3, 'Tes Data', 'Tidak Ade', '', 1),
(4, 'Tes Lain', 'Percobaan', 'immortal_20250606_140315.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int NOT NULL,
  `title` varchar(75) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `is_deleted` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `title`, `date`, `image`, `keterangan`, `is_deleted`) VALUES
(1, 'Buka Puasa Bersama Mulu', '2025-04-14', 'ID_Card_-_ucup_20250518_153740.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 0),
(2, 'Hangout', '2025-04-20', 'immortal_20250606_112015.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore\\', 0),
(3, 'Tidak ada judull', '2025-05-11', 'linkedin_20250511_135456.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 1),
(4, 'Percobaan satu dua', '2025-05-12', 'instagram_20250511_142548.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 1),
(5, 'Testing', '2025-05-18', 'ID_Card_-_ucup_20250518_142510.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 1),
(6, 'Tester More', '2025-06-06', 'immortal_20250606_111743.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 1),
(7, 'Percobaan', '2025-06-14', 'immortal_20250606_124449.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 0),
(8, 'tester', '2025-06-12', 'Annotation_2020-07-31_212414_20250606_124502.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 0),
(9, 'Percobaan', '2025-06-18', 'cosmonaut_astronaut_space_suit_137404_1920x1080_20250606_124515.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu_settings`
--

CREATE TABLE `cms_menu_settings` (
  `id` int NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cms_menu_settings`
--

INSERT INTO `cms_menu_settings` (`id`, `menu_name`, `is_active`) VALUES
(1, 'agenda', 1),
(2, 'capaian', 1),
(3, 'gallery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int NOT NULL,
  `event` varchar(75) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `event`, `image`) VALUES
(1, 'Tes Data', 'immortal_20250606_124256.png'),
(2, 'Tes Data', 'cosmonaut_astronaut_space_suit_137404_1920x1080_.jpg'),
(3, 'Tes Data', 'immortal_20250606_124343.png'),
(4, 'Cobna', 'arctic-fox-sitting-stockcake_20250606_124353.jpg'),
(5, 'Cobne', 'smp1_20250606_124415.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id_registration` int NOT NULL,
  `fullname` varchar(75) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `grade` int NOT NULL,
  `parent` varchar(100) NOT NULL,
  `parent_job` varchar(100) NOT NULL,
  `parent_phone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin234');

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
  MODIFY `id_achievement` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cms_menu_settings`
--
ALTER TABLE `cms_menu_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id_registration` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
