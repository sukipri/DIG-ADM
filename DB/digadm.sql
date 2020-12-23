-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2020 at 08:19 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digadm`
--

-- --------------------------------------------------------

--
-- Table structure for table `da_barang_01`
--

CREATE TABLE IF NOT EXISTS `da_barang_01` (
  `idmain_barang_01` varchar(100) NOT NULL,
  `idmain_kode_01` varchar(100) NOT NULL,
  `idmain_kat_barang_01` varchar(100) NOT NULL,
  `idmain_unit_satuan_01` varchar(100) NOT NULL,
  `barang_kode_01` varchar(100) NOT NULL,
  `barang_nama_01` varchar(100) NOT NULL,
  `barang_jml01_01` varchar(100) NOT NULL,
  `barang_jml02_01` varchar(100) NOT NULL,
  `barang_jml03_01` varchar(100) NOT NULL,
  `barang_harga_01` varchar(100) NOT NULL,
  `barang_ket_01` varchar(100) NOT NULL,
  `barang_status_01` varchar(10) NOT NULL,
  `barang_uploader` varchar(100) NOT NULL,
  PRIMARY KEY (`idmain_barang_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_barang_01`
--

INSERT INTO `da_barang_01` (`idmain_barang_01`, `idmain_kode_01`, `idmain_kat_barang_01`, `idmain_unit_satuan_01`, `barang_kode_01`, `barang_nama_01`, `barang_jml01_01`, `barang_jml02_01`, `barang_jml03_01`, `barang_harga_01`, `barang_ket_01`, `barang_status_01`, `barang_uploader`) VALUES
('ODg5ODY5201211013411', 'OTMxNDg4201125022511', 'OTEyMDQy201210033416', 'OTc4Mjc1201210070056', 'BRG201211-03', 'CHINA EXOL', '10', '0', '10', '', '-', '', 'hg0t340jfg04jg30gjg30g'),
('OTgxNjE4201210033437', 'OTMxNDg4201125022511', 'OTEyMDQy201210033416', 'OTc4Mjc1201210070056', 'BRG201210-02', 'CHINA POOL', '5', '0', '5', '', '-', '', ''),
('OTY3NjMx201210061245', 'OTMxNDg4201125022511', 'OTEwODUy201125065821', 'OTA4NjM4201209061904', 'BRG201210-01', 'AKA MITOL 90', '2100', '0', '2100', '10000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `da_barang_qty_01`
--

CREATE TABLE IF NOT EXISTS `da_barang_qty_01` (
  `idmain_barang_qty_01` varchar(100) NOT NULL,
  `idmain_kode_01` varchar(100) NOT NULL,
  `idmain_barang_01` varchar(100) NOT NULL,
  `qty_kode_01` varchar(100) NOT NULL,
  `qty_jml01_01` varchar(100) NOT NULL,
  `qty_jml02_01` varchar(100) NOT NULL,
  `qty_harga_01` varchar(100) NOT NULL,
  `qty_tglinput_01` date NOT NULL,
  `qty_ket_01` text NOT NULL,
  `qty_uploader` varchar(100) NOT NULL,
  PRIMARY KEY (`idmain_barang_qty_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_barang_qty_01`
--

INSERT INTO `da_barang_qty_01` (`idmain_barang_qty_01`, `idmain_kode_01`, `idmain_barang_01`, `qty_kode_01`, `qty_jml01_01`, `qty_jml02_01`, `qty_harga_01`, `qty_tglinput_01`, `qty_ket_01`, `qty_uploader`) VALUES
('ODk1MDQw201211072941', 'OTY5OTg0201211071235', 'OTY3NjMx201210061245', 'QTY201211-01', '300', '1800', '', '2020-12-11', 'Penambahan QTY', 'hg0t340jfg04jg30gjg30g'),
('OTU4NTM3201211013447', 'OTY5OTg0201211071235', 'OTgxNjE4201210033437', 'QTY201211-02', '1', '4', '', '2020-12-11', '-', 'hg0t340jfg04jg30gjg30g');

-- --------------------------------------------------------

--
-- Table structure for table `da_jual_barang_diskon_01`
--

CREATE TABLE IF NOT EXISTS `da_jual_barang_diskon_01` (
  `idmain_jual_barang_diskon_01` varchar(100) NOT NULL,
  `idmain_kode_01` varchar(100) NOT NULL,
  `diskon_kode_01` varchar(100) NOT NULL,
  `diskon_nama_01` varchar(100) NOT NULL,
  `diskon_nom01_01` varchar(100) NOT NULL,
  `diskon_ket_01` text NOT NULL,
  PRIMARY KEY (`idmain_jual_barang_diskon_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_jual_barang_diskon_01`
--

INSERT INTO `da_jual_barang_diskon_01` (`idmain_jual_barang_diskon_01`, `idmain_kode_01`, `diskon_kode_01`, `diskon_nama_01`, `diskon_nom01_01`, `diskon_ket_01`) VALUES
('OTgzODA4201215023510', 'OTA0NzEx201214083217', 'DIS201215-01', 'Diskon Borongan', '10', 'Diskon untuk Borongan');

-- --------------------------------------------------------

--
-- Table structure for table `da_jual_barang_harga_01`
--

CREATE TABLE IF NOT EXISTS `da_jual_barang_harga_01` (
  `idmain_jual_barang_harga_01` varchar(100) NOT NULL,
  `idmain_kode_01` varchar(100) NOT NULL,
  `idmain_barang_01` varchar(100) NOT NULL,
  `idmain_jual_barang_diskon_01` varchar(100) NOT NULL,
  `harga_kode_01` varchar(100) NOT NULL,
  `harga_nom01_01` varchar(100) NOT NULL,
  `harga_ket_01` varchar(100) NOT NULL,
  `harga_uploader` varchar(100) NOT NULL,
  PRIMARY KEY (`idmain_jual_barang_harga_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_jual_barang_harga_01`
--

INSERT INTO `da_jual_barang_harga_01` (`idmain_jual_barang_harga_01`, `idmain_kode_01`, `idmain_barang_01`, `idmain_jual_barang_diskon_01`, `harga_kode_01`, `harga_nom01_01`, `harga_ket_01`, `harga_uploader`) VALUES
('OTc3NDg1201215032505', 'OTUyMTMx201215031553', 'OTY3NjMx201210061245', 'OTgzODA4201215023510', 'HRG201215-01', '4000', '-', 'hg0t340jfg04jg30gjg30g'),
('OTQyNDYx201215072302', 'OTUyMTMx201215031553', 'ODg5ODY5201211013411', '0', 'HRG201215-02', '5000', '-', 'hg0t340jfg04jg30gjg30g');

-- --------------------------------------------------------

--
-- Table structure for table `da_jual_barang_nota_01`
--

CREATE TABLE IF NOT EXISTS `da_jual_barang_nota_01` (
  `idmain_jual_barang_nota_01` varchar(100) NOT NULL,
  `idmain_kode_01` varchar(100) NOT NULL,
  `idmain_user_01` varchar(100) NOT NULL,
  `nota_kode_01` varchar(100) NOT NULL,
  `nota_nama_01` varchar(100) NOT NULL,
  `nota_jenis_01` varchar(100) NOT NULL,
  `nota_tglinput_01` date NOT NULL,
  `nota_ket_01` text NOT NULL,
  `nota_uploader` varchar(100) NOT NULL,
  PRIMARY KEY (`idmain_jual_barang_nota_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `da_kat_barang_01`
--

CREATE TABLE IF NOT EXISTS `da_kat_barang_01` (
  `idmain_kat_barang_01` varchar(100) NOT NULL,
  `idmain_kode_01` varchar(100) NOT NULL,
  `kat_kode_01` varchar(100) NOT NULL,
  `kat_nama_01` varchar(100) NOT NULL,
  `kat_tglinput_01` date NOT NULL,
  `kat_uploader` varchar(100) NOT NULL,
  PRIMARY KEY (`idmain_kat_barang_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_kat_barang_01`
--

INSERT INTO `da_kat_barang_01` (`idmain_kat_barang_01`, `idmain_kode_01`, `kat_kode_01`, `kat_nama_01`, `kat_tglinput_01`, `kat_uploader`) VALUES
('OTEwODUy201125065821', 'OTgzOTYx201125023208', 'KBRG201125-01', 'IVORY', '2020-11-25', 'hg0t340jfg04jg30gjg30g'),
('OTEyMDQy201210033416', 'OTgzOTYx201125023208', 'KBRG201210-02', 'CHINA', '2020-12-10', 'hg0t340jfg04jg30gjg30g'),
('OTU2MTM2201216035630', 'OTMxNDg4201125022511', 'KBRG201216-03', 'OUTDOOR', '2020-12-16', 'hg0t340jfg04jg30gjg30g');

-- --------------------------------------------------------

--
-- Table structure for table `da_kode_01`
--

CREATE TABLE IF NOT EXISTS `da_kode_01` (
  `idmain_kode_01` varchar(100) NOT NULL,
  `kode_kode_01` varchar(100) NOT NULL,
  `kode_ket_01` text NOT NULL,
  `kode_tglinput_01` datetime NOT NULL,
  `kode_uploader` varchar(10) NOT NULL,
  PRIMARY KEY (`idmain_kode_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_kode_01`
--

INSERT INTO `da_kode_01` (`idmain_kode_01`, `kode_kode_01`, `kode_ket_01`, `kode_tglinput_01`, `kode_uploader`) VALUES
('OTA0NzEx201214083217', 'KDDIS01', 'Diskon / Promo', '2020-12-14 08:32:17', 'hg0t340jfg'),
('OTcwMzU3201209043437', 'KDUNT01', 'Unit satuan', '2020-12-09 04:34:37', 'hg0t340jfg'),
('OTgzOTYx201125023208', 'KKBRG1001', 'Kode Kategori barang', '2020-11-25 02:32:08', 'hg0t340jfg'),
('OTMxNDg4201125022511', 'KBRG1001', 'Kode Barang Baru', '2020-11-25 02:25:11', 'hg0t340jfg'),
('OTUyMTMx201215031553', 'KDHRG01', 'Harga Barang', '2020-12-15 03:15:53', 'hg0t340jfg'),
('OTY4ODUy201218052921', 'KDUSR01', 'User Admin & Customer', '2020-12-18 05:29:21', 'hg0t340jfg'),
('OTY5OTg0201211071235', 'KDQTY-01', 'Penambahan QTY', '2020-12-11 07:12:35', 'hg0t340jfg');

-- --------------------------------------------------------

--
-- Table structure for table `da_qa_01`
--

CREATE TABLE IF NOT EXISTS `da_qa_01` (
  `idmain_qa_01` varchar(100) NOT NULL,
  `qa_kode` varchar(100) NOT NULL,
  `qa_01` varchar(100) NOT NULL,
  `qa_02` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `uploader` varchar(50) NOT NULL,
  PRIMARY KEY (`idmain_qa_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_qa_01`
--

INSERT INTO `da_qa_01` (`idmain_qa_01`, `qa_kode`, `qa_01`, `qa_02`, `ket`, `status`, `uploader`) VALUES
('QA848ug9rgu95u45ugt9tu4tj', 'QA1001', '4 X 4', '16', '-', '2', 'TEST'),
('QA8sdfsf3we4t4', 'QA1003', '8 X 8', '64', '-', '2', 'TEST'),
('QAsdf70sudf0sduf0sduf0s', 'QA1002', '10 : 2', '5', '-', '2', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `da_unit_satuan_01`
--

CREATE TABLE IF NOT EXISTS `da_unit_satuan_01` (
  `idmain_unit_satuan_01` varchar(50) NOT NULL,
  `idmain_kode_01` varchar(50) NOT NULL,
  `unit_kode_01` varchar(50) NOT NULL,
  `unit_nama_01` varchar(50) NOT NULL,
  PRIMARY KEY (`idmain_unit_satuan_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_unit_satuan_01`
--

INSERT INTO `da_unit_satuan_01` (`idmain_unit_satuan_01`, `idmain_kode_01`, `unit_kode_01`, `unit_nama_01`) VALUES
('OTA4NjM4201209061904', 'OTgzOTYx201125023208', 'CM', 'Centimeter'),
('OTc4Mjc1201210070056', 'OTcwMzU3201209043437', 'M', 'Meter');

-- --------------------------------------------------------

--
-- Table structure for table `da_user_01`
--

CREATE TABLE IF NOT EXISTS `da_user_01` (
  `idmain_user_01` varchar(100) NOT NULL,
  `idmain_kode_01` varchar(100) NOT NULL,
  `user_kode_01` varchar(100) NOT NULL,
  `user_nama_01` varchar(100) NOT NULL,
  `user_pass_01` varchar(100) NOT NULL,
  `user_akses_01` varchar(10) NOT NULL,
  `user_namaasli_01` varchar(100) NOT NULL,
  PRIMARY KEY (`idmain_user_01`),
  KEY `akses` (`user_akses_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_user_01`
--

INSERT INTO `da_user_01` (`idmain_user_01`, `idmain_kode_01`, `user_kode_01`, `user_nama_01`, `user_pass_01`, `user_akses_01`, `user_namaasli_01`) VALUES
('hg0t340jfg04jg30gjg30g', '', 'USR1001', 'sukipri', '0cc175b9c0f1b6a831c399e269772661', 'A1', ''),
('OTE2OTgy201219032538', 'OTY4ODUy201218052921', 'USR201219-02', 'USR201219-02', '0cc175b9c0f1b6a831c399e269772661', 'C1', 'Agung Gumelar');

-- --------------------------------------------------------

--
-- Table structure for table `da_user_dtl_01`
--

CREATE TABLE IF NOT EXISTS `da_user_dtl_01` (
  `idmain_user_dtl_01` varchar(100) NOT NULL,
  `idmain_user_01` varchar(100) NOT NULL,
  `dtl_kode_01` varchar(100) NOT NULL,
  `dtl_nama_01` varchar(100) NOT NULL,
  `dtl_alamat_01` text NOT NULL,
  `dtl_telp_01` varchar(100) NOT NULL,
  `dtl_email_01` varchar(100) NOT NULL,
  `dtl_ket_01` text NOT NULL,
  PRIMARY KEY (`idmain_user_dtl_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
