-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for auction
CREATE DATABASE IF NOT EXISTS `auction` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `auction`;

-- Dumping structure for table auction.auction
CREATE TABLE IF NOT EXISTS `auction` (
  `auction_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `starts_at` datetime NOT NULL,
  `expires_at` datetime NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `starting_price` double(10,2) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`auction_id`),
  KEY `fk_auction_category_id` (`category_id`),
  CONSTRAINT `fk_auction_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table auction.auction: ~2 rows (approximately)
/*!40000 ALTER TABLE `auction` DISABLE KEYS */;
INSERT INTO `auction` (`auction_id`, `created_at`, `starts_at`, `expires_at`, `category_id`, `starting_price`, `title`, `description`, `is_active`) VALUES
	(1, '2021-03-15 12:00:00', '2021-03-15 12:00:00', '2021-04-15 12:00:00', 3, 170.00, 'Painting', 'Some old painting', 1),
	(2, '2021-03-25 15:00:00', '2021-04-25 15:00:00', '2021-05-25 15:00:00', 2, 200.00, 'Coins', 'Set of old coins', 1);
/*!40000 ALTER TABLE `auction` ENABLE KEYS */;

-- Dumping structure for table auction.auction_view
CREATE TABLE IF NOT EXISTS `auction_view` (
  `auction_view_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `auction_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(24) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  PRIMARY KEY (`auction_view_id`),
  KEY `fk_auction_view_auction_id` (`auction_id`),
  CONSTRAINT `fk_auction_view_auction_id` FOREIGN KEY (`auction_id`) REFERENCES `auction` (`auction_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table auction.auction_view: ~11 rows (approximately)
/*!40000 ALTER TABLE `auction_view` DISABLE KEYS */;
INSERT INTO `auction_view` (`auction_view_id`, `created_at`, `auction_id`, `ip_address`, `user_agent`) VALUES
	(1, '2021-02-28 02:56:46', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36'),
	(2, '2021-02-26 00:54:39', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36'),
	(3, '2021-03-04 01:40:41', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36'),
	(4, '2021-03-06 12:23:12', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(5, '2021-03-06 12:23:17', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(6, '2021-03-10 01:14:08', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(7, '2021-03-14 22:18:13', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(8, '2021-03-14 22:18:20', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(9, '2021-03-14 22:19:01', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(10, '2021-03-14 22:19:03', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(11, '2021-03-14 22:19:28', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(12, '2021-03-14 22:22:06', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0'),
	(13, '2021-03-14 22:34:36', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0');
/*!40000 ALTER TABLE `auction_view` ENABLE KEYS */;

-- Dumping structure for table auction.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table auction.category: ~4 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_id`, `name`) VALUES
	(1, 'Antiques'),
	(3, 'Art'),
	(2, 'Numismatics'),
	(4, 'Some old things');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table auction.offer
CREATE TABLE IF NOT EXISTS `offer` (
  `offer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(10) unsigned NOT NULL,
  `auction_id` int(10) unsigned NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  PRIMARY KEY (`offer_id`),
  KEY `fk_offer_user_id` (`user_id`),
  KEY `fk_offer_auction_id` (`auction_id`),
  CONSTRAINT `fk_offer_auction_id` FOREIGN KEY (`auction_id`) REFERENCES `auction` (`auction_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_offer_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table auction.offer: ~3 rows (approximately)
/*!40000 ALTER TABLE `offer` DISABLE KEYS */;
INSERT INTO `offer` (`offer_id`, `created_at`, `user_id`, `auction_id`, `price`) VALUES
	(1, '2021-02-28 02:45:06', 1, 2, 250.00),
	(2, '2021-02-28 02:45:06', 3, 2, 300.00),
	(3, '2021-02-28 02:45:06', 1, 2, 350.00);
/*!40000 ALTER TABLE `offer` ENABLE KEYS */;

-- Dumping structure for table auction.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `forename` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password_hash` varchar(128) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table auction.user: ~3 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `forename`, `surname`, `username`, `password_hash`, `is_active`, `email`, `created_at`) VALUES
	(1, 'User', 'One', 'user_one', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0, 'userone@some-site.com', '2021-01-30 12:56:08'),
	(2, 'User', 'Two', 'user_two', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0, 'usertwo@some-site.com', '2021-01-30 12:57:49'),
	(3, 'User', 'Three', 'user_three', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0, 'userthree@some-site.com', '2021-02-17 21:50:30');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
