/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - uniska_latihan_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uniska_latihan_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `uniska_latihan_app`;

/*Table structure for table `gudang` */

DROP TABLE IF EXISTS `gudang`;

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gudang` varchar(100) NOT NULL,
  `lokasi_gudang` varchar(200) NOT NULL,
  `luas_gudang` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `gudang` */

insert  into `gudang`(`id`,`nama_gudang`,`lokasi_gudang`,`luas_gudang`) values 
(1,'Quibusdam nostrum li edit','Qui maxime itaque ad',550),
(3,'Laudantium ex repre','Accusantium et sapie',300);

/*Table structure for table `karyawan_gudang` */

DROP TABLE IF EXISTS `karyawan_gudang`;

CREATE TABLE `karyawan_gudang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(10) NOT NULL,
  `id_gudang` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `karyawan_gudang` */

insert  into `karyawan_gudang`(`id`,`nik`,`id_gudang`) values 
(0,'17',1),
(2,'87',3);

/*Table structure for table `tkaryawan` */

DROP TABLE IF EXISTS `tkaryawan`;

CREATE TABLE `tkaryawan` (
  `nik` char(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tkaryawan` */

insert  into `tkaryawan`(`nik`,`nama`,`tempat_lahir`,`tanggal_lahir`,`alamat`,`no_telepon`,`jabatan`,`status`) values 
('17','Eum aute commodi fac edit','Aute ratione consequ','2009-10-12','Voluptas sed similiq','Pariatur Es','Supervisor','Tetap'),
('55','Quae molestias ut no','Totam omnis harum te','2018-06-17','Et consequat Occaec','Ut labore ni','Operator','Tetap'),
('87','Adipisicing anim ten edit','Asperiores non repel','2018-01-15','Accusantium velit la','Sunt velit e','Operator','Outsourcing');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
