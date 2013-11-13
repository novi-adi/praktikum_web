-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 12. Nopember 2013 jam 11:56
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(12) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`) VALUES
(1, 'icam', 'anjasmoro'),
(2, 'novi', 'batu'),
(3, 'Novi Adi', 'Batu'),
(4, 'Icam', 'Batu'),
(5, 'Triswandi', 'Batu'),
(6, 'Novi Adi Triswandi', 'Batu'),
(7, 'Aji Pratama Putra', 'Surakarta'),
(8, 'Ririn Restu Amalia', 'Makasar'),
(9, 'Bangkit Prasetya Adi', 'Balikpapan'),
(10, 'Ikrima Mailani', 'Bandung'),
(11, 'Frita Faramita', 'Semarang'),
(12, 'Syalasiria Djuria', 'Medan'),
(13, 'Kanzul Firdaus', 'Manado'),
(14, 'Ririn Dwi Ariyanti', 'Lampung'),
(15, 'Mayadah Samarawati', 'Bali'),
(16, 'Ririn Nurul Hidayati', 'Palembang'),
(17, 'Brama Surya Kumbara', 'Malang'),
(18, 'Uspal Jandevi', 'Pekan Baru'),
(19, 'Ririn Elok Puspasari', 'Jepara'),
(20, 'Yunia Ervina', 'Bogor'),
(21, 'Hunter Pandega', 'Klaten'),
(22, 'Adamono Awamiti', 'Boyolali'),
(23, 'Muren Herdigenarosa', 'Palu'),
(24, 'Ririn Yusma Adelia', 'Tangerang'),
(25, 'Purnama Sahara', 'Cirebon'),
(26, 'Bryan Hartomo', 'Cilacap'),
(27, 'Ririn Fawzia Agustina', 'Padang'),
(28, 'Lubsir Munir', 'Pontianak'),
(29, 'Ariandra Satria', 'Temanggung'),
(30, 'Ruhul Ulya', 'Bekasi'),
(31, 'Lusiana Rustandika', 'Sleman'),
(32, 'Qori Adzani', 'Depok'),
(33, 'Azwin Yuda Himawan', 'Bima'),
(34, 'Septiana Prihastantri', 'Bangka'),
(35, 'Dwi Kusuma Wardhana', 'Sragen'),
(36, 'Retnowati Pambayun', 'Kulon Progo'),
(37, 'Philare Shopia', 'Majene'),
(38, 'Roger Basuki', 'Samarinda'),
(39, 'Riska Rembasepsela', 'Ambon'),
(40, 'Fathan Ahlul Faradis', 'Yogyakarta'),
(41, 'Agustiana Merdekasari', 'Pontianak'),
(42, 'Cecilia Silvanier', 'Tegal'),
(43, 'Nicsen Wiliana', 'Padang'),
(44, 'Tegar Firman Abadi', 'Belitung'),
(45, 'Maorin Citra Pertiwi', 'Banjarnegara'),
(46, 'Satria Putra Pamungkas', 'Tasikmalaya'),
(47, 'Versia Nabela Azizi', 'Bandung'),
(48, 'Destine Setyaning Putri', 'Kudus'),
(49, 'Rauvi Nur Andary', 'Aceh'),
(50, 'Aniqa Rizqia', 'Bali');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
