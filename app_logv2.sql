-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 10:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_auth`
--

CREATE TABLE `tb_auth` (
  `idAuth` int(11) NOT NULL,
  `nomor_pengguna` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `is_activate` tinyint(2) NOT NULL,
  `terdaftar` date NOT NULL,
  `isPembimbing` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_auth`
--

INSERT INTO `tb_auth` (`idAuth`, `nomor_pengguna`, `nama`, `password`, `jenisKelamin`, `level`, `is_activate`, `terdaftar`, `isPembimbing`) VALUES
(1, '', 'rijal', '$2y$10$70Ovl.jdekD3gxAvHxNBFOtHavCQa81P5SrBSs/KA8VdIago8ReOS', 'laki-laki', '3', 1, '2023-11-30', ''),
(2, '26543', 'dina nurizka', '$2y$10$MCYzGEIB0FTzT2hcDXW0ROciIuZYjcn/UWPhWwVE3hJN8uM3ncsye', 'perempuan', '3', 1, '2023-12-12', ''),
(3, '12451212', 'muslim', '$2y$10$eaV1cU8jrRK/h5K1CyZykuB3OgwOz5Oo5S9qpuuTnQquIpagqEs6e', 'laki-laki', '2', 1, '2023-12-12', 'pembimbing materi'),
(5, '82922', 'akhri', '$2y$10$3ct9eC41QP4MhDCVbcDbhec/061hQsKiC4hYKSmSiDSPfGSBPfPt6', 'laki-laki', '3', 1, '2023-12-13', ''),
(6, '01010101', 'admin', '$2y$10$vPNbg10zZFl60oqAYEgEQu.2EIMJtXM/DZ6yuPwXL0CeWF4Nmn2ka', 'laki-laki', '1', 1, '2023-12-13', ''),
(7, '22334455', 'mahyus', '$2y$10$HvOFMK7iUPnB0HBBXxJQbe9peckJLNYEuY.F7gPek859YOl70AIIS', 'laki-laki', '2', 1, '2023-12-13', 'pembimbing materi'),
(8, '3413431', 'kamal', '$2y$10$/w5HpKaqCI6kGPcd6fDDTuma/bNJ4iO0A5WSkwuudbuk2KSAa9iBe', 'laki-laki', '2', 1, '2023-12-13', 'pembimbing redaksi'),
(9, '789789', 'sutono', '$2y$10$xq8FHIxKOwxDlhCQI0/vneXMsw4VL42JFNf088jjydyLMnqYs4MRO', 'laki-laki', '3', 1, '2023-12-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `idBiodataB` int(11) NOT NULL,
  `namaB` varchar(100) NOT NULL,
  `noBadgeB` varchar(100) NOT NULL,
  `nimB` varchar(100) NOT NULL,
  `pendidikanB` varchar(100) NOT NULL,
  `jurusanB` varchar(100) NOT NULL,
  `departemenB` varchar(255) NOT NULL,
  `pemMateriB` varchar(255) NOT NULL,
  `pemRedaksiB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`idBiodataB`, `namaB`, `noBadgeB`, `nimB`, `pendidikanB`, `jurusanB`, `departemenB`, `pemMateriB`, `pemRedaksiB`) VALUES
(3, 'sutono', '789789', '2108001010009', 'Universitas Syiah Kuala', 'Manajemen Informatika', 'fmipa', '12451212', '22334455');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trx`
--

CREATE TABLE `tb_trx` (
  `idTrx` varchar(255) NOT NULL,
  `noBadgeT` int(11) NOT NULL,
  `number_week` int(11) NOT NULL,
  `resSiswa` int(11) NOT NULL,
  `resPemMateri` int(11) NOT NULL,
  `resPemRedaksi` int(11) NOT NULL,
  `resOut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weekly_data`
--

CREATE TABLE `weekly_data` (
  `id` int(11) NOT NULL,
  `trxId` varchar(255) NOT NULL,
  `noBadge` int(11) NOT NULL,
  `set_date` date NOT NULL,
  `week_number` int(11) NOT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `pengalaman` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weekly_data`
--

INSERT INTO `weekly_data` (`id`, `trxId`, `noBadge`, `set_date`, `week_number`, `kegiatan`, `pengalaman`, `created_at`, `updated_at`) VALUES
(103, '', 789789, '2023-12-18', 1, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(104, '', 789789, '2023-12-19', 1, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(105, '', 789789, '2023-12-20', 1, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(106, '', 789789, '2023-12-21', 1, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(107, '', 789789, '2023-12-22', 1, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(108, '', 789789, '2023-12-25', 2, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(109, '', 789789, '2023-12-26', 2, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(110, '', 789789, '2023-12-27', 2, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(111, '', 789789, '2023-12-28', 2, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(112, '', 789789, '2023-12-29', 2, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(113, '', 789789, '2024-01-01', 3, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(114, '', 789789, '2024-01-02', 3, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(115, '', 789789, '2024-01-03', 3, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(116, '', 789789, '2024-01-04', 3, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(117, '', 789789, '2024-01-05', 3, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(118, '', 789789, '2024-01-08', 4, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(119, '', 789789, '2024-01-09', 4, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(120, '', 789789, '2024-01-10', 4, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(121, '', 789789, '2024-01-11', 4, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(122, '', 789789, '2024-01-12', 4, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(123, '', 789789, '2024-01-15', 5, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(124, '', 789789, '2024-01-16', 5, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(125, '', 789789, '2024-01-17', 5, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(126, '', 789789, '2024-01-18', 5, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(127, '', 789789, '2024-01-19', 5, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(128, '', 789789, '2024-01-22', 6, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(129, '', 789789, '2024-01-23', 6, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(130, '', 789789, '2024-01-24', 6, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(131, '', 789789, '2024-01-25', 6, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(132, '', 789789, '2024-01-26', 6, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(133, '', 789789, '2024-01-29', 7, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(134, '', 789789, '2024-01-30', 7, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(135, '', 789789, '2024-01-31', 7, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(136, '', 789789, '2024-02-01', 7, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(137, '', 789789, '2024-02-02', 7, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(138, '', 789789, '2024-02-05', 8, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(139, '', 789789, '2024-02-06', 8, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(140, '', 789789, '2024-02-07', 8, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(141, '', 789789, '2024-02-08', 8, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(142, '', 789789, '2024-02-09', 8, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(143, '', 789789, '2024-02-12', 9, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(144, '', 789789, '2024-02-13', 9, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(145, '', 789789, '2024-02-14', 9, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(146, '', 789789, '2024-02-15', 9, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(147, '', 789789, '2024-02-16', 9, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01'),
(148, '', 789789, '2024-02-19', 10, NULL, NULL, '2023-12-13 09:43:01', '2023-12-13 09:43:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`idAuth`);

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`idBiodataB`);

--
-- Indexes for table `tb_trx`
--
ALTER TABLE `tb_trx`
  ADD PRIMARY KEY (`idTrx`);

--
-- Indexes for table `weekly_data`
--
ALTER TABLE `weekly_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `idAuth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `idBiodataB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weekly_data`
--
ALTER TABLE `weekly_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
