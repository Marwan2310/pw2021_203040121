-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 12:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040121`
--

-- --------------------------------------------------------

--
-- Table structure for table `gitar`
--

CREATE TABLE `gitar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gitar`
--

INSERT INTO `gitar` (`id`, `gambar`, `merek`, `nama`, `deskripsi`, `harga`, `kategori`) VALUES
(1, 'gibson.jpg', 'Gibson', 'Gibson Lespaul EPIPHONE', 'Original guitar from gibson which is very legendary with Gibson Lespaul guitar', '8000000', 'Electric Guitar'),
(2, 'fender.jpg', 'Fender', 'Fender Telecaster', 'the atmosphere of jazz and ballads is even better with the Fender Telecaster', '9000000', 'Electric Guitar'),
(3, 'ibanez.jpg', 'Ibanez', 'Ibanez RG 350L', 'the atmosphere of rock and metal music is better with the performance of ibanez', '6000000', 'Electic Guitar'),
(4, 'pac.jpg', 'Yamaha', 'Yamaha PAC112j', 'all kinds of music are better suited to Yamaha', '7000000', 'Electric Guitar'),
(5, 'Cort.jpg', 'Cort', 'Cort SFX Dao Nat', 'provides a distinctive sound for all types of music', '6000000', 'Electric Guitar'),
(6, 'wod.jpg', 'Lakewood', 'Lakewood', 'the soft sound of the afternoon suits Lakewood', '4000000', 'Acoustic Guitar'),
(7, 'Taylor.jpg', 'Taylor', 'Taylor 214CE Grand Auditoriun', 'give a different look like a superstar with Taylor', '5000000', 'Acoustic Guitar'),
(8, 'biola.jpg', 'Cervini', 'Cremona HV-200', 'beautiful voice with Cremona HV-200', '3000000', 'Violin'),
(9, 'yas.jpg', 'Yamaha', 'Yamaha YAS 62', 'which can give a new atmosphere with Yamaha YAS', '3000000', 'Sexophone'),
(10, 'arius.jpg', 'Yamaha ', 'Yamaha Arius', 'provides beautiful sound with the keys', '6000000', 'Piano Acoustic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gitar`
--
ALTER TABLE `gitar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gitar`
--
ALTER TABLE `gitar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
