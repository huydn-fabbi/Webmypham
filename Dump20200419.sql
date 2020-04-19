-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: mypham
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `blog_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Sunt.','Nemo in dolorem velit.','/uploads/blogs/3/1.png','Nobis error.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(2,'Aut.','Rem odit dolorem rerum aut.','/uploads/blogs/3/1.png','Ad impedit.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(3,'Quis.','Aspernatur qui enim qui.','/uploads/blogs/3/1.png','Mollitia.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(4,'Et.','Hic eum et enim.','/uploads/blogs/3/1.png','Eos assumenda.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(5,'Aut.','Dolore dolore incidunt dolor.','/uploads/blogs/3/1.png','Maxime.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(6,'Quia ut.','Fugiat quo est voluptate.','/uploads/blogs/3/1.png','Error enim.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(7,'Magnam.','Non id sint eos provident et.','/uploads/blogs/3/1.png','Repellat quia.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(8,'Et ut.','Iusto quis dolorum et iste.','/uploads/blogs/3/1.png','Sit quisquam.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(9,'Quod.','Nostrum aut enim dolorem sit.','/uploads/blogs/3/1.png','Non voluptatum.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(10,'Sed ut.','Saepe qui voluptas odio cum.','/uploads/blogs/3/1.png','Dolor.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(11,'Ex.','Temporibus enim rem et.','/uploads/blogs/3/1.png','Molestias.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(12,'Esse.','Incidunt illum in ratione ut.','/uploads/blogs/3/1.png','Tempore.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(13,'Velit.','Id qui ab dicta eius.','/uploads/blogs/3/1.png','Consequatur.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(14,'Sed non.','Fuga molestiae amet expedita.','/uploads/blogs/3/1.png','Quos eum est.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(15,'At ut.','Quidem enim quam itaque.','/uploads/blogs/3/1.png','Unde et.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(16,'Ab.','Ad facere et quia ut est.','/uploads/blogs/3/1.png','Perferendis.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(17,'Cum.','Sit neque autem labore.','/uploads/blogs/3/1.png','Est illum.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(18,'Quia et.','Quia modi asperiores eum et.','/uploads/blogs/3/1.png','Fugit quos.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(19,'Magni.','Sapiente aut et earum eum.','/uploads/blogs/3/1.png','Impedit omnis.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08'),(20,'Vitae.','Architecto ullam fuga at.','/uploads/blogs/3/1.png','Quae.',3,'2020-03-25 02:15:08','2020-03-25 02:15:08');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brand_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Soluta.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(2,'Et enim.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(3,'Ut at et.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(4,'Adipisci.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(5,'Dolorem.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(6,'Sit non.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(7,'Saepe.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(8,'Beatae.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(9,'A ducimus.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(10,'Provident.','2020-03-19 02:32:01','2020-03-19 02:32:01');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Son','2020-03-19 02:32:01','2020-04-19 08:05:54'),(2,'Kem Dưỡng Da','2020-03-19 02:32:01','2020-04-19 08:06:11'),(3,'Mặt Nạ','2020-03-19 02:32:01','2020-04-19 08:06:19'),(4,'Enim aut.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(5,'Eius.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(6,'Et sit.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(7,'Aut.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(8,'Itaque.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(9,'Rerum.','2020-03-19 02:32:01','2020-03-19 02:32:01'),(10,'Vero.','2020-03-19 02:32:01','2020-03-19 02:32:01');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_paths`
--

DROP TABLE IF EXISTS `image_paths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_paths` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `image_type` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_paths`
--

LOCK TABLES `image_paths` WRITE;
/*!40000 ALTER TABLE `image_paths` DISABLE KEYS */;
INSERT INTO `image_paths` VALUES (1,1,1,'Ratione.','/uploads/products/1/QPbD7PRCeSxFzNqRbCWvuEvsH5C3WNSTE80TjHZg.png','2020-04-19 07:32:31','2020-04-19 07:32:31'),(2,1,1,'Ratione.','/uploads/products/1/O9GrwrB41HOMZ9G78ZpYM9cEe6QGAADMlhJhoC07.jpeg','2020-04-19 07:37:03','2020-04-19 07:37:03'),(3,1,1,'Ratione.','/uploads/products/1/RvMEWtd4GYUgOIWcvkMW5e7FL9IvMZqsgzAaLxnG.jpeg','2020-04-19 07:37:03','2020-04-19 07:37:03'),(4,2,1,'Sed.','/uploads/products/2/fKLGRW0RdyYNYKyrlDPsVK17oWZGZfJ8D3YDdWiT.jpeg','2020-04-19 07:37:27','2020-04-19 07:37:27'),(5,2,1,'Sed.','/uploads/products/2/5popxwsNTGl0xdt9f6N2Y8p65hfdIhLuBgs6ZdEM.jpeg','2020-04-19 07:37:27','2020-04-19 07:37:27'),(6,2,1,'Sed.','/uploads/products/2/fW5DEY0iRjNKSku7Lu5DLPtXaJ7cyuvRXAc8zBnr.jpeg','2020-04-19 07:37:27','2020-04-19 07:37:27'),(7,3,1,'Et.','/uploads/products/3/CR9w0y0Dmpe1zzv4TFB9mhY6wfU8YdrPgi5r0uVP.jpeg','2020-04-19 07:39:17','2020-04-19 07:39:17'),(8,3,1,'Et.','/uploads/products/3/XRoteguQnCjxUsLGHj1p5mow5ukZga4j2oiEDyke.jpeg','2020-04-19 07:39:17','2020-04-19 07:39:17'),(9,3,1,'Et.','/uploads/products/3/Lshh1atro1BaeKYHOIFBaTzYlnaKXalS6XTHxTMK.jpeg','2020-04-19 07:39:17','2020-04-19 07:39:17'),(10,4,1,'Maiores.','/uploads/products/4/mbFkyK7yJ5CzIEpik1Ym8pq5C1JYEzMJiwGqgLWG.jpeg','2020-04-19 07:39:38','2020-04-19 07:39:38'),(11,4,1,'Maiores.','/uploads/products/4/ZqLoBM7ttQqsfP2togEenI0rhiVHT9bSB10jQXUo.jpeg','2020-04-19 07:39:38','2020-04-19 07:39:38'),(12,4,1,'Maiores.','/uploads/products/4/6cNxy7S4jwFRsNycxHtRqSRFSN4LIO1c7rkRThLs.jpeg','2020-04-19 07:39:38','2020-04-19 07:39:38'),(13,5,1,'Molestiae.','/uploads/products/5/Of6rkpOhk7xfBE3xLXIATw4RtUiXD8mJooKO22WD.jpeg','2020-04-19 07:40:20','2020-04-19 07:40:20'),(14,5,1,'Molestiae.','/uploads/products/5/liYwT9BTYmSm32wSpbnXEODHWierI4Izb6SvMykD.jpeg','2020-04-19 07:40:20','2020-04-19 07:40:20'),(15,5,1,'Molestiae.','/uploads/products/5/whkbQpZXTa3OrDgbPETouQh63eGIKnEc7SN2B34s.jpeg','2020-04-19 07:40:20','2020-04-19 07:40:20'),(16,6,1,'Adipisci.','/uploads/products/6/x9MPTdxniEcea58PbgkxdjdPJ1LtPWRnP4u7EExm.jpeg','2020-04-19 07:41:08','2020-04-19 07:41:08'),(17,6,1,'Adipisci.','/uploads/products/6/bxSaLMrXK7OLNAH7OZge8OLwrbYsdzDbtBlEUgB8.jpeg','2020-04-19 07:41:08','2020-04-19 07:41:08'),(18,6,1,'Adipisci.','/uploads/products/6/XKx3zZLJzuUYIppw1g47YQpMhQG5FjrAcq4hDPuT.jpeg','2020-04-19 07:41:08','2020-04-19 07:41:08'),(19,7,1,'Non illum.','/uploads/products/7/YjpmwiFqkwOyWcXcXZHhL6tftmVJTLqNAfH6V8GD.jpeg','2020-04-19 07:41:21','2020-04-19 07:41:21'),(20,7,1,'Non illum.','/uploads/products/7/Z1Ux07JFdZIwgXQLjC0Ja15dgUFjf5dfqR7dIuBf.jpeg','2020-04-19 07:41:22','2020-04-19 07:41:22'),(21,7,1,'Non illum.','/uploads/products/7/y6MCs8Iao1FLX7C7UWWBNuOfOzs9kGJqeqeukMvz.jpeg','2020-04-19 07:41:22','2020-04-19 07:41:22'),(22,8,1,'Ipsum.','/uploads/products/8/fU6xJqp6d56h4ZxLDLKaLURicd3UR9Dh5eIGb6XW.jpeg','2020-04-19 07:41:48','2020-04-19 07:41:48'),(23,8,1,'Ipsum.','/uploads/products/8/iC5IDquZfUPPzOHsHaHTqdwiChcj7vPRE6JX3osR.jpeg','2020-04-19 07:41:48','2020-04-19 07:41:48'),(24,8,1,'Ipsum.','/uploads/products/8/COTYVeqV40ysIh5WdKzbxi9z2EyTWKEnm0wb5Wce.jpeg','2020-04-19 07:41:48','2020-04-19 07:41:48'),(25,9,1,'Voluptas.','/uploads/products/9/KifzN1rutJh1gib8H4pAFOGosbelPv2EeIFISLYO.jpeg','2020-04-19 07:41:57','2020-04-19 07:41:57'),(26,9,1,'Voluptas.','/uploads/products/9/JdoBoDz91R8vmB4SCJjr2JbMuiXeeHsNt1ZVRUQL.jpeg','2020-04-19 07:41:57','2020-04-19 07:41:57'),(27,9,1,'Voluptas.','/uploads/products/9/veTijlgqGtgjD1n1eKjaGM2quRSWCJXahfPpHDDz.jpeg','2020-04-19 07:41:57','2020-04-19 07:41:57'),(30,10,1,'Nemo.','/uploads/products/10/y33xZzNqL1yhdyg1ldyDkn8KzBX7PIHwxLuVxaWW.jpeg','2020-04-19 07:42:04','2020-04-19 07:42:04'),(31,11,1,'Animi aut.','/uploads/products/11/IHvG3zWrmO2Kk3u205kNBoUdgx3VCkj4uxprpvNY.jpeg','2020-04-19 07:42:27','2020-04-19 07:42:27'),(32,11,1,'Animi aut.','/uploads/products/11/cws3WaExG0fCdZ0qMZvkWqZ6BS8e4pFy5p3p7s3k.jpeg','2020-04-19 07:42:27','2020-04-19 07:42:27'),(33,11,1,'Animi aut.','/uploads/products/11/eZltJEnnTenAXhyQqzFuyFuEM6N04dvZ0TbVJDZF.jpeg','2020-04-19 07:42:27','2020-04-19 07:42:27'),(37,13,1,'Aut.','/uploads/products/13/Za0CFzaq9vxj6vgkFKXzNBn0fLmGXtY5JpGGO6aC.jpeg','2020-04-19 07:43:01','2020-04-19 07:43:01'),(38,13,1,'Aut.','/uploads/products/13/dm7Y5i7MVqYjQeDPTPRv9DJp8a3EKLQ0FH15BbkP.jpeg','2020-04-19 07:43:01','2020-04-19 07:43:01'),(39,13,1,'Aut.','/uploads/products/13/VZfY4Qs345DjExqg3KfBKBjsXtrAMMlHYLWyGoun.jpeg','2020-04-19 07:43:01','2020-04-19 07:43:01'),(40,14,1,'Voluptate.','/uploads/products/14/CdxuSEQBtrG1yffNjSZ5bNIjbh3UfvwYPZNpJ3KA.jpeg','2020-04-19 07:43:14','2020-04-19 07:43:14'),(41,14,1,'Voluptate.','/uploads/products/14/RPZ3hYhArMuBm5RxBKAiEBC68MwuCnzBAUf6cJii.jpeg','2020-04-19 07:43:14','2020-04-19 07:43:14'),(42,14,1,'Voluptate.','/uploads/products/14/5PB1c6ihsd3D0acb54Yf3CnHjrmNYY8SNsZxJrfH.jpeg','2020-04-19 07:43:14','2020-04-19 07:43:14'),(43,15,1,'Aliquam.','/uploads/products/15/vGufxcL2ubqnY2u8Jj0e2WcT32o3STnFvlIRus51.jpeg','2020-04-19 07:43:28','2020-04-19 07:43:28'),(44,15,1,'Aliquam.','/uploads/products/15/KslF8qIh4nX2aS8MzA44AuJSXSa54qqW7BOwogLH.jpeg','2020-04-19 07:43:28','2020-04-19 07:43:28'),(45,15,1,'Aliquam.','/uploads/products/15/8J0m14MjRi8BpxpmR1eNGJnkPO3uqwykiaXRSowP.jpeg','2020-04-19 07:43:28','2020-04-19 07:43:28'),(46,16,1,'Fuga.','/uploads/products/16/zgtRF4LMccGjDh4TB1DJ4pjcZ4CZfqBh3t5Bxr9r.jpeg','2020-04-19 07:43:51','2020-04-19 07:43:51'),(47,16,1,'Fuga.','/uploads/products/16/5c2nRi1UIHfQwNPEkJRMwJnaPYoA5UF9RhTtbJAh.jpeg','2020-04-19 07:43:51','2020-04-19 07:43:51'),(48,16,1,'Fuga.','/uploads/products/16/9Z0rQsFjQp3lWj9h2KRTIwQkFh3x8fAgWPDntXXQ.jpeg','2020-04-19 07:43:51','2020-04-19 07:43:51'),(49,17,1,'Officia.','/uploads/products/17/JHo2akt3ZADNdmLz8h80QcfqLmVPB9XTdevMuzib.jpeg','2020-04-19 07:43:58','2020-04-19 07:43:58'),(50,17,1,'Officia.','/uploads/products/17/lKrvAZco736jgs6AEA1Anqi9HNA5AXpSObMx6jba.jpeg','2020-04-19 07:43:58','2020-04-19 07:43:58'),(51,17,1,'Officia.','/uploads/products/17/0sHy2iUYbqbb9I7L0wMZQjISRtjcg0FOY9TnpI6Z.jpeg','2020-04-19 07:43:58','2020-04-19 07:43:58'),(52,18,1,'Qui et.','/uploads/products/18/vhyn3iXejfYZWAGohfFhqzjCS9KTe5RacEZYO5RI.jpeg','2020-04-19 07:44:05','2020-04-19 07:44:05'),(53,18,1,'Qui et.','/uploads/products/18/o0d3cId1zEx4cUTHNz6JxirTiWD93L31P2eoHLY3.jpeg','2020-04-19 07:44:05','2020-04-19 07:44:05'),(54,18,1,'Qui et.','/uploads/products/18/t7ijsHmyvegNqLxF6v3sW4KQTIWTgi5AYhFuTRis.jpeg','2020-04-19 07:44:05','2020-04-19 07:44:05'),(55,19,1,'Alias est.','/uploads/products/19/vuDI5v9tLFVw0X3KDzTaAGqWEKncl8rnY9yBJtSc.jpeg','2020-04-19 07:44:17','2020-04-19 07:44:17'),(56,19,1,'Alias est.','/uploads/products/19/Mk05IQ4pYnABwVVBmYHmaf5YyfucNMpZ2O7Kac74.jpeg','2020-04-19 07:44:17','2020-04-19 07:44:17'),(57,19,1,'Alias est.','/uploads/products/19/oPZXi35W43otx7vBwhAVYJF22H0LbAFyIZkGlDyi.jpeg','2020-04-19 07:44:17','2020-04-19 07:44:17'),(58,20,1,'Ducimus.','/uploads/products/20/ygMhYC9LEKh9Cp7c9tHFrPXQD6UoEgWWDfcuWpUe.jpeg','2020-04-19 07:44:27','2020-04-19 07:44:27'),(59,20,1,'Ducimus.','/uploads/products/20/l1RndY1mRDUC9ICiCzw1PUdTMWHXkm2thfdD7YtE.jpeg','2020-04-19 07:44:27','2020-04-19 07:44:27'),(60,20,1,'Ducimus.','/uploads/products/20/Bi1ypcA16ECsxIBHZuyVJs3udp9MfF5Tsnwq8dZE.jpeg','2020-04-19 07:44:27','2020-04-19 07:44:27'),(61,21,1,'Ullam eum.','/uploads/products/21/FWSvQFEXmVZcF3cRwCba1yDXw5a2g8kj199RhOio.jpeg','2020-04-19 07:51:48','2020-04-19 07:51:48'),(62,21,1,'Ullam eum.','/uploads/products/21/SMWGC7FEJZCdgH69JqgWBGwqVwKelEaIhMAVTt1r.jpeg','2020-04-19 07:51:48','2020-04-19 07:51:48'),(63,21,1,'Ullam eum.','/uploads/products/21/c0WOAFzsk8YKcIFwygVFtQTQuvs3QEwVFjROvJAw.jpeg','2020-04-19 07:51:48','2020-04-19 07:51:48'),(64,22,1,'Cum aut.','/uploads/products/22/JEeq4FNUnZSpZfJR8r40SDdyR8mfDAf7szPECHzK.jpeg','2020-04-19 07:51:58','2020-04-19 07:51:58'),(65,22,1,'Cum aut.','/uploads/products/22/onP8qVI71BgfR03LARvJAuNbtdmToOza6fsP3Hj0.jpeg','2020-04-19 07:51:58','2020-04-19 07:51:58'),(66,22,1,'Cum aut.','/uploads/products/22/HGJFcNgihHZrjcMtxHZKXEO9MBaVrLQ7mz9JJd5b.jpeg','2020-04-19 07:51:58','2020-04-19 07:51:58'),(67,23,1,'Deserunt.','/uploads/products/23/XjBjsQLz1CqKnnBoiXApbadt9xvT79L1JI0P4KND.jpeg','2020-04-19 07:52:15','2020-04-19 07:52:15'),(68,23,1,'Deserunt.','/uploads/products/23/8N2lWGiwSVRc0xaXINZsekhYkQNC2qzXSFpjMVtu.jpeg','2020-04-19 07:52:15','2020-04-19 07:52:15'),(69,23,1,'Deserunt.','/uploads/products/23/F4vqdp26XHsnji4HlQndUoqTsns0G4rDOgIkv8LY.jpeg','2020-04-19 07:52:15','2020-04-19 07:52:15'),(70,24,1,'Ducimus.','/uploads/products/24/JGBoWgzR6L31aNybRMTftSJ8ZkHA3QscKEkIBXQo.jpeg','2020-04-19 07:52:28','2020-04-19 07:52:28'),(71,24,1,'Ducimus.','/uploads/products/24/1lwMMHggxQ4FkIVI6KH0qder06CblbW9t012ksuM.jpeg','2020-04-19 07:52:28','2020-04-19 07:52:28'),(72,24,1,'Ducimus.','/uploads/products/24/DUivKRf49onSL0PF6QQgwGytMyOcRjoVbw0z6Edc.jpeg','2020-04-19 07:52:28','2020-04-19 07:52:28'),(73,25,1,'Quidem.','/uploads/products/25/VmMiPKnQIDbjsvhX40FtLZMFo3SGU3HzSJIziwOI.jpeg','2020-04-19 07:52:42','2020-04-19 07:52:42'),(74,25,1,'Quidem.','/uploads/products/25/l0smoj6ZkaXOoSuJ24jtty9Z7dQflP7rzlJ6pnI4.jpeg','2020-04-19 07:52:42','2020-04-19 07:52:42'),(75,25,1,'Quidem.','/uploads/products/25/atU5YPsIu2hkXiy58gDsAXzASrqGzkcoE7Ze7lQk.jpeg','2020-04-19 07:52:42','2020-04-19 07:52:42'),(76,26,1,'Tempore.','/uploads/products/26/oB8oSphaFNKpodVylG4SaCvXKZnAauvwebfyPfOA.jpeg','2020-04-19 07:52:53','2020-04-19 07:52:53'),(77,26,1,'Tempore.','/uploads/products/26/HrGa3Jq14vPQcpH5T33g3DXpRf5Cpy1HSB6P5wJR.jpeg','2020-04-19 07:52:53','2020-04-19 07:52:53'),(78,26,1,'Tempore.','/uploads/products/26/aaQ3WTTLScXaqudk9zznrBc4oyx6PTv9oP7GWBS3.jpeg','2020-04-19 07:52:53','2020-04-19 07:52:53'),(79,27,1,'Quia.','/uploads/products/27/5RkS4J1uQzHM3zp55YXGJa5Hb6vfzk9aLgKc4ljE.jpeg','2020-04-19 07:53:02','2020-04-19 07:53:02'),(80,27,1,'Quia.','/uploads/products/27/HidSwRstqx73UiUAOHNb9Ci8oAjwyvY4Mz85QrZF.jpeg','2020-04-19 07:53:02','2020-04-19 07:53:02'),(81,27,1,'Quia.','/uploads/products/27/gtBMbmfntzP8OW2o37QyGyqaZlnda3muSsU5hyEp.jpeg','2020-04-19 07:53:02','2020-04-19 07:53:02'),(82,28,1,'Assumenda.','/uploads/products/28/ivNjb3CcKXHwZ2YZQ52YbOPOZUytrpXD5xRzvh87.jpeg','2020-04-19 07:53:11','2020-04-19 07:53:11'),(83,28,1,'Assumenda.','/uploads/products/28/Do7oizm0fhTYhCojrUiiRptxYMgdyIQgFaZyaK1U.jpeg','2020-04-19 07:53:11','2020-04-19 07:53:11'),(84,28,1,'Assumenda.','/uploads/products/28/akZhw6sF4n5okVLXxaDPqBpWEDzIsThnclbMsY6t.jpeg','2020-04-19 07:53:11','2020-04-19 07:53:11'),(85,29,1,'Facilis.','/uploads/products/29/EgZznJCJxPPJrJuSERa2nMsv77IWtv1Jya5cc3WP.jpeg','2020-04-19 07:53:26','2020-04-19 07:53:26'),(86,29,1,'Facilis.','/uploads/products/29/3v4UG81KKAgwXTlAaMBwRhMqfkeXgtwPrB2yJBpl.jpeg','2020-04-19 07:53:26','2020-04-19 07:53:26'),(87,29,1,'Facilis.','/uploads/products/29/6T11JkSuojrZnRlhFTtc1Udf9MLPmqA0woWz4brT.jpeg','2020-04-19 07:53:26','2020-04-19 07:53:26'),(89,30,1,'Quia.','/uploads/products/30/AUPWTHimHTnpFVa2mOWCchIMaGIlmG2n11bsiSa4.jpeg','2020-04-19 07:53:35','2020-04-19 07:53:35'),(90,30,1,'Quia.','/uploads/products/30/d7hWZVdRfFHHD4U5hKUSAhXza78HJg2ZtVtq6xV9.jpeg','2020-04-19 07:53:35','2020-04-19 07:53:35'),(91,30,1,'Quia.','/uploads/products/30/DxxEpdEEze7B3pgPqTuzz1KhjKWbWbpsyR1IY3s0.jpeg','2020-04-19 07:54:33','2020-04-19 07:54:33'),(94,31,1,'Neque.','/uploads/products/31/FX82gri2h3EpHTA9ZeAVKKg7Mn4DVfD4ziwq7ERu.jpeg','2020-04-19 07:55:20','2020-04-19 07:55:20'),(95,31,1,'Neque.','/uploads/products/31/GcoHm4WsK5HfqO2q94xqSWVyziMOMUL8ejXz3Rvg.jpeg','2020-04-19 07:56:11','2020-04-19 07:56:11'),(96,31,1,'Neque.','/uploads/products/31/6NIPHh5cmN138uaxFot2c4wb446MhgeZT3WHERmm.jpeg','2020-04-19 07:56:11','2020-04-19 07:56:11'),(97,32,1,'Nesciunt.','/uploads/products/32/UOj37O38VW6vwATwnpvj8KkR3QWG2o0sxKbtMrTF.jpeg','2020-04-19 07:59:30','2020-04-19 07:59:30'),(98,32,1,'Nesciunt.','/uploads/products/32/Co5vB1kxFkcLVLEAye3ZhGih9fCcc4nlskdN9Bqk.jpeg','2020-04-19 07:59:30','2020-04-19 07:59:30'),(99,32,1,'Nesciunt.','/uploads/products/32/T1u1RqqFJpuLBVp7TgHqOc5iQKYClezSACPzoXFI.jpeg','2020-04-19 07:59:30','2020-04-19 07:59:30'),(100,33,1,'Beatae ut.','/uploads/products/33/2Y961z0dT0JgyDlaCWD4flYXaLFVcdab6KciJJR2.jpeg','2020-04-19 07:59:43','2020-04-19 07:59:43'),(101,33,1,'Beatae ut.','/uploads/products/33/idXUvFTTpOQkNVgT2LGY0rOYc04PCpuomOVCPHyi.jpeg','2020-04-19 07:59:43','2020-04-19 07:59:43'),(102,33,1,'Beatae ut.','/uploads/products/33/DQTEenaAWsuPrshpCPPaISlvKURiFsCAazaZ1Kxo.jpeg','2020-04-19 07:59:43','2020-04-19 07:59:43'),(103,34,1,'Explicabo.','/uploads/products/34/tVUl0pOQA4FF3eInVH5Q3tovcAHT3eBXzG1eYn8o.jpeg','2020-04-19 08:00:00','2020-04-19 08:00:00'),(104,34,1,'Explicabo.','/uploads/products/34/XcgaZx9lQNezM57D9fz8SSYvKzkhpR3Vly8gL1Mx.jpeg','2020-04-19 08:00:00','2020-04-19 08:00:00'),(105,34,1,'Explicabo.','/uploads/products/34/tfTTydDSM82gyAxksWNfWduKSI0zH8INbyp1aaFd.jpeg','2020-04-19 08:00:00','2020-04-19 08:00:00'),(106,35,1,'Dolor.','/uploads/products/35/IE3Jf9p53GRLfhFfofo72aFC3lYS8OvnTS2EEZ7S.jpeg','2020-04-19 08:00:07','2020-04-19 08:00:07'),(107,35,1,'Dolor.','/uploads/products/35/ajgR94IpSW5dlbmWlBuRke98sMEU6hnSJySWzuLd.jpeg','2020-04-19 08:00:07','2020-04-19 08:00:07'),(108,35,1,'Dolor.','/uploads/products/35/ei6GesoasBH9TGDuxDICXsbbm6rQV8bLDxS2I9W0.jpeg','2020-04-19 08:00:07','2020-04-19 08:00:07'),(109,36,1,'Illo sit.','/uploads/products/36/TD1bKax0Fbzy0rCY9JkwBYjuUYaglMGAeoaxL8Wy.jpeg','2020-04-19 08:00:17','2020-04-19 08:00:17'),(110,36,1,'Illo sit.','/uploads/products/36/vgNiRlyGWebjbdTBzCnkO2Gu3nJUpofcQbpXSSkd.jpeg','2020-04-19 08:00:17','2020-04-19 08:00:17'),(111,36,1,'Illo sit.','/uploads/products/36/MGa0kaznIWc30rx86bSyUrScmRNmnsISeANDKiLm.jpeg','2020-04-19 08:00:17','2020-04-19 08:00:17'),(112,37,1,'Sit et.','/uploads/products/37/1kmKvt17tGOAeQsTDGPWm4EB2QOp2NYrlzgFJ2ZW.jpeg','2020-04-19 08:01:29','2020-04-19 08:01:29'),(113,37,1,'Sit et.','/uploads/products/37/zOcQQ6TZuF9oaPROTKVrZz1MLEYDm59zx3lnCpzz.jpeg','2020-04-19 08:01:29','2020-04-19 08:01:29'),(114,37,1,'Sit et.','/uploads/products/37/XvaSKyBR19Um3CaBzSGWLFX9B3oTpBbypMz95TX2.jpeg','2020-04-19 08:01:29','2020-04-19 08:01:29'),(115,38,1,'Iure.','/uploads/products/38/GqeerREGqgMhGztiVOzSrit5PULUC8VEx9EdNt6u.jpeg','2020-04-19 08:01:36','2020-04-19 08:01:36'),(116,38,1,'Iure.','/uploads/products/38/Gjp9iBs8RsW6bAt1nfEziVZEmbveVfW50LgxMYqZ.jpeg','2020-04-19 08:01:36','2020-04-19 08:01:36'),(117,38,1,'Iure.','/uploads/products/38/ZpeIRmg5RRKv1NxlLzdzPVYsIa2banyRnzS3SHre.jpeg','2020-04-19 08:01:36','2020-04-19 08:01:36'),(118,39,1,'Dolorum.','/uploads/products/39/eY55GBfk5ajpbefy93LgcmBnH3T70YfcUmYgpCsB.jpeg','2020-04-19 08:01:50','2020-04-19 08:01:50'),(119,39,1,'Dolorum.','/uploads/products/39/wmkyTizDOOWFkzCMNOUkXK7Gy7Oi1pyKARPyjIj1.jpeg','2020-04-19 08:01:50','2020-04-19 08:01:50'),(120,39,1,'Dolorum.','/uploads/products/39/nHkFiMjS8t0MmgbWIQiYP7hxnZnCG1RrL8eRZ7zd.jpeg','2020-04-19 08:01:50','2020-04-19 08:01:50'),(121,40,1,'Quia a.','/uploads/products/40/iwynAemYAydIC9xmrATAseaodlitEmANOVNA1kmi.jpeg','2020-04-19 08:02:04','2020-04-19 08:02:04'),(122,40,1,'Quia a.','/uploads/products/40/YGBcpOdhZQORxbr50qhNhTXkjgei2XWwlHQ2U2EJ.jpeg','2020-04-19 08:02:04','2020-04-19 08:02:04'),(123,40,1,'Quia a.','/uploads/products/40/MpA61GdSJ0xVmHxTYud4yyXIdiaLUGoxLYmf94e5.jpeg','2020-04-19 08:02:04','2020-04-19 08:02:04'),(124,41,1,'Iure.','/uploads/products/41/SUYbXOeVHwdDlbwhmFmG8KvvadaNxMmUaFMtXjcg.jpeg','2020-04-19 08:02:44','2020-04-19 08:02:44'),(125,41,1,'Iure.','/uploads/products/41/500bO50QCS2n3pftqxMVbZeq1v0IlAxe5Ro0BaAc.jpeg','2020-04-19 08:02:44','2020-04-19 08:02:44'),(126,41,1,'Iure.','/uploads/products/41/ubpkbjZyu6H20J4mQfCO5DjNlOZzKVT7x5roxOek.jpeg','2020-04-19 08:02:44','2020-04-19 08:02:44'),(127,42,1,'Quos.','/uploads/products/42/azcVAmZnlRrjCMJvgWrrCdb6wl8AsRk6J74uOB4L.jpeg','2020-04-19 08:02:52','2020-04-19 08:02:52'),(128,42,1,'Quos.','/uploads/products/42/XcCbYgofp1ZA8i0uYHcFxhXvW7QohzpFSxFwzWTH.jpeg','2020-04-19 08:02:52','2020-04-19 08:02:52'),(129,42,1,'Quos.','/uploads/products/42/WLPrqOjaHQQtiYArlLHXOBDXKtmPXB9y7W9lDNkE.jpeg','2020-04-19 08:02:52','2020-04-19 08:02:52'),(130,43,1,'Repellat.','/uploads/products/43/zgzsWDYPVgf8RsVIvHyDFcE5WWLjTZW1X7Jz3AH7.jpeg','2020-04-19 08:03:06','2020-04-19 08:03:06'),(131,43,1,'Repellat.','/uploads/products/43/XrElNFi54jOyEPdI0qTIqXrgCL4TdcEDdvONLXks.jpeg','2020-04-19 08:03:06','2020-04-19 08:03:06'),(132,43,1,'Repellat.','/uploads/products/43/Pa12sXkEMd3zMAdMgR0CoWZGCJzaVkxXRZtEY5B3.jpeg','2020-04-19 08:03:06','2020-04-19 08:03:06'),(133,44,1,'Quibusdam.','/uploads/products/44/LUCb0xwVe36pCU6W0fNGlkvAXCqjuxTFiB42YUFC.jpeg','2020-04-19 08:03:15','2020-04-19 08:03:15'),(134,44,1,'Quibusdam.','/uploads/products/44/oVZyPf7DU69og6vfQts0GuwFWjAISa3NK4jgomFl.jpeg','2020-04-19 08:03:15','2020-04-19 08:03:15'),(135,44,1,'Quibusdam.','/uploads/products/44/r6jPeID4fDORMtwCD9pMCjHvnoy5FST5mTjuwkVM.jpeg','2020-04-19 08:03:16','2020-04-19 08:03:16'),(136,45,1,'Eaque qui.','/uploads/products/45/iqv6KFqcNNwODzW9EfezjQF1PGAhLPyThuE9vpAV.jpeg','2020-04-19 08:03:25','2020-04-19 08:03:25'),(137,45,1,'Eaque qui.','/uploads/products/45/GGQFOZTeaufMQjqlNwuajx0Ccg6zvzg0NrMThwFr.jpeg','2020-04-19 08:03:25','2020-04-19 08:03:25'),(138,45,1,'Eaque qui.','/uploads/products/45/FdXARPsHKoTzN5vr8eMExfouVtUigaXEh4lBD4YM.jpeg','2020-04-19 08:03:25','2020-04-19 08:03:25'),(139,46,1,'In.','/uploads/products/46/G7kq1SofYj767lNrI1mdygMS7CrdgIuFueNenwAm.jpeg','2020-04-19 08:03:42','2020-04-19 08:03:42'),(140,46,1,'In.','/uploads/products/46/OtUlJ2VFxlSXkNGJmU03ALqUWtHAUFHejQHTySvH.jpeg','2020-04-19 08:03:42','2020-04-19 08:03:42'),(141,46,1,'In.','/uploads/products/46/kyQci5OF4VfvSNvx39ia4dJdNIDPTqFAqBAclCLn.jpeg','2020-04-19 08:03:42','2020-04-19 08:03:42'),(142,47,1,'Sed neque.','/uploads/products/47/ZEmHQ3D4MNSPTqBWdv1b2pUyec3K0WwJjLunsB25.jpeg','2020-04-19 08:04:00','2020-04-19 08:04:00'),(143,47,1,'Sed neque.','/uploads/products/47/OuiZt5rAkcwSo8kVQgRoe4ipvL7MqJsTrxIlYJza.jpeg','2020-04-19 08:04:00','2020-04-19 08:04:00'),(144,47,1,'Sed neque.','/uploads/products/47/bAnlvYxgX5PZL2DUlWN9rANrJyD71xC7W0vYeIld.jpeg','2020-04-19 08:04:00','2020-04-19 08:04:00'),(145,48,1,'Cum sit.','/uploads/products/48/Kxr1bzqVGGk9TVk4aqPIICuJ1yEi5MLYK4s5DxXU.jpeg','2020-04-19 08:04:08','2020-04-19 08:04:08'),(146,48,1,'Cum sit.','/uploads/products/48/RsZNAadAyhW4OlCy9xxjHLfehZSSXOv4szbjJ2db.jpeg','2020-04-19 08:04:08','2020-04-19 08:04:08'),(147,48,1,'Cum sit.','/uploads/products/48/hLEhxm8AAwkzyU2maJcNa3rl4lfTSv0B7GX4qMuT.jpeg','2020-04-19 08:04:08','2020-04-19 08:04:08'),(148,49,1,'Unde.','/uploads/products/49/5HfXpAenjVknn4NQMxxb17NFUKZUdAvLNyxdXye4.jpeg','2020-04-19 08:04:14','2020-04-19 08:04:14'),(149,49,1,'Unde.','/uploads/products/49/12d4gdHR7Sjtle9onXortN9f5FcZsyrSDtk9uxTY.jpeg','2020-04-19 08:04:14','2020-04-19 08:04:14'),(150,49,1,'Unde.','/uploads/products/49/DBe8JXNAsSgdiItUxsVB8CqIYRD1oz6owxo1xvCR.jpeg','2020-04-19 08:04:14','2020-04-19 08:04:14'),(151,50,1,'Repellat.','/uploads/products/50/wYv23e3XilUH0eITvtdk8JQQuoE8U1kRRCOU6OEp.jpeg','2020-04-19 08:04:20','2020-04-19 08:04:20'),(152,50,1,'Repellat.','/uploads/products/50/g5DYH6Hu3UukNYjTk47sCHbywxl9iXRHj7zXJiXr.jpeg','2020-04-19 08:04:20','2020-04-19 08:04:20'),(153,50,1,'Repellat.','/uploads/products/50/aCXCAbuduhr7Rc2PAiv8snqpoZiO09UU9XPLMtNu.jpeg','2020-04-19 08:04:28','2020-04-19 08:04:28'),(154,10,1,'Nemo.','/uploads/products/10/7bbUyP3xiUkJ5GNo2gw9IIYHoJk8f4ZVeo61KkaZ.jpeg','2020-04-19 08:14:24','2020-04-19 08:14:24'),(155,10,1,'Nemo.','/uploads/products/10/MNtithKZKPyOw5SgluKoQjsQ3FXimnD3xCyFKhbP.jpeg','2020-04-19 08:14:46','2020-04-19 08:14:46'),(156,12,1,'Et.','/uploads/products/12/Y1w7pPcvy6Fn4fnRvdQ9HeP0NVhgxWW0ndp2tWnX.jpeg','2020-04-19 08:15:08','2020-04-19 08:15:08'),(157,12,1,'Et.','/uploads/products/12/GxWYUmRrLIiOLEfgCZybqa0OlkPHg5lvdSDYcuJj.jpeg','2020-04-19 08:15:27','2020-04-19 08:15:27'),(158,12,1,'Et.','/uploads/products/12/jejGjiXedxsNdcad231jfhQjp4NaPuSSLGEiqqBi.jpeg','2020-04-19 08:15:27','2020-04-19 08:15:27');
/*!40000 ALTER TABLE `image_paths` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_01_30_134614_create_promotions_table',1),(4,'2020_01_30_134615_create_brands_table',1),(5,'2020_01_30_134616_create_categories_table',1),(6,'2020_01_30_134617_create_products_table',1),(7,'2020_01_30_154927_create_blogs_table',1),(8,'2020_01_30_155103_create_comments_table',1),(9,'2020_01_30_155149_create_orders_table',1),(10,'2020_01_30_155245_create_contacts_table',1),(11,'2020_01_30_155320_create_banners_table',1),(12,'2020_01_30_155356_create_order_details_table',1),(13,'2020_02_03_154113_create_image_paths_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `order_detail_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quanity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,1,75000,1,10,'2020-04-17 19:31:42','2020-04-17 19:31:42'),(2,2,128000,1,1,'2020-04-17 19:31:42','2020-04-17 19:31:42'),(3,1,35000,2,7,'2020-04-17 20:26:08','2020-04-17 20:26:08'),(4,2,102000,2,15,'2020-04-17 20:26:08','2020-04-17 20:26:08'),(5,3,192000,2,1,'2020-04-17 20:26:08','2020-04-17 20:26:08'),(6,1,75000,3,10,'2020-04-17 20:27:46','2020-04-17 20:27:46'),(7,2,7000,4,7,'2020-04-19 06:38:33','2020-04-19 06:38:33'),(8,1,64000,4,1,'2020-04-19 06:38:33','2020-04-19 06:38:33');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_order` datetime NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'2020-04-18 00:00:00',203000,'cash','aaaaaaaaa',2,3,'2020-04-17 19:31:42','2020-04-17 20:22:45'),(2,'2020-04-18 00:00:00',329000,'cash',NULL,1,2,'2020-04-17 20:26:08','2020-04-17 20:26:08'),(3,'2020-04-18 03:27:46',75000,'cash',NULL,2,1,'2020-04-17 20:27:46','2020-04-19 07:23:18'),(4,'2020-04-19 13:38:33',71000,'cash','nice',1,35,'2020-04-19 06:38:33','2020-04-19 06:38:33');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `brand_id` int(10) unsigned DEFAULT NULL,
  `promotion_id` int(10) unsigned DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `product_type` int(11) NOT NULL,
  `product_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,8,5,0,'Ratione.','Earum impedit sequi assumenda quo sit nihil.','Qui dignissimos molestiae modi unde magnam. Veniam eum delectus omnis harum sed amet adipisci. Doloribus optio earum occaecati molestias magni.',64000,3,32,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(2,8,4,4,'Sed.','<p>Suscipit eaque quia pariatur nulla alias.</p>','<p>Adipisci qui sunt suscipit harum maiores. Explicabo commodi velit iure odio omnis earum. Blanditiis voluptatem quo rerum aut sint. Est ut aspernatur qui quis sit sunt deserunt.</p>',7000,1,7,'2020-03-19 02:32:01','2020-04-19 08:12:13'),(3,7,9,0,'Et.','Quia nesciunt eveniet modi velit velit.','Voluptas maxime et a voluptas et. Est laborum quia aliquid cum voluptas ut tempora. Perspiciatis cumque vero eaque sequi temporibus occaecati. Ut qui ratione qui sapiente nihil et nihil.',67000,1,8,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(4,5,2,7,'Maiores.','Atque architecto vel nam et quo id minus.','Repellendus ad iusto voluptates ut cupiditate et. Reprehenderit nisi veniam ratione itaque. Suscipit inventore impedit quis doloribus ab voluptatem.',87000,1,0,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(5,7,1,0,'Molestiae.','Eaque quia nemo facilis.','Ut consequatur distinctio ipsam ut laborum. Nobis similique possimus debitis. Quod enim suscipit sit et inventore.',28000,2,40,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(6,9,4,8,'Adipisci.','Quia doloribus numquam adipisci est a nisi.','Eaque vel tempora eum in. Libero hic impedit magni non. Et iusto quas nobis molestiae. Et blanditiis ipsa est corrupti.',33000,2,34,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(7,8,5,2,'Non illum.','Harum eligendi at esse inventore reiciendis vero.','Tempore nobis dignissimos dolorem et. Sint fuga aliquam in ab sed. Esse voluptatem et suscipit molestiae. Commodi quaerat dolorem asperiores iste. Possimus nihil ea fugiat quia.',35000,3,35,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(8,5,4,0,'Ipsum.','Veniam distinctio esse ut quaerat.','Eveniet temporibus aut quibusdam ipsam. Nihil non culpa consequuntur. Illo enim et quasi. Eos quisquam inventore dolore.',8000,1,46,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(9,9,1,7,'Voluptas.','<p>Reiciendis dolore aut occaecati eaque aliquid.</p>','<p>A beatae culpa fugit sunt quo sed. Et esse ut qui dolor. Inventore sit quasi ipsa rerum voluptas. Ut beatae eum doloribus at.</p>',3000,1,30,'2020-03-19 02:32:01','2020-04-19 08:12:25'),(10,8,2,0,'Nemo.','Ut a et ea.','Unde nostrum quo fugiat voluptatum totam. Mollitia officiis delectus dolor ipsam nobis. Ad vitae voluptas incidunt quae et voluptas doloribus.',75000,3,32,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(11,5,7,5,'Animi aut.','Sed officiis et officiis sunt.','Veniam tenetur iusto et labore nostrum. Maxime rem molestiae voluptas quas veritatis. Quisquam numquam eum sint repellendus provident.',77000,1,20,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(12,8,4,10,'Et.','Sit facilis vitae porro minus est impedit.','Voluptas sit culpa nam et quas veniam. Impedit ut vero voluptatem rerum. Illo laudantium suscipit eum consequatur ipsam. Rerum ipsum et quam inventore repudiandae vero qui quo.',44000,3,36,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(13,7,3,9,'Aut.','<p>Illum et architecto voluptas voluptas corrupti.</p>','<p>Illo veniam animi placeat sed voluptatem iure. Omnis vel voluptatibus ea. Illum ab eum suscipit repellat laudantium eius nihil quae. Molestias et et voluptas vero et dolores.</p>',88000,2,1,'2020-03-19 02:32:01','2020-04-19 08:13:03'),(14,9,2,0,'Voluptate.','Placeat laboriosam cupiditate quas.','Nemo ex velit minus. Ut inventore autem consequatur dolores. Optio sit rerum eos dignissimos ut est.',61000,1,50,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(15,8,5,4,'Aliquam.','Quia voluptatem est cum.','Iste error qui neque quod at deserunt ut ea. Quidem placeat possimus aut maxime ab ut iusto quo. Omnis est similique odit. Odio nulla voluptatem voluptas qui molestiae est quis.',51000,3,38,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(16,10,9,0,'Fuga.','Quibusdam est enim dolore aut reiciendis.','Non neque ea quidem. Totam id quos nobis error vero dolore consequatur. Aut ipsa adipisci vitae et quos. Aliquam similique cupiditate rerum et.',76000,1,4,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(17,9,1,0,'Officia.','Omnis ex sint dignissimos consequatur.','Voluptas omnis quia sit suscipit similique. Sint fugit sapiente ea eos excepturi ipsum. Sit aut laudantium nesciunt porro voluptate qui nihil.',92000,2,40,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(18,10,6,7,'Qui et.','<p>Excepturi excepturi et culpa voluptatem quos.</p>','<p>Optio placeat quibusdam non ut ex ut. Quas provident veniam est. Consequatur consequatur velit voluptate omnis quod. Optio repellat non iusto et debitis.</p>',56000,2,35,'2020-03-19 02:32:01','2020-04-19 08:13:20'),(19,5,2,0,'Alias est.','Repellat optio quas maiores amet ipsum magnam.','Rerum molestias eos temporibus eius. Fuga eaque aperiam earum omnis est autem. Sint deleniti quibusdam soluta ut soluta dolorem. Enim quos autem inventore enim qui aliquam.',31000,1,10,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(20,8,1,0,'Ducimus.','Et quos qui dicta qui quasi consequatur.','Necessitatibus ipsum nihil quibusdam quae necessitatibus incidunt laudantium cum. Nihil rem quos beatae vel. Non voluptas repellat laborum dolore.',47000,3,50,'2020-03-19 02:32:01','2020-03-19 02:32:01'),(21,1,4,0,'Ullam eum.','<p>Et qui autem voluptas qui.</p>','<p>Quis repellat dolor rerum mollitia quibusdam. Sit fuga et autem deleniti. Voluptatem asperiores quidem autem impedit dolores adipisci. Nemo ea in soluta.</p>',75000,1,38,'2020-03-19 02:32:01','2020-04-19 08:08:12'),(22,1,1,4,'Cum aut.','<p>Nisi velit nulla et.</p>','<p>Officiis iure ea dolorem quia. Nulla laboriosam est ullam earum est ipsum sit. Explicabo et modi voluptatem corrupti.</p>',81000,3,34,'2020-03-19 02:32:01','2020-04-19 08:08:16'),(23,1,8,2,'Deserunt.','<p>Necessitatibus voluptas quae facere vitae.</p>','<p>Voluptas suscipit qui nulla molestiae cum illo neque. Sed vitae omnis fuga sed. Et sed et fuga nihil ut minus.</p>',12000,3,21,'2020-03-19 02:32:01','2020-04-19 08:08:19'),(24,1,8,0,'Ducimus.','<p>Cupiditate sequi et aut qui enim dolor.</p>','<p>Corporis distinctio laudantium consequatur officiis. Et alias quia sed numquam ullam omnis aut. Consequatur quia sit voluptatem vel reiciendis. Est odit autem cupiditate culpa voluptas.</p>',28000,2,3,'2020-03-19 02:32:01','2020-04-19 08:08:22'),(25,1,7,0,'Quidem.','<p>Et et molestias dolorem eligendi expedita.</p>','<p>Et nostrum et et earum inventore. In architecto vel nisi ipsum aut ut necessitatibus. Dolorem facilis quos aliquam autem nulla impedit. Dignissimos et enim unde et ratione.</p>',11000,2,47,'2020-03-19 02:32:01','2020-04-19 08:08:26'),(26,1,3,5,'Tempore.','<p>Veniam ad perferendis qui odio ad.</p>','<p>Aut dolorum dolore sed ullam. Ullam ad et odio aperiam possimus. Velit iusto numquam nesciunt neque a et sed amet. Qui ab porro laborum.</p>',84000,3,23,'2020-03-19 02:32:01','2020-04-19 08:08:30'),(27,1,7,0,'Quia.','<p>Rerum debitis rem voluptatibus sit nisi sint.</p>','<p>Sapiente rerum maxime ut rem quia et dolore. Ab non autem dolorum. Itaque et vel architecto expedita ipsa.</p>',16000,2,48,'2020-03-19 02:32:01','2020-04-19 08:08:34'),(28,1,4,3,'Assumenda.','<p>Iure in quibusdam nam vitae harum.</p>','<p>Repellendus velit explicabo quo sed ab ut consequatur libero. Adipisci aspernatur nam a quis. Aut sit labore velit dolorem.</p>',53000,1,7,'2020-03-19 02:32:01','2020-04-19 08:08:38'),(29,1,6,0,'Facilis.','<p>Qui sapiente et dicta qui.</p>','<p>Et neque ad eveniet ad ad at. Quo natus nemo consectetur doloremque maxime. Unde nulla doloribus voluptatem et. Sed quisquam mollitia rerum dolor tempora vel soluta.</p>',85000,3,42,'2020-03-19 02:32:01','2020-04-19 08:08:42'),(30,1,8,8,'Quia.','<p>Totam quae mollitia rerum velit possimus est.</p>','<p>Aut est dolorum qui exercitationem. Eveniet repellendus odit ipsam eos. Fugit nihil vel quisquam. Ipsam et omnis possimus sint quis ipsum autem.</p>',92000,3,9,'2020-03-19 02:32:01','2020-04-19 08:08:47'),(31,2,2,2,'Neque.','<p>Eos ratione numquam similique tempora.</p>','<p>Libero architecto tempore nam veniam. Consequatur dolorum porro totam iusto excepturi error et. Provident consequatur quia dolor eum eum.</p>',60000,2,10,'2020-03-19 02:32:01','2020-04-19 08:10:09'),(32,2,8,1,'Nesciunt.','<p>Omnis earum et corrupti culpa.</p>','<p>Sed nihil unde ut animi consequatur harum autem. Ex illum non est deleniti aliquid voluptas.</p>',53000,1,46,'2020-03-19 02:32:01','2020-04-19 08:10:05'),(33,2,8,2,'Beatae ut.','<p>Ratione ex enim sint est aperiam excepturi minus.</p>','<p>Sunt sequi dicta quas neque quisquam cumque eligendi et. Quis aspernatur possimus illo quia quidem magni soluta. Nihil ut sit hic omnis.</p>',43000,2,9,'2020-03-19 02:32:01','2020-04-19 08:10:00'),(34,2,6,0,'Explicabo.','<p>Minus harum numquam excepturi voluptates.</p>','<p>Laudantium ad quisquam a nam quidem modi. In accusantium et sunt ut dolorem fugit. Necessitatibus iusto harum voluptas exercitationem earum quia.</p>',10000,3,3,'2020-03-19 02:32:01','2020-04-19 08:09:55'),(35,2,3,0,'Dolor.','<p>Reprehenderit quasi corporis tempore assumenda.</p>','<p>Dolorem ut quaerat mollitia animi debitis id dicta. Quod quia ut delectus suscipit quam maxime. Consequatur voluptatum consequatur fugiat similique sit quia. Officia error libero ea et.</p>',12000,3,27,'2020-03-19 02:32:01','2020-04-19 08:09:51'),(36,2,4,6,'Illo sit.','<p>Saepe corporis non ipsum totam ipsam.</p>','<p>Ut rerum sint id ipsum est facere consequuntur. Vel autem quia cum quibusdam. Quia qui rem nihil sunt omnis et. Tenetur qui officiis modi fugiat.</p>',46000,2,47,'2020-03-19 02:32:01','2020-04-19 08:09:47'),(37,2,6,0,'Sit et.','<p>Cumque a modi reiciendis dolor vel.</p>','<p>Accusamus minima sequi minima non. Non et est deleniti error recusandae est. Voluptates aut adipisci necessitatibus est. Non eligendi vero rerum aliquid sed deleniti.</p>',26000,3,7,'2020-03-19 02:32:01','2020-04-19 08:09:42'),(38,2,9,1,'Iure.','<p>In at non suscipit beatae voluptatem veniam.</p>','<p>Vero error blanditiis velit. At nam et veritatis deserunt officiis expedita et. Delectus tempore eos nobis temporibus dicta cupiditate.</p>',65000,3,22,'2020-03-19 02:32:01','2020-04-19 08:09:38'),(39,2,2,2,'Dolorum.','<p>Impedit enim et eos aut.</p>','<p>Nam voluptatem sed et atque. Ut et et velit et sit doloremque. Ea aperiam harum blanditiis est sint voluptas sint.</p>',98000,3,17,'2020-03-19 02:32:01','2020-04-19 08:09:33'),(40,2,4,1,'Quia a.','<p>Sint iure quia recusandae aut a sequi.</p>','<p>Et similique eaque tempora. Magnam illum minus id cupiditate incidunt est at. Aut sequi mollitia est sit omnis.</p>',20000,2,16,'2020-03-19 02:32:01','2020-04-19 08:09:29'),(41,3,10,0,'Iure.','<p>Qui eaque et ut.</p>','<p>Culpa accusantium quasi modi dolor. Eligendi rem minus nesciunt atque ipsa tenetur eos qui.</p>',41000,3,10,'2020-03-19 02:32:01','2020-04-19 08:10:26'),(42,3,2,0,'Quos.','<p>Tempore doloribus iusto consequatur aut.</p>','<p>Quis unde et ut fugiat. Sint exercitationem dolore neque quaerat esse dolore dolor. Voluptate soluta blanditiis laborum quod velit in. Magni vitae laboriosam et et.</p>',29000,1,24,'2020-03-19 02:32:01','2020-04-19 08:10:29'),(43,3,8,0,'Repellat.','<p>Esse minima alias assumenda quod.</p>','<p>Voluptatum nam ut eum voluptates recusandae minima enim. Aperiam rerum et dolores quibusdam voluptatem consectetur.</p>',94000,3,28,'2020-03-19 02:32:01','2020-04-19 08:10:34'),(44,3,4,2,'Quibusdam.','<p>Voluptate at fugiat dolores cum.</p>','<p>Provident perferendis animi adipisci. Consequatur et ullam non eos. Facere quis et debitis assumenda eos.</p>',54000,1,37,'2020-03-19 02:32:01','2020-04-19 08:10:38'),(45,3,6,0,'Eaque qui.','<p>Corrupti nostrum ratione voluptatem est.</p>','<p>Ab autem cumque repellat et quis. Illo commodi quo quo. Quo numquam sed eum.</p>',58000,1,30,'2020-03-19 02:32:01','2020-04-19 08:10:42'),(46,3,10,7,'In.','<p>Cupiditate est aut sunt est architecto.</p>','<p>Nisi deleniti similique neque consequatur aut qui. At et rerum ullam officiis ullam saepe et. Adipisci et dolore et laboriosam ut omnis id. Qui quae eveniet facere.</p>',91000,3,16,'2020-03-19 02:32:01','2020-04-19 08:10:46'),(47,3,2,2,'Sed neque.','<p>Est incidunt odit harum ullam delectus.</p>','<p>Maxime accusantium eos distinctio repellendus quaerat. Fugiat vel est dolorum cumque eum architecto nihil.</p>',12000,1,34,'2020-03-19 02:32:01','2020-04-19 08:10:50'),(48,3,1,0,'Cum sit.','<p>Praesentium sed asperiores atque eos in est.</p>','<p>Dignissimos voluptatem ullam sunt. Quisquam hic quibusdam facilis quidem neque delectus. Eos ratione molestiae sint nulla fugit non.</p>',24000,3,32,'2020-03-19 02:32:01','2020-04-19 08:10:54'),(49,3,1,6,'Unde.','<p>Aliquam ut vitae nam repellendus.</p>','<p>Voluptatum excepturi impedit nobis qui unde. Est doloremque dolorum voluptas. Voluptatum sed rerum repudiandae sed repellendus mollitia. Dolore repudiandae ut sunt repudiandae quidem.</p>',5000,1,26,'2020-03-19 02:32:01','2020-04-19 08:10:59'),(50,3,8,1,'Repellat.','<p>Illum dolorum sit culpa nulla eveniet iusto.</p>','<p>Adipisci culpa et magnam voluptatum libero est officia ab. Illum quasi distinctio voluptatum.</p>',70000,2,6,'2020-03-19 02:32:01','2020-04-19 08:11:03');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotions` (
  `promotion_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `discount` double NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`promotion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions`
--

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
INSERT INTO `promotions` VALUES (1,30,'2000-05-25','1986-02-21','2020-03-19 02:32:01','2020-03-24 02:55:13'),(2,90,'2002-02-28','1995-02-04','2020-03-19 02:32:01','2020-03-19 02:32:01'),(3,70,'1981-06-08','1974-01-11','2020-03-19 02:32:01','2020-03-19 02:32:01'),(4,30,'1999-10-09','1977-11-21','2020-03-19 02:32:01','2020-03-19 02:32:01'),(5,80,'2017-10-16','2010-08-17','2020-03-19 02:32:01','2020-03-19 02:32:01'),(6,40,'1992-10-02','1993-03-02','2020-03-19 02:32:01','2020-03-19 02:32:01'),(7,10,'1980-12-10','2004-06-16','2020-03-19 02:32:01','2020-03-19 02:32:01'),(8,90,'1980-01-30','1990-06-10','2020-03-19 02:32:01','2020-03-19 02:32:01'),(9,30,'2006-12-25','2003-07-14','2020-03-19 02:32:01','2020-03-19 02:32:01'),(10,50,'2006-06-29','1971-01-02','2020-03-19 02:32:01','2020-03-19 02:32:01');
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin','admin@gmail.com','$2y$10$7YLlZDeHr7A3o3iYYiai6eqgnzKKtgJr8IqkfgrPY75pF0qUOz2dm','Vyt9zfpzHMAPmz0anxbFZu8Kx3eVsxkI0hLNkQ4mU1UwwlT7Fl8cgqqaROZV','2020-03-23 18:17:23','2020-03-23 18:17:23'),(2,2,'editor','editor@gmail.com','$2y$10$5xiQ1Dd5P8WBN2ryhqWzsu1qyOChZalAfMhDhUSqcj0HKxf0eNiJe','OfFtNBNIkRp3kPpENZ9y0jLceTwwH47JZy0Ug8NCmXyIPqkgDmIvRlnBdrBy','2020-03-23 18:17:23','2020-03-25 00:36:48'),(3,3,'member','member@gmail.com','$2y$10$ENlzMHhmbpi6TF6pGwunFeFJ7r6lLzTl89flTuVMKy3./tShFrN8G','ybxVUyIE8ZkFgkhozkCCWEym8ZlKh82BjeGsALMb0fIbw9YnkLUTE019LxQJ','2020-03-23 18:17:23','2020-03-23 18:17:23'),(4,3,'Simeon Bartoletti','jayme29@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(5,3,'Dr. Norene Champlin','mschiller@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(6,3,'Dr. Skyla Cremin','hpagac@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(7,3,'Maudie McGlynn','betsy95@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(8,3,'Mr. Kelvin D\'Amore II','ankunding.cary@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(9,3,'Ed Orn','brennan.turner@example.com','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(10,3,'Maribel Terry','estel14@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(11,3,'Gene Stroman DVM','eduardo.cremin@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(12,3,'Mariane O\'Conner MD','rwalsh@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(13,3,'Dr. Tara Wiegand IV','egoldner@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(14,3,'Damian Herman','ebalistreri@example.com','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(15,3,'Dr. Mariane Will','bette.ortiz@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(16,3,'Monserrate Willms','qlynch@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(17,3,'Eugene Bechtelar','xfeil@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(18,3,'Dr. Nicola Haag','liam02@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(19,3,'Aimee Strosin','bergstrom.osborne@example.com','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(20,3,'Carson Barton PhD','florencio19@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(21,3,'Julie Bauch Sr.','hester15@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(22,3,'Ezequiel Reinger','carolanne.hickle@example.com','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(23,3,'Mrs. Jackeline Kreiger','skihn@example.com','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(24,3,'Adolfo Carroll','dhudson@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(25,3,'Deanna Bergstrom','myrtis.hayes@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(26,3,'Norma Littel','hirthe.leatha@example.com','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(27,3,'Vivianne Kuvalis','carmelo.lueilwitz@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(28,3,'Dr. Judson Luettgen','zsimonis@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(29,3,'Mike Ebert','kwilkinson@example.com','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(30,3,'Dora Kling','cwindler@example.org','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(31,3,'Emmet Streich','casimir.wisozk@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(32,3,'Lane Mante II','xnolan@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(33,3,'Yasmin Cruickshank','deven.nienow@example.net','$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',NULL,'2020-03-23 18:17:23','2020-03-23 18:17:23'),(35,3,'Do Nam Huy','namhuydo18@gmail.com','$2y$10$Kqup1KBJSla7sHGjmXRDM.yGchuhHhhP6hdKndERd5YOzKhFQn1FW','5NoznEEU7JeYDrTaVhjBSCpHMODULtDGIW0Wyv76wXzQGtCZcKQLM1YKT6VT','2020-04-18 02:59:40','2020-04-18 02:59:40');
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

-- Dump completed on 2020-04-19 22:42:54
