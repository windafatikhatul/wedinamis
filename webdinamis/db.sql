-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 15. Oktober 2019 jam 16:31
-- Versi Server: 5.1.30
-- Versi PHP: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `kode_dosen` varchar(8) NOT NULL,
  `nama_dosen` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_dosen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama_dosen`) VALUES
('FST02001', 'Heru Saputro, M.Kom'),
('FST02002', 'Noor Azizah, M.Kom'),
('FST02003', 'Danang Mahendra, M.Kom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`, `alamat`) VALUES
(2, '171250000204', 'YOGIE FERYUNDAKA', 'SISTEM INFORMASI', 'JEPARA'),
(3, '171250000205', 'YOGA AJI HERLAMBANG', 'SISTEM INFORMASI', 'KUDUS'),
(4, '171250000200', 'GALIH WICAKSONO', 'SISTEM INFORMASI', 'DEMAK'),
(5, '171250000201', 'ADETYA RATNA DEVI', 'SISTEM INFORMASI', 'JEPARA'),
(6, '171250000202', 'SAFITRI DAMAYANTI', 'SISTEM INFORMASI', 'KUDUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makul`
--

CREATE TABLE IF NOT EXISTS `makul` (
  `kode_mk` varchar(6) NOT NULL,
  `nama_mk` varchar(25) NOT NULL,
  `sks` int(1) NOT NULL,
  `kode_dosen` varchar(8) NOT NULL,
  PRIMARY KEY (`kode_mk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makul`
--

INSERT INTO `makul` (`kode_mk`, `nama_mk`, `sks`, `kode_dosen`) VALUES
('MKW001', 'PEMROGRAMAN WEB', 3, 'FST02001'),
('MKG002', 'GIS', 3, 'FST02001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode_kelas` varchar(8) NOT NULL,
  `nama_kelas` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nama_kelas`) VALUES
('FST101', 'lab komputer'),
('FST201', 'ruang elektro'),
('FST303', 'kelas besar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) NOT NULL,
  `NIM` char(12) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `foto_pribadi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `Nama`, `NIM`, `Jurusan`, `Alamat`, `foto_pribadi`) VALUES
(1, 'YOGIE FERYUNDAKA', '171250000204', 'SISTEM INFORMASI', 'JEPARA', 'yogie.jpg'),
(2, 'YOGA AJI HERLAMBANG', '171250000205', 'SISTEM INFORMASI', 'KUDUS', 'yoga.jpg'),
(3, 'GALIH WICAKSONO', '171250000200', 'SISTEM INFORMASI', 'DEMAK', 'galih.jpg'),
(4, 'ADETYA RATNA DEVI', '171250000201', 'SISTEM INFORMASI', 'JEPARA', 'adetya.jpg'),
(5, 'SAFITRI DAMAYANTI', '171250000202', 'SISTEM INFORMASI', 'KUDUS', 'safitri.jpg');
