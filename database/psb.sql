-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 13.49
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` char(32) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `email`, `password`, `level`) VALUES
(1, 'numan nuril', 'numan', 'numan@gmail.com', 'f1f6acc375554a092b9080663a31aff0', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ayah`
--

CREATE TABLE `ayah` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `no_hp` varchar(41) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `pekerjaan_id_pekerjaan` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id_calon` char(10) NOT NULL,
  `tanggal_daftar` date NOT NULL DEFAULT current_timestamp(),
  `nama_calon` varchar(35) NOT NULL,
  `nisn` char(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `desa` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kabupaten` varchar(20) DEFAULT NULL,
  `propinsi` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(35) NOT NULL,
  `ukuran_pakaian` varchar(5) DEFAULT NULL,
  `jenis_kelamin_id_jenis` char(1) NOT NULL,
  `pilihan_id_pilihan` char(1) NOT NULL,
  `ayah_nik` char(16) DEFAULT NULL,
  `ibu_nik` char(16) DEFAULT NULL,
  `keterangan` char(1) NOT NULL DEFAULT 'M'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`id_calon`, `tanggal_daftar`, `nama_calon`, `nisn`, `email`, `username`, `password`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `propinsi`, `asal_sekolah`, `ukuran_pakaian`, `jenis_kelamin_id_jenis`, `pilihan_id_pilihan`, `ayah_nik`, `ibu_nik`, `keterangan`) VALUES
('0606232003', '2023-06-06', 'taufiq abidin', '123456789', '', '123456789', '25f9e794323b453885f5181f1b624d0b', 'tegal', '2008-08-03', '085742288110', NULL, NULL, NULL, NULL, NULL, 'sd kaligangsa 4', NULL, 'L', '2', NULL, NULL, 'M'),
('0606232009', '2023-06-06', 'numan', '12345', '', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'jonggol', '2023-06-05', '085962883664', NULL, NULL, NULL, NULL, NULL, 'smpn 3 brebes', NULL, 'L', '2', NULL, NULL, 'M'),
('0806232012', '2023-06-08', 'kamad', '098765', '', '098765', 'a8698009bce6d1b8c2128eddefc25aad', 'brebes', '2023-06-01', '085962883664', NULL, NULL, NULL, NULL, NULL, 'smpn 3 brebes', NULL, 'L', '2', NULL, NULL, 'M'),
('0906232014', '2023-06-09', 'tio', '12345', '', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'brebes', '2023-06-16', '085962883664', NULL, NULL, NULL, NULL, NULL, 'smpn 3 brebes', NULL, 'L', '2', NULL, NULL, 'M'),
('1206232015', '2023-06-12', 'ajot', '12345', '', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'brebes', '2023-06-01', '085962883664', NULL, NULL, NULL, NULL, NULL, 'smpn 3 brebes', NULL, 'L', '2', NULL, NULL, 'M'),
('1506232022', '2023-06-15', 'ramang', '09857', '', '09857', '1cce95d4a9749fc74f7d47359e5e457e', 'cikarang', '2023-06-28', '123456789', NULL, NULL, NULL, NULL, NULL, 'cikarang', NULL, 'L', '2', NULL, NULL, 'M'),
('1606232023', '2023-06-16', 'M nishom', '12131415', '', '12131415', '35712d7647fec5f11b06ddabc36aadda', 'batang', '2023-08-03', '098754', NULL, NULL, NULL, NULL, NULL, 'smp 4 batang', NULL, 'L', '2', NULL, NULL, 'M'),
('1606232024', '2023-06-16', 'kamad', '12345678', '', '12345678', '25d55ad283aa400af464c76d713c07ad', 'cikarang', '2023-06-15', '12345678', NULL, NULL, NULL, NULL, NULL, 'smpn 3 brebes', NULL, 'L', '2', NULL, NULL, 'M'),
('1706231028', '2023-06-17', 'ramang', '13579', '', '13579', 'e13dd027be0f2152ce387ac0ea83d863', 'cikarang', '2023-06-01', '085962883664', NULL, NULL, NULL, NULL, NULL, 'smpn 3 brebes', NULL, 'L', '1', NULL, NULL, 'M'),
('1706232025', '2023-06-17', 'dega', '0987654', '', '0987654', '75f34b5502bec3c609734fdf4d37fa5c', 'tegal', '2023-06-27', '09864384', NULL, NULL, NULL, NULL, NULL, 'smp 5 tegal', NULL, 'L', '2', NULL, NULL, 'M'),
('2106232013', '2023-06-21', 'Hanif Arkhan ', '120934', '', '120934', '31836b282441fc6ad5dc65e5eb0827a4', 'tegal', '2006-09-19', '0975642332', NULL, NULL, NULL, NULL, NULL, 'sd 3 dukuwaru', NULL, 'L', '2', NULL, NULL, 'M'),
('4606231007', '2023-06-06', 'hamid', '2345', '', '2345', '81b073de9370ea873f548e31b8adc081', 'jonggol', '2023-06-04', '085962883664', NULL, NULL, NULL, NULL, NULL, 'smpn 3 brebes', NULL, 'P', '1', NULL, NULL, 'M'),
('4806231011', '2023-06-08', 'ramdon', '12345', '', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'jonggol', '2023-05-29', '085962883664', NULL, NULL, NULL, NULL, NULL, 'smk 3', NULL, 'P', '1', NULL, NULL, 'M');

--
-- Trigger `calon_siswa`
--
DELIMITER $$
CREATE TRIGGER `masuk_id` BEFORE INSERT ON `calon_siswa` FOR EACH ROW BEGIN
DECLARE thn CHAR(2);
DECLARE bln CHAR(2);
DECLARE tgl CHAR(2);
DECLARE urut CHAR(4);
DECLARE pil CHAR(1);
DECLARE v_id CHAR(10);
DECLARE un CHAR(10);
DECLARE pwd CHAR(32);
SELECT new.nisn INTO un;
SELECT md5(new.nisn) INTO pwd;
SELECT RIGHT(YEAR(CURRENT_DATE),2) INTO thn;
SELECT RIGHT(MONTH(CURRENT_DATE)+100,2) INTO bln;
SELECT RIGHT(DAY(CURRENT_DATE)+100,2) INTO tgl;
SELECT RIGHT(COUNT(*)+1001,3) into urut from calon_siswa
WHERE substr(id_calon, 3,4) = CONCAT(bln,thn);
SELECT new.pilihan_id_pilihan INTO pil;
CASE 
WHEN new.jenis_kelamin_id_jenis='L'THEN SELECT CONCAT(tgl,bln,thn,pil,urut)
INTO v_id;
WHEN new.jenis_kelamin_id_jenis='P'THEN SELECT CONCAT(40+tgl,bln,thn,pil,urut) into v_id;
END CASE;
SET NEW.id_calon=v_id;
SET new.username=un;
SET new.password=pwd;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu`
--

CREATE TABLE `ibu` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `no_hp` varchar(41) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `pekerjaan_id_pekerjaan` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis` char(1) NOT NULL,
  `jenis` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis`, `jenis`) VALUES
('L', 'Laki-laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` char(3) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
('001', 'Arsitek'),
('002', 'Insinyur Elektro'),
('003', 'Insinyur Mekanik'),
('004', 'Insinyur Penerbangan'),
('005', 'Insinyur Perminyakan'),
('006', 'Insinyur Sipil'),
('007', 'Insinyur Metalurgi'),
('008', 'Insinyur Mekatronika'),
('009', 'Insinyur Nuklir'),
('010', 'Insinyur Kimia'),
('011', 'Insinyur Pemrograman'),
('012', 'Welder'),
('013', 'Insinyur Geologi'),
('014', 'Insinyur Biomedis'),
('015', 'Insinyur Industri'),
('016', 'Insinyur Komputer'),
('017', 'Insinyur Kelautan'),
('018', 'Montir'),
('019', 'Perawat'),
('020', 'Dokter'),
('021', 'Bidan'),
('022', 'Apoteker'),
('023', 'Ahli Gizi'),
('024', 'Fisioterapis'),
('025', 'Penyuluh Kesehatan'),
('026', 'RadioGrapher'),
('027', 'Ahli Forensik'),
('028', 'Laborant'),
('029', 'Teller'),
('030', 'Auditor'),
('031', 'Account Officer'),
('032', 'Funding Officer'),
('033', 'Customer Service'),
('034', 'Auditor'),
('035', 'Sales Officer'),
('036', 'Akuntan'),
('037', 'Analis Keuangan'),
('038', 'Analis Kredit'),
('039', 'Konsultan Keuangan'),
('040', 'Analis Riset Pasar'),
('041', 'Konsultan Pajak'),
('042', 'Sekretaris'),
('043', 'Aktuaris'),
('044', 'Guru'),
('045', 'Dosen'),
('046', 'Rektor'),
('047', 'Pustakawan'),
('048', 'Kepala Sekolah'),
('049', 'Tutor'),
('050', 'Fashion Designer'),
('051', 'Seniman'),
('052', 'Penari'),
('053', 'Penulis'),
('054', 'Wartawan / Jurnalis'),
('055', 'Sutradara'),
('056', 'Produser'),
('057', 'Aktor/Aktris'),
('058', 'Kurator'),
('059', 'Pelukis'),
('060', 'Penyanyi'),
('061', 'Pemahat'),
('067', 'Komposer'),
('068', 'Komikus'),
('070', 'Dalang'),
('071', 'Model'),
('072', 'Animator'),
('073', 'Fotografer'),
('074', 'Koreografer'),
('075', 'Perias (MUA)'),
('076', 'Atlet Profesional'),
('077', 'Binaragawan'),
('078', 'Pembalap'),
('079', 'Peselancar'),
('080', 'Wasit'),
('081', 'Pelatih'),
('082', 'Polisi'),
('083', 'Tentara'),
('084', 'Satpam'),
('085', 'Sipir'),
('086', 'Chef'),
('087', 'Pramusaji'),
('088', 'Waiter & Waitress'),
('089', 'Executif Chef'),
('090', 'Butler'),
('091', 'Steward'),
('092', 'Housekeeper'),
('093', 'Bartender'),
('094', 'Barista'),
('095', 'Concierge'),
('096', 'Housekeeping'),
('097', 'Resepsionis'),
('098', 'Room Service'),
('099', 'Cleaning Service'),
('100', 'Dishwasher'),
('101', 'Pilot'),
('102', 'Pramugari'),
('103', 'Pramugara'),
('104', 'Sopir'),
('105', 'Kondektur'),
('106', 'Masinis'),
('107', 'Tukang Ojek'),
('108', 'Kernet'),
('109', 'Pengacara'),
('110', 'Hakim'),
('111', 'Jaksa'),
('112', 'Staf Legal'),
('113', 'Notaris'),
('114', 'Apps Developer'),
('115', 'Digital Marketer'),
('116', 'Product Specialist'),
('117', 'SEO Specialist'),
('118', 'Konten Writer Web'),
('119', 'Block Chain Developer'),
('120', 'UX Desainer (User Experience)'),
('121', 'UI Desainer'),
('122', 'DevOps Engineer'),
('123', 'Artificial Intelegence Engineer (AI)'),
('124', 'Peternak'),
('125', 'Animal Scientis'),
('126', 'Petani'),
('127', 'Botanist'),
('128', 'Penambang'),
('129', 'Insinyur Pertambangan'),
('130', 'Ahli Geologi'),
('131', 'Ahli Pemasaran'),
('132', 'Pemandu Wisata'),
('133', 'Safe Guard'),
('134', 'Penjual Tiket'),
('135', 'Penyewa Tempat Penginapan'),
('136', 'Pedagang'),
('137', 'Kurir'),
('138', 'Marketing'),
('139', 'Account Officer'),
('140', 'Analis kredit'),
('141', 'Collector'),
('142', 'Help Desk'),
('143', 'Virtual Assistant'),
('144', 'Technical Support'),
('145', 'Data Analyst'),
('146', 'Budget Analyst'),
('147', 'Business Analyst'),
('148', 'Kasir'),
('149', 'Nelayan'),
('150', 'Penyelam'),
('151', 'Nahkoda'),
('152', 'Petani garam'),
('153', 'Tukang Bangunan'),
('154', 'Tukang Kayu'),
('155', 'Tukang Parkir'),
('156', 'Tukang Las'),
('157', 'Tukang Cukur'),
('158', 'Tukang Listrik'),
('159', 'Tukang Kunci'),
('160', 'Tukang Gali'),
('161', 'Tukang Batu'),
('162', 'Tukang Besi'),
('163', 'Tukang Kebun'),
('164', 'Porter'),
('165', 'Konten Kreator'),
('167', 'Youtuber'),
('168', 'Selebgram'),
('169', 'Blogger'),
('170', 'Dubber'),
('171', 'Translator'),
('172', 'Trader');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id_pilihan` char(1) NOT NULL,
  `pilihan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id_pilihan`, `pilihan`) VALUES
('1', 'MTs'),
('2', 'MA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `ayah`
--
ALTER TABLE `ayah`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `ayah_pekerjaan_fk` (`pekerjaan_id_pekerjaan`);

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id_calon`),
  ADD KEY `calon_siswa_ayah_fk` (`ayah_nik`),
  ADD KEY `calon_siswa_ibu_fk` (`ibu_nik`),
  ADD KEY `calon_siswa_jenis_kelamin_fk` (`jenis_kelamin_id_jenis`),
  ADD KEY `calon_siswa_pilihan_fk` (`pilihan_id_pilihan`);

--
-- Indeks untuk tabel `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `ibu_pekerjaan_fk` (`pekerjaan_id_pekerjaan`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ayah`
--
ALTER TABLE `ayah`
  ADD CONSTRAINT `ayah_pekerjaan_fk` FOREIGN KEY (`pekerjaan_id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`);

--
-- Ketidakleluasaan untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD CONSTRAINT `calon_siswa_ayah_fk` FOREIGN KEY (`ayah_nik`) REFERENCES `ayah` (`nik`),
  ADD CONSTRAINT `calon_siswa_ibu_fk` FOREIGN KEY (`ibu_nik`) REFERENCES `ibu` (`nik`),
  ADD CONSTRAINT `calon_siswa_jenis_kelamin_fk` FOREIGN KEY (`jenis_kelamin_id_jenis`) REFERENCES `jenis_kelamin` (`id_jenis`),
  ADD CONSTRAINT `calon_siswa_pilihan_fk` FOREIGN KEY (`pilihan_id_pilihan`) REFERENCES `pilihan` (`id_pilihan`);

--
-- Ketidakleluasaan untuk tabel `ibu`
--
ALTER TABLE `ibu`
  ADD CONSTRAINT `ibu_pekerjaan_fk` FOREIGN KEY (`pekerjaan_id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
