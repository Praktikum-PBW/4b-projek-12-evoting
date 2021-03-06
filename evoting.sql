-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 06:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakor`
--

CREATE TABLE `cakor` (
  `id_ckr` int(12) NOT NULL,
  `nu_ckr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakor`
--

INSERT INTO `cakor` (`id_ckr`, `nu_ckr`) VALUES
(69, 'CAKOR 1'),
(70, 'CAKOR 2'),
(71, 'CAKOR 3'),
(75, 'CAKOR 4');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_idt` int(12) NOT NULL,
  `id_ckr` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `vm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_idt`, `id_ckr`, `nama`, `slogan`, `foto`, `vm`) VALUES
(23, 70, 'Annisa Rahma Putri S.Kom', 'RENDAHKAN HATIMU, DAN PILIH AKU SEBAGAI CAKOR MU', 'CAKOR 2.jpg', 'Visi  : MENCIPTAKAN SUASANA AKTIF PADA RUANG LINGKUNGAN INTROVERT\r\nMisi : MENGURANGI PEMAKAIAN FITUR SILENT MODE PADA INTROVERT PEOPLE'),
(24, 71, 'Irna Purnahasanah', 'USAHAMU PENENTU KEPUSINGANMU', 'CAKOR 3.jpeg', 'Visi  : MENJADI GARDA TERDEPAN SEBAGAI PELOPOR LITERASI\r\nMisi : MENJADIKAN MAHAHASISWA YANG TELITI TENANG DALAM MEMBACA TUGAS DOSEN & ASDOS'),
(36, 69, 'Assyifa Khalif S.Kom', 'BEBAS TUNTAS DALAM PERLAWANAN BAGI YANG DI TINGGAL ORMAWA', 'CAKOR 1.jpeg', 'VISI : MENJADIKAN UNSIKA GERBANG UTAMA PERLAWANAN MISI : MEWUJUDKAN MAHASISWA KRITIS AKTIF DAN AGRESIF DALAM PENINDASAN PENGUASA'),
(37, 75, 'Baek Ji-Heon', 'My Way', 'CAKOR 4.jpg', 'VISI : MENJAGA KESTABILAN, KENYAMANAN, DAN KESEMPURNAAN JUGA KEBEBASAN GRUP DENGAN MENERAPKAN SLOGAN MY WAY\r\nMISI : MEMANCING MAHASISWA UNTUK MELAKUKAN KEINGINANNYA SESUAI JALAN PILIHANNYA');

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE `polling` (
  `id` int(11) NOT NULL,
  `cakor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polling`
--

INSERT INTO `polling` (`id`, `cakor`, `value`) VALUES
(1, 'CAKOR 1', 2),
(2, 'CAKOR 2', 1),
(3, 'CAKOR 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_usr` varchar(16) NOT NULL,
  `nm_usr` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `jns_usr` enum('admin','mhs') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_usr`, `nm_usr`, `email`, `pass`, `jns_usr`) VALUES
('1', 'admin', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin'),
('2010631170014', 'Irna Purnahasanah', '2010631170014@student.unsika.ac.id', '3534eb0693c7554f013c0bdf08e50134d7930e4b', 'mhs'),
('2010631170055', 'Annisa Rahma Putri', '2010631170055@student.unsika.ac.id', '5ce6cf480683da4e2bcf0bcdf460ae03b57c4853', 'mhs'),
('2010631170058', 'Assyifa Khalif', '2010631170058@student.unsika.ac.id', 'b4a62c2febd2f8ebff063536a17635a4f4378df2', 'mhs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakor`
--
ALTER TABLE `cakor`
  ADD PRIMARY KEY (`id_ckr`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_idt`),
  ADD KEY `id_ktg` (`id_ckr`);

--
-- Indexes for table `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakor`
--
ALTER TABLE `cakor`
  MODIFY `id_ckr` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_idt` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `polling`
--
ALTER TABLE `polling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `identitas`
--
ALTER TABLE `identitas`
  ADD CONSTRAINT `identitas_ibfk_1` FOREIGN KEY (`id_ckr`) REFERENCES `cakor` (`id_ckr`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
