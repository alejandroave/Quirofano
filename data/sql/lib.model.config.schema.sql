
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- siga_quirofano
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_quirofano`;

CREATE TABLE `siga_quirofano`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `activo` TINYINT(1) DEFAULT 1,
    `ambulatorio` TINYINT(1),
    `permisos` TEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `slug` VARCHAR(255),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `siga_quirofano_slug` (`slug`(255))
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_sala
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_sala`;

CREATE TABLE `siga_sala`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `activo` TINYINT(1) DEFAULT 1,
    `bloqueado` TINYINT(1),
    `quirofano_id` INTEGER,
    `permisos` TEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `slug` VARCHAR(255),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `siga_sala_slug` (`slug`(255)),
    INDEX `FI_a_quirofano` (`quirofano_id`),
    CONSTRAINT `sala_quirofano`
        FOREIGN KEY (`quirofano_id`)
        REFERENCES `siga_quirofano` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_turno
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_turno`;

CREATE TABLE `siga_turno`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_procedimiento
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_procedimiento`;

CREATE TABLE `siga_procedimiento`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `activo` TINYINT(1) DEFAULT 1,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `slug` VARCHAR(255),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `siga_procedimiento_slug` (`slug`(255))
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_causa_diferido
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_causa_diferido`;

CREATE TABLE `siga_causa_diferido`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `codigo` VARCHAR(5) NOT NULL,
    `nombre` VARCHAR(128) NOT NULL,
    `activo` TINYINT(1) DEFAULT 1,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `tree_left` INTEGER,
    `tree_right` INTEGER,
    `tree_level` INTEGER,
    `tree_scope` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_especialidad
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_especialidad`;

CREATE TABLE `siga_especialidad`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(64),
    `medica` TINYINT(1) DEFAULT 1,
    `quirurgica` TINYINT(1) DEFAULT 1,
    `activo` TINYINT(1) DEFAULT 1,
    `created_at` DATETIME,
    `tree_left` INTEGER,
    `tree_right` INTEGER,
    `tree_level` INTEGER,
    `tree_scope` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_atencion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_atencion`;

CREATE TABLE `siga_atencion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `activo` TINYINT(1) DEFAULT 1,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_cie9mc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_cie9mc`;

CREATE TABLE `siga_cie9mc`
(
    `clave` VARCHAR(8) NOT NULL,
    `descripcion` TEXT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`clave`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_riesgoqx
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_riesgoqx`;

CREATE TABLE `siga_riesgoqx`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `descripcion` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_contaminacionqx
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_contaminacionqx`;

CREATE TABLE `siga_contaminacionqx`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `descripcion` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_eventoqx
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_eventoqx`;

CREATE TABLE `siga_eventoqx`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(128) NOT NULL,
    `descripcion` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
