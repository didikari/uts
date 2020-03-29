-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2020 at 03:18 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `tanggal_lahir`, `jurusan`, `alamat`) VALUES
(1, 'Didik Ariyanto', '2120170076', '28-09-1994', 'Teknik Informatika', 'Tuban'),
(2, 'Ayu Rohmania', '2120170077', '28-09-2000', 'Teknik Informatika', 'Bojonegoro'),
(3, 'Siska Fitriani', '2120170078', '28-09-2000', 'Teknik Informatika', 'Tuban'),
(4, 'Mudiono', '2120170079', '28-08-1999', 'Teknik Informatika', 'Tuban'),
(5, 'M Latif Jauhari', '2120170099', '28-09-1997', 'Teknik Informatika', 'Tuban');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
