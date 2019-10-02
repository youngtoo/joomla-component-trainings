DROP TABLE IF EXISTS `#__trainings`;

CREATE TABLE `#__trainings` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`coursename` VARCHAR(500) NOT NULL,
    `overview` TEXT,
    `attendance` TEXT,
    `outcomes` TEXT,
    `location` VARCHAR(500),
    `datefrom` DATE,
    `dateto` DATE,
    `catid`	    int(11)    NOT NULL DEFAULT '0',
    `datenext` DATE,
    `url` VARCHAR(500),
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`published` tinyint(4) NOT NULL DEFAULT '1',
    
	PRIMARY KEY (`id`)
)
	ENGINE=InnoDB
    DEFAULT CHARSET=utf8mb4
    DEFAULT COLLATE=utf8mb4_unicode_ci;
