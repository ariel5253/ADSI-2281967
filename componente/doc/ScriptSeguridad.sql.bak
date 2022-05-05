-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_adsi_67
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_adsi_67
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_adsi_67` DEFAULT CHARACTER SET utf8 ;
USE `db_adsi_67` ;

-- -----------------------------------------------------
-- Table `db_adsi_67`.`personas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_adsi_67`.`personas` (
  `id` INT NOT NULL,
  `tipo_documento` ENUM('CC', 'TI', 'DNI', 'CE') NOT NULL,
  `numero_documento` INT NOT NULL,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `celular` INT NULL,
  `correo` VARCHAR(45) NULL,
  `estado` BIT NOT NULL,
  `fecha_creacion` TIMESTAMP NOT NULL,
  `fecha_modificacion` TIMESTAMP NULL,
  `id_usuario_creacion` INT NOT NULL,
  `id_usuario_modificacion` INT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `db_adsi_67`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_adsi_67`.`usuario` (
  `id` INT NOT NULL,
  `usuario` VARCHAR(50) NOT NULL,
  `contrasenia` INT NOT NULL,
  `estado` BIT NOT NULL,
  `fecha_creacion` TIMESTAMP NOT NULL,
  `fecha_modificacion` TIMESTAMP NULL,
  `id_usuario_creacion` INT NOT NULL,
  `id_usuario_modificacion` INT NULL,
  `personas_id` INT NOT NULL,
  PRIMARY KEY (`id`),  
  CONSTRAINT `fk_usuario_personas`
    FOREIGN KEY (`personas_id`)
    REFERENCES `db_adsi_67`.`personas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `db_adsi_67`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_adsi_67`.`roles` (
  `id` INT NOT NULL,
  `descripcion` VARCHAR(50) NOT NULL,
  `estado` BIT NOT NULL,
  `fecha_creacion` TIMESTAMP NOT NULL,
  `fecha_modificacion` TIMESTAMP NULL,
  `id_usuario_creacion` INT NOT NULL,
  `id_usuario_modificacion` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `db_adsi_67`.`roles_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_adsi_67`.`roles_usuarios` (
  `id` INT NOT NULL,
  `estado` BIT NOT NULL,
  `fecha_creacion` TIMESTAMP NOT NULL,
  `fecha_modificacion` TIMESTAMP NULL,
  `id_usuario_creacion` INT NOT NULL,
  `id_usuario_modificacion` INT NULL,
  `usuario_id` INT NOT NULL,
  `roles_id` INT NOT NULL,
  PRIMARY KEY (`id`),  
  CONSTRAINT `fk_roles_usuarios_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `db_adsi_67`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_roles_usuarios_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `db_adsi_67`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `db_adsi_67`.`formularios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_adsi_67`.`formularios` (
  `id` INT NOT NULL,
  `etiqueta` VARCHAR(50) NOT NULL,
  `modulo` VARCHAR(50) NOT NULL,
  `ruta` VARCHAR(200) NOT NULL,
  `estado` BIT NOT NULL,
  `fecha_creacion` TIMESTAMP NOT NULL,
  `fecha_modificacion` TIMESTAMP NULL,
  `id_usuario_creacion` INT NOT NULL,
  `id_usuario_modificacion` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `db_adsi_67`.`formularios_roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_adsi_67`.`formularios_roles` (
  `id` INT NOT NULL,
  `estado` BIT NOT NULL,
  `fecha_creacion` TIMESTAMP NOT NULL,
  `fecha_modificacion` TIMESTAMP NULL,
  `id_usuario_creacion` INT NOT NULL,
  `id_usuario_modificacion` INT NULL,
  `roles_id` INT NOT NULL,
  `formularios_id` INT NOT NULL,
  PRIMARY KEY (`id`),
 
  CONSTRAINT `fk_formularios_roles_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `db_adsi_67`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_formularios_roles_formularios1`
    FOREIGN KEY (`formularios_id`)
    REFERENCES `db_adsi_67`.`formularios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
