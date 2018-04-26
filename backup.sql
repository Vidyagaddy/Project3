-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Linux (x86_64)
--
-- Host: faure    Database: nbarouxi
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

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
-- Table structure for table `attractions`
--

DROP TABLE IF EXISTS `attractions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attractions` (
  `attrID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `description` longtext,
  `image` varchar(256) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`attrID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attractions`
--

LOCK TABLES `attractions` WRITE;
/*!40000 ALTER TABLE `attractions` DISABLE KEYS */;
INSERT INTO `attractions` VALUES (4,'Split Rock Lighthouse','In November of 1905 nearly 30 ships were wrecked due to the storm named Mataafa, prompting the construction of this historic landmark. Construction completed in 1910 and the lighthouse quickly became a popular tourist location. Located off the coast of Lake Superior, it is one of the most photographed and visted locations in the state. Updated in 1940, the lighthouse received electricity and the once oil vapor lamp was replaced with a 1,000 watt bulb. Along with the updated lighting, the lighthouse had a fog signal installed onto the housing building next to the tower. The Lighthouse is no longer in operation as it was retired in 1969, but it is maintained and kept open as part of the Split Rock Lighthouse State Park. In honor of the Edmund Fitzgerald (which sank in 1975), the lighthouse turns on it\'s light once a year on November 10th. ','36f8514019a519f9598e92c0423a4ae3.jpg','MN'),(5,'Saint Paul Cathedral','The St Paul Cathedral is a Roman Catholic cathedral, located in Saint Paul, Minnesota. The cathedral rests on Cathedral hill and looks over downtown St. Paul. Featuring a unique copper-clad dome, the cathedral is the 3rd largest and fourth tallest in the United States, making it a must see when touring Minnesota. The inside  is lit by 24 stained glass windows with pictures of angelic choirs. As you walk around you\'ll notice four marble statues of the four evangelists which are placed into the four niches of the piers in each of the church\'s four corners. To provide a brief history of the church, it was first built on November 1, 1841 thanks to Father Lucien Galtier. Originally the chapel measured 25 ft long by 18 ft wide. in 1851, the chapel was pronounced the frist csathedral when Joseph Cretin was appointed the Bishop of St. Paul. At this time, the population of the city was growing so quickly that Cretin had to buikd a larger cathedral to compensate. It transformed into a 3 story building with a library, a kitchen, and rooms for schooling. In 1906 the current cathedral was started by Archbishop John Ireland.','bd1e90c7a21497c758baf11011ac1b1e.jpg','MN'),(6,'Minnesota State Fair','The Minnesota state fair is the biggest state fair in all of the United States. With its slogan “The Great Minnesota Get-Together”, has the highest daily attendance of any other state in the United States, just following Texas. With rides, games, and other events it can provide a great time for any family or group of people looking to visit Minnesota. It is located in between St. Paul and Minneapolis. Their shows include best livestock, cooking displays, art, and other fun arts and crafts. The fair goes on during August and September for two weeks. With their famous homemade doughnuts, fun crafts like sand in a bottle, and exciting rides, the fair is a great time for all ages and attracts both natives to the state as well as outsiders to learn about the culture and atmosphere of Minnesota.','bd25e4a7069b2f72b52781858526a9b4.jpg','MN'),(7,'Isle Royale National Park','From mid spring to the first of November, you can visit Isle Royale National Park, an island wilderness nestled in the beautiful Lake Superior.','4be5db2e5ef52409e581d34194dce3fc.jpg','MI'),(8,'The Grande Ballroom','Detroit is known for it\'s abandoned buildings. This one was once a 1920s jazz club that transformed over the decades into a dancehall,roller skating rink, mattress factory, and ended as a rock concert venue in the 1960s. If you\'re up for the adventure, this crumbling piece of history is open to the public if you can find your way in.','6ecfa7dd5b58290ca70a5a6271bd438e.jpg','MI'),(9,'Electric Forest','Every summer people from all over the world gather in Rothbury, Michigan for one of the largest music festivals in the nation, known as Electric Forest. It spans two weekends (the last 2 weekends of June), each packed with 4 days of music, art, and fun for festival goers. The best part? You can camp in the middle of a forest that \"comes alive\" at night. Be sure to plan this one with friends!','5caa595d395491f6ca6db860d88b8350.jpg','MI'),(13,'Sand Dunes','it&#39;s a &#34;high&#34; desert','Welcome-to-Great-Sand-Dunes-National-Park.jpg','CO');
/*!40000 ALTER TABLE `attractions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `name` varchar(256) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `attrID` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT '1',
  KEY `attrID` (`attrID`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`attrID`) REFERENCES `attractions` (`attrID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES ('Niki','cool place!',4,1),('Niki','hi',7,1),('Niki','hi',7,1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logins` (
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES ('nbarouxi','9a1996efc97181f0aee18321aa3b3b12',1);
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `studentID` int(11) DEFAULT NULL,
  `firstName` varchar(256) DEFAULT NULL,
  `lastName` varchar(256) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (124,'Jane','Doe',21),(125,'John','Roe',22),(126,'Jane','Roe',22),(127,'Johnny','Doe',19),(128,'Janie','Doe',23);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT 'mr.',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2018-04-26 14:17:50
