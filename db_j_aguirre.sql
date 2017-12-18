-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_j_aguirre
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `tbl_config`
--

DROP TABLE IF EXISTS `tbl_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_config` (
  `conf_id` int(11) NOT NULL AUTO_INCREMENT,
  `conf_site_name` varchar(255) DEFAULT 'Sample Website',
  `conf_site_description` text,
  `conf_featured_message` text,
  `conf_about` text,
  `conf_contact_info` varchar(55) DEFAULT NULL,
  `conf_copyright_message` text,
  `conf_edited_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `conf_edited_by` bigint(20) DEFAULT '0',
  PRIMARY KEY (`conf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_config`
--

LOCK TABLES `tbl_config` WRITE;
/*!40000 ALTER TABLE `tbl_config` DISABLE KEYS */;
INSERT INTO `tbl_config` VALUES (1,'J.Aguirre Travel and Tours','A travel and tour agency','Our travel agency will make your trip a trip to a day to remember...','albeit','099999999999','© Copyright 2017 - J.AGUIRRE All rights reserved.','2017-12-18 15:06:58',0);
/*!40000 ALTER TABLE `tbl_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_media`
--

DROP TABLE IF EXISTS `tbl_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_media` (
  `media_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(255) NOT NULL,
  `media_orig_name` text NOT NULL,
  `media_type` varchar(100) DEFAULT '1',
  `media_extension` varchar(10) DEFAULT '.jpg',
  `media_extra_meta_data` text,
  `media_created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `media_created_by` bigint(20) DEFAULT '0',
  `media_edited_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `media_edited_by` bigint(20) DEFAULT '0',
  `media_is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_media`
--

LOCK TABLES `tbl_media` WRITE;
/*!40000 ALTER TABLE `tbl_media` DISABLE KEYS */;
INSERT INTO `tbl_media` VALUES (1,'24418c99ed8084c098da91d729a4c182.jpg','doctor.jpg','0','.jpg','{\"file_name\":\"24418c99ed8084c098da91d729a4c182.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/24418c99ed8084c098da91d729a4c182.jpg\",\"raw_name\":\"24418c99ed8084c098da91d729a4c182\",\"orig_name\":\"24418c99ed8084c098da91d729a4c182.jpg\",\"client_name\":\"doctor.jpg\",\"file_ext\":\".jpg\",\"file_size\":53.23,\"is_image\":true,\"image_width\":805,\"image_height\":960,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"805\\\" height=\\\"960\\\"\"}','2017-12-11 15:33:28',0,'2017-12-11 15:33:28',0,1),(2,'30d42f86ef73b3479fd7df40e182b287.jpg','friendzone.jpg','0','.jpg','{\"file_name\":\"30d42f86ef73b3479fd7df40e182b287.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/30d42f86ef73b3479fd7df40e182b287.jpg\",\"raw_name\":\"30d42f86ef73b3479fd7df40e182b287\",\"orig_name\":\"30d42f86ef73b3479fd7df40e182b287.jpg\",\"client_name\":\"friendzone.jpg\",\"file_ext\":\".jpg\",\"file_size\":75.78,\"is_image\":true,\"image_width\":540,\"image_height\":960,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"540\\\" height=\\\"960\\\"\"}','2017-12-11 15:34:15',0,'2017-12-11 15:34:15',0,1),(3,'b21f2fbdf7e90d5e7123be54e52c0b99.jpg','doctor.jpg','0','.jpg','{\"file_name\":\"b21f2fbdf7e90d5e7123be54e52c0b99.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/b21f2fbdf7e90d5e7123be54e52c0b99.jpg\",\"raw_name\":\"b21f2fbdf7e90d5e7123be54e52c0b99\",\"orig_name\":\"b21f2fbdf7e90d5e7123be54e52c0b99.jpg\",\"client_name\":\"doctor.jpg\",\"file_ext\":\".jpg\",\"file_size\":53.23,\"is_image\":true,\"image_width\":805,\"image_height\":960,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"805\\\" height=\\\"960\\\"\"}','2017-12-11 15:42:09',0,'2017-12-11 15:42:09',0,1),(4,'978e8cb30d72cc07034e59ea4cddb965.jpg','riverback.jpg','0','.jpg','{\"file_name\":\"978e8cb30d72cc07034e59ea4cddb965.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/978e8cb30d72cc07034e59ea4cddb965.jpg\",\"raw_name\":\"978e8cb30d72cc07034e59ea4cddb965\",\"orig_name\":\"978e8cb30d72cc07034e59ea4cddb965.jpg\",\"client_name\":\"riverback.jpg\",\"file_ext\":\".jpg\",\"file_size\":86.81,\"is_image\":true,\"image_width\":540,\"image_height\":960,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"540\\\" height=\\\"960\\\"\"}','2017-12-11 15:42:34',0,'2017-12-11 15:42:34',0,1),(5,'4ad6250a27b5e9d8937c8178c31e4e61.jpg','friendzone.jpg','0','.jpg','{\"file_name\":\"4ad6250a27b5e9d8937c8178c31e4e61.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/4ad6250a27b5e9d8937c8178c31e4e61.jpg\",\"raw_name\":\"4ad6250a27b5e9d8937c8178c31e4e61\",\"orig_name\":\"4ad6250a27b5e9d8937c8178c31e4e61.jpg\",\"client_name\":\"friendzone.jpg\",\"file_ext\":\".jpg\",\"file_size\":75.78,\"is_image\":true,\"image_width\":540,\"image_height\":960,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"540\\\" height=\\\"960\\\"\"}','2017-12-11 15:43:14',0,'2017-12-11 15:43:14',0,1),(6,'a055e0c54d91c64534ce10b81565ce91.png','snoop-dogg-everywhere.png','0','.png','{\"file_name\":\"a055e0c54d91c64534ce10b81565ce91.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/a055e0c54d91c64534ce10b81565ce91.png\",\"raw_name\":\"a055e0c54d91c64534ce10b81565ce91\",\"orig_name\":\"a055e0c54d91c64534ce10b81565ce91.png\",\"client_name\":\"snoop-dogg-everywhere.png\",\"file_ext\":\".png\",\"file_size\":370.04,\"is_image\":true,\"image_width\":500,\"image_height\":488,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"500\\\" height=\\\"488\\\"\"}','2017-12-11 15:43:22',0,'2017-12-11 15:43:22',0,1),(7,'71faf04a41544db3a5f0c15bf917bd1c.png','province_logo.png','0','.png','{\"file_name\":\"71faf04a41544db3a5f0c15bf917bd1c.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/71faf04a41544db3a5f0c15bf917bd1c.png\",\"raw_name\":\"71faf04a41544db3a5f0c15bf917bd1c\",\"orig_name\":\"71faf04a41544db3a5f0c15bf917bd1c.png\",\"client_name\":\"province_logo.png\",\"file_ext\":\".png\",\"file_size\":142.56,\"is_image\":true,\"image_width\":480,\"image_height\":360,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"480\\\" height=\\\"360\\\"\"}','2017-12-11 15:50:17',0,'2017-12-11 15:50:17',0,1),(8,'9bc487119c4aa161d1536bdb598005b4.png','snoop-dogg-everywhere.png','0','.png','{\"file_name\":\"9bc487119c4aa161d1536bdb598005b4.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/9bc487119c4aa161d1536bdb598005b4.png\",\"raw_name\":\"9bc487119c4aa161d1536bdb598005b4\",\"orig_name\":\"9bc487119c4aa161d1536bdb598005b4.png\",\"client_name\":\"snoop-dogg-everywhere.png\",\"file_ext\":\".png\",\"file_size\":370.04,\"is_image\":true,\"image_width\":500,\"image_height\":488,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"500\\\" height=\\\"488\\\"\"}','2017-12-11 15:53:12',0,'2017-12-11 15:53:12',0,1),(9,'3db795c5762a78236cf5e243ecf7b344.jpg','orochimarlou.jpg','0','.jpg','{\"file_name\":\"3db795c5762a78236cf5e243ecf7b344.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/3db795c5762a78236cf5e243ecf7b344.jpg\",\"raw_name\":\"3db795c5762a78236cf5e243ecf7b344\",\"orig_name\":\"3db795c5762a78236cf5e243ecf7b344.jpg\",\"client_name\":\"orochimarlou.jpg\",\"file_ext\":\".jpg\",\"file_size\":17.4,\"is_image\":true,\"image_width\":480,\"image_height\":453,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"480\\\" height=\\\"453\\\"\"}','2017-12-11 16:04:11',0,'2017-12-11 16:04:11',0,1),(10,'1b24f3d3fae2a2e689b790e3a6b3b13f.jpg','wasd-shuttle.jpg','image/jpeg','.jpg','{\"file_name\":\"1b24f3d3fae2a2e689b790e3a6b3b13f.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/1b24f3d3fae2a2e689b790e3a6b3b13f.jpg\",\"raw_name\":\"1b24f3d3fae2a2e689b790e3a6b3b13f\",\"orig_name\":\"1b24f3d3fae2a2e689b790e3a6b3b13f.jpg\",\"client_name\":\"wasd-shuttle.jpg\",\"file_ext\":\".jpg\",\"file_size\":84.25,\"is_image\":true,\"image_width\":500,\"image_height\":500,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"500\\\" height=\\\"500\\\"\"}','2017-12-11 17:58:48',0,'2017-12-11 17:58:48',0,1),(11,'271556cd4e25d890a81b0bd08c75bc40.jpg','gaben.jpg','image/jpeg','.jpg','{\"file_name\":\"271556cd4e25d890a81b0bd08c75bc40.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/271556cd4e25d890a81b0bd08c75bc40.jpg\",\"raw_name\":\"271556cd4e25d890a81b0bd08c75bc40\",\"orig_name\":\"271556cd4e25d890a81b0bd08c75bc40.jpg\",\"client_name\":\"gaben.jpg\",\"file_ext\":\".jpg\",\"file_size\":44.66,\"is_image\":true,\"image_width\":640,\"image_height\":360,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"640\\\" height=\\\"360\\\"\"}','2017-12-14 17:01:19',0,'2017-12-14 17:01:19',0,1),(12,'bb5218051f897ca582da4763bb0e7901.png','cloud2.png','image/png','.png','{\"file_name\":\"bb5218051f897ca582da4763bb0e7901.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/bb5218051f897ca582da4763bb0e7901.png\",\"raw_name\":\"bb5218051f897ca582da4763bb0e7901\",\"orig_name\":\"bb5218051f897ca582da4763bb0e7901.png\",\"client_name\":\"cloud2.png\",\"file_ext\":\".png\",\"file_size\":5.05,\"is_image\":true,\"image_width\":225,\"image_height\":225,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"225\\\" height=\\\"225\\\"\"}','2017-12-14 20:23:32',0,'2017-12-14 20:23:32',0,1),(13,'61cd0171e67e325f7f415d058575421f.png','jigglypuff.png','image/png','.png','{\"file_name\":\"61cd0171e67e325f7f415d058575421f.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/61cd0171e67e325f7f415d058575421f.png\",\"raw_name\":\"61cd0171e67e325f7f415d058575421f\",\"orig_name\":\"61cd0171e67e325f7f415d058575421f.png\",\"client_name\":\"jigglypuff.png\",\"file_ext\":\".png\",\"file_size\":7.71,\"is_image\":true,\"image_width\":225,\"image_height\":225,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"225\\\" height=\\\"225\\\"\"}','2017-12-14 20:24:04',0,'2017-12-14 20:24:04',0,1),(14,'d5418f372447c10b316091231c1da25e.jpg','cloud.jpg','image/jpeg','.jpg','{\"file_name\":\"d5418f372447c10b316091231c1da25e.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/d5418f372447c10b316091231c1da25e.jpg\",\"raw_name\":\"d5418f372447c10b316091231c1da25e\",\"orig_name\":\"d5418f372447c10b316091231c1da25e.jpg\",\"client_name\":\"cloud.jpg\",\"file_ext\":\".jpg\",\"file_size\":31.64,\"is_image\":true,\"image_width\":852,\"image_height\":480,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"852\\\" height=\\\"480\\\"\"}','2017-12-14 20:24:16',0,'2017-12-14 20:24:16',0,1),(15,'1a79a77aaad24447eb8c2cd565332248.png','girl.png','image/png','.png','{\"file_name\":\"1a79a77aaad24447eb8c2cd565332248.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/1a79a77aaad24447eb8c2cd565332248.png\",\"raw_name\":\"1a79a77aaad24447eb8c2cd565332248\",\"orig_name\":\"1a79a77aaad24447eb8c2cd565332248.png\",\"client_name\":\"girl.png\",\"file_ext\":\".png\",\"file_size\":24.54,\"is_image\":true,\"image_width\":512,\"image_height\":512,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"512\\\" height=\\\"512\\\"\"}','2017-12-14 20:24:49',0,'2017-12-14 20:24:49',0,1),(16,'342b78a78df351831e22c625f2ff9e7d.jpg','jigglypuff.jpg','image/jpeg','.jpg','{\"file_name\":\"342b78a78df351831e22c625f2ff9e7d.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/342b78a78df351831e22c625f2ff9e7d.jpg\",\"raw_name\":\"342b78a78df351831e22c625f2ff9e7d\",\"orig_name\":\"342b78a78df351831e22c625f2ff9e7d.jpg\",\"client_name\":\"jigglypuff.jpg\",\"file_ext\":\".jpg\",\"file_size\":117.79,\"is_image\":true,\"image_width\":900,\"image_height\":800,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"900\\\" height=\\\"800\\\"\"}','2017-12-14 20:46:13',0,'2017-12-14 20:46:13',0,1),(17,'28bcf2bfc769f720776f0f63e4d4cd36.jpg','EconomicMap.jpg','image/jpeg','.jpg','{\"file_name\":\"28bcf2bfc769f720776f0f63e4d4cd36.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/28bcf2bfc769f720776f0f63e4d4cd36.jpg\",\"raw_name\":\"28bcf2bfc769f720776f0f63e4d4cd36\",\"orig_name\":\"28bcf2bfc769f720776f0f63e4d4cd36.jpg\",\"client_name\":\"EconomicMap.jpg\",\"file_ext\":\".jpg\",\"file_size\":655,\"is_image\":true,\"image_width\":3900,\"image_height\":2550,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"3900\\\" height=\\\"2550\\\"\"}','2017-12-14 20:47:07',0,'2017-12-14 20:47:07',0,1),(18,'1677d04cb612dfcbd29351ef6c2f3eb7.png','uber.png','image/png','.png','{\"file_name\":\"1677d04cb612dfcbd29351ef6c2f3eb7.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/1677d04cb612dfcbd29351ef6c2f3eb7.png\",\"raw_name\":\"1677d04cb612dfcbd29351ef6c2f3eb7\",\"orig_name\":\"1677d04cb612dfcbd29351ef6c2f3eb7.png\",\"client_name\":\"uber.png\",\"file_ext\":\".png\",\"file_size\":5.38,\"is_image\":true,\"image_width\":500,\"image_height\":500,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"500\\\" height=\\\"500\\\"\"}','2017-12-14 21:29:45',0,'2017-12-14 21:29:45',0,1),(19,'9c13e3e62fe880852c14d845620bdb3e.png','cagayan-seal_600x600.png','image/png','.png','{\"file_name\":\"9c13e3e62fe880852c14d845620bdb3e.png\",\"file_type\":\"image\\/png\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/9c13e3e62fe880852c14d845620bdb3e.png\",\"raw_name\":\"9c13e3e62fe880852c14d845620bdb3e\",\"orig_name\":\"9c13e3e62fe880852c14d845620bdb3e.png\",\"client_name\":\"cagayan-seal_600x600.png\",\"file_ext\":\".png\",\"file_size\":167.63,\"is_image\":true,\"image_width\":600,\"image_height\":600,\"image_type\":\"png\",\"image_size_str\":\"width=\\\"600\\\" height=\\\"600\\\"\"}','2017-12-14 21:30:02',0,'2017-12-14 21:30:02',0,1),(20,'c04a672e1668d707f354a0b4c6950d14.jpg','gaben.jpg','image/jpeg','.jpg','{\"file_name\":\"c04a672e1668d707f354a0b4c6950d14.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/c04a672e1668d707f354a0b4c6950d14.jpg\",\"raw_name\":\"c04a672e1668d707f354a0b4c6950d14\",\"orig_name\":\"c04a672e1668d707f354a0b4c6950d14.jpg\",\"client_name\":\"gaben.jpg\",\"file_ext\":\".jpg\",\"file_size\":44.66,\"is_image\":true,\"image_width\":640,\"image_height\":360,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"640\\\" height=\\\"360\\\"\"}','2017-12-15 13:12:03',0,'2017-12-15 13:12:03',0,1),(21,'e18435c8eb790de39b753600333a1175.jpg','gaben.jpg','image/jpeg','.jpg','{\"file_name\":\"e18435c8eb790de39b753600333a1175.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/e18435c8eb790de39b753600333a1175.jpg\",\"raw_name\":\"e18435c8eb790de39b753600333a1175\",\"orig_name\":\"e18435c8eb790de39b753600333a1175.jpg\",\"client_name\":\"gaben.jpg\",\"file_ext\":\".jpg\",\"file_size\":44.66,\"is_image\":true,\"image_width\":640,\"image_height\":360,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"640\\\" height=\\\"360\\\"\"}','2017-12-15 13:13:06',0,'2017-12-15 13:13:06',0,1),(22,'2ee84e559c4fe7d0a4c7df7e712c1fb5.jpg','steve-jobs.jpg','image/jpeg','.jpg','{\"file_name\":\"2ee84e559c4fe7d0a4c7df7e712c1fb5.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/2ee84e559c4fe7d0a4c7df7e712c1fb5.jpg\",\"raw_name\":\"2ee84e559c4fe7d0a4c7df7e712c1fb5\",\"orig_name\":\"2ee84e559c4fe7d0a4c7df7e712c1fb5.jpg\",\"client_name\":\"steve-jobs.jpg\",\"file_ext\":\".jpg\",\"file_size\":6.53,\"is_image\":true,\"image_width\":205,\"image_height\":246,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"205\\\" height=\\\"246\\\"\"}','2017-12-15 15:57:13',0,'2017-12-15 15:57:13',0,1),(23,'8bc278faf106f76b7255807699b4c03d.jpg','steve-jobs.jpg','image/jpeg','.jpg','{\"file_name\":\"8bc278faf106f76b7255807699b4c03d.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/8bc278faf106f76b7255807699b4c03d.jpg\",\"raw_name\":\"8bc278faf106f76b7255807699b4c03d\",\"orig_name\":\"8bc278faf106f76b7255807699b4c03d.jpg\",\"client_name\":\"steve-jobs.jpg\",\"file_ext\":\".jpg\",\"file_size\":6.53,\"is_image\":true,\"image_width\":205,\"image_height\":246,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"205\\\" height=\\\"246\\\"\"}','2017-12-15 21:39:52',0,'2017-12-15 21:39:52',0,1),(24,'8b8dcd34ff917a9c7bace84a8d558595.jpg','totoro.jpg','image/jpeg','.jpg','{\"file_name\":\"8b8dcd34ff917a9c7bace84a8d558595.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/8b8dcd34ff917a9c7bace84a8d558595.jpg\",\"raw_name\":\"8b8dcd34ff917a9c7bace84a8d558595\",\"orig_name\":\"8b8dcd34ff917a9c7bace84a8d558595.jpg\",\"client_name\":\"totoro.jpg\",\"file_ext\":\".jpg\",\"file_size\":63.97,\"is_image\":true,\"image_width\":955,\"image_height\":960,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"955\\\" height=\\\"960\\\"\"}','2017-12-15 22:26:57',0,'2017-12-15 22:26:57',0,1),(25,'4f0d7ec05dcce8f5f80ba1c59a3e0a10.jpg','av772w5_700b_v2.jpg','image/jpeg','.jpg','{\"file_name\":\"4f0d7ec05dcce8f5f80ba1c59a3e0a10.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/4f0d7ec05dcce8f5f80ba1c59a3e0a10.jpg\",\"raw_name\":\"4f0d7ec05dcce8f5f80ba1c59a3e0a10\",\"orig_name\":\"4f0d7ec05dcce8f5f80ba1c59a3e0a10.jpg\",\"client_name\":\"av772w5_700b_v2.jpg\",\"file_ext\":\".jpg\",\"file_size\":83.21,\"is_image\":true,\"image_width\":678,\"image_height\":880,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"678\\\" height=\\\"880\\\"\"}','2017-12-17 10:21:45',0,'2017-12-17 10:21:45',0,1),(27,'96f30b453d9ac4da52bb36ce8248cccf.gif','404.gif','image/gif','.gif','{\"file_name\":\"96f30b453d9ac4da52bb36ce8248cccf.gif\",\"file_type\":\"image\\/gif\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/96f30b453d9ac4da52bb36ce8248cccf.gif\",\"raw_name\":\"96f30b453d9ac4da52bb36ce8248cccf\",\"orig_name\":\"96f30b453d9ac4da52bb36ce8248cccf.gif\",\"client_name\":\"404.gif\",\"file_ext\":\".gif\",\"file_size\":70.39,\"is_image\":true,\"image_width\":1366,\"image_height\":768,\"image_type\":\"gif\",\"image_size_str\":\"width=\\\"1366\\\" height=\\\"768\\\"\"}','2017-12-18 14:20:32',0,'2017-12-18 14:20:32',0,1),(28,'b938c63cd585a3936424d0f3e779fe26.jpg','galaxy.jpg','image/jpeg','.jpg','{\"file_name\":\"b938c63cd585a3936424d0f3e779fe26.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/\",\"full_path\":\"C:\\/xampp\\/htdocs\\/PROJECTS\\/j-aguirre\\/public\\/img\\/media\\/b938c63cd585a3936424d0f3e779fe26.jpg\",\"raw_name\":\"b938c63cd585a3936424d0f3e779fe26\",\"orig_name\":\"b938c63cd585a3936424d0f3e779fe26.jpg\",\"client_name\":\"galaxy.jpg\",\"file_ext\":\".jpg\",\"file_size\":4.84,\"is_image\":true,\"image_width\":290,\"image_height\":174,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"290\\\" height=\\\"174\\\"\"}','2017-12-18 14:23:44',0,'2017-12-18 14:23:44',0,1);
/*!40000 ALTER TABLE `tbl_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_promos`
--

DROP TABLE IF EXISTS `tbl_promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_promos` (
  `promo_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `promo_title` text,
  `promo_content` longtext,
  `promo_thumbnail_id` bigint(20) DEFAULT NULL,
  `promo_created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `promo_created_by` bigint(20) DEFAULT '0',
  `promo_edited_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `promo_edited_by` bigint(20) DEFAULT '0',
  `promo_is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_promos`
--

LOCK TABLES `tbl_promos` WRITE;
/*!40000 ALTER TABLE `tbl_promos` DISABLE KEYS */;
INSERT INTO `tbl_promos` VALUES (1,'sample','the quick brown fox',NULL,'2017-12-10 17:27:27',0,'2017-12-15 16:06:11',0,0),(2,'another','another content',NULL,'2017-12-10 17:29:51',0,'2017-12-10 17:29:51',0,1),(3,'third sample','this is the third sample',NULL,'2017-12-10 17:30:19',0,'2017-12-10 17:30:19',0,1),(4,'third sample','this is the third samples',NULL,'2017-12-10 17:56:46',0,'2017-12-10 20:06:02',0,0),(5,'third sample','this is the third samplesxxXXXX',NULL,'2017-12-10 17:58:02',0,'2017-12-10 20:06:19',0,0),(6,'natasha','mrs ama xxx',NULL,'2017-12-11 10:46:05',0,'2017-12-11 10:46:23',0,0),(7,'With Thumb','the quick brown fox jumped over the lazy',NULL,'2017-12-11 16:03:49',0,'2017-12-11 16:03:49',0,1),(8,'With thumb 2','the qcuik',9,'2017-12-11 16:04:20',0,'2017-12-11 16:04:20',0,1),(9,'Star wars','Obi wan kenobis',10,'2017-12-11 17:59:06',0,'2017-12-11 17:59:06',0,1),(10,'gaben the man','hehe gaben',11,'2017-12-14 17:01:45',0,'2017-12-14 17:01:45',0,1),(11,'Girl o mine','ohhh ohhh sweet girl oh mine',15,'2017-12-14 20:25:23',0,'2017-12-18 15:47:53',0,0),(12,'Cagayan Maps','this is th ',17,'2017-12-14 20:47:24',0,'2017-12-14 20:47:24',0,1),(13,'Uber','this is an uber...',25,'2017-12-17 10:21:57',0,'2017-12-17 10:21:57',0,1),(14,'Uber2','ok now!',18,'2017-12-17 10:33:00',0,'2017-12-17 18:24:50',0,1),(15,'the title','the quick',20,'2017-12-17 18:25:38',0,'2017-12-17 18:25:38',0,1),(16,'Galaxy','Andromeda',28,'2017-12-18 14:19:38',0,'2017-12-18 14:28:01',0,0);
/*!40000 ALTER TABLE `tbl_promos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_social`
--

DROP TABLE IF EXISTS `tbl_social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `social_facebook` text,
  `social_twitter` text,
  `social_linkedin` text,
  `social_google_plus` text,
  `social_edited_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `social_edited_by` bigint(20) DEFAULT '0',
  PRIMARY KEY (`social_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_social`
--

LOCK TABLES `tbl_social` WRITE;
/*!40000 ALTER TABLE `tbl_social` DISABLE KEYS */;
INSERT INTO `tbl_social` VALUES (1,'https://www.facebook.com/natasha.aguirre.716','','','','2017-12-16 21:56:07',0),(2,'https://www.facebook.com/natasha.aguirre.716','https://twitter.com/joycepring','','','2017-12-18 14:29:35',0);
/*!40000 ALTER TABLE `tbl_social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(65) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_img_id` bigint(20) DEFAULT NULL,
  `user_role` smallint(2) DEFAULT '0',
  `user_created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_created_by` bigint(20) DEFAULT '0',
  `user_edited_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_edited_by` bigint(20) DEFAULT '0',
  `user_is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,'admin','$6$rounds=5000$$sMRFTumkNQrHVoPorxwDcq28XtWGugIzXmpyXER0ZApF3uVMHwD.7MVB0k7LLEGcYOmDEXHTWL7gzURhWXDk./',24,0,'2017-12-02 23:39:37',0,'2017-12-16 11:20:10',0,1),(2,'gabe','123',21,0,'2017-12-15 13:14:15',0,'2017-12-15 15:58:19',0,0),(3,'steve','$6$rounds=5000$$5XILp8Aukkv0HPkhezpFmE7/Q4t5mn5rS.jIVdKWDIqmT/Nc04miUmnzh43JEEse3COYRNzP345yOG3dNUzCl0',22,1,'2017-12-15 15:57:27',0,'2017-12-15 15:57:27',0,1);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_visas`
--

DROP TABLE IF EXISTS `tbl_visas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_visas` (
  `visa_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `visa_title` text,
  `visa_price` double DEFAULT '0',
  `visa_content` longtext,
  `visa_thumbnail_id` bigint(20) DEFAULT NULL,
  `visa_created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `visa_created_by` bigint(20) DEFAULT '0',
  `visa_edited_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visa_edited_by` bigint(20) DEFAULT '0',
  `visa_is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`visa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_visas`
--

LOCK TABLES `tbl_visas` WRITE;
/*!40000 ALTER TABLE `tbl_visas` DISABLE KEYS */;
INSERT INTO `tbl_visas` VALUES (1,'Visa One',0,'the sample visaX',NULL,'2017-12-10 22:45:53',0,'2017-12-10 22:47:15',0,1),(2,'Visa 2',0,'safsg',NULL,'2017-12-12 22:46:44',0,'2017-12-12 22:46:44',0,1),(3,'Visa 3',0,'fasg sg',NULL,'2017-12-12 22:46:56',0,'2017-12-12 22:46:56',0,1),(4,'Visa 4',0,'fa bxb',NULL,'2017-12-12 22:47:30',0,'2017-12-12 22:47:30',0,1),(5,'Visa 5',0,'qeq db',NULL,'2017-12-12 22:47:44',0,'2017-12-12 22:47:44',0,1),(6,'Singapore',1000,'faj',NULL,'2017-12-13 16:42:56',0,'2017-12-13 16:42:56',0,1),(7,'fhafhj',10000,'fafa znz,vnz,vn,',19,'2017-12-14 21:30:33',0,'2017-12-15 16:07:19',0,0),(8,'aaflj',2000,'gjgjjh',21,'2017-12-18 09:37:00',0,'2017-12-18 14:28:30',0,1);
/*!40000 ALTER TABLE `tbl_visas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-18 16:01:30
