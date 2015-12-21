-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: egypt_car
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` text,
  `default` varchar(45) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

LOCK TABLES `about_us` WRITE;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` VALUES (1,'about us','<p style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 22px; font-size: 13px; color: rgb(119, 119, 119); font-family: \'Open Sans\', Arial, sans-serif;\">\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, dapibus ac augue ut, porttitor viverra dui. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, apibus ac augue ut, porttitor viverra dui. Lorem ipsum dolor sit amet, consectet urapibus ac augue ut, porttitor viverra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<ul class=\"list prim list-ok\" style=\"box-sizing: border-box; margin: 0px; padding-right: 0px; padding-left: 0px; border: 0px; vertical-align: baseline; list-style: none; color: rgb(119, 119, 119); font-family: \'Open Sans\', Arial, sans-serif; font-size: 13px; line-height: 18.5714302062988px;\">\n	<li class=\"fx animated fadeInLeft\" data-animate=\"fadeInLeft\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px 10px; border: 0px; vertical-align: baseline; list-style: none; -webkit-animation: fadeInLeft 1s both; opacity: 1;\">\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque</li>\n	<li class=\"fx animated fadeInLeft\" data-animate=\"fadeInLeft\" data-animation-delay=\"200\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px 10px; border: 0px; vertical-align: baseline; list-style: none; -webkit-animation: 200ms 200ms; opacity: 1;\">\n		Suspendisse hendrerit id lacus id lobortis vestibulum quam elit</li>\n	<li class=\"fx animated fadeInLeft\" data-animate=\"fadeInLeft\" data-animation-delay=\"400\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px 10px; border: 0px; vertical-align: baseline; list-style: none; -webkit-animation: 400ms 400ms; opacity: 1;\">\n		Fusce scelerisque pellentesqu suspendisse elementum adipiscing</li>\n	<li class=\"fx animated fadeInLeft\" data-animate=\"fadeInLeft\" data-animation-delay=\"600\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px 10px; border: 0px; vertical-align: baseline; list-style: none; -webkit-animation: 600ms 600ms; opacity: 1;\">\n		Feugiat sodales pretium massa euismod tempus suspendisse hendrerit</li>\n</ul>\n','1',NULL,NULL);
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` text,
  `image` varchar(45) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `publish` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'title','<p>\n	desc</p>\n','b1bb7-cairo_10.jpg',NULL,NULL,'1');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_type`
--

DROP TABLE IF EXISTS `car_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_type`
--

LOCK TABLES `car_type` WRITE;
/*!40000 ALTER TABLE `car_type` DISABLE KEYS */;
INSERT INTO `car_type` VALUES (1,'Sedan'),(2,'Van'),(3,'Minivan'),(4,'LUXURY ');
/*!40000 ALTER TABLE `car_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(45) DEFAULT NULL,
  `address` text,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (1,'USA','<p>\n	<span style=\"color: rgb(119, 119, 119); font-family: \'Open Sans\', Arial, sans-serif; font-size: 13px; line-height: 22px;\">123, Second Sunrise Avenue New York,USA</span></p>\n','info@it-rays.com','+2 012 000 0000','+2 012 000 0001'),(2,'Australia','<p style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 22px; font-size: 13px; color: rgb(119, 119, 119); font-family: \'Open Sans\', Arial, sans-serif;\">\n	123, Second Sunrise Avenue New York,USA</p>\n','info@it-rays.com','+2 012 000 0000','+2 012 000 0001');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(45) DEFAULT NULL,
  `answer` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(45) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `message` text,
  `read` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbox`
--

LOCK TABLES `inbox` WRITE;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
INSERT INTO `inbox` VALUES (1,'Essam Khaled',NULL,'01122007565','<p>\n	please add me to your facebook page</p>\n',NULL),(2,'Essam khaled','essam_2060@hotmail.com','01122007565','Hello',NULL);
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `our_fleet`
--

DROP TABLE IF EXISTS `our_fleet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `our_fleet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` int(11) DEFAULT NULL,
  `car_name` varchar(45) DEFAULT NULL,
  `features` text,
  PRIMARY KEY (`id`),
  KEY `fk_our_fleet_1_idx` (`car_type`),
  CONSTRAINT `fk_our_fleet_1` FOREIGN KEY (`car_type`) REFERENCES `car_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `our_fleet`
--

LOCK TABLES `our_fleet` WRITE;
/*!40000 ALTER TABLE `our_fleet` DISABLE KEYS */;
INSERT INTO `our_fleet` VALUES (1,3,'Hyndai verna',NULL),(2,1,'Hyndai elantra',NULL),(3,4,'mercedes',NULL),(4,1,'Nissan sunny',NULL),(5,3,'Kia carnaval','<p>\n	<a href=\"http://egypt-car.com/images/Chrysler-voyager1.jpg\"><img alt=\"\" src=\"http://egypt-car.com/images/Chrysler-voyager1.jpg\" style=\"width: 286px; height: 200px;\" /></a></p>\n<ul>\n	<li>\n		<span style=\"color:#000000;\"><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\">7 Passenger Capacity </span></span></li>\n	<li>\n		<span style=\"color:#000000;\"><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\">Leather Interior Surround </span></span></li>\n	<li>\n		<span style=\"color:#000000;\"><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\">Sound Stereo System with CD Enhanced </span></span></li>\n	<li>\n		<span style=\"color:#000000;\"><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\">Air Conditioning And Heating </span></span></li>\n	<li>\n		<span style=\"color:#000000;\"><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\">Dual Privacy Partitions </span></span></li>\n	<li>\n		<span style=\"color:#000000;\"><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\">Tinted Windows - </span></span></li>\n	<li>\n		<span style=\"color:#000000;\"><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\">See more at: http://egypt-car.com/minivanvan/chrysler-grand-voyager#sthash.pvVIvvDH.dpuf</span></span></li>\n</ul>\n');
/*!40000 ALTER TABLE `our_fleet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `our_service`
--

DROP TABLE IF EXISTS `our_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `our_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(145) DEFAULT NULL,
  `description` text,
  `image` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `publish` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `our_service`
--

LOCK TABLES `our_service` WRITE;
/*!40000 ALTER TABLE `our_service` DISABLE KEYS */;
INSERT INTO `our_service` VALUES (5,'service 1','<p>\n	this is a new serovce</p>\n','d6816-cairo_10.jpg','icon',NULL,NULL,'1'),(6,'service 2','<p>\n	service 2 desc</p>\n','5d9fe-cairo_10.jpg','icon2',NULL,NULL,'1');
/*!40000 ALTER TABLE `our_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `special_request`
--

DROP TABLE IF EXISTS `special_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `special_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(145) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `message` text,
  `read` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `special_request`
--

LOCK TABLES `special_request` WRITE;
/*!40000 ALTER TABLE `special_request` DISABLE KEYS */;
INSERT INTO `special_request` VALUES (1,'Essam khaled','essam_2060@hotmail.com','<p>\n	Please call me on 01122007565 i need a special ride</p>\n',NULL),(2,'Essam khaled','essam_2060@hotmail.com','Please contact me as soon as possible',NULL),(3,'Essam khaled','essam_2060@hotmail.com','Please contact me as soon as possible',NULL),(4,'said essam','said@yahoo.com','i\'m coming to cairo shortly, and i believe i\'m going to need a car but i don\'t really now what car can suite me.',NULL);
/*!40000 ALTER TABLE `special_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terms_conditions`
--

DROP TABLE IF EXISTS `terms_conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terms_conditions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` text,
  `meta_keywords` text,
  `meta_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terms_conditions`
--

LOCK TABLES `terms_conditions` WRITE;
/*!40000 ALTER TABLE `terms_conditions` DISABLE KEYS */;
INSERT INTO `terms_conditions` VALUES (1,'term 1','<p>\n	TERM 1</p>\n',NULL,NULL),(2,'TERM 2','<p>\n	TERM 2</p>\n',NULL,NULL);
/*!40000 ALTER TABLE `terms_conditions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top_cities`
--

DROP TABLE IF EXISTS `top_cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(45) DEFAULT NULL,
  `description` text,
  `image` varchar(45) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `publish` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top_cities`
--

LOCK TABLES `top_cities` WRITE;
/*!40000 ALTER TABLE `top_cities` DISABLE KEYS */;
INSERT INTO `top_cities` VALUES (1,'Cairo','<table class=\"contentpaneopen\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 11px; color: rgb(255, 255, 255); font-family: Verdana, Geneva, sans-serif; vertical-align: top !important;\">\n	<tbody style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n		<tr style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n			<td style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\" valign=\"top\">\n				<p style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n					<span style=\"color:#000000;\"><span style=\"background-color:#fff0f5;\">Cairo The capital of Egypt and also the largest town in continent, the name suggests that &quot;the victorious city&quot;. it&#39;s set on each banks of the watercourse river close to the pinnacle of the river&#39;s delta in northern Egypt and has been settled for quite 6000 years, serving because the capital of various Egyptian civilizations. Cairo is understood regionally as &quot;Misr&quot;, the Arabic name for Egypt, as a result of its spatial relation in Egyptian life.&nbsp;</span><br style=\"margin: 0px; padding: 0px;\" />\n					<span style=\"background-color:#fff0f5;\">Greater Cairo is unfold across 3 of Egypt&#39;s body governorates. The north japanese half is understood as Kaliobia Governorate, whereas the geographic region is an element of the governorate of Giza, and also the japanese components and south japanese components square measure another governorate referred to as Cairo, the 3 components square measure glorious along as bigger Cairo. town is marked by the traditions and influences of the East and also the West, the traditional and also the fashionable. However, town conjointly reflects Egypt&#39;s growing financial condition, and it struggles to address issues caused by huge increment, urban area, and a deteriorating infrastructure</span></span></p>\n				<p style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n					<span style=\"color:#000000;\"><span style=\"background-color:#fff0f5;\">The city of Cairo covers a region of quite 453 sq klick (more than a hundred seventy five sq m), tho&#39; it&#39;s troublesome to separate town from a number of its immediate suburbs. Bracketed by the desert to the east, south, and west and delimited by the fertile river delta to the north, Cairo sits astraddle the watercourse, tho&#39; it spreads farther on the east bank than the west. Cairo conjointly includes many watercourse islands, that play a vital role within the lifetime of town. because the region&#39;s principal industrial, body, and tourer centre, Cairo contains several cultural establishments, business institutions, governmental offices, universities, and hotels, that along produce a dense pattern of constant activity.</span></span></p>\n				<p style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n					<span style=\"color:#000000;\"><span style=\"background-color:#fff0f5;\">The centre of downtown Cairo is Tahrir sq., set on the east bank. A hub of tourer activity, the huge and open sq. contains varied attractions, together with the Egyptian depository, the global organization headquarters, and also the fashionable Umar Makram house of worship. Extending from north to south on the east bank of the river is that the Corniche, Cairo&#39;s main road. set near is that the slim strip of land referred to as Garden town, one in every of the city&#39;s newer residential areas. within the centre of town is that the watercourse island of Zamalek (also referred to as Jezerah, that means &quot;the Island&quot;), that contains the upmarket residential and industrial neighborhood conjointly referred to as Zamalek, the Cairo theatre (founded in 1869), and also the Cairo Tower (1961). 3 bridges link the island with each banks of the watercourse. The island of Al-Rodah, set to the south, is joined to the dry land by 2 extra bridges, whereas another bridge to the north carries road and rail traffic across the river.</span></span></p>\n				<p style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n					<span style=\"color:#000000;\"><span style=\"background-color:#fff0f5;\">Outside the city&#39;s central space on the east bank, spanning from the northeast to the southeast, square measure the neighborhoods of Muslim Cairo. These neighborhoods square measure glorious for his or her slim streets, huddled markets (bazaars), and many Mosques, several qualitative analysis back to the medieval amount. South of the Muslim district is recent Cairo, wherever a number of the city&#39;s oldest field monuments is found. recent Cairo is that the home of Cairo&#39;s Coptic Christian community, and also the web site of the Coptic depository and variety of Coptic churches.</span></span></p>\n				<p style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n					<span style=\"color:#000000;\"><span style=\"background-color:#fff0f5;\">The irrigation of Cairo&#39;s desert edge has allowed for the event of suburbs, like Heliopolis, set to the northeast. alternative fashionable suburbs square measure interspersed with recently created migrant neighborhoods that accommodate the city&#39;s growing population. Industrial areas more crowd town, limiting its growth. a global landing field serves Cairo, set around twenty four klick (about fifteen m) northeast of the city; the Ramses railroad station and also the terminal square measure set close to downtown Cairo.</span></span></p>\n				<p style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n					<span style=\"color:#000000;\"><span style=\"background-color:#fff0f5;\">Cairo is that the chief industrial and industrial centre of Egypt. native industries manufacture cotton textiles, food product, construction provides, motorized vehicles, aircraft, and chemical fertilizers. Iron and steel square measure created at the south half simply outside town. Cairo is additionally a centre for presidency activities and repair industries. as a result of the city&#39;s heat climate and diverse historical and cultural attractions, business plays a vital role in its economy. Cairo receives merchandise shipped on the river at the watercourse port, set at the northern finish of town. From Cairo, product square measure sent by road, railroad, and waterway to the Mediterranean ports of Alexandria and Port aforesaid. town is connected by train service to alternative major cities. traffic jam may be a growing drawback in Cairo, however it&#39;s the sole town within the Middle East and continent that encompasses a subway. A subway system opened within the town in 1987.for the primary time carrying concerning two million passengers everyday. latterly a second line has been opened, this joined the recent line with the western very good within the geographic region (Giza), The third line continues to be below construction which can connect Cairo landing field to town centre and end within the busy suburban area of Imbaba.</span></span></p>\n				<p style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; vertical-align: top !important;\">\n					<span style=\"color:#000000;\"><span style=\"background-color:#fff0f5;\">Education And Culture&nbsp;</span><br style=\"margin: 0px; padding: 0px;\" />\n					<span style=\"background-color:#fff0f5;\">The most far-famed institution in Cairo is that the Al-Azhar University, the oldest within the Muslim world. The establishment has mature up round the Al-Azhar house of worship, the oldest house of worship in Cairo. The Fatimid based each the university and house of worship in 970. Al-Azhar University is associate authoritative voice throughout the Muslim world, and its positions on vital problems square measure potent in Egypt and also the Arab world. alternative establishments of upper education embrace Cairo University (Founded in1908) and personal Shams University (1950), that along enrols quite a hundred,000 students; and also the yankee University in Cairo, based in 1919, wherever the kids of Egypt&#39;s elite mingle with students and school from abroad. Egyptian history is displayed and preserved within the city&#39;s varied depository collections. The Egyptian depository (Founded in 1902) contains many thousands of artefacts, together with quite 1700 items from the gathering of Tutankhamen. The depository of Muslim Arts (1881) contains a colossal assortment with reference to early Muslim civilization, and also the Coptic depository (1910) traces the history of the Coptic community in Egypt. alternative Cairo depositorys maintain collections with reference to a lot of fashionable themes; these vary from the El-Gawhara Palace Museum, in-built 1811 within the Ottoman vogue, to the Mahmoud Khalil depository, based in 1963, that contains works by Vincent Gogh, Gauguin, Peter Paul Sir Peter Paul Rubens, and alternative European and Egyptian painters of honor.</span></span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n<p>\n	<span style=\"color:#000000;\"><span class=\"article_separator\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 11px; font-family: Verdana, Geneva, sans-serif; vertical-align: top !important;\"><span style=\"background-color:#fff0f5;\">&nbsp;</span></span><span style=\"font-family: Verdana, Geneva, sans-serif; font-size: 11px;\"><span style=\"background-color:#fff0f5;\">&nbsp;- See more at: http://egypt-car.com/egypt-main-cities/cairo#sthash.ZeVZ7erP.dpuf</span></span></span></p>\n','709bc-cairo_10.jpg',NULL,NULL,'1'),(2,'Aswan','<p>\n	aswan is a wonderful city</p>\n','e9224-cakes-wall-art-09.jpg',NULL,NULL,'1');
/*!40000 ALTER TABLE `top_cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfer_clculation`
--

DROP TABLE IF EXISTS `transfer_clculation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transfer_clculation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` int(11) DEFAULT NULL,
  `kilometer` char(12) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `kilometer_price` float DEFAULT NULL,
  `fixed` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_transfer_clculation_1_idx` (`car_type`),
  CONSTRAINT `fk_transfer_clculation_1` FOREIGN KEY (`car_type`) REFERENCES `car_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfer_clculation`
--

LOCK TABLES `transfer_clculation` WRITE;
/*!40000 ALTER TABLE `transfer_clculation` DISABLE KEYS */;
INSERT INTO `transfer_clculation` VALUES (26,1,'0-50',300,NULL,1),(27,1,'50-100',500,NULL,1),(28,1,'101',505,5,0),(29,1,'201',981.583,4.8835,0),(30,1,'301',1409.73,4.6835,0),(31,1,'401',1797.88,4.4835,0),(32,1,'501',2146.03,4.28349,0),(33,1,'601',2454.18,4.0835,0),(34,1,'701',2862.53,4.0835,0),(35,1,'801',3270.88,4.0835,0),(36,1,'901',3679.23,4.0835,0),(37,1,'1001',4087.58,4.0835,0);
/*!40000 ALTER TABLE `transfer_clculation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfer_order`
--

DROP TABLE IF EXISTS `transfer_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transfer_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pickup_location` varchar(45) DEFAULT NULL,
  `pickup_destination` varchar(145) DEFAULT NULL,
  `car_type` int(11) DEFAULT NULL,
  `car_model` int(11) DEFAULT NULL,
  `pickup_date` datetime DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `airliine` varchar(100) DEFAULT NULL,
  `flight_number` varchar(100) DEFAULT NULL,
  `pickup_sign` varchar(100) DEFAULT NULL,
  `reference_number` varchar(100) DEFAULT NULL,
  `additional_comments` text,
  `order_status` varchar(45) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_transfer_order_1_idx` (`car_type`),
  KEY `fk_transfer_order_2_idx` (`car_model`),
  KEY `fk_transfer_order_3_idx` (`user`),
  CONSTRAINT `fk_transfer_order_1` FOREIGN KEY (`car_type`) REFERENCES `car_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_transfer_order_2` FOREIGN KEY (`car_model`) REFERENCES `our_fleet` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_transfer_order_3` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfer_order`
--

LOCK TABLES `transfer_order` WRITE;
/*!40000 ALTER TABLE `transfer_order` DISABLE KEYS */;
INSERT INTO `transfer_order` VALUES (9,'Cairo Governorate, Egypt','Aswan, Egypt',2,2,'2015-03-03 15:10:00',888.814,3629.47,'egypt air lines','123456','hello essam','123456','<p>\n	Additional comments for your chauffeur</p>\n','Complete',1),(10,'Domyat, Qism Damietta, Damietta, Egypt','Ismailia, Qasr an Nile, Cairo Governorate, Egypt',2,2,'2015-02-18 15:10:00',189.245,946.23,'egypt air lines','123456','hello essam','123456','<p>\n	Additional comments for your chauffeur</p>\n','Complete',1),(11,'Cairo International Airport, Cairo Governorat','Alexandria Governorate, Egypt',4,4,'2014-04-03 15:10:00',205.988,1005.94,'egypt air lines','123456','hello essam','123456','comment','Complete',1);
/*!40000 ALTER TABLE `transfer_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_autologin`
--

LOCK TABLES `user_autologin` WRITE;
/*!40000 ALTER TABLE `user_autologin` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_autologin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profiles`
--

LOCK TABLES `user_profiles` WRITE;
/*!40000 ALTER TABLE `user_profiles` DISABLE KEYS */;
INSERT INTO `user_profiles` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `user_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'essamkhaled','$2a$08$AAb/8l4wTa2dlmY7KSbTtOWtVrYr25/26NdsGQ/RZKfNt1E52Gqdu','essam_2060@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'127.0.0.1','2014-10-19 19:14:49','2014-10-09 11:01:30','2014-10-19 17:14:49');
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

-- Dump completed on 2014-10-21  7:57:34
