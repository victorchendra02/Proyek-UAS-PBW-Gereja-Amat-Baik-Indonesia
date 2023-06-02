-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2022 at 06:23 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gabidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(8) NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabanga`
--

DROP TABLE IF EXISTS `cabanga`;
CREATE TABLE IF NOT EXISTS `cabanga` (
  `tahun` int(4) NOT NULL,
  `data_jemaat` int(8) NOT NULL,
  `data_kehadiran` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabanga`
--

INSERT INTO `cabanga` (`tahun`, `data_jemaat`, `data_kehadiran`) VALUES
(2017, 1324, 921),
(2018, 1440, 933),
(2019, 1402, 923),
(2020, 1512, 975),
(2021, 1553, 994);

-- --------------------------------------------------------

--
-- Table structure for table `cabangb`
--

DROP TABLE IF EXISTS `cabangb`;
CREATE TABLE IF NOT EXISTS `cabangb` (
  `tahun` int(4) NOT NULL,
  `data_jemaat` int(8) NOT NULL,
  `data_kehadiran` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabangb`
--

INSERT INTO `cabangb` (`tahun`, `data_jemaat`, `data_kehadiran`) VALUES
(2017, 756, 392),
(2018, 723, 409),
(2019, 715, 423),
(2020, 738, 444),
(2021, 724, 409);

-- --------------------------------------------------------

--
-- Table structure for table `cabangc`
--

DROP TABLE IF EXISTS `cabangc`;
CREATE TABLE IF NOT EXISTS `cabangc` (
  `tahun` int(4) NOT NULL,
  `data_jemaat` int(8) NOT NULL,
  `data_kehadiran` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabangc`
--

INSERT INTO `cabangc` (`tahun`, `data_jemaat`, `data_kehadiran`) VALUES
(2017, 519, 308),
(2018, 680, 402),
(2019, 791, 488),
(2020, 911, 603),
(2021, 1567, 978);

-- --------------------------------------------------------

--
-- Table structure for table `cabangd`
--

DROP TABLE IF EXISTS `cabangd`;
CREATE TABLE IF NOT EXISTS `cabangd` (
  `tahun` int(4) NOT NULL,
  `data_jemaat` int(8) NOT NULL,
  `data_kehadiran` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabangd`
--

INSERT INTO `cabangd` (`tahun`, `data_jemaat`, `data_kehadiran`) VALUES
(2017, 304, 109),
(2018, 453, 193),
(2019, 477, 233),
(2020, 513, 398),
(2021, 557, 355);

-- --------------------------------------------------------

--
-- Table structure for table `cabange`
--

DROP TABLE IF EXISTS `cabange`;
CREATE TABLE IF NOT EXISTS `cabange` (
  `tahun` int(4) NOT NULL,
  `data_jemaat` int(8) NOT NULL,
  `data_kehadiran` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabange`
--

INSERT INTO `cabange` (`tahun`, `data_jemaat`, `data_kehadiran`) VALUES
(2017, 923, 643),
(2018, 534, 467),
(2019, 503, 401),
(2020, 521, 356),
(2021, 546, 321);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(8) NOT NULL,
  `nama_foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama_foto`, `keterangan`) VALUES
(123, 'tes1', 'testing1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
