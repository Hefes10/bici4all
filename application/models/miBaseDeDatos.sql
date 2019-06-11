DROP DATABASE IF EXISTS bicicleteria;

CREATE DATABASE bicicleteria;
USE bicicleteria;

CREATE TABLE IF NOT EXISTS usuarios(
	id_usuario INTEGER(11) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE KEY,
	usuario VARCHAR(20) NOT NULL UNIQUE KEY,
	password VARCHAR(50) NOT NULL,
	id_perfil INTEGER(10) NOT NULL DEFAULT 2,
	baja VARCHAR(2) NOT NULL DEFAULT 'NO',
	PRIMARY KEY (id_usuario)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS perfiles(
	id_perfil INTEGER(10) NOT NULL AUTO_INCREMENT,
	descripcion VARCHAR(10) NOT NULL,
	PRIMARY KEY (id_perfil)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS productos(
	id_producto INTEGER (10) UNSIGNED NOT NULL AUTO_INCREMENT,
	marca VARCHAR (50) NOT NULL,
	modelo VARCHAR (50) NOT NULL,
	descripcion VARCHAR (200) NOT NULL,
	id_categoria INTEGER (10) NOT NULL,
	precio_costo DOUBLE (10,2) NOT NULL,
	precio_venta DOUBLE (10,2) NOT NULL,
	stock INTEGER (10) NOT NULL DEFAULT 0,
	stock_min INTEGER (10) NOT NULL DEFAULT 0,
	imagen VARCHAR (500),
	eliminado VARCHAR (2),
	PRIMARY KEY (id_producto)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS ventas_cabecera(
	id_venta INTEGER(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	fecha date NOT NULL,
	id_usuario INTEGER(11) NOT NULL,
	total_venta DOUBLE (10,2) NOT NULL,
	PRIMARY KEY (id_venta)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS ventas_detalle(
	id_detalle INTEGER(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	id_venta INTEGER(11) UNSIGNED NOT NULL,
	id_producto INTEGER(11) UNSIGNED NOT NULL,
	cantidad INTEGER(11) UNSIGNED NOT NULL,
	precio DOUBLE (10,2) UNSIGNED NOT NULL,
	total DOUBLE (10,2) UNSIGNED NOT NULL,
	PRIMARY KEY (id_detalle)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS categorias(
	id_categoria INTEGER (10) NOT NULL,
	descripcion VARCHAR (50),
	PRIMARY KEY (id_categoria)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS consultas(
	id_consulta INTEGER (10) NOT NULL,
	nombre VARCHAR (50) NOT NULL,
	email VARCHAR (50) NOT NULL,
	telefono VARCHAR (50),
	consulta VARCHAR (500) NOT NULL,
	eliminado VARCHAR (2) NOT NULL DEFAULT 'NO',
	PRIMARY KEY (id_consulta)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE usuarios
ADD FOREIGN KEY (id_perfil) REFERENCES perfiles(id_perfil);

ALTER TABLE productos
ADD FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria);

ALTER TABLE ventas_cabecera
ADD FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario);

ALTER TABLE ventas_detalle
ADD FOREIGN KEY (id_venta) REFERENCES ventas_cabecera(id_venta);

ALTER TABLE ventas_detalle
ADD FOREIGN KEY (id_producto) REFERENCES productos(id_producto);