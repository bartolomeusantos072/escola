CREATE DATABASE escola;

USE escola;

CREATE TABLE aluno (
    id_alu INT AUTO_INCREMENT PRIMARY KEY,
    nome_alu VARCHAR(255),
    cidade_alu VARCHAR(255),
    tel_alu VARCHAR(15),
    sexo_al CHAR(1),
    email_alu VARCHAR(255)
);
