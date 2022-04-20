/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - coffe_shop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`coffe_shop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `coffe_shop`;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` tinytext,
  `current_time` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `booking` */

insert  into `booking`(`id`,`first_name`,`last_name`,`date`,`time`,`phone`,`message`,`current_time`) values 
(1,'adad','adad','0000-00-00','12:00am','12121','dadad',NULL),
(2,'amit','pandey','0000-00-00','12','121','adada','0000-00-00 00:00:00.000000'),
(3,'amit','pandey','0000-00-00','12','121','adada','0000-00-00 00:00:00.000000'),
(4,'daad','adada','0000-00-00','1:30am','2121','adda',NULL),
(5,'dadada','adadad','5/19/2021','1:00am','11211','dadada',NULL),
(6,'dadada','adada','5/25/2021','1:30am','121','dadada',NULL),
(7,'dada','adad','5/25/2021','dada','ad','adada',NULL),
(8,'dadad','adadadaad','5/19/2021','1:30am','1212','dadad',NULL),
(9,'suraj','gupta','5/17/2021','1:30am','121','dadad',NULL),
(10,'suraj','pandey','5/4/2021','12:00am','121','adadad',NULL),
(11,'suraj','adadad','5/4/2021','12:00am','121','adadad',NULL),
(12,'rahul','roy','5/25/2021','1:30am','121','dada',NULL),
(13,'dada','dada','5/18/2021','12:00am','12121','dadada',NULL),
(14,'ada','adad','5/18/2021','12:00am','12121','adada',NULL),
(15,'dada','adad','5/19/2021','12:00am','121212','dadada',NULL);

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `Images` varchar(20) DEFAULT NULL,
  `product_id` int(20) DEFAULT NULL,
  `qty` int(20) DEFAULT '1',
  `total_cost` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `message` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`id`,`name`,`email`,`subject`,`message`) values 
(1,'Amit','amit@gmail','Services','Good'),
(2,'Namrata','namu@gmail.com','TEchnical','ok'),
(3,'kjakjd','adad','adad','ada'),
(4,'dad','adad','adad','adada'),
(5,'dad','adcaca','dadaw','adaw'),
(6,'dad','adawa','adawd','adaw');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone no` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`id`,`email`,`password`,`name`,`phone no`,`address`,`role`) values 
(1,'namu','namu123','Namrata Jaiswar','7977590206','Kandivali','Manager');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `Images` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`id`,`name`,`description`,`cost`,`type`,`Images`) values 
(1,'SANDWICH','A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between','500','main dish','img11.jpg'),
(2,'CAKE','A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between','450','main dish','img23.jpg'),
(3,'BURGER','A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between','700','main dish','img15.jpg'),
(4,'PESTIE','A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between','250','main dish','img10.jpg'),
(5,'GRILLED','A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between','450','main dish','img13.jpg'),
(6,'SUBWAY','(NUA sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or betw','800','main dish','img30.jpg'),
(7,'LEMONADE JUICE','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','450','drinks','drink-1.jpg'),
(8,'PINEAPPLE JUICE','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','700','drinks','drink-2.jpg'),
(9,'SODA DRINKS','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','900','drinks','drink-3.jpg'),
(10,'COKE','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','800','drinks','drink-4.jpg'),
(11,'WIne','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','1250','drinks','drink-5.jpg'),
(12,'BEER','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','750','drinks','drink-6.jpg'),
(13,'HOT CAKE HONEY','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','800','desert','dessert-1.jpg'),
(14,'SWEETS','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','200','desert','dessert-2.jpg'),
(15,'STRAWBERRY','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','100','desert','dessert-3.jpg'),
(16,'PESTIE','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','450','desert','dessert-4.jpg'),
(17,'WHITE SOS','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','350','desert','dessert-5.jpg'),
(18,'SWEET','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia','980','desert','dessert-6.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
