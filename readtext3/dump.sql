-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: iddb
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `id_info`
--

DROP TABLE IF EXISTS `id_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `father_name` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `birth_date` date NOT NULL,
  `register_local` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `given_date` date NOT NULL,
  `valid_date` date NOT NULL,
  `company` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dapartment` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fin_code` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `senedtype` char(11) COLLATE utf8_turkish_ci DEFAULT 'shexsiyyet',
  PRIMARY KEY (`id`,`fin_code`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `id_info`
--

LOCK TABLES `id_info` WRITE;
/*!40000 ALTER TABLE `id_info` DISABLE KEYS */;
INSERT INTO `id_info` VALUES (5,'LALƏ','RUSTƏMLİ','AZAD QIZI','1999-03-04','BAKI şəh..XƏTAİ ray..M.HADİ KUÇ.ev. 51.m.95','2015-03-09','2024-03-04','1','1','4PHAMF5','shexsiyyet'),(7,'LALƏ','RUSTƏMLİ','AZAD QIZI','1999-03-04','BAKI şəh..XƏTAİ ray..M.HADİ KUÇ.ev.  51.m.95','2015-03-09','2024-03-04','1','1','4PHAMF5','shexsiyyet'),(8,'LALƏ','RUSTƏMLİ','AZAD QIZI','1999-03-04','BAKI şəh..XƏTAİ ray..M.HADİ KUÇ.ev.  51.m.95','2015-03-09','2024-03-04','1','1','4PHAMF5','shexsiyyet'),(9,'LALƏ','RUSTƏMLİ','AZAD QIZI','1999-03-04','BAKI şəh..XƏTAİ ray..M.HADİ KUÇ.ev.  51.m.95','2015-03-09','2024-03-04','1','1','4PHAMF5','shexsiyyet'),(10,'LALƏ','RUSTƏMLİ','AZAD QIZI','1999-03-04','BAKI şəh..XƏTAİ ray..M.HADİ KUÇ.ev.  51.m.95','2015-03-09','2024-03-04','1','1','4PHAMF5','shexsiyyet'),(11,'LALƏ','RUSTƏMLİ','AZAD QIZI','1999-03-04','BAKI şəh..XƏTAİ ray..M.HADİ KUÇ.ev.  51.m.95','2015-03-09','2024-03-04','1','1','4PHAMF5','shexsiyyet'),(12,'LALƏ','RUSTƏMLİ','AZAD QIZI','1999-03-04','BAKI şəh..XƏTAİ ray..M.HADİ KUÇ.ev.  51.m.95','2015-03-09','2024-03-04','1','1','4PHAMF5','shexsiyyet'),(13,'UIQIUGI VVIÇİÇLIİVVIJÖILŞAN','BƏNÖVŞƏƏRİDƏXANIMMİFTYAXMİRİ','ƏZİMXAN OGIJLU . . ','1970-01-01','AZƏRBAYCAN XÇIÜUUIVAN şəGscı–ı.–','1970-01-01','2027-08-01','1','1','','shexsiyyet'),(14,'AYXAN','ŞİXLİNSKİY/SHIKHLINSKIY','ELÇİN','1986-06-26','AZƏRBAYCAN, BAKI/AZERBAIJAN','2010-01-14','2020-01-14','1','1','','shexsiyyet'),(15,'AYXAN','ŞİXLİNSKİY/SHIKHLINSKIY','ELÇİN','1986-06-26','AZƏRBAYCAN, BAKI/AZERBAIJAN','2010-01-14','2020-01-14','1','1','','shexsiyyet'),(16,'AYXAN','ŞİXLİNSKİY/SHIKHLINSKIY','ELÇİN','1986-06-26','AZƏRBAYCAN, BAKI/AZERBAIJAN','2010-01-14','2020-01-14','Depo','1','','shexsiyyet'),(17,'AYXAN','ŞİXLİNSKİY/SHIKHLINSKIY','ELÇİN','1986-06-26','AZƏRBAYCAN, BAKI/AZERBAIJAN','2010-01-14','2020-01-14','companisefce','Depo','','shexsiyyet');
/*!40000 ALTER TABLE `id_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-30 11:42:17
