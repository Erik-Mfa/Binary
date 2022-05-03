-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: binary
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `skateboard_tb`
--

DROP TABLE IF EXISTS `skateboard_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skateboard_tb` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `marca` varchar(45) NOT NULL,
  `imagem` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `preco` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skateboard_tb`
--

LOCK TABLES `skateboard_tb` WRITE;
/*!40000 ALTER TABLE `skateboard_tb` DISABLE KEYS */;
INSERT INTO `skateboard_tb` VALUES (11,'shape','Blind','shape_Blind.jpg','Shape Blind',300),(12,'shape','Blind','shape_Blind2.jpg','Shape Blind',300),(14,'truck','Crail','truck_Crail.jpg','Truck Crail',350),(15,'truck','Independent','truck_Independent.jpg','Truck Independent',650),(16,'truck','Independent','truck_Independent2.jpg','Truck Independent',500),(17,'truck','Independent','truck_Independent3.jpg','Truck Independent',700),(18,'truck','Stronger','truck_Stronger.jpg','Truck Stronger',300),(19,'truck','Trurium','truck_Trurium.jpg','Truck Trurium',250),(20,'shape','Baker','shape_Baker.jpg','Shape Baker',300),(22,'shape','Element','shape_Element.jpg','Shape Element',320),(23,'shape','Santa Cruz','shape_SantaCruz_Oldschool.jpg','Shape Santa Cruz',400),(24,'shape','Dropdead','shape_Dropdead_MuriloPeres.jpg','Shape Dropdead',300),(55,'rolamento','Spitfire','rolamento_Spitfire_Cheapshots.jpg','Rolamento Spitfire',90),(56,'rolamento','Toy Machine','rolamento_Toymachine.jpg','Rolamento ToyMachine',250),(57,'rolamento','Bones','rolamento_BonesSwiss.jpg','Rolamento Bones Swiss',200),(58,'rolamento','Grizzly','rolamento_Grizzly.jpg','Rolamento Grizzly',200),(59,'rolamento','Bones','rolamento_Superbones.jpg','Rolamento SuperBones',150),(60,'rolamento','Bones','rolamento_Redbones.jpg','Rolamento Redbones',120),(61,'lixa','Grizzly','lixa_Grizzly.jpg','Lixa Grizzly ',40),(63,'lixa','Shake Junt','lixa_ShakeJunt.jpg','Lixa Shake Junt ',70),(66,'lixa','Black Sheep','lixa_BlackSheep.jpg','Lixa Black Sheep',30),(69,'lixa','Black Sheep','lixa_BlackSheep2.jpg','Lixa Black Sheep TieDie',50),(72,'lixa','Santa Cruz','lixa_SantaCruz.jpg','Lixa Santa Cruz',30);
/*!40000 ALTER TABLE `skateboard_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-03 15:03:35
