-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 10:13 AM
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
  `terdaftar` datetime NOT NULL,
  `isPembimbing` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_auth`
--

INSERT INTO `tb_auth` (`idAuth`, `nomor_pengguna`, `nama`, `password`, `jenisKelamin`, `level`, `is_activate`, `terdaftar`, `isPembimbing`) VALUES
(1, '17281', 'rijal', '$2y$10$70Ovl.jdekD3gxAvHxNBFOtHavCQa81P5SrBSs/KA8VdIago8ReOS', 'laki-laki', '3', 1, '2023-11-30 04:23:12', '');

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
(1, 'rijal', '17281', '2108001010009', 'Universitas Syiah Kuala', 'Manajemen Informatika', 'fmipa', 'zia', 'miftah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trx`
--

CREATE TABLE `tb_trx` (
  `idTrx` varchar(255) NOT NULL,
  `judulLogBook` varchar(100) NOT NULL,
  `resSiswa` int(11) NOT NULL,
  `resPemMateri` int(11) NOT NULL,
  `resPemRedaksi` int(11) NOT NULL,
  `resOut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_trx`
--

INSERT INTO `tb_trx` (`idTrx`, `judulLogBook`, `resSiswa`, `resPemMateri`, `resPemRedaksi`, `resOut`) VALUES
('trx-17013324762023', '', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trx_detail`
--

CREATE TABLE `trx_detail` (
  `trxIdD` varchar(255) NOT NULL,
  `harianD` varchar(255) NOT NULL,
  `keteranganD` varchar(255) NOT NULL,
  `lampiranD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_detail`
--

INSERT INTO `trx_detail` (`trxIdD`, `harianD`, `keteranganD`, `lampiranD`) VALUES
('trx-17013324762023', 'hellow ndaw', 'dwadowaj', 'Insert Symbol(1).png');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_data`
--

CREATE TABLE `weekly_data` (
  `id` int(11) NOT NULL,
  `noBadge` int(11) NOT NULL,
  `set_date` date NOT NULL,
  `week_number` int(11) NOT NULL,
  `additional_column1` varchar(255) DEFAULT NULL,
  `additional_column2` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weekly_data`
--

INSERT INTO `weekly_data` (`id`, `noBadge`, `set_date`, `week_number`, `additional_column1`, `additional_column2`, `created_at`, `updated_at`) VALUES
(1, 17281, '2023-11-27', 1, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(2, 17281, '2023-11-28', 1, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(3, 17281, '2023-11-29', 1, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(4, 17281, '2023-11-30', 1, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(5, 17281, '2023-12-01', 1, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(6, 17281, '2023-12-04', 2, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(7, 17281, '2023-12-05', 2, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(8, 17281, '2023-12-06', 2, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(9, 17281, '2023-12-07', 2, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(10, 17281, '2023-12-08', 2, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(11, 17281, '2023-12-11', 3, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(12, 17281, '2023-12-12', 3, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(13, 17281, '2023-12-13', 3, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(14, 17281, '2023-12-14', 3, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(15, 17281, '2023-12-15', 3, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(16, 17281, '2023-12-18', 4, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(17, 17281, '2023-12-19', 4, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(18, 17281, '2023-12-20', 4, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(19, 17281, '2023-12-21', 4, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(20, 17281, '2023-12-22', 4, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(21, 17281, '2023-12-25', 5, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(22, 17281, '2023-12-26', 5, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(23, 17281, '2023-12-27', 5, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(24, 17281, '2023-12-28', 5, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(25, 17281, '2023-12-29', 5, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(26, 17281, '2024-01-01', 6, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(27, 17281, '2024-01-02', 6, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(28, 17281, '2024-01-03', 6, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(29, 17281, '2024-01-04', 6, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(30, 17281, '2024-01-05', 6, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(31, 17281, '2024-01-08', 7, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(32, 17281, '2024-01-09', 7, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(33, 17281, '2024-01-10', 7, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(34, 17281, '2024-01-11', 7, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(35, 17281, '2024-01-12', 7, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(36, 17281, '2024-01-15', 8, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(37, 17281, '2024-01-16', 8, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(38, 17281, '2024-01-17', 8, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(39, 17281, '2024-01-18', 8, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(40, 17281, '2024-01-19', 8, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(41, 17281, '2024-01-22', 9, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(42, 17281, '2024-01-23', 9, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(43, 17281, '2024-01-24', 9, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17'),
(44, 17281, '2024-01-25', 9, NULL, NULL, '2023-11-30 04:59:17', '2023-11-30 04:59:17');

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
-- Indexes for table `trx_detail`
--
ALTER TABLE `trx_detail`
  ADD PRIMARY KEY (`trxIdD`);

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
  MODIFY `idAuth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `idBiodataB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weekly_data`
--
ALTER TABLE `weekly_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
