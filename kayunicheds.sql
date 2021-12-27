-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 05:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kayunicheds`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `message` text NOT NULL,
  `isread` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `from`, `to`, `message`, `isread`, `created_at`) VALUES
(1, 1, 3, 'Halo', 0, '2021-02-03 03:03:08'),
(2, 3, 1, 'Eneng opo ?', 0, '2021-02-03 03:49:16'),
(3, 3, 1, 'lagi apa bro ?', 0, '2021-02-03 04:23:29'),
(4, 1, 3, 'biasa lah bro', 0, '2021-02-03 04:23:36'),
(5, 3, 1, 'thanks ya bro , kemarin uda bantu skripsi gua', 0, '2021-02-03 04:23:51'),
(6, 1, 3, 'aman bro , ', 0, '2021-02-03 04:23:57'),
(7, 6, 1, 'tes', 0, '2021-06-14 21:42:58'),
(8, 6, 61, 'chat', 0, '2021-06-15 13:13:41'),
(9, 1, 61, 'asdasdas', 0, '2021-06-15 13:25:22'),
(10, 61, 22, '123', 0, '2021-06-15 13:26:54'),
(11, 61, 22, 'asdasd', 0, '2021-06-15 13:31:36'),
(12, 22, 61, 'tes', 0, '2021-06-15 22:49:54'),
(13, 61, 62, 'tes', 0, '2021-06-15 22:50:38'),
(14, 67, 61, 'tes', 0, '2021-06-22 02:22:04'),
(15, 66, 61, 'selamat pagi gan', 0, '2021-07-11 15:35:06'),
(16, 61, 66, 'ok gan siap deal ya', 0, '2021-07-11 15:35:59'),
(17, 22, 62, 'tes', 0, '2021-07-13 01:40:55'),
(18, 22, 66, 'tes', 0, '2021-07-13 01:41:15'),
(19, 22, 67, 'tes', 0, '2021-07-13 01:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(11) NOT NULL,
  `id_limbah` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `faktor` varchar(20) NOT NULL,
  `rata_rata` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitung`
--

INSERT INTO `hitung` (`id_hitung`, `id_limbah`, `id_kriteria`, `faktor`, `rata_rata`, `id`) VALUES
(101, 1, 1, 'Core', 2, 0),
(102, 1, 1, 'Secondary', 3.5, 0),
(103, 1, 2, 'Core', 3.5, 0),
(104, 1, 2, 'Secondary', 4, 0),
(105, 1, 3, 'Core', 4.5, 0),
(106, 1, 3, 'Secondary', 4, 0),
(107, 1, 4, 'Core', 4.25, 0),
(108, 1, 4, 'Secondary', 3.5, 0),
(109, 1, 5, 'Core', 4.5, 0),
(110, 1, 5, 'Secondary', 4, 0),
(111, 2, 1, 'Core', 2, 0),
(112, 2, 1, 'Secondary', 3.5, 0),
(113, 2, 2, 'Core', 2, 0),
(114, 2, 2, 'Secondary', 3.5, 0),
(115, 2, 3, 'Core', 3.5, 0),
(116, 2, 3, 'Secondary', 4.5, 0),
(117, 2, 4, 'Core', 4.75, 0),
(118, 2, 4, 'Secondary', 3.5, 0),
(119, 2, 5, 'Core', 5, 0),
(120, 2, 5, 'Secondary', 4, 0),
(121, 3, 1, 'Core', 3.5, 0),
(122, 3, 1, 'Secondary', 4.75, 0),
(123, 3, 2, 'Core', 4.5, 0),
(124, 3, 2, 'Secondary', 5, 0),
(125, 3, 3, 'Core', 4, 0),
(126, 3, 3, 'Secondary', 5, 0),
(127, 3, 4, 'Core', 4.5, 0),
(128, 3, 4, 'Secondary', 3.5, 0),
(129, 3, 5, 'Core', 4.5, 0),
(130, 3, 5, 'Secondary', 4, 0),
(131, 4, 1, 'Core', 4.25, 0),
(132, 4, 1, 'Secondary', 4.75, 0),
(133, 4, 2, 'Core', 4.25, 0),
(134, 4, 2, 'Secondary', 4.5, 0),
(135, 4, 3, 'Core', 4.25, 0),
(136, 4, 3, 'Secondary', 4, 0),
(137, 4, 4, 'Core', 4.75, 0),
(138, 4, 4, 'Secondary', 4.5, 0),
(139, 4, 5, 'Core', 4.75, 0),
(140, 4, 5, 'Secondary', 5, 0),
(141, 5, 1, 'Core', 4.25, 0),
(142, 5, 1, 'Secondary', 4.75, 0),
(143, 5, 2, 'Core', 3.5, 0),
(144, 5, 2, 'Secondary', 4, 0),
(145, 5, 3, 'Core', 4, 0),
(146, 5, 3, 'Secondary', 3, 0),
(147, 5, 4, 'Core', 4.75, 0),
(148, 5, 4, 'Secondary', 4.5, 0),
(149, 5, 5, 'Core', 4.5, 0),
(150, 5, 5, 'Secondary', 3, 0),
(151, 6, 1, 'Core', 3.5, 0),
(152, 6, 1, 'Secondary', 4.5, 0),
(153, 6, 2, 'Core', 4.5, 0),
(154, 6, 2, 'Secondary', 4, 0),
(155, 6, 3, 'Core', 4, 0),
(156, 6, 3, 'Secondary', 5, 0),
(157, 6, 4, 'Core', 4.75, 0),
(158, 6, 4, 'Secondary', 5, 0),
(159, 6, 5, 'Core', 3.75, 0),
(160, 6, 5, 'Secondary', 4, 0),
(161, 7, 1, 'Core', 4, 0),
(162, 7, 1, 'Secondary', 2.75, 0),
(163, 7, 2, 'Core', 5, 0),
(164, 7, 2, 'Secondary', 5, 0),
(165, 7, 3, 'Core', 4.5, 0),
(166, 7, 3, 'Secondary', 2, 0),
(167, 7, 4, 'Core', 4.5, 0),
(168, 7, 4, 'Secondary', 5, 0),
(169, 7, 5, 'Core', 4.75, 0),
(170, 7, 5, 'Secondary', 4, 0),
(171, 8, 6, 'Core', 4, 0),
(172, 8, 6, 'Secondary', 5, 0),
(173, 8, 7, 'Core', 4.3333333333333, 0),
(174, 8, 7, 'Secondary', 4.5, 0),
(175, 9, 6, 'Core', 3.5, 0),
(176, 9, 6, 'Secondary', 5, 0),
(177, 9, 7, 'Core', 4.6666666666667, 0),
(178, 9, 7, 'Secondary', 5, 0),
(179, 10, 6, 'Core', 4.5, 0),
(180, 10, 6, 'Secondary', 5, 0),
(181, 10, 7, 'Core', 4, 0),
(182, 10, 7, 'Secondary', 4, 0),
(187, 12, 6, 'Core', 5, 0),
(188, 12, 6, 'Secondary', 3.5, 0),
(189, 12, 7, 'Core', 4.3333333333333, 0),
(190, 12, 7, 'Secondary', 3.5, 0),
(191, 13, 6, 'Core', 4.5, 0),
(192, 13, 6, 'Secondary', 5, 0),
(193, 13, 7, 'Core', 4, 0),
(194, 13, 7, 'Secondary', 4, 0),
(195, 14, 9, 'Core', 5, 0),
(196, 14, 9, 'Secondary', 5, 0),
(197, 14, 10, 'Core', 5, 0),
(198, 14, 10, 'Secondary', 5, 0),
(199, 16, 9, 'Core', 4, 0),
(200, 16, 9, 'Secondary', 4, 0),
(201, 16, 10, 'Core', 4, 0),
(202, 16, 10, 'Secondary', 4, 0),
(203, 17, 9, 'Core', 3, 0),
(204, 17, 9, 'Secondary', 3, 0),
(205, 17, 10, 'Core', 3, 0),
(206, 17, 10, 'Secondary', 3, 0),
(207, 18, 9, 'Core', 3.75, 0),
(208, 18, 9, 'Secondary', 3.6666666666667, 0),
(209, 18, 10, 'Core', 4, 0),
(210, 18, 10, 'Secondary', 3, 0),
(211, 19, 9, 'Core', 4, 0),
(212, 19, 9, 'Secondary', 4, 0),
(213, 19, 10, 'Core', 4, 0),
(214, 19, 10, 'Secondary', 4, 0),
(215, 20, 9, 'Core', 3, 0),
(216, 20, 9, 'Secondary', 3, 0),
(217, 20, 10, 'Core', 3, 0),
(218, 20, 10, 'Secondary', 3, 0),
(251, 35, 9, 'Core', 4.5, 22),
(252, 35, 9, 'Secondary', 5, 22),
(253, 35, 10, 'Core', 5, 22),
(254, 35, 10, 'Secondary', 5, 22),
(255, 36, 9, 'Core', 4.25, 22),
(256, 36, 9, 'Secondary', 5, 22),
(257, 36, 10, 'Core', 5, 22),
(258, 36, 10, 'Secondary', 5, 22),
(259, 38, 9, 'Core', 4.5, 22),
(260, 38, 9, 'Secondary', 5, 22),
(261, 38, 10, 'Core', 4, 22),
(262, 38, 10, 'Secondary', 5, 22),
(263, 37, 9, 'Core', 4.25, 22),
(264, 37, 9, 'Secondary', 4.6666666666667, 22),
(265, 37, 10, 'Core', 4, 22),
(266, 37, 10, 'Secondary', 4, 22),
(267, 42, 9, 'Core', 4.5, 22),
(268, 42, 9, 'Secondary', 4.6666666666667, 22),
(269, 42, 10, 'Core', 4, 22),
(270, 42, 10, 'Secondary', 5, 22),
(271, 44, 9, 'Core', 4.5, 32),
(272, 44, 9, 'Secondary', 5, 32),
(273, 44, 10, 'Core', 5, 32),
(274, 44, 10, 'Secondary', 5, 32),
(279, 46, 9, 'Core', 5, 32),
(280, 46, 9, 'Secondary', 5, 32),
(281, 46, 10, 'Core', 5, 32),
(282, 46, 10, 'Secondary', 5, 32),
(283, 47, 9, 'Core', 4, 40),
(284, 47, 9, 'Secondary', 4, 40),
(285, 47, 10, 'Core', 4, 40),
(286, 47, 10, 'Secondary', 4, 40),
(303, 50, 9, 'Core', 5, 67),
(304, 50, 9, 'Secondary', 5, 67),
(305, 50, 10, 'Core', 5, 67),
(306, 50, 10, 'Secondary', 5, 67),
(315, 54, 9, 'Core', 5, 66),
(316, 54, 9, 'Secondary', 5, 66),
(317, 54, 10, 'Core', 5, 66),
(318, 54, 10, 'Secondary', 5, 66),
(331, 56, 9, 'Core', 5, 67),
(332, 56, 9, 'Secondary', 5, 67),
(333, 56, 10, 'Core', 5, 67),
(334, 56, 10, 'Secondary', 5, 67),
(335, 57, 9, 'Core', 4.5, 67),
(336, 57, 9, 'Secondary', 5, 67),
(337, 57, 10, 'Core', 5, 67),
(338, 57, 10, 'Secondary', 4, 67),
(339, 59, 9, 'Core', 4.75, 66),
(340, 59, 9, 'Secondary', 4.3333333333333, 66),
(341, 59, 10, 'Core', 5, 66),
(342, 59, 10, 'Secondary', 5, 66),
(343, 60, 9, 'Core', 5, 66),
(344, 60, 9, 'Secondary', 4.3333333333333, 66),
(345, 60, 10, 'Core', 4, 66),
(346, 60, 10, 'Secondary', 5, 66);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `nilai_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `nilai_kriteria`) VALUES
(9, 'Penampilan Limbah Kayu', 50),
(10, 'Kekuatan Limbah Kayu', 50);

-- --------------------------------------------------------

--
-- Table structure for table `limbah`
--

CREATE TABLE `limbah` (
  `id_limbah` int(11) NOT NULL,
  `nama_limbah` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `limbah`
--

INSERT INTO `limbah` (`id_limbah`, `nama_limbah`, `id`) VALUES
(56, 'Limbah kayu jati', 67),
(57, 'Limbah Kayu Z', 67),
(58, 'merbau', 67),
(61, 'limbah kayu merbau', 66);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akhir`
--

CREATE TABLE `nilai_akhir` (
  `id_nilai_akhir` int(11) NOT NULL,
  `id_limbah` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_total` double NOT NULL,
  `nilai_akhir` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_akhir`
--

INSERT INTO `nilai_akhir` (`id_nilai_akhir`, `id_limbah`, `id_kriteria`, `nilai_total`, `nilai_akhir`, `id`) VALUES
(66, 1, 1, 2.6, 0.78, 0),
(67, 1, 2, 3.7, 0.925, 0),
(68, 1, 3, 4.3, 0.86, 0),
(69, 1, 4, 3.95, 0.5925, 0),
(70, 1, 5, 4.3, 0.43, 0),
(71, 2, 1, 2.6, 0.78, 0),
(72, 2, 2, 2.6, 0.65, 0),
(73, 2, 3, 3.9, 0.78, 0),
(74, 2, 4, 4.25, 0.6375, 0),
(75, 2, 5, 4.6, 0.46, 0),
(76, 3, 1, 4, 1.2, 0),
(77, 3, 2, 4.7, 1.175, 0),
(78, 3, 3, 4.4, 0.88, 0),
(79, 3, 4, 4.1, 0.615, 0),
(80, 3, 5, 4.3, 0.43, 0),
(81, 4, 1, 4.45, 1.335, 0),
(82, 4, 2, 4.35, 1.0875, 0),
(83, 4, 3, 4.15, 0.83, 0),
(84, 4, 4, 4.65, 0.6975, 0),
(85, 4, 5, 4.85, 0.485, 0),
(86, 5, 1, 4.45, 1.335, 0),
(87, 5, 2, 3.7, 0.925, 0),
(88, 5, 3, 3.6, 0.72, 0),
(89, 5, 4, 4.65, 0.6975, 0),
(90, 5, 5, 3.9, 0.39, 0),
(91, 6, 1, 3.9, 1.17, 0),
(92, 6, 2, 4.3, 1.075, 0),
(93, 6, 3, 4.4, 0.88, 0),
(94, 6, 4, 4.85, 0.7275, 0),
(95, 6, 5, 3.85, 0.385, 0),
(96, 7, 1, 3.5, 1.05, 0),
(97, 7, 2, 5, 1.25, 0),
(98, 7, 3, 3.5, 0.7, 0),
(99, 7, 4, 4.7, 0.705, 0),
(100, 7, 5, 4.45, 0.445, 0),
(101, 8, 6, 4.4, 1.32, 0),
(102, 8, 7, 4.4, 3.08, 0),
(103, 9, 6, 4.1, 1.23, 0),
(104, 9, 7, 4.8, 3.36, 0),
(105, 10, 6, 4.7, 1.41, 0),
(106, 10, 7, 4, 2.8, 0),
(109, 12, 6, 4.4, 1.32, 0),
(110, 12, 7, 4, 2.8, 0),
(111, 13, 6, 4.7, 1.41, 0),
(112, 13, 7, 4, 2.8, 0),
(113, 14, 9, 5, 2.5, 0),
(114, 14, 10, 5, 2.5, 0),
(115, 16, 9, 4, 2, 0),
(116, 16, 10, 4, 2, 0),
(117, 17, 9, 3, 1.5, 0),
(118, 17, 10, 3, 1.5, 0),
(119, 18, 9, 3.7166666666667, 1.8583333333333, 0),
(120, 18, 10, 3.6, 1.8, 0),
(121, 19, 9, 4, 2, 0),
(122, 19, 10, 4, 2, 0),
(123, 20, 9, 3, 1.5, 0),
(124, 20, 10, 3, 1.5, 0),
(141, 35, 9, 4.7, 2.35, 22),
(142, 35, 10, 5, 2.5, 22),
(143, 36, 9, 4.55, 2.275, 22),
(144, 36, 10, 5, 2.5, 22),
(145, 38, 9, 4.7, 2.35, 22),
(146, 38, 10, 4.4, 2.2, 22),
(147, 37, 9, 4.4166666666667, 2.2083333333333, 22),
(148, 37, 10, 4, 2, 22),
(149, 42, 9, 4.5666666666667, 2.2833333333333, 22),
(150, 42, 10, 4.4, 2.2, 22),
(151, 44, 9, 4.7, 2.35, 32),
(152, 44, 10, 5, 2.5, 32),
(155, 46, 9, 5, 2.5, 32),
(156, 46, 10, 5, 2.5, 32),
(157, 47, 9, 4, 2, 40),
(158, 47, 10, 4, 2, 40),
(167, 50, 9, 5, 2.5, 67),
(168, 50, 10, 5, 2.5, 67),
(173, 54, 9, 5, 2.5, 66),
(174, 54, 10, 5, 2.5, 66),
(181, 56, 9, 5, 2.5, 67),
(182, 56, 10, 5, 2.5, 67),
(183, 57, 9, 4.7, 2.35, 67),
(184, 57, 10, 4.6, 2.3, 67),
(185, 59, 9, 4.5833333333333, 2.2916666666667, 66),
(186, 59, 10, 5, 2.5, 66),
(187, 60, 9, 4.7333333333333, 2.3666666666667, 66),
(188, 60, 10, 4.4, 2.2, 66);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_gap`
--

CREATE TABLE `nilai_gap` (
  `id_gap` int(11) NOT NULL,
  `selisih_gap` int(11) NOT NULL,
  `nilai_gap` double NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_gap`
--

INSERT INTO `nilai_gap` (`id_gap`, `selisih_gap`, `nilai_gap`, `keterangan`) VALUES
(10, 0, 5, 'Tidak ada selisih (kompetensi sesuai dengan yang dibutuhkan)'),
(11, 1, 4.5, 'Kompetensi unsur kelebihan 1 tingkat'),
(12, -1, 4, 'Kompetensi unsur kekurangan 1 tingkat'),
(13, 2, 3.5, 'Kompetensi unsur kelebihan 2 tingkat'),
(14, -2, 3, 'Kompetensi unsur kekurangan 2 tingkat'),
(15, 3, 2.5, 'Kompetensi unsur kelebihan 3 tingkat'),
(18, -3, 2, 'Kompetensi unsur kekurangan 3 tingkat'),
(19, 4, 1.5, 'Kompetensi unsur kelebihan 4 tingkat'),
(20, -4, 1, 'Kompetensi unsur kekurangan 4 tingkat');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_limbah` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `selisih` double NOT NULL,
  `nilai_gap` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_limbah`, `id_kriteria`, `id_subkriteria`, `nilai`, `selisih`, `nilai_gap`, `id`) VALUES
(567, 5, 4, 16, 4, 1, 4.5, 0),
(568, 5, 5, 17, 4, 0, 5, 0),
(569, 5, 5, 18, 3, -2, 3, 0),
(570, 5, 5, 19, 3, -1, 4, 0),
(571, 5, 1, 20, 4, 0, 5, 0),
(572, 6, 1, 5, 4, 1, 4.5, 0),
(573, 6, 1, 6, 4, -1, 4, 0),
(574, 6, 1, 7, 2, -2, 3, 0),
(575, 6, 2, 8, 4, 0, 5, 0),
(576, 6, 2, 9, 2, -1, 4, 0),
(577, 6, 2, 10, 3, -1, 4, 0),
(578, 6, 3, 11, 4, 0, 5, 0),
(579, 6, 3, 12, 4, 0, 5, 0),
(580, 6, 3, 13, 3, -2, 3, 0),
(581, 6, 4, 14, 5, 1, 4.5, 0),
(582, 6, 4, 15, 4, 0, 5, 0),
(583, 6, 4, 16, 3, 0, 5, 0),
(584, 6, 5, 17, 2, -2, 3, 0),
(585, 6, 5, 18, 4, -1, 4, 0),
(586, 6, 5, 19, 5, 1, 4.5, 0),
(587, 6, 1, 20, 5, 1, 4.5, 0),
(588, 7, 1, 5, 5, 2, 3.5, 0),
(589, 7, 1, 6, 4, -1, 4, 0),
(590, 7, 1, 7, 3, -1, 4, 0),
(591, 7, 2, 8, 4, 0, 5, 0),
(592, 7, 2, 9, 3, 0, 5, 0),
(593, 7, 2, 10, 4, 0, 5, 0),
(594, 7, 3, 11, 1, -3, 2, 0),
(595, 7, 3, 12, 4, 0, 5, 0),
(596, 7, 3, 13, 4, -1, 4, 0),
(597, 7, 4, 14, 5, 1, 4.5, 0),
(598, 7, 4, 15, 5, 1, 4.5, 0),
(599, 7, 4, 16, 3, 0, 5, 0),
(600, 7, 5, 17, 4, 0, 5, 0),
(601, 7, 5, 18, 4, -1, 4, 0),
(602, 7, 5, 19, 5, 1, 4.5, 0),
(603, 7, 1, 20, 1, -3, 2, 0),
(604, 8, 6, 21, 5, 2, 3.5, 0),
(605, 8, 6, 22, 4, 1, 4.5, 0),
(606, 8, 6, 23, 3, 0, 5, 0),
(607, 8, 7, 24, 4, 1, 4.5, 0),
(608, 8, 7, 25, 3, 0, 5, 0),
(609, 8, 7, 26, 5, 2, 3.5, 0),
(610, 8, 7, 27, 4, 1, 4.5, 0),
(611, 9, 6, 21, 5, 2, 3.5, 0),
(612, 9, 6, 22, 5, 2, 3.5, 0),
(613, 9, 6, 23, 3, 0, 5, 0),
(614, 9, 7, 24, 4, 1, 4.5, 0),
(615, 9, 7, 25, 4, 1, 4.5, 0),
(616, 9, 7, 26, 3, 0, 5, 0),
(617, 9, 7, 27, 3, 0, 5, 0),
(618, 10, 6, 21, 4, 1, 4.5, 0),
(619, 10, 6, 22, 4, 1, 4.5, 0),
(620, 10, 6, 23, 3, 0, 5, 0),
(621, 10, 7, 24, 4, 1, 4.5, 0),
(622, 10, 7, 25, 5, 2, 3.5, 0),
(623, 10, 7, 26, 2, -1, 4, 0),
(624, 10, 7, 27, 2, -1, 4, 0),
(632, 12, 6, 21, 3, 0, 5, 0),
(633, 12, 6, 22, 3, 0, 5, 0),
(634, 12, 6, 23, 5, 2, 3.5, 0),
(635, 12, 7, 24, 4, 1, 4.5, 0),
(636, 12, 7, 25, 2, -1, 4, 0),
(637, 12, 7, 26, 4, 1, 4.5, 0),
(638, 12, 7, 27, 5, 2, 3.5, 0),
(639, 13, 6, 21, 4, 1, 4.5, 0),
(640, 13, 6, 22, 4, 1, 4.5, 0),
(641, 13, 6, 23, 3, 0, 5, 0),
(642, 13, 7, 24, 4, 1, 4.5, 0),
(643, 13, 7, 25, 5, 2, 3.5, 0),
(644, 13, 7, 26, 2, -1, 4, 0),
(645, 13, 7, 27, 2, -1, 4, 0),
(646, 14, 9, 33, 3, 0, 5, 0),
(647, 14, 9, 34, 3, 0, 5, 0),
(648, 14, 9, 35, 3, 0, 5, 0),
(649, 14, 9, 36, 3, 0, 5, 0),
(650, 14, 9, 38, 3, 0, 5, 0),
(651, 14, 9, 39, 3, 0, 5, 0),
(652, 14, 9, 40, 3, 0, 5, 0),
(653, 14, 10, 41, 3, 0, 5, 0),
(654, 14, 10, 42, 3, 0, 5, 0),
(655, 16, 9, 33, 2, -1, 4, 0),
(656, 16, 9, 34, 2, -1, 4, 0),
(657, 16, 9, 35, 2, -1, 4, 0),
(658, 16, 9, 36, 2, -1, 4, 0),
(659, 16, 9, 38, 2, -1, 4, 0),
(660, 16, 9, 39, 2, -1, 4, 0),
(661, 16, 9, 40, 2, -1, 4, 0),
(662, 16, 10, 41, 2, -1, 4, 0),
(663, 16, 10, 42, 2, -1, 4, 0),
(664, 17, 9, 33, 1, -2, 3, 0),
(665, 17, 9, 34, 1, -2, 3, 0),
(666, 17, 9, 35, 1, -2, 3, 0),
(667, 17, 9, 36, 1, -2, 3, 0),
(668, 17, 9, 38, 1, -2, 3, 0),
(669, 17, 9, 39, 1, -2, 3, 0),
(670, 17, 9, 40, 1, -2, 3, 0),
(671, 17, 10, 41, 1, -2, 3, 0),
(672, 17, 10, 42, 1, -2, 3, 0),
(673, 18, 9, 33, 3, 0, 5, 0),
(674, 18, 9, 34, 1, -2, 3, 0),
(675, 18, 9, 35, 2, -1, 4, 0),
(676, 18, 9, 36, 1, -2, 3, 0),
(677, 18, 9, 38, 3, 0, 5, 0),
(678, 18, 9, 39, 1, -2, 3, 0),
(679, 18, 9, 40, 1, -2, 3, 0),
(680, 18, 10, 41, 2, -1, 4, 0),
(681, 18, 10, 42, 1, -2, 3, 0),
(682, 19, 9, 33, 2, -1, 4, 0),
(683, 19, 9, 34, 2, -1, 4, 0),
(684, 19, 9, 35, 2, -1, 4, 0),
(685, 19, 9, 36, 2, -1, 4, 0),
(686, 19, 9, 38, 2, -1, 4, 0),
(687, 19, 9, 39, 2, -1, 4, 0),
(688, 19, 9, 40, 2, -1, 4, 0),
(689, 19, 10, 41, 2, -1, 4, 0),
(690, 19, 10, 42, 2, -1, 4, 0),
(691, 20, 9, 33, 1, -2, 3, 0),
(692, 20, 9, 34, 1, -2, 3, 0),
(693, 20, 9, 35, 1, -2, 3, 0),
(694, 20, 9, 36, 1, -2, 3, 0),
(695, 20, 9, 38, 1, -2, 3, 0),
(696, 20, 9, 39, 1, -2, 3, 0),
(697, 20, 9, 40, 1, -2, 3, 0),
(698, 20, 10, 41, 1, -2, 3, 0),
(699, 20, 10, 42, 1, -2, 3, 0),
(772, 35, 9, 33, 3, 0, 5, 22),
(773, 35, 9, 34, 2, -1, 4, 22),
(774, 35, 9, 35, 2, -1, 4, 22),
(775, 35, 9, 36, 3, 0, 5, 22),
(776, 35, 9, 38, 3, 0, 5, 22),
(777, 35, 9, 39, 3, 0, 5, 22),
(778, 35, 9, 40, 3, 0, 5, 22),
(779, 35, 10, 41, 3, 0, 5, 22),
(780, 35, 10, 42, 3, 0, 5, 22),
(781, 36, 9, 33, 2, -1, 4, 22),
(782, 36, 9, 34, 2, -1, 4, 22),
(783, 36, 9, 35, 2, -1, 4, 22),
(784, 36, 9, 36, 3, 0, 5, 22),
(785, 36, 9, 38, 3, 0, 5, 22),
(786, 36, 9, 39, 3, 0, 5, 22),
(787, 36, 9, 40, 3, 0, 5, 22),
(788, 36, 10, 41, 3, 0, 5, 22),
(789, 36, 10, 42, 3, 0, 5, 22),
(790, 38, 9, 33, 3, 0, 5, 22),
(791, 38, 9, 34, 1, -2, 3, 22),
(792, 38, 9, 35, 3, 0, 5, 22),
(793, 38, 9, 36, 3, 0, 5, 22),
(794, 38, 9, 38, 3, 0, 5, 22),
(795, 38, 9, 39, 3, 0, 5, 22),
(796, 38, 9, 40, 3, 0, 5, 22),
(797, 38, 10, 41, 2, -1, 4, 22),
(798, 38, 10, 42, 3, 0, 5, 22),
(799, 37, 9, 33, 3, 0, 5, 22),
(800, 37, 9, 34, 1, -2, 3, 22),
(801, 37, 9, 35, 3, 0, 5, 22),
(802, 37, 9, 36, 2, -1, 4, 22),
(803, 37, 9, 38, 2, -1, 4, 22),
(804, 37, 9, 39, 3, 0, 5, 22),
(805, 37, 9, 40, 3, 0, 5, 22),
(806, 37, 10, 41, 2, -1, 4, 22),
(807, 37, 10, 42, 2, -1, 4, 22),
(808, 42, 9, 33, 3, 0, 5, 22),
(809, 42, 9, 34, 2, -1, 4, 22),
(810, 42, 9, 35, 2, -1, 4, 22),
(811, 42, 9, 36, 3, 0, 5, 22),
(812, 42, 9, 38, 2, -1, 4, 22),
(813, 42, 9, 39, 3, 0, 5, 22),
(814, 42, 9, 40, 3, 0, 5, 22),
(815, 42, 10, 41, 2, -1, 4, 22),
(816, 42, 10, 42, 3, 0, 5, 22),
(817, 44, 9, 33, 3, 0, 5, 32),
(818, 44, 9, 34, 3, 0, 5, 32),
(819, 44, 9, 35, 1, -2, 3, 32),
(820, 44, 9, 36, 3, 0, 5, 32),
(821, 44, 9, 38, 3, 0, 5, 32),
(822, 44, 9, 39, 3, 0, 5, 32),
(823, 44, 9, 40, 3, 0, 5, 32),
(824, 44, 10, 41, 3, 0, 5, 32),
(825, 44, 10, 42, 3, 0, 5, 32),
(835, 46, 9, 33, 3, 0, 5, 32),
(836, 46, 9, 34, 3, 0, 5, 32),
(837, 46, 9, 35, 3, 0, 5, 32),
(838, 46, 9, 36, 3, 0, 5, 32),
(839, 46, 9, 38, 3, 0, 5, 32),
(840, 46, 9, 39, 3, 0, 5, 32),
(841, 46, 9, 40, 3, 0, 5, 32),
(842, 46, 10, 41, 3, 0, 5, 32),
(843, 46, 10, 42, 3, 0, 5, 32),
(844, 47, 9, 33, 2, -1, 4, 40),
(845, 47, 9, 34, 2, -1, 4, 40),
(846, 47, 9, 35, 2, -1, 4, 40),
(847, 47, 9, 36, 2, -1, 4, 40),
(848, 47, 9, 38, 2, -1, 4, 40),
(849, 47, 9, 39, 2, -1, 4, 40),
(850, 47, 9, 40, 2, -1, 4, 40),
(851, 47, 10, 41, 2, -1, 4, 40),
(852, 47, 10, 42, 2, -1, 4, 40),
(889, 50, 9, 33, 3, 0, 5, 67),
(890, 50, 9, 34, 3, 0, 5, 67),
(891, 50, 9, 35, 3, 0, 5, 67),
(892, 50, 9, 36, 3, 0, 5, 67),
(893, 50, 9, 38, 3, 0, 5, 67),
(894, 50, 9, 39, 3, 0, 5, 67),
(895, 50, 9, 40, 3, 0, 5, 67),
(896, 50, 10, 41, 3, 0, 5, 67),
(897, 50, 10, 42, 3, 0, 5, 67),
(916, 54, 9, 33, 3, 0, 5, 66),
(917, 54, 9, 34, 3, 0, 5, 66),
(918, 54, 9, 35, 3, 0, 5, 66),
(919, 54, 9, 36, 3, 0, 5, 66),
(920, 54, 9, 38, 3, 0, 5, 66),
(921, 54, 9, 39, 3, 0, 5, 66),
(922, 54, 9, 40, 3, 0, 5, 66),
(923, 54, 10, 41, 3, 0, 5, 66),
(924, 54, 10, 42, 3, 0, 5, 66),
(952, 56, 9, 33, 3, 0, 5, 67),
(953, 56, 9, 34, 3, 0, 5, 67),
(954, 56, 9, 35, 3, 0, 5, 67),
(955, 56, 9, 36, 3, 0, 5, 67),
(956, 56, 9, 38, 3, 0, 5, 67),
(957, 56, 9, 39, 3, 0, 5, 67),
(958, 56, 9, 40, 3, 0, 5, 67),
(959, 56, 10, 41, 3, 0, 5, 67),
(960, 56, 10, 42, 3, 0, 5, 67),
(961, 57, 9, 33, 2, -1, 4, 67),
(962, 57, 9, 34, 3, 0, 5, 67),
(963, 57, 9, 35, 2, -1, 4, 67),
(964, 57, 9, 36, 3, 0, 5, 67),
(965, 57, 9, 38, 3, 0, 5, 67),
(966, 57, 9, 39, 3, 0, 5, 67),
(967, 57, 9, 40, 3, 0, 5, 67),
(968, 57, 10, 41, 3, 0, 5, 67),
(969, 57, 10, 42, 2, -1, 4, 67),
(970, 59, 9, 33, 2, -1, 4, 66),
(971, 59, 9, 34, 3, 0, 5, 66),
(972, 59, 9, 35, 3, 0, 5, 66),
(973, 59, 9, 36, 3, 0, 5, 66),
(974, 59, 9, 38, 1, -2, 3, 66),
(975, 59, 9, 39, 3, 0, 5, 66),
(976, 59, 9, 40, 3, 0, 5, 66),
(977, 59, 10, 41, 3, 0, 5, 66),
(978, 59, 10, 42, 3, 0, 5, 66),
(979, 60, 9, 33, 3, 0, 5, 66),
(980, 60, 9, 34, 3, 0, 5, 66),
(981, 60, 9, 35, 3, 0, 5, 66),
(982, 60, 9, 36, 3, 0, 5, 66),
(983, 60, 9, 38, 2, -1, 4, 66),
(984, 60, 9, 39, 2, -1, 4, 66),
(985, 60, 9, 40, 3, 0, 5, 66),
(986, 60, 10, 41, 2, -1, 4, 66),
(987, 60, 10, 42, 3, 0, 5, 66);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `id_rangking` int(11) NOT NULL,
  `id_limbah` int(11) NOT NULL,
  `nilai_rangking` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id_rangking`, `id_limbah`, `nilai_rangking`, `id`) VALUES
(10, 1, 3.5875, 0),
(11, 2, 3.3075, 0),
(12, 3, 4.3, 0),
(13, 4, 4.4350000000000005, 0),
(14, 5, 4.067499999999999, 0),
(15, 6, 4.2375, 0),
(16, 7, 4.15, 0),
(17, 8, 4.4, 0),
(18, 9, 4.59, 0),
(19, 10, 4.21, 0),
(21, 12, 4.12, 0),
(22, 13, 4.21, 0),
(23, 14, 5, 0),
(24, 16, 4, 0),
(25, 17, 3, 0),
(26, 18, 3.6583333333333004, 0),
(27, 19, 4, 0),
(28, 20, 3, 0),
(37, 35, 4.85, 22),
(38, 36, 4.775, 22),
(39, 38, 4.550000000000001, 22),
(40, 37, 4.2083333333333, 22),
(41, 42, 4.4833333333333005, 22),
(42, 44, 4.85, 32),
(44, 46, 5, 32),
(45, 47, 4, 40),
(50, 50, 5, 67),
(53, 54, 5, 66),
(57, 56, 5, 67),
(58, 57, 4.65, 67),
(59, 59, 4.7916666666667, 66),
(60, 60, 4.5666666666667, 66);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(100) NOT NULL,
  `faktor` varchar(50) NOT NULL,
  `nilai_subkriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `faktor`, `nilai_subkriteria`) VALUES
(33, 9, 'Berjamur', 'Core', 3),
(34, 9, 'Berlubang', 'Core', 3),
(35, 9, 'Pelapukan', 'Core', 3),
(36, 9, 'Keretakan', 'Core', 3),
(38, 9, 'Warna', 'Secondary', 3),
(39, 9, 'Tekstur', 'Secondary', 3),
(40, 9, 'Ukuran Limbah Kayu', 'Secondary', 3),
(41, 10, 'Fisik Kayu', 'Core', 3),
(42, 10, 'Berat Kayu', 'Secondary', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `pengirim` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul_berita`, `keterangan`, `pengirim`, `date_created`, `gambar`) VALUES
(30, 'Hari Hutan Sedunia 21 Maret, Simak Sejarah dan Makna Peringatannya', 'Bagi sebagian orang mungkin memperingati Hari Hutan Sedunia adalah hal yang asing, hal itu dikarenakan Hari Hutan Sedunia baru diresmikan beberapa tahun belakangan ini.\r\n\r\nHari Hutan Sedunia adalah hari yang diadakan dengan tujuan untuk saling berbagi visi dan misi mengenai hal yang berkaitan dengan hutan dan pohon, perubahan iklim, dan strategi yang harus dilakukan.\r\n\r\nHari Hutan Sedunia diperingati pada tanggal 21 Maret ini. Berikut adalah informasi lengkap soal Hari Hutan Sedunia.\r\n\r\nInternational Day of Forest atau Hari Hutan Sedunia ditetapkan oleh PBB dalam resolusi PBB 67/200 pada 21 Desember 2012, secara singkat penjelasan dari PBB mengenai tujuan memperingati Hari Hutan Sedunia adalah untuk menyadarkan seluruh masyarakat bahwa pentingnya menjaga kelestarian hutan bagi keberlangsungan seluruh makhluk hidup di bumi.\r\n\r\nMulanya hari ini diperingati sebagai World Forestry Day pada tahun 1971, yang mengusulkan ide ini adalah Konferensi Organisasi Pangan dan Pertanian yang ke-16 yang jatuh setiap tanggal 21 Maret.\r\n\r\nBerikut adalah daftar perayaan World Forest Day yang sudah pernah diselenggarakan sebelumnya:\r\n\r\n\r\nBali, Indonesia (2007)\r\nPoznan, Polandia (2008)\r\nCopenhagen, Denmark (2009)\r\nCancun, Meksiko (2010)\r\nDoha, Qatar (2012)\r\nQatar menjadi kota terkahir perayaan tersebut sebelum akhirnya berganti nama dengan International Day of Forest dimana peringatan ini dirayakan di seluruh dunia dengan tema yang berbeda pada setiap tahunnya.\r\n\r\nYang menjadi pemicu lahirnya peringatan Hari Hutan Sedunia adalah karena faktanya dalam setiap tahun kita kehilangan 13 hektar hutan, jika hutan hilang maka akan secara otomatis segala jenis mahkluk hidup yang tinggal di hutan akan musnah pula.\r\n\r\n\r\nMenurut beberapa catatan dampak dari penggundulan hutan atau deforestasi mengakibatkan tidak terserapnya 12-18% emisi karbon yang ada di sekitar kita.\r\n\r\nTujuan Hari Hutan Sedunia\r\n\r\nPeringatan Hari Hutan Sedunia diadakan dengan tujuan agar kita semakin sadar dan peduli tentang betapa pentingnya hutan bagi kehidupan setiap makhluk hidup yang tinggal di bumi kita ini.\r\n\r\nAda berbagai ekosistem yang tinggal di dalam hutan, jika hutan terus dihabisi maka akan banyak kerugian yang kita rasakan, pasalnya bukan hanya kita yang membutuhkan hutan tetapi juga para generasi penerus kita.\r\n\r\nSelain itu dengan semakin banyaknya hutan yang hilang menyebabkan perubahan iklim yang akan berpengaruh pada kehidupan kita sehari-hari, contohnya pemanasan global\r\n\r\n\r\nPada tanggal 21 Maret pada setiap tahunnya negara-negara didorong untuk melakukan upaya berskala lokal, nasional maupun internasional untuk membuat acara yang masih bersinggungan dengan hutan dan pohon.\r\n\r\nContohnya yang terjadi di Indonesia para aktivis lingkungan merayakan Hari Hutan Sedunia dengan berbagai macam acara. Pada tahun 2020 contohnya negara kita memperingati Hari Hutan Sedunia dengan tema ‘Hutan dan Keanekaragaman Hayati’ dan acara yang berlangsung berupa kampanye penanaman pohon dan edukasi terkait hutan, pohon dan segala ekosistem di dalamnya.\r\n\r\nKegunaan Hutan Bagi Kehidupan\r\n\r\nBerikut adalah alasan mengapa hutan perlu kita lestarikan:\r\n\r\nHutan adalah penyedia oksigen terbesar di bumi ini\r\nMenyediakan segala sumber obat-obatan alami yang tidak banyak memiliki efek samping\r\nSebagai penampung air secara alami\r\nMenahan angin\r\nPendingin alami suhu di permukaan bumi\r\nRumah bagi seluruh makhluk hidup di bumi\r\nPenyeimbang Iklim\r\nItulah ulasan lengkap soal Hari Hutan Sedunia, yuk kita jaga bumi kita dengan melestarikan paru-paru dunia ini.', 'Admin', 1622906330, '78907-ilustrasi-hutan-adat.jpg'),
(31, 'Hari Lingkungan Hidup Sedunia, Tema dan Berbagai Aktivitas yang Bisa Dilakukan', 'Setiap tanggal 5 Juni diperingati Hari Lingkungan Hidup Sedunia atau World Environment Day. Peringatan yang dilakukan di seluruh dunia ini diketahui bermula sejak tahun 1974.\r\nLingkungan hidup menjadi isu penting yang sudah jadi perhatian sejak lama. Banyaknya penebangan pohon memicu sejumlah potensi kerusakan alam yang berpotensi merusak ekosistem.', 'Admin', 1623137781, 'jalan-jalan-ke-hutan-2_169.jpg'),
(32, 'Sejarah Hari Pohon Sedunia 2020 & Peran Pentingnya dalam Kehidupan  Baca selengkapnya di artikel', 'Hari Pohon Sedunia atau World Tree Day jatuh tanggal 22 November setiap tahunnya. Tujuan diadakannya Hari Pohon Sedunia adalah untuk mengingat dan menghormati jasa dari J Sterling Morton, seorang pencinta alam dari Amerika Serikat. \r\n\r\nMorton begitu gigih dalam mengampanyekan gerakan menanam pohon dan sikapnya ini tentu punya alasan, karena setiap makhluk hidup yang ada di bumi membutuhkan kontribusi pohon untuk bisa hidup. \r\n\r\nDikutip dari World Economic Forum, pohon saat ini merupakan teknologi yang paling hemat biaya dan terbaik untuk penghilangan dan penyimpanan karbon. \r\n\r\nPerusahaan di seluruh dunia bekerja untuk mengurangi dan mengimbangi emisi karbon. Ini adalah langkah penting untuk membantu mengekang dampak merusak dari perubahan iklim, tetapi, tidak ada solusi yang tepat untuk masalah ini. \r\n\r\nDalam semua strategi berbeda yang diterapkan, solusi iklim alami harus secara konsisten menjadi bagian dari portofolio keberlanjutan ini. Bagi banyak organisasi, solusi iklim alami yang paling efektif adalah menanam pohon. \r\n\r\nMenanam pohon selain menghindari dan mengurangi emisi dengan cepat, pembuangan dan penyimpanan karbon adalah hal yang pada akhirnya akan mulai menstabilkan iklim yang berubah. Solusi iklim alami, khususnya reboisasi belakangan ini mendapatkan momentum dan kesadaran yang luar biasa karena alasan ini. \r\n\r\nPerkembangbiakan inisiatif penanaman pohon dan restorasi hutan global, regional dan lokal baru termasuk United Nations (UN) Decade tentang Restorasi Ekosistem, Platform Triliun Pohon 1t.org dari Forum Ekonomi Dunia, inisiatif Time for Trees dan lainnya telah diumumkan dalam beberapa tahun terakhir. Jika diterapkan dengan benar, pohon saat ini merupakan teknologi yang paling hemat biaya dan terbaik untuk penghilangan dan penyimpanan karbon. \r\n\r\nPentingnya Pohon untuk Kehidupan \r\n\r\nSelain itu, menanam pohon memberikan banyak sekali manfaat tambahan bagi planet kita yang tidak dapat dilakukan oleh strategi kredit karbon lainnya. Hutan yang sehat meningkatkan kualitas udara dan air, menyediakan habitat satwa liar, menstabilkan tanah, memberikan kesempatan untuk rekreasi, merangsang ekonomi lokal, dan banyak lagi. \r\n\r\nPenelitian dengan jelas menunjukkan pentingnya pohon sebagai bagian dari pendekatan menyeluruh terhadap dekarbonisasi, namun restorasi hutan mendapatkan jumlah investasi yang paling sedikit. Faktanya, National Academy of Sciences menyatakan bahwa solusi iklim alami telah diabaikan oleh banyak investor, perusahaan, dan pemerintah meskipun itu adalah teknologi yang paling hemat biaya dan terukur untuk membantu memperlambat dan membalikkan perubahan iklim. Sudah waktunya untuk mengubahnya dan memanfaatkan penggunaan pohon secara lebih efektif sebagai bagian penting dari solusi perubahan iklim. \r\n\r\nKredit karbon kehutanan menawarkan lebih dari sekedar sarana untuk mencapai tujuan keberlanjutan perusahaan, karena dapat membantu melindungi, mengelola dan memulihkan hutan yang merupakan penyerap karbon dengan potensi tertinggi. Berikut ini langkah nyata dari PBB yang dapat diambil untuk menjaga hutan dan pohon saat ini: \r\n\r\nGunakan kerangka kerja \"Lindungi-Kelola-Pulihkan\" untuk memandu strategi dan tindakan bisnis berbasis alam. \r\n\r\nPikirkan hutan sebagai teknologi yang sudah terbukti: selama 3,8 miliar tahun, hutan dan lautan selalu menjadi teknologi penghilang karbon terbaik, secara alami menciptakan keseimbangan bagi planet kita. Investasikan dalam solusi yang telah terbukti ini. \r\n\r\nKesampingkan ego dan kesempurnaan untuk bersama-sama menciptakan solusi iklim alami dalam skala besar: menurut PBB, hampir 2 miliar hektar lahan terdegradasi secara serius secara global, luasnya dua kali luas daratan Cina. \r\n\r\nKebutuhan akan restorasi sangat mendesak dan peluangnya begitu besar sehingga kita harus menemukan titik temu untuk berkolaborasi secara lebih efektif dalam skala besar versus bersaing untuk meraih kemenangan individu dan organisasi jangka pendek. \r\n\r\nBergabunglah dengan kelompok kerja dan terlibat dengan platform untuk perubahan, misalnya, terlibat dengan Aliansi Solusi Iklim Alami dari Forum Ekonomi Dunia dan kelompok kerja Keuangan Karbon di 1t.org AS, atau organisasi pecinta alam lainnya. \r\n\r\nKarena itu sekaranglah waktunya untuk pohon. Pohon menyediakan kebutuhan hidup. Mereka membersihkan udara dan air kita sekaligus meningkatkan keanekaragaman hayati, tanah, kesehatan, produksi pangan dan ekonomi.', 'Admin', 1623205703, 'ilustrasi-hijau-istockphoto_ratio-16x9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karya`
--

CREATE TABLE `tb_karya` (
  `id_kry` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kegunaan` varchar(60) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `foto_karya` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karya`
--

INSERT INTO `tb_karya` (`id_kry`, `nama`, `kegunaan`, `keterangan`, `foto_karya`, `id`) VALUES
(21, 'Kotak Tisu', 'Sebagai tempat untuk memperindah tisu di meja', 'HandmadeBahan : Terbuat dari kayu limbah mahoniBerat : 120gDimensi : 238 x 124 x 75 mm', 'tissue_box.jpg', 62),
(22, 'Pot Bunga Kotak', 'Untuk menanam bungan mini', 'Terbuat dari limbah kayu jati ukuran 5 x 5 x 8 cm Note : barang yg didapat hanya 1\r\n', 'refurbished_furniture.jpg', 61),
(23, 'kotak pensil', 'menyimpan alat tulis', 'terbuat dari limbah kayu merbau ukuran 3x3x', 'kotakpensil.jpeg', 61);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kayu`
--

CREATE TABLE `tb_kayu` (
  `id_ky` int(11) NOT NULL,
  `id_limbah` int(11) NOT NULL,
  `jumlah_kayu` varchar(60) NOT NULL,
  `ukuran_kayu` enum('Kecil','Sedang','Besar','') NOT NULL,
  `bentuk_kayu` enum('Balok','Papan','Batang','Potongan') NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `foto_kayu` text NOT NULL,
  `bukti_cekkayu` text NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_donasi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_ky` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `names` varchar(225) NOT NULL,
  `emails` varchar(128) NOT NULL,
  `nomor_telepons` varchar(120) NOT NULL,
  `nama_limbah` varchar(120) NOT NULL,
  `tgl_donasi` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_donasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_donasi`, `id`, `id_ky`, `id_user`, `names`, `emails`, `nomor_telepons`, `nama_limbah`, `tgl_donasi`, `status_donasi`) VALUES
(41, 61, 79, 66, 'Muhammad Nur Haritsah', 'm.nur.harits@gmail.com', '08984097926', 'Limbah merbau', '2021-07-11 10:29:02', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `latitude` varchar(225) NOT NULL,
  `longitude` varchar(225) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `alamat`, `latitude`, `longitude`, `nomor_telepon`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(22, 'Admin', 'admin@admin.com', 'Jln Merdeka Barat, No. 12, Rt 09, Rw. 06, Kec. Kepa Duri, Kel. Kebon Jeruk, Jakarta BaratJl. Kelapa dua raya Gg.Buntu Kebon Jeruk Jakarta Barat', '-6.209844902932365', '106.76839831312459', '087123491042', 'default1.jpg', '$2y$10$aL3mYFbsajB4M.PXEQicA.L/KztIESOCAb5v55nR46yCjCAiRfmvC', 1, 1, 1615522442),
(61, 'UD Jadi Karya', 'udjadikarya@gmail.com', 'Jl E No 40b, Kelapa dua, Kebon Jeruk, Jakarta Barat 11550', '-6.210698172917605', '106.76719665339263', '081385957688', 'default.jpg', '$2y$10$h8.XBOijrQXC1UBOp27iBO7Uak/94Jfa2g7FZbYedqqCY8WcnrR4.', 3, 1, 1623420959),
(62, 'Toko Furniture Muria Jaya', 'furniturmuriajaya@gmail.com', 'Jl. Lontar Raya No.320, RT.10/RW.6, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470', '-6.170251658249948', '106.78427741744154', '0215687632', 'default.jpg', '$2y$10$OU1nM6zmWs5mLS9HXHjwme36pdkq23Zrxi2NkvXhy0u9m9powi4XW', 3, 1, 1623424770),
(66, 'Muhammad Nur Haritsah', 'm.nur.harits@gmail.com', 'Jn. H. Senin No 41, Jakarta Barat', '-6.189110017715882', '106.7889982087535', '08984097926', 'default.jpg', '$2y$10$Lmwd6TRDJVdRO1UU44ct8.1D9wkzyQzr9HaAx1GWVHpRqfg.BanxC', 2, 1, 1623453488),
(67, 'Satria Mulya', 'satriamulya.9@gmail.com', 'JL Ulujami Raya Gang Warung Bensin RT 06 RW 05 Kelurahan Ulujami Kecamatan Pesanggrahan', '-6.189110017715882', '106.74350694702017', '082122616433', 'default.jpg', '$2y$10$a4W4HNYxn9SEXWSpaEGct.alY3/GgbNMlRyOxB3ni3VxYKSWkHTue', 2, 1, 1623453535);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(12, 1, 2),
(13, 2, 2),
(26, 1, 5),
(31, 1, 3),
(48, 2, 9),
(52, 2, 12),
(53, 1, 4),
(56, 2, 13),
(76, 1, 17),
(77, 1, 16),
(78, 3, 11),
(80, 3, 2),
(81, 3, 17),
(82, 2, 17),
(83, 3, 10),
(84, 1, 18),
(85, 2, 18),
(86, 3, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'SPK'),
(5, 'User_management'),
(6, 'Laporan'),
(7, 'Sekian'),
(8, 'Test'),
(9, 'Menu Donatur'),
(10, 'Menu Toko'),
(11, 'Halaman Utama Toko'),
(12, 'Halaman Utama'),
(13, 'Cekkayu'),
(14, 'Halaman Utama Admin'),
(15, 'Geografis'),
(16, 'Berita'),
(17, 'Info Web'),
(18, 'Chat');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Donatur'),
(3, 'Toko');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `urutan`) VALUES
(1, 1, 'Dashboard', 'admin/index', 'fas fa-fw fa-tachometer-alt', 1, 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1, 3),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1, 4),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1, 6),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1, 7),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1, 2),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1, 5),
(14, 5, 'User', 'user_management', 'fas fa-user-edit', 1, 0),
(16, 6, 'Laporan', 'laporan', 'fas fa-paste', 1, 0),
(17, 0, 'Admin', 'admin', 'fas fa-fw fa-tachometer-alt', 1, 0),
(18, 9, 'Data Donasi', 'menu_donatur', 'fas fa-database', 1, 0),
(21, 10, 'Karya Toko', 'toko/karya_toko', 'fas fa-award', 1, 0),
(22, 10, 'Donasi Proses', 'toko/donasi_proses', 'fas fa-redo-alt', 1, 0),
(25, 9, 'Donasi Proses', 'donatur/donasi_proses', 'fas fa-redo-alt', 1, 0),
(35, 11, 'Beranda', 'toko/Beranda_toko', 'fas fa-home', 0, 0),
(36, 12, 'Beranda', 'donatur/Beranda_user', 'fas fa-home', 1, 0),
(40, 11, 'Beranda', 'toko/list_limbah', 'fas fa-home', 1, 0),
(42, 4, 'Kriteria', 'spk/kriteria', 'fas fa-fw fa-file', 1, 0),
(43, 4, 'Sub Kriteria', 'spk/subkriteria', 'fas fa-fw fa-file-alt', 1, 0),
(44, 4, 'Nilai GAP', 'spk/nilaigap', 'fas fa-fw fa-book', 1, 0),
(45, 13, 'Isi Limbah Kayu', 'cekkayu/limbah', 'fas fa-fw fa-users', 1, 0),
(46, 13, 'Tambah Penilaian', 'cekkayu/tambahpenilaian', 'fas fa-fw fa-users', 1, 0),
(47, 13, 'Hasil Cek Limbah Kayu', 'cekkayu/penilaian', 'fas fa-fw fa-print', 1, 0),
(51, 16, 'Kelola Berita', 'berita/kelolaberita', 'far fa-newspaper', 1, 0),
(52, 17, 'Tentang Website', 'landing_page', 'fas fa-tv', 1, 0),
(53, 9, 'Donasi Berhasil', 'donatur/donasi_berhasil', 'fas fa-fw fa-file-alt', 0, 0),
(54, 10, 'Donasi Berhasil', 'toko/donasi_berhasil', 'fas fa-fw fa-file-alt', 0, 0),
(55, 18, 'Chat All User', 'chat', 'fas fa-comment-dots', 1, 0),
(56, 9, 'Laporan', 'donatur/laporan', 'fas fa-print', 1, 0),
(57, 10, 'Laporan', 'toko/laporan', 'fas fa-print', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'toko@toko.com', 'grT+wdmwMk0TApmZVWyo6qBoJrkYEYQcvO1rCsbZg9I=', 1619072589),
(2, 'Dody@yahoo.com', '/sS6RRyDF7PkWCcDj6rAvL3vtOC3PDnCpk9TFzld26U=', 1619188252),
(3, 'harits@gmail.com', 'YUHZK7cZgJoAqiSj8Oi9UcCAFlSOKAgZpIv6KByZEUo=', 1619931724),
(4, 'harits@gmail.com', 'q7ylNEnzpxtsTlScfcHWJkgM+pRCD1eQIAs0coPdW5Q=', 1619933553),
(5, 'harits@gmail.com', 'yaGNMGzm3QLRfdWZLc+pHnBbWH3JR5lVxrYIePo0zbU=', 1619933629),
(6, 'harits@gmail.com', '6Osa5ocYb1XLlVNXexq4mjgkPjHGD1Er3FrxUFHlGps=', 1619933829),
(7, 'harits@gmail.com', 'WTS93G9+qNIyE2SAwT80X9ntnDpc6YbyE0wE33jRWbs=', 1619934378),
(8, 'harits@gmail.com', 'lrpEEYSJpzIXT+u+iJP+sZu6DeMDRiLHs9Zitm72f90=', 1619935412),
(9, 'harits@gmail.com', 'mrUpA4zkAeSaReUeHD/0raQioOBy6jblkAtw6PQu5ik=', 1619938060),
(10, 'sigit1@mail.com', 'CNrLMxNwp/ZR0eHUl9H1ITkAdMrGa/aZ+3W9bJ7P0DA=', 1622135785),
(11, 'sigit2@mail.com', 'wM23gfam38T4xHoSj9tW6VtB7QSpZ2aX3FXJeBe+GKU=', 1622135829),
(12, 'harit@gmail.com', 'Mq1PXapPdpnBOQPNTIBfNdWS+9tXJgVLQPeQl68kdc0=', 1622351949),
(13, 'satriamulya.9@gmail.com', 'b8Dg7qZwOApsvewTX3RiLGB1WcDM/03XV0P3UZmrwvo=', 1622591846);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `limbah`
--
ALTER TABLE `limbah`
  ADD PRIMARY KEY (`id_limbah`),
  ADD KEY `id_user` (`id`);

--
-- Indexes for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  ADD PRIMARY KEY (`id_nilai_akhir`);

--
-- Indexes for table `nilai_gap`
--
ALTER TABLE `nilai_gap`
  ADD PRIMARY KEY (`id_gap`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_rangking`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karya`
--
ALTER TABLE `tb_karya`
  ADD PRIMARY KEY (`id_kry`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tb_kayu`
--
ALTER TABLE `tb_kayu`
  ADD PRIMARY KEY (`id_ky`),
  ADD KEY `fk_user2` (`id_user`),
  ADD KEY `id_limbah` (`id_limbah`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `id_user` (`id`),
  ADD KEY `id_kayu` (`id_ky`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `limbah`
--
ALTER TABLE `limbah`
  MODIFY `id_limbah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  MODIFY `id_nilai_akhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `nilai_gap`
--
ALTER TABLE `nilai_gap`
  MODIFY `id_gap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988;

--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_rangking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_karya`
--
ALTER TABLE `tb_karya`
  MODIFY `id_kry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_kayu`
--
ALTER TABLE `tb_kayu`
  MODIFY `id_ky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kayu`
--
ALTER TABLE `tb_kayu`
  ADD CONSTRAINT `fk_user2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
