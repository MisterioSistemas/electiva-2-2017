CREATE DATABASE juegos;

USE juegos;

CREATE TABLE tblCategorias(id int PRIMARY KEY AUTO_INCREMENT, nombre varchar(50), idCategoriaPadre int);

CREATE TABLE tblJuegos(id int PRIMARY KEY AUTO_INCREMENT, nombre varchar(50), precio decimal, descripcion varchar(500));



CREATE TABLE tblCategoriaDeJuego(id int PRIMARY KEY AUTO_INCREMENT, idJuego int, idCategoria int);

ALTER TABLE tblCategoriaDeJuego ADD FOREIGN KEY (idJuego) REFERENCES tblJuegos(id);

ALTER TABLE tblCategoriaDeJuego ADD FOREIGN KEY (idCategoria) REFERENCES tblCategorias(id);
