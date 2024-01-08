-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 08 Jan 2024 pada 00.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_bk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_poli`
--

CREATE TABLE `daftar_poli` (
  `id` int(11) NOT NULL,
  `id_poli` varchar(11) NOT NULL,
  `id_jadwal` varchar(11) NOT NULL,
  `keluhan` text NOT NULL,
  `no_rm` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_poli`
--

INSERT INTO `daftar_poli` (`id`, `id_poli`, `id_jadwal`, `keluhan`, `no_rm`) VALUES
(1, 'umum', 'sore', 'Karies Gigi', '202312-001'),
(2, 'gigi', 'siang', 'Pusing', '202312-002'),
(3, 'tht', 'siang', 'Sakit telinga', '202312-003'),
(4, 'tht', 'sore', 'Telinga gatal', '202312-003'),
(5, 'gigi', 'pagi', 'migren', '202312-001'),
(6, 'umum', 'siang', 'pusing gua', '202312-xxx'),
(7, 'gigi', 'siang', 'pusing, demam', '202312-001'),
(8, 'umum', 'sore', 'gigi', '202312-xxx'),
(9, 'umum', 'pagi', 'sakit gigi', '202312-xxx'),
(10, 'gigi', 'Rabu,', 'maag', '202312-003'),
(11, 'umum', '2', 'sakit gigi belakang', '202312-002'),
(12, 'gigi', '1', 'Demam', '202312-004'),
(13, 'tht', '2', 'tenggorokan perih', '202312-005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_periksa`
--

CREATE TABLE `jadwal_periksa` (
  `id` int(11) NOT NULL,
  `id_dokter` varchar(10) NOT NULL,
  `hari` date NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_periksa`
--

INSERT INTO `jadwal_periksa` (`id`, `id_dokter`, `hari`, `mulai`, `selesai`) VALUES
(1, 'Dr.Ani', '2024-01-01', '08:30:00', '11:00:00'),
(2, 'Dr.Budi', '2024-01-02', '14:00:00', '16:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logindokter`
--

CREATE TABLE `logindokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `logindokter`
--

INSERT INTO `logindokter` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Dokter1', 'dokter1', 'dokter1'),
(2, 'Dokter2', 'dokter2', 'dokter2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginpasien`
--

CREATE TABLE `loginpasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `loginpasien`
--

INSERT INTO `loginpasien` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Pasien1', 'pasien1', 'pasien1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(60) NOT NULL,
  `kemasan` varchar(35) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kemasan`, `harga`) VALUES
(3, 'paracetamol', 'kaplet', 10000),
(4, 'Abacavir', 'kaplet', 20000),
(5, 'konidin', 'tablet', 5000),
(6, 'tolak angin', 'sachet', 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `password_pasien` varchar(10) NOT NULL,
  `no_rm` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `alamat`, `no_ktp`, `no_hp`, `password_pasien`, `no_rm`) VALUES
(19, 'nama5', 'lokasi5', '55555', '08555555', 'd41d8cd98f', '202312-005'),
(20, 'nama6', 'lokasi6', '666666', '0866666554', 'f379eaf3c8', '202312-006'),
(21, 'nama7', 'lokasi7', '94134123', '08777777', 'dc0fa7df3d', '202312-007'),
(22, 'nama8', 'lokasi8', '888888', '08888888', '8ddcff3a80', '202312-008');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksapasien`
--

CREATE TABLE `periksapasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `tgl_periksa` datetime NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `obat` varchar(30) NOT NULL,
  `total_hrg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', '12345', 'admin'),
(2, 'Dokter', 'dokter', '54321', 'dokter');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_poli`
--
ALTER TABLE `daftar_poli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logindokter`
--
ALTER TABLE `logindokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loginpasien`
--
ALTER TABLE `loginpasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `periksapasien`
--
ALTER TABLE `periksapasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_poli`
--
ALTER TABLE `daftar_poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `logindokter`
--
ALTER TABLE `logindokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `loginpasien`
--
ALTER TABLE `loginpasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `periksapasien`
--
ALTER TABLE `periksapasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
