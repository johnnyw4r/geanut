CREATE TABLE articulos (
  idarticulos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  edicion_numero INTEGER UNSIGNED NOT NULL,
  tipo VARCHAR(45) NOT NULL,
  titulo VARCHAR(255) NULL,
  contenido_corto TEXT NULL,
  contenido TEXT NULL,
  enlace_imagen TEXT NULL,
  width INTEGER UNSIGNED NULL,
  enlace_articulo TEXT NULL,
  status_articulo BOOL NULL DEFAULT 2,
  eliminado BOOL NULL DEFAULT 2,
  fecha VARCHAR(20) NULL,
  PRIMARY KEY(idarticulos),
  INDEX articulos_FKIndex1(edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE comentario_astral (
  idcomentario_astral INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  titulo Varchar(255) NULL,
  contenido VARCHAR(255) NULL,
  PRIMARY KEY(idcomentario_astral, index_energetico_idindex_energetico, index_energetico_edicion_numero),
  INDEX comentario_astral_FKIndex1(index_energetico_idindex_energetico, index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE edicion (
  numero INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  dia INTEGER UNSIGNED NULL,
  mes INTEGER UNSIGNED NULL,
  ano INTEGER UNSIGNED NULL,
  status_edicion VARCHAR(45) NULL,
  eliminado BOOL NULL DEFAULT 2,
  PRIMARY KEY(numero)
)
TYPE=InnoDB;

CREATE TABLE efemeride_dia (
  idefemeride_dia INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  efemeride_mes_idefemeride_mes INTEGER UNSIGNED NOT NULL,
  descripcion VARCHAR(255) NULL,
  dia SMALLINT(6) UNSIGNED NULL,
  PRIMARY KEY(idefemeride_dia, efemeride_mes_idefemeride_mes),
  INDEX efemeride_dia_FKIndex1(efemeride_mes_idefemeride_mes)
)
TYPE=InnoDB;

CREATE TABLE efemeride_mes (
  idefemeride_mes INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  mes SMALLINT UNSIGNED NULL,
  descripcion VARCHAR(255) NULL,
  PRIMARY KEY(idefemeride_mes)
)
TYPE=InnoDB;

CREATE TABLE energias (
  idenergias INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  descripcion Varchar(255) NULL,
  PRIMARY KEY(idenergias),
  INDEX energias_FKIndex1(index_energetico_idindex_energetico, index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE energias_has_barras_energias (
  tipo_energias_tipo INTEGER UNSIGNED NOT NULL,
  energias_idenergias INTEGER UNSIGNED NOT NULL,
  porcentaje INTEGER UNSIGNED NULL,
  PRIMARY KEY(tipo_energias_tipo, energias_idenergias),
  INDEX energias_has_barras_energias_FKIndex1(tipo_energias_tipo),
  INDEX energias_has_barras_energias_FKIndex2(energias_idenergias)
)
TYPE=InnoDB;

CREATE TABLE estilo (
  idestilo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  edicion_numero INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idestilo),
  INDEX estilo_FKIndex1(edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE fase_lunar (
  idfase_lunar BIGINT(20) NOT NULL AUTO_INCREMENT,
  index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  titulo VARCHAR(255) NULL,
  contenido VARCHAR(255) NULL,
  url_imagen VARCHAR(255) NULL,
  PRIMARY KEY(idfase_lunar, index_energetico_idindex_energetico, index_energetico_edicion_numero),
  INDEX face_lunar_FKIndex1(index_energetico_idindex_energetico, index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE fechas (
  idfechas BIGINT(20) NOT NULL AUTO_INCREMENT,
  obj_tipo_fecha BIGINT(20) NULL,
  dia SMALLINT(6) UNSIGNED NULL,
  mes SMALLINT(6) UNSIGNED NULL,
  ano VARCHAR(255) NULL,
  enlace VARCHAR(255) NULL,
  contenido VARCHAR(255) NULL,
  PRIMARY KEY(idfechas)
)
TYPE=InnoDB;

CREATE TABLE formula (
  idformula INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  formula VARCHAR(255) NULL,
  url_imagen VARCHAR(255) NULL,
  PRIMARY KEY(idformula, index_energetico_idindex_energetico, index_energetico_edicion_numero),
  INDEX formula_FKIndex1(index_energetico_idindex_energetico, index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE index_energetico (
  idindex_energetico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  edicion_numero INTEGER UNSIGNED NOT NULL,
  titulo_pensamiento VARCHAR(255) NULL,
  pensamiento VARCHAR(255) NULL,
  autor VARCHAR(255) NULL,
  url_imagen VARCHAR(255) NULL,
  numero_pronostico VARCHAR(255) NULL,
  fecha VARCHAR(255) NULL,
  PRIMARY KEY(idindex_energetico, edicion_numero),
  INDEX index_energetico_FKIndex1(edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE luna_fuera_curso (
  idluna_fuera_curso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  hora_inicio VARCHAR(255) NULL,
  hora_fin VARCHAR(255) NULL,
  hora_inicio_local VARCHAR(255) NULL,
  hora_fin_local VARCHAR(255) NULL,
  PRIMARY KEY(idluna_fuera_curso, index_energetico_idindex_energetico, index_energetico_edicion_numero),
  INDEX luna_fuera_curso_FKIndex1(index_energetico_idindex_energetico, index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE resultado_energetico (
  idresultado_energetico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  formula_index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  formula_index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  formula_idformula INTEGER UNSIGNED NOT NULL,
  titulo VARCHAR(255) NULL,
  contenido VARCHAR(255) NULL,
  PRIMARY KEY(idresultado_energetico),
  INDEX resultado_energetico_FKIndex1(formula_idformula, formula_index_energetico_idindex_energetico, formula_index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE resultado_energetico_has_terminos (
  resultado_energetico_idresultado_energetico INTEGER UNSIGNED NOT NULL,
  terminos_idterminos INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(resultado_energetico_idresultado_energetico, terminos_idterminos),
  INDEX resultado_energetico_has_terminos_FKIndex1(resultado_energetico_idresultado_energetico),
  INDEX resultado_energetico_has_terminos_FKIndex2(terminos_idterminos)
)
TYPE=InnoDB;

CREATE TABLE semaforo (
  idsemaforo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  rojo VARCHAR(255) NULL,
  amarillo VARCHAR(255) NULL,
  verde VARCHAR(255) NULL,
  rojo_explicacion VARCHAR(255) NULL,
  amarillo_explicacion VARCHAR(255) NULL,
  verde_explicacion VARCHAR(255) NULL,
  pie VARCHAR(255) NULL,
  PRIMARY KEY(idsemaforo, index_energetico_idindex_energetico, index_energetico_edicion_numero),
  INDEX semaforo_FKIndex1(index_energetico_idindex_energetico, index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE signos (
  idsignos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  index_energetico_idindex_energetico INTEGER UNSIGNED NOT NULL,
  index_energetico_edicion_numero INTEGER UNSIGNED NOT NULL,
  descripcion VARCHAR(255) NULL,
  entrante INTEGER UNSIGNED NULL,
  saliente INTEGER UNSIGNED NULL,
  tipo CHAR(1) NULL,
  PRIMARY KEY(idsignos, index_energetico_idindex_energetico, index_energetico_edicion_numero),
  INDEX signos_FKIndex1(index_energetico_idindex_energetico, index_energetico_edicion_numero)
)
TYPE=InnoDB;

CREATE TABLE terminos (
  idterminos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  termino VARCHAR(255) NULL,
  url_termino VARCHAR(255) NULL,
  PRIMARY KEY(idterminos)
)
TYPE=InnoDB;

CREATE TABLE tipo_energias (
  tipo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nombre_energias VARCHAR(255) NULL,
  color VARCHAR(10) NULL,
  PRIMARY KEY(tipo)
)
TYPE=InnoDB;

CREATE TABLE tipo_fechas (
  idtipo_fechas BIGINT(20) NOT NULL AUTO_INCREMENT,
  fechas_idfechas BIGINT(20) NOT NULL,
  descripcion VARCHAR(255) NULL,
  tipo VARCHAR(255) NULL,
  PRIMARY KEY(idtipo_fechas),
  INDEX tipo_fechas_FKIndex1(fechas_idfechas)
)
TYPE=InnoDB;

CREATE TABLE usuarios (
  idusuarios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario VARCHAR NULL,
  clave VARCHAR NULL,
  PRIMARY KEY(idusuarios)
)
TYPE=InnoDB;


