-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2022 at 06:43 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tglDibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_order`, `id_user`, `tglDibuat`) VALUES
(2, 'PO-20220419160408', 3, '2022-04-22 17:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `detail_cart`
--

CREATE TABLE `detail_cart` (
  `id` int(11) NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `msg` text NOT NULL,
  `msg_from` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_cart`
--

INSERT INTO `detail_cart` (`id`, `id_order`, `id_produk`, `msg`, `msg_from`) VALUES
(4, 'PO-20220419160408', 2, 'test', 'test'),
(5, 'PO-20220419160408', 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `detail_orders`
--

CREATE TABLE `detail_orders` (
  `id` int(11) NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `msg` text NOT NULL,
  `msg_from` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_orders`
--

INSERT INTO `detail_orders` (`id`, `id_order`, `id_produk`, `msg`, `msg_from`) VALUES
(1, 'PO-20220423000420', 4, 're test', 'test again'),
(2, 'PO-20220423140416', 3, 'ini msg yang baru', 'ini pengirim yang baru'),
(4, 'PO-20220425000419', 1, 'di coba', 'masih di coba'),
(5, 'PO-20220425120452', 3, 'test', 'test'),
(6, 'PO-20220425120452', 2, 'test', 'test'),
(7, 'PO-20220425120452', 2, 'test', 'test'),
(8, 'PO-20220601130649', 7, 'Happy Birthday', 'benny'),
(9, 'PO-20220601130656', 3, 'test', 'test juga');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengiriman`
--

CREATE TABLE `detail_pengiriman` (
  `id` int(11) NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `telp_pengirim` varchar(50) NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pengiriman`
--

INSERT INTO `detail_pengiriman` (`id`, `id_order`, `tgl_pengiriman`, `nama_pengirim`, `telp_pengirim`, `alamat_tujuan`, `nama_penerima`, `tgl_dibuat`) VALUES
(1, 'PO-20220423000420', '2022-04-27', 'bagong', '12345', 'kota baru driyorejo', 'marteen', '2022-04-24 16:11:51'),
(2, 'PO-20220423140416', '2022-05-06', 'bagong', '1234', 'wiyung', 'asdas', '2022-04-24 16:11:51'),
(3, 'PO-20220425000419', '2022-04-30', 'thanos', '1234567890', 'Kriyan gang 4 blok G no.72', 'yanto', '2022-04-24 17:00:53'),
(4, 'PO-20220425120452', '2022-05-06', 'thanos', '112233', 'kota baru driyorejo', 'marteen', '2022-04-26 20:17:14'),
(5, 'PO-20220601130649', '2022-06-05', 'benny', '123456789', 'kota baru driyorejo', 'suryanto', '2022-06-01 06:20:35'),
(6, 'PO-20220601130656', '2022-06-09', 'bagong', '123456789', 'kota baru driyorejo', 'yanto', '2022-06-01 06:23:29');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `metode_pembayaran` int(11) NOT NULL,
  `bukti_transfer` varchar(55) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Payment',
  `tglDibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `total_harga`, `metode_pembayaran`, `bukti_transfer`, `status`, `tglDibuat`) VALUES
('PO-20220423000420', 1, 547000, 1, NULL, 'Payment', '2022-04-22 17:27:45'),
('PO-20220423140416', 1, 479000, 1, NULL, 'Payment', '2022-04-23 14:06:42'),
('PO-20220425000419', 1, 550000, 2, '62932ff959b20.png', 'Confirm', '2022-04-24 17:00:53'),
('PO-20220425120452', 1, 1679000, 2, '62824d52af857.png', 'Proccess', '2022-04-26 20:17:14'),
('PO-20220601130649', 1, 570000, 1, NULL, 'Payment', '2022-06-01 06:20:35'),
('PO-20220601130656', 1, 479000, 2, NULL, 'Payment', '2022-06-01 06:23:29');

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
  `status` int(11) NOT NULL DEFAULT '2',
  `tglDibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_User`, `username`, `password`, `email`, `status`, `tglDibuat`) VALUES
(1, 'EvanPram', '$2y$10$Cxa7sZf5CbAFJG8fsXV1XeI0aAFL0Hq3L6Bp0tp2TNZRzAbWYSxZO', 'steve696974@gmail.com', 2, '2022-04-23 08:49:04'),
(2, 'Steve__74', '$2y$10$mocZLWyHYsd6bBrxWZJAA.8F1G4ZkCWgqgfUwWQGD9i/lWpGDqvvK', 'admin@admin.admin', 1, '2022-04-23 08:49:04'),
(3, 'laptopcantik', '$2y$10$bk9wWhUuyhxMlzFONCJ7xOCVubqSdcOs3lXn9/Kr8HySUzHLQeQ9.', '123@123.123', 2, '2022-04-23 08:49:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_Barang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `order_id` (`id_order`);

--
-- Indexes for table `detail_cart`
--
ALTER TABLE `detail_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`,`id_produk`);

--
-- Indexes for table `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`,`id_produk`);

--
-- Indexes for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_cart`
--
ALTER TABLE `detail_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_orders`
--
ALTER TABLE `detail_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
