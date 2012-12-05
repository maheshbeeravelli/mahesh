/*
SQLyog Enterprise - MySQL GUI v6.5
MySQL - 5.1.41 : Database - example_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

create database if not exists `example_db`;

USE `example_db`;

/*Table structure for table `example_table` */

DROP TABLE IF EXISTS `example_table`;

CREATE TABLE `example_table` (
  `request` varchar(50) NOT NULL,
  `response` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `example_table` */

insert  into `example_table`(`request`,`response`) values ('help','This is the help section.'),('hi','hello. '),('good night','sweet dreams');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
