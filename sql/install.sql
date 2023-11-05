CREATE TABLE IF NOT EXISTS `employees` ( 
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    `name` VARCHAR(50) NULL, 
    `surname` VARCHAR(50) NULL, 
    `age` INT UNSIGNED NULL, 
    `phone` VARCHAR(20) NULL, 
    `offices_id` INT NULL, 
    `entry_date` TIMESTAMP NULL, 
    `end_date` TIMESTAMP NULL, 
    PRIMARY KEY (`id`) ) 
    ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `offices` ( 
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    `name` VARCHAR(50) NULL, 
    `description` VARCHAR(250) NULL, 
    `date` TIMESTAMP NULL, 
    PRIMARY KEY (`id`) ) 
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS `skills` ( 
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    `name`  VARCHAR(50) NULL, 
    `description` VARCHAR(50) NULL, 
    `punctuation` TIMESTAMP NULL, 
    PRIMARY KEY (`id`) ) 
    ENGINE = InnoDB;

 CREATE TABLE IF NOT EXISTS `employeesskills` ( 
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    `employees_id` INT NULL, 
    `skills_id` INT NULL, 
    PRIMARY KEY (`id`) ) 
    ENGINE = InnoDB;