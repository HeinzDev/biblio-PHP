CREATE DATABASE biblioteca
USE biblioteca
CREATE TABLE produto(
`Livro` VARCHAR(30),
`reserva`INT PRIMARY KEY AUTO_INCREMENT,
`Categoria`VARCHAR(30)
);