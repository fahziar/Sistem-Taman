-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 10:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistem-pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `telepon_pelapor` varchar(15) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `isi` text NOT NULL,
  `link_foto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_taman` (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `tid`, `nama_pelapor`, `telepon_pelapor`, `judul`, `tanggal`, `status`, `isi`, `link_foto`) VALUES
(6, 1, 'esgrhdfhg', '85762378535', 'tes', '2015-02-16', '0', 'lkjthfgdfsds', 'images/11-1557263_10202936277671429_6907036349677908901_o.jpg'),
(7, 2, 'ngbfvdc', 'bfvdzxz', 'jgthngfbdfv', '2015-02-16', '0', 'hjggfbvfcx', 'images/2-10636282_4505977624897_3157217836928926631_n.jpg'),
(8, 2, 'hgfbdfvsdcasx', '0812567679763', 'ngdfvsda', '2015-02-16', '0', 'hdgbfsdfvc', 'images/12-1557263_10202936277671429_6907036349677908901_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `taman`
--

CREATE TABLE IF NOT EXISTS `taman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `taman`
--

INSERT INTO `taman` (`id`, `nama`) VALUES
(1, 'Taman Cinta'),
(2, 'Taman Dusta');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `taman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
