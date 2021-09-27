DROP TABLE IF EXISTS `themeparks`;

CREATE TABLE `themeparks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `themeparks` (`id`, `name`) VALUES (1, 'Thorpe Park, UK');
INSERT INTO `themeparks` (`id`, `name`) VALUES (2, 'Alton Towers, UK');
INSERT INTO `themeparks` (`id`, `name`) VALUES (3, 'Phantasialand, GER');
INSERT INTO `themeparks` (`id`, `name`) VALUES (4, 'Ocean Park, HK');

DROP TABLE IF EXISTS `rides`;

CREATE TABLE `rides` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `location` int(11) unsigned DEFAULT NULL,
  `height` int(11) unsigned DEFAULT NULL,
  `inversions` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_rides_locations` FOREIGN KEY (`location`) REFERENCES `themeparks`(`id`),
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `themeparks` (`id`, `name`, `location`, `height`, `inversions`) VALUES (1, 'Stealth', 1, 1);
INSERT INTO `themeparks` (`id`, `name`, `location`, `height`, `inversions`) VALUES (2, 'Colossus', 1, 4);
INSERT INTO `themeparks` (`id`, `name`, `location`, `height`, `inversions`) VALUES (3, 'Nemesis', 2, 2);
INSERT INTO `themeparks` (`id`, `name`, `location`, `height`, `inversions`) VALUES (4, 'The Smiler', 2, 2);
INSERT INTO `themeparks` (`id`, `name`, `location`, `height`, `inversions`) VALUES (5, 'Black Mamba', 3, 2);
INSERT INTO `themeparks` (`id`, `name`, `location`, `height`, `inversions`) VALUES (6, 'Wild West Mine Train', 4, 21, );




