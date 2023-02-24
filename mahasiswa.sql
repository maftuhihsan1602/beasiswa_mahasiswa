-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2023 pada 10.58
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` int(15) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `ipk` varchar(20) NOT NULL,
  `beasiswa` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `email`, `hp`, `semester`, `ipk`, `beasiswa`, `file`, `status`) VALUES
(1, 'Ihsan', 'ihsan@gmail.com', 239183211, '3', '3.78', 'Beasiswa Pendidikan Indonesia', 'contact.png', '0'),
(2, 'Alif', 'alif@gmail.com', 239183211, '5', '3.80', 'Beasiswa Peningkatan Prestasi Akademik', 'pembayaran.png', '0'),
(3, 'Thomas', 'thomas@gmail.com', 3213312, '6', '', 'Beasiswa Peningkatan Prestasi Akademik', 'contract.png', 'Terverifikasi'),
(4, 'Hafizh', 'hafizh@gmail.com', 2147483647, '7', '3.9', 'Beasiswa Peningkatan Prestasi Akademik', 'OIP.jfif', 'Terverifikasi'),
(5, 'Frido', 'frido@gmail.com', 2147483647, '5', '3.9', 'Beasiswa Pendidikan Indonesia', '-', '0'),
(6, 'Tio', 'tio@gmail.com', 2147483647, '3', '3.9', 'Beasiswa Peningkatan Prestasi Akademik', '-', '0'),
(7, 'Arka', 'arka@gmail.com', 2147483647, '8', '3.9', 'Beasiswa BCA', '-', 'Terverifikasi'),
(8, 'Fandra', 'fandra@gmail.com', 2147483647, '1', '3.9', 'Beasiswa Pendidikan Indonesia', '-', 'Belum Verifikasi'),
(9, 'Agis', 'agis@gmail.com', 2147483647, '8', '3.9', 'Beasiswa Pendidikan Indonesia', '-', 'Belum Verifikasi'),
(10, 'Said', 'said@gmail.com', 2147483647, '2', '3.9', 'Beasiswa Peningkatan Prestasi Akademik', '', 'Belum Verifikasi'),
(11, 'Fano', 'fano@gmail.com', 2147483647, '3', '3.9', 'Beasiswa Peningkatan Prestasi Akademik', '', 'Belum Verifikasi'),
(12, 'Jose', 'jose@gmail.com', 2147483647, '5', '3.9', 'Beasiswa Pendidikan Indonesia', '', 'Belum Verifikasi'),
(13, 'Wahyu', 'wahyu@gmail.com', 2147483647, '3', '3.9', 'Beasiswa Pendidikan Indonesia', '', 'Belum Verifikasi'),
(14, 'Rahman', 'rahman@gmail.com', 2147483647, '2', '3.9', 'Beasiswa Pendidikan Indonesia', 'contact.png', 'Belum Verifikasi'),
(15, 'Indra', 'indra@gmail.com', 2147483647, '6', '3.9', 'Beasiswa Pendidikan Indonesia', 'pembayaran.png', 'Belum Verifikasi'),
(16, 'Imam', 'imam@gmail.com', 2147483647, '4', '3.9', 'Beasiswa Peningkatan Prestasi Akademik', 'OIP.jfif', 'Belum Verifikasi'),
(17, 'Muklis', 'muklis@gmail.com', 2147483647, '4', '3.9', 'Beasiswa BCA', 'contract.png', 'Belum Verifikasi'),
(18, 'Alek', 'alek@gmail.com', 2147483647, '6', '3.9', 'Beasiswa BCA', 'R.png', 'Belum Verifikasi'),
(19, 'Muhammad Maftuh Ihsan', 'ihsan@gmail.com', 12390321, '3', '3.2', 'Beasiswa BCA', 'contract.png', 'Belum Verifikasi'),
(20, 'Thomas', 'thomas@gmail.com', 321321, '2', '3.2', 'Beasiswa Pendidikan Indonesia', 'pembayaran.png', 'Belum Verifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
