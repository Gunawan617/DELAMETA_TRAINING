-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 09:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_control`
--

CREATE TABLE `tb_control` (
  `control1` varchar(100) NOT NULL,
  `control2` varchar(100) NOT NULL,
  `control3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_control`
--

INSERT INTO `tb_control` (`control1`, `control2`, `control3`) VALUES
('1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `waktu` datetime NOT NULL,
  `namadevice` varchar(100) NOT NULL,
  `sensor1` varchar(100) NOT NULL,
  `sensor2` varchar(100) NOT NULL,
  `sensor3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`waktu`, `namadevice`, `sensor1`, `sensor2`, `sensor3`) VALUES
('2023-09-07 08:55:33', 'dalban', '17', '632', '13'),
('2023-09-07 08:55:33', 'dalban', '17', '632', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_save`
--

CREATE TABLE `tb_save` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `namadevice` varchar(100) NOT NULL,
  `sensor1` varchar(100) NOT NULL,
  `sensor2` varchar(100) NOT NULL,
  `sensor3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_save`
--

INSERT INTO `tb_save` (`id`, `waktu`, `namadevice`, `sensor1`, `sensor2`, `sensor3`) VALUES
(877, '2023-09-07 08:54:27', 'dalban', '12', '631', '9'),
(878, '2023-09-07 08:54:29', 'dalban', '12', '631', '19'),
(879, '2023-09-07 08:54:31', 'dalban', '29', '631', '1'),
(880, '2023-09-07 08:54:33', 'dalban', '13', '630', '7'),
(881, '2023-09-07 08:54:35', 'dalban', '12', '631', '12'),
(882, '2023-09-07 08:54:37', 'dalban', '11', '631', '13'),
(883, '2023-09-07 08:54:39', 'dalban', '11', '631', '16'),
(884, '2023-09-07 08:54:42', 'dalban', '12', '632', '5'),
(885, '2023-09-07 08:54:44', 'dalban', '11', '631', '5'),
(886, '2023-09-07 08:54:46', 'dalban', '11', '632', '8'),
(887, '2023-09-07 08:54:48', 'dalban', '11', '632', '11'),
(888, '2023-09-07 08:54:50', 'dalban', '12', '631', '14'),
(889, '2023-09-07 08:54:52', 'dalban', '12', '632', '17'),
(890, '2023-09-07 08:54:54', 'dalban', '12', '631', '1'),
(891, '2023-09-07 08:54:56', 'dalban', '12', '631', '13'),
(892, '2023-09-07 08:54:58', 'dalban', '12', '632', '8'),
(893, '2023-09-07 08:55:00', 'dalban', '11', '632', '4'),
(894, '2023-09-07 08:55:02', 'dalban', '12', '631', '8'),
(895, '2023-09-07 08:55:04', 'dalban', '12', '631', '10'),
(896, '2023-09-07 08:55:06', 'dalban', '12', '631', '4'),
(897, '2023-09-07 08:55:08', 'dalban', '13', '632', '16'),
(898, '2023-09-07 08:55:10', 'dalban', '13', '631', '10'),
(899, '2023-09-07 08:55:12', 'dalban', '13', '632', '3'),
(900, '2023-09-07 08:55:15', 'dalban', '12', '632', '2'),
(901, '2023-09-07 08:55:17', 'dalban', '13', '632', '6'),
(902, '2023-09-07 08:55:19', 'dalban', '12', '632', '9'),
(903, '2023-09-07 08:55:21', 'dalban', '11', '632', '4'),
(904, '2023-09-07 08:55:23', 'dalban', '12', '632', '1'),
(905, '2023-09-07 08:55:25', 'dalban', '11', '632', '13'),
(906, '2023-09-07 08:55:27', 'dalban', '12', '632', '17'),
(907, '2023-09-07 08:55:29', 'dalban', '12', '632', '8'),
(908, '2023-09-07 08:55:31', 'dalban', '16', '632', '8'),
(909, '2023-09-07 08:55:33', 'dalban', '17', '632', '13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_save`
--
ALTER TABLE `tb_save`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_save`
--
ALTER TABLE `tb_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
