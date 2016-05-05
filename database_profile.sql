-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2016 at 12:55 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `badan`
--

CREATE TABLE `badan` (
  `nim` int(100) NOT NULL,
  `id_badan` int(100) NOT NULL,
  `warna_kulit_badan` varchar(25) NOT NULL,
  `ciri_dada` varchar(25) NOT NULL,
  `ciri_perut` varchar(25) NOT NULL,
  `panjang_badan` varchar(25) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL,
  `ciri_punggung` varchar(25) NOT NULL,
  `bentuk_tulangbelakang` varchar(25) NOT NULL,
  `lebar_bahu` int(100) NOT NULL,
  `lebar_pinggang` int(100) NOT NULL,
  `ciri_tahilalat` varchar(25) NOT NULL,
  `jumlah_tahilalat` int(100) NOT NULL,
  `bekas_luka` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badan`
--

INSERT INTO `badan` (`nim`, `id_badan`, `warna_kulit_badan`, `ciri_dada`, `ciri_perut`, `panjang_badan`, `ciri_cacat`, `ciri_punggung`, `bentuk_tulangbelakang`, `lebar_bahu`, `lebar_pinggang`, `ciri_tahilalat`, `jumlah_tahilalat`, `bekas_luka`) VALUES
(14650027, 1, 'Kuning Langsat', 'Lebar', 'Besar', '1 Meter', 'Tidak Ada', 'Besar', 'Normal', 80, 60, 'Ada', 2, 'Tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `ciri_umum`
--

CREATE TABLE `ciri_umum` (
  `nim` int(100) NOT NULL,
  `id_ciri` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `warna_kulit` varchar(25) NOT NULL,
  `ras` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciri_umum`
--

INSERT INTO `ciri_umum` (`nim`, `id_ciri`, `tinggi_badan`, `berat_badan`, `usia`, `warna_kulit`, `ras`, `agama`) VALUES
(14650027, 2, 172, 78, 20, 'Kuning', 'Jawa Sunda', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `nim` int(100) NOT NULL,
  `id_foto` int(100) NOT NULL,
  `nama_foto` varchar(25) NOT NULL,
  `keterangan_foto` varchar(100) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`nim`, `id_foto`, `nama_foto`, `keterangan_foto`, `picture`) VALUES
(14650027, 4, 'Kepala', 'Scan Tengkorak Kepala', '635019.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kaki`
--

CREATE TABLE `kaki` (
  `nim` int(100) NOT NULL,
  `id_kaki` int(100) NOT NULL,
  `jumlah_kaki` int(2) NOT NULL,
  `panjang_kaki` int(100) NOT NULL,
  `bentuk_kaki` varchar(25) NOT NULL,
  `ciri_telapak_kaki` varchar(25) NOT NULL,
  `ciri_jari_kaki` varchar(25) NOT NULL,
  `jumlah_jari_kaki` int(10) NOT NULL,
  `ciri_tahilalat` varchar(25) NOT NULL,
  `jumlah_tahilalat` int(100) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaki`
--

INSERT INTO `kaki` (`nim`, `id_kaki`, `jumlah_kaki`, `panjang_kaki`, `bentuk_kaki`, `ciri_telapak_kaki`, `ciri_jari_kaki`, `jumlah_jari_kaki`, `ciri_tahilalat`, `jumlah_tahilalat`, `ciri_cacat`) VALUES
(14650027, 1, 2, 130, 'normal', 'besar', 'pendek', 10, 'dipaha', 3, 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `kepala`
--

CREATE TABLE `kepala` (
  `nim` int(100) NOT NULL,
  `id_kepala` int(100) NOT NULL,
  `bentuk_kerangka` varchar(25) NOT NULL,
  `ciri_mata` varchar(25) NOT NULL,
  `jumlah_mata` int(2) NOT NULL,
  `ciri_hidung` varchar(25) NOT NULL,
  `ciri_bibir` varchar(25) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL,
  `ciri_telinga` varchar(25) NOT NULL,
  `jumlah_telinga` int(2) NOT NULL,
  `ciri_rambut` varchar(25) NOT NULL,
  `ciri_tahilalat` varchar(25) NOT NULL,
  `jumlah_tahilalat` int(100) NOT NULL,
  `ciri_jenggot` varchar(25) NOT NULL,
  `ciri_kumis` varchar(25) NOT NULL,
  `rumus_gigi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala`
--

INSERT INTO `kepala` (`nim`, `id_kepala`, `bentuk_kerangka`, `ciri_mata`, `jumlah_mata`, `ciri_hidung`, `ciri_bibir`, `ciri_cacat`, `ciri_telinga`, `jumlah_telinga`, `ciri_rambut`, `ciri_tahilalat`, `jumlah_tahilalat`, `ciri_jenggot`, `ciri_kumis`, `rumus_gigi`) VALUES
(14650027, 1, 'Bulat', 'Oval', 2, 'kecil', 'kecil', 'tidak ada', 'oval', 2, 'hitam tebal', 'dekat bibir', 2, 'tidak tebal', 'tidak tebal', '231emdaks');

-- --------------------------------------------------------

--
-- Table structure for table `kepribadian`
--

CREATE TABLE `kepribadian` (
  `nim` int(100) NOT NULL,
  `id_kepribadian` int(100) NOT NULL,
  `teman_akrab` varchar(100) NOT NULL,
  `komunitas` varchar(100) NOT NULL,
  `tipe_pergaulan` varchar(100) NOT NULL,
  `suka_marah` varchar(25) NOT NULL,
  `suka_mengantuk` varchar(25) NOT NULL,
  `suka_bercanda` varchar(25) NOT NULL,
  `suka_menangis` varchar(25) NOT NULL,
  `suka_baper` varchar(25) NOT NULL,
  `suka_curiga` varchar(25) NOT NULL,
  `suka_jatuh_cinta` varchar(25) NOT NULL,
  `punya_pacar` varchar(25) NOT NULL,
  `suka_ibadah` varchar(25) NOT NULL,
  `suka_penasaran` varchar(25) NOT NULL,
  `suka_game` varchar(25) NOT NULL,
  `suka_filosofi` varchar(25) NOT NULL,
  `peka_lingkungan` varchar(25) NOT NULL,
  `suka_amal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepribadian`
--

INSERT INTO `kepribadian` (`nim`, `id_kepribadian`, `teman_akrab`, `komunitas`, `tipe_pergaulan`, `suka_marah`, `suka_mengantuk`, `suka_bercanda`, `suka_menangis`, `suka_baper`, `suka_curiga`, `suka_jatuh_cinta`, `punya_pacar`, `suka_ibadah`, `suka_penasaran`, `suka_game`, `suka_filosofi`, `peka_lingkungan`, `suka_amal`) VALUES
(14650027, 1, 'Rahmad Gembira Simamora', 'Webounder', 'bebas asal sopan dan santun', 'kadang kadang', 'iya', 'iya', 'tidak', 'tidak', 'iya', 'tidak', 'sudah punya', 'iya', 'besar', 'iya', 'iya', 'Kurang tau', 'iya');

-- --------------------------------------------------------

--
-- Table structure for table `kesukaan`
--

CREATE TABLE `kesukaan` (
  `nim` int(100) NOT NULL,
  `id_kesukaan` int(100) NOT NULL,
  `makanan_favorit` varchar(100) NOT NULL,
  `minuman_favorit` varchar(100) NOT NULL,
  `rokok_favorit` varchar(100) NOT NULL,
  `buku_favorit` varchar(100) NOT NULL,
  `musik_favorit` varchar(100) NOT NULL,
  `film_favorit` varchar(100) NOT NULL,
  `artis_favorit` varchar(100) NOT NULL,
  `cafe_favorit` varchar(100) NOT NULL,
  `menu_favorit_cafe` varchar(100) NOT NULL,
  `rumah_makan_favorit` varchar(100) NOT NULL,
  `menu_favorit` varchar(100) NOT NULL,
  `makanan_ringan_favorit` varchar(100) NOT NULL,
  `minuman_ringan_favorit` varchar(100) NOT NULL,
  `tempat_liburan_favorit` varchar(100) NOT NULL,
  `suasana_belajar_favorit` varchar(100) NOT NULL,
  `hobi_favorit` varchar(100) NOT NULL,
  `profesi_favorit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesukaan`
--

INSERT INTO `kesukaan` (`nim`, `id_kesukaan`, `makanan_favorit`, `minuman_favorit`, `rokok_favorit`, `buku_favorit`, `musik_favorit`, `film_favorit`, `artis_favorit`, `cafe_favorit`, `menu_favorit_cafe`, `rumah_makan_favorit`, `menu_favorit`, `makanan_ringan_favorit`, `minuman_ringan_favorit`, `tempat_liburan_favorit`, `suasana_belajar_favorit`, `hobi_favorit`, `profesi_favorit`) VALUES
(14650027, 1, 'Tempe goreng', 'teh hangat', 'Marlboro', 'Web tutorial', 'haruskah ku mati karena mu dari ada band', 'Save Private Ryan', 'raisya', 'Jemblung 2', 'Chococino', 'Warung Tante', 'Ayam dan tempe goreng', 'Sponge', 'Kopi Goodday', 'Pegunungan', 'Dengan musik', 'jogging', 'Programmer Web');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `nim` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`nim`, `nama_lengkap`) VALUES
(14650018, 'afrizal'),
(14650027, 'M Galang Arbi S'),
(14650085, 'Malik Fajar');

-- --------------------------------------------------------

--
-- Table structure for table `polahidup`
--

CREATE TABLE `polahidup` (
  `nim` int(100) NOT NULL,
  `id_pola` int(100) NOT NULL,
  `jam_bangun` varchar(25) NOT NULL,
  `jam_tidur` varchar(25) NOT NULL,
  `perokok` varchar(25) NOT NULL,
  `begadang` varchar(25) NOT NULL,
  `menonton_film` varchar(25) NOT NULL,
  `mendengar_musik` varchar(25) NOT NULL,
  `jam_menonton` varchar(25) NOT NULL,
  `jam_mendengar` varchar(25) NOT NULL,
  `belajar` varchar(25) NOT NULL,
  `jam_belajar` varchar(25) NOT NULL,
  `tipe_belajar` varchar(25) NOT NULL,
  `olahraga` varchar(25) NOT NULL,
  `jam_olahraga` varchar(25) NOT NULL,
  `nongkrong` varchar(25) NOT NULL,
  `jam_nongkrong` varchar(25) NOT NULL,
  `makan` varchar(25) NOT NULL,
  `jam_makan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polahidup`
--

INSERT INTO `polahidup` (`nim`, `id_pola`, `jam_bangun`, `jam_tidur`, `perokok`, `begadang`, `menonton_film`, `mendengar_musik`, `jam_menonton`, `jam_mendengar`, `belajar`, `jam_belajar`, `tipe_belajar`, `olahraga`, `jam_olahraga`, `nongkrong`, `jam_nongkrong`, `makan`, `jam_makan`) VALUES
(14650027, 1, 'Jam 4 Pagi', 'Jam 9 Malam', 'Kadang kadang', 'Kadang kadang', 'Ya', 'Ya', 'Sesukanya', 'jam 8 malam', 'rajin', 'jam 7 malam', 'dengan musik', 'seminggu sekali', 'jam 4 sore', 'sering', 'jam 9 malam', '2 kali sehari', 'jam 12 siang dan jam 6 so');

-- --------------------------------------------------------

--
-- Table structure for table `tangan`
--

CREATE TABLE `tangan` (
  `nim` int(100) NOT NULL,
  `id_tangan` int(100) NOT NULL,
  `jumlah_tangan` int(2) NOT NULL,
  `lebar_lengan` int(100) NOT NULL,
  `panjang_lengan` int(100) NOT NULL,
  `ciri_jari` varchar(25) NOT NULL,
  `jumlah_jari` int(11) NOT NULL,
  `tanda_khusus` varchar(25) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL,
  `rumus_sidik_jari` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangan`
--

INSERT INTO `tangan` (`nim`, `id_tangan`, `jumlah_tangan`, `lebar_lengan`, `panjang_lengan`, `ciri_jari`, `jumlah_jari`, `tanda_khusus`, `ciri_cacat`, `rumus_sidik_jari`) VALUES
(14650027, 1, 2, 15, 60, 'Pendek', 10, 'Tidak ada', 'Tidak ada', 'mdekancxo2');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `nim` int(100) NOT NULL,
  `id_video` int(100) NOT NULL,
  `nama_video` varchar(25) NOT NULL,
  `keterangan_video` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badan`
--
ALTER TABLE `badan`
  ADD PRIMARY KEY (`id_badan`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `ciri_umum`
--
ALTER TABLE `ciri_umum`
  ADD PRIMARY KEY (`id_ciri`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `kaki`
--
ALTER TABLE `kaki`
  ADD PRIMARY KEY (`id_kaki`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `kepala`
--
ALTER TABLE `kepala`
  ADD PRIMARY KEY (`id_kepala`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `kepribadian`
--
ALTER TABLE `kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `kesukaan`
--
ALTER TABLE `kesukaan`
  ADD PRIMARY KEY (`id_kesukaan`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `polahidup`
--
ALTER TABLE `polahidup`
  ADD PRIMARY KEY (`id_pola`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tangan`
--
ALTER TABLE `tangan`
  ADD PRIMARY KEY (`id_tangan`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badan`
--
ALTER TABLE `badan`
  MODIFY `id_badan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ciri_umum`
--
ALTER TABLE `ciri_umum`
  MODIFY `id_ciri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kaki`
--
ALTER TABLE `kaki`
  MODIFY `id_kaki` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kepala`
--
ALTER TABLE `kepala`
  MODIFY `id_kepala` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kepribadian`
--
ALTER TABLE `kepribadian`
  MODIFY `id_kepribadian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kesukaan`
--
ALTER TABLE `kesukaan`
  MODIFY `id_kesukaan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `polahidup`
--
ALTER TABLE `polahidup`
  MODIFY `id_pola` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tangan`
--
ALTER TABLE `tangan`
  MODIFY `id_tangan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `badan`
--
ALTER TABLE `badan`
  ADD CONSTRAINT `badan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ciri_umum`
--
ALTER TABLE `ciri_umum`
  ADD CONSTRAINT `ciri_umum_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kaki`
--
ALTER TABLE `kaki`
  ADD CONSTRAINT `kaki_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kepala`
--
ALTER TABLE `kepala`
  ADD CONSTRAINT `kepala_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kepribadian`
--
ALTER TABLE `kepribadian`
  ADD CONSTRAINT `kepribadian_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kesukaan`
--
ALTER TABLE `kesukaan`
  ADD CONSTRAINT `kesukaan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `polahidup`
--
ALTER TABLE `polahidup`
  ADD CONSTRAINT `polahidup_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tangan`
--
ALTER TABLE `tangan`
  ADD CONSTRAINT `tangan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
