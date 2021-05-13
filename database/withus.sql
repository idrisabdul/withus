-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 01:28 PM
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
(38, 2, 1, 'hai kasihku', '2021-05-01 07:37:12'),
(39, 2, 1, 'bisa ga yaa', '2021-05-01 07:38:04'),
(40, 2, 1, 'hai', '2021-05-01 07:38:42'),
(41, 2, 1, 'coba ah', '2021-05-01 07:41:22'),
(42, 2, 1, 'mama', '2021-05-01 07:45:12'),
(43, 5, 1, 'v', '2021-05-01 07:46:41'),
(44, 2, 1, 'x', '2021-05-01 07:47:57'),
(45, 5, 1, 'k', '2021-05-01 08:35:09'),
(46, 2, 1, 'kl', '2021-05-01 08:35:31'),
(47, 2, 1, 'hi', '2021-05-01 08:52:36'),
(48, 2, 1, 'hihi', '2021-05-01 08:53:47'),
(49, 2, 1, 'apa', '2021-05-01 08:54:03'),
(50, 3, 1, 'baja', '2021-05-01 08:54:23'),
(51, 2, 1, 'HHHHH', '2021-05-07 15:13:45'),
(52, 2, 1, 'HH', '2021-05-07 15:14:29'),
(53, 2, 1, 'HOLO FERDA', '2021-05-07 15:14:46'),
(54, 2, 1, 'tes', '2021-05-08 09:59:02'),
(55, 1, 2, 'seharusnya', '2021-05-08 10:12:28'),
(56, 3, 1, 'www', '2021-05-08 10:15:39'),
(57, 1, 2, 'brp', '2021-05-08 10:24:02'),
(58, 2, 1, '30rb', '2021-05-08 10:24:30'),
(59, 3, 1, 'hai lika', '2021-05-08 10:28:46'),
(60, 1, 3, 'hai idris', '2021-05-08 10:29:03'),
(61, 3, 9, 'Hallo', '2021-05-09 03:27:38'),
(62, 9, 3, 'Hallo juga', '2021-05-09 03:28:10'),
(63, 3, 9, 'Pagi dok', '2021-05-09 03:28:33'),
(64, 9, 3, 'Pagi juga ka', '2021-05-09 03:28:59'),
(65, 3, 9, 'Hhh', '2021-05-09 03:29:29'),
(66, 3, 9, 'Hhhll', '2021-05-09 03:29:38'),
(67, 3, 9, 'Fgbjk', '2021-05-09 03:29:44'),
(68, 2, 3, 'hai', '2021-05-13 03:57:52'),
(69, 3, 2, 'halo lika', '2021-05-13 04:03:02'),
(70, 3, 2, 'Lika, lagi ngapain? ', '2021-05-13 04:08:46'),
(71, 2, 3, 'lagi gabut aku fer', '2021-05-13 04:09:41'),
(72, 3, 2, 'Makan lik, kalau gabut', '2021-05-13 04:10:22'),
(73, 2, 3, 'hehe, bacot', '2021-05-13 04:14:48'),
(74, 2, 3, 'cot', '2021-05-13 04:18:01'),
(75, 2, 3, 'tes', '2021-05-13 04:22:11'),
(76, 2, 3, 'tes1', '2021-05-13 04:23:50'),
(77, 2, 3, 'tes3', '2021-05-13 04:24:11'),
(78, 2, 3, 'tes4', '2021-05-13 04:25:06'),
(79, 2, 3, 'tes5', '2021-05-13 04:25:53'),
(80, 2, 3, 'tees6', '2021-05-13 04:27:36'),
(81, 2, 3, 'tes7', '2021-05-13 04:33:50'),
(82, 2, 3, 'tes8', '2021-05-13 04:40:25'),
(83, 2, 3, 'tes 9', '2021-05-13 04:41:22'),
(84, 3, 2, 'Tes 10', '2021-05-13 04:42:14'),
(85, 3, 2, 'Tes 11', '2021-05-13 04:42:38'),
(86, 3, 2, 'T', '2021-05-13 04:43:08'),
(87, 3, 2, 'Idris', '2021-05-13 04:43:23'),
(88, 2, 3, 'uy', '2021-05-13 04:43:45'),
(89, 3, 2, 'Apaan', '2021-05-13 04:45:56'),
(90, 2, 3, 'apian', '2021-05-13 04:48:54'),
(91, 2, 3, 'apuan', '2021-05-13 04:54:59'),
(92, 2, 3, 'apean', '2021-05-13 04:55:48'),
(93, 2, 3, 'o aja', '2021-05-13 04:59:09'),
(94, 3, 2, 'Sombong', '2021-05-13 05:00:16'),
(95, 2, 3, 'iya biarin', '2021-05-13 05:14:28'),
(96, 2, 3, 'b1', '2021-05-13 05:15:46'),
(97, 2, 3, 'b2', '2021-05-13 05:16:54'),
(98, 2, 3, 'b3', '2021-05-13 05:23:35'),
(99, 3, 2, 'B4cot', '2021-05-13 05:43:17'),
(100, 2, 3, 'priit', '2021-05-13 05:46:49'),
(101, 2, 3, 'hehe', '2021-05-13 05:47:52'),
(102, 2, 3, 'upil', '2021-05-13 05:48:07'),
(103, 2, 3, 'jancuk', '2021-05-13 05:49:32'),
(104, 2, 3, 'hih', '2021-05-13 05:50:05'),
(105, 3, 2, 'Jorok', '2021-05-13 05:50:40'),
(106, 2, 3, 'joroks', '2021-05-13 06:53:50'),
(107, 2, 3, 'JOROKSs', '2021-05-13 06:54:39'),
(108, 2, 3, 'hihihi', '2021-05-13 06:55:59'),
(109, 3, 2, 'hehe', '2021-05-13 07:41:39'),
(110, 3, 2, 'bgt', '2021-05-13 07:42:02'),
(111, 3, 2, 'bgingt', '2021-05-13 07:42:43'),
(112, 3, 2, 'cobaahhaa', '2021-05-13 07:43:27'),
(113, 3, 2, 'k', '2021-05-13 07:44:02'),
(114, 3, 2, 'lkl', '2021-05-13 07:44:20'),
(115, 3, 2, 'op', '2021-05-13 07:45:41'),
(116, 3, 2, 'bakiak', '2021-05-13 07:46:19'),
(117, 3, 2, 'hmm', '2021-05-13 07:48:26'),
(118, 3, 2, 'j', '2021-05-13 07:48:53'),
(119, 3, 2, 'hmi', '2021-05-13 07:49:35'),
(120, 3, 2, 'yok', '2021-05-13 07:51:52'),
(121, 3, 2, 'lp', '2021-05-13 07:52:55'),
(122, 3, 2, 'opppp', '2021-05-13 07:55:28'),
(123, 3, 2, 'ilv', '2021-05-13 07:59:12'),
(124, 3, 2, 'kkooa', '2021-05-13 08:00:51'),
(125, 3, 2, 'kmon', '2021-05-13 08:03:44'),
(126, 3, 2, 'itil', '2021-05-13 08:04:07'),
(127, 3, 2, 'ferda', '2021-05-13 08:05:32'),
(128, 3, 2, 'lll', '2021-05-13 08:06:43'),
(129, 3, 2, 'oo', '2021-05-13 08:07:03'),
(130, 3, 2, 'alalal', '2021-05-13 08:38:46'),
(131, 3, 2, 'pp', '2021-05-13 08:39:24'),
(132, 3, 2, 'a', '2021-05-13 08:39:59'),
(133, 3, 2, 'b', '2021-05-13 08:47:41'),
(134, 3, 2, 'c', '2021-05-13 08:48:29'),
(135, 3, 2, 'c', '2021-05-13 08:50:54'),
(136, 3, 2, 'd', '2021-05-13 08:54:53'),
(137, 3, 2, 'e', '2021-05-13 08:55:20'),
(138, 3, 2, 'e', '2021-05-13 08:55:26'),
(139, 3, 2, 'ea', '2021-05-13 08:55:56'),
(140, 3, 2, 'adwad', '2021-05-13 08:56:42'),
(141, 3, 2, 'aaaaa', '2021-05-13 08:56:53'),
(142, 3, 2, 'aaa', '2021-05-13 08:57:29'),
(143, 3, 2, 'aaaasdawda', '2021-05-13 09:00:21'),
(144, 3, 2, 'jk', '2021-05-13 09:02:17'),
(145, 3, 2, 'aaj', '2021-05-13 09:03:46'),
(146, 3, 2, 'ah', '2021-05-13 09:57:58'),
(147, 3, 2, ',', '2021-05-13 09:58:52'),
(148, 3, 2, 'a', '2021-05-13 10:00:49'),
(149, 3, 2, 'awd', '2021-05-13 10:01:08'),
(150, 3, 2, 'l', '2021-05-13 10:02:49'),
(151, 3, 2, ' nk', '2021-05-13 10:09:46'),
(152, 3, 2, 'asdawdad', '2021-05-13 10:11:05'),
(153, 3, 2, 'aas', '2021-05-13 10:12:35'),
(154, 3, 2, 'az', '2021-05-13 10:12:55'),
(155, 3, 2, 'jing', '2021-05-13 10:15:21'),
(156, 3, 2, 'aaaaasdawdadas', '2021-05-13 10:16:32'),
(157, 3, 2, 'lo', '2021-05-13 10:21:45'),
(158, 3, 2, 'olsa', '2021-05-13 10:25:22'),
(159, 3, 2, 'asdaw', '2021-05-13 10:25:54'),
(160, 3, 2, 'lppp', '2021-05-13 10:26:27'),
(161, 3, 2, 'mlmlm', '2021-05-13 10:27:23'),
(162, 3, 2, 'aaasdas', '2021-05-13 10:28:15'),
(163, 3, 2, 'a', '2021-05-13 10:30:01'),
(164, 3, 2, 'aasw', '2021-05-13 10:32:43'),
(165, 3, 2, 'kkkl', '2021-05-13 10:33:04'),
(166, 3, 2, 'aage', '2021-05-13 10:34:27'),
(167, 3, 2, 'mamah', '2021-05-13 10:34:59'),
(168, 3, 2, 'coba ferda', '2021-05-13 10:35:34'),
(169, 3, 2, 'coba ferda2', '2021-05-13 10:36:46'),
(170, 3, 2, 'coba ferda3', '2021-05-13 10:37:07'),
(171, 3, 2, 'aas', '2021-05-13 10:37:40'),
(172, 2, 3, 'Hmm', '2021-05-13 10:39:47'),
(173, 3, 2, 'alhamdulillah', '2021-05-13 10:40:10'),
(174, 2, 3, 'Terimakasih banyak', '2021-05-13 10:40:29'),
(175, 3, 2, 'iya sama-sama', '2021-05-13 10:41:13'),
(176, 2, 3, 'Bismillah', '2021-05-13 10:42:01'),
(177, 3, 2, 'hah', '2021-05-13 10:42:19'),
(178, 3, 2, 'jj', '2021-05-13 10:43:33'),
(179, 2, 3, 'Kk', '2021-05-13 10:44:37'),
(180, 3, 2, 'cobadeong', '2021-05-13 10:46:16'),
(181, 2, 3, 'Anomaseo', '2021-05-13 10:46:42'),
(182, 2, 3, 'Joaj', '2021-05-13 10:46:59'),
(183, 3, 2, 'maafkan saya', '2021-05-13 10:47:19'),
(184, 2, 3, 'Dukun kali', '2021-05-13 10:48:32'),
(185, 2, 3, 'Gg', '2021-05-13 10:48:46'),
(186, 5, 2, 'df', '2021-05-13 10:48:55'),
(187, 5, 2, 'dsf', '2021-05-13 10:49:05'),
(188, 3, 2, 'p', '2021-05-13 11:09:38');

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
(69, 'Idris', 'Karir', 1, 'Bagaimana hari pertama bekerja jadi programmer', '', 'Panik bro, tapi akhirnya berani aku lewatiPanik bro, tapi akhirnya berani aku lewatiPanik bro, tapi ', 1, '2021-03-31'),
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
(109, 'Ferda', 'Karir', 9, 'Gan mau nanya tandanya dia suka sama kita itu apa yaa..? Gan mau nanya tandanya dia suka sama kita i', 'idris', '     b    h', 0, '2021-04-19'),
(110, 'Anonymous', 'Karir', 28, 'Tes Lika', 'ferda', ' Tes Bacot', 0, '2021-04-23'),
(111, 'Anonymous', 'Karir', 28, 'Tes Lika', 'idris', ' Heheh bacot', 2, '2021-04-23'),
(112, 'No Name', 'Problematika', 31, 'Batuk pengin sembuh', 'idris', ' Alhamdulillah Udah sembuh', 0, '2021-04-23'),
(113, 'Ferda', 'Karir', 32, 'saya rindu idris', 'ferda', ' gampang ketemu aja', 2, '2021-05-07'),
(114, 'Ferda', 'Karir', 32, 'saya rindu idris', 'idris', ' ah iya setuju', 1, '2021-05-07'),
(115, 'Alrasyid2610', 'Problematika', 33, 'Kenapa ya, kok susah bgt buat move on.?', 'idris', ' Ah lemah luu, jon', 1, '2021-05-09'),
(116, 'Alrasyid2610', 'Problematika', 33, 'Kenapa ya, kok susah bgt buat move on.?', 'alrasyid2610', ' Fff', 2, '2021-05-09');

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
(22, 'Karir', 'Idris', 1, 'awd', '0000-00-00 00:00:00'),
(23, 'Karir', 'Idris', 1, 'awda', '0000-00-00 00:00:00'),
(24, 'Karir', 'Idris', 1, 'acoba', '0000-00-00 00:00:00'),
(26, 'Karir', 'Idris', 1, 'adw', '2021-04-17 03:57:17'),
(27, 'Karir', 'Anonymous', 3, 'Haloooo tes', '2021-04-17 03:58:06'),
(28, 'Karir', 'Anonymous', 3, 'Tes Lika', '2021-04-18 09:54:56'),
(29, 'Karir', 'Lika Puspa', 3, 'j', '2021-04-18 10:02:30'),
(30, 'Karir', 'Idris', 1, 'n', '2021-04-18 10:03:13'),
(31, 'Problematika', 'No Name', 1, 'Batuk pengin sembuh', '2021-04-18 10:15:19'),
(32, 'Karir', 'Ferda', 2, 'saya rindu idris', '2021-05-07 15:06:29'),
(33, 'Problematika', 'Alrasyid2610', 9, 'Kenapa ya, kok susah bgt buat move on.?', '2021-05-09 03:26:57');

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
(1, 'idris', 'idris@gmail.com', 'mahasiswa', '$2y$10$yE5xuD7Pyy9GyN6LWfIPA.2X2mPDwq/FiSGX2M0w2Jb6Yo/lenh4G', 0, 1),
(2, 'ferda', 'ferda@gmail.com', 'mahasiswa', '$2y$10$eiuSFos8k3Xx693he4RPhebn8zYnAI5YIlGhrcwEKy4rs9NJhsXqa', 5, 2),
(3, 'Lika Puspa', 'likapuspa@gmail.com', 'Mahasiswa', '$2y$10$k.Gxf2sUvQoQfh8uQLtMw.G7MO0YFMjvX3k4D7r41cnbcrcQjNOre', 2147483647, 2),
(4, 'coba', 'coba@gmail.com', 'coba', '$2y$10$ZUuEtLlGjv6j7', 98, 3),
(5, 'coba1', 'coba@gmail.com', 'coba1', '$2y$10$utnRekBq56uO5', 9, 2),
(6, 'coba2', 'coba@gmail.com', 'coba2', '$2y$10$sZ2C/oRdEDqkt0RQO9plQ.XEGd1QfNH20JCINqP68/4qU/rBwDjwm', 89, 2),
(8, 'coba3', 'coba2@gmail.com', 'awda', '$2y$10$nvOy8jZO6msRgyHjtvfc8.53tBGonEBD2/Pm15xRT86dKCE0X4wlW', 12, 3),
(9, 'alrasyid2610', 'alrasyid2610@gmail.com', 'Karyawan Swasta', '$2y$10$IwKlVk3Q3a7kk58OqrxxpeJhnpfEZRgkP.9vR0LNb2tNFhM.QZmkG', 2147483647, 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id_jawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tanya`
--
ALTER TABLE `tanya`
  MODIFY `id_tanya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
