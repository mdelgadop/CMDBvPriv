--
-- CONFIGURACION
--

DROP TABLE IF EXISTS tipo_red;

CREATE TABLE tipo_red (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into tipo_red(nombre) values ('AP');
insert into tipo_red(nombre) values ('Firewall');
insert into tipo_red(nombre) values ('LoadBalancer');
insert into tipo_red(nombre) values ('Router');
insert into tipo_red(nombre) values ('Switch');

DROP TABLE IF EXISTS marca;

CREATE TABLE marca (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into marca(nombre) values ('A10');
insert into marca(nombre) values ('Cisco');
insert into marca(nombre) values ('Dell');
insert into marca(nombre) values ('EMC');
insert into marca(nombre) values ('Fortigate');
insert into marca(nombre) values ('HP');
insert into marca(nombre) values ('VMWare');

DROP TABLE IF EXISTS criticidad;

CREATE TABLE criticidad (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into criticidad(nombre) values ('Alto');
insert into criticidad(nombre) values ('Medio');
insert into criticidad(nombre) values ('Bajo');

DROP TABLE IF EXISTS familia_so;

CREATE TABLE familia_so (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into familia_so(nombre) values ('Linux');
insert into familia_so(nombre) values ('Windows');
insert into familia_so(nombre) values ('Mac');

DROP TABLE IF EXISTS status;

CREATE TABLE status (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into status(nombre) values ('En producción');
insert into status(nombre) values ('No en producción');
insert into status(nombre) values ('Obsoleto');
insert into status(nombre) values ('En inventario');

DROP TABLE IF EXISTS tipo_software;

CREATE TABLE tipo_software (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into tipo_software(nombre) values ('Servidor de BD');
insert into tipo_software(nombre) values ('Middleware');
insert into tipo_software(nombre) values ('Software PC');
insert into tipo_software(nombre) values ('Servidor Web');
insert into tipo_software(nombre) values ('Otro');

DROP TABLE IF EXISTS clase_software;

CREATE TABLE clase_software (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  proveedor VARCHAR(255) NOT NULL,
  version VARCHAR(255) NOT NULL,
  tipo_software BIGINT NULL, --tipo_software
  ruta VARCHAR(255) NOT NULL,
  puesto_en_produccion DATE NULL,
  descripcion VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS tipo_documento;

CREATE TABLE tipo_documento (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into tipo_documento(nombre) values ('Procedimiento');
insert into tipo_documento(nombre) values ('Contrato');

--
-- OTHER
--

DROP TABLE IF EXISTS organizacion;

CREATE TABLE organizacion (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  activo VARCHAR(1) NULL,
  codigo VARCHAR(255) NULL,
  padre BIGINT NULL, --organizacion
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS localizacion;

CREATE TABLE localizacion (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  activo VARCHAR(1) NULL,
  ciudad VARCHAR(255) NOT NULL,
  pais VARCHAR(255) NOT NULL,
  direccion VARCHAR(255) NOT NULL,
  organizacion BIGINT NULL, --organizacion
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS documentos;

CREATE TABLE localizacion (
  id BIGINT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  organizacion BIGINT NULL, --organizacion
  activo VARCHAR(1) NULL,
  descripcion VARCHAR(255) NOT NULL,
  tipo_documento BIGINT NULL, --tipo_documento
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Software
--

DROP TABLE IF EXISTS software;

CREATE TABLE software (
  id BIGINT NOT NULL AUTO_INCREMENT,
  tipo_software BIGINT NULL, --tipo_software
  nombre VARCHAR(255) NOT NULL,
  organizacion BIGINT NULL, --organizacion
  status BIGINT NULL, --status
  criticidad BIGINT NULL, --criticidad
  clase_software BIGINT NULL, --clase_software
  puesto_en_produccion DATE NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
