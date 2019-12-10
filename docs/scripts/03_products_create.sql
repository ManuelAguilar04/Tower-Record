  use `shop_online`;

  
  CREATE TABLE `tipo_tarjeta` (
  `id_tarjeta` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `tipo_tarjeta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tarjeta`));
  
CREATE TABLE `transaction`(
  `id_transaction` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `fecha_transaction` VARCHAR(45) NOT NULL,
  `id_detalle` BIGINT(18) NOT NULL,
  PRIMARY KEY (`id_transaction`),
   CONSTRAINT `id_transaction_fk` FOREIGN KEY (`id_detalle`) REFERENCES `transaction_detalle` (`id_detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION
  );
  
  CREATE  TABLE `transaction_detalle`(
  `id_detalle` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `equipo` BIGINT(18) NOT NULL,
  `cantidad` BIGINT(18) NOT NULL,
  `id_tarjeta` BIGINT(18) NOT NULL,
  PRIMARY KEY (`id_detalle`));
  
  
   CREATE TABLE `categoria_equipo`(
  `id_categ_equipo` BIGINT(18) NOT NULL AUTO_INCREMENT,
   `categoria_equipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_categ_equipo`));
  
  CREATE TABLE `equipo` (
  `id_equipo` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NULL,
  `precio_equipo` DECIMAL(18,4) NULL,
  `img` VARCHAR(255) NULL,
  `id_categ_equipo` BIGINT(18) NULL,
  PRIMARY KEY (`id_equipo`),
  CONSTRAINT `id_categ_equipo` FOREIGN KEY (`id_categ_equipo`) REFERENCES `categoria_equipo` (`id_categ_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
  );
  