-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 05:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `withus`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawab`
--

CREATE TABLE `jawab` (
  `id_jawab` int(11) NOT NULL,
  `nama_nanya` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `id_tanya` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `nama_jawab` varchar(100) NOT NULL,
  `jawaban` varchar(2000) NOT NULL,
  `rating` int(10) NOT NULL,
  `tgl_jawab` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawab`
--

INSERT INTO `jawab` (`id_jawab`, `nama_nanya`, `kategori`, `id_tanya`, `pertanyaan`, `nama_jawab`, `jawaban`, `rating`, `tgl_jawab`) VALUES
(52, 'Idris', 'Problematika', 2, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..?', 'ferda', ' Dia peduli sama lu', 2, '2021-03-27'),
(65, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', '', 'Ah yang boneng lo??', 0, '2021-03-31'),
(66, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', '', ' Shs', 0, '2021-03-31'),
(67, 'Idris', 'Problematika', 2, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..?', 'idris', ' J', 2, '2021-03-31'),
(68, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', '', ' Panik bro, tapi akhirnya berani aku lewati. Panik bro, tapi akhirnya berani aku lewatiPanik bro, ta', 0, '2021-03-31'),
(69, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', '', 'Panik bro, tapi akhirnya berani aku lewatiPanik bro, tapi akhirnya berani aku lewatiPanik bro, tapi ', 0, '2021-03-31'),
(70, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', '', 'Panik bro, tapi akhirnya berani aku lewatiPanik bro, tapi akhirnya berani aku lewatiPanik bro, tapi\n', 0, '2021-03-31'),
(71, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', '', ' Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita ', 0, '2021-03-31'),
(72, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', 'ferda', ' Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita ', 0, '2021-03-31'),
(73, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', 'ferda', ' Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..?Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita it', 0, '2021-03-31'),
(74, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', '', ' Aduuh puyeng', 1, '2021-03-31'),
(75, 'Idris', 'Problematika', 2, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..?', 'idris', ' Ferda kemana kau selama ini? ', 2, '2021-03-31'),
(84, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', '', ' Ferda dont forget', 3, '2021-04-01'),
(91, 'Idris', 'Problematika', 2, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..?', '', ' ajdpia[ jadnawun alsdnpawua;ln da;owuda\'dnawajdnaidw', 3, '2021-04-06'),
(93, 'Idris', 'Karir', 12, 'Hehe', 'idris', ' Ferda I miss You', 4, '2021-04-06'),
(95, 'Ferda', 'Karir', 13, 'Halo kak', 'idris', ' iyaa??', 3, '2021-04-08'),
(96, 'Anonymous', 'Karir', 16, 'anaonym cek', 'ferda', ' ferda', 2, '2021-04-09'),
(100, 'Ferda', 'Karir', 13, 'Halo kak', 'ferda', 'Apa bro', 0, '2021-04-13'),
(101, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', 'Lika Puspa', ' awdaw', 0, '2021-04-17'),
(102, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', 'idris', ' awdadaw', 0, '2021-04-18'),
(103, 'Lika Puspa', 'Karir', 29, 'j', 'idris', ' s', 0, '2021-04-18'),
(105, 'Idris', 'Karir', 30, 'n', 'idris', 'bacot', 0, '2021-04-18'),
(106, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', 'idris', ' Tetap tenang meski percakapan mulai memanas\nUsahakan tetap tenang ketika lawan bicara mulai menaikkan nada bicara. Biasanya mereka sudah dalam perasaan marah. Bila Anda terpicu untuk melawan, maka tidak akan ada penyelesaian dalam percakapan tersebut. Bila Anda tetap tenang, maka perasaan marah itu akan berkurang dan berubah menjadi ucapan maaf yang akan dilontarkan lawan bicara.\n\nDuduk lebih dekat dengan orang agresif untuk mengurangi perpecahan\nJika Anda bertemu dalam sebuah rapat dan mengetahui ada orang yang agresif disana, bisa jadi diskusi akan memanas dan penuh komentar negatif. Duduk di dekat orang yang agresif bisa membantunya merasa tidak nyaman dan mengurangi keagresifannya.\n\nIngin populer? Ingatlah nama rekan Anda\nBila Anda ingin populer di kalangan kantor atau rekan sejawat anda, biasakanlah memanggil rekan dengan nama depan. Mereka akan merasa special dan dapat mengingat Anda lebih baik.\n\nTulis perasaan Anda bila merasa tertekan\nDaripada merasa tertekan sendirian, lebih baik Anda bagikan perasaan tersebut ke buku catatan. Setelah di tulis, segera simpan buku catatan Anda dan kembali ke pekerjaan. Hal ini membuat pikiran lebih fokus dan ringan untuk seterusnya.\n\nBingung memilih? Sempitkan pilihan Anda\nBanyak orang beranggapan banyak pilihan berarti banyak kesempatan yang bagus. Ternyata pemikiran ini dapat membingungkan Anda sehingga tidak efektif untuk memutuskan suatu hal. Untuk mengurangi hal tersebut, sempitkan pilihan sehingga bisa lebih fokus menimbang baik dan buruknya.\n\nPostur yang baik bisa meningkatkan kepercayaan diri.\nTrik ini bisa digunakan pada berbagai situasi dan dapat meningkatkan kehidupan pribadi dan kerja Anda. Bila ada pertanyaan bagaimana cara lebih percaya diri? Maka jawabannya adalah postur tubuh. Postur merupakan bahasa tubuh terbaik untuk menyatakan kepercayaan diri Anda.', 0, '2021-04-19'),
(107, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', 'idris', 'Tetap tenang meski percakapan mulai memanas Usahakan tetap tenang ketika lawan bicara mulai menaikkan nada bicara. Biasanya mereka sudah dalam perasaan marah. Bila Anda terpicu untuk melawan, maka tidak akan ada penyelesaian dalam percakapan tersebut. Bila Anda tetap tenang, maka perasaan marah itu akan berkurang dan berubah menjadi ucapan maaf yang akan dilontarkan lawan bicara. Duduk lebih dekat dengan orang agresif untuk mengurangi perpecahan Jika Anda bertemu dalam sebuah rapat dan mengetahui ada orang yang agresif disana, bisa jadi diskusi akan memanas dan penuh komentar negatif.\n\n\n\n\nasdawd', 0, '2021-04-19'),
(108, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', 'idris', 'asda\n\nawda\n\n\nwda', 0, '2021-04-19'),
(109, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', 'idris', '     b    h', 0, '2021-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `rating_jawab`
--

CREATE TABLE `rating_jawab` (
  `id_jawab` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_jawab`
--

INSERT INTO `rating_jawab` (`id_jawab`, `username`) VALUES
(94, ''),
(94, ''),
(95, 'ferda'),
(52, 'idris'),
(67, 'idris'),
(75, 'idris'),
(96, 'ferda'),
(96, 'idris'),
(97, 'ferda'),
(97, 'idris');

-- --------------------------------------------------------

--
-- Table structure for table `tanya`
--

CREATE TABLE `tanya` (
  `id_tanya` int(11) NOT NULL,
  `kategori` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pertanyaan` varchar(2000) NOT NULL,
  `tgl_pertanyaan` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanya`
--

INSERT INTO `tanya` (`id_tanya`, `kategori`, `username`, `user_id`, `pertanyaan`, `tgl_pertanyaan`) VALUES
(1, 'Karir', 'idris', 1, 'Bagaimana hari pertama bekerja jadi programmer', '0000-00-00 00:00:00'),
(2, 'Problematika', 'Idris', 1, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..?', '0000-00-00 00:00:00'),
(9, 'Karir', 'Ferda', 2, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita itu apa yaa..? ', '0000-00-00 00:00:00'),
(12, 'Karir', 'Idris', 1, 'Hehe', '0000-00-00 00:00:00'),
(13, 'Karir', 'Ferda', 2, 'Halo kak', '0000-00-00 00:00:00'),
(15, 'Problematika', 'Anonymous', 1, 'ad', '0000-00-00 00:00:00'),
(16, 'Karir', 'Anonymous', 2, 'anaonym cek', '0000-00-00 00:00:00'),
(18, 'Karir', 'Idris', 1, 'cara download pintu ff', '0000-00-00 00:00:00'),
(19, 'Karir', 'Idris', 1, 'coba', '0000-00-00 00:00:00'),
(20, 'Karir', 'Idris', 1, 'tes', '0000-00-00 00:00:00'),
(21, 'Karir', 'Idris', 1, 'sa', '0000-00-00 00:00:00'),
(22, 'Karir', 'Idris', 1, 'awd', '0000-00-00 00:00:00'),
(23, 'Karir', 'Idris', 1, 'awda', '0000-00-00 00:00:00'),
(24, 'Karir', 'Idris', 1, 'acoba', '0000-00-00 00:00:00'),
(25, 'Karir', 'Idris', 1, 'nvn', '0000-00-00 00:00:00'),
(26, 'Karir', 'Idris', 1, 'adw', '2021-04-17 03:57:17'),
(27, 'Karir', 'Anonymous', 3, 'Haloooo tes', '2021-04-17 03:58:06'),
(28, 'Karir', 'Anonymous', 3, 'Tes Lika', '2021-04-18 09:54:56'),
(29, 'Karir', 'Lika Puspa', 3, 'j', '2021-04-18 10:02:30'),
(30, 'Karir', 'Idris', 1, 'n', '2021-04-18 10:03:13'),
(31, 'Problematika', 'No Name', 1, 'Batuk pengin sembuh', '2021-04-18 10:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_wa` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `profesi`, `password`, `no_wa`) VALUES
(1, 'idris', 'idris@gmail.com', 'mahasiswa', '$2y$10$yE5xuD7Pyy9GyN6LWfIPA.2X2mPDwq/FiSGX2M0w2Jb6Yo/lenh4G', 0),
(2, 'ferda', 'ferda@gmail.com', 'mahasiswa', '$2y$10$eiuSFos8k3Xx693he4RPhebn8zYnAI5YIlGhrcwEKy4rs9NJhsXqa', 5),
(3, 'Lika Puspa', 'likapuspa@gmail.com', 'Mahasiswa', '$2y$10$k.Gxf2sUvQoQfh8uQLtMw.G7MO0YFMjvX3k4D7r41cnbcrcQjNOre', 2147483647),
(4, 'coba', 'coba@gmail.com', 'coba', '$2y$10$ZUuEtLlGjv6j7', 98),
(5, 'coba1', 'coba@gmail.com', 'coba1', '$2y$10$utnRekBq56uO5', 9),
(6, 'coba2', 'coba@gmail.com', 'coba2', '$2y$10$sZ2C/oRdEDqkt0RQO9plQ.XEGd1QfNH20JCINqP68/4qU/rBwDjwm', 89),
(8, 'coba3', 'coba2@gmail.com', 'awda', '$2y$10$nvOy8jZO6msRgyHjtvfc8.53tBGonEBD2/Pm15xRT86dKCE0X4wlW', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id_jawab`);

--
-- Indexes for table `tanya`
--
ALTER TABLE `tanya`
  ADD PRIMARY KEY (`id_tanya`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id_jawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tanya`
--
ALTER TABLE `tanya`
  MODIFY `id_tanya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
