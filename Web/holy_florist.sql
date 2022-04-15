-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2022 at 08:23 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holy_florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_Barang` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_Barang`, `nama`, `jenis`, `model`, `ukuran`, `harga`, `gambar`, `status`) VALUES
(1, 'Karangan Bunga Titik 3', 'Papan Bunga', 'Printing/Cetak', '240x140', 550000, '6253b861baac3.png', 1),
(2, 'Karangan Bunga Titik 3 Besar', 'Papan Bunga', 'Printing/Cetak', '240x140', 600000, '6253b86a0fffd.png', 1),
(3, 'Karangan Bunga Titik 1', 'Papan Bunga', 'Printing/Cetak', '240x140', 479000, '6253b870ea4f8.png', 1),
(4, 'Karangan Bunga Titik 2 Atas Bawah', 'Papan Bunga', 'Printing/Cetak', '240x140', 547000, '6253b87872309.png', 1),
(5, 'Karangan Bunga Titik 3 kecil', 'Papan Bunga', 'Printing/Cetak', '240x140', 495000, '6253b8874c025.png', 1),
(6, 'Buket Jumbo Bulat', 'Buket', NULL, NULL, 500000, '6253b88fa8106.png', 1),
(7, 'Karangan Bunga Titik 3', 'Papan Bunga', 'Foam(Gabus)', '240x140', 570000, '6253b89e03bc1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tglDibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `tglDibuat`) VALUES
(1, 'Papan Bunga', '2022-04-11 12:01:44'),
(2, 'Buket', '2022-04-11 12:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `noRek` varchar(50) NOT NULL,
  `logo` text,
  `an` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `metode`, `noRek`, `logo`, `an`, `status`) VALUES
(1, 'test', '12345', 'test.png', 'test', 1),
(2, 'another test', '1122334455', 'this one is test again', 'another test to', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_User` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_User`, `username`, `password`, `email`, `status`) VALUES
(1, 'EvanPram', '$2y$10$Cxa7sZf5CbAFJG8fsXV1XeI0aAFL0Hq3L6Bp0tp2TNZRzAbWYSxZO', 'steve696974@gmail.com', 2),
(2, 'Steve__74', '$2y$10$mocZLWyHYsd6bBrxWZJAA.8F1G4ZkCWgqgfUwWQGD9i/lWpGDqvvK', 'admin@admin.admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_Barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
