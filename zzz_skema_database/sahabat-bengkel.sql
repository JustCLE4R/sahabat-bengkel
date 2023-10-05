-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sahabat-bengkel
CREATE DATABASE IF NOT EXISTS `sahabat-bengkel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sahabat-bengkel`;

-- Dumping structure for table sahabat-bengkel.artikel
CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sahabat-bengkel.artikel: ~3 rows (approximately)
INSERT INTO `artikel` (`id`, `judul`, `isi`) VALUES
	(1, 'Sabirin Baik Budi', 'adalah sabirin yang sangat beban'),
	(4, 'Sabirin anak yang baik nan ramah', 'suatu hari ada anak yang bernama sabirin dan dia senang berkebun');

-- Dumping structure for table sahabat-bengkel.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ekstensi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sahabat-bengkel.galeri: ~0 rows (approximately)
INSERT INTO `galeri` (`id`, `nama`, `ekstensi`) VALUES
	(29, '651f2a3e7f39a', 'jpg'),
	(30, '651f2a3e7fd2e', 'jpg'),
	(31, '651f2a3e806f2', 'jpg'),
	(32, '651f2a3e81a12', 'jpg');

-- Dumping structure for table sahabat-bengkel.hubungi
CREATE TABLE IF NOT EXISTS `hubungi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `notel` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pesan` text COLLATE utf8mb4_general_ci,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Berisi data "hubungi kami"';

-- Dumping data for table sahabat-bengkel.hubungi: ~0 rows (approximately)
INSERT INTO `hubungi` (`id`, `nama`, `notel`, `email`, `pesan`, `created_at`) VALUES
	(18, 'Najwa Safira', '6289603372662', 'najwasaf99@gmail.com', 'Bang ada disana jual ban untuk Vario 125?', '2023-10-06');

-- Dumping structure for table sahabat-bengkel.klien
CREATE TABLE IF NOT EXISTS `klien` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `testimoni` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ekstensi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='data untuk testimoni';

-- Dumping data for table sahabat-bengkel.klien: ~0 rows (approximately)
INSERT INTO `klien` (`id`, `nama`, `testimoni`, `gambar`, `ekstensi`) VALUES
	(7, 'Dimas', 'mantab bang bisa beli NOS di bengkel ini', '651ef6335f3a7', 'jpg'),
	(8, 'Anjanath', 'Dapet teh botol geratis!!', '651ef6539bbdb', 'jpg'),
	(9, 'Dimas Yudistira', 'Okok lah', '651ef72590b5c', 'jpg'),
	(10, 'anjay gurinjay', 'mantab bang', '651f00e9f03e7', 'jpg');

-- Dumping structure for table sahabat-bengkel.onderdil
CREATE TABLE IF NOT EXISTS `onderdil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int NOT NULL,
  `status` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sahabat-bengkel.onderdil: ~0 rows (approximately)
INSERT INTO `onderdil` (`id`, `kode`, `kategori`, `nama`, `deskripsi`, `harga`, `status`) VALUES
	(1, 'HUJIKADFJKBJK789HSFG789', 'Ban', 'Dunlop', '80/90', 150000, 'Y'),
	(2, 'HUJKSDBJKSDFBJK67823HJK', 'Lampu', 'RTD', 'LED MO2D', 200000, 'Y'),
	(3, 'HUJIKADFJKBJK789HSFG789', 'Ban', 'Michelin', '90/80', 150000, 'Y'),
	(4, 'HUJKSDBJKSDFBJK67823HJK', 'Lampu', 'Philips', 'LED M2A', 200000, 'Y'),
	(5, 'HUJIKADFJKBJK789HSFG789', 'Ban', 'Swallow', '70/80', 150000, 'N'),
	(12, 'HBJKSGBJKFA78BJK2L3', 'Aksesoris', 'Gantungn Ginjal', 'FCK-69', 69000, 'N');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
