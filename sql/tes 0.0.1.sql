-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 09:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tanggal_berkunjung` date NOT NULL,
  `jam_datang` time NOT NULL,
  `bertemu` varchar(100) DEFAULT NULL,
  `keperluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `no_telp`, `nama_tamu`, `instansi`, `tanggal_berkunjung`, `jam_datang`, `bertemu`, `keperluan`) VALUES
(2, '1234', 'Herlinda', 'UNJ', '2018-05-22', '08:00:00', 'Pak Agus', 'PKL'),
(4, '2345', 'Mesita', 'UNJ', '2018-05-24', '10:00:00', 'Pak Eka', 'PKL'),
(5, '3456', 'Erik', 'PGN', '2018-05-26', '09:35:00', 'Pak Med', 'Kerja'),
(8, '083871746976', 'Erik Santiago', 'Default UNJ', '2018-08-07', '09:15:17', 'Pak Gunawan', 'Kerja Sama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nama_user`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-02-21 04:14:16', '2017-03-06 13:42:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
