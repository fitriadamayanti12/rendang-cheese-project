-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 01:14 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `idAdmin` varchar(11) NOT NULL,
  `namaAdmin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`idAdmin`, `namaAdmin`, `email`, `password`) VALUES
('1', 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`idKategori`, `namaKategori`) VALUES
(1, 'Special'),
(2, 'Mozzarella'),
(3, 'Provolone'),
(4, 'Camembert'),
(5, 'Ricotta');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_keranjang`
--

CREATE TABLE `tabel_keranjang` (
  `idKeranjang` varchar(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduk` varchar(11) NOT NULL,
  `namaProduk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_komentar`
--

CREATE TABLE `tabel_komentar` (
  `idKomen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `idProduk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`idProduk`, `nama`, `gambar`, `keterangan`, `kategori`, `harga`, `stock`, `path`) VALUES
(11, 'Special', 'special', 'Rendang spesial tanpa campuran cheese', 'Special', 21990, 100, 'image/special.png'),
(12, 'Mozzarella', 'mozarella', 'Rendang dengan varian Mozzarella cheese', 'Mozzarella', 42950, 80, 'image/mozzarella.jpg'),
(13, 'Provolone', 'provolone', 'Rendang dengan varian Provolone cheese', 'Provolone', 45675, 82, 'image/provolone.jpg'),
(14, 'Camembert', 'camembert', 'Rendang dengan varian Camembert cheese', 'Camembert', 47550, 60, 'image/camembert.jpg'),
(15, 'Ricotta', 'ricotta', 'Rendang dengan varian Ricotta cheese', 'Ricotta', 49760, 57, 'image/ricotta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `idUser` varchar(11) NOT NULL,
  `daftarBarang` text NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_trolly`
--

CREATE TABLE `tabel_trolly` (
  `idTrolly` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `idUser` int(11) NOT NULL,
  `namaUser` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `tabel_keranjang`
--
ALTER TABLE `tabel_keranjang`
  ADD PRIMARY KEY (`idKeranjang`);

--
-- Indexes for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`idKomen`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `tabel_trolly`
--
ALTER TABLE `tabel_trolly`
  ADD PRIMARY KEY (`idTrolly`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `idKomen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_trolly`
--
ALTER TABLE `tabel_trolly`
  MODIFY `idTrolly` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
