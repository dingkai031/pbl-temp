-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 02:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(7) UNSIGNED NOT NULL,
  `id_mahasiswa` int(7) UNSIGNED NOT NULL,
  `jawaban_kuesioner` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jawaban_kuesioner`)),
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(7) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `email_kampus` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `jenis_kelamin` int(1) UNSIGNED NOT NULL,
  `ipk` float UNSIGNED NOT NULL,
  `is_lulus` int(1) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_lengkap`, `nim`, `email_kampus`, `alamat`, `prodi`, `telp`, `jenis_kelamin`, `ipk`, `is_lulus`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'User Satu', '8888444433332', 'usersatu@poltekbatam.ac.id', 'Jalan kuda raya No 3', 'Teknik Informatika', '088811223344', 1, 3.88, 1, '2023-06-14 14:26:29', '2023-06-14 14:26:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(7) UNSIGNED NOT NULL,
  `id_mahasiswa` int(7) UNSIGNED DEFAULT NULL,
  `id_perusahaan` int(7) UNSIGNED DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 3,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `id_mahasiswa`, `id_perusahaan`, `username`, `password`, `email`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, 'admin', '$2y$10$xWZ7UU3PlpG3vclTxOQV0OTPhSMRE5ij8ugCQjeVAWBGXDn9YF4.a', 'admin@admin.com', 1, '2023-06-14 19:36:55', '2023-06-14 19:36:55', NULL),
(2, 1, NULL, 'usersatu', '$2y$10$xsca5.fdU9dLiPSrOAGAv.E7mVl.MAhOPeH4K1as53n/khpQiW9ny', 'usersatu@gmail.com', 3, '2023-06-14 19:36:56', '2023-06-14 19:36:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`),
  ADD KEY `id_mahasiswa_kuesioner` (`id_mahasiswa`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(7) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `kuesioner_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
