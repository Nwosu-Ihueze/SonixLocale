DROP DATABASE sonixlocale;

CREATE DATABASE sonixlocale;

CREATE TABLE `sonixlocale`.`users` 
(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_email` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`) 
);