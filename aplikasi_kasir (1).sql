-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 02:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` int(11) NOT NULL,
  `NamaBarang` varchar(30) NOT NULL,
  `Satuan` char(20) NOT NULL,
  `HargaSatuan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `NamaBarang`, `Satuan`, `HargaSatuan`) VALUES
(3671, 'Indomie Ayam Bawang', 'bungkus', 2500),
(3672, 'Gula', 'Kg', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `ID_Penjualan` int(11) NOT NULL,
  `ID_Barang` int(11) NOT NULL,
  `Kuantitas` smallint(6) NOT NULL,
  `HargaSatuan` float NOT NULL,
  `Sub_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `ID_Kasir` int(11) NOT NULL,
  `Username` char(10) NOT NULL,
  `NamaKasir` varchar(30) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `NomorHP` char(15) NOT NULL,
  `NomorKTP` char(20) NOT NULL,
  `Password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`ID_Kasir`, `Username`, `NamaKasir`, `Alamat`, `NomorHP`, `NomorKTP`, `Password`) VALUES
(1010, 'Budi', 'Budi Maryadi', 'Tangerang', '085616126121', '567456745674', 'kasir'),
(1011, 'badu', 'Badu Armantu', 'Tasik', '089798766546', '123412567854', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `ID_Penjualan` int(11) NOT NULL,
  `WaktuTransaksi` datetime NOT NULL,
  `Total` float NOT NULL,
  `ID_Shift` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `ID_Shift` int(11) NOT NULL,
  `ID_Kasir` int(11) NOT NULL,
  `WaktuBuka` datetime NOT NULL,
  `SaldoAwal` double NOT NULL,
  `JumlahPenjualan` double NOT NULL,
  `SaldoAkhir` double NOT NULL,
  `WaktuTutup` datetime NOT NULL,
  `Status` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `fk_penjualan` (`ID_Penjualan`),
  ADD KEY `fk_barang` (`ID_Barang`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`ID_Kasir`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`ID_Penjualan`),
  ADD KEY `fk_shift` (`ID_Shift`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`ID_Shift`),
  ADD KEY `fk_kasir` (`ID_Kasir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3674;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `ID_Kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `ID_Penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`ID_Barang`) REFERENCES `barang` (`ID_Barang`),
  ADD CONSTRAINT `fk_penjualan` FOREIGN KEY (`ID_Penjualan`) REFERENCES `penjualan` (`ID_Penjualan`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_shift` FOREIGN KEY (`ID_Shift`) REFERENCES `shift` (`ID_Shift`);

--
-- Constraints for table `shift`
--
ALTER TABLE `shift`
  ADD CONSTRAINT `fk_kasir` FOREIGN KEY (`ID_Kasir`) REFERENCES `kasir` (`ID_Kasir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
