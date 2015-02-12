-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2015 at 05:57 AM
-- Server version: 5.5.40
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sistem-taman`
--
CREATE DATABASE IF NOT EXISTS `sistem-taman` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sistem-taman`;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE IF NOT EXISTS `pengaduan` (
`id` int(11) NOT NULL,
  `id_taman` int(11) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `telepon_pelapor` varchar(15) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `link_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `taman`
--

DROP TABLE IF EXISTS `taman`;
CREATE TABLE IF NOT EXISTS `taman` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`id`), ADD KEY `id_taman` (`id_taman`);

--
-- Indexes for table `taman`
--
ALTER TABLE `taman`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taman`
--
ALTER TABLE `taman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_taman`) REFERENCES `taman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
