-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 02:47 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertanahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nm_admin` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nm_admin`, `username`, `password`, `status`) VALUES
(1, 'rudy bagiono', '12345', '12345', 'admin'),
(2, 'andy miharja', '12354', '12354', 'hacker'),
(3, 'luna kamila', '12543', '12543', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(30) NOT NULL,
  `nama` text NOT NULL,
  `jenkel` enum('laki-laki','perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('kontrak','tetap') DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `nama`, `jenkel`, `alamat`, `telepon`, `agama`, `jabatan`, `password`, `status`, `foto`) VALUES
('12345', 'odit kaaryadi', 'laki-laki', 'Jelata Ambara', '0898-0415-632', 'islam', 'hrd', '12345', 'tetap', '12345_odit_kaaryadi_upload_.jpg'),
('235235', 'rudiantara', 'laki-laki', 'perumahan jaya Wijaya gang nomor 17', '0853-4468-793', 'kristen', 'keamanan', '235235', 'kontrak', '235235_rudiantara_upload_.jpg'),
('54657436', 'sdgshh', 'laki-laki', 'sdherh', 'e756854632', 'islam', 'sgdgs', '54657436', 'kontrak', NULL),
('5745757', 'gsdgsdg', 'perempuan', 'sdgshgjty', '464587568', 'fdfhdf', 'fhshdds', 'sdgsdgs', 'tetap', NULL),
('6346346', 'dsggdsdgs', 'perempuan', 'sdgsdgs', '658658568', 'sdgsdgsd', 'yuity', 'jfjfgj', 'tetap', NULL),
('75475421', 'sdgshh', 'laki-laki', 'sdherh', 'e756854632', 'sgsdg', 'sgdgs', 'sdgrh', 'tetap', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
