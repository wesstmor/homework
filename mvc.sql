CREATE DATABASE  IF NOT EXISTS 'mvc';
USE 'mvc';
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
LOCK TABLES `messages` WRITE;
INSERT INTO `messages` VALUES (1,'Test','test@test.com','Test message');
UNLOCK TABLES;
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text,
  `is_published` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
LOCK TABLES `pages` WRITE;
INSERT INTO `pages` VALUES (1,'about','About Us','Test content',1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(45) NOT NULL DEFAULT 'admin',
  `password` char(32) NOT NULL,
  `is_active` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'admin','admin@your-site.com','admin','44ca5fa5c67e434b9e779c5febc46f06',1);
UNLOCK TABLES;
