-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 05:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE IF NOT EXISTS `kandidat` (
  `nim` char(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `angkatan` char(4) NOT NULL,
  `ipk_murni` float NOT NULL DEFAULT '0',
  `ipk` tinyint(5) NOT NULL DEFAULT '0',
  `nilai_matkul` tinyint(5) NOT NULL DEFAULT '0',
  `sertifikat` tinyint(5) NOT NULL DEFAULT '0',
  `pengalaman` tinyint(5) NOT NULL DEFAULT '0',
  `tes` tinyint(5) NOT NULL DEFAULT '0',
  `suara` tinyint(5) NOT NULL DEFAULT '0',
  `materi` tinyint(5) NOT NULL DEFAULT '0',
  `penyampaian` tinyint(5) NOT NULL DEFAULT '0',
  `sikap` tinyint(5) NOT NULL DEFAULT '0',
  `interaksi` tinyint(5) NOT NULL DEFAULT '0',
  `karakter` tinyint(5) NOT NULL DEFAULT '0',
  `komitmen` tinyint(5) NOT NULL DEFAULT '0',
  `konsistensi` tinyint(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`nim`, `nama`, `prodi`, `angkatan`, `ipk_murni`, `ipk`, `nilai_matkul`, `sertifikat`, `pengalaman`, `tes`, `suara`, `materi`, `penyampaian`, `sikap`, `interaksi`, `karakter`, `komitmen`, `konsistensi`) VALUES
('170533628534', 'Mifta Dewayani', 'S1 Pendidikan Teknik Informatika', '2017', 3.52, 5, 4, 1, 1, 1, 2, 3, 3, 4, 3, 3, 4, 5),
('170533628550', 'Johan Ahadi Chandra', 'S1 Pendidikan Teknik Informatika', '2017', 3.78, 5, 5, 1, 1, 2, 3, 4, 3, 3, 2, 4, 4, 5),
('170533628557', 'M. Choirul Fany', 'S1 Pendidikan Teknik Informatika', '2017', 3.31, 4, 4, 3, 1, 2, 4, 3, 3, 3, 3, 4, 3, 4),
('170533628560', 'Miftakhul Jannah', 'S1 Pendidikan Teknik Informatika', '2017', 3.51, 5, 4, 3, 1, 2, 2, 4, 3, 3, 3, 4, 4, 3),
('170533628600', 'Ismed Eko Hadi Saputra', 'S1 Pendidikan Teknik Informatika', '2017', 3.4, 4, 5, 1, 1, 3, 3, 3, 3, 4, 3, 4, 3, 4),
('170533628604', 'Muhammad Farid Ary Nugroho', 'S1 Pendidikan Teknik Informatika', '2017', 3.41, 4, 4, 1, 1, 1, 4, 3, 3, 3, 3, 4, 4, 5),
('170533628622', 'Muhammad Ferdian Firmansyah', 'S1 Pendidikan Teknik Informatika', '2017', 3.4, 4, 4, 1, 1, 3, 3, 3, 3, 3, 3, 3, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
 ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
