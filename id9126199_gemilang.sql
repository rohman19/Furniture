-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2019 at 10:38 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9126199_gemilang`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` tinyint(2) NOT NULL,
  `username` varchar(35) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reset` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `fullname`, `password`, `level`, `email`, `reset`) VALUES
(1, 'admin', 'Administrator', '$2y$10$h.2rmSj059VCc3hNjvnbzOgTVprnmjgP1I9M570.RERGRkU1KbFBq', 1, 'email@example', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_order`
--

CREATE TABLE `t_detail_order` (
  `id_order` varchar(10) NOT NULL,
  `id_item` int(7) NOT NULL,
  `qty` smallint(4) NOT NULL,
  `biaya` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_order`
--

INSERT INTO `t_detail_order` (`id_order`, `id_item`, `qty`, `biaya`) VALUES
('1558087881', 13, 1, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `t_items`
--

CREATE TABLE `t_items` (
  `id_item` int(7) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `harga` int(10) NOT NULL,
  `berat` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_items`
--

INSERT INTO `t_items` (`id_item`, `nama_item`, `harga`, `berat`, `status`, `gambar`, `deskripsi`) VALUES
(3, 'Gerobak GK-008', 1000000, 3000, 1, 'gambar1558085184.jpg', 'Gerobak ini cocok untuk anda'),
(6, 'Gerobak G10', 1000000, 3000, 1, 'gambar1558085513.jpg', 'Cocok '),
(7, 'Gerobak G12', 5000000, 10000, 1, 'gambar1558085603.jpg', 'Cocok'),
(9, 'Kursi Kantor', 1500000, 1000, 1, 'gambar1558087139.jpg', 'kursi nyaman'),
(10, 'Lemari Pakaian', 3500000, 5000, 1, 'gambar1558087363.jpg', 'cocok dah'),
(11, 'Lemari TV', 2500000, 5000, 1, 'gambar1558087429.jpg', 'KAYU JATI'),
(13, 'Tempat Tidur', 3000000, 3000, 1, 'gambar1558087646.jpg', 'ya deh'),
(14, 'Kursi Belalang', 500000, 500, 1, 'gambar1558087978.jpg', 'cocok'),
(15, 'Kursi Kantor', 450000, 1000, 1, 'gambar1558091690.jpg', 'Black'),
(16, 'Kursi Kantor', 450000, 1000, 1, 'gambar1558091799.jpg', 'merah'),
(18, 'Meja belajar', 750000, 1000, 1, 'gambar1558092077.jpg', 'meja');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` smallint(6) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `kategori`, `url`) VALUES
(1, 'Meja', 'meja'),
(2, 'Kursi', 'kursi'),
(4, 'Gerobak', 'gerobak'),
(14, 'Lemari', 'lemari'),
(15, 'Tempat Tidur', 'tempat-tidur');

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `id_order` varchar(10) NOT NULL,
  `id_user` int(7) NOT NULL,
  `total` double NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `pos` int(5) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kurir` varchar(5) NOT NULL,
  `service` varchar(50) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `bts_bayar` date NOT NULL,
  `status_byr` enum('belum','proses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_order`
--

INSERT INTO `t_order` (`id_order`, `id_user`, `total`, `tujuan`, `pos`, `kota`, `kurir`, `service`, `tgl_pesan`, `bts_bayar`, `status_byr`) VALUES
('1558087881', 3, 3162000, 'Kp. Jombang RT 002 RW 003 NO 51', 15318, 'Tangerang Selatan', 'jne', 'YES(Yakin Esok Sampai)', '2019-05-17', '2019-05-20', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_rkategori`
--

CREATE TABLE `t_rkategori` (
  `id_item` int(7) NOT NULL,
  `id_kategori` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rkategori`
--

INSERT INTO `t_rkategori` (`id_item`, `id_kategori`) VALUES
(1, 5),
(2, 13),
(6, 4),
(7, 4),
(9, 2),
(10, 14),
(11, 14),
(13, 15),
(14, 2),
(15, 2),
(16, 2),
(4, 4),
(5, 1),
(5, 2),
(8, 1),
(8, 2),
(12, 14),
(17, 15),
(18, 1),
(3, 4),
(3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id_user` int(7) NOT NULL,
  `username` varchar(35) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reset` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id_user`, `username`, `fullname`, `email`, `password`, `jk`, `telp`, `alamat`, `status`, `reset`) VALUES
(3, 'Rohman', 'Rohman ', 'Rohmanoman521@gmail.com', '$2y$10$7KAB50vGTBPaSCqlqeEZw.aqs0KD3JHx5iCXp1JFK1USm1Unfr7XS', 'L', '089602484584', 'Cilenggang 1', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `t_detail_order`
--
ALTER TABLE `t_detail_order`
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `t_items`
--
ALTER TABLE `t_items`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_items`
--
ALTER TABLE `t_items`
  MODIFY `id_item` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
