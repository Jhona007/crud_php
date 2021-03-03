CREATE TABLE `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `contactos` VALUES (1,'Marcelo Chavez Duran','mail@mail.com','7015555'),(2,'Virginia Michel Poma','mail@mail.com','7096267'),(3,'Juan Perez','mail@mail.com','7834567');

