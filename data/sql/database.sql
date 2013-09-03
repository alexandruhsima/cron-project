SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `cron_project` ;
CREATE SCHEMA IF NOT EXISTS `cron_project` DEFAULT CHARACTER SET utf8 ;
USE `cron_project` ;

-- -----------------------------------------------------
-- Table `cron_project`.`car`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cron_project`.`car` ;

CREATE  TABLE IF NOT EXISTS `cron_project`.`car` (
  `id` INT(11) NOT NULL ,
  `vin_number` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL ,
  `lcdv_16` VARCHAR(60) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `lcdv_32` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `reg_number` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `first_reg_date` TIMESTAMP NULL DEFAULT NULL ,
  `car_make` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `model_variant` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `model_finishing` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `gear_box` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `outline` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `car_genre` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `dealer_code` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `dealer_name` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `last_known_milage` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `sysame_updated_at` TIMESTAMP NULL DEFAULT NULL ,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `vin_number_UNIQUE` (`vin_number` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cron_project`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cron_project`.`user` ;

CREATE  TABLE IF NOT EXISTS `cron_project`.`user` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `sysame_id` INT(11) NOT NULL,
  `forename` VARCHAR(120) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `surname` VARCHAR(120) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `street_name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `street_number` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `postbox` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `zip_code` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `city` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `country` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `phone_home` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `phone_mobile` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `phone_work` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `permission` TINYINT(2) NULL DEFAULT '0' ,
  `permission_email` TINYINT(2) NULL DEFAULT '0' ,
  `permission_sms` TINYINT(2) NULL DEFAULT '0' ,
  `date_of_birth` TIMESTAMP NULL DEFAULT NULL ,
  `customer_type` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  `sysame_updated_at` TIMESTAMP NULL DEFAULT NULL ,
  `created_at` TIMESTAMP NULL DEFAULT NULL ,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ,
  `deleted_at` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `PersonID_UNIQUE` (`sysame_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cron_project`.`user_car`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cron_project`.`user_car` ;

CREATE  TABLE IF NOT EXISTS `cron_project`.`user_car` (
 `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `id_car` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL  ,
  `id_user` INT(11) NOT NULL,
   INDEX `fk_user_car_car` (`id_user`) ,
  CONSTRAINT `fk_user_car_user`
    FOREIGN KEY (`id_user` )
    REFERENCES `cron_project`.`user` (`sysame_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_car_cars1`
    FOREIGN KEY (`id_car` )
    REFERENCES `cron_project`.`car` (`vin_number` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX (`id_user`) ,
  UNIQUE INDEX `id_car_UNIQUE` (`id_car`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
