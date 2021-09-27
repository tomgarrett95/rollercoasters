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
  `img` varchar(255) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `inversions` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_rides_locations` FOREIGN KEY (`location`) REFERENCES `themeparks`(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `rides` (`id`, `name`, `location`, `img`, `height`, `inversions`) VALUES (1, 'Stealth', 1, 'stealth.jpg', 63, 0);
INSERT INTO `rides` (`id`, `name`, `location`, `img`, `height`, `inversions`) VALUES (2, 'Colossus', 1, 'colossus.png', 30, 10);
INSERT INTO `rides` (`id`, `name`, `location`, `img`, `height`, `inversions`) VALUES (3, 'Nemesis', 2, 'nemisis.jpg', 13, 4);
INSERT INTO `rides` (`id`, `name`, `location`, `img`, `height`, `inversions`) VALUES (4, 'The Smiler', 2, 'the-smiler.jpg', 30, 14);
INSERT INTO `rides` (`id`, `name`, `location`, `img`, `height`, `inversions`) VALUES (5, 'Black Mamba', 3, 'black-mamba.jpg', 26, 4);
INSERT INTO `rides` (`id`, `name`, `location`, `img`, `height`, `inversions`) VALUES (6, 'Wild West Mine Train', 4, 'wild-west-mine-train.jpg', 21, 0);