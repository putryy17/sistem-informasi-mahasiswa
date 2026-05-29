-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_mahasiswa
CREATE DATABASE IF NOT EXISTS `db_mahasiswa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_mahasiswa`;

-- Dumping structure for table db_mahasiswa.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `fakultas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mahasiswa.mahasiswa: ~11 rows (approximately)
INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`, `fakultas`) VALUES
	(1, '240170023', 'Yusra Putri Maulida', 'Teknik Informatika', 'Fakultas Teknik'),
	(2, '240410240', 'Putri Azela', 'Manajemen', 'Fakultas Ekonomi dan Bisnis'),
	(3, '240610015', 'Tafdhilla Mawaddah', 'Kedokteran', 'Fakultas Kedokteran'),
	(4, '240170109', 'Cut Aidila Safriana', 'Teknik Informatika', 'Fakultas Teknik'),
	(5, '240510133', 'Nasywa Difa Batuah', 'Hukum', 'Fakultas Hukum'),
	(6, '240170131', 'Hafizatunnisa', 'Teknik Informatika', 'Fakultas Teknik'),
	(7, '240210075', 'Mistahul Jannah', 'Administrasi Publik', 'Fakultas Ilmu Sosial dan Ilmu Politik'),
	(8, '240240068', 'M. Aditya Maulana', 'Ilmu Komunkasi', 'Fakultas Ilmu Sosial dan Ilmu Politik'),
	(9, '240620026', 'Iklima Ramadhani', 'Psikolog', 'Fakultas Kedokteran'),
	(12, '240170018', 'Nada Amal Ceria', 'Teknik Informatika', 'Fakultas Teknik');

-- Dumping structure for table db_mahasiswa.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mahasiswa.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(1, 'admin', 'admin123', 'admin'),
	(2, 'mahasiswa', 'user123', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
