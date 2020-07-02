-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 04:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_kuesioner`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(5) NOT NULL,
  `responden_ke` int(5) NOT NULL,
  `id_pertanyaan` int(5) NOT NULL,
  `id_jawaban` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `responden_ke`, `id_pertanyaan`, `id_jawaban`) VALUES
(5, 3, 1, 2),
(6, 3, 2, 5),
(7, 3, 3, 8),
(8, 3, 4, 11),
(9, 3, 5, 14),
(10, 3, 6, 17),
(11, 3, 7, 20),
(12, 3, 8, 22),
(13, 3, 9, 26),
(14, 3, 10, 29),
(15, 3, 11, 32),
(16, 3, 12, 35),
(17, 3, 13, 38),
(18, 3, 14, 41),
(19, 3, 15, 43),
(20, 3, 16, 46),
(21, 3, 17, 48),
(22, 3, 18, 51),
(23, 4, 1, 2),
(24, 4, 2, 5),
(25, 4, 3, 9),
(26, 4, 4, 10),
(27, 4, 5, 15),
(28, 4, 6, 17),
(29, 4, 7, 20),
(30, 4, 8, 24),
(31, 4, 9, 26),
(32, 4, 10, 29),
(33, 4, 11, 33),
(34, 4, 12, 36),
(35, 4, 13, 37),
(36, 4, 14, 41),
(37, 4, 15, 43),
(38, 4, 16, 46),
(39, 4, 17, 48),
(40, 4, 18, 51),
(41, 5, 1, 1),
(42, 5, 2, 5),
(43, 5, 3, 8),
(44, 5, 4, 12),
(45, 5, 5, 14),
(46, 5, 6, 17),
(47, 5, 7, 20),
(48, 5, 8, 24),
(49, 5, 9, 27),
(50, 5, 10, 30),
(51, 5, 11, 33),
(52, 5, 12, 35),
(53, 5, 13, 37),
(54, 5, 14, 41),
(55, 5, 15, 44),
(56, 5, 16, 45),
(57, 5, 17, 48),
(58, 5, 18, 51),
(59, 6, 1, 1),
(60, 6, 2, 4),
(61, 6, 3, 9),
(62, 6, 4, 12),
(63, 6, 5, 14),
(64, 6, 6, 17),
(65, 6, 7, 21),
(66, 6, 8, 22),
(67, 6, 9, 26),
(68, 6, 10, 29),
(69, 6, 11, 32),
(70, 6, 12, 35),
(71, 6, 13, 39),
(72, 6, 14, 41),
(73, 6, 15, 44),
(74, 6, 16, 45),
(75, 6, 17, 47),
(76, 6, 18, 51);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL,
  `nama_pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `nama_pertanyaan`) VALUES
(1, 'Jenis Kelamin'),
(2, 'Umur'),
(3, 'Jika anda keluar dari rumah, apakah menggunakan masker?'),
(4, 'Lalu, masker jenis apa yang sering anda gunakan?'),
(5, 'Jika berada di luar rumah, apakah anda selalu menjaga jarak dengan orang lain minimal 1 meter?'),
(6, 'Jika saya memasuki area publik seperti kantor, toko, supermarket, mall, pasar, saya selalu mencuci tangan dengan air dan sabun atau hand sanitizer yang sudah disediakan.'),
(7, 'Jika membutuhkan makanan, saya memesan makanan secara online, telepon dan atau sejenisnya selama masa pandemi COVID-19 ini'),
(8, 'Jika membutuhkan makanan, saya lebih suka membawa pulang atau membungkus makanan selama masa pandemi COVID-19 ini'),
(9, 'Jika saya berada di restoran, kafe, rumah makan, kedai kopi dan sejenisnya, saya selalu menjaga jarak dengan hanya duduk maksimal 2 orang dalam 1 meja.'),
(10, 'Saya selalu membawa hand sanitizer bila saya pergi keluar dari rumah'),
(11, 'Menurut anda, apakah virus COVID-19 ini berbahaya dan dapat menimbulkan kematian?'),
(12, 'Bagaimanakah cara penularan virus COVID-19 antar manusia?'),
(13, 'Manakah pernyataan yang benar mengenai gejala dari penyakit COVID-19?'),
(14, 'Tahukah anda manfaat dari masker yang harus kita gunakan?'),
(15, 'Benar atau salahkah pernyataan ini : \"Masker yang kita pakai mengurangi risiko penularan penyakit flu/batuk/pilek dari kita ke orang lain?\"'),
(16, 'Benar atau salahkah pernyataan ini : \"Masker yang kita pakai hanya berguna untuk mengurangi risiko terhirupnya droplet/percikan ludah yang terkontaminasi virus/bakteri ke area hidung dan mulut kita\"'),
(17, 'Manakah diantara pernyataan ini yang paling benar tentang mencuci tangan dengan air mengalir dan sabun yang benar?'),
(18, 'Manakah diantara pernyataan ini yang paling benar tentang kewajiban menjaga jarak minimal 1 meter dalam masa pandemi COVID-19?');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_jawaban`
--

CREATE TABLE `pertanyaan_jawaban` (
  `id_pertanyaan_jawaban` int(5) NOT NULL,
  `id_pertanyaan` int(5) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan_jawaban`
--

INSERT INTO `pertanyaan_jawaban` (`id_pertanyaan_jawaban`, `id_pertanyaan`, `jawaban`) VALUES
(1, 1, 'Laki-laki'),
(2, 1, 'Perempuan'),
(3, 2, '< 17 tahun'),
(4, 2, '17 - 45 tahun'),
(5, 2, '46 - 60 tahun'),
(6, 2, '> 60 tahun'),
(7, 3, 'Ya, selalu menggunakan masker'),
(8, 3, 'Kadang-kadang memakai masker'),
(9, 3, 'Tidak memakai masker'),
(10, 4, 'Masker Bedah'),
(11, 4, 'Masker Kain'),
(12, 4, 'Kain penutup hidung dan mulut'),
(13, 5, 'Ya, selalu jaga jarak'),
(14, 5, 'Kadang-kadang jaga jarak'),
(15, 5, 'Tidak pernah jaga jarak'),
(16, 6, 'Ya'),
(17, 6, 'Kadang-kadang'),
(18, 6, 'Tidak Pernah'),
(19, 7, 'Ya'),
(20, 7, 'Kadang-kadang'),
(21, 7, 'Tidak Pernah'),
(22, 8, 'Ya'),
(23, 8, 'Kadang-kadang'),
(24, 8, 'Tidak Pernah'),
(25, 9, 'Ya'),
(26, 9, 'Kadang-kadang'),
(27, 9, 'Tidak Pernah'),
(28, 10, 'Ya'),
(29, 10, 'Kadang-kadang'),
(30, 10, 'Tidak Pernah'),
(31, 11, 'Ya'),
(32, 11, 'Tidak Berbahaya'),
(33, 11, 'Berbahaya tetapi tidak mematikan'),
(34, 12, 'Melalui droplet (tetesan/percikan air liur/ludah) yang terhirup'),
(35, 12, 'Melalui droplet (tetesan/percikan air liur/ludah) yang terbang di udara'),
(36, 12, 'melalui jarum suntikan'),
(37, 13, 'Seluruh orang yang terinfeksi COVID-19 pasti akan menunjukkan gejala seperti batuk/demam/pilek/gejala lainnya'),
(38, 13, 'Sebagian kecil orang yang terinfeksi COVID-19 pasti akan menunjukkan gejala seperti batuk/demam/pilek/gejala lainnya'),
(39, 13, 'Sebagian besar orang yang terinfeksi COVID-19 tidak akan menunjukkan gejala seperti batuk/demam/pilek/gejala lainnya'),
(40, 14, 'mengurangi risiko penularan COVID-19'),
(41, 14, 'agar tidak terkena razia masker'),
(42, 14, 'agar terlihat lebih bergaya'),
(43, 15, 'Benar'),
(44, 15, 'Salah'),
(45, 16, 'Benar'),
(46, 16, 'Salah'),
(47, 17, 'Mencuci tangan dapat menghindarkan kita dari tersentuhnya droplet (percikan air liur) yang mengandung virus atau kuman lainnya'),
(48, 17, 'Mencuci tangan hanya dapat membersihkan tangan kita dari droplet yang mengandung virus atau kuman lainnya'),
(49, 17, 'Mencuci tangan tidak dapat membersihkan tangan kita dari droplet yang mengandung virus atau kuman lainnya'),
(50, 18, 'Menjaga jarak dapat mengurangi risiko tertularnya penyakit COVID-19'),
(51, 18, 'Menjaga jarak tidak dapat mengurangi risiko tertularnya penyakit COVID-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `pertanyaan_jawaban`
--
ALTER TABLE `pertanyaan_jawaban`
  ADD PRIMARY KEY (`id_pertanyaan_jawaban`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pertanyaan_jawaban`
--
ALTER TABLE `pertanyaan_jawaban`
  MODIFY `id_pertanyaan_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
