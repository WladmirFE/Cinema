drop database cinema;
CREATE DATABASE cinema;
USE cinema;

CREATE TABLE usuario(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(255),
login VARCHAR(255),
email VARCHAR(255),
senha VARCHAR(255)
);

