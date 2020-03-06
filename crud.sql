/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.6-MariaDB : Database - crud
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crud`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `articleId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `articleTitle` varchar(200) DEFAULT NULL,
  `articleContent` varchar(200) DEFAULT NULL,
  `articleDate` timestamp NULL DEFAULT NULL,
  `articleCategoryId` tinyint(10) unsigned NOT NULL,
  PRIMARY KEY (`articleId`),
  KEY `articleCategoryId` (`articleCategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `article` */

insert  into `article`(`articleId`,`articleTitle`,`articleContent`,`articleDate`,`articleCategoryId`) values 
(1,'tutorial php','programming','2020-02-28 11:37:59',1),
(2,'dasar php','programming','2020-02-28 11:45:41',1),
(3,'dasar html','programming','2020-02-28 11:46:00',2),
(4,'dasar python','programming','2020-02-28 11:46:18',3),
(5,'php','pemrograman','2020-02-28 14:11:23',1),
(6,'framework','pemrograman','2020-02-28 14:13:28',1),
(7,'c++','programming','2020-02-28 14:14:43',1),
(10,'tutorial html','pemrograman',NULL,2),
(11,'tutorial html','pemrograman',NULL,2),
(12,'sepak bola','olahraga',NULL,7);

/*Table structure for table `article_category` */

DROP TABLE IF EXISTS `article_category`;

CREATE TABLE `article_category` (
  `categoryId` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `article_category` */

insert  into `article_category`(`categoryId`,`categoryName`) values 
(1,'php'),
(2,'html'),
(3,'python'),
(4,'html'),
(5,'html'),
(6,'C'),
(7,'HOBI');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
