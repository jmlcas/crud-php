
USE dbname;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(20) NOT NULL,
  `Password` VARCHAR(200) NOT NULL,
  `Correo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`)
  );

CREATE TABLE IF NOT EXISTS `productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(20) NULL,
  `Precio` DECIMAL(10,2) NULL,
  `UsuarioId` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FK_productos_UsuarioId FOREIGN KEY (UsuarioId) REFERENCES usuarios(id)
  );



INSERT INTO usuarios (`Nombre`, `Password`,`Correo`) VALUES ('pruebauser', '$2y$10$zlQreEebPhmMUf73453GcOdJYbimUUBcdQeyf5zeoNVJ660uQ7D/W', 'pruebauser@gmail.com');

INSERT INTO productos (`Nombre`, `Precio`, `UsuarioId`) VALUES ('iPhone', 809, 1), ('iPad', 379, 1), ('MacBook Pro de 13', 1449, 1), ('MacBook Air M1', 1129, 1), ('Xiaomi Mi 11 Lite', 299.99, 1);



