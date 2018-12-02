USE `Protectora`;

INSERT INTO `Protectora`.`Usuarios` (`CodUsuario`, `Password`, `Nombre`, `Perfil`) VALUES ('admin', SHA2('paso',256), 'admin', 'Administrador');