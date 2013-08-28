delimiter $$

CREATE DATABASE `timeline` /*!40100 DEFAULT CHARACTER SET utf8 */$$

CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(2) NOT NULL,
  `month` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8$$

