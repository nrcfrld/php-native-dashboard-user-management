-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2020 at 01:17 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `levels`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nik` int(11) NOT NULL,
  `inisial` varchar(3) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `status` enum('T','LB') NOT NULL DEFAULT 'T',
  `sex` enum('L','P') NOT NULL DEFAULT 'L',
  `agama` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL DEFAULT 'Purwokerto',
  `email` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nik`, `inisial`, `nama_dosen`, `status`, `sex`, `agama`, `login`, `password`, `alamat`, `kota`, `email`, `nohp`, `salary`) VALUES
(90, 'WA', 'BambangSquadron', 'LB', 'P', 'islam', '123', '123', 'Jl. Kemana', 'Jakarta', 'bababang@gmail.com', '088927828', 12200200),
(123, 'en', 'Bambang', 'T', 'P', 'islam', 'nrcfrld', '123456', 'Jl. 2', 'Jakarta Selatan', 'rico@mail.com', '0898988', 5000000),
(182828, 'EF', 'Enrico ', 'LB', 'L', 'islam', 'enrico', 'enrico', 'Jl', 'Jakarta', 'nrcfrld@gmail.com', '0898822', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE `user_levels` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`id`, `username`, `password`, `userlevel`) VALUES
(1, 'user1', 'user1', '1'),
(2, 'user2', 'user2', '2'),
(3, 'user3', 'user3', '3'),
(4, 'user4', 'user4', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `Inisial` (`inisial`);

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182829;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
