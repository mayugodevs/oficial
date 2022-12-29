


-- -----------------------------------------------------
-- Table `amay_a`.`curso_inscripcion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_inscripcion` (
  `idinsc` INT(9) NOT NULL AUTO_INCREMENT,
  `nmr_trans` VARCHAR(45) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `idalum` INT(11) NOT NULL,
  `asignados_idasig` INT(11) NOT NULL,
  `tipo_pago` VARCHAR(45) NULL DEFAULT NULL,
  `servicio` VARCHAR(45) NULL DEFAULT NULL,
  `monto` DECIMAL(11,2) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `fecha_inicio` TIMESTAMP NULL DEFAULT NULL,
  `fecha_fin` TIMESTAMP NULL DEFAULT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT NULL,
  `idpremium` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idinsc`), 
    FOREIGN KEY (`idalum`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`asignados_idasig`)
    REFERENCES `amay_a`.`curso_asignaciones` (`idasig`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_certificados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_certificados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idinsc` INT(11) NULL DEFAULT NULL,
  `url` VARCHAR(145) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `id_certificado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`idinsc`)
    REFERENCES `amay_a`.`curso_inscripcion` (`idinsc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_modulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_modulos` (
  `idc` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(100) NULL DEFAULT NULL,
  `idasig` INT(11) NOT NULL,
  `idprimer_material` INT(11) NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT 1,
  PRIMARY KEY (`idc`), 
    FOREIGN KEY (`idasig`)
    REFERENCES `amay_a`.`curso_asignaciones` (`idasig`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_material`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_material` (
  `idmaterial` INT(11) NOT NULL AUTO_INCREMENT,
  `material` VARCHAR(85) NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `archivo` VARCHAR(145) NULL DEFAULT NULL,
  `url` VARCHAR(85) NULL DEFAULT NULL,
  `idc` INT(11) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `url2` VARCHAR(85) NULL DEFAULT NULL,
  `url3` VARCHAR(85) NULL DEFAULT NULL,
  `url4` VARCHAR(85) NULL DEFAULT NULL,
  PRIMARY KEY (`idmaterial`), 
    FOREIGN KEY (`idc`)
    REFERENCES `amay_a`.`curso_modulos` (`idc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
-- -----------------------------------------------------
-- Table `amay_a`.`curso_conten_preg_coment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_conten_preg_coment` (
  `idpreguntas` INT(10) NOT NULL AUTO_INCREMENT,
  `comentario` TEXT NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `idmaterial` INT(11) NOT NULL,
  `idcliente` INT(11) NOT NULL,
  PRIMARY KEY (`idpreguntas`), 
    FOREIGN KEY (`idcliente`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idmaterial`)
    REFERENCES `amay_a`.`curso_material` (`idmaterial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_cont_preg_com_respt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_cont_preg_com_respt` (
  `idrespuestas` INT(10) NOT NULL AUTO_INCREMENT,
  `respuesta` TEXT NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `idpreguntas` INT(10) NOT NULL,
  `idalumno` INT(11) NOT NULL,
  PRIMARY KEY (`idrespuestas`), 
    FOREIGN KEY (`idpreguntas`)
    REFERENCES `amay_a`.`curso_conten_preg_coment` (`idpreguntas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idalumno`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_conten_problem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_conten_problem` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `curs_mater_id` INT(11) NOT NULL,
  `problema` TEXT NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `alumno_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `curso_conten_problem_ibfk_2`
    FOREIGN KEY (`curs_mater_id`)
    REFERENCES `amay_a`.`curso_material` (`idmaterial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_contenidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_contenidos` (
  `idmod` INT(11) NOT NULL AUTO_INCREMENT,
  `modulo` VARCHAR(200) NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT NULL,
  `asignados_idasig` VARCHAR(45) NULL DEFAULT NULL,
  `idcon` INT(11) NOT NULL,
  PRIMARY KEY (`idmod`), 
    FOREIGN KEY (`idcon`)
    REFERENCES `amay_a`.`curso_modulos` (`idc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_exam_pregt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_exam_pregt` (
  `idpregunta` INT(10) NOT NULL AUTO_INCREMENT,
  `pregunta` VARCHAR(145) NOT NULL,
  `instruccion` TEXT NOT NULL,
  `puntuacion` INT(3) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `estado` INT(1) NOT NULL,
  `idc` INT(11) NOT NULL,
  `val_proyecto` INT(11) NULL DEFAULT NULL,
  `val_practica` DECIMAL(11,2) NULL DEFAULT NULL,
  PRIMARY KEY (`idpregunta`), 
    FOREIGN KEY (`idc`)
    REFERENCES `amay_a`.`curso_modulos` (`idc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_exam_opc_preg`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_exam_opc_preg` (
  `idopcion` INT(10) NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(245) NOT NULL,
  `idpregunta` INT(10) NOT NULL,
  `tipo` INT(1) NOT NULL,
  PRIMARY KEY (`idopcion`), 
    FOREIGN KEY (`idpregunta`)
    REFERENCES `amay_a`.`curso_exam_pregt` (`idpregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_exam_respt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_exam_respt` (
  `identregap` INT(10) ZEROFILL NOT NULL,
  `valor` INT(11) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `idalumno` INT(11) NOT NULL,
  `idpregunta` INT(10) NOT NULL,
  `nota` INT(3) NULL DEFAULT NULL,
  PRIMARY KEY (`identregap`), 
    FOREIGN KEY (`idpregunta`)
    REFERENCES `amay_a`.`curso_exam_pregt` (`idpregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idalumno`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_tarea_contenido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_tarea_contenido` (
  `idtarea` INT(11) NOT NULL AUTO_INCREMENT,
  `tarea` TEXT NULL DEFAULT NULL,
  `instruccion` TEXT NULL DEFAULT NULL,
  `puntuacion` INT(11) NULL DEFAULT NULL,
  `fecha` DATETIME NULL DEFAULT NULL,
  `fecha_entrega` TIMESTAMP NULL DEFAULT NULL,
  `archivo` VARCHAR(245) NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT NULL,
  `idc` INT(11) NOT NULL,
  `tipo` VARCHAR(25) NULL DEFAULT NULL,
  `val_proyecto` DECIMAL(11,2) NULL DEFAULT NULL,
  `val_practica` DECIMAL(11,2) NULL DEFAULT NULL,
  PRIMARY KEY (`idtarea`), 
    FOREIGN KEY (`idc`)
    REFERENCES `amay_a`.`curso_modulos` (`idc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_tar_coment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_tar_coment` (
  `idcom_tarea` INT(10) NOT NULL AUTO_INCREMENT,
  `comentario` TEXT NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `idalumno` INT(11) NOT NULL,
  `idtarea` INT(11) NOT NULL,
  PRIMARY KEY (`idcom_tarea`), 
    FOREIGN KEY (`idtarea`)
    REFERENCES `amay_a`.`curso_tarea_contenido` (`idtarea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idalumno`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`curso_tar_coment_lk`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_tar_coment_lk` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `like` INT(1) NULL DEFAULT NULL,
  `tipo` ENUM('comentario', 'respuesta') NULL DEFAULT NULL,
  `tipo_id` INT(10) NULL DEFAULT NULL,
  `alumno_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_tar_coment_resp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_tar_coment_resp` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `respuesta` TEXT NOT NULL,
  `estado` INT(1) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `curso_tarea_alumno_id` INT(10) NOT NULL,
  `alumnos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`curso_tarea_alumno_id`)
    REFERENCES `amay_a`.`curso_tar_coment` (`idcom_tarea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_tareas_entrega`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_tareas_entrega` (
  `identrega` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT NULL,
  `idtarea` INT(11) NOT NULL,
  `archivo` VARCHAR(200) NULL DEFAULT NULL,
  `typefile` VARCHAR(15) NULL DEFAULT NULL,
  `nota` INT(11) NULL DEFAULT NULL,
  `idalumno` INT(11) NOT NULL,
  `idins` INT(11) NOT NULL,
  `feedback` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`identrega`), 
    FOREIGN KEY (`idtarea`)
    REFERENCES `amay_a`.`curso_tarea_contenido` (`idtarea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idalumno`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idins`)
    REFERENCES `amay_a`.`curso_inscripcion` (`idinsc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_inscripcion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_inscripcion` (
  `idcontenido` INT(5) NOT NULL AUTO_INCREMENT,
  `idasig` INT(11) NOT NULL,
  `idsemana` INT(11) NULL DEFAULT NULL,
  `orden` INT(5) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `iddiplomado` INT(11) NOT NULL,
  PRIMARY KEY (`idcontenido`), 
    FOREIGN KEY (`iddiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idasig`)
    REFERENCES `amay_a`.`curso_asignaciones` (`idasig`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idsemana`)
    REFERENCES `amay_a`.`diplomado_semana` (`idsemana`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_trabajador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_trabajador` (
  `idinstructor` INT(5) NOT NULL AUTO_INCREMENT,
  `idtrabajador` INT(11) NOT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `idiplomado` INT(11) NOT NULL,
  PRIMARY KEY (`idinstructor`), 
    FOREIGN KEY (`idiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idtrabajador`)
    REFERENCES `amay_a`.`trabajadores` (`idtrab`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_vivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_vivo` (
  `idvivo` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(145) NULL DEFAULT NULL,
  `imagen` VARCHAR(95) NULL DEFAULT NULL,
  `fecha` DATETIME NULL DEFAULT NULL,
  `idsemana` INT(11) NOT NULL,
  `orden` INT(3) NULL DEFAULT NULL,
  `url` VARCHAR(145) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `idiplomado` INT(11) NOT NULL,
  `urlmaterial` VARCHAR(245) NULL DEFAULT NULL,
  PRIMARY KEY (`idvivo`), 
    FOREIGN KEY (`idiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idsemana`)
    REFERENCES `amay_a`.`diplomado_semana` (`idsemana`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`historial_video_alumn`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`historial_video_alumn` (
  `idhistorial` INT(11) NOT NULL AUTO_INCREMENT,
  `idinscripcion` INT(11) NOT NULL,
  `idmaterial` INT(11) NOT NULL,
  `iduser` VARCHAR(45) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `tiempo` VARCHAR(45) NULL DEFAULT NULL,
  `idasig` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idhistorial`), 
    FOREIGN KEY (`idmaterial`)
    REFERENCES `amay_a`.`curso_material` (`idmaterial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idinscripcion`)
    REFERENCES `amay_a`.`curso_inscripcion` (`idinsc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

