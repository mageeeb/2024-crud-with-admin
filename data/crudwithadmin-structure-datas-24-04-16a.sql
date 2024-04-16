-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema crudwithadmin
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `crudwithadmin` ;

-- -----------------------------------------------------
-- Schema crudwithadmin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crudwithadmin` DEFAULT CHARACTER SET utf8mb4 ;
USE `crudwithadmin` ;

-- -----------------------------------------------------
-- Table `crudwithadmin`.`administrator`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crudwithadmin`.`administrator` ;

CREATE TABLE IF NOT EXISTS `crudwithadmin`.`administrator` (
  `idadministrator` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_bin' NOT NULL COMMENT 'case sensitive',
  `passwd` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_bin' NOT NULL,
  PRIMARY KEY (`idadministrator`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `username_UNIQUE` ON `crudwithadmin`.`administrator` (`username` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `crudwithadmin`.`ourdatas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crudwithadmin`.`ourdatas` ;

CREATE TABLE IF NOT EXISTS `crudwithadmin`.`ourdatas` (
  `idourdatas` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `ourdesc` VARCHAR(400) NULL,
  `latitude` VARCHAR(10) NULL,
  `longitude` VARCHAR(10) NULL,
  PRIMARY KEY (`idourdatas`))
ENGINE = InnoDB;

INSERT INTO `administrator` (`idadministrator`, `username`, `passwd`) VALUES
    (1, 'admin', '$2y$10$2sn4jJ0LgUkGCQHNDfsEPOlybZlC20j.Lk3JCM7lfyAwwrizsEaem');


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
