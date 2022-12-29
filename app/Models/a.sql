-- -----------------------------------------------------
-- Table `amay_a`.`paises`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`paises` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `pais` VARCHAR(25) NOT NULL,
  `pais_codigo` VARCHAR(5) NULL DEFAULT NULL,
  `moneda_codigo` VARCHAR(45) NULL DEFAULT NULL,
  `telef_codigo` VARCHAR(45) NULL DEFAULT NULL,
  `icono` VARCHAR(45) NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`grados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`grados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nivel` VARCHAR(45) NOT NULL,
  `nivel_codigo` VARCHAR(5) NULL DEFAULT NULL,
  `icono` VARCHAR(45) NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`tipo_registro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`tipo_registro` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `url` VARCHAR(145) NULL DEFAULT NULL,
  `icono` VARCHAR(95) NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`publicidad_etiquetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`publicidad_etiquetas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `etiqueta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`user_web`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`user_web` (
  `idalum` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `telf` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(85) NOT NULL,
  `pais` INT(11) NOT NULL DEFAULT 1,
  `tipo` INT(11) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `avatar` VARCHAR(145) NULL DEFAULT NULL,
  `activation` VARCHAR(200) NULL DEFAULT NULL,
  `status` INT(11) NULL DEFAULT NULL,
  `genero` VARCHAR(1) NULL DEFAULT NULL,
  `fecha_nac` DATE NULL DEFAULT NULL,
  `perfil_face` VARCHAR(45) NULL DEFAULT NULL,
  `perfil_link` VARCHAR(45) NULL DEFAULT NULL,
  `perfil_inst` VARCHAR(45) NULL DEFAULT NULL,
  `perfil_tiktok` VARCHAR(45) NULL DEFAULT NULL,
  `nivel_edu` INT(11) NULL DEFAULT 2,
  `ocupacion` VARCHAR(45) NULL DEFAULT NULL,
  `user` VARCHAR(45) NULL DEFAULT NULL,
  `apellidos` VARCHAR(45) NULL DEFAULT NULL,
  `ip` VARCHAR(45) NULL DEFAULT NULL,
  `fechareg` TIMESTAMP NULL DEFAULT NULL,
  `publicidad_id` INT(11) NULL DEFAULT 1,
  `tipo_reg` INT(11) NULL DEFAULT 5,
  PRIMARY KEY (`idalum`),
    FOREIGN KEY (`pais`)
    REFERENCES `amay_a`.`paises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`nivel_edu`)
    REFERENCES `amay_a`.`grados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`tipo_reg`)
    REFERENCES `amay_a`.`tipo_registro` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`publicidad_id`)
    REFERENCES `amay_a`.`publicidad_etiquetas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`busqueda_alumn`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`busqueda_alumn` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `busqueda` TEXT NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `ip` VARCHAR(45) NULL DEFAULT NULL,
  `alumno_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`categorias` (
  `idc` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(85) NOT NULL,
  `img` VARCHAR(145) NOT NULL,
  `precio` DECIMAL(11,2) NULL DEFAULT NULL,
  `tipo` ENUM('CU', 'CO', 'TA') NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `slug` VARCHAR(85) NULL DEFAULT NULL,
  PRIMARY KEY (`idc`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`categoria_persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`categoria_persona` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `persona_id` INT(10) NOT NULL,
  `categoria_id` INT(2) NOT NULL,
  `tipo` ENUM('ALUMNO', 'TRABAJADOR') NULL DEFAULT 'ALUMNO',
  PRIMARY KEY (`id`),
    FOREIGN KEY (`categoria_id`)
    REFERENCES `amay_a`.`categorias` (`idc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`chat_alumnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`chat_alumnos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `mensaje` TEXT NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `tipo` INT(1) NOT NULL,
  `estado` INT(1) NOT NULL,
  `envio` INT(11) NOT NULL,
  `recibe` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`trabajadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`trabajadores` (
  `idtrab` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `telf` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NOT NULL,
  `especialidad` TEXT NULL DEFAULT NULL,
  `pais` INT(11) NOT NULL DEFAULT 1,
  `experiencia` TEXT NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `rol` INT(11) NOT NULL DEFAULT 5,
  `img` VARCHAR(85) NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  `idalum` INT(11) NULL DEFAULT NULL,
  `apellidos` VARCHAR(95) NULL DEFAULT NULL,
  PRIMARY KEY (`idtrab`),
    FOREIGN KEY (`pais`)
    REFERENCES `amay_a`.`paises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`rol`)
    REFERENCES `amay_a`.`grados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`idalum`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`congreso_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`congreso_categoria` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(145) NULL DEFAULT NULL,
  `imagen` VARCHAR(95) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`congresos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`congresos` (
  `id` INT(3) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(245) NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `fecha` VARCHAR(85) NULL DEFAULT NULL,
  `hora` VARCHAR(85) NULL DEFAULT NULL,
  `costo` DECIMAL(11,2) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `precio_normal` DECIMAL(11,2) NULL DEFAULT NULL,
  `historial` DECIMAL(11,2) NULL DEFAULT NULL,
  `congr_cat_id` INT(2) NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`congr_cat_id`)
    REFERENCES `amay_a`.`congreso_categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`congreso_asignaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`congreso_asignaciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `trabajador_id` INT(11) NOT NULL,
  `congresos_id` INT(3) NOT NULL,
  `estado` INT(1) NOT NULL,
  `orden` INT(2) NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`trabajador_id`)
    REFERENCES `amay_a`.`trabajadores` (`idtrab`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`congresos_id`)
    REFERENCES `amay_a`.`congresos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`congreso_pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`congreso_pago` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `congreso_id` INT(3) NOT NULL,
  `alumno_id` INT(11) NOT NULL,
  `nmr_trans` VARCHAR(25) NOT NULL,
  `monto` DECIMAL(11,2) NULL DEFAULT NULL,
  `tipo_pago` VARCHAR(15) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`congreso_id`)
    REFERENCES `amay_a`.`congresos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`cursos` (
  `idcur` INT(5) NOT NULL AUTO_INCREMENT,
  `img` VARCHAR(145) NOT NULL,
  `nom` VARCHAR(95) NOT NULL,
  `descrip` TEXT NOT NULL,
  `precio` DECIMAL(11,2) NOT NULL,
  `estado` INT(1) NOT NULL,
  `objetivos` TEXT NULL DEFAULT NULL,
  `gws` INT(11) NULL DEFAULT NULL,
  `temario` INT(11) NULL DEFAULT NULL,
  `predsct` DECIMAL(11,2) NULL DEFAULT NULL,
  `prom` INT(5) NULL DEFAULT NULL,
  `idc` INT(11) NOT NULL,
  `prom_fecha` DATETIME NULL DEFAULT NULL,
  `urlcertificado` VARCHAR(145) NULL DEFAULT NULL,
  `slug` VARCHAR(95) NULL DEFAULT NULL,
  PRIMARY KEY (`idcur`),
    FOREIGN KEY (`idc`)
    REFERENCES `amay_a`.`categorias` (`idc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_asignaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_asignaciones` (
  `idasig` INT(11) NOT NULL AUTO_INCREMENT,
  `curso_idcur` INT(11) NOT NULL,
  `trabaj_idtrab` INT(11) NOT NULL,
  `fecha` DATETIME NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  `duracion` INT(11) NULL DEFAULT NULL,
  `calendar` INT(11) NULL DEFAULT NULL,
  `enseñar` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`idasig`), 
    FOREIGN KEY (`trabaj_idtrab`)
    REFERENCES `amay_a`.`trabajadores` (`idtrab`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`curso_idcur`)
    REFERENCES `amay_a`.`cursos` (`idcur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`curso_inscripcion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_inscripcion` (
  `idinsc` INT(11) NOT NULL AUTO_INCREMENT,
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
-- Table `amay_a`.`curso_cont_preg_com_like`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`curso_cont_preg_com_like` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `tipo_id` INT(11) NULL DEFAULT NULL,
  `alumno_id` INT(11) NOT NULL,
  `like` INT(1) NOT NULL,
  `tipo` ENUM('PREGUNTA', 'RESPUESTA') NULL DEFAULT 'PREGUNTA',
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
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
-- Table `amay_a`.`diplomados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomados` (
  `iddiplomado` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(245) NOT NULL,
  `inicio` DATE NULL DEFAULT NULL,
  `duracion` VARCHAR(85) NULL DEFAULT NULL,
  `modalidad` VARCHAR(65) NULL DEFAULT NULL,
  `certificacion` VARCHAR(145) NULL DEFAULT NULL,
  `informacion` TEXT NULL DEFAULT NULL,
  `metodologia` TEXT NULL DEFAULT NULL,
  `urltemario` VARCHAR(200) NULL DEFAULT NULL,
  `precio` DECIMAL(11,2) NULL DEFAULT NULL,
  `precio_normal` DECIMAL(11,2) NULL DEFAULT NULL,
  `descuento` INT(11) NULL DEFAULT NULL,
  `link` VARCHAR(245) NULL DEFAULT NULL,
  `logo` VARCHAR(95) NULL DEFAULT NULL,
  `logo2` VARCHAR(95) NULL DEFAULT NULL,
  `path` VARCHAR(95) NULL DEFAULT NULL,
  `horario` VARCHAR(145) NULL DEFAULT NULL,
  `fecha_termino` TIMESTAMP NULL DEFAULT NULL,
  `time_videoclase` INT(11) NULL DEFAULT NULL,
  `tipo_clase` VARCHAR(45) NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT NULL,
  `visible` VARCHAR(45) NULL DEFAULT NULL,
  `tipo_producto` VARCHAR(45) NULL DEFAULT NULL,
  `link_proyecto` VARCHAR(145) NULL DEFAULT NULL,
  `orden` INT(11) NULL DEFAULT NULL,
  `link_instruccion` VARCHAR(245) NULL DEFAULT NULL,
  `link_asesor` VARCHAR(245) NULL DEFAULT NULL,
  `link_formato` VARCHAR(245) NULL DEFAULT NULL,
  `url_miniatura` VARCHAR(245) NULL DEFAULT NULL,
  PRIMARY KEY (`iddiplomado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_precios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_precios` (
  `idprecios` INT(5) NOT NULL AUTO_INCREMENT,
  `precio` DECIMAL(11,2) NULL DEFAULT NULL,
  `precio_normal` DECIMAL(11,2) NULL DEFAULT NULL,
  `descuento` INT(3) NULL DEFAULT NULL,
  `iddiplomado` INT(11) NOT NULL,
  `tipo` ENUM('Completo', '2 Cuotas', '3 Cuotas', 'Otros') NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idprecios`), 
    FOREIGN KEY (`iddiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_pagos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_pagos` (
  `idpay` INT(11) NOT NULL AUTO_INCREMENT,
  `nmr_trans` VARCHAR(145) NULL DEFAULT NULL,
  `tipo_pago` VARCHAR(145) NULL DEFAULT NULL,
  `monto` DECIMAL(11,2) NULL DEFAULT NULL,
  `dipl_precio_id` INT(5) NOT NULL,
  `alumno_id` INT(11) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `situacion` ENUM('Deuda', 'Completo') NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `tipo_video` ENUM('1', '0', '2') NULL DEFAULT NULL,
  `fecha_expiracion` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`idpay`), 
    FOREIGN KEY (`dipl_precio_id`)
    REFERENCES `amay_a`.`diplomado_precios` (`idprecios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_certificados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_certificados` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `idpay_diplomado` INT(11) NOT NULL,
  `url` VARCHAR(145) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `nota` DECIMAL(11,2) NULL DEFAULT NULL,
  `id_certificado` VARCHAR(45) NULL DEFAULT NULL,
  `feedback` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`idpay_diplomado`)
    REFERENCES `amay_a`.`diplomado_pagos` (`idpay`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_coment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_coment` (
  `idcomentario` INT(11) NOT NULL AUTO_INCREMENT,
  `comentario` TEXT NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `estado` INT(1) NOT NULL,
  `iddiplomado` INT(11) NOT NULL,
  `iduser` INT(11) NOT NULL,
  PRIMARY KEY (`idcomentario`), 
    FOREIGN KEY (`iddiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`iduser`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_coment_like`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_coment_like` (
  `idlike` INT(5) NOT NULL AUTO_INCREMENT,
  `valor` INT(1) NULL DEFAULT NULL,
  `iduser` INT(11) NOT NULL,
  `tipo_id` INT(10) NOT NULL,
  `tipo` ENUM('COMENTARIO', 'RESPUESTA') NOT NULL DEFAULT 'COMENTARIO',
  PRIMARY KEY (`idlike`), 
    FOREIGN KEY (`iduser`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_coment_recomd`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_coment_recomd` (
  `idrecomendado` INT(5) NOT NULL AUTO_INCREMENT,
  `idcomentario` INT(11) NOT NULL,
  `urlyoutube` VARCHAR(295) NULL DEFAULT NULL,
  `urlstorage` TEXT NULL DEFAULT NULL,
  `orden` INT(3) NULL DEFAULT NULL,
  PRIMARY KEY (`idrecomendado`), 
    FOREIGN KEY (`idcomentario`)
    REFERENCES `amay_a`.`diplomado_coment` (`idcomentario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_coment_resp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_coment_resp` (
  `idrespuestas` INT(5) NOT NULL AUTO_INCREMENT,
  `respuesta` TEXT NOT NULL,
  `estado` INT(1) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `iduser` INT(11) NOT NULL,
  `idcomentario` INT(11) NOT NULL,
  PRIMARY KEY (`idrespuestas`), 
    FOREIGN KEY (`idcomentario`)
    REFERENCES `amay_a`.`diplomado_coment` (`idcomentario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`iduser`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_constancia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_constancia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idpay_diplomado` INT(11) NOT NULL,
  `url` VARCHAR(145) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `id_constancia` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`idpay_diplomado`)
    REFERENCES `amay_a`.`diplomado_pagos` (`idpay`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_contacto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_contacto` (
  `idcontacto` INT(5) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(145) NULL DEFAULT NULL,
  `nomempresa` VARCHAR(145) NULL DEFAULT NULL,
  `cargo` VARCHAR(45) NULL DEFAULT NULL,
  `tamano` VARCHAR(145) NULL DEFAULT NULL,
  `nombres` VARCHAR(45) NULL DEFAULT NULL,
  `apellidos` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `whatsapp` VARCHAR(45) NULL DEFAULT NULL,
  `whatsapp2` VARCHAR(45) NULL DEFAULT NULL,
  `hora` VARCHAR(145) NULL DEFAULT NULL,
  `ip` VARCHAR(45) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `tiposerv` VARCHAR(45) NULL DEFAULT NULL,
  `nombreserv` VARCHAR(145) NULL DEFAULT NULL,
  PRIMARY KEY (`idcontacto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_modulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_modulos` (
  `idmodulo` INT(11) NOT NULL AUTO_INCREMENT,
  `modulo` VARCHAR(245) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `iddiplomado` INT(11) NOT NULL,
  PRIMARY KEY (`idmodulo`), 
    FOREIGN KEY (`iddiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_contenidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_contenidos` (
  `idsub` INT(11) NOT NULL AUTO_INCREMENT,
  `contenido` VARCHAR(145) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `idmodulo` INT(11) NOT NULL,
  PRIMARY KEY (`idsub`), 
    FOREIGN KEY (`idmodulo`)
    REFERENCES `amay_a`.`diplomado_modulos` (`idmodulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_descarga_alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_descarga_alumno` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `alumno_id` INT(11) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `ip` VARCHAR(45) NULL DEFAULT NULL,
  `diplomados_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`diplomados_id`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`empresas` (
  `idempresa` INT(11) NOT NULL AUTO_INCREMENT,
  `empresa` VARCHAR(145) NOT NULL,
  `imagen` VARCHAR(95) NULL DEFAULT NULL,
  `url` VARCHAR(145) NULL DEFAULT NULL,
  PRIMARY KEY (`idempresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_empresa` (
  `idasignacion` INT(11) NOT NULL AUTO_INCREMENT,
  `idempresa` INT(11) NOT NULL,
  `iddiplomado` INT(11) NOT NULL,
  `prioridad` INT(3) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idasignacion`), 
    FOREIGN KEY (`idempresa`)
    REFERENCES `amay_a`.`empresas` (`idempresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`iddiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`diplomado_semana`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_semana` (
  `idsemana` INT(11) NOT NULL AUTO_INCREMENT,
  `semana` INT(3) NULL DEFAULT NULL,
  `fecha_inicio` DATETIME NULL DEFAULT NULL,
  `fecha_fin` DATETIME NULL DEFAULT NULL,
  `idiplomado` INT(11) NOT NULL,
  PRIMARY KEY (`idsemana`), 
    FOREIGN KEY (`idiplomado`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
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
-- Table `amay_a`.`diplomado_interesados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`diplomado_interesados` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `alumno_id` INT(11) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `diplomado_id` INT(11) NOT NULL,
  `mensaje` VARCHAR(245) NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `estado_cliente` INT(1) NULL DEFAULT NULL,
  `fecha_cliente` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`diplomado_id`)
    REFERENCES `amay_a`.`diplomados` (`iddiplomado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
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


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(145) NOT NULL,
  `descripcion` TEXT NOT NULL,
  `logo` VARCHAR(145) NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive_asignaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive_asignaciones` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `trabajador_id` INT(5) NOT NULL,
  `mayulive_id` INT(5) NOT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`mayulive_id`)
    REFERENCES `amay_a`.`mayulive` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`trabajador_id`)
    REFERENCES `amay_a`.`trabajadores` (`idtrab`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive_comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive_comentario` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `comentario` TEXT NOT NULL,
  `estado` INT(1) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `mayulive_id` INT(5) NOT NULL,
  `alumnos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`mayulive_id`)
    REFERENCES `amay_a`.`mayulive` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive_comentario_like`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive_comentario_like` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `valor` INT(1) NULL DEFAULT NULL,
  `alumnos_id` INT(11) NOT NULL,
  `tipo` ENUM('comentario', 'respuesta') NOT NULL DEFAULT 'comentario',
  `tipo_id` INT(10) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive_comentario_resp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive_comentario_resp` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `respuesta` TEXT NOT NULL,
  `estado` INT(1) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `mayliv_comentario_id` INT(5) NOT NULL,
  `alumnos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`mayliv_comentario_id`)
    REFERENCES `amay_a`.`mayulive_comentario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive_pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive_pregunta` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `pregunta` VARCHAR(145) NOT NULL,
  `tipo` ENUM('encuesta', 'abierta') NULL DEFAULT NULL,
  `orden` INT(2) NOT NULL,
  `estado` INT(1) NOT NULL,
  `tiempo` INT(2) NOT NULL,
  `lanzado` INT(1) NOT NULL,
  `mayulive_id` INT(5) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`mayulive_id`)
    REFERENCES `amay_a`.`mayulive` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive_pregunta_altern`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive_pregunta_altern` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `alternativa` VARCHAR(145) NOT NULL,
  `correcta` INT(1) NOT NULL,
  `puntuacion` INT(3) NOT NULL,
  `orden` INT(2) NOT NULL,
  `estado` INT(1) NOT NULL,
  `mayliv_pregunta_id` INT(5) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`mayliv_pregunta_id`)
    REFERENCES `amay_a`.`mayulive_pregunta` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`mayulive_pregunta_respuest`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`mayulive_pregunta_respuest` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `pregunt_id` INT(11) NOT NULL,
  `alternt_id` INT(11) NOT NULL,
  `alumnos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alternt_id`)
    REFERENCES `amay_a`.`mayulive_pregunta_altern` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`pregunt_id`)
    REFERENCES `amay_a`.`mayulive_pregunta` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
-- -----------------------------------------------------
-- Table `amay_a`.`navegacion_persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`navegacion_persona` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `alumno_id` INT(11) NOT NULL,
  `navegacion` VARCHAR(15) NULL DEFAULT NULL,
  `ip` VARCHAR(45) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT NULL,
  `tiempo` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`planes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`planes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `plan` VARCHAR(45) NULL DEFAULT NULL,
  `precio` DECIMAL(11,2) NULL DEFAULT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT NULL,
  `url_visa` VARCHAR(45) NULL DEFAULT NULL,
  `color` TEXT NULL DEFAULT NULL,
  `pre_normal` DECIMAL(11,2) NULL DEFAULT NULL,
  `porcentaje` DECIMAL(11,2) NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`planes_alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`planes_alumno` (
  `idpremium` INT(11) NOT NULL AUTO_INCREMENT,
  `estado` INT(1) NULL DEFAULT NULL,
  `idalumno` INT(11) NOT NULL,
  `idcategoria` INT(11) NULL DEFAULT NULL,
  `tipo_pago` VARCHAR(45) NULL DEFAULT NULL,
  `servicio` VARCHAR(45) NULL DEFAULT NULL,
  `monto` DECIMAL(11,2) NULL DEFAULT NULL,
  `fecha_inicio` TIMESTAMP NULL DEFAULT NULL,
  `fecha_fin` TIMESTAMP NULL DEFAULT NULL,
  `idplan` INT(11) NOT NULL,
  `nro_trans` VARCHAR(45) NULL DEFAULT NULL,
  `fecha_pago` TIMESTAMP NULL DEFAULT NULL,
  `situacion` ENUM('Corriendo', 'Detenido') NULL DEFAULT NULL,
  `fecha_retencion` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idpremium`), 
    FOREIGN KEY (`idplan`)
    REFERENCES `amay_a`.`planes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idalumno`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`idcategoria`)
    REFERENCES `amay_a`.`categorias` (`idc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`post_like_alumn`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`post_like_alumn` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `alumnos_id` INT(11) NOT NULL,
  `tipo` ENUM('post', 'resp') NOT NULL,
  `tipo_id` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`posts_alumn`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`posts_alumn` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(145) NOT NULL,
  `contenido` TEXT NOT NULL,
  `imagen` VARCHAR(145) NULL DEFAULT NULL,
  `estado` INT(1) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `alumnos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`posts_resp_alumn`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`posts_resp_alumn` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `contenido` TEXT NOT NULL,
  `estado` INT(1) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `post_alumn_id` INT(11) NOT NULL,
  `alumnos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`), 
    FOREIGN KEY (`post_alumn_id`)
    REFERENCES `amay_a`.`posts_alumn` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION, 
    FOREIGN KEY (`alumnos_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`tipo_servicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`tipo_servicio` (
  `idtipo` INT(11) NOT NULL AUTO_INCREMENT,
  `servicio` VARCHAR(45) NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idtipo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `amay_a`.`preguntas_frecuentes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`preguntas_frecuentes` (
  `idpre` INT(11) NOT NULL AUTO_INCREMENT,
  `pregunta` TEXT NULL DEFAULT NULL,
  `rpta` TEXT NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT 1,
  `tipo_servic_id` INT(11) NULL DEFAULT 1,
  PRIMARY KEY (`idpre`), 
    FOREIGN KEY (`tipo_servic_id`)
    REFERENCES `amay_a`.`tipo_servicio` (`idtipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`promo_banner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`promo_banner` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `msje_desktop` TEXT NULL DEFAULT NULL,
  `msje_desktop2` TEXT NULL DEFAULT NULL,
  `msje_movil` VARCHAR(145) NULL DEFAULT NULL,
  `msje_movil2` VARCHAR(145) NULL DEFAULT NULL,
  `btn_promo` VARCHAR(45) NULL DEFAULT NULL,
  `btn_msje` VARCHAR(45) NULL DEFAULT NULL,
  `href_btn_promo` VARCHAR(145) NULL DEFAULT NULL,
  `img_desktop` VARCHAR(145) NULL DEFAULT NULL,
  `img_movil` VARCHAR(145) NULL DEFAULT NULL,
  `status_time` VARCHAR(45) NULL DEFAULT NULL,
  `timer` TIMESTAMP NULL DEFAULT NULL,
  `estado` INT(1) NULL DEFAULT NULL,
  `vivo` INT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`sessions` (
  `id` VARCHAR(255) NOT NULL,
  `user_id` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `ip_address` VARCHAR(45) NULL DEFAULT NULL,
  `user_agent` TEXT NULL DEFAULT NULL,
  `payload` TEXT NOT NULL,
  `last_activity` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `amay_a`.`examen_terminos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amay_a`.`examen_terminos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_inicio` DATETIME NULL,
  `fecha_fin` DATETIME NULL,
  `alumno_id` INT(11) NOT NULL,
  `curs_asign_id` INT(11) NOT NULL,
  `estado` INT(1) NULL,
  `aprobo` INT(1) NULL,
  `reinicio` DATETIME NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`alumno_id`)
    REFERENCES `amay_a`.`user_web` (`idalum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`curs_asign_id`)
    REFERENCES `amay_a`.`curso_asignaciones` (`idasig`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;