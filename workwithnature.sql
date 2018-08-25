-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema workwithnature
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema workwithnature
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `workwithnature` DEFAULT CHARACTER SET utf8 ;
USE `workwithnature` ;

-- -----------------------------------------------------
-- Table `workwithnature`.`donations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `workwithnature`.`donations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `longitude` VARCHAR(255) NULL DEFAULT NULL,
  `latitude` VARCHAR(255) NULL DEFAULT NULL,
  `amount` INT(11) NULL DEFAULT NULL,
  `donor_id` INT(11) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `workwithnature`.`donors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `workwithnature`.`donors` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `salutation` VARCHAR(45) NULL DEFAULT NULL,
  `firstname` VARCHAR(255) NULL DEFAULT NULL,
  `insertion` VARCHAR(255) NULL DEFAULT NULL,
  `lastname` VARCHAR(255) NULL DEFAULT NULL,
  `birthdate` DATETIME NULL DEFAULT NULL,
  `company_name` VARCHAR(255) NULL DEFAULT NULL,
  `address` VARCHAR(255) NULL DEFAULT NULL,
  `zipcode` VARCHAR(45) NULL DEFAULT NULL,
  `location` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `gift` VARCHAR(45) NULL DEFAULT NULL,
  `timetype` VARCHAR(45) NULL DEFAULT NULL,
  `donortype` VARCHAR(45) NULL DEFAULT NULL,
  `phone` VARCHAR(45) NULL DEFAULT NULL,
  `bankaccount` VARCHAR(255) NULL DEFAULT NULL,
  `referral_method` VARCHAR(255) NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `workwithnature`.`media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `workwithnature`.`media` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `filename` VARCHAR(255) NULL DEFAULT NULL,
  `filepath` VARCHAR(255) NULL DEFAULT NULL,
  `donor_id` INT(11) NULL DEFAULT NULL,
  `donation_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
