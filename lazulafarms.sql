/*
    Author    : Abdul Aziz Mubarak
    Email     : abdulazizmubarak1@gmail.com
    Github    : @mubarakabaz
    Website   : www.mubarakabaz.xyz
*/

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 10.36
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazulafarms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--
-- Pembuatan: 25 Mar 2021 pada 08.59
-- Pembaruan terakhir: 25 Mar 2021 pada 09.14
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(0, 'Abdul Aziz Mubarak', 'master', '123456'),
(1, 'Mubarak', 'mubarakabaz', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--
-- Pembuatan: 25 Mar 2021 pada 09.27
-- Pembaruan terakhir: 25 Mar 2021 pada 09.32
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL,
  `namaTanaman` varchar(60) NOT NULL,
  `ph` text NOT NULL,
  `tds` text NOT NULL,
  `pompaPHNaik` text NOT NULL,
  `pompaPHTurun` text NOT NULL,
  `pompaNutrisi` text NOT NULL,
  `pompaAirBaku` text NOT NULL,
  `tanggal` text NOT NULL,
  `waktu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `namaTanaman`, `ph`, `tds`, `pompaPHNaik`, `pompaPHTurun`, `pompaNutrisi`, `pompaAirBaku`, `tanggal`, `waktu`) VALUES
(0, 'caisim', '4.66', '0.00', '0', '0', '0', '0', '25-03-2021', '17:31:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit`
--
-- Pembuatan: 25 Mar 2021 pada 09.02
-- Pembaruan terakhir: 25 Mar 2021 pada 09.23
--

CREATE TABLE `edit` (
  `id` int(10) NOT NULL,
  `kalibrasiPh` float NOT NULL,
  `kalibrasiPpm` float NOT NULL,
  `phSetA` float NOT NULL,
  `phSetB` float NOT NULL,
  `ppmSetA` float NOT NULL,
  `ppmSetB` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `edit`
--

INSERT INTO `edit` (`id`, `kalibrasiPh`, `kalibrasiPpm`, `phSetA`, `phSetB`, `ppmSetA`, `ppmSetB`) VALUES
(0, 0, 0, 4, 7, 800, 1250);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
