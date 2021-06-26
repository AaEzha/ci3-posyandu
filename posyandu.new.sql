-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: posyandu
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `akseptor`
--

DROP TABLE IF EXISTS `akseptor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akseptor`
--

LOCK TABLES `akseptor` WRITE;
/*!40000 ALTER TABLE `akseptor` DISABLE KEYS */;
INSERT INTO `akseptor` VALUES ('AKS-00001','Supriyadi','2021-06-16',22,'Fitriyani','2021-06-08',20,'Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',1,1,'9','2021-06-16','IUD','IMPLANT','Puskesmas'),('AKS-00002','Supriyadi','2021-06-16',0,'Fitriyani','2021-06-08',0,'Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',1,1,'9','2021-06-16','IUD','IMPLANT','Puskesmas'),('AKS-00003','Supriyadi','2021-06-16',0,'Fitriyani','2021-06-08',0,'Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',1,1,'9','2021-06-16','IUD','IMPLANT','Puskesmas'),('AKS-00004','Supriyadi','2021-06-16',0,'Fitriyani','2021-06-08',0,'Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',1,1,'9','2021-06-16','IUD','IMPLANT','Puskesmas');
/*!40000 ALTER TABLE `akseptor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anak`
--

DROP TABLE IF EXISTS `anak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Status_Warga` varchar(15) NOT NULL,
  PRIMARY KEY (`Id_Anak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anak`
--

LOCK TABLES `anak` WRITE;
/*!40000 ALTER TABLE `anak` DISABLE KEYS */;
INSERT INTO `anak` VALUES ('Anak-00001','-','Dimas Muhammad Dzaky','Laki-Laki','bdg','2021-06-17','2 Hari',0,'Adisti','Ayi Hambali','Cisalak','001','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Tamu'),('Anak-00002','3503132304020001','Giska SA','Perempuan','bdg','2021-06-30','2 Hari',0,'Nia Kurnia','Ayi Hambali','Jl. Orion','004','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Asli'),('Anak-00003','-','Apriyanto','Laki-Laki','Yogyakarta','2021-06-15','5 Hari',0,'Asih','Endang','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Tamu'),('Anak-00004','-','Dio Muhammad Fauzi','Laki-Laki','Trenggalek','2021-06-16','3 Hari',0,'Nia Kurnia','Ayi Hambali','Cisalak','001','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Tamu'),('Anak-00005','3217084311990004','Syahdillah Tasnia Awali','Perempuan','bdg','2021-06-17','3 Hari',0,'Nia Kurnia','Ayi Hambali','Jl. Orion','003','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Asli'),('Anak-00006','3503130405980002','Muhammad Fajarudin Muawan','Laki-laki','Kediri','2021-06-15','5 Hari',0,'Nia Kurnia','Ayi Hambali','Jl. Orion','003','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Asli'),('Anak-00007','3503132304020001','Asnawiyudin','Perempuan','Trenggalek','2021-06-16','3 Hari',0,'Asri','Angga','Jl. Orion','003','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Asli'),('Anak-00008','3217085308040002','Muhammad Miftah Putra Muawan','Perempuan','Bandung','2021-06-15','1 Hari',0,'Dina','Ikhsan','Jl. Orion','004','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Asli'),('Anak-00009','-','Ghina Aghinia','Perempuan','Bandung','2021-06-17','4 Hari',0,'Sari Komariah','Wawan Hermawan','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Tamu'),('Anak-00010','3217089876210012','Naura Shakilla Nurrizky','Perempuan','bdg','2021-06-13','15 Hari',2,'Nuri Pratiwi','Riki Hermansyah','Jl. Orion','002','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Warga Asli'),('Anak-00011',NULL,'Kheysa Aqilla','Perempuan','Jakarta','2021-06-16','1 Hari',0,'Andini','Hermansyah','Jakarta Utara','002','021','Ngamprah','Margaasih','Jakarta Utara','DKI Jakarta','Warga Tamu');
/*!40000 ALTER TABLE `anak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `Kode_Artikel` int(10) NOT NULL AUTO_INCREMENT,
  `Judul_Artikel` varchar(100) NOT NULL,
  `Isi_Artikel` varchar(5000) NOT NULL,
  PRIMARY KEY (`Kode_Artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (1,'Apa Itu Posyandu?','Pelayanan kesehatan terpadu (yandu) yang merupakan suatu bentuk keterpaduan pelayanan kesehatan yang dilaksanakan di suatu wilayah kerja Puskesmas dengan penanggung jawabnya yaitu Kepala Desa. Tempat pelaksanaan pelayanan program terpadu di balai dusun, balai kelurahan, RW, dan sebagainya disebut dengan Pos pelayanan terpadu (Posyandu)'),(2,'Pengecekan Anak dan Balita','Kegiatan pengecekan bayi dan balita dilakukan sebulan sekali dimana kegiatan ini meliputi penimbangan anak dan balita, pemberian vaksin, pemberian vitamin, serta pengecekan kondisi gizi anak dan balita.'),(3,'Pengecekan Kondisi Ibu Hamil','Kegiatan pengecekan kondisi ibu hamil ini dilakukan satu bulan sekali dan kegiatan ini meliputi pengecekan kondisi janin yang sedang dikandung, pengecekan berat badan, serta pemberian vitamin untuk ibu hamil itu sendiri.'),(4,'Pendataan Sub-ppkbd','Kegiatan sub-ppkbd merupakan kegitan pendataan untuk seluruh warga rw.13 yang meliputi pendataan program KB, pendataan warga datang, warga pindah, ibu melahirkan, serta pendataan kematian dan perkawinan.'),(5,'Visi Posyandu Indonesia','Memberdayakan potensi masyarakat mampu dan memanfaatkan sumber daya alam untuk menciptakan kondisi hubungan/silaturahmi yang harmonis dan sinergi antara kelompok masyarakat mampu dengan masyarakat yang memerlukan bantuan dalam upaya mengurangi dan mengatasi masalah sosial yang ada di Indonesia demi persatuan, kesatuan dan kesejahteraan yang Adil Beradab dan selamat dunia akhirat bagi seluruh rakyat Indonesia.'),(6,'Misi Posyandu Indonesia','1. Membantu kelompok masyarakat miskin melalui upaya pemberdayaan masyarakat mampu.<br> 2. Menumbuhkan dan mengembangkan silaturahmi antara masyarakat mampu dengan masyarakat miskin melalui pelaksanaan program yang terdiri dari tujuh tahap secara berurutan. <br>3. Menyebarluaskan Misi seluas-luasnya kepada siapa saja, kapan saja dan dimana saja berada.');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (1,'JRD-0001','Ultra'),(2,'JRD-0002','Bedak'),(3,'JRD-0003','Susu'),(5,'JRD-0004','Ultrajaya'),(6,'JRD-0005','Ultrajaya'),(7,'JRD-0006','Ultrajaya'),(8,'JRD-0007','susu bendera'),(9,'JRD-0008','susu bendera'),(10,'JRD-0009','Ultrajaya'),(11,'JRD-0010','Ultrajaya'),(12,'JRD-0011','Ultrajaya'),(13,'JRD-0012','susu bendera'),(14,'JRD-0013','Ultrajaya');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datang`
--

DROP TABLE IF EXISTS `datang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Ks` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Datang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datang`
--

LOCK TABLES `datang` WRITE;
/*!40000 ALTER TABLE `datang` DISABLE KEYS */;
INSERT INTO `datang` VALUES ('DTG-00001','Sulaeman','2021-06-02',54,'Yanti','2021-06-10',49,'Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',3,2,2,1,'Ya','Tidak'),('DTG-00002','Ayi Hambali','2021-06-11',54,'Nia Kurnia','2021-06-17',21,'Jl. Orion','2','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',1,2,0,2,'Ya','Tidak'),('DTG-00003','Ayi Hambali','2021-06-09',54,'Nia Kurnia','2021-06-16',52,'Jl. Orion','3','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',1,2,1,0,'Ya','Tidak');
/*!40000 ALTER TABLE `datang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ibuhamil`
--

DROP TABLE IF EXISTS `ibuhamil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Provinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Kehamilan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ibuhamil`
--

LOCK TABLES `ibuhamil` WRITE;
/*!40000 ALTER TABLE `ibuhamil` DISABLE KEYS */;
INSERT INTO `ibuhamil` VALUES ('HML-0001','Supriyadi','2014-06-04',22,'Fitriyani','2021-06-14',20,1,'2021-06-22','1 Bulan','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat');
/*!40000 ALTER TABLE `ibuhamil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kawin`
--

DROP TABLE IF EXISTS `kawin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Provinsi_Istri` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Kawin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kawin`
--

LOCK TABLES `kawin` WRITE;
/*!40000 ALTER TABLE `kawin` DISABLE KEYS */;
INSERT INTO `kawin` VALUES ('KWN-00001','Azzam Siswanto','1995-06-19',22,'SMA','Karyawan Swasta','Kp. Cisalak rt 02 rw 022','02','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat ','Usi sulistiawati','2021-06-14',20,'SMA','Ibu Rumah Tangga','Kp Cisalak rt 02 rw 022','02','022','Kertajaya','Padalarang ','Bandung Barat','Jawa Barat');
/*!40000 ALTER TABLE `kawin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kematian`
--

DROP TABLE IF EXISTS `kematian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Penyebab` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Kematian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kematian`
--

LOCK TABLES `kematian` WRITE;
/*!40000 ALTER TABLE `kematian` DISABLE KEYS */;
INSERT INTO `kematian` VALUES ('KMT-00001','Yayan Abdullah','2021-06-03',65,'2021-06-02','Laki-Laki','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Sakit'),('KMT-00002','Agus Suhendar','2021-06-25',25,'2021-06-12','Laki-Laki','Jl. Orion','2','013','Kertajaya','Padalarang','Bandung Barat','Jawa Barat','Sakit');
/*!40000 ALTER TABLE `kematian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `melahirkan`
--

DROP TABLE IF EXISTS `melahirkan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Provinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Lahir`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `melahirkan`
--

LOCK TABLES `melahirkan` WRITE;
/*!40000 ALTER TABLE `melahirkan` DISABLE KEYS */;
INSERT INTO `melahirkan` VALUES ('LHR-00001','Muhammad Azmi',21,'Anandiya Putri',19,'Kp. Cisalak','003','022','Khadijah Putri','2021-06-09','Perempuan',1,'Kertajaya','Padalarang','Bandung Barat','Jawa Barat'),('LHR-00002','Sayyidina Hamzah',24,'Aulia Nur Fadillah',21,'Jl. Orion','4','013','Muhammad Fathurrahman','2021-06-24','Laki-Laki',1,'Kertajaya','Padalarang','Bandung Barat','Jawa Barat'),('LHR-00003','Muhammad Fajarudin Muawan',25,'Syahdillah Tasnia Awali',24,'Jl. Orion','3','013','Muhammad Miftah Muawan','2024-06-05','Laki-Laki',1,'Kertajaya','Padalarang','Bandung Barat','Jawa Barat');
/*!40000 ALTER TABLE `melahirkan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penduduk`
--

DROP TABLE IF EXISTS `penduduk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Provinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penduduk`
--

LOCK TABLES `penduduk` WRITE;
/*!40000 ALTER TABLE `penduduk` DISABLE KEYS */;
INSERT INTO `penduduk` VALUES ('3217082909720003','3217080605051319','Ayi Hambali','Laki-Laki','Bamdung','1972-09-29','Islam','SMA','-','Achjaenudin','Karyawan Swasta','WNI','Kepala Keluarga','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat'),('3217084311990004','3217080605051319','Syahdillah Tasnia Awali','Perempuan','Bandung','1999-11-03','Islam','SMA','Nia Kurnia','Ayi Hambali','Pelajar','WNI','Anak','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat'),('3217085308040007','3217080605051319','Gischa Sandrina Aulia','Perempuan','Bandung','2004-08-13','Islam','SMP','Nia Kurnia','Ayi Hambali','Pelajar','WNI','Anak','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat'),('3217085505760028','3217080605051319','Nia Kurnia','Perempuan','Bandung','1976-05-05','Islam','SMP','-','Udin','Ibu Rumah Tangga','WNI','Istri','Kp. Cisalak','003','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat');
/*!40000 ALTER TABLE `penduduk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pindah`
--

DROP TABLE IF EXISTS `pindah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Ks` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Pindah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pindah`
--

LOCK TABLES `pindah` WRITE;
/*!40000 ALTER TABLE `pindah` DISABLE KEYS */;
INSERT INTO `pindah` VALUES ('PDH-00001','Suswanto Wardoyo','1994-09-12',27,'Ani Murtini','1995-02-14',26,'Kp. Cisalak ','02','022','Kertajaya','Padalarang','Bandung Barat','Jawa Barat',1,2,0,1,'Ya','Tidak');
/*!40000 ALTER TABLE `pindah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `Id_Petugas` int(3) NOT NULL,
  `Nama_Petugas` varchar(50) NOT NULL,
  `Bagian` varchar(30) NOT NULL,
  `Foto` char(20) NOT NULL,
  `Tempat_Lahir` date NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin Posyandu'),(2,'Petugas Anak'),(3,'Petugas Ibu Hamil'),(4,'Petugas PKKBD');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timbangan`
--

DROP TABLE IF EXISTS `timbangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timbangan` (
  `Id_Timbangan` varchar(10) NOT NULL,
  `NIK` int(16) NOT NULL,
  `Berat_Badan` double NOT NULL,
  `Tinggi_Badan` double NOT NULL,
  `Tanggal_Timbang` date NOT NULL,
  `Id_Vitamin` varchar(10) NOT NULL,
  `Id_Vaksin` varchar(10) NOT NULL,
  `Hasil_Gizi` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Timbangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timbangan`
--

LOCK TABLES `timbangan` WRITE;
/*!40000 ALTER TABLE `timbangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `timbangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin Posyandu',1),(2,'anak','b7a1bef48e489643e1899eb7f7884b9b','Petugas Anak',2),(3,'ibu','bd4c70d40f7fa5421cfeefbd66b7fff6','Petugas Ibu Hamil',3),(4,'pkk','59164fab9d03cc63b28f409d928022a0','Petugas PKKBD',4);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaksin`
--

DROP TABLE IF EXISTS `vaksin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vaksin` (
  `Id_Vaksin` varchar(6) NOT NULL,
  `Nama_Vaksin` varchar(30) NOT NULL,
  `Usia_Wajib_Vaksin` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Vaksin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaksin`
--

LOCK TABLES `vaksin` WRITE;
/*!40000 ALTER TABLE `vaksin` DISABLE KEYS */;
INSERT INTO `vaksin` VALUES ('VK-001','Tidak Ada Pemberian','-'),('VK-002','BCG','1 Bulan'),('VK-003','DPT-1','1 Bulan'),('VK-004','DPT-2','2 Bulan'),('VK-005','DPT-3','3 Bulan'),('VK-006','Polio-1','1 Bulan'),('VK-007','Polio-2','2 Bulan'),('VK-008','Polio-3','3 Bulan'),('VK-009','Polio-4','4 Bulan'),('VK-010','MRI','9 Bulan'),('VK-011','Campak','9 Bulan');
/*!40000 ALTER TABLE `vaksin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vitamin`
--

DROP TABLE IF EXISTS `vitamin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vitamin` (
  `Id_Vitamin` varchar(7) NOT NULL,
  `Nama_Vitamin` varchar(30) NOT NULL,
  `Usia_Wajib_Vitamin` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Vitamin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vitamin`
--

LOCK TABLES `vitamin` WRITE;
/*!40000 ALTER TABLE `vitamin` DISABLE KEYS */;
INSERT INTO `vitamin` VALUES ('VIT-001','Tidak Ada Pemberian','-'),('VIT-002','A Merah','0 - 5 Tahun'),('VIT-003','A Biru','5 - 11 Tahun'),('VIT-004','A Biru','0 - 5 Tahun');
/*!40000 ALTER TABLE `vitamin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-26  8:25:36
