-- MySQL Script generated by MySQL Workbench
-- Wed Aug 24 12:06:27 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema Agenda
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Agenda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Agenda` DEFAULT CHARACTER SET utf8 ;
USE `Agenda` ;

-- -----------------------------------------------------
-- Table `Agenda`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Agenda`.`pessoa` (
  `cpf` DECIMAL(11) NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `sobrenome` VARCHAR(25) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;