DROP DATABASE sonixlocale;

CREATE DATABASE sonixlocale;

CREATE TABLE `sound`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
