-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2025 at 10:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uastiara`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter_pasien`
--

CREATE TABLE `dokter_pasien` (
  `iddokter` int(11) NOT NULL,
  `dokter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter_pasien`
--

INSERT INTO `dokter_pasien` (`iddokter`, `dokter`) VALUES
(1, 'Umum'),
(2, 'Penyakit_dalam'),
(3, 'Mata'),
(4, 'Bedah'),
(5, 'Kandungan_ginekologi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pasien`
--

CREATE TABLE `kategori_pasien` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pasien`
--

INSERT INTO `kategori_pasien` (`idkategori`, `kategori`) VALUES
(5, 'Dalam Proses'),
(1, 'Disetujui'),
(2, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `kategori` varchar(58) NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `tgl_lahir` varchar(56) NOT NULL,
  `alamat` varchar(56) NOT NULL,
  `no_tlpn` varchar(56) NOT NULL,
  `keluhan` varchar(56) NOT NULL,
  `tgl_kunjungan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idpasien`, `user_id`, `nama`, `kategori`, `dokter`, `tgl_lahir`, `alamat`, `no_tlpn`, `keluhan`, `tgl_kunjungan`) VALUES
(10, 4, 'Risna', 'Dalam Proses', 'Kandungan_ginekologi', '2005-09-09', 'Jl. H Djuminta Kp. Teriti RT 001 RW 04 Desa Karet Kkec S', '0992838373', '<p>Sudah Mules-mules ingin Lahiran </p>', '2025-06-07'),
(11, 4, 'Aqeela', 'Dalam Proses', 'Umum', '2008-09-01', 'jl memanah hatimu', '0812393838', '<p>Pusing Kepalanya, batuk dan flue</p>', '2025-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `create_at`) VALUES
(4, 'admin', '$2y$10$Xg0q/i8ZI5j1Ae81ml13Pe6UN9rETrm5gm.AXJjs7x65pU/2evQc6', 'admin', '2025-06-03 01:32:18'),
(8, 'user', '$2y$10$dVnchRfLe2iGqtn5DRnqZ.avSBJSKELnLzMCsO8X8YzTK.61BuDaq', 'user', '2025-06-04 09:11:16'),
(9, 'Saya', '$2y$10$n2g2OBcOqca8p9Q8by51k.2BDWqC8k8VVZLaQN1tcBwhKKSS1ZxfG', 'user', '2025-06-11 08:14:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter_pasien`
--
ALTER TABLE `dokter_pasien`
  ADD PRIMARY KEY (`iddokter`);

--
-- Indexes for table `kategori_pasien`
--
ALTER TABLE `kategori_pasien`
  ADD PRIMARY KEY (`idkategori`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter_pasien`
--
ALTER TABLE `dokter_pasien`
  MODIFY `iddokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_pasien`
--
ALTER TABLE `kategori_pasien`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
