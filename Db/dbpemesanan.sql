-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2019 pada 03.09
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpemesanan`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_menu`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_menu` (
`idpembayaran` int(6)
,`nm_menu` varchar(50)
,`jumlah_menu` int(11)
,`harga` int(7)
,`total` int(11)
,`status` tinyint(1)
,`id_user` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `idpembayaran` int(6) NOT NULL,
  `idmenu` int(3) NOT NULL,
  `jumlah_menu` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`idpembayaran`, `idmenu`, `jumlah_menu`, `total`) VALUES
(1, 2, 1, 0),
(1, 3, 1, 0),
(2, 2, 1, 0),
(2, 3, 1, 0),
(3, 3, 1, 0),
(3, 2, 1, 0),
(4, 2, 1, 0),
(4, 2, 1, 0),
(4, 2, 1, 0),
(4, 3, 1, 0),
(4, 2, 1, 0),
(4, 2, 1, 0),
(4, 2, 1, 0),
(4, 3, 1, 10000),
(2, 2, 15, 30000),
(2, 2, 15, 30000),
(2, 3, 12, 12000),
(5, 3, 12, 12000),
(5, 2, 12, 24000),
(6, 2, 2, 4000),
(7, 3, 2, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(6) NOT NULL,
  `nm_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nm_kategori`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'snack');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `k_pemesanan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `k_pemesanan` (
`idpembayaran` int(6)
,`tanggal` date
,`due_date` date
,`status` tinyint(1)
,`nama` varchar(32)
,`alamat` varchar(32)
,`email` varchar(32)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `lap_pemesanan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `lap_pemesanan` (
`idpembayaran` int(6)
,`tanggal` date
,`pendapatan` decimal(32,0)
,`Jumlah Pemesan` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(3) NOT NULL,
  `nm_menu` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `harga` int(7) NOT NULL,
  `idkategori` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idmenu`, `nm_menu`, `gambar`, `harga`, `idkategori`) VALUES
(2, 'Kuya', 'weaper2.jpg', 2000, 2),
(3, 'Kue', 'fhg.jpeg', 1000, 3),
(4, 'Pisang goreng', 'Soique.jpg', 15, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpembayaran` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `due_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `tanggal`, `due_date`, `status`, `id_user`) VALUES
(1, '2019-07-19', '2019-07-19', 1, 2),
(2, '2019-07-19', '2019-07-19', 1, 2),
(3, '2019-07-19', '2019-07-19', 1, 5),
(4, '2019-07-19', '2019-07-19', 1, 6),
(5, '2019-07-20', '2019-07-20', 1, 2),
(6, '2019-07-20', '2019-07-20', 1, 2),
(7, '2019-07-20', '2019-07-20', 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 0),
(2, 'emy', 'emy', 'Emy', 'sarijadi 54', 'Emy@gmail.com', 3),
(3, 'x', 'x', 'xy', 'x', 'x@p.com', 1),
(4, 'z', 'z', 'zz', 'z', 'z@z.com', 2),
(5, 'dita', 'dita', 'dita', 'jl cijerokaso', 'dita123@gmail.com', 3),
(6, 'khanza', 'khanza', 'khanza', 'jl asahan', 'khanza123@gmail.com', 3);

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_menu`
--
DROP TABLE IF EXISTS `detail_menu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_menu`  AS  select `detail_pemesanan`.`idpembayaran` AS `idpembayaran`,`menu`.`nm_menu` AS `nm_menu`,`detail_pemesanan`.`jumlah_menu` AS `jumlah_menu`,`menu`.`harga` AS `harga`,`detail_pemesanan`.`total` AS `total`,`pembayaran`.`status` AS `status`,`pembayaran`.`id_user` AS `id_user` from ((`detail_pemesanan` left join `menu` on((`menu`.`idmenu` = `detail_pemesanan`.`idmenu`))) left join `pembayaran` on((`pembayaran`.`idpembayaran` = `detail_pemesanan`.`idpembayaran`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `k_pemesanan`
--
DROP TABLE IF EXISTS `k_pemesanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `k_pemesanan`  AS  select `pembayaran`.`idpembayaran` AS `idpembayaran`,`pembayaran`.`tanggal` AS `tanggal`,`pembayaran`.`due_date` AS `due_date`,`pembayaran`.`status` AS `status`,`user`.`nama` AS `nama`,`user`.`alamat` AS `alamat`,`user`.`email` AS `email` from (`pembayaran` left join `user` on((`user`.`id_user` = `pembayaran`.`id_user`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `lap_pemesanan`
--
DROP TABLE IF EXISTS `lap_pemesanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_pemesanan`  AS  select `pembayaran`.`idpembayaran` AS `idpembayaran`,`pembayaran`.`tanggal` AS `tanggal`,sum(`detail_pemesanan`.`total`) AS `pendapatan`,count(`pembayaran`.`tanggal`) AS `Jumlah Pemesan` from (`pembayaran` left join `detail_pemesanan` on((`detail_pemesanan`.`idpembayaran` = `pembayaran`.`idpembayaran`))) group by `pembayaran`.`tanggal` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD KEY `idpembayaran` (`idpembayaran`),
  ADD KEY `idmenu` (`idmenu`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `fk_kategori` (`idkategori`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpembayaran`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idpembayaran` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `fk_menu` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`),
  ADD CONSTRAINT `fk_pembayaran` FOREIGN KEY (`idpembayaran`) REFERENCES `pembayaran` (`idpembayaran`);

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
