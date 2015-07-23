CREATE DATABASE  IF NOT EXISTS `jamm` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jamm`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: jamm
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `allergens`
--

DROP TABLE IF EXISTS `allergens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allergens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dairy` int(11) DEFAULT NULL COMMENT '\n	',
  `vegan_vegetarian` int(11) DEFAULT NULL,
  `gf` int(11) DEFAULT NULL,
  `peanuts` int(11) DEFAULT NULL,
  `other_nuts` int(11) DEFAULT NULL,
  `seafood` int(11) DEFAULT NULL,
  `eggs` int(11) DEFAULT NULL,
  `soy` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allergens`
--

LOCK TABLES `allergens` WRITE;
/*!40000 ALTER TABLE `allergens` DISABLE KEYS */;
/*!40000 ALTER TABLE `allergens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(11) DEFAULT NULL,
  `food_size` int(11) DEFAULT NULL,
  `pickup_date` datetime DEFAULT NULL,
  `special_instructions` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carts_users1_idx` (`user_id`),
  KEY `fk_carts_foods1_idx` (`food_id`),
  CONSTRAINT `fk_carts_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_foods1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chefs`
--

DROP TABLE IF EXISTS `chefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chefs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `kitchen_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `bio` text,
  `chef_picture_url` varchar(255) DEFAULT NULL,
  `restaurant_picture_url` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chefs`
--

LOCK TABLES `chefs` WRITE;
/*!40000 ALTER TABLE `chefs` DISABLE KEYS */;
INSERT INTO `chefs` VALUES (1,'Armand','hello',NULL,'armand@hi.com','5f4dcc3b5aa765d61d8327deb882cf99','9999999999','321 Happyville Ave','San Jose','CA','95132',NULL,NULL,NULL,'2015-07-22 14:08:29','2015-07-22 14:08:29',NULL,NULL),(2,'Mike','Lim',NULL,'mike@hi.com','5f4dcc3b5aa765d61d8327deb882cf99','7777777777','444 Delicious Ave','San Jose','CA','95132',NULL,NULL,NULL,'2015-07-22 15:38:22','2015-07-22 15:38:22',NULL,NULL),(3,'Anthony','Do',NULL,'anthony@hi.com','5f4dcc3b5aa765d61d8327deb882cf99','1234567899','323 Delicious Ave','San Jose','CA','95132',NULL,NULL,NULL,'2015-07-22 15:39:06','2015-07-22 15:39:06',NULL,NULL);
/*!40000 ALTER TABLE `chefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuisines`
--

DROP TABLE IF EXISTS `cuisines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuisines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuisines`
--

LOCK TABLES `cuisines` WRITE;
/*!40000 ALTER TABLE `cuisines` DISABLE KEYS */;
INSERT INTO `cuisines` VALUES (1,'American'),(2,'Chinese'),(3,'Korean'),(4,'Japanese'),(5,'Thai'),(6,'Cambodian'),(7,'Indian'),(8,'Malaysian'),(9,'Mexican'),(10,'French'),(11,'Italian'),(12,'Spanish'),(13,'Brazilian'),(14,'Peruvian'),(15,'Ethiopian'),(16,'Chilean'),(17,'Hawaiian');
/*!40000 ALTER TABLE `cuisines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `food_pic_url` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `chef_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_foods_chefs1_idx` (`chef_id`),
  KEY `fk_foods_cuisines1_idx` (`cuisine_id`),
  CONSTRAINT `fk_foods_chefs1` FOREIGN KEY (`chef_id`) REFERENCES `chefs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_foods_cuisines1` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods`
--

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
INSERT INTO `foods` VALUES (1,'Fried Rice','Yummy food','http://www.curtisstone.com/sites/default/files/recipe/03-012-A-Fried-Rice.jpg',NULL,NULL,1,2),(2,'Red Curry','Thai food yummy description','http://www.curtisstone.com/sites/default/files/recipe/03-012-A-Fried-Rice.jpg',NULL,NULL,2,5),(3,'Green Curry','Thai food yummy description','http://www.curtisstone.com/sites/default/files/recipe/03-012-A-Fried-Rice.jpg',NULL,NULL,3,5),(4,'Kimchi Fried Rice','Korean food yummy description','http://www.curtisstone.com/sites/default/files/recipe/03-012-A-Fried-Rice.jpg',NULL,NULL,2,3),(5,'Pasta','Italian food yummy description','http://www.curtisstone.com/sites/default/files/recipe/03-012-A-Fried-Rice.jpg',NULL,NULL,1,11);
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods_allergens`
--

DROP TABLE IF EXISTS `foods_allergens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods_allergens` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `allergen_id` int(11) NOT NULL,
  PRIMARY KEY (`allergen_id`,`id`),
  KEY `fk_foods_has_allergens_allergens1_idx` (`allergen_id`),
  KEY `fk_foods_has_allergens_foods1_idx` (`food_id`),
  CONSTRAINT `fk_foods_has_allergens_foods1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_foods_has_allergens_allergens1` FOREIGN KEY (`allergen_id`) REFERENCES `allergens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods_allergens`
--

LOCK TABLES `foods_allergens` WRITE;
/*!40000 ALTER TABLE `foods_allergens` DISABLE KEYS */;
/*!40000 ALTER TABLE `foods_allergens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(11) DEFAULT NULL COMMENT '			\n\n',
  `food_size` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `pickup_date` datetime DEFAULT NULL,
  `special_instructions` text,
  `fulfilled` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `udpated_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_users_idx` (`user_id`),
  KEY `fk_orders_foods1_idx` (`food_id`),
  CONSTRAINT `fk_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_foods1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_foods_has_sizes_sizes1_idx` (`size_id`),
  KEY `fk_foods_has_sizes_foods1_idx` (`food_id`),
  CONSTRAINT `fk_foods_has_sizes_foods1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_foods_has_sizes_sizes1` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prices`
--

LOCK TABLES `prices` WRITE;
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(11) DEFAULT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `chef_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_users1_idx` (`user_id`),
  KEY `fk_reviews_chefs1_idx` (`chef_id`),
  CONSTRAINT `fk_reviews_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reviews_chefs1` FOREIGN KEY (`chef_id`) REFERENCES `chefs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `small` varchar(45) DEFAULT NULL,
  `medium` varchar(45) DEFAULT NULL,
  `large` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `bio` text,
  `profile_pic_url` varchar(255) DEFAULT NULL,
  `allergies` text,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zip_code` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jennifer','Kim','5f4dcc3b5aa765d61d8327deb882cf99','jkim@hi.com','4444444444',NULL,NULL,NULL,'123 Delicious Ave','San Jose','CA','95132','2015-07-22 14:52:01','2015-07-22 14:52:01'),(2,'Manju','P','5f4dcc3b5aa765d61d8327deb882cf99','manju@hi.com','3333333333',NULL,NULL,NULL,'222 Delicious Ave','San Jose','CA','95132','2015-07-22 15:37:39','2015-07-22 15:37:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-22 18:25:24
