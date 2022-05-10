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
-- Table structure for table `roupas_tb`
--

DROP TABLE IF EXISTS `roupas_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roupas_tb` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `preco` int NOT NULL,
  `tamanho` varchar(45) NOT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `nome` varchar(45) NOT NULL,
  `promocao` varchar(45) NOT NULL,
  `secaoRoupas` varchar(45) NOT NULL DEFAULT 'roupa',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roupas_tb`
--

LOCK TABLES `roupas_tb` WRITE;
/*!40000 ALTER TABLE `roupas_tb` DISABLE KEYS */;
INSERT INTO `roupas_tb` VALUES (1,'camiseta','lakai',100,'xx','camiseta_Lakai.jpg','Camiseta Lakai','30','roupa'),(6,'camiseta','Ripndip',180,'m','camiseta_Ripndip.jpg','Camiseta Ripndip','1','roupa'),(54,'camiseta','spitfire',100,'p','camiseta_Spitfire.jpg','Camiseta Spitfire','1','roupa'),(69,'camiseta','Creature',100,'m ','camiseta_Creature.jpg','Camiseta Creature','1','roupa');
/*!40000 ALTER TABLE `roupas_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-10 14:44:33
