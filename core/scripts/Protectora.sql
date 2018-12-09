CREATE DATABASE `Protectora` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE `Protectora`;

CREATE TABLE `Protectora`.`Usuarios` (
  `CodUsuario` varchar(10) NOT NULL primary key,
  `Password` varchar(250) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellido1` varchar(250) DEFAULT NULL,
  `Apellido2` varchar(250) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL,
  `Fnacimiento` date DEFAULT NULL,
  `Perfil` varchar(250) NOT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Direccion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB;



CREATE TABLE `Protectora`.`Mascotas` (
  `CodMascota` varchar(4) NOT NULL primary key,
  `Nombre` varchar(10)  NOT NULL,
  `Imagen` longblob NOT NULL,
  `Descripcion` varchar(255)  NOT NULL,
  `Edad` int(11) NOT NULL,
  `Sexo` varchar(8) NOT NULL,
  `Vacunado` varchar(2) NOT NULL,
  `Microchip` varchar(2) NOT NULL,
  `Esterilizado` varchar(2) NOT NULL,
  `Tipo` varchar(15) NOT NULL,
  `FechaLlegada` date NOT NULL,
  `FechaReserva` date DEFAULT NULL,
  `FechaAdopcion` date DEFAULT NULL,
  `CodUsuario` varchar(10) DEFAULT NULL,
  FOREIGN KEY (`CodUsuario`) REFERENCES `Protectora`.`Usuarios`(`CodUsuario`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


