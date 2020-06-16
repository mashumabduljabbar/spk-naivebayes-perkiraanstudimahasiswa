-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table naivebayes.naivebayes
CREATE TABLE IF NOT EXISTS `naivebayes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `status_kerja` varchar(100) DEFAULT NULL,
  `status_pernikahan` varchar(100) DEFAULT NULL,
  `ipk` varchar(50) DEFAULT NULL,
  `status_kelulusan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table naivebayes.naivebayes: ~20 rows (approximately)
/*!40000 ALTER TABLE `naivebayes` DISABLE KEYS */;
INSERT INTO `naivebayes` (`id`, `jenis_kelamin`, `status_kerja`, `status_pernikahan`, `ipk`, `status_kelulusan`) VALUES
	(1, 'Pria', 'Mahasiswa', 'Belum', '3.17', 'Tepat'),
	(2, 'Pria', 'Bekerja', 'Belum', '3.30', 'Tepat'),
	(3, 'Wanita', 'Mahasiswa', 'Belum', '3.01', 'Tepat'),
	(4, 'Waninta', 'Mahasiswa', 'Menikah', '3.25', 'Tepat'),
	(5, 'Pria', 'Mahasiswa', 'Belum', '3.17', 'Terlambat'),
	(6, 'Pria', 'Bekerja', 'Belum', '3.30', 'Terlambat'),
	(7, 'Wanita', 'Mahasiswa', 'Belum', '3.01', 'Terlambat'),
	(8, 'Wanita', 'Mahasiswa', 'Menikah', '3.35', 'Terlambat'),
	(9, 'Waninta', 'Bekerja', 'Menikah', '3.45', 'Tepat'),
	(10, 'Pria', 'Mahasiswa', 'Menikah', '3.25', 'Terlambat'),
	(11, 'Wanita', 'Bekerja', 'Menikah', '3.75', 'Tepat'),
	(12, 'Wanita', 'Mahasiswa', 'Menikah', '3.55', 'Terlambat'),
	(13, 'Pria', 'Mahasiswa', 'Belum', '3.17', 'Terlambat'),
	(14, 'Pria', 'Bekerja', 'Belum', '3.30', 'Terlambat'),
	(15, 'Wanita', 'Mahasiswa', 'Belum', '3.01', 'Terlambat'),
	(16, 'Wanita', 'Mahasiswa', 'Menikah', '3.35', 'Terlambat'),
	(17, 'Waninta', 'Bekerja', 'Menikah', '3.45', 'Tepat'),
	(18, 'Pria', 'Mahasiswa', 'Menikah', '3.25', 'Terlambat'),
	(19, 'Wanita', 'Bekerja', 'Menikah', '3.75', 'Tepat'),
	(20, 'Wanita', 'Mahasiswa', 'Menikah', '3.55', 'Terlambat');
/*!40000 ALTER TABLE `naivebayes` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
