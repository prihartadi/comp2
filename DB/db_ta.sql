-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 04:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `part_cas`
--

CREATE TABLE `part_cas` (
  `id_cas` int(11) NOT NULL,
  `brand_cas` varchar(10) NOT NULL,
  `code_cas` varchar(10) NOT NULL,
  `form_cas` varchar(10) NOT NULL,
  `price_cas` int(11) NOT NULL,
  `performance_cas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_cas`
--

INSERT INTO `part_cas` (`id_cas`, `brand_cas`, `code_cas`, `form_cas`, `price_cas`, `performance_cas`) VALUES
(1, 'bitfenix', 'prodigy m', 'mid', 1025000, 50),
(2, 'asd', 'qwe', 'qwe', 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `part_cpu`
--

CREATE TABLE `part_cpu` (
  `id_cpu` int(11) NOT NULL,
  `brand_cpu` varchar(10) NOT NULL,
  `code_cpu` varchar(10) NOT NULL,
  `socket_cpu` varchar(10) NOT NULL,
  `core_cpu` varchar(10) NOT NULL,
  `cache_cpu` varchar(10) NOT NULL,
  `speed_cpu` varchar(10) NOT NULL,
  `price_cpu` int(11) NOT NULL,
  `performance_cpu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_cpu`
--

INSERT INTO `part_cpu` (`id_cpu`, `brand_cpu`, `code_cpu`, `socket_cpu`, `core_cpu`, `cache_cpu`, `speed_cpu`, `price_cpu`, `performance_cpu`) VALUES
(1, 'intel222', 'g4411', 'lga1151', '2', '3mb', '3.3', 752000, 40),
(2, 'intel', 'i3 6100', 'lga1151', '2', '6mb', '3.7', 1485000, 60),
(4, 'ooo', 'ooo', 'ooo', 'ooo', 'ooo', 'ooo', 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `part_dsp`
--

CREATE TABLE `part_dsp` (
  `id_dsp` int(11) NOT NULL,
  `brand_dsp` varchar(10) NOT NULL,
  `code_dsp` varchar(10) NOT NULL,
  `size_dsp` varchar(10) NOT NULL,
  `resolution_dsp` varchar(10) NOT NULL,
  `price_dsp` int(11) NOT NULL,
  `performance_dsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_dsp`
--

INSERT INTO `part_dsp` (`id_dsp`, `brand_dsp`, `code_dsp`, `size_dsp`, `resolution_dsp`, `price_dsp`, `performance_dsp`) VALUES
(1, 'acer', 'P166HQL', '15.6', '1366x768', 785000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `part_gpu`
--

CREATE TABLE `part_gpu` (
  `id_gpu` int(11) NOT NULL,
  `brand_gpu` varchar(10) NOT NULL,
  `code_gpu` varchar(10) NOT NULL,
  `pcie_gpu` varchar(10) NOT NULL,
  `vram_gpu` varchar(10) NOT NULL,
  `vram_size_gpu` varchar(10) NOT NULL,
  `price_gpu` int(11) NOT NULL,
  `performance_gpu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_gpu`
--

INSERT INTO `part_gpu` (`id_gpu`, `brand_gpu`, `code_gpu`, `pcie_gpu`, `vram_gpu`, `vram_size_gpu`, `price_gpu`, `performance_gpu`) VALUES
(1, 'asus', 'strix oc', 'pcie3.0', 'gddr5x', '8gb', 12615000, 95),
(6, 'qwe', 'asd', 'qwe', 'qwe', 'qwe', 111, 123);

-- --------------------------------------------------------

--
-- Table structure for table `part_key`
--

CREATE TABLE `part_key` (
  `id_key` int(11) NOT NULL,
  `brand_key` varchar(10) NOT NULL,
  `code_key` varchar(50) NOT NULL,
  `price_key` int(11) NOT NULL,
  `performance_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_key`
--

INSERT INTO `part_key` (`id_key`, `brand_key`, `code_key`, `price_key`, `performance_key`) VALUES
(1, 'filco', 'majestouch 2 full mx red', 1625000, 90);

-- --------------------------------------------------------

--
-- Table structure for table `part_mbo`
--

CREATE TABLE `part_mbo` (
  `id_mbo` int(11) NOT NULL,
  `brand_mbo` varchar(10) NOT NULL,
  `code_mbo` varchar(10) NOT NULL,
  `socket_mbo` varchar(10) NOT NULL,
  `ram_type_mbo` varchar(10) NOT NULL,
  `pcie_mbo` varchar(10) NOT NULL,
  `sata_mbo` varchar(10) NOT NULL,
  `form_mbo` varchar(10) NOT NULL,
  `chipset_mbo` varchar(10) NOT NULL,
  `price_mbo` int(11) NOT NULL,
  `performance_mbo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_mbo`
--

INSERT INTO `part_mbo` (`id_mbo`, `brand_mbo`, `code_mbo`, `socket_mbo`, `ram_type_mbo`, `pcie_mbo`, `sata_mbo`, `form_mbo`, `chipset_mbo`, `price_mbo`, `performance_mbo`) VALUES
(1, 'asrock', 'gaming k4', 'lga1151', 'ddr4', 'pcie3.0', 'sata3', 'mid/full', 'b150', 1635000, 50),
(3, 'test', 'qwe', 'asd', 'test', 'test', 'test', 'test', 'asd', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part_mem`
--

CREATE TABLE `part_mem` (
  `id_mem` int(11) NOT NULL,
  `brand_mem` varchar(10) NOT NULL,
  `code_mem` varchar(10) NOT NULL,
  `sata_mem` varchar(10) NOT NULL,
  `size_mem` varchar(10) NOT NULL,
  `price_mem` int(11) NOT NULL,
  `performance_mem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_mem`
--

INSERT INTO `part_mem` (`id_mem`, `brand_mem`, `code_mem`, `sata_mem`, `size_mem`, `price_mem`, `performance_mem`) VALUES
(1, 'samsung', 'evo 850', 'sata3', '250gb', 1395000, 85);

-- --------------------------------------------------------

--
-- Table structure for table `part_mos`
--

CREATE TABLE `part_mos` (
  `id_mos` int(11) NOT NULL,
  `brand_mos` varchar(10) NOT NULL,
  `code_mos` varchar(10) NOT NULL,
  `price_mos` int(11) NOT NULL,
  `performance_mos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_mos`
--

INSERT INTO `part_mos` (`id_mos`, `brand_mos`, `code_mos`, `price_mos`, `performance_mos`) VALUES
(1, 'logitech', 'b100', 58000, 50),
(2, 'qwe', 'qwe', 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `part_psu`
--

CREATE TABLE `part_psu` (
  `id_psu` int(11) NOT NULL,
  `brand_psu` varchar(10) NOT NULL,
  `code_psu` varchar(10) NOT NULL,
  `power_psu` varchar(10) NOT NULL,
  `certification_psu` varchar(10) NOT NULL,
  `price_psu` int(11) NOT NULL,
  `performance_psu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_psu`
--

INSERT INTO `part_psu` (`id_psu`, `brand_psu`, `code_psu`, `power_psu`, `certification_psu`, `price_psu`, `performance_psu`) VALUES
(1, 'corsair', 'cx500', '500w', '80+bronze', 935000, 60);

-- --------------------------------------------------------

--
-- Table structure for table `part_ram`
--

CREATE TABLE `part_ram` (
  `id_ram` int(11) NOT NULL,
  `brand_ram` varchar(10) NOT NULL,
  `code_ram` varchar(50) NOT NULL,
  `ram_type_ram` varchar(10) NOT NULL,
  `size_ram` varchar(10) NOT NULL,
  `price_ram` int(11) NOT NULL,
  `performance_ram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_ram`
--

INSERT INTO `part_ram` (`id_ram`, `brand_ram`, `code_ram`, `ram_type_ram`, `size_ram`, `price_ram`, `performance_ram`) VALUES
(1, 'adata', 'AD4U2133W8G15', 'ddr4', '8gb', 957000, 80),
(3, 'asd', 'asd', 'asd', 'test', 123, 123),
(4, 'test', 'qwe', 'qwe', 'test', 312, 3123);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id_transaction` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_transaction` date NOT NULL,
  `total_transaction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id_transaction`, `id_user`, `date_transaction`, `total_transaction`) VALUES
(1, 2, '2016-11-01', 1485000),
(2, 1, '2016-11-10', 2500000),
(5, 3, '2016-12-19', 1485000),
(8, 1, '2016-12-20', 2237000),
(10, 1, '2016-12-20', 2237000),
(11, 3, '2016-02-21', 16487577),
(12, 3, '2016-12-21', 2237020),
(14, 3, '2016-12-21', 752000),
(15, 3, '2016-12-21', 752000),
(16, 3, '2016-12-21', 752000),
(17, 3, '2016-12-21', 752000),
(18, 3, '2016-12-21', 752000),
(19, 3, '2016-12-21', 752000),
(20, 3, '2016-12-21', 752000),
(23, 3, '2016-12-21', 2237000),
(24, 3, '2016-12-21', 2256000),
(25, 7, '2016-12-22', 2237000),
(26, 1, '2017-01-07', 1504123);

-- --------------------------------------------------------

--
-- Table structure for table `transactions_details`
--

CREATE TABLE `transactions_details` (
  `id_transaction_details` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `tipe_part` int(11) NOT NULL,
  `n_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `address`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'surabaya1'),
(2, 'asd', '7815696ecbf1c96e6894b779456d330e', '123'),
(3, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'sidoarjo'),
(6, 'zzz', 'f3abb86bd34cf4d52698f14c0da1dc60', 'zzz'),
(7, 'yyy', 'f0a4058fd33489695d53df156b77c724', 'jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `part_cas`
--
ALTER TABLE `part_cas`
  ADD PRIMARY KEY (`id_cas`);

--
-- Indexes for table `part_cpu`
--
ALTER TABLE `part_cpu`
  ADD PRIMARY KEY (`id_cpu`);

--
-- Indexes for table `part_dsp`
--
ALTER TABLE `part_dsp`
  ADD PRIMARY KEY (`id_dsp`);

--
-- Indexes for table `part_gpu`
--
ALTER TABLE `part_gpu`
  ADD PRIMARY KEY (`id_gpu`);

--
-- Indexes for table `part_key`
--
ALTER TABLE `part_key`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `part_mbo`
--
ALTER TABLE `part_mbo`
  ADD PRIMARY KEY (`id_mbo`);

--
-- Indexes for table `part_mem`
--
ALTER TABLE `part_mem`
  ADD PRIMARY KEY (`id_mem`);

--
-- Indexes for table `part_mos`
--
ALTER TABLE `part_mos`
  ADD PRIMARY KEY (`id_mos`);

--
-- Indexes for table `part_psu`
--
ALTER TABLE `part_psu`
  ADD PRIMARY KEY (`id_psu`);

--
-- Indexes for table `part_ram`
--
ALTER TABLE `part_ram`
  ADD PRIMARY KEY (`id_ram`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_cas`
--
ALTER TABLE `part_cas`
  MODIFY `id_cas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_cpu`
--
ALTER TABLE `part_cpu`
  MODIFY `id_cpu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `part_dsp`
--
ALTER TABLE `part_dsp`
  MODIFY `id_dsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_gpu`
--
ALTER TABLE `part_gpu`
  MODIFY `id_gpu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_key`
--
ALTER TABLE `part_key`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_mbo`
--
ALTER TABLE `part_mbo`
  MODIFY `id_mbo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `part_mem`
--
ALTER TABLE `part_mem`
  MODIFY `id_mem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_mos`
--
ALTER TABLE `part_mos`
  MODIFY `id_mos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_psu`
--
ALTER TABLE `part_psu`
  MODIFY `id_psu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_ram`
--
ALTER TABLE `part_ram`
  MODIFY `id_ram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
