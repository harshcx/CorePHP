-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 04:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `ID` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`ID`, `gender`, `city`, `nationality`) VALUES
(1, 'M', 'Klaipeda', 'Lithuania'),
(2, 'M', 'Vilnius', 'Lithuania'),
(3, 'M', 'Vilnius', 'Lithuania'),
(4, 'M', 'Kaunas', 'Polish'),
(5, 'M', 'Klaipeda', 'Polish'),
(6, 'M', 'Panevezys', 'Lithuania'),
(7, 'M', 'Kaunas', 'Lithuania'),
(8, 'M', 'Vilnius', 'Lithuania'),
(9, 'M', 'Kaunas', 'Lithuania'),
(10, 'M', 'Kaunas', 'Lithuania'),
(11, 'M', 'Panevezys', 'Lithuania'),
(12, 'M', 'Panevezys', 'Polish'),
(13, 'M', 'Vilnius', 'Lithuania'),
(14, 'M', 'Vilnius', 'Lithuania'),
(15, 'M', 'Kaunas', 'Lithuania'),
(16, 'M', 'Vilnius', 'Lithuania'),
(17, 'M', 'Kaunas', 'Lithuania'),
(18, 'M', 'Vilnius', 'Russian'),
(19, 'M', 'Panevezys', 'Lithuania'),
(20, 'M', 'Kaunas', 'Lithuania'),
(21, 'M', 'Klaipeda', 'Lithuania'),
(22, 'M', 'Kaunas', 'Lithuania'),
(23, 'M', 'Panevezys', 'Lithuania'),
(24, 'M', 'Kaunas', 'Lithuania'),
(25, 'M', 'Klaipeda', 'Lithuania'),
(26, 'M', 'Panevezys', 'Lithuania'),
(27, 'M', 'Klaipeda', 'Lithuania'),
(28, 'M', 'Panevezys', 'Polish'),
(29, 'M', 'Kaunas', 'Lithuania'),
(30, 'M', 'Kaunas', 'Lithuania'),
(31, 'M', 'Kaunas', 'Lithuania'),
(32, 'M', 'Vilnius', 'Lithuania'),
(33, 'M', 'Vilnius', 'Lithuania'),
(34, 'M', 'Panevezys', 'Lithuania'),
(35, 'M', 'Kaunas', 'Lithuania'),
(36, 'M', 'Vilnius', 'Lithuania'),
(37, 'M', 'Vilnius', 'Lithuania'),
(38, 'M', 'Panevezys', 'Polish'),
(39, 'M', 'Kaunas', 'Lithuania'),
(40, 'M', 'Panevezys', 'Lithuania'),
(41, 'M', 'Kaunas', 'Lithuania'),
(42, 'M', 'Kaunas', 'Lithuania'),
(43, 'M', 'Kaunas', 'Lithuania'),
(44, 'M', 'Panevezys', 'Lithuania'),
(45, 'M', 'Vilnius', 'Lithuania'),
(46, 'M', 'Kaunas', 'Lithuania'),
(47, 'M', 'Vilnius', 'Lithuania'),
(48, 'M', 'Vilnius', 'Lithuania'),
(49, 'M', 'Vilnius', 'Lithuania'),
(50, 'M', 'Kaunas', 'Lithuania'),
(51, 'F', 'Vilnius', 'Lithuania'),
(52, 'F', 'Panevezys', 'Lithuania'),
(53, 'F', 'Panevezys', 'Polish'),
(54, 'F', 'Vilnius', 'Lithuania'),
(55, 'F', 'Vilnius', 'Lithuania'),
(56, 'F', 'Vilnius', 'Lithuania'),
(57, 'F', 'Vilnius', 'Russian'),
(58, 'F', 'Vilnius', 'Lithuania'),
(59, 'F', 'Vilnius', 'Lithuania'),
(60, 'F', 'Vilnius', 'Lithuania'),
(61, 'F', 'Kaunas', 'Lithuania'),
(62, 'F', 'Vilnius', 'Russian'),
(63, 'F', 'Vilnius', 'Lithuania'),
(64, 'F', 'Kaunas', 'Lithuania'),
(65, 'F', 'Vilnius', 'Lithuania'),
(66, 'F', 'Kaunas', 'Lithuania'),
(67, 'F', 'Kaunas', 'Russian'),
(68, 'F', 'Kaunas', 'Russian'),
(69, 'F', 'Vilnius', 'Lithuania'),
(70, 'F', 'Panevezys', 'Lithuania'),
(71, 'F', 'Kaunas', 'Lithuania'),
(72, 'F', 'Klaipeda', 'Lithuania'),
(73, 'F', 'Vilnius', 'Lithuania'),
(74, 'F', 'Vilnius', 'Lithuania'),
(75, 'F', 'Panevezys', 'Lithuania'),
(76, 'F', 'Panevezys', 'Lithuania'),
(77, 'F', 'Vilnius', 'Polish'),
(78, 'F', 'Kaunas', 'Lithuania'),
(79, 'F', 'Vilnius', 'Lithuania'),
(80, 'F', 'Kaunas', 'Lithuania'),
(81, 'F', 'Kaunas', 'Lithuania'),
(82, 'F', 'Klaipeda', 'Lithuania'),
(83, 'F', 'Klaipeda', 'Lithuania'),
(84, 'F', 'Vilnius', 'Lithuania'),
(85, 'F', 'Panevezys', 'Lithuania'),
(86, 'F', 'Vilnius', 'Lithuania'),
(87, 'F', 'Kaunas', 'Lithuania'),
(88, 'F', 'Kaunas', 'Lithuania'),
(89, 'F', 'Vilnius', 'Lithuania'),
(90, 'F', 'Kaunas', 'Polish'),
(91, 'F', 'Panevezys', 'Lithuania'),
(92, 'F', 'Kaunas', 'Lithuania'),
(93, 'F', 'Kaunas', 'Lithuania'),
(94, 'F', 'Vilnius', 'Lithuania'),
(95, 'F', 'Panevezys', 'Lithuania'),
(96, 'F', 'Vilnius', 'Russian'),
(97, 'F', 'Vilnius', 'Lithuania'),
(98, 'F', 'Vilnius', 'Lithuania'),
(99, 'F', 'Kaunas', 'Lithuania'),
(100, 'F', 'Vilnius', 'Lithuania');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `gender`, `city`, `nationality`) VALUES
(2, 'M', 'Klaipeda', 'Lithuania'),
(3, 'F', 'Vilnius', 'Lithuania'),
(4, 'F', 'Panevezys', 'Lithuania'),
(5, 'F', 'Panevezys', 'Polish'),
(6, 'F', 'Vilnius', 'Lithuania'),
(7, 'F', 'Vilnius', 'Lithuania'),
(8, 'F', 'Vilnius', 'Lithuania'),
(9, 'F', 'Vilnius', 'Russian'),
(10, 'M', 'Vilnius', 'Lithuania'),
(11, 'M', 'Vilnius', 'Lithuania'),
(12, 'F', 'Vilnius', 'Lithuania'),
(13, 'M', 'Kaunas', 'Polish'),
(14, 'F', 'Vilnius', 'Lithuania'),
(15, 'M', 'Klaipeda', 'Polish'),
(16, 'F', 'Vilnius', 'Lithuania'),
(17, 'M', 'Panevezys', 'Lithuania'),
(18, 'F', 'Kaunas', 'Lithuania'),
(19, 'F', 'Vilnius', 'Russian'),
(20, 'M', 'Kaunas', 'Lithuania'),
(21, 'M', 'Vilnius', 'Lithuania'),
(22, 'F', 'Vilnius', 'Lithuania'),
(23, 'M', 'Kaunas', 'Lithuania'),
(24, 'F', 'Kaunas', 'Lithuania'),
(25, 'M', 'Kaunas', 'Lithuania'),
(26, 'F', 'Vilnius', 'Lithuania'),
(27, 'F', 'Kaunas', 'Lithuania'),
(28, 'M', 'Panevezys', 'Lithuania'),
(29, 'M', 'Panevezys', 'Polish'),
(30, 'F', 'Kaunas', 'Russian'),
(31, 'F', 'Kaunas', 'Russian'),
(32, 'F', 'Vilnius', 'Lithuania'),
(33, 'F', 'Panevezys', 'Lithuania'),
(34, 'F', 'Kaunas', 'Lithuania'),
(35, 'F', 'Klaipeda', 'Lithuania'),
(36, 'F', 'Vilnius', 'Lithuania'),
(37, 'F', 'Vilnius', 'Lithuania'),
(38, 'M', 'Vilnius', 'Lithuania'),
(39, 'F', 'Panevezys', 'Lithuania'),
(40, 'F', 'Panevezys', 'Lithuania'),
(41, 'F', 'Vilnius', 'Polish'),
(42, 'F', 'Kaunas', 'Lithuania'),
(43, 'F', 'Vilnius', 'Lithuania'),
(44, 'F', 'Kaunas', 'Lithuania'),
(45, 'M', 'Vilnius', 'Lithuania'),
(46, 'F', 'Kaunas', 'Lithuania'),
(47, 'F', 'Klaipeda', 'Lithuania'),
(48, 'F', 'Klaipeda', 'Lithuania'),
(49, 'F', 'Vilnius', 'Lithuania'),
(50, 'F', 'Panevezys', 'Lithuania'),
(51, 'F', 'Vilnius', 'Lithuania'),
(52, 'F', 'Kaunas', 'Lithuania'),
(53, 'F', 'Kaunas', 'Lithuania'),
(54, 'M', 'Kaunas', 'Lithuania'),
(55, 'F', 'Vilnius', 'Lithuania'),
(56, 'F', 'Kaunas', 'Polish'),
(57, 'F', 'Panevezys', 'Lithuania'),
(58, 'M', 'Vilnius', 'Lithuania'),
(59, 'M', 'Kaunas', 'Lithuania'),
(60, 'F', 'Kaunas', 'Lithuania'),
(61, 'M', 'Vilnius', 'Russian'),
(62, 'M', 'Panevezys', 'Lithuania'),
(63, 'F', 'Kaunas', 'Lithuania'),
(64, 'F', 'Vilnius', 'Lithuania'),
(65, 'F', 'Panevezys', 'Lithuania'),
(66, 'M', 'Kaunas', 'Lithuania'),
(67, 'M', 'Klaipeda', 'Lithuania'),
(68, 'M', 'Kaunas', 'Lithuania'),
(69, 'M', 'Panevezys', 'Lithuania'),
(70, 'F', 'Vilnius', 'Russian'),
(71, 'F', 'Vilnius', 'Lithuania'),
(72, 'F', 'Vilnius', 'Lithuania'),
(73, 'F', 'Kaunas', 'Lithuania'),
(74, 'F', 'Vilnius', 'Lithuania'),
(75, 'M', 'Kaunas', 'Lithuania'),
(76, 'F', 'Kaunas', 'Lithuania'),
(77, 'F', 'Panevezys', 'Lithuania'),
(78, 'M', 'Klaipeda', 'Lithuania'),
(79, 'M', 'Panevezys', 'Lithuania'),
(80, 'F', 'Panevezys', 'Lithuania'),
(81, 'M', 'Klaipeda', 'Lithuania'),
(82, 'F', 'Vilnius', 'Lithuania'),
(83, 'F', 'Kaunas', 'Lithuania'),
(84, 'F', 'Vilnius', 'Lithuania'),
(85, 'F', 'Vilnius', 'Lithuania'),
(86, 'F', 'Vilnius', 'Lithuania'),
(87, 'M', 'Panevezys', 'Polish'),
(88, 'F', 'Kaunas', 'Polish'),
(89, 'M', 'Kaunas', 'Lithuania'),
(90, 'M', 'Kaunas', 'Lithuania'),
(91, 'F', 'Panevezys', 'Lithuania'),
(92, 'F', 'Kaunas', 'Lithuania'),
(93, 'F', 'Vilnius', 'Lithuania'),
(94, 'M', 'Kaunas', 'Lithuania'),
(95, 'M', 'Vilnius', 'Lithuania'),
(96, 'F', 'Kaunas', 'Lithuania'),
(97, 'M', 'Vilnius', 'Lithuania'),
(98, 'F', 'Panevezys', 'Lithuania'),
(99, 'F', 'Kaunas', 'Lithuania'),
(100, 'M', 'Panevezys', 'Lithuania'),
(101, 'M', 'Kaunas', 'Lithuania'),
(102, 'F', 'Panevezys', 'Polish'),
(103, 'M', 'Vilnius', 'Lithuania'),
(104, 'F', 'Panevezys', 'Lithuania'),
(105, 'F', 'Vilnius', 'Lithuania'),
(106, 'M', 'Vilnius', 'Lithuania'),
(107, 'F', 'Panevezys', 'Lithuania'),
(108, 'F', 'Kaunas', 'Lithuania'),
(109, 'M', 'Panevezys', 'Polish'),
(110, 'F', 'Klaipeda', 'Russian'),
(111, 'F', 'Kaunas', 'Lithuania'),
(112, 'M', 'Kaunas', 'Lithuania'),
(113, 'F', 'Panevezys', 'Lithuania'),
(114, 'F', 'Vilnius', 'Lithuania'),
(115, 'F', 'Kaunas', 'Lithuania'),
(116, 'F', 'Panevezys', 'Lithuania'),
(117, 'F', 'Vilnius', 'Lithuania'),
(118, 'F', 'Panevezys', 'Russian'),
(119, 'F', 'Vilnius', 'Lithuania'),
(120, 'M', 'Panevezys', 'Lithuania'),
(121, 'M', 'Kaunas', 'Lithuania'),
(122, 'F', 'Kaunas', 'Lithuania'),
(123, 'F', 'Kaunas', 'Lithuania'),
(124, 'F', 'Kaunas', 'Lithuania'),
(125, 'F', 'Vilnius', 'Lithuania'),
(126, 'F', 'Vilnius', 'Lithuania'),
(127, 'M', 'Kaunas', 'Lithuania'),
(128, 'F', 'Klaipeda', 'Polish'),
(129, 'F', 'Kaunas', 'Lithuania'),
(130, 'F', 'Kaunas', 'Polish'),
(131, 'F', 'Kaunas', 'Lithuania'),
(132, 'F', 'Panevezys', 'Lithuania'),
(133, 'F', 'Vilnius', 'Lithuania'),
(134, 'F', 'Kaunas', 'Lithuania'),
(135, 'M', 'Kaunas', 'Lithuania'),
(136, 'F', 'Vilnius', 'Lithuania'),
(137, 'F', 'Vilnius', 'Lithuania'),
(138, 'M', 'Panevezys', 'Lithuania'),
(139, 'F', 'Vilnius', 'Lithuania'),
(140, 'F', 'Klaipeda', 'Polish'),
(141, 'F', 'Vilnius', 'Lithuania'),
(142, 'M', 'Vilnius', 'Lithuania'),
(143, 'F', 'Panevezys', 'Polish'),
(144, 'F', 'Vilnius', 'Lithuania'),
(145, 'F', 'Vilnius', 'Lithuania'),
(146, 'M', 'Kaunas', 'Lithuania'),
(147, 'F', 'Vilnius', 'Lithuania'),
(148, 'F', 'Panevezys', 'Russian'),
(149, 'F', 'Vilnius', 'Russian'),
(150, 'F', 'Kaunas', 'Lithuania'),
(151, 'F', 'Vilnius', 'Russian'),
(152, 'F', 'Panevezys', 'Lithuania'),
(153, 'F', 'Kaunas', 'Lithuania'),
(154, 'F', 'Vilnius', 'Lithuania'),
(155, 'F', 'Panevezys', 'Lithuania'),
(156, 'F', 'Vilnius', 'Lithuania'),
(157, 'F', 'Vilnius', 'Lithuania'),
(158, 'F', 'Vilnius', 'Polish'),
(159, 'F', 'Kaunas', 'Lithuania'),
(160, 'F', 'Vilnius', 'Lithuania'),
(161, 'F', 'Kaunas', 'Lithuania'),
(162, 'M', 'Vilnius', 'Lithuania'),
(163, 'F', 'Klaipeda', 'Lithuania'),
(164, 'M', 'Vilnius', 'Lithuania'),
(165, 'F', 'Vilnius', 'Lithuania'),
(166, 'F', 'Vilnius', 'Lithuania'),
(167, 'F', 'Panevezys', 'Russian'),
(168, 'M', 'Vilnius', 'Lithuania'),
(169, 'F', 'Panevezys', 'Lithuania'),
(170, 'F', 'Klaipeda', 'Lithuania'),
(171, 'F', 'Klaipeda', 'Lithuania'),
(172, 'M', 'Kaunas', 'Lithuania'),
(173, 'F', 'Vilnius', 'Lithuania'),
(174, 'M', 'Vilnius', 'Lithuania'),
(175, 'F', 'Klaipeda', 'Lithuania'),
(176, 'F', 'Kaunas', 'Lithuania'),
(177, 'M', 'Vilnius', 'Lithuania'),
(178, 'M', 'Kaunas', 'Lithuania'),
(179, 'F', 'Vilnius', 'Lithuania'),
(180, 'M', 'Klaipeda', 'Lithuania'),
(181, 'F', 'Vilnius', 'Lithuania'),
(182, 'M', 'Panevezys', 'Lithuania'),
(183, 'F', 'Klaipeda', 'Russian'),
(184, 'F', 'Vilnius', 'Lithuania'),
(185, 'M', 'Klaipeda', 'Lithuania'),
(186, 'F', 'Vilnius', 'Lithuania'),
(187, 'M', 'Vilnius', 'Lithuania'),
(188, 'F', 'Kaunas', 'Lithuania'),
(189, 'M', 'Vilnius', 'Lithuania'),
(190, 'F', 'Vilnius', 'Lithuania'),
(191, 'F', 'Kaunas', 'Lithuania'),
(192, 'F', 'Kaunas', 'Lithuania'),
(193, 'F', 'Kaunas', 'Lithuania'),
(194, 'F', 'Klaipeda', 'Russian'),
(195, 'F', 'Panevezys', 'Russian'),
(196, 'F', 'Vilnius', 'Lithuania'),
(197, 'M', 'Panevezys', 'Russian'),
(198, 'F', 'Vilnius', 'Lithuania'),
(199, 'F', 'Klaipeda', 'Lithuania'),
(200, 'M', 'Panevezys', 'Lithuania');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `output`
--
ALTER TABLE `output`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
