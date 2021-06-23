-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 06:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `akseptor`
--

CREATE TABLE `akseptor` (
  `Id_Akseptor` varchar(10) NOT NULL,
  `Nama_Suami` varchar(50) NOT NULL,
  `Tanggal_Lahir_Suami` date NOT NULL,
  `Umur_Suami` int(3) DEFAULT NULL,
  `Nama_Istri` varchar(50) NOT NULL,
  `Tanggal_Lahir_Istri` date NOT NULL,
  `Umur_Istri` int(3) DEFAULT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Rt` varchar(3) NOT NULL,
  `Rw` varchar(3) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Kabupaten` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `Jumlah_Anak_Lk` int(3) NOT NULL,
  `Jumlah_Anak_Pr` int(3) NOT NULL,
  `Umur_Anak_Kecil` varchar(20) NOT NULL,
  `Tanggal_Pelkon` date NOT NULL,
  `Metoda_Pelkon` varchar(10) NOT NULL,
  `Do_Dari` varchar(10) NOT NULL,
  `Tempat_Pelkon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akseptor`
--

INSERT INTO `akseptor` (`Id_Akseptor`, `Nama_Suami`, `Tanggal_Lahir_Suami`, `Umur_Suami`, `Nama_Istri`, `Tanggal_Lahir_Istri`, `Umur_Istri`, `Alamat`, `Rt`, `Rw`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `Jumlah_Anak_Lk`, `Jumlah_Anak_Pr`, `Umur_Anak_Kecil`, `Tanggal_Pelkon`, `Metoda_Pelkon`, `Do_Dari`, `Tempat_Pelkon`) VALUES
('AKS-00001', 'Supriyadi', '2021-06-16', 22, 'Fitriyani', '2021-06-08', 20, 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 1, 1, '9', '2021-06-16', 'IUD', 'IMPLANT', 'Puskesmas'),
('AKS-00002', 'Supriyadi', '2021-06-16', 0, 'Fitriyani', '2021-06-08', 0, 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 1, 1, '9', '2021-06-16', 'IUD', 'IMPLANT', 'Puskesmas'),
('AKS-00003', 'Supriyadi', '2021-06-16', 0, 'Fitriyani', '2021-06-08', 0, 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 1, 1, '9', '2021-06-16', 'IUD', 'IMPLANT', 'Puskesmas'),
('AKS-00004', 'Supriyadi', '2021-06-16', 0, 'Fitriyani', '2021-06-08', 0, 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 1, 1, '9', '2021-06-16', 'IUD', 'IMPLANT', 'Puskesmas');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `Id_Anak` varchar(10) NOT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `Nama_Anak` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Umur` varchar(50) DEFAULT NULL,
  `Anak_Ke` int(3) NOT NULL,
  `Nama_Ibu` varchar(50) NOT NULL,
  `Nama_Ayah` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Rt` varchar(3) NOT NULL,
  `Rw` varchar(3) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Kabupaten` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `Status_Warga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`Id_Anak`, `NIK`, `Nama_Anak`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Umur`, `Anak_Ke`, `Nama_Ibu`, `Nama_Ayah`, `Alamat`, `Rt`, `Rw`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `Status_Warga`) VALUES
('Anak-00001', '-', 'Dimas Muhammad Dzaky', 'Laki-Laki', 'bdg', '2021-06-17', '2 Hari', 0, 'Adisti', 'Ayi Hambali', 'Cisalak', '001', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Tamu'),
('Anak-00002', '3503132304020001', 'Giska SA', 'Perempuan', 'bdg', '2021-06-30', '2 Hari', 0, 'Nia Kurnia', 'Ayi Hambali', 'Jl. Orion', '004', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Asli'),
('Anak-00003', '-', 'Apriyanto', 'Laki-Laki', 'Yogyakarta', '2021-06-15', '5 Hari', 0, 'Asih', 'Endang', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Tamu'),
('Anak-00004', '-', 'Dio Muhammad Fauzi', 'Laki-Laki', 'Trenggalek', '2021-06-16', '3 Hari', 0, 'Nia Kurnia', 'Ayi Hambali', 'Cisalak', '001', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Tamu'),
('Anak-00005', '3217084311990004', 'Syahdillah Tasnia Awali', 'Perempuan', 'bdg', '2021-06-17', '3 Hari', 0, 'Nia Kurnia', 'Ayi Hambali', 'Jl. Orion', '003', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Asli'),
('Anak-00006', '3503130405980002', 'Muhammad Fajarudin Muawan', 'Laki-laki', 'Kediri', '2021-06-15', '5 Hari', 0, 'Nia Kurnia', 'Ayi Hambali', 'Jl. Orion', '003', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Asli'),
('Anak-00007', '3503132304020001', 'Asnawiyudin', 'Perempuan', 'Trenggalek', '2021-06-16', '3 Hari', 0, 'Asri', 'Angga', 'Jl. Orion', '003', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Asli'),
('Anak-00008', '3217085308040002', 'Muhammad Miftah Putra Muawan', 'Perempuan', 'Bandung', '2021-06-15', '1 Hari', 0, 'Dina', 'Ikhsan', 'Jl. Orion', '004', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Asli'),
('Anak-00009', '-', 'Ghina Aghinia', 'Perempuan', 'Bandung', '2021-06-17', '4 Hari', 0, 'Sari Komariah', 'Wawan Hermawan', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Tamu'),
('Anak-00010', '3217089876210012', 'Naura Shakilla Nurrizky', 'Perempuan', 'bdg', '2021-06-13', '15 Hari', 2, 'Nuri Pratiwi', 'Riki Hermansyah', 'Jl. Orion', '002', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Warga Asli'),
('Anak-00011', NULL, 'Kheysa Aqilla', 'Perempuan', 'Jakarta', '2021-06-16', '1 Hari', 0, 'Andini', 'Hermansyah', 'Jakarta Utara', '002', '021', 'Ngamprah', 'Margaasih', 'Jakarta Utara', 'DKI Jakarta', 'Warga Tamu');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `Kode_Artikel` int(10) NOT NULL,
  `Judul_Artikel` varchar(100) NOT NULL,
  `Isi_Artikel` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`Kode_Artikel`, `Judul_Artikel`, `Isi_Artikel`) VALUES
(1, 'Apa Itu Posyandu?', 'Pelayanan kesehatan terpadu (yandu) yang merupakan suatu bentuk keterpaduan pelayanan kesehatan yang dilaksanakan di suatu wilayah kerja Puskesmas dengan penanggung jawabnya yaitu Kepala Desa. Tempat pelaksanaan pelayanan program terpadu di balai dusun, balai kelurahan, RW, dan sebagainya disebut dengan Pos pelayanan terpadu (Posyandu)'),
(2, 'Pengecekan Anak dan Balita', 'Kegiatan pengecekan bayi dan balita dilakukan sebulan sekali dimana kegiatan ini meliputi penimbangan anak dan balita, pemberian vaksin, pemberian vitamin, serta pengecekan kondisi gizi anak dan balita.'),
(3, 'Pengecekan Kondisi Ibu Hamil', 'Kegiatan pengecekan kondisi ibu hamil ini dilakukan satu bulan sekali dan kegiatan ini meliputi pengecekan kondisi janin yang sedang dikandung, pengecekan berat badan, serta pemberian vitamin untuk ibu hamil itu sendiri.'),
(4, 'Pendataan Sub-ppkbd', 'Kegiatan sub-ppkbd merupakan kegitan pendataan untuk seluruh warga rw.13 yang meliputi pendataan program KB, pendataan warga datang, warga pindah, ibu melahirkan, serta pendataan kematian dan perkawinan.'),
(5, 'Visi Posyandu Indonesia', 'Memberdayakan potensi masyarakat mampu dan memanfaatkan sumber daya alam untuk menciptakan kondisi hubungan/silaturahmi yang harmonis dan sinergi antara kelompok masyarakat mampu dengan masyarakat yang memerlukan bantuan dalam upaya mengurangi dan mengatasi masalah sosial yang ada di Indonesia demi persatuan, kesatuan dan kesejahteraan yang Adil Beradab dan selamat dunia akhirat bagi seluruh rakyat Indonesia.'),
(6, 'Misi Posyandu Indonesia', '1. Membantu kelompok masyarakat miskin melalui upaya pemberdayaan masyarakat mampu.<br> 2. Menumbuhkan dan mengembangkan silaturahmi antara masyarakat mampu dengan masyarakat miskin melalui pelaksanaan program yang terdiri dari tujuh tahap secara berurutan. <br>3. Menyebarluaskan Misi seluas-luasnya kepada siapa saja, kapan saja dan dimana saja berada.');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`) VALUES
(1, 'JRD-0001', 'Ultra'),
(2, 'JRD-0002', 'Bedak'),
(3, 'JRD-0003', 'Susu'),
(5, 'JRD-0004', 'Ultrajaya'),
(6, 'JRD-0005', 'Ultrajaya'),
(7, 'JRD-0006', 'Ultrajaya'),
(8, 'JRD-0007', 'susu bendera'),
(9, 'JRD-0008', 'susu bendera'),
(10, 'JRD-0009', 'Ultrajaya'),
(11, 'JRD-0010', 'Ultrajaya'),
(12, 'JRD-0011', 'Ultrajaya'),
(13, 'JRD-0012', 'susu bendera'),
(14, 'JRD-0013', 'Ultrajaya');

-- --------------------------------------------------------

--
-- Table structure for table `datang`
--

CREATE TABLE `datang` (
  `Id_Datang` varchar(10) NOT NULL,
  `Nama_KK` varchar(50) NOT NULL,
  `Tanggal_Lahir_KK` date NOT NULL,
  `Umur_KK` int(3) NOT NULL,
  `Nama_Istri` varchar(50) NOT NULL,
  `Tanggal_Lahir_Istri` date NOT NULL,
  `Umur_Istri` int(3) NOT NULL,
  `Alamat_Datang` varchar(50) NOT NULL,
  `Rt_Datang` varchar(3) NOT NULL,
  `Rw_Datang` varchar(3) NOT NULL,
  `Desa_Datang` varchar(50) NOT NULL,
  `Kecamatan_Datang` varchar(50) NOT NULL,
  `Kabupaten_Datang` varchar(50) NOT NULL,
  `Provinsi_Datang` varchar(50) NOT NULL,
  `Jumlah_Jiwa_Lk` int(2) NOT NULL,
  `Jumlah_Jiwa_Pr` int(2) NOT NULL,
  `Jumlah_Anak_Lk` int(2) NOT NULL,
  `Jumlah_Anak_Pr` int(2) NOT NULL,
  `Kb` varchar(10) NOT NULL,
  `Ks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datang`
--

INSERT INTO `datang` (`Id_Datang`, `Nama_KK`, `Tanggal_Lahir_KK`, `Umur_KK`, `Nama_Istri`, `Tanggal_Lahir_Istri`, `Umur_Istri`, `Alamat_Datang`, `Rt_Datang`, `Rw_Datang`, `Desa_Datang`, `Kecamatan_Datang`, `Kabupaten_Datang`, `Provinsi_Datang`, `Jumlah_Jiwa_Lk`, `Jumlah_Jiwa_Pr`, `Jumlah_Anak_Lk`, `Jumlah_Anak_Pr`, `Kb`, `Ks`) VALUES
('DTG-00001', 'Sulaeman', '2021-06-02', 54, 'Yanti', '2021-06-10', 49, 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 3, 2, 2, 1, 'Ya', 'Tidak'),
('DTG-00002', 'Ayi Hambali', '2021-06-11', 54, 'Nia Kurnia', '2021-06-17', 21, 'Jl. Orion', '2', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 1, 2, 0, 2, 'Ya', 'Tidak'),
('DTG-00003', 'Ayi Hambali', '2021-06-09', 54, 'Nia Kurnia', '2021-06-16', 52, 'Jl. Orion', '3', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 1, 2, 1, 0, 'Ya', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `ibuhamil`
--

CREATE TABLE `ibuhamil` (
  `Id_Kehamilan` varchar(10) NOT NULL,
  `Nama_Suami` varchar(50) NOT NULL,
  `Tanggal_Lahir_Suami` date NOT NULL,
  `Umur_Suami` int(3) NOT NULL,
  `Nama_Istri` varchar(50) NOT NULL,
  `Tanggal_Lahir_Istri` date NOT NULL,
  `Umur_Istri` int(3) NOT NULL,
  `Hamil_Ke` int(3) NOT NULL,
  `Tanggal_Daftar` date NOT NULL,
  `Umur_Hamil_Daftar` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Rt` varchar(3) NOT NULL,
  `Rw` varchar(3) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Kabupaten` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibuhamil`
--

INSERT INTO `ibuhamil` (`Id_Kehamilan`, `Nama_Suami`, `Tanggal_Lahir_Suami`, `Umur_Suami`, `Nama_Istri`, `Tanggal_Lahir_Istri`, `Umur_Istri`, `Hamil_Ke`, `Tanggal_Daftar`, `Umur_Hamil_Daftar`, `Alamat`, `Rt`, `Rw`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`) VALUES
('HML-0001', 'Supriyadi', '2014-06-04', 22, 'Fitriyani', '2021-06-14', 20, 1, '2021-06-22', '1 Bulan', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `kawin`
--

CREATE TABLE `kawin` (
  `Id_Kawin` varchar(10) NOT NULL,
  `Nama_Suami` varchar(50) NOT NULL,
  `Tanggal_Lahir_Suami` date NOT NULL,
  `Umur_Suami` int(3) NOT NULL,
  `Pendidikan_Suami` varchar(20) NOT NULL,
  `Pekerjaan_Suami` varchar(30) NOT NULL,
  `Alamat_Suami` varchar(50) NOT NULL,
  `Rt_Suami` varchar(3) NOT NULL,
  `Rw_Suami` varchar(3) NOT NULL,
  `Desa_Suami` varchar(50) NOT NULL,
  `Kecamatan_Suami` varchar(50) NOT NULL,
  `Kabupaten_Suami` varchar(50) NOT NULL,
  `Provinsi_Suami` varchar(50) NOT NULL,
  `Nama_Istri` varchar(50) NOT NULL,
  `Tanggal_Lahir_Istri` date NOT NULL,
  `Umur_Istri` int(3) NOT NULL,
  `Pendidikan_Istri` varchar(20) NOT NULL,
  `Pekerjaan_Istri` varchar(30) NOT NULL,
  `Alamat_Istri` varchar(50) NOT NULL,
  `Rt_Istri` varchar(50) NOT NULL,
  `Rw_Istri` varchar(50) NOT NULL,
  `Desa_Istri` varchar(50) NOT NULL,
  `Kecamatan_Istri` varchar(50) NOT NULL,
  `Kabupaten_Istri` varchar(50) NOT NULL,
  `Provinsi_Istri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kawin`
--

INSERT INTO `kawin` (`Id_Kawin`, `Nama_Suami`, `Tanggal_Lahir_Suami`, `Umur_Suami`, `Pendidikan_Suami`, `Pekerjaan_Suami`, `Alamat_Suami`, `Rt_Suami`, `Rw_Suami`, `Desa_Suami`, `Kecamatan_Suami`, `Kabupaten_Suami`, `Provinsi_Suami`, `Nama_Istri`, `Tanggal_Lahir_Istri`, `Umur_Istri`, `Pendidikan_Istri`, `Pekerjaan_Istri`, `Alamat_Istri`, `Rt_Istri`, `Rw_Istri`, `Desa_Istri`, `Kecamatan_Istri`, `Kabupaten_Istri`, `Provinsi_Istri`) VALUES
('KWN-00001', 'Azzam Siswanto', '1995-06-19', 22, 'SMA', 'Karyawan Swasta', 'Kp. Cisalak rt 02 rw 022', '02', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat ', 'Usi sulistiawati', '2021-06-14', 20, 'SMA', 'Ibu Rumah Tangga', 'Kp Cisalak rt 02 rw 022', '02', '022', 'Kertajaya', 'Padalarang ', 'Bandung Barat', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `Id_Kematian` varchar(10) NOT NULL,
  `Nama_Meninggal` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Umur` int(3) NOT NULL,
  `Tanggal_Meninggal` date NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Rt` varchar(3) NOT NULL,
  `Rw` varchar(3) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Kabupaten` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `Penyebab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`Id_Kematian`, `Nama_Meninggal`, `Tanggal_Lahir`, `Umur`, `Tanggal_Meninggal`, `Jenis_Kelamin`, `Alamat`, `Rt`, `Rw`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `Penyebab`) VALUES
('KMT-00001', 'Yayan Abdullah', '2021-06-03', 65, '2021-06-02', 'Laki-Laki', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Sakit'),
('KMT-00002', 'Agus Suhendar', '2021-06-25', 25, '2021-06-12', 'Laki-Laki', 'Jl. Orion', '2', '013', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `melahirkan`
--

CREATE TABLE `melahirkan` (
  `Id_Lahir` varchar(10) NOT NULL,
  `Nama_Suami` varchar(50) NOT NULL,
  `Umur_Suami` int(3) NOT NULL,
  `Nama_Istri` varchar(50) NOT NULL,
  `Umur_Istri` int(3) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Rt` varchar(3) NOT NULL,
  `Rw` varchar(3) NOT NULL,
  `Nama_Bayi` varchar(50) NOT NULL,
  `Tanggal_Lahir_Bayi` date NOT NULL,
  `Jenis_Kelamin_Bayi` varchar(10) NOT NULL,
  `Anak_Ke` int(3) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Kabupaten` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `melahirkan`
--

INSERT INTO `melahirkan` (`Id_Lahir`, `Nama_Suami`, `Umur_Suami`, `Nama_Istri`, `Umur_Istri`, `Alamat`, `Rt`, `Rw`, `Nama_Bayi`, `Tanggal_Lahir_Bayi`, `Jenis_Kelamin_Bayi`, `Anak_Ke`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`) VALUES
('LHR-00001', 'Muhammad Azmi', 21, 'Anandiya Putri', 19, 'Kp. Cisalak', '003', '022', 'Khadijah Putri', '2021-06-09', 'Perempuan', 1, 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat'),
('LHR-00002', 'Sayyidina Hamzah', 24, 'Aulia Nur Fadillah', 21, 'Jl. Orion', '4', '013', 'Muhammad Fathurrahman', '2021-06-24', 'Laki-Laki', 1, 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat'),
('LHR-00003', 'Muhammad Fajarudin Muawan', 25, 'Syahdillah Tasnia Awali', 24, 'Jl. Orion', '3', '013', 'Muhammad Miftah Muawan', '2024-06-05', 'Laki-Laki', 1, 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` varchar(16) NOT NULL,
  `No_KK` varchar(16) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Pendidikan` varchar(20) NOT NULL,
  `Nama_Ibu` varchar(100) NOT NULL,
  `Nama_Ayah` varchar(100) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `KWN` varchar(3) NOT NULL,
  `Status_Hubungan` varchar(20) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Rt` varchar(3) NOT NULL,
  `Rw` varchar(3) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Kabupaten` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK`, `No_KK`, `Nama`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Pendidikan`, `Nama_Ibu`, `Nama_Ayah`, `Pekerjaan`, `KWN`, `Status_Hubungan`, `Alamat`, `Rt`, `Rw`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`) VALUES
('3217082909720003', '3217080605051319', 'Ayi Hambali', 'Laki-Laki', 'Bamdung', '1972-09-29', 'Islam', 'SMA', '-', 'Achjaenudin', 'Karyawan Swasta', 'WNI', 'Kepala Keluarga', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat'),
('3217084311990004', '3217080605051319', 'Syahdillah Tasnia Awali', 'Perempuan', 'Bandung', '1999-11-03', 'Islam', 'SMA', 'Nia Kurnia', 'Ayi Hambali', 'Pelajar', 'WNI', 'Anak', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat'),
('3217085308040007', '3217080605051319', 'Gischa Sandrina Aulia', 'Perempuan', 'Bandung', '2004-08-13', 'Islam', 'SMP', 'Nia Kurnia', 'Ayi Hambali', 'Pelajar', 'WNI', 'Anak', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat'),
('3217085505760028', '3217080605051319', 'Nia Kurnia', 'Perempuan', 'Bandung', '1976-05-05', 'Islam', 'SMP', '-', 'Udin', 'Ibu Rumah Tangga', 'WNI', 'Istri', 'Kp. Cisalak', '003', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `Id_Pindah` varchar(10) NOT NULL,
  `Nama_KK_Pindah` varchar(50) NOT NULL,
  `Tanggal_Lahir_KK_Pindah` date NOT NULL,
  `Umur_KK_Pindah` int(3) NOT NULL,
  `Nama_Istri_Pindah` varchar(50) NOT NULL,
  `Tanggal_Lahir_Istri_Pindah` date NOT NULL,
  `Umur_Istri_Pindah` int(3) NOT NULL,
  `Alamat_Pindah` varchar(50) NOT NULL,
  `Rt_Pindah` varchar(3) NOT NULL,
  `Rw_Pindah` varchar(3) NOT NULL,
  `Desa_Pindah` varchar(50) NOT NULL,
  `Kecamatan_Pindah` varchar(50) NOT NULL,
  `Kabupaten_Pindah` varchar(50) NOT NULL,
  `Provinsi_Pindah` varchar(50) NOT NULL,
  `Jumlah_Jiwa_Lk_Pindah` int(3) NOT NULL,
  `Jumlah_Jiwa_Pr_Pindah` int(3) NOT NULL,
  `Jumlah_Anak_Lk_Pindah` int(3) NOT NULL,
  `Jumlah_Anak_Pr_Pindah` int(3) NOT NULL,
  `Kb` varchar(10) NOT NULL,
  `Ks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`Id_Pindah`, `Nama_KK_Pindah`, `Tanggal_Lahir_KK_Pindah`, `Umur_KK_Pindah`, `Nama_Istri_Pindah`, `Tanggal_Lahir_Istri_Pindah`, `Umur_Istri_Pindah`, `Alamat_Pindah`, `Rt_Pindah`, `Rw_Pindah`, `Desa_Pindah`, `Kecamatan_Pindah`, `Kabupaten_Pindah`, `Provinsi_Pindah`, `Jumlah_Jiwa_Lk_Pindah`, `Jumlah_Jiwa_Pr_Pindah`, `Jumlah_Anak_Lk_Pindah`, `Jumlah_Anak_Pr_Pindah`, `Kb`, `Ks`) VALUES
('PDH-00001', 'Suswanto Wardoyo', '1994-09-12', 27, 'Ani Murtini', '1995-02-14', 26, 'Kp. Cisalak ', '02', '022', 'Kertajaya', 'Padalarang', 'Bandung Barat', 'Jawa Barat', 1, 2, 0, 1, 'Ya', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Id_Petugas` int(3) NOT NULL,
  `Nama_Petugas` varchar(50) NOT NULL,
  `Bagian` varchar(30) NOT NULL,
  `Foto` char(20) NOT NULL,
  `Tempat_Lahir` date NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `timbangan`
--

CREATE TABLE `timbangan` (
  `Id_Timbangan` varchar(10) NOT NULL,
  `NIK` int(16) NOT NULL,
  `Berat_Badan` double NOT NULL,
  `Tinggi_Badan` double NOT NULL,
  `Tanggal_Timbang` date NOT NULL,
  `Id_Vitamin` varchar(10) NOT NULL,
  `Id_Vaksin` varchar(10) NOT NULL,
  `Hasil_Gizi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `Id_Vaksin` varchar(6) NOT NULL,
  `Nama_Vaksin` varchar(30) NOT NULL,
  `Usia_Wajib_Vaksin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`Id_Vaksin`, `Nama_Vaksin`, `Usia_Wajib_Vaksin`) VALUES
('VK-001', 'Tidak Ada Pemberian', '-'),
('VK-002', 'BCG', '1 Bulan'),
('VK-003', 'DPT-1', '1 Bulan'),
('VK-004', 'DPT-2', '2 Bulan'),
('VK-005', 'DPT-3', '3 Bulan'),
('VK-006', 'Polio-1', '1 Bulan'),
('VK-007', 'Polio-2', '2 Bulan'),
('VK-008', 'Polio-3', '3 Bulan'),
('VK-009', 'Polio-4', '4 Bulan'),
('VK-010', 'MRI', '9 Bulan'),
('VK-011', 'Campak', '9 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `vitamin`
--

CREATE TABLE `vitamin` (
  `Id_Vitamin` varchar(7) NOT NULL,
  `Nama_Vitamin` varchar(30) NOT NULL,
  `Usia_Wajib_Vitamin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vitamin`
--

INSERT INTO `vitamin` (`Id_Vitamin`, `Nama_Vitamin`, `Usia_Wajib_Vitamin`) VALUES
('VIT-001', 'Tidak Ada Pemberian', '-'),
('VIT-002', 'A Merah', '0 - 5 Tahun'),
('VIT-003', 'A Biru', '5 - 11 Tahun'),
('VIT-004', 'A Biru', '0 - 5 Tahun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`Id_Anak`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`Kode_Artikel`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datang`
--
ALTER TABLE `datang`
  ADD PRIMARY KEY (`Id_Datang`);

--
-- Indexes for table `ibuhamil`
--
ALTER TABLE `ibuhamil`
  ADD PRIMARY KEY (`Id_Kehamilan`);

--
-- Indexes for table `kawin`
--
ALTER TABLE `kawin`
  ADD PRIMARY KEY (`Id_Kawin`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`Id_Kematian`);

--
-- Indexes for table `melahirkan`
--
ALTER TABLE `melahirkan`
  ADD PRIMARY KEY (`Id_Lahir`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`Id_Pindah`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Id_Petugas`);

--
-- Indexes for table `timbangan`
--
ALTER TABLE `timbangan`
  ADD PRIMARY KEY (`Id_Timbangan`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`Id_Vaksin`);

--
-- Indexes for table `vitamin`
--
ALTER TABLE `vitamin`
  ADD PRIMARY KEY (`Id_Vitamin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `Kode_Artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;