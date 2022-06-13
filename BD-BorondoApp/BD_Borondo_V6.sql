-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: borondo_v5
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `alojamientos`
--

DROP TABLE IF EXISTS `alojamientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alojamientos` (
  `ID_Alojamiento` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(700) DEFAULT NULL,
  `Costo` varchar(45) DEFAULT NULL,
  `Imagen` longblob DEFAULT NULL,
  `Id_Ciudad` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `Id_Puntuacion` int(11) NOT NULL,
  PRIMARY KEY (`ID_Alojamiento`),
  KEY `Id_Ciudad` (`Id_Ciudad`),
  KEY `Id_Puntuacion` (`Id_Puntuacion`),
  CONSTRAINT `alojamientos_ibfk_1` FOREIGN KEY (`Id_Ciudad`) REFERENCES `ciudades` (`ID_Ciudad`),
  CONSTRAINT `alojamientos_ibfk_2` FOREIGN KEY (`Id_Puntuacion`) REFERENCES `puntuaciones` (`ID_Puntuacion`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alojamientos`
--

LOCK TABLES `alojamientos` WRITE;
/*!40000 ALTER TABLE `alojamientos` DISABLE KEYS */;
INSERT INTO `alojamientos` VALUES (1,'AltoPrado Popayán','El Altoprado Popayán se encuentra en Popayán y ofrece vistas a la ciudad y WiFi gratuita. el personal en general muy amable y todo, todo muy limpio y su ubicación','$170.000','',1,NULL,0),(2,'La mercedes boutique','Todas las habitaciones cuentan con TV de pantalla plana vía satélite y baño privado. Hay recepción 24 horas, servicio de traslado, servicio de habitaciones y WiFi gratuita en todas las instalaciones.','$250.000','',2,NULL,0),(3,'Cotinga hotel spa','Ofrece alojamiento con restaurante, aparcamiento privado gratuito, piscina al aire libre y bar. Ofrece habitaciones familiares y terraza. Hay servicio de habitaciones, salón compartido y servicio de cambio de divisa.','$200.000','',3,NULL,0),(4,'Lodge paraiso verde','Ofrece alojamiento con salón compartido, aparcamiento privado gratuito, jardín y terraza. Algunas habitaciones tienen balcón con vistas a la montaña.','$230.000','',4,NULL,0),(5,'Hostal caño nevera','El Hostal Caño Nevera se encuentra a 11 km de Caño Cristales y ofrece alojamiento, restaurante, bar, salón compartido y jardín.','$190.000','',5,NULL,0),(6,'AltoPrado Popayán','El Altoprado Popayán se encuentra en Popayán y ofrece vistas a la ciudad y WiFi gratuita. el personal en general muy amable y todo, todo muy limpio y su ubicación','$170.000','',1,NULL,0),(7,'La mercedes boutique','Todas las habitaciones cuentan con TV de pantalla plana vía satélite y baño privado. Hay recepción 24 horas, servicio de traslado, servicio de habitaciones y WiFi gratuita en todas las instalaciones.','$250.000','',2,NULL,0),(8,'Cotinga hotel spa','Ofrece alojamiento con restaurante, aparcamiento privado gratuito, piscina al aire libre y bar. Ofrece habitaciones familiares y terraza. Hay servicio de habitaciones, salón compartido y servicio de cambio de divisa.','$200.000','',3,NULL,0),(9,'Lodge paraiso verde','Ofrece alojamiento con salón compartido, aparcamiento privado gratuito, jardín y terraza. Algunas habitaciones tienen balcón con vistas a la montaña.','$230.000','',4,NULL,0),(10,'Hostal caño nevera','El Hostal Caño Nevera se encuentra a 11 km de Caño Cristales y ofrece alojamiento, restaurante, bar, salón compartido y jardín.','$190.000','',5,NULL,0),(11,'AltoPrado Popayán','El Altoprado Popayán se encuentra en Popayán y ofrece vistas a la ciudad y WiFi gratuita. el personal en general muy amable y todo, todo muy limpio y su ubicación','$170.000','',1,NULL,0),(12,'La mercedes boutique','Todas las habitaciones cuentan con TV de pantalla plana vía satélite y baño privado. Hay recepción 24 horas, servicio de traslado, servicio de habitaciones y WiFi gratuita en todas las instalaciones.','$250.000','',2,NULL,0),(13,'Cotinga hotel spa','Ofrece alojamiento con restaurante, aparcamiento privado gratuito, piscina al aire libre y bar. Ofrece habitaciones familiares y terraza. Hay servicio de habitaciones, salón compartido y servicio de cambio de divisa.','$200.000','',3,NULL,0),(14,'Lodge paraiso verde','Ofrece alojamiento con salón compartido, aparcamiento privado gratuito, jardín y terraza. Algunas habitaciones tienen balcón con vistas a la montaña.','$230.000','',4,NULL,0),(15,'Hostal caño nevera','El Hostal Caño Nevera se encuentra a 11 km de Caño Cristales y ofrece alojamiento, restaurante, bar, salón compartido y jardín.','$190.000','',5,NULL,0);
/*!40000 ALTER TABLE `alojamientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudades` (
  `ID_Ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_Ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudades`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` VALUES (1,'Popayan'),(2,'Cali'),(3,'Quindio'),(4,'Manizales'),(5,'Macarena');
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_reservas`
--

DROP TABLE IF EXISTS `detalle_reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_reservas` (
  `Fecha_Salida` date NOT NULL,
  `Fecha_Llegada` date NOT NULL,
  `IVA` float DEFAULT NULL,
  `Costo_Total` varchar(45) DEFAULT NULL,
  `Id_Lugar` int(11) NOT NULL,
  `Id_Alojamiento` int(11) NOT NULL,
  `Id_Transporte` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_FormaPago` int(11) NOT NULL,
  `Id_Reserva` int(11) NOT NULL,
  `Cantidad` varchar(50) NOT NULL,
  `Costo` varchar(100) NOT NULL,
  `Subtotal` varchar(100) NOT NULL,
  KEY `Id_Lugar` (`Id_Lugar`),
  KEY `Id_Alojamiento` (`Id_Alojamiento`),
  KEY `Id_Transporte` (`Id_Transporte`),
  KEY `Id_Usuario` (`Id_Usuario`),
  KEY `Id_FormaPago` (`Id_FormaPago`),
  KEY `Id_Reserva` (`Id_Reserva`),
  CONSTRAINT `detalle_reservas_ibfk_1` FOREIGN KEY (`Id_Lugar`) REFERENCES `lugares` (`ID_Lugar`),
  CONSTRAINT `detalle_reservas_ibfk_2` FOREIGN KEY (`Id_Alojamiento`) REFERENCES `alojamientos` (`ID_Alojamiento`),
  CONSTRAINT `detalle_reservas_ibfk_3` FOREIGN KEY (`Id_Transporte`) REFERENCES `transportes` (`ID_Transporte`),
  CONSTRAINT `detalle_reservas_ibfk_4` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`ID_Usuario`),
  CONSTRAINT `detalle_reservas_ibfk_5` FOREIGN KEY (`Id_FormaPago`) REFERENCES `forma_pagos` (`ID_Forma`),
  CONSTRAINT `detalle_reservas_ibfk_6` FOREIGN KEY (`Id_Reserva`) REFERENCES `reservas` (`Id_Reserva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_reservas`
--

LOCK TABLES `detalle_reservas` WRITE;
/*!40000 ALTER TABLE `detalle_reservas` DISABLE KEYS */;
INSERT INTO `detalle_reservas` VALUES ('2022-05-30','2022-06-10',1,'$450.000',3,5,1,2,2,0,'','',''),('2022-06-05','2022-06-20',10,'$500.000',1,1,2,1,1,0,'','',''),('2022-06-01','2022-06-30',2,'$400.000',4,3,1,3,3,0,'','',''),('2022-06-11','2022-06-22',10,'$550.000',2,2,4,4,4,0,'','',''),('2022-08-05','2022-08-25',10,'$600.000',5,4,5,5,5,0,'','',''),('2022-05-30','2022-06-10',1,'$450.000',3,5,1,2,2,0,'','',''),('2022-06-05','2022-06-20',10,'$500.000',1,1,2,1,1,0,'','',''),('2022-06-01','2022-06-30',2,'$400.000',4,3,1,3,3,0,'','',''),('2022-06-11','2022-06-22',10,'$550.000',2,2,4,4,4,0,'','',''),('2022-08-05','2022-08-25',10,'$600.000',5,4,5,5,5,0,'','',''),('2022-05-30','2022-06-10',1,'$450.000',3,5,1,2,2,0,'','',''),('2022-06-05','2022-06-20',10,'$500.000',1,1,2,1,1,0,'','',''),('2022-06-01','2022-06-30',2,'$400.000',4,3,1,3,3,0,'','',''),('2022-06-11','2022-06-22',10,'$550.000',2,2,4,4,4,0,'','',''),('2022-08-05','2022-08-25',10,'$600.000',5,4,5,5,5,0,'','','');
/*!40000 ALTER TABLE `detalle_reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `ID_Factura` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Emision` date DEFAULT NULL,
  `Id_reserva` int(11) NOT NULL,
  PRIMARY KEY (`ID_Factura`),
  KEY `Id_reserva` (`Id_reserva`),
  CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`Id_reserva`) REFERENCES `reservas` (`Id_Reserva`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,'2022-08-01',0),(2,'2022-05-25',0),(3,'2022-06-09',0),(4,'2022-06-01',0),(5,'2022-05-28',0),(6,'2022-08-01',0),(7,'2022-05-25',0),(8,'2022-06-09',0),(9,'2022-06-01',0),(10,'2022-05-28',0),(11,'2022-08-01',0),(12,'2022-05-25',0),(13,'2022-06-09',0),(14,'2022-06-01',0),(15,'2022-05-28',0);
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forma_pagos`
--

DROP TABLE IF EXISTS `forma_pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forma_pagos` (
  `ID_Forma` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Tarjeta` int(11) NOT NULL,
  `CVV` varchar(3) NOT NULL,
  `Nombre_Titular` varchar(45) DEFAULT NULL,
  `Fecha_Caducidad` varchar(45) DEFAULT NULL,
  `Id_Tarjeta` int(11) NOT NULL,
  PRIMARY KEY (`ID_Forma`),
  KEY `Id_Tarjeta` (`Id_Tarjeta`),
  CONSTRAINT `forma_pagos_ibfk_1` FOREIGN KEY (`Id_Tarjeta`) REFERENCES `tarjetas` (`ID_Tarjeta`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_pagos`
--

LOCK TABLES `forma_pagos` WRITE;
/*!40000 ALTER TABLE `forma_pagos` DISABLE KEYS */;
INSERT INTO `forma_pagos` VALUES (1,452590121,'423','Angie Giraldo','2024-02-24',1),(2,249045628,'891','Jhoan Narváez','2023-06-12',2),(3,348761295,'231','Zaynab Adbed','2025-04-23',2),(4,184578329,'892','Karen Osorio','2023-09-23',1),(5,128945231,'551','Alex Oliveira','2024-05-21',1),(6,452590121,'423','Angie Giraldo','2024-02-24',1),(7,249045628,'891','Guillermo Cano','2023-06-12',2),(8,348761295,'231','Zaynab Adbed','2025-04-23',2),(9,184578329,'892','Karen Osorio','2023-09-23',1),(10,128945231,'551','Alex Oliveira','2024-05-21',1),(11,452590121,'423','Angie Giraldo','2024-02-24',1),(12,249045628,'891','Guillermo Cano','2023-06-12',2),(13,348761295,'231','Zaynab Adbed','2025-04-23',2),(14,184578329,'892','Karen Osorio','2023-09-23',1),(15,128945231,'551','Alex Oliveira','2024-05-21',1);
/*!40000 ALTER TABLE `forma_pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugares`
--

DROP TABLE IF EXISTS `lugares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugares` (
  `ID_Lugar` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(700) DEFAULT NULL,
  `Costo` varchar(45) DEFAULT NULL,
  `Imagen` longblob DEFAULT NULL,
  `Id_Ciudad` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `Id_Puntuacion` int(11) NOT NULL,
  PRIMARY KEY (`ID_Lugar`),
  KEY `Id_Ciudad` (`Id_Ciudad`),
  KEY `Id_Puntuacion` (`Id_Puntuacion`),
  CONSTRAINT `lugares_ibfk_1` FOREIGN KEY (`Id_Ciudad`) REFERENCES `ciudades` (`ID_Ciudad`),
  CONSTRAINT `lugares_ibfk_2` FOREIGN KEY (`Id_Puntuacion`) REFERENCES `puntuaciones` (`ID_Puntuacion`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares`
--

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;
INSERT INTO `lugares` VALUES (1,'Termales del Coconuco','cuenta con los Termales de Agua Tibia y Termales de Agua Hirviendo; piscinas en las que no solo puedes bañarte sino que disfrutar de las grandiosas propiedades curativas que tienen este tipo de aguas.','$80.000','',1,NULL,0),(2,'Cerro tres cruces','Ubicado en el corregimiento de Montebello en el área rural del municipio. Está ubicado al noroccidente de la ciudad y tiene 1480 msnm. En su cima se encuentran el monumento de las Tres Cruces, una estación de policía y varias antenas de telecomunicaciones.','$70.000','',2,NULL,0),(3,'Caño cristales','Un lugar que al menos una vez en la vida debes visitar, sencillamente espectacular todos sus alrededores, su tranquilidad, belleza.','$150.000','',5,NULL,0),(4,'Valle del cocora','Parque pintoresco lleno de palmas de cera de más de 60 m en un entorno frondoso con senderismo y restaurantes','$145.000','',3,NULL,0),(5,'Termales de santa rosa','Descubre un lugar entre las montañas del paisaje cultural cafetero donde te sentirás tranquilo y te conectarás con la naturaleza por medio de experiencias únicas de bienestar y relajación para tu mente, cuerpo y alma.','$120.000','',4,NULL,0),(6,'Termales del Coconuco','cuenta con los Termales de Agua Tibia y Termales de Agua Hirviendo; piscinas en las que no solo puedes bañarte sino que disfrutar de las grandiosas propiedades curativas que tienen este tipo de aguas.','$80.000','',1,NULL,0),(7,'Cerro tres cruces','Ubicado en el corregimiento de Montebello en el área rural del municipio. Está ubicado al noroccidente de la ciudad y tiene 1480 msnm. En su cima se encuentran el monumento de las Tres Cruces, una estación de policía y varias antenas de telecomunicaciones.','$70.000','',2,NULL,0),(8,'Caño cristales','Un lugar que al menos una vez en la vida debes visitar, sencillamente espectacular todos sus alrededores, su tranquilidad, belleza.','$150.000','',5,NULL,0),(9,'Valle del cocora','Parque pintoresco lleno de palmas de cera de más de 60 m en un entorno frondoso con senderismo y restaurantes','$145.000','',3,NULL,0),(10,'Termales de santa rosa','Descubre un lugar entre las montañas del paisaje cultural cafetero donde te sentirás tranquilo y te conectarás con la naturaleza por medio de experiencias únicas de bienestar y relajación para tu mente, cuerpo y alma.','$120.000','',4,NULL,0),(11,'Termales del Coconuco','cuenta con los Termales de Agua Tibia y Termales de Agua Hirviendo; piscinas en las que no solo puedes bañarte sino que disfrutar de las grandiosas propiedades curativas que tienen este tipo de aguas.','$80.000','',1,NULL,0),(12,'Cerro tres cruces','Ubicado en el corregimiento de Montebello en el área rural del municipio. Está ubicado al noroccidente de la ciudad y tiene 1480 msnm. En su cima se encuentran el monumento de las Tres Cruces, una estación de policía y varias antenas de telecomunicaciones.','$70.000','',2,NULL,0),(13,'Caño cristales','Un lugar que al menos una vez en la vida debes visitar, sencillamente espectacular todos sus alrededores, su tranquilidad, belleza.','$150.000','',5,NULL,0),(14,'Valle del cocora','Parque pintoresco lleno de palmas de cera de más de 60 m en un entorno frondoso con senderismo y restaurantes','$145.000','',3,NULL,0),(15,'Termales de santa rosa','Descubre un lugar entre las montañas del paisaje cultural cafetero donde te sentirás tranquilo y te conectarás con la naturaleza por medio de experiencias únicas de bienestar y relajación para tu mente, cuerpo y alma.','$120.000','',4,NULL,0);
/*!40000 ALTER TABLE `lugares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquetes`
--

DROP TABLE IF EXISTS `paquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paquetes` (
  `ID_Paquete` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Lugar` int(11) NOT NULL,
  `Id_Transporte` int(11) NOT NULL,
  `Id_Alojamiento` int(11) NOT NULL,
  PRIMARY KEY (`ID_Paquete`),
  KEY `Id_Lugar` (`Id_Lugar`),
  KEY `Id_Transporte` (`Id_Transporte`),
  KEY `Id_Alojamiento` (`Id_Alojamiento`),
  CONSTRAINT `paquetes_ibfk_1` FOREIGN KEY (`Id_Lugar`) REFERENCES `lugares` (`ID_Lugar`),
  CONSTRAINT `paquetes_ibfk_2` FOREIGN KEY (`Id_Transporte`) REFERENCES `transportes` (`ID_Transporte`),
  CONSTRAINT `paquetes_ibfk_3` FOREIGN KEY (`Id_Alojamiento`) REFERENCES `alojamientos` (`ID_Alojamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquetes`
--

LOCK TABLES `paquetes` WRITE;
/*!40000 ALTER TABLE `paquetes` DISABLE KEYS */;
INSERT INTO `paquetes` VALUES (1,1,3,1),(2,5,2,4),(3,3,5,5),(4,4,1,3),(5,5,1,4),(6,1,3,1),(7,5,2,4),(8,3,5,5),(9,4,1,3),(10,5,1,4),(11,1,3,1),(12,5,2,4),(13,3,5,5),(14,4,1,3),(15,5,1,4);
/*!40000 ALTER TABLE `paquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pqrs`
--

DROP TABLE IF EXISTS `pqrs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pqrs` (
  `ID_Pqrs` int(11) NOT NULL AUTO_INCREMENT,
  `Correo_Remitente` varchar(50) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Telefono` varchar(30) DEFAULT NULL,
  `Id_Tipo` int(11) NOT NULL,
  `Asunto` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(700) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`ID_Pqrs`),
  KEY `Id_Tipo` (`Id_Tipo`),
  CONSTRAINT `pqrs_ibfk_1` FOREIGN KEY (`Id_Tipo`) REFERENCES `tipo_pqrs` (`ID_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pqrs`
--

LOCK TABLES `pqrs` WRITE;
/*!40000 ALTER TABLE `pqrs` DISABLE KEYS */;
INSERT INTO `pqrs` VALUES (1,'Savargar98@gmail.com','Santiago Vargas','3218972321',2,'No puedo cambiar mi contraseña','','2022-05-02'),(2,'Agerman9112@gmail.com','German Ortiz','3157902134',4,'Excelente servicio','Me gustaria que la empresa se expandiera a nivel internacional, ya que me encuentro viajando constantemente','2022-03-22'),(3,'Juanm12@gmail.com','Juan Marquez','3001253478',2,'Error al generar mi informe','Al darle click en generar informe me direcciona a un error 404','2022-03-17'),(4,'Oliver12@gmail.com','Oliver Giroud','3183890123',1,'Necesito postergar mi viaje','Debido a mi delicado estado de salud requiero a la empresa BORONDOAPP postergar mi viaje en los proximos 15 dias apartir de separarlo','2022-04-03'),(5,'Sarabern90@gmail.com','Sara Hernandez','3229013421',2,'Pagina Lenta','Al cancelar mi reserva la pagina se queda cargando durante varios minutos, lo cual me es imposible completar mi pedido','2022-05-11');
/*!40000 ALTER TABLE `pqrs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pqrs_contestadas`
--

DROP TABLE IF EXISTS `pqrs_contestadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pqrs_contestadas` (
  `ID_Pqrs_contestada` int(11) NOT NULL AUTO_INCREMENT,
  `Respuesta` varchar(700) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Id_Pqrs` int(11) NOT NULL,
  `Id_Rol` int(11) NOT NULL,
  PRIMARY KEY (`ID_Pqrs_contestada`),
  KEY `Id_Rol` (`Id_Rol`),
  KEY `Id_Pqrs` (`Id_Pqrs`),
  CONSTRAINT `pqrs_contestadas_ibfk_1` FOREIGN KEY (`Id_Rol`) REFERENCES `roles` (`ID_Rol`),
  CONSTRAINT `pqrs_contestadas_ibfk_2` FOREIGN KEY (`Id_Pqrs`) REFERENCES `pqrs` (`ID_Pqrs`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pqrs_contestadas`
--

LOCK TABLES `pqrs_contestadas` WRITE;
/*!40000 ALTER TABLE `pqrs_contestadas` DISABLE KEYS */;
INSERT INTO `pqrs_contestadas` VALUES (1,'Hola Santiago, Pronto te haremos llegar un correo para el restablecimiento de tu contraseña','2022-05-03',1,0),(2,'Hola German, Gracias por siempre elegirnos, Claro que si, pronto estaremos a nivel internacional','2022-03-23',2,0),(3,'Hola Juan, Pronto te contactaremos con Soporte en sitio para que puedas solucionar tu problema','2022-03-17',3,0),(4,'Hola Oliver, lamentamos tu estado de salud, porfavor diligencia el formulario que te enviamos al correo','2022-04-05',4,0),(5,'Hola Sara, En este momento nuestros servidores se encuentran en mantenimiento los cual podria tardar unos minutos','2022-05-11',5,0);
/*!40000 ALTER TABLE `pqrs_contestadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puntuaciones`
--

DROP TABLE IF EXISTS `puntuaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puntuaciones` (
  `ID_Puntuacion` int(11) NOT NULL AUTO_INCREMENT,
  `Puntuacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Puntuacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puntuaciones`
--

LOCK TABLES `puntuaciones` WRITE;
/*!40000 ALTER TABLE `puntuaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `puntuaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservas` (
  `Id_Reserva` int(11) NOT NULL AUTO_INCREMENT,
  `Fech_reserva` date DEFAULT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Costo` varchar(45) DEFAULT NULL,
  `Iva` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id_Reserva`),
  KEY `Id_usuario` (`Id_usuario`),
  CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuarios` (`ID_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `ID_Rol` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_Rol` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_Rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Usuario'),(2,'Administrador');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjetas`
--

DROP TABLE IF EXISTS `tarjetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjetas` (
  `ID_Tarjeta` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_Tarjeta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjetas`
--

LOCK TABLES `tarjetas` WRITE;
/*!40000 ALTER TABLE `tarjetas` DISABLE KEYS */;
INSERT INTO `tarjetas` VALUES (1,'Crédito'),(2,'Débito');
/*!40000 ALTER TABLE `tarjetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_pqrs`
--

DROP TABLE IF EXISTS `tipo_pqrs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_pqrs` (
  `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_pqrs`
--

LOCK TABLES `tipo_pqrs` WRITE;
/*!40000 ALTER TABLE `tipo_pqrs` DISABLE KEYS */;
INSERT INTO `tipo_pqrs` VALUES (1,'Petición'),(2,'Queja'),(3,'Reclamo'),(4,'Sugerencia');
/*!40000 ALTER TABLE `tipo_pqrs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transportes`
--

DROP TABLE IF EXISTS `transportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transportes` (
  `ID_Transporte` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Capacidad` varchar(45) NOT NULL,
  `Descripcion` varchar(700) DEFAULT NULL,
  `Costo` varchar(30) DEFAULT NULL,
  `Imagen` longblob DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `Id_Puntuacion` int(11) NOT NULL,
  PRIMARY KEY (`ID_Transporte`),
  KEY `Id_Puntuacion` (`Id_Puntuacion`),
  CONSTRAINT `transportes_ibfk_1` FOREIGN KEY (`Id_Puntuacion`) REFERENCES `puntuaciones` (`ID_Puntuacion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transportes`
--

LOCK TABLES `transportes` WRITE;
/*!40000 ALTER TABLE `transportes` DISABLE KEYS */;
INSERT INTO `transportes` VALUES (1,'Chevrolet Colorado Z21','4 Personas','Comoda, ideal para los viajes en familia, las mejores experiencias con este hermosos modelo renault','$120.000',NULL,NULL,0),(2,'Nissan Patrol','4 Personas','AC T8 es la pick perfecta para  combinar el trabajo con la vida en familia','$150.000',NULL,NULL,0),(3,'Nissan Murano','5 Personas','El interior del Murano está diseñado para unir a las personas. Una ancha consola central permite que los pasajeros interactúen sin inclinarse ni esforzarse. Los asientos delanteros Zero Gravity aumentan tu comodidad y los acabados tipo cromo y tipo madera oscura te rodean con una experiencia de lujo.','$200.000',NULL,NULL,0),(4,'Toyota Hilux','4 Personas','Toyota Hilux cuenta con innovadoras líneas estéticas\nque se unen con su totalmente renovado diseño frontal que complementa su\nestructura reforzada y sus dimensiones más amplias, lo que la hace más\nmoderna acentuando la robustez de su carácter así como su sólida postura.','$140.000',NULL,NULL,0),(5,'Corolla Sedan','4 Personas','Por su elegancia, su eficiencia y su confort, conducir el nuevo Corolla es una gozada, sea cual sea tu estilo de vida. Tanto si circulas por la ciudad como si vas más por carretera, disfrutarás del sistema híbrido autorrecargable, además de la fiabilidad que ha hecho famosa a Toyota.','$160.000',NULL,NULL,0);
/*!40000 ALTER TABLE `transportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `Nom_Usuario` varchar(45) NOT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(45) DEFAULT NULL,
  `Id_Rol` int(11) NOT NULL,
  PRIMARY KEY (`ID_Usuario`),
  KEY `Id_Rol` (`Id_Rol`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Rol`) REFERENCES `roles` (`ID_Rol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Mariana','Palma','ma14','2001-09-16','mpalma14@misena.edu.co','mariana14',1),(2,'Jhoan','Narváez','kemway0112','2001-09-08','janarvaez928@misena.edu.co','jhon01',1),(3,'David','Santa','sant12','2005-03-01','dasanta98@misena.edu.co','da12',1),(4,'Luisa','Valencia','luisa99','1999-06-25','lmvalencia79@misena.edu.co','lm79',1),(5,'Andrés','Cárdenas','Card35','1994-03-23','afcardenas662@misena.edu.co','carnero26',1),(6,'Andrés','Cárdenas','Card35','1994-03-23','afcardenas662@misena.edu.co','carnero26',1),(7,'Andrés','Cárdenas','Card35','1994-03-23','afcardenas662@misena.edu.co','carnero26',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-13 11:47:15
