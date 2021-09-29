# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: rollercoasterdb
# Generation Time: 2021-09-29 09:45:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table rides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rides`;

CREATE TABLE `rides` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `location` int(11) unsigned DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `inversions` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rides_locations` (`location`),
  CONSTRAINT `fk_rides_locations` FOREIGN KEY (`location`) REFERENCES `themeparks` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `rides` WRITE;
/*!40000 ALTER TABLE `rides` DISABLE KEYS */;

INSERT INTO `rides` (`id`, `name`, `location`, `img`, `height`, `inversions`)
VALUES
	(1,'Stealth',1,'stealth.png',62.5,0),
	(2,'Colossus',1,'colossus.png',30,10),
	(3,'Nemesis',2,'nemesis.jpeg',13,4),
	(4,'The Smiler',2,'the-smiler.jpeg',30,14),
	(5,'Black Mamba',3,'black-mamba.jpeg',26,4),
	(6,'Wild West Mine Train',4,'wild-west-mine-train.jpeg',21,0);

/*!40000 ALTER TABLE `rides` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table themeparks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `themeparks`;

CREATE TABLE `themeparks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `park` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `themeparks` WRITE;
/*!40000 ALTER TABLE `themeparks` DISABLE KEYS */;

INSERT INTO `themeparks` (`id`, `park`)
VALUES
	(1,'Thorpe Park, UK'),
	(2,'Alton Towers, UK'),
	(3,'Phantasialand, GER'),
	(4,'Ocean Park, HK');

/*!40000 ALTER TABLE `themeparks` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
