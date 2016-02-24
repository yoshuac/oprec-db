-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Feb 2016 pada 12.45
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_oprec`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `number` bigint(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `university` varchar(140) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `choice` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`number`, `name`, `nickname`, `religion`, `gender`, `place`, `date`, `university`, `faculty`, `year`, `address`, `phone`, `email`, `twitter`, `choice`, `reason`) VALUES
(133140714111001, 'Feby', 'Feb', 'Moslem', 'Female', 'Bekasi', '1995-February-26', 'University1', 'FIB', '2012', 'JL. P', '082234437545', 'joereheart@gmail.com', 'febidvl', 'Choice1', 'ABC');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
