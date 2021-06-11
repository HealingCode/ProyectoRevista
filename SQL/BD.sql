CREATE DATABASE revistas;

USE revistas;

CREATE TABLE usuario(
id_usuario INT NOT NULL AUTO_INCREMENT,
userName VARCHAR(24) NOT NULL,
password VARCHAR(32) NOT NULL,
email VARCHAR(255) NOT NULL,
nombrePila VARCHAR(64) NOT NULL,
apellidoPate VARCHAR(64) NOT NULL,
apellidoMate VARCHAR(64) DEFAULT '',
PRIMARY KEY(id_usuario)
)ENGINE=INNODB;

CREATE TABLE revista(
id INT AUTO_INCREMENT,
nombre VARCHAR(100),
editorial VARCHAR(100),
autor VARCHAR(100),
tema VARCHAR(100),
dir VARCHAR(200),
PRIMARY KEY(id)
);

CREATE TABLE temas(
tema VARCHAR(30),
PRIMARY KEY(tema)
);


INSERT INTO temas VALUES("Ciencia");
INSERT INTO temas VALUES("Biologia");
INSERT INTO temas VALUES("Literatura");
INSERT INTO temas VALUES("Cocina");
