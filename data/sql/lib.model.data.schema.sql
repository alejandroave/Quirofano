
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- hc_usuarios
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `hc_usuarios`;

CREATE TABLE `hc_usuarios`
(
    `nombre` VARCHAR(64),
    `pass` VARCHAR(64),
    `tipo` TEXT,
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- hc_agenda
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `hc_agenda`;

CREATE TABLE `hc_agenda`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `programacion` DATE,
    `fechaestado` DATE,
    `hora` TIME,
    `horaestado` TIME,
    `inicio` DATETIME,
    `last_time` DATETIME,
    `ingreso` DATETIME,
    `sala_id` INTEGER,
    `quirofano_id` INTEGER,
    `egreso` DATETIME,
    `cie9mc` TEXT,
    `cie9mc_id` VARCHAR(8),
    `cx_realizada` TEXT,
    `cx_realizada_id` VARCHAR(8),
    `tipo_cx` INTEGER,
    `diagnostico` VARCHAR(256),
    `diagnostico_id` VARCHAR(8),
    `medico_name` VARCHAR(256),
    `paciente_name` VARCHAR(256),
    `paciente_id` INTEGER,
    `edad` VARCHAR(16),
    `genero` VARCHAR(16),
    `genero_id` INTEGER,
    `registro` VARCHAR(16),
    `servicio` INTEGER,
    `anestesia_id` INTEGER,
    `anestesia_empleada` VARCHAR(256),
    `ev_adversos_anestesia` TEXT,
    `observaciones` TEXT,
    `requerimiento` TEXT,
    `req_insumos` TEXT,
    `req_hemoderiv` TEXT,
    `req_laboratorio` TEXT,
    `req_anestesico` TEXT,
    `status` INTEGER DEFAULT 1,
    `causa_diferido_id` INTEGER,
    `solicitado` TINYINT(1),
    `riesgoqx_id` INTEGER,
    `contaminacionqx_id` INTEGER,
    `eventoqx_id` INTEGER,
    `complicaciones` TEXT,
    `val_pre_anestesica` TEXT,
    `reintervencion` TINYINT(1),
    `permisos` TEXT,
    `tipo_proc_id` INTEGER,
    `atencion_id` INTEGER,
    `tiempo_fuera` TINYINT(1),
    `procedencia` VARCHAR(128),
    `clasificacionqx` INTEGER,
    `region_px` INTEGER,
    `extension_px` INTEGER,
    `anexo_detalle` INTEGER,
    `destino_px` INTEGER,
    `liberacion_sala` TIME,
    `tiempo_est` TIME,
    `riesgo_qx_pre` VARCHAR(256),
    `show_in_index` TINYINT(1) DEFAULT 1,
    `protocolo` TINYINT(1) DEFAULT 0,
    `cancelada` TINYINT(1) DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `FI_nda_sala` (`sala_id`),
    INDEX `FI_nda_quirofano` (`quirofano_id`),
    INDEX `FI_nda_riesgoqx` (`riesgoqx_id`),
    INDEX `FI_nda_contaminacionqx` (`contaminacionqx_id`),
    INDEX `FI_nda_eventoqx` (`eventoqx_id`),
    INDEX `FI_nda_tipo_proc` (`tipo_proc_id`),
    INDEX `FI_nda_causa_dif` (`causa_diferido_id`),
    INDEX `FI_nda_atencion` (`atencion_id`),
    INDEX `FI_nga_especialidad` (`servicio`),
    CONSTRAINT `agenda_sala`
        FOREIGN KEY (`sala_id`)
        REFERENCES `siga_sala` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_quirofano`
        FOREIGN KEY (`quirofano_id`)
        REFERENCES `siga_quirofano` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_riesgoqx`
        FOREIGN KEY (`riesgoqx_id`)
        REFERENCES `siga_riesgoqx` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_contaminacionqx`
        FOREIGN KEY (`contaminacionqx_id`)
        REFERENCES `siga_contaminacionqx` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_eventoqx`
        FOREIGN KEY (`eventoqx_id`)
        REFERENCES `siga_eventoqx` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_tipo_proc`
        FOREIGN KEY (`tipo_proc_id`)
        REFERENCES `siga_procedimiento` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_causa_dif`
        FOREIGN KEY (`causa_diferido_id`)
        REFERENCES `siga_causa_diferido` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_atencion`
        FOREIGN KEY (`atencion_id`)
        REFERENCES `siga_atencion` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenga_especialidad`
        FOREIGN KEY (`servicio`)
        REFERENCES `siga_especialidad` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- siga_sala_log
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `siga_sala_log`;

CREATE TABLE `siga_sala_log`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `sala_id` INTEGER,
    `motivo` VARCHAR(255),
    `inicio` DATETIME,
    `fin` DATETIME,
    `duracion` VARCHAR(32),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- hc_agenda_personal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `hc_agenda_personal`;

CREATE TABLE `hc_agenda_personal`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `personal_id` INTEGER,
    `agenda_id` INTEGER,
    `personal_nombre` VARCHAR(256),
    `tipo` TINYINT,
    `status` INTEGER,
    `programa` TINYINT(1),
    `inicia` TINYINT(1),
    `transoperatorio` TINYINT(1),
    `finaliza` TINYINT(1),
    `turno` INTEGER,
    `created_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `FI_nda_personal` (`agenda_id`),
    INDEX `FI_nda_personal_id` (`personal_id`),
    CONSTRAINT `agenda_personal`
        FOREIGN KEY (`agenda_id`)
        REFERENCES `hc_agenda` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `agenda_personal_id`
        FOREIGN KEY (`personal_id`)
        REFERENCES `sf_guard_user` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- hc_agenda_diagnosticos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `hc_agenda_diagnosticos`;

CREATE TABLE `hc_agenda_diagnosticos`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `agenda_id` INTEGER,
    `diagnostico_cie10` VARCHAR(256),
    `diagnostico_id` VARCHAR(8),
    `tipo_diagnostico` INTEGER,
    `created_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `hc_agenda_diagnosticos_FI_1` (`agenda_id`),
    CONSTRAINT `hc_agenda_diagnosticos_FK_1`
        FOREIGN KEY (`agenda_id`)
        REFERENCES `hc_agenda` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- hc_agenda_procedimientos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `hc_agenda_procedimientos`;

CREATE TABLE `hc_agenda_procedimientos`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `agenda_id` INTEGER,
    `cie9mc` VARCHAR(256),
    `cie9mc_id` VARCHAR(8),
    `region` INTEGER,
    `detalles` VARCHAR(256),
    `servicio_id` INTEGER,
    `created_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `hc_agenda_procedimientos_FI_1` (`agenda_id`),
    INDEX `FI_nda_procedimientos` (`servicio_id`),
    CONSTRAINT `hc_agenda_procedimientos_FK_1`
        FOREIGN KEY (`agenda_id`)
        REFERENCES `hc_agenda` (`id`),
    CONSTRAINT `agenda_procedimientos`
        FOREIGN KEY (`servicio_id`)
        REFERENCES `siga_especialidad` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- hc_agenda_regrogramar
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `hc_agenda_regrogramar`;

CREATE TABLE `hc_agenda_regrogramar`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `agenda_id` INTEGER,
    `programacion` DATE,
    `hora` TIME,
    `sala_id` INTEGER,
    `tiempo_est` TIME,
    `created_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `FI_nda_reprogramar` (`agenda_id`),
    CONSTRAINT `agenda_reprogramar`
        FOREIGN KEY (`agenda_id`)
        REFERENCES `hc_agenda` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
