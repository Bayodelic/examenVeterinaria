-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: veterinaria
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_mascotas` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clientes_mascotas_FK` (`id_mascotas`),
  CONSTRAINT `clientes_mascotas_FK` FOREIGN KEY (`id_mascotas`) REFERENCES `mascotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Carlos','González','555-5678',1),(2,'María','Rodríguez','555-9876',2),(6,'Juan','Hernández','555-6543',7),(8,'Miguel','Sánchez','555-3569',9),(9,'Carmen','Ramírez','555-9988',10),(11,'Mario','Navarro','555-1789',12),(12,'Alvaro','Sánchez','555-6512',13),(14,'Guadalupe','Pérez','555-8561',15),(15,'Juan','Lopez','555-9320',16),(16,'MariLu','Lopez','555-9320',17);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultas`
--

DROP TABLE IF EXISTS `consultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consultas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_mascota` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `veterinario` varchar(200) DEFAULT NULL,
  `id_veterinario` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consultas_mascotas_FK` (`id_mascota`),
  KEY `consultas_veterinario_FK` (`id_veterinario`),
  CONSTRAINT `consultas_mascotas_FK` FOREIGN KEY (`id_mascota`) REFERENCES `mascotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `consultas_veterinario_FK` FOREIGN KEY (`id_veterinario`) REFERENCES `veterinario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1235 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultas`
--

LOCK TABLES `consultas` WRITE;
/*!40000 ALTER TABLE `consultas` DISABLE KEYS */;
INSERT INTO `consultas` VALUES (1,1,'2024-05-20','11:00:00','Esterilización','Marco',1),(7,7,'2024-06-01','13:00:00','Tratamiento de comportamiento','Iván',3),(9,9,'2024-06-02','10:00:00','Estetica','Alvaro',4),(12,12,'2024-06-04','10:30:00','Vacunación','Marco',1),(13,13,'2024-06-05','09:30:00','Esterilización','Luna',55);
/*!40000 ALTER TABLE `consultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mascotas`
--

DROP TABLE IF EXISTS `mascotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mascotas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `especie` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `raza` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_cliente` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mascotas_clientes_FK` (`id_cliente`),
  CONSTRAINT `mascotas_clientes_FK` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mascotas`
--

LOCK TABLES `mascotas` WRITE;
/*!40000 ALTER TABLE `mascotas` DISABLE KEYS */;
INSERT INTO `mascotas` VALUES (1,'Odie','Perro','Basset Hound','2018-04-12','11:00:00',1),(2,'Bolt','Perro','Pastor Alemán','2016-07-09','09:00:00',2),(7,'Copito','Conejo','Mini Lop','2010-10-29','13:00:00',6),(9,'Lucky','Perro','Border Collie','2022-09-10','10:00:00',8),(10,'Leo','Gato','Gato Somalí','2020-12-14','12:00:00',9),(12,'Felix','Gato','Gato Tonkinés','2021-06-06','10:30:00',11),(13,'Spike','Perro','Doberman','2013-08-05','09:30:00',12),(15,'Kiki','Perro','Yorkshire Terrier','2012-07-18','13:00:00',14),(16,'Tasha','Perro','Doberman','2021-09-16','10:00:00',15),(17,'Pancho ','Perro','Pomerania','2024-07-23','09:00:00',16);
/*!40000 ALTER TABLE `mascotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tratamientos`
--

DROP TABLE IF EXISTS `tratamientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tratamientos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `precio` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tratamientos`
--

LOCK TABLES `tratamientos` WRITE;
/*!40000 ALTER TABLE `tratamientos` DISABLE KEYS */;
INSERT INTO `tratamientos` VALUES (1,'Vacunaciones','Vacuna contra la rabia, parvovirosis,etc',100.00),(2,'Desparasitación','Desparatización externa e interna',70.00),(3,'Cirugía ','Cirugía para remover un tumor',1000.00),(4,'Control de Peso','Programa de control de peso',100.00),(8,'Tratamiento de Alergia','Tratamiento para alergia estacional',150.00),(9,'Cirugía Dental','Extracción de diente dañado',400.00),(10,'Esterilización','Esterilización para control de natalidad',200.00),(11,'Tratamiento de comportamiento','Programa de modificación de conducta',300.00),(12,'Ecografía','Ecografía abdominal',200.00),(13,'Radiografía','Radiografía de cadera',120.00),(14,'Tratamiento gastrointestinal','Tratamiento para gastroenteritis',180.00),(15,'Baño','Baño',120.00),(201,'Castración','Castracion',500.00);
/*!40000 ALTER TABLE `tratamientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventatratamiento`
--

DROP TABLE IF EXISTS `ventatratamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventatratamiento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cantidad` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_tratamiento` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ventatratamiento_tratamientos_FK` (`id_tratamiento`),
  CONSTRAINT `ventatratamiento_tratamientos_FK` FOREIGN KEY (`id_tratamiento`) REFERENCES `tratamientos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventatratamiento`
--

LOCK TABLES `ventatratamiento` WRITE;
/*!40000 ALTER TABLE `ventatratamiento` DISABLE KEYS */;
INSERT INTO `ventatratamiento` VALUES (6,1,1,'2024-06-15',2),(7,0,0,'2024-10-12',3),(9,1,1,'2024-07-21',4),(11,1,1,'2024-11-24',8),(12,1,1,'2024-12-12',9),(13,0,0,'2024-05-28',10),(14,0,0,'2024-10-15',11),(15,1,1,'2024-10-14',12);
/*!40000 ALTER TABLE `ventatratamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veterinario`
--

DROP TABLE IF EXISTS `veterinario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veterinario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veterinario`
--

LOCK TABLES `veterinario` WRITE;
/*!40000 ALTER TABLE `veterinario` DISABLE KEYS */;
INSERT INTO `veterinario` VALUES (1,'Marco','Ruiz'),(3,'Iván','Carrera'),(4,'Alvaro','Sánchez'),(55,'Luna','Clark');
/*!40000 ALTER TABLE `veterinario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'veterinaria'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-23 12:23:56
