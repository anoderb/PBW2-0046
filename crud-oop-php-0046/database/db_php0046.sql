-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 05:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php0046`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user0046`
--

CREATE TABLE `tb_user0046` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jns_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `nohp` char(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user0046`
--

INSERT INTO `tb_user0046` (`id`, `nama`, `alamat`, `jns_kelamin`, `nohp`, `foto`) VALUES
(32, 'Ellaa', 'Jakarta Timur', 'perempuan', '089508900034', 'ella.jpg'),
(33, 'gabriel', 'Makassar Sulawesi', 'laki-laki', '08950890023', 'ella2.jpg'),
(34, 'Admin Fufufafa', 'oslo wakanda', 'laki-laki', '08950504456', 'fufufafa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user0046`
--
ALTER TABLE `tb_user0046`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user0046`
--
ALTER TABLE `tb_user0046`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
