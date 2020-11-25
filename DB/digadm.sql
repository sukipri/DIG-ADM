-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2020 at 08:01 AM
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
('OTEwODUy201125065821', 'OTgzOTYx201125023208', 'KBRG201125-01', 'IVORY', '2020-11-25', 'hg0t340jfg04jg30gjg30g');

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
('OTgzOTYx201125023208', 'KKBRG1001', 'Kode Kategori barang', '2020-11-25 02:32:08', 'hg0t340jfg'),
('OTMxNDg4201125022511', 'KBRG1001', 'Kode Barang Baru', '2020-11-25 02:25:11', 'hg0t340jfg');

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
-- Table structure for table `da_user_01`
--

CREATE TABLE IF NOT EXISTS `da_user_01` (
  `idmain_user_01` varchar(100) NOT NULL,
  `user_kode_01` varchar(100) NOT NULL,
  `user_nama_01` varchar(100) NOT NULL,
  `user_pass_01` varchar(100) NOT NULL,
  `user_akses_01` varchar(10) NOT NULL,
  PRIMARY KEY (`idmain_user_01`),
  KEY `akses` (`user_akses_01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `da_user_01`
--

INSERT INTO `da_user_01` (`idmain_user_01`, `user_kode_01`, `user_nama_01`, `user_pass_01`, `user_akses_01`) VALUES
('hg0t340jfg04jg30gjg30g', 'USR1001', 'sukipri', '0cc175b9c0f1b6a831c399e269772661', 'A1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
