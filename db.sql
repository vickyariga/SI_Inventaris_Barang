-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2020 pada 16.52
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `id_kantor` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kantor`, `nama_barang`, `tanggal`) VALUES
('B0003', 'K03', 'access point a', '2020-01-24'),
('B0004', 'K10', 'router 10', '2020-01-24'),
('B0005', 'K01', 'b', '2020-01-24'),
('B0006', 'K10', 'a', '2020-02-01'),
('B0007', 'K02', 'f', '2020-02-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_laporan`
--

CREATE TABLE `jenis_laporan` (
  `id_jenis` varchar(1) NOT NULL,
  `nama_jenis` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_laporan`
--

INSERT INTO `jenis_laporan` (`id_jenis`, `nama_jenis`) VALUES
('1', 'Laporan Masuk'),
('2', 'Laporan Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor`
--

CREATE TABLE `kantor` (
  `id_kantor` varchar(10) NOT NULL,
  `id_opd` varchar(10) NOT NULL,
  `nama_kantor` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `id_opd`, `nama_kantor`, `alamat`, `telp`, `email`, `website`) VALUES
('K01', 'O1', 'Bagian Hukum', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '07518051038', 'baghukum@padang.go.id', ' https://jdih.padang.go.id/'),
('K02', 'O1', 'Bagian Layanan Pengadaan', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '(0751) 8051034', 'baglayananpengadaan@padang.go.', 'http://balapan.padang.go.id/'),
('K03', 'O1', 'Bagian Pemerintahan', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '-', 'bagpemerintahan@padang.go.id', '-'),
('K04', 'O1', 'Bagan Organisasi', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '(0751) 8051039', 'bagorganisasi@padang.go.id', 'bag-organisasi.padang.go.id'),
('K05', 'O1', 'Bagian Umum', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '(0751) 8051023', 'bagumum@padang.go.id', '-'),
('K06', 'O1', 'Bagian Pembangunan', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '(0751) 8051032', 'bagpembangunan@padang.go.id', '-'),
('K07', 'O1', 'Bagian Perekonomian', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '0751 - 8051036', 'bagperekonomian@padang.go.id', 'http://perekonomian.padang.go.id/'),
('K08', 'O1', 'Bagian Humas', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '-', 'baghumas@padang.go.id', '-'),
('K09', 'O1', 'Bagian Kerja Sama', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '-', 'bagkerjasama@padang.go.id', '-'),
('K10', 'O1', 'Bagian Kesejahteraan Rakyat', 'Komp. Balaikota padang Jl. Bagindo Aziz Chan No. 1 By Pass Aie Pacah Padang', '-', 'bagkesra@padang.go.id', '-'),
('K11', 'O2', 'Badan Kepegawaian dan Pengembangan Sumber Daya Man', 'Jl. Bagindo Aziz Chan Aie Pacah Padang, Koto Tangah, Padang, Sumatera Barat', '(0751) 46605', 'bkpsdm@padang.go.id', 'http://bkd.padang.go.id/'),
('K12', 'O2', 'Badan Perencanaan Pembangunan Daerah (BAPPEDA)', 'l. Bagindo Aziz Chan By Pass Samping Balaikota Aie Pacah Padang - Sumatera Barat', '0751 463884', 'bappeda.padang@gmail.com', 'http://bappeda.padang.go.id/'),
('K13', 'O2', 'Badan Pendapatan Daerah (BAPENDA)', 'Jl. M Yamin, SH No. 70 Padang', '0751 32377', 'bapenda@padang.go.id', 'http://bapenda.padang.go.id/'),
('K14', 'O2', 'Badan Pengelolaan Keuangan dan Aset Daerah (BPKAD)', 'JL. Prof. M. Yamin SH No.70 Padang', '0751 32374', 'bpka@padang.go.id', 'bpkad.padang.go.id'),
('K15', 'O2', 'Badan Penanggulangan Bencana Daerah (BPBD)', '-', '-', 'bpbd@padang.go.id', 'bpbd.padang.go.id'),
('K16', 'O3', 'Kantor Kesbangpol', 'Komplek Balaikota Padang, Jalan Bagindo Aziz Chan No.1 Aia Pacah Padang', '0751 463190', 'kakespolpadang@gmail.com', '-'),
('K17', 'O3', 'Rumah Sakit Daerah (RSUD) Dr. Rasidin', 'Jl. Air Paku, Sei Sapih, Kelurahan Sungai Sapih, Kecamatan Kuranji, Kota Padang', '0751 499158', 'rsuddrrasidin2017@gmail.com', ' http://rsud.padang.go.id/'),
('K18', 'O3', 'Perusahaan Daerah Air Minum (PDAM)', 'Jl. H. Agus Salim No. 10 Padang', '0751 22789', 'pdamkotapadang@gmail.com', '-'),
('K19', 'O4', 'Dinas Komunikasi & Informatika', 'Komp. Balaikota Lt. III Jl. By Pass Aie Pacah, Kota Padang - Sumatera Barat', '0751 4640800', 'diskominfo@padang.go.id', 'http://diskominfo.padang.go.id'),
('K20', 'O4', 'Dinas Sosial', ' Jalan Delima No. 5, Kota Padang - Sumatera Barat', '(0751) 21903', 'dissos@padang.go.id', 'Dalam Pengembangan'),
('K21', 'O4', ' Dinas Pendidikan', 'Jalan Bagindo Aziz Chan No. 8, Kota Padang -  Sumatera Barat', '0751 21554, 21', 'dinaspendidikanpadang@gmail.co', 'http://disdik.padang.go.id/'),
('K22', 'O4', 'Dinas Perhubungan', 'Jl. Sutan Syahrir Mata Air Kecamatan Padang Selatan Kota Padang - Sumatera Barat', '0751 767978', 'Dishub@padang.go.id', 'http://dishub.padang.go.id'),
('K23', 'O4', 'Dinas Perpustakaan dan Kearsipan', 'Jalan Jenderal Sudirman No. 1 Padang', '(0751) 811413', 'dispusip@padang.go.id', 'http://dispusip.padang.go.id/'),
('K24', 'O4', 'Dinas Pariwisata dan Kebudayaan', 'Jalan Gandaria No. 56 Kota Padang - Sumatera Barat', '-', 'disparbud@padang.go.id', 'http://pariwisata.padang.go.id'),
('K25', 'O4', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu P', 'Jalan Sudirman N0 1 Padang', '(0751) 890719', 'dpmptsp@padang.go.id', ' http://dpmptsp.padang.go.id/'),
('K26', 'O4', 'Satpol PP', 'Jalan Tan Malaka No. 3C Padang', '(0751) 810045', 'satpolpp@padang.go.id', 'http://satpolpp.padang.go.id/'),
('K27', 'O4', 'Dinas Lingkungan Hidup', 'Jl. Simpang Rambutan Balai Baru Kel. Gunung Sarik Kec. Kuranji', '(0751) 496788', 'dislingkunganhidup@padang.go.i', 'Dalam Pengembangan'),
('K28', 'O4', 'Dinas Pertanian', 'Jl. Sei. Lareh Lubuk Minturun Kota Padang (25175)', '(0751) 495892', 'dispertanian@padang.go.id', 'Dalam Pengembangan'),
('K29', 'O4', 'Dinas Perumahan Rakyat, Kawasan Pemukiman dan Pert', 'Jalan Jenderal Sudirman No. 4, Kota Padang', '(0751)890757, ', 'disprkpp@padang.go.id', '-'),
('K30', 'O4', 'Dinas Kesehatan', 'Komp. Balaikota Jl.Bgd.Aziz Chan By Pass Km 15', '0751 462619', 'dkkpadang@gmail.com / diskes@p', 'https://dinkes.padang.go.id/'),
('K31', 'O4', 'Dinas Tenaga Kerja dan perindustrian', 'Jl. Khatib Sulaiman No.67 Padang', '(0751) 7054037', 'disnakerin@padang.go.id', 'http://disnakerin.padang.go.id/'),
('K32', 'O4', 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Jalan Ujung Gurun No.2 Padang - Sumatera Barat', '0751 - 21414', ' dispu@padang.go.id', ''),
('K33', 'O4', 'Dinas Kependudukan dan Pencatatan Sipil', 'Jl. Jenderal Sudirman No. 1 ', '', '(0751) 28814', 'http://disdukcapil.padang.go.id/'),
('K34', 'O4', 'Dinas Pemadam Kebakaran', 'Jalan Rasuna Said No. 56 Padang', '0751 - 33322 -', 'disdamkar@padang.go.id', ''),
('K35', 'O4', 'Dinas Pemberdayaan Perempuan, Perlindungan Anak, P', 'Jalan Khatib Sulaiman No. 1', '0751 7055317', 'disp3ap2kb@padang.go.id', ''),
('K36', 'O4', 'Dinas Padang', 'Jln. Palarik KM. 15 By Pass Air Pach Padang', '', 'dispangan@padang.go.id', ''),
('K37', 'O4', 'Dinas Koperasi, Usaha Kecil dan Menengah', 'Jl. Ujung Gurun No. 3 Kota Padang', ' (0751) 21355 ', 'diskoperasiukm@padang.go.id', ''),
('K38', 'O4', 'Dinas Pemuda dan Olahraga', 'Jl. Batang Kampar No. 4 Komplek Gor H. Agus Salim Padang', '(0751) 7055818', 'disporakotapadang@gmail.com ', ''),
('K39', 'O4', 'Dinas Kelautan dan Perikanan', 'Muara No. 51 A Padang', '0751 811228', 'diskp@padang.go.id', ''),
('K40', 'O4', 'Dinas Perdagangan', 'Jalan Khatib Sulaiman No. 67 Padang', '0751-7054037', 'disperdagangan@padang.go.id', ''),
('K41', 'O5', 'Kecamatan Padang Utara', '', '', '', ''),
('K42', 'O5', 'Kecamatan Padang Timur', '', '', '', ''),
('K43', 'O5', 'Kecamatan Padang Barat', '', '', '', ''),
('K44', 'O5', 'Kecamatan Padang Selatan', '', '', '', ''),
('K45', 'O5', 'Kecamatan Lubuk Kilangan', '', '', '', ''),
('K46', 'O5', 'Kecamatan Lubuk Begalung', '', '', '', ''),
('K47', 'O5', 'Kecamatan Pauh', '', '', '', ''),
('K48', 'O5', 'Kecamatan Kuranji', '', '', '', ''),
('K49', 'O5', 'Kecamatan Nanggalo', '', '', '', ''),
('K50', 'O5', 'Kecamatan Koto Tangah', '', '', '', ''),
('K51', 'O5', 'Kecamatan Bungus Teluk Kabung', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` varchar(10) NOT NULL,
  `id_jenis` varchar(1) NOT NULL,
  `id_kantor` varchar(10) NOT NULL,
  `isi` varchar(9999) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_jenis`, `id_kantor`, `isi`, `tanggal`) VALUES
('001', '1', 'K03', 'wifi kabel putus', '2020-02-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `opd`
--

CREATE TABLE `opd` (
  `id_opd` varchar(10) NOT NULL,
  `nama_opd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `opd`
--

INSERT INTO `opd` (`id_opd`, `nama_opd`) VALUES
('O1', 'Sekretariat Daerah & DPRD'),
('O2', 'Badan Daerah'),
('O3', 'Inspekrotat, Kesbangpol, RSUD & PDAM'),
('O4', 'Dinas'),
('O5', 'Kecamatan Dan Kelurahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$iNLLiYmO.VepxwNIpYdkXet/H0T3HtCpL3mBY5c9niiGq7dTsI.xu', NULL, '2020-01-24 01:06:02', '2020-01-24 01:06:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `jenis_laporan`
--
ALTER TABLE `jenis_laporan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id_kantor`,`id_opd`),
  ADD KEY `opd_kantor_fk` (`id_opd`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD UNIQUE KEY `id_kantor` (`id_kantor`),
  ADD UNIQUE KEY `id_jenis_2` (`id_jenis`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kantor`
--
ALTER TABLE `kantor`
  ADD CONSTRAINT `opd_kantor_fk` FOREIGN KEY (`id_opd`) REFERENCES `opd` (`id_opd`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `jenis_laporan_laporan_fk` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_laporan` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
