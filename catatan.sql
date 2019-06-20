-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 08:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$bVWdlHysRpbIsMUBohLzU.QUFqk3awcSnNFRV8d2BWwyaMLWBJ.uW', '2019-03-28 16:37:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `catatan_id` int(11) NOT NULL,
  `keterangan_id` int(11) NOT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `nominal` bigint(20) NOT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`catatan_id`, `keterangan_id`, `deskripsi`, `nominal`, `no_hp`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Saldo Pulsa', 200000, '', 'Ok', '2019-03-29 14:35:47', '2019-03-29 18:11:12'),
(3, 2, 'Isi Pulsa', 100000, '085849919196', 'Ok', '2019-03-29 18:11:42', '2019-03-29 18:11:59'),
(4, 1, 'Transfer', 200000, '', 'Ok', '2019-03-30 17:12:33', '2019-03-30 17:12:33'),
(14, 1, 'Sisa saldo bulan lalu', 300000, '', 'ok', '2019-04-01 15:19:01', '2019-04-01 15:19:01'),
(22, 1, 'Transfer', 100000, '', 'Ok', '2019-04-01 15:56:42', '2019-04-01 15:56:52'),
(23, 2, 'Pulsa Listrik', 100000, '09089897', 'Ok', '2019-04-01 15:57:36', '2019-04-01 15:57:36'),
(24, 2, 'Pulsa HP', 50000, '0897883435', 'Ok', '2019-04-01 16:09:46', '2019-04-01 16:09:46'),
(25, 1, 'Transfer', 200000, '', 'Ok', '2019-04-02 07:27:58', '2019-04-02 07:27:58'),
(28, 1, 'Sisa saldo bulan lalu', 0, '', 'Ok', '2019-06-20 04:31:59', '2019-06-20 04:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `pemasukan` bigint(20) NOT NULL,
  `pengeluaran` bigint(20) NOT NULL,
  `selisih` bigint(20) NOT NULL,
  `created_at` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `pemasukan`, `pengeluaran`, `selisih`, `created_at`) VALUES
(15, 400000, 100000, 300000, '2019-03'),
(16, 600000, 150000, 450000, '2019-04'),
(17, 500000, 250000, 250000, '2019-01'),
(18, 600000, 300000, 300000, '2019-02'),
(28, 0, 0, 0, '2019-05'),
(29, 0, 0, 0, '2019-06');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id`, `keterangan`) VALUES
(1, 'Pemasukan'),
(2, 'Pengeluaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`catatan_id`),
  ADD KEY `keterangan_id` (`keterangan_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `catatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`keterangan_id`) REFERENCES `keterangan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
