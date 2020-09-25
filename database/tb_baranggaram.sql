-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 12:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_posgaram`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_baranggaram`
--

CREATE TABLE `tb_baranggaram` (
  `id_barang` int(11) NOT NULL,
  `fotobarang` varchar(100) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `barcode` int(11) NOT NULL,
  `expaid` date NOT NULL,
  `id_gudang` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_warna` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `hargabeli` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `stokmin` int(11) NOT NULL,
  `id_konversi` int(11) NOT NULL,
  `hasil_konversi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tglupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_baranggaram`
--

INSERT INTO `tb_baranggaram` (`id_barang`, `fotobarang`, `barang`, `barcode`, `expaid`, `id_gudang`, `id_cabang`, `id_satuan`, `id_kategori`, `id_warna`, `merk`, `hargabeli`, `stok`, `stokmin`, `id_konversi`, `hasil_konversi`, `id_user`, `tglupdate`) VALUES
(3, '4x6 red.jpg', 'garam yodium', 20201, '2020-09-29', 3, 2, 21, 8, 6, 'Refina', 200000, 10, 6, 6, 10, 1, '2020-09-25'),
(4, '4x6 red.jpg', 'yagaram', 100012, '2020-09-26', 3, 2, 21, 8, 2, 'Refinana', 5000, 2000, 10, 4, 4000000, 1, '2020-09-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_baranggaram`
--
ALTER TABLE `tb_baranggaram`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_baranggaram`
--
ALTER TABLE `tb_baranggaram`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
