-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 10:17 AM
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
-- Database: `288045`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `content` varchar(1201) NOT NULL,
  `rating` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `pesan_masuk` int(20) NOT NULL,
  `pesan_keluar` int(20) NOT NULL,
  `pesan` varchar(512) NOT NULL,
  `tgl_chat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `pesan_masuk`, `pesan_keluar`, `pesan`, `tgl_chat`) VALUES
(1, 3, 2, 'Y', '2021-05-31 13:00:08'),
(2, 3, 2, 'T', '2021-05-31 13:03:33'),
(3, 3, 2, 'Ti', '2021-05-31 13:03:57'),
(4, 5, 3, 'n', '2021-05-31 13:04:14'),
(5, 5, 3, 'b', '2021-05-31 13:06:11'),
(6, 5, 3, 'v', '2021-05-31 13:09:22'),
(7, 5, 3, 'c', '2021-05-31 13:09:34'),
(8, 2, 3, 'vb', '2021-05-31 13:09:52'),
(9, 3, 2, 'I', '2021-05-31 13:09:58'),
(10, 3, 2, 'G', '2021-05-31 13:10:08'),
(11, 5, 3, 'm', '2021-05-31 13:10:15'),
(12, 2, 3, 'cccc', '2021-05-31 13:10:34'),
(13, 3, 2, 'Yys', '2021-05-31 13:10:42'),
(14, 5, 3, 'xx', '2021-05-31 13:11:00'),
(15, 3, 2, 'Halo lika..? ', '2021-05-31 13:11:45'),
(16, 2, 3, 'iyaa..?', '2021-05-31 13:12:02'),
(17, 3, 2, 'Kamu dimana lika..? ', '2021-05-31 13:12:11'),
(18, 3, 2, 'Di mana yaa..? ', '2021-05-31 13:12:23'),
(19, 6, 3, 'tws', '2021-05-31 13:12:43'),
(20, 3, 2, 'G', '2021-05-31 13:12:54'),
(21, 3, 2, 'H', '2021-05-31 13:13:04'),
(22, 3, 2, 'U', '2021-05-31 13:13:14'),
(23, 3, 2, 'J', '2021-05-31 13:13:20'),
(24, 6, 3, 'n', '2021-05-31 13:13:32'),
(25, 3, 2, 'Sombong amat ga dibales', '2021-05-31 13:13:43'),
(26, 2, 3, 'bacot iihhh', '2021-05-31 13:13:56'),
(27, 3, 2, 'b', '2021-05-31 23:13:46'),
(28, 2, 3, 'Ampun bang jago', '2021-05-31 23:13:56'),
(29, 2, 3, 'Bb', '2021-05-31 23:14:11'),
(30, 5, 2, 'b', '2021-05-31 23:14:23'),
(31, 3, 6, 'coba 2 untuk 3', '2021-05-31 23:56:44'),
(32, 6, 3, 'nn', '2021-06-01 00:13:11'),
(33, 3, 1, 'Cek lika', '2021-06-01 02:31:14'),
(34, 1, 3, 'k', '2021-06-01 02:36:34'),
(35, 1, 3, 'Perintah SELECT DISTINCT digunakan untuk menampilkan nilai yang berbeda.  Di dalam sebuah tabel, kolom sering berisi banyak nilai duplikat; Dan terkadang Anda hanya ingin membuat daftar nilai yang berbeda.  Perintah SELECT DISTINCT digunakan untuk menampilkan hanya nilai yang berbeda dari suatu data.', '2021-06-01 02:36:49'),
(36, 3, 1, 'F', '2021-06-01 02:37:04'),
(37, 3, 1, 'U', '2021-06-02 07:09:45'),
(38, 3, 2, 'Hahah', '2021-06-03 06:16:15'),
(39, 2, 3, 'Hihihii', '2021-06-03 06:17:12');

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
(2, '0', '3', 6, 'aduh tugas mulu anj', '2', ' icikiwier', 0, '2021-06-26'),
(6, 'Idris', '1', 1, 'Halo gaes', '2', 'asdaw', 0, '2021-06-26'),
(7, 'Idris', '1', 1, 'Halo gaes', '2', 'fed', 0, '2021-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nm_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nm_kategori`) VALUES
(1, 'karir'),
(2, 'percintaan'),
(3, 'Kampus');

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
(96, 'idris'),
(97, 'ferda'),
(97, 'idris'),
(111, 'idris'),
(69, 'idris'),
(96, 'ferda'),
(111, 'ferda'),
(113, 'ferda'),
(113, 'idris'),
(114, 'idris'),
(116, 'alrasyid2610'),
(116, 'idris'),
(115, 'alrasyid2610');

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
(1, '1', '1', 1, 'Halo gaes', '2021-06-24 11:51:08'),
(2, '2', '1', 1, 'Dimanakah ia sang kekasih?\r\n', '2021-06-24 12:00:30'),
(3, '2', '0', 1, 'uwawu', '2021-06-24 13:27:42'),
(5, '2', '0', 1, 'mama yukero', '2021-06-24 13:38:09'),
(6, '3', '0', 1, 'aduh tugas mulu anj', '2021-06-24 13:38:34');

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
  `no_wa` int(20) NOT NULL,
  `user_level` int(11) NOT NULL COMMENT '1. admin 2. Psikolog 3. User '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `profesi`, `password`, `no_wa`, `user_level`) VALUES
(0, 'Anonymous', '', '', '', 0, 100),
(1, 'idris', 'idris@gmail.com', 'mahasiswa', '$2y$10$yE5xuD7Pyy9GyN6LWfIPA.2X2mPDwq/FiSGX2M0w2Jb6Yo/lenh4G', 0, 1),
(2, 'ferda', 'ferda@gmail.com', 'mahasiswa', '$2y$10$eiuSFos8k3Xx693he4RPhebn8zYnAI5YIlGhrcwEKy4rs9NJhsXqa', 5, 2),
(3, 'Lika Puspa', 'likapuspa@gmail.com', 'Mahasiswa', '$2y$10$k.Gxf2sUvQoQfh8uQLtMw.G7MO0YFMjvX3k4D7r41cnbcrcQjNOre', 2147483647, 2),
(4, 'coba', 'coba@gmail.com', 'coba', '$2y$10$ZUuEtLlGjv6j7', 98, 3),
(5, 'coba1', 'coba@gmail.com', 'coba1', '$2y$10$utnRekBq56uO5', 9, 2),
(6, 'coba2', 'coba@gmail.com', 'coba2', '$2y$10$sZ2C/oRdEDqkt0RQO9plQ.XEGd1QfNH20JCINqP68/4qU/rBwDjwm', 89, 2),
(8, 'coba3', 'coba2@gmail.com', 'awda', '$2y$10$nvOy8jZO6msRgyHjtvfc8.53tBGonEBD2/Pm15xRT86dKCE0X4wlW', 12, 3),
(9, 'alrasyid2610', 'alrasyid2610@gmail.com', 'Karyawan Swasta', '$2y$10$IwKlVk3Q3a7kk58OqrxxpeJhnpfEZRgkP.9vR0LNb2tNFhM.QZmkG', 2147483647, 0),
(10, 'harun', 'harun@gmail.com', 'harun', '$2y$10$HQwx0rDcEh51bRjxcGhiieFIbyc818La0AQe6Vze7VILWNtRE3nHu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_consultan`
--

CREATE TABLE `user_consultan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lulusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id_jawab`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_consultan`
--
ALTER TABLE `user_consultan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id_jawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanya`
--
ALTER TABLE `tanya`
  MODIFY `id_tanya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_consultan`
--
ALTER TABLE `user_consultan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
