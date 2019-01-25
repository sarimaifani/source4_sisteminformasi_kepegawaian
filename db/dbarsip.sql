-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 03:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(3) NOT NULL,
  `id_pegawai` varchar(11) DEFAULT NULL,
  `nama_pegawai` varchar(35) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `id_pegawai`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `jenkel`, `tanggal_masuk`, `agama`, `alamat`, `no_hp`, `email`, `jabatan`) VALUES
(9, '001', 'Bahmar Indra Kurniawan Marpaung', 'Sentang', '1994-01-03', 'Laki-Laki', '2019-01-02', 'Islam', 'Kisaran', '0822334455', 'bahmar@gmail.com', 'Administrator'),
(10, '002', 'Cici Oktaviani', 'Mekar Sari', '1997-10-16', 'Perempuan', '2019-01-02', 'Islam', 'Mekar Sari', '0823445577', 'cici.oktaviani@gmail.com', 'Administrator'),
(11, '003', 'Sari Maifani', 'Tanjung balai', '1997-05-17', 'Perempuan', '2019-01-17', 'Islam', 'Tanjung balai', '081233444665', 'sarimaifani@gmail.com', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'source4@gmail.com', 'Source 4', 1, 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
