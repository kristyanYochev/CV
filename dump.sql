-- MySQL dump 10.16  Distrib 10.2.11-MariaDB, for osx10.12 (x86_64)
--
-- Host: localhost    Database: php_test
-- ------------------------------------------------------
-- Server version	10.2.11-MariaDB

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
-- Table structure for table `hackathons`
--

DROP TABLE IF EXISTS `hackathons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hackathons` (
  `name` varchar(128) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `media_type` varchar(32) DEFAULT NULL,
  `media_url` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hackathons`
--

LOCK TABLES `hackathons` WRITE;
/*!40000 ALTER TABLE `hackathons` DISABLE KEYS */;
INSERT INTO `hackathons` VALUES ('HackTUES3 - Трето място + специална награда от Dopamine','Наградата беше спечелена с уеб приложение за редактиране на изображения. Аз работех по сървърната част\n                                на проекта (Authentication, File Saving, DB Management, User Accounts) както и помагах с frontend частта.\n                                До финала бяха допуснати 6 отбора, от които 3 взеха награди (ние бяхме един от тези 3). Освен третото място,\n                                аз спечелих и специална награда от Dopamine - една от фирмите, които спонсорираха събитието.','carousel','/assets/hacktues3/award.jpg;./assets/hacktues3/code.jpg;/assets/hacktues3/judges.jpg;./assets/hacktues3/presenting.jpg;/assets/hacktues3/spec_award.jpg'),('Hack30xTUES - Специална награда от Cloud Balkan','Наградата беше сепечелена с проекта CodeHub, който може да се види по-горе.','carousel','/assets/hack30xtues/award.png;./assets/hack30xtues/team.jpg'),('Smart School 4 Smart School Children - Първо място в категориите \"Игри и забавно дигитално учене\" и \"Приятел иноватор в училище\"','За този хакатон аз и моят съотборник създадохме SConnect, което представлява социална мрежа, която\n                                позволява да си намираш нови приятели на база интереси.<br>\n                                Github: <a href=\"https://github.com/kristyanYochev/SConnect\">Тук</a>',NULL,NULL),('Balkan Hackathon - Финалист','На това събитие трябваше да направим нещо за дигиталното бъдеще в рамките на 24 часа. И нашето решение беше\n                                да автоматизираме организацията на файлове, като направим Cloud Storage платформа, която автоматично категоризира\n                                файлове спрямо тяхното съдържание. Като дойде време за представянето тя можеше да слага категории на изображения\n                                и PDF файлове. Освен това правеше обобщение на текста в PDF файлове, така че да може човек бързо да разбере\n                                какво пише в даден документ без да се налага да го отваря и чете целия.',NULL,NULL),('Sports Hackathons - Първо място','Това състезание ни вдъхнови да създадем в рамките на 2 дни платформа за онлайн тренировки. Целта беше да\n                                може да си намериш треньор онлайн и той, използвайки нашата платформа, да ти казва какви упражнения по колко\n                                пъти и колко серии трябва да правиш, с какво утежнение да го правиш и какво и по колко да ядеш.',NULL,NULL);
/*!40000 ALTER TABLE `hackathons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `name` varchar(64) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `github` varchar(128) DEFAULT NULL,
  `live_demo` varchar(128) DEFAULT NULL,
  `media_type` varchar(10) DEFAULT NULL,
  `media_url` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES ('Code Hub','Code Hub е колаборативен редактор на код, създаден с цел да улесни обучението по програмиране.\n                                Проекта беше създаден по време на и за участие в хакатона Hack30xTUES.\n                                Той позволява на учениците в реално време да виждат какво прави техният учител, както и обратното.\n                                Така те могат да учат без да се налага да си извиват вратовете по всевъзможни начини само за да видят\n                                дъската, а после като дойде време за упражненията, учителят може да наблюдава кой пише, кой не, кой има\n                                затруднения със някоя задача и може да му/ѝ помогне без да става от компютъра.','https://github.com/SashoStoichkov/Project-Hogwarts','http://85.196.173.73:5000','video','https://www.youtube.com/embed/zULzGhnWYX0'),('World Cup Prediction','Сайт, който предсказва резулататите от световното първенство по футбол с 55% успеваемост.','https://github.com/VIVelev/WorldCup-Prediction',NULL,NULL,NULL),('PPL(A) примерни тестове','Сайт с примерни теоретични тестове за любител пилот на български.',NULL,'http://85.196.173.73/','carousel','./assets/PPLTests/home.png;./assets/PPLTests/testStart.png;./assets/PPLTests/testMiddle.png;./assets/PPLTests/unsolvedQuestions.png;./assets/PPLTests/solvedQuestions.png;');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tech_skills`
--

DROP TABLE IF EXISTS `tech_skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tech_skills` (
  `name` varchar(30) DEFAULT NULL,
  `percentage` int(3) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tech_skills`
--

LOCK TABLES `tech_skills` WRITE;
/*!40000 ALTER TABLE `tech_skills` DISABLE KEYS */;
INSERT INTO `tech_skills` VALUES ('Python',95,'Работил съм предимно с Flask microframework за разработка на Web приложения.\n                    Освен него имам опит и с PyQt5.'),('Javascript',85,'Използвам го с ReactJS framework за frontend на Web приложения.'),('HTML5 & CSS3',95,''),('C/C++',75,'Използвам ги предимно в Embedded програмиране с Arduino.'),('SQL',80,'');
/*!40000 ALTER TABLE `tech_skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'kris.yochev@gmail.com','7c3f25dc6f2b4a947326522a5f16ad692e49582dfc57bfba2e5ba60627561512');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-28 14:14:19
