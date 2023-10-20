DROP DATABASE IF EXISTS `aldawah`;

CREATE DATABASE IF NOT EXISTS `aldawah`;

USE `aldawah`;

CREATE TABLE `tbl_users` (
    `id` INT(4) PRIMARY KEY AUTO_INCREMENT,
    `uname` VARCHAR(20) UNIQUE NOT NULL,
    `pword` VARCHAR(255) NOT NULL,
    `fname` VARCHAR(20),
    `mname` VARCHAR(20),
    `lname` VARCHAR(20),
    `role` VARCHAR(1),
    `deletedflag` INT(1) DEFAULT 0
);