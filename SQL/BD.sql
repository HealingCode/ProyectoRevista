CREATE DATABASE revistas;

USE revistas;

CREATE TABLE revista(
id INT AUTO_INCREMENT,
nombre VARCHAR(100),
editorial VARCHAR(100),
autor VARCHAR(100),
tema VARCHAR(100),
PRIMARY KEY(id)
);

INSERT INTO revista VALUES('', "Aviones en el mar", "Porrua", "Margarita","Ciencia");
INSERT INTO revista VALUES('', "Prueba ciencia 1", "Porrua", "Juancho", "Ciencia");
INSERT INTO revista VALUES('', "Los monos en el bosque", "EMU", "Juan", "Biologia");
INSERT INTO revista VALUES('', "Pizza con pina es mejor", "Piteseria", "Buen gusto", "Cocina");
INSERT INTO revista VALUES('', "Sin ideas", "Sprite", "Chayan", "Literatura");
