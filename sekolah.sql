-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2026 at 07:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` char(10) NOT NULL,
  `NAMA` varchar(150) NOT NULL,
  `ALAMAT` varchar(150) NOT NULL,
  `TEMPAT_LAHIR` varchar(100) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `JENIS_KELAMIN` char(1) NOT NULL,
  `AGAMA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `NAMA`, `ALAMAT`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `AGAMA`) VALUES
('2023000001', 'Andi Pratama', 'Jl. Merdeka No. 10', 'Jakarta', '2006-03-12', 'L', 'Islam'),
('2023000002', 'Budi Santoso', 'Jl. Sudirman No. 5', 'Bandung', '2005-07-25', 'L', 'Islam'),
('2023000003', 'Citra Lestari', 'Jl. Melati No. 8', 'Surabaya', '2006-01-18', 'P', 'Islam'),
('2023000004', 'Dewi Anggraini', 'Jl. Kenanga No. 3', 'Yogyakarta', '2005-11-02', 'P', 'Kristen'),
('2023000005', 'Eko Saputra', 'Jl. Mawar No. 21', 'Semarang', '2006-06-30', 'L', 'Islam'),
('213', 'fairuz gemink', 'jl wes roh', 'epstein island', '2026-02-04', 'L', 'islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
