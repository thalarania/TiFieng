-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2023 at 01:12 PM
-- Server version: 10.5.18-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tifieng_real`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `id_type`, `id_wilayah`, `nama_kategori`, `nama_teknisi`) VALUES
(1, 1, 1, 'A', 'jojo'),
(2, 3, 1, 'B', 'tono'),
(3, 4, 1, 'C', 'sofyan'),
(4, 1, 2, 'Logic', 'Yahya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `notlp_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `id_wilayah`, `notlp_pelanggan`, `email_pelanggan`, `password_pelanggan`) VALUES
(1, 'Hanun', 'Jalan', 2, 98765, 'Hanun@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaduan`
--

CREATE TABLE `tbl_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `notiket_pengaduan` varchar(50) NOT NULL,
  `judul_pengaduan` varchar(200) NOT NULL,
  `deskripsi_pengaduan` text NOT NULL,
  `perbaikan_pengaduan` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status_pengaduan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_pengaduan`
--

INSERT INTO `tbl_pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `id_pelanggan`, `notiket_pengaduan`, `judul_pengaduan`, `deskripsi_pengaduan`, `perbaikan_pengaduan`, `id_kategori`, `status_pengaduan`) VALUES
(1, '2023-02-08', 1, 'Mh6wYPTkcu', 'Tidak terhubung internet', 'Tidak terhubung internet', 'Detail', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id_type` int(11) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id_type`, `nama_type`) VALUES
(1, 'VVIP'),
(3, 'EKONOMI'),
(4, 'EXSEKUTIF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `password_user`) VALUES
(1, 'admin', 'admin@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wilayah`
--

CREATE TABLE `tbl_wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_wilayah`
--

INSERT INTO `tbl_wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Cirebon'),
(2, 'kuningan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
