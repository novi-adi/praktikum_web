-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. Nopember 2013 jam 14:56
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
  `nim` double NOT NULL,
  `kd_prodi` int(3) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kd_prodi`, `nama`, `alamat`) VALUES
(110533406901, 334, 'Ririn Yusma Adelia', 'Tangerang'),
(110533406902, 334, 'Purnama Sahara', 'Cirebon'),
(110533406903, 334, 'Bryan Hartomo', 'Cilacap'),
(110533406904, 334, 'Ririn Fawzia Agustina', 'Padang'),
(110533406905, 334, 'Lubsir Munir', 'Pontianak'),
(110533406908, 334, 'Lusiana Rustandika', 'Sleman'),
(110533406909, 334, 'Qori Adzani', 'Depok'),
(110533406910, 334, 'Azwin Yuda Himawan', 'Bima'),
(110533406911, 334, 'Septiana Prihastantri', 'Bangka'),
(110533406912, 334, 'Dwi Kusuma Wardhana', 'Sragen'),
(110533406913, 334, 'Retnowati Pambayun', 'Kulon Progo'),
(110533406914, 334, 'Philare Shopia', 'Majene'),
(110533406919, 334, 'Cecilia Silvanier', 'Tegal'),
(110533406920, 334, 'Nicsen Wiliana', 'Padang'),
(110533406921, 334, 'Tegar Firman Abadi', 'Belitung'),
(110533406922, 334, 'Maorin Citra Pertiwi', 'Banjarnegara'),
(110533406923, 334, 'Satria Putra Pamungkas', 'Tasikmalaya'),
(110533406924, 334, 'Versia Nabela Azizi', 'Bandung'),
(110533406925, 334, 'Destine Setyaning Putri', 'Kudus'),
(110533406926, 334, 'Rauvi Nur Andary', 'Aceh'),
(110533406927, 334, 'Aniqa Rizqia', 'Bali'),
(110533406928, 334, 'icam', 'anjasmoro'),
(110533406978, 334, 'novi', 'batu'),
(110533406979, 344, 'Novi Adi', 'Batu'),
(110533406980, 334, 'Icam', 'Batu'),
(110533406981, 334, 'Triswandi', 'Batu'),
(110533406982, 334, 'Novi Adi Triswandi', 'Batu'),
(110533406985, 334, 'Bangkit Prasetya Adi', 'Balikpapan'),
(110533406986, 334, 'Ikrima Mailani', 'Bandung'),
(110533406988, 334, 'Syalasiria Djuria', 'Medan'),
(110533406992, 334, 'Ririn Nurul Hidayati', 'Palembang'),
(110533406993, 334, 'Brama Surya Kumbara', 'Malang'),
(110533406994, 334, 'Uspal Jandevi', 'Pekan Baru'),
(110533406995, 334, 'Ririn Elok Puspasari', 'Jepara'),
(110533406998, 334, 'Adamono Awamiti', 'Boyolali'),
(110533406999, 334, 'Muren Herdigenarosa', 'Palu'),
(110534406906, 344, 'Ariandra Satria', 'Temanggung'),
(110534406907, 344, 'Ruhul Ulya', 'Bekasi'),
(110534406915, 344, 'Roger Basuki', 'Samarinda'),
(110534406916, 344, 'Riska Rembasepsela', 'Ambon'),
(110534406917, 344, 'Fathan Ahlul Faradis', 'Yogyakarta'),
(110534406918, 344, 'Agustiana Merdekasari', 'Pontianak'),
(110534406983, 344, 'Aji Pratama Putra', 'Surakarta'),
(110534406984, 344, 'Ririn Restu Amalia', 'Makasar'),
(110534406987, 344, 'Frita Faramita', 'Semarang'),
(110534406989, 344, 'Kanzul Firdaus', 'Manado'),
(110534406990, 344, 'Ririn Dwi Ariyanti', 'Lampung'),
(110534406991, 344, 'Mayadah Samarawati', 'Bali'),
(110534406996, 344, 'Yunia Ervina', 'Bogor'),
(110534406997, 344, 'Hunter Pandega', 'Klaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa2`
--

CREATE TABLE IF NOT EXISTS `mahasiswa2` (
  `nim` double NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `kd_prodi` int(3) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`) VALUES
(334, 'Pendidikan Teknik Informatika'),
(344, 'Pendidikan Teknik Elektro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
