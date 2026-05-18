/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.5.29-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: trge
-- ------------------------------------------------------
-- Server version	10.5.29-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping routines for database 'trge'
--

--
-- Table structure for table `chefia`
--

DROP TABLE IF EXISTS `chefia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `chefia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anoini` int(4) NOT NULL,
  `anofin` int(4) NOT NULL,
  `chefe` varchar(255) NOT NULL,
  `vice` varchar(255) DEFAULT NULL,
  `descr` varchar(255) NOT NULL,
  `fotochefe` varchar(500) DEFAULT NULL,
  `fotovice` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chefia`
--

LOCK TABLES `chefia` WRITE;
/*!40000 ALTER TABLE `chefia` DISABLE KEYS */;
INSERT INTO `chefia` VALUES (1,2024,2028,'Wilson Araújo da Silva Junior','Ester Silveira Ramos','Chefe do Departamento de Genética',NULL,NULL),(2,2020,2024,'Ester Silveira Ramos','Nilce Maria Martinez Rossi','Chefe do Departamento de Genética',NULL,NULL),(3,2016,2020,'Aguinaldo Luiz Simões','Wilson Araújo da Silva Junior','Chefe do Departamento de Genética',NULL,NULL),(4,2012,2016,'Wilson Araújo da Silva Junior','Lucia Regina Martelli','Chefe do Departamento de Genética',NULL,NULL),(5,2008,2012,'Aguinaldo Luiz Simões','Wilson Araújo da Silva Junior','Chefe do Departamento de Genética',NULL,NULL),(6,2007,2008,'Nilce Maria Martinez Rossi','Aguinaldo Luiz Simões','Chefe do Departamento de Genética',NULL,NULL),(7,2006,2007,'Nilce Maria Martinez Rossi','Eucleia Primo Betioli Contel','Chefe do Departamento de Genética',NULL,NULL),(8,2005,2006,'Moacyr Antonio Mestriner','Eucleia Primo Betioli Contel','Chefe do Departamento de Genética',NULL,NULL),(9,2003,2005,'Nilce Maria Martinez Rossi','Eucleia Primo Betioli Contel','Chefe do Departamento de Genética',NULL,NULL),(10,2001,2003,'Nilce Maria Martinez Rossi','João Monteiro de Pina Neto','Chefe do Departamento de Genética',NULL,NULL),(11,1997,2001,'Eucleia Primo Betioli Contel','Nilce Maria Martinez Rossi','Chefe do Departamento de Genética',NULL,NULL),(12,1995,1997,'Francisco Alberto de Moura Duarte','Moacyr Antonio Mestriner','Chefe do Departamento de Genética',NULL,NULL),(13,1991,1995,'Moacyr Antonio Mestriner','Eucleia Primo Betioli Contel','Chefe do Departamento de Genética',NULL,NULL),(14,1987,1991,'Francisco Alberto de Moura Duarte','Moacyr Antonio Mestriner','Chefe do Departamento de Genética',NULL,NULL),(15,1984,1987,'Iris Ferrari','Moacyr Antonio Mestriner','Chefe do Departamento de Genética',NULL,NULL),(16,1981,1984,'Francisco Alberto de Moura Duarte','Iris Ferrari','Chefe do Departamento de Genética',NULL,NULL),(17,1979,1981,'Warwick Estevam Kerr','Iris Ferrari','Chefe do Departamento de Genética',NULL,NULL),(18,1979,1979,'Humberto de Queiroz Menezes','Iris Ferrari','Chefe do Departamento de Genética',NULL,NULL),(19,1975,1978,'Iris Ferrari','Geraldo Garcia Duarte','Chefe do Departamento de Genética',NULL,NULL),(20,1974,1975,'Warwick Estevam Kerr','Maria Aparecida de Paiva Franco','Chefe do Departamento de Genética',NULL,NULL),(21,1970,1974,'Warwick Estevam Kerr','Geraldo Garcia Duarte','Chefe do Departamento de Genética',NULL,NULL);
/*!40000 ALTER TABLE `chefia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-18 13:49:25
