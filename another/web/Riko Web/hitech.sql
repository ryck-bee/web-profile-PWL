/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.35-MariaDB : Database - hitech
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hitech` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hitech`;

/*Table structure for table `tb_content` */

DROP TABLE IF EXISTS `tb_content`;

CREATE TABLE `tb_content` (
  `id_content` int(11) NOT NULL AUTO_INCREMENT,
  `nama_content` varchar(50) NOT NULL,
  `desc_content` varchar(50) NOT NULL,
  `gmb_content` varchar(50) NOT NULL,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_content` */

insert  into `tb_content`(`id_content`,`nama_content`,`desc_content`,`gmb_content`) values 
(1,'Asus Chromebook Flip','Laptop','Asus-Chromebook-Flip-laptop-terbaik-2020.jpg'),
(2,'Huawei Mat','Laptop','huawei-matebook-13.jpg'),
(3,'Microsoft ','Laptop','Microsoft-surface-book-2.jpg'),
(4,'MacBook su','Laptop','MacBook-surface-Pro-laptop-terbaik-2020.jpg'),
(5,'Google Pixel 4 XL','Phone','YpT2iEa44Z7YJpykheCKw3-650-80.jpg'),
(6,'Samsung Galaxy S20 Series','Phone','Galaxy-S20.jpg'),
(7,'iPhone 11 Pro Max','Phone','AndroidPIT-iPhone11promax.jpg'),
(8,'Huawei Mate 30 Pro','Phone','Huawei-Mate-30-Pro-hardware.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
