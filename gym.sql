-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2024 pada 06.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acc`
--

CREATE TABLE `acc` (
  `id_acc` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `acc`
--

INSERT INTO `acc` (`id_acc`, `nama`, `harga`, `foto`, `deskripsi`) VALUES
(1, 'Sarung Tangan', 50000, 'acc2.png', 'Sarung tangan gym dirancang untuk memberikan kenyamanan dan perlindungan saat Anda berolahraga. Sarung tangan ini membantu mengurangi gesekan dan mencegah lecet pada tangan selama latihan angkat beban'),
(2, 'Trideer Padded', 45000, 'acc3.png', 'Sarung tangan gym dirancang untuk memberikan kenyamanan dan perlindungan saat Anda berolahraga. Sarung tangan ini membantu mengurangi gesekan dan mencegah lecet pada tangan selama latihan angkat beban'),
(3, 'Lifting Belt', 130000, 'acc4.png', 'Sarung tangan gym dirancang untuk memberikan kenyamanan dan perlindungan saat Anda berolahraga. Sarung tangan ini membantu mengurangi gesekan dan mencegah lecet pada tangan selama latihan angkat beban'),
(4, 'Elbow Sleeves', 30000, 'acc5.png', 'Sarung tangan gym dirancang untuk memberikan kenyamanan dan perlindungan saat Anda berolahraga. Sarung tangan ini membantu mengurangi gesekan dan mencegah lecet pada tangan selama latihan angkat beban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nohp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `name`, `username`, `password`, `nohp`) VALUES
(1, 'ARIF RAHMAN HUZAIFA', 'arif', '0ff6c3ace16359e41e37d40b8301d67f', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `harga`, `deskripsi`, `foto`) VALUES
(1, 'Member Gym 1 Bulan', 120000, 'Member Card Gym adalah kartu keanggotaan yang memberikan akses penuh ke fasilitas gym kami. Dengan kartu ini, anggota dapat menikmati berbagai layanan dan peralatan olahraga, termasuk area angkat beban, mesin kardio, ruang latihan kelompok, dan area latih', 'member1.png'),
(2, 'Member Gym 6 Bulan', 720000, 'Member Card Gym adalah kartu keanggotaan yang memberikan akses penuh ke fasilitas gym kami. Dengan kartu ini, anggota dapat menikmati berbagai layanan dan peralatan olahraga, termasuk area angkat beban, mesin kardio, ruang latihan kelompok, dan area latih', 'member2.png'),
(3, 'Member Yoga 1 Bulan', 100000, 'Member Card Yoga adalah kartu keanggotaan yang memberikan akses tak terbatas ke semua kelas yoga yang tersedia di studio kami. Kartu ini memungkinkan anggota untuk berpartisipasi dalam berbagai jenis kelas yoga, mulai dari Hatha, Vinyasa, Ashtanga, hingga', 'member3.png'),
(4, 'Member Yoga 6 Bulan', 600000, 'Member Card Yoga adalah kartu keanggotaan yang memberikan akses tak terbatas ke semua kelas yoga yang tersedia di studio kami. Kartu ini memungkinkan anggota untuk berpartisipasi dalam berbagai jenis kelas yoga, mulai dari Hatha, Vinyasa, Ashtanga, hingga', 'member4.png'),
(5, 'Training Bareng Samsulek', 1000000000, '', 'Sam Sulek.jpeg'),
(6, 'Training Bareng David Laid', 1200000000, '', '♚_ Photo.jpeg'),
(7, 'Training Bareng Ethan', 2147483647, '', 'download (21).jpeg'),
(8, 'Training Bareng Dedy Corbuzier ', 2147483647, '', 'Deddy_Corbuzier-removebg-preview.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outfit`
--

CREATE TABLE `outfit` (
  `id_outfit` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `outfit`
--

INSERT INTO `outfit` (`id_outfit`, `nama`, `harga`, `foto`, `deskripsi`) VALUES
(1, 'Pakaian Gym Pria', 350000, 'outfit2.png', 'Outfit gym dirancang untuk memberikan kenyamanan dan dukungan optimal selama latihan. Terbuat dari bahan yang ringan, bernapas, dan cepat kering, outfit gym ini membantu menjaga tubuh tetap sejuk dan '),
(2, 'Celana Gym Pria', 100000, 'outfit3.png', 'Outfit gym dirancang untuk memberikan kenyamanan dan dukungan optimal selama latihan. Terbuat dari bahan yang ringan, bernapas, dan cepat kering, outfit gym ini membantu menjaga tubuh tetap sejuk dan '),
(3, 'Pakaian Gym Wanita', 320000, 'outfit5.png', 'Outfit gym dirancang untuk memberikan kenyamanan dan dukungan optimal selama latihan. Terbuat dari bahan yang ringan, bernapas, dan cepat kering, outfit gym ini membantu menjaga tubuh tetap sejuk dan '),
(4, 'Celana Gym Wanita', 210000, 'outfit4.png', 'Outfit gym dirancang untuk memberikan kenyamanan dan dukungan optimal selama latihan. Terbuat dari bahan yang ringan, bernapas, dan cepat kering, outfit gym ini membantu menjaga tubuh tetap sejuk dan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `username` varchar(11) DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `total_pembelian` decimal(10,2) DEFAULT NULL,
  `alamat_pengiriman` text DEFAULT NULL,
  `pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `username`, `tanggal_pembelian`, `total_pembelian`, `alamat_pengiriman`, `pembayaran`) VALUES
(1, 'arif', '2024-06-27', '495000.00', 'padang', 'Cash On Delivery'),
(2, 'arif', '2024-06-27', '1660000.00', 'kurao', 'Cash On Delivery'),
(3, 'arif', '2024-06-27', '495000.00', 'padang', 'Cash On Delivery'),
(4, 'arif', '2024-06-27', '495000.00', 'padang', 'Cash On Delivery'),
(5, 'arif', '2024-06-27', '225000.00', 'Jln. Anak Air', 'Cash On Delivery'),
(6, 'arif', '2024-06-27', '720000.00', 'f', ''),
(7, 'arif', '2024-06-27', '249000.00', 'fd', ''),
(8, 'arif', '2024-06-27', '495000.00', 'v', 'Cash On Delivery'),
(9, 'arif', '2024-06-28', '720000.00', 'DHAMSARAYA', 'Cash On Delivery'),
(10, 'arif', '2024-06-28', '220000.00', 'padanng', 'Cash On Delivery'),
(11, 'arif', '2024-06-28', '99999999.99', 'padang', 'Cash On Delivery'),
(12, 'arif', '2024-06-28', '75000.00', 'asd', ''),
(13, 'arif', '2024-06-28', '720000.00', 'dsa', ''),
(14, 'arif', '2024-06-28', '720000.00', 'asd', 'Cash On Delivery'),
(15, 'arif', '2024-06-28', '220000.00', 'dsa', 'Cash On Delivery'),
(16, 'arif', '2024-06-28', '320000.00', 'ads', 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_acc`
--

CREATE TABLE `pembelian_acc` (
  `id_pembelian` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian_acc`
--

INSERT INTO `pembelian_acc` (`id_pembelian`, `id_acc`, `nama`, `harga`, `jumlah`, `subharga`) VALUES
(5, 1, 'Sarung Tangan', 50000, 1, 50000),
(5, 2, 'Trideer Padded', 45000, 1, 45000),
(5, 3, 'Lifting Belt', 130000, 1, 130000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_member`
--

CREATE TABLE `pembelian_member` (
  `id_pembelian` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian_member`
--

INSERT INTO `pembelian_member` (`id_pembelian`, `id_member`, `nama`, `harga`, `jumlah`, `subharga`) VALUES
(2, 1, 'Member Gym 1 Bulan', 120000, 2, 240000),
(2, 2, 'Member Gym 6 Bulan', 720000, 1, 720000),
(2, 3, 'Member Yoga 1 Bulan', 100000, 1, 100000),
(2, 4, 'Member Yoga 6 Bulan', 600000, 1, 600000),
(6, 2, 'Member Gym 6 Bulan', 720000, 1, 720000),
(9, 2, 'Member Gym 6 Bulan', 720000, 1, 720000),
(10, 3, 'Member Yoga 1 Bulan', 100000, 1, 100000),
(10, 1, 'Member Gym 1 Bulan', 120000, 1, 120000),
(11, 5, 'Samsulek Bjir', 1000000000, 1, 1000000000),
(13, 2, 'Member Gym 6 Bulan', 720000, 1, 720000),
(14, 2, 'Member Gym 6 Bulan', 720000, 1, 720000),
(15, 3, 'Member Yoga 1 Bulan', 100000, 1, 100000),
(15, 1, 'Member Gym 1 Bulan', 120000, 1, 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_outfit`
--

CREATE TABLE `pembelian_outfit` (
  `id_pembelian` int(11) NOT NULL,
  `id_outfit` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian_outfit`
--

INSERT INTO `pembelian_outfit` (`id_pembelian`, `id_outfit`, `nama`, `harga`, `jumlah`, `subharga`) VALUES
(16, 3, 'Pakaian Gym Wanita', 320000, 1, 320000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_suplement`
--

CREATE TABLE `pembelian_suplement` (
  `id_pembelian` int(11) NOT NULL,
  `id_suplement` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian_suplement`
--

INSERT INTO `pembelian_suplement` (`id_pembelian`, `id_suplement`, `nama`, `harga`, `jumlah`, `subharga`) VALUES
(7, 2, 'Serious Mass', 249000, 1, 249000),
(12, 1, 'GOLD STANDARD WHEY', 75000, 1, 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplement`
--

CREATE TABLE `suplement` (
  `id_suplement` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `suplement`
--

INSERT INTO `suplement` (`id_suplement`, `nama`, `harga`, `foto`, `deskripsi`) VALUES
(1, 'GOLD STANDARD WHEY', 75000, 'susu1.png', 'mantap'),
(2, 'Serious Mass', 249000, 'susu.jpeg', 'Suplement Gym GYMShark adalah pilihan tepat untuk Anda yang ingin meningkatkan performa latihan dan mencapai tujuan kebugaran dengan lebih cepat. Produk ini dirancang khusus untuk mendukung kebutuhan nutrisi Anda selama latihan, membantu pemulihan otot, d'),
(3, 'Evolene EVOMASS', 160000, 'susu3.png', 'Suplement Gym GYMShark adalah pilihan tepat untuk Anda yang ingin meningkatkan performa latihan dan mencapai tujuan kebugaran dengan lebih cepat. Produk ini dirancang khusus untuk mendukung kebutuhan nutrisi Anda selama latihan, membantu pemulihan otot, d'),
(4, 'Mutant Creakong', 385000, 'susu4.png', 'Suplement Gym GYMShark adalah pilihan tepat untuk Anda yang ingin meningkatkan performa latihan dan mencapai tujuan kebugaran dengan lebih cepat. Produk ini dirancang khusus untuk mendukung kebutuhan nutrisi Anda selama latihan, membantu pemulihan otot, d'),
(12, 'JUS DADA AYAM', 150000000, 'photo.JPG', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_umum`
--

CREATE TABLE `users_umum` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nohp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users_umum`
--

INSERT INTO `users_umum` (`id_user`, `name`, `username`, `password`, `nohp`) VALUES
(1, 'arif', 'arif', '0ff6c3ace16359e41e37d40b8301d67f', 892),
(2, 'ARIF RAHMAN HUZAIFA', 'jawir', '955617817b2d33cbfa0285b3b1789a27', 2147483647),
(3, 'zaki', 'zaki', '9784ea3da268563469df99b2e6593564', 2147483647),
(4, 'slebew', 'Neicyy', 'fc385a49d434fe8823645d0dad574b64', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `outfit`
--
ALTER TABLE `outfit`
  ADD PRIMARY KEY (`id_outfit`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_acc`
--
ALTER TABLE `pembelian_acc`
  ADD KEY `id_acc` (`id_acc`);

--
-- Indeks untuk tabel `pembelian_member`
--
ALTER TABLE `pembelian_member`
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `pembelian_outfit`
--
ALTER TABLE `pembelian_outfit`
  ADD KEY `id_outfit` (`id_outfit`);

--
-- Indeks untuk tabel `pembelian_suplement`
--
ALTER TABLE `pembelian_suplement`
  ADD KEY `id_suplement` (`id_suplement`);

--
-- Indeks untuk tabel `suplement`
--
ALTER TABLE `suplement`
  ADD PRIMARY KEY (`id_suplement`);

--
-- Indeks untuk tabel `users_umum`
--
ALTER TABLE `users_umum`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acc`
--
ALTER TABLE `acc`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `outfit`
--
ALTER TABLE `outfit`
  MODIFY `id_outfit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `suplement`
--
ALTER TABLE `suplement`
  MODIFY `id_suplement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users_umum`
--
ALTER TABLE `users_umum`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembelian_acc`
--
ALTER TABLE `pembelian_acc`
  ADD CONSTRAINT `pembelian_acc_ibfk_1` FOREIGN KEY (`id_acc`) REFERENCES `acc` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian_member`
--
ALTER TABLE `pembelian_member`
  ADD CONSTRAINT `pembelian_member_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian_outfit`
--
ALTER TABLE `pembelian_outfit`
  ADD CONSTRAINT `pembelian_outfit_ibfk_1` FOREIGN KEY (`id_outfit`) REFERENCES `outfit` (`id_outfit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian_suplement`
--
ALTER TABLE `pembelian_suplement`
  ADD CONSTRAINT `pembelian_suplement_ibfk_1` FOREIGN KEY (`id_suplement`) REFERENCES `suplement` (`id_suplement`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
