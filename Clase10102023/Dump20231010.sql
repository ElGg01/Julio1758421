DROP SCHEMA IF EXISTS `asistencia`;
CREATE SCHEMA IF NOT EXISTS  `asistencia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `asistencia`;
CREATE TABLE `usuarios` (
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_usuario` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Fecha_Registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Permisos` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO `usuarios` VALUES ('Aaron Velasco Agustin','Gloria no 15','5626198295','aaronvelasco@aragon.unam.mx','HuronMarron','123456','2023-08-22 17:20:57',1,1);
INSERT INTO `usuarios` VALUES ('Julio César Negrete Gutiérrez','Sur 10','5617700505','julionegrete97@aragon.unam.mx','ElGg','abcdef','2023-10-17 17:50:20',1,2);