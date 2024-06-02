-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 03:36 PM
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
-- Database: `uniska_latihan_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `nama_gudang` varchar(100) NOT NULL,
  `lokasi_gudang` varchar(200) NOT NULL,
  `luas_gudang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_gudang`
--

CREATE TABLE `karyawan_gudang` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `id_gudang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tkaryawan`
--

CREATE TABLE `tkaryawan` (
  `nik` char(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tkaryawan`
--

INSERT INTO `tkaryawan` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jabatan`, `status`) VALUES
('17', 'Eum aute commodi fac edit', 'Aute ratione consequ', '2009-10-12', 'Voluptas sed similiq', 'Pariatur Es', 'Supervisor', 'Tetap'),
('55', 'Quae molestias ut no', 'Totam omnis harum te', '2018-06-17', 'Et consequat Occaec', 'Ut labore ni', 'Operator', 'Tetap'),
('87', 'Adipisicing anim ten edit', 'Asperiores non repel', '2018-01-15', 'Accusantium velit la', 'Sunt velit e', 'Operator', 'Outsourcing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan_gudang`
--
ALTER TABLE `karyawan_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkaryawan`
--
ALTER TABLE `tkaryawan`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
